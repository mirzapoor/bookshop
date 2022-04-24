<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubjectsModel;
use App\BooksModel;
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

    public function single($url){
        var_dump($url);
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
