<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubjectsModel;
use App\BooksModel;

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
}
