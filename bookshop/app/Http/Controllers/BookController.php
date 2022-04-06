<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BooksModel;
use App\SubjectsModel;
use App\ChaphkonehsModel;
use App\WritersModel;
use App\MotarjemsModel;
use App\PakhshModel;
use App\MoalefBooksModel;
use App\BookMotarjemModel;
use App\PakhshBooksModel;
use App\CountPrintsModel;
use App\Http\Requests;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = BooksModel::orderby('id','desc')->paginate(10);
        return view('admin.books.index',['books'=>$books ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $chaps =['-'=>'چاپخانه را انتخاب کنید.'] + ChaphkonehsModel::
        orderby('id','desc')->pluck('name_chapkhonehs','id')->toArray();
        $subjects =['-'=>'موضوع را انتخاب کنید.'] + SubjectsModel::
        orderby('id','desc')->pluck('name_subjects','id')->toArray();
        $writers = WritersModel::orderby('id','desc')->get();
        $motarjems= MotarjemsModel::orderby('id','desc')->get();
        $pakhsh= PakhshModel::orderby('id','desc')->get();

       
        $available ="در انبار موجود هست .";
        $unavailable = "در انبار موجود نیست.";
        $SalesAreProhibited = "کاربران اجازه خریده ندارند" ;
        $specialSale = "کتاب در فروش ویژه قرار گرفته" ;
        $unknown = "نامعلوم";

        $state = ['0'=> $available , '1' => $unavailable ,
         '2'=>$SalesAreProhibited , '3'=> $specialSale ,''=>$unknown];

        return View('admin.books.create',
                                        ['chaps'=>$chaps,
                                        'subjects'=>$subjects,
                                        'writers'=>$writers,
                                        'motarjems'=>$motarjems,
                                        'pakhsh'=>$pakhsh,
                                        'state'=> $state
                                    ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $book = new BooksModel($request->all());
        $book->id_users=1;
        $book->view_book =0;
        $title = str_replace('-','',$request->name_book);
        $book->url_book = preg_replace('/\s+/','-',$title);

        if ($request->hasfile('imgbook')){
            $FileName =time().'.'.$request->file('imgbook')->getClientOriginalExtension();
            if($request->file('imgbook')->move('assets/img/imagebook',$FileName)){
                  $book->img_book=$FileName;
            }
        }
        if($book->save() ){
            if($request->has('writer')){
                foreach($request->get('writer') as $key=>$value){
                    $moalefbook =MoalefBooksModel::create(['id_books'=>$book->id,'id_moalef'=>$value]);
                } 
            }
           
            if($request->has('motarjem')){
                foreach($request->get('motarjem') as $key=>$value){
                    $motarjembook =BookMotarjemModel::create(['id_book'=>$book->id,
                    'id_motarjems'=>$value]);
                } 
            }
            if($request->has('pakhshselect')){
                foreach($request->get('pakhshselect') as $key=>$value){
                    $pakhshbook =PakhshBooksModel::create(['id_book'=>$book->id,
                    'id_pakhsh'=>$value]);
                } 
            }
            $countprint= CountPrintsModel::create([
                                                    'count_countprints'=>$request->count_countprints,
                                                    'fasle_countprints'=>$request->fasle_countprints,
                                                    'year_countprints'=>$request->year_countprints,
                                                    'moneth_countprints'=>$request->moneth_countprints,
                                                    'countbook_countprints'=>$request->countbook_countprints,
                                                    'details_countprints'=>$request->details_countprints,
                                                    'id_books'=>$book->id,
                                            ]);
        return ('admin/books');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $chaps =['-'=>'چاپخانه را انتخاب کنید.'] + ChaphkonehsModel::
        orderby('id','desc')->pluck('name_chapkhonehs','id')->toArray();
        $subjects =['-'=>'موضوع را انتخاب کنید.'] + SubjectsModel::
        orderby('id','desc')->pluck('name_subjects','id')->toArray();
        $writers = WritersModel::orderby('id','desc')->get();
        $motarjems= MotarjemsModel::orderby('id','desc')->get();
        $pakhsh= PakhshModel::orderby('id','desc')->get();

        $record = BooksModel::find($id);

        $available ="در انبار موجود هست .";
        $unavailable = "در انبار موجود نیست.";
        $SalesAreProhibited = "کاربران اجازه خریده ندارند" ;
        $specialSale = "کتاب در فروش ویژه قرار گرفته" ;

        $state = ['0'=> $available , '1' => $unavailable , '2'=>$SalesAreProhibited , '3'=> $specialSale];


        return View('admin.books.edit',
        ['record'=>$record,
        'chaps'=>$chaps,
        'subjects'=>$subjects,
        'writers'=>$writers,
        'motarjems'=>$motarjems,
        'pakhsh'=>$pakhsh,

        'state'=>$state
    ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $book =  BooksModel::find($id);
        $title = str_replace('-','',$request->name_book);
        $book->url_book = preg_replace('/\s+/','-',$title);

        if ($request->hasfile('imgbook')){
            $FileName =time().'.'.$request->file('imgbook')->getClientOriginalExtension();
            if($request->file('imgbook')->move('assets/img/imagebook',$FileName)){
                  $book->img_book=$FileName;
            }
        }
        if($book->update($request->all()) ){
            if($request->has('writer')){
                $delete =MoalefBooksModel::where('id_books',$id)->delete();
                foreach($request->get('writer') as $key=>$value){
                    $moalefbook =MoalefBooksModel::create(['id_books'=>$book->id,'id_moalef'=>$value]);
                } 
            }
            
            if($request->has('motarjem')){
                $delete2 = BookMotarjemModel::where('id_book',$id)->delete();
                foreach($request->get('motarjem') as $key=>$value){
                    $motarjembook =BookMotarjemModel::create(['id_book'=>$book->id,
                    'id_motarjems'=>$value]);
                } 
            }
            if($request->has('pakhshselect')){
                $delete3 = PakhshBooksModel::where('id_book',$id)->delete();

                foreach($request->get('pakhshselect') as $key=>$value){
                    $pakhshbook =PakhshBooksModel::create(['id_book'=>$book->id,
                    'id_pakhsh'=>$value]);
                } 
            }
            
        return redirect('admin/books');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $delete =MoalefBooksModel::where('id_books',$id)->delete();
        $delete3 = PakhshBooksModel::where('id_book',$id)->delete();
        $delete2 = BookMotarjemModel::where('id_book',$id)->delete();
        $delete4 = CountPrintsModel::where('id_books',$id)->delete();
        $delete5 = BooksModel::where('id',$id)->delete();
        return redirect('admin/books');



    
    }
}