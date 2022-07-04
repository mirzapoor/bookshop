<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubjectsModel;
use App\BooksModel;
use App\MoalefBooksModel;
use App\BookMotarjemModel;
use App\PakhshBooksModel;
use App\CountPrintsModel;
use App\CommentsModel;
use App\SefareshatsModel;
use App\ContentSefareshsModel;
use App\lib\Bitpay;
use Auth;

Use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $category = SubjectsModel::where('replay_subjects','-')->orderby('id','desc')->get();
       
        $newcontent =BooksModel::orderby('id','desc')->take(5)->get();
        $newcontent2 =BooksModel::orderby('id','desc')->skip(5)->take(5)->get();
        $favoriteBook =BooksModel::orderby('view_book','desc')->take(5)->get();
        $comment =CommentsModel::orderby('id','desc')->take(5)->get();
        // $comment = CommentsModel::orderby('state','desc')->get();

        return view('index.index',
                        ['category'=>$category ,
                        'newcontent'=>$newcontent, 
                        'newcontent2'=>$newcontent2,
                        'favoriteBook'=>$favoriteBook,
                        'comment'=>$comment
                    ]);
    }
    public function category($category){
        var_dump($category);
    }
    public function shop()
    {
        $category = SubjectsModel::where('replay_subjects','-')->orderby('id','desc')->get();
        $order_date= BooksModel::orderby('id','desc');
        $books = BooksModel::orderby('id','desc')->paginate(12);
        return View('index.shop',['category'=>$category ,'order_date'=> $order_date ,'books'=>$books]);
    }
    public function single( $url )
    { 
        $category = SubjectsModel::where('replay_subjects','-')->orderby('id','desc')->get();
        $record = BooksModel::where('url_book',$url)->orderby('id','desc')->first();
        $moalefs = MoalefBooksModel::where('id_books',$record->id)->get();
        $motarjems = BookMotarjemModel::where('id_book',$record->id)->get();
        $pakhshs = PakhshBooksModel::where('id_book',$record->id)->get();
        $countprint = CountPrintsModel::where('id_books',$record->id)->orderby('id','desc')->first();
        $comments = CommentsModel::where(['id_books'=>$record->id,'replaye_comments'=>'-','state'=>1])->get();
        $recomments = CommentsModel::where(['replaye_comments' =>$record->id, 'state' => 1])->get();
        $record->view_book += 1;
        if ( $record->update() ) {
            return View('index.single',['category'=>$category,'record'=>$record,'moalefs'=>$moalefs,'motarjems'=>$motarjems,
            'pakhshs'=>$pakhshs,'countprint'=>$countprint,'comments'=>$comments,'recomments'=>$recomments]);
         } 
    }
    public function add(Request $request)
    {
        if(Session::has('cart')){
            $cart = Session::get('cart') ;
            if(array_key_exists($request->id_book,$cart)){
                $cart[$request->id_book]++;
            }
            else{
                $cart[$request->id_book]=1;
            }
            Session::put('cart',$cart);
        }
        else{
            $cart = array();
            $cart[$request->id_book]=1;
            Session::put('cart',$cart);
        }
        return View('index.cart');
    }
    public function delete(Request $request){
        $cart = Session::get('cart');
        Session::forget('cart');
        $cart2 = array();
        foreach($cart as $key=>$value){
            if($key != $request->id_book)
                {
                    $cart2[$key] = $value;
                }
                else
                {
                    $count = $cart[$request->id_book]-1;
                    if($count == 0)
                    {

                    }
                    else
                    {
                        $cart2[$request->id_book] =$count;
                    }
                }
        }

        Session::put('cart',$cart2);
        return view('index.cart');
    }
    public function empty_cart(){
        Session::forget('cart');
        return view('index.cart');
    }
    

    public function about()
    {
        $category = SubjectsModel::where('replay_subjects','-')->orderby('id','desc')->get();
        $order_date= BooksModel::orderby('id','desc');
        $books = BooksModel::orderby('id','desc')->paginate(6);
        return View('index.about',['category'=>$category,'books'=>$books ,'order_date'=> $order_date]);
    }

    public function comment( Request $request )
    {
        $comment = new CommentsModel( $request->all() );
        $comment->replaye_comments = '-';
        $comment->state = '0';

        $url = BooksModel::where('id',$request->id_books)->first()['url_book'];
        if ( $comment->save() ) {
            return redirect( '/book/'.$url );
        }else{
            return redirect( '/book/'.$url );
        }
    }

    public function checkout()
    {
        $category = SubjectsModel::where('replay_subjects','-')->orderby('id','desc')->get();
        return View('index.checkout',['category'=>$category]);
    }
    
    public function checkoutstep2()
    {
        $category = SubjectsModel::where('replay_subjects','-')->orderby('id','desc')->get();
        return View('index.checkout-step2',['category'=>$category]);
    }
    public function checkoutstep3()
    {
        $category = SubjectsModel::where('replay_subjects','-')->orderby('id','desc')->get();
        return View('index.checkout-step3',['category'=>$category]);
    }

    public function savecheckout( Request $request )
    {
        $category = SubjectsModel::where('replay_subjects','-')->orderby('id','desc')->get();

        $sef = new SefareshatsModel( $request->all() );
        $sef->codepaygiry_sefareshats = 'pay'.time();
        $sef->codesefsresh_sefareshats = time();
        $sef->state = 0;
        if ( $sef->save() ) {
            return View('index.checkout-step3',['sef'=>$sef],['category'=>$category]);
        }
    }

 
    public function success( $id )
    {

        $price = 0;
        foreach ( Session::get('cart') as $key=>$value )
        {
            $content = ContentSefareshsModel::create(['id_sefareshats'=>$id,'id_books'=>$key,'count'=>$value]);

            $price+= BooksModel::where('id',$key)->first()['price_book']* $value;
        }
        
        Session::forget('cart');

        $sefaresh = SefareshatsModel::find($id);
        $sefaresh->state = 0;
        $sefaresh->price = $price;
        if ( $sefaresh->update() ) {

            $url = 'http://bitpay.ir/payment-test/gateway-send'; 
            $api = 'adxcv-zzadq-polkjsad-opp13opoz-1sdf455aadzmck1244567';
            $amount = $price;
            $redirect = 'http://localhost:8000/buyback';
            $name = $sefaresh->name_sefareshats;
            $email = $sefaresh->email_sefareshats;
            $description = $sefaresh->address_sefareshats;
            $factorId = $id;

            $result = Bitpay::send($url,$api,$amount,$redirect,$factorId,$name,$email,$description);
            
            if( $result > 0 && is_numeric($result) )
            {
                Session::put('id_sefareshats',$id);
                return redirect('http://bitpay.ir/payment-test/gateway-'.$result);


            }else if ( $result == -1 ) {
                # code...
            }else{
                var_dump( $result );
            }


        }
    }
    public function buy()
    {
        $url = 'http://bitpay.ir/payment-test/gateway-send'; 
        $api = 'adxcv-zzadq-polkjsad-opp13opoz-1sdf455aadzmck1244567';
        $amount = 1000;
        $redirect = 'http://localhost:8000';
        $name = 'testname';
        $email = 'test@yahoo.com';
        $description = 'test content';
        $factorId = 1;

        $result = Bitpay::send($url,$api,$amount,$redirect,$factorId,$name,$email,$description);
        
        if( $result > 0 && is_numeric($result) )
        {

            return redirect('http://bitpay.ir/payment-test/gateway-'.$result);


        }else if ( $result == -1 ) {
            # code...
        }else{
            var_dump( $result );
        }


    }

    public function buypost( Request $request )
    {
        $url = 'http://bitpay.ir/payment-test/gateway-result-second'; 
        $api = 'adxcv-zzadq-polkjsad-opp13opoz-1sdf455aadzmck1244567';
        $trans_id = $request->trans_id; 
        $id_get = $request->id_get;

        $sefaresh = SefareshatsModel::find(Session::get('id_sefaresh'));
        $sefaresh->id_get = $id_get;
        $sefaresh->trans_id = $trans_id;

        $result = Bitpay::get($url,$api,$trans_id,$id_get); 

        if ( $result == 1 ) {
            $sefaresh->state = 1;
            if ( $sefaresh->update() ) {
                Session::forget('id_sefaresh');
                return redirect('/');
            }
        
        }
        


    }


    public function search( Request $request )
    {
        $category = SubjectsModel::where('replay_subjects','-')->orderby('id','desc')->get();
        $books = BooksModel::where('name_book','LIKE','%'.$request->search.'%')->orderby('id','desc')->paginate(12);
        return View('index.shop',['category'=>$category,'books'=>$books]);
    }
   

   
}