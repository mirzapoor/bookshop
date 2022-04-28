<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubjectsModel;
use App\BooksModel;
use App\MoalefBooksModel;
use App\BookMotarjemModel;
use App\PakhshBooksModel;
use App\CountPrintsModel;
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

        return view('index.index',
                        ['category'=>$category ,
                        'newcontent'=>$newcontent, 
                        'newcontent2'=>$newcontent2,
                        'favoriteBook'=>$favoriteBook
                    ]);
    }

    public function category($category){
        var_dump($category);
    }

    
    public function single( $url )
    { 

        $category = SubjectsModel::where('replay_subjects','-')->orderby('id','desc')->get();
        $record = BooksModel::where('url_book',$url)->orderby('id','desc')->first();

        $moalefs = MoalefBooksModel::where('id_books',$record->id)->get();

        $motarjems = BookMotarjemModel::where('id_book',$record->id)->get();

        $pakhshs = PakhshBooksModel::where('id_book',$record->id)->get();

        $countprint = CountPrintsModel::where('id_books',$record->id)->orderby('id','desc')->first();

        // $comments = CommentModel::where(['id_books'=>$record->id,'replaye_comments'=>'-','state'=>1])->get();

        $record->view_book += 1;

        if ( $record->update() ) {
            
            return View('index.single',['category'=>$category,'record'=>$record,'moalefs'=>$moalefs,'motarjems'=>$motarjems,
            'pakhshs'=>$pakhshs,'countprint'=>$countprint]);
         } 
    }


    public function addCart(Request $request)
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
        $value =Session::get('cart');
        var_dump($value);


        
    }

    public function shop()
    {
        $category = SubjectsModel::where('replay_subjects','-')->orderby('id','desc')->get();
        $order_date= BooksModel::orderby('id','desc');
        $books = BooksModel::orderby('id','desc')->paginate(6);
        return View('index.shop',['category'=>$category,'books'=>$books ,'order_date'=> $order_date]);
    }
}
