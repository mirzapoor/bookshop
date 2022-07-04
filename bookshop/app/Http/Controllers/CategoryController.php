<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\SubjectsModel;
use App\Http\Requests\CategoryRequest;
use  App\Requests;
use auth;

class CategoryController extends Controller
{

    public function __construct()
    {
        if ( Auth::check() ) {
            $this->middleware('AdminMiddle');
        }else{
            $this->middleware('auth');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categorys = SubjectsModel::orderBy('id','desc')->paginate(10);
        return view('admin.category.index',['categorys'=>$categorys]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category =['-'=>'نام دسته مادر را انتخاب کنید.']+
         SubjectsModel::where('replay_subjects','-')->
        orderBy('id','desc')->pluck('name_subjects','id')->toArray();
        return view('admin.category.create',['category'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        //
        $category = new SubjectsModel($request->all());
        if($category->save()){
            return redirect()->back();
        }
        else{
            return redirect()->back();
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
        $category =['-'=>'نام دسته مادر را انتخاب کنید.']+ SubjectsModel::
        where('replay_subjects',
        '-')->orderBy('id','desc')->pluck('name_subjects','id')->toArray();
        $record =SubjectsModel::find($id);

        return view('admin.category.edit',['category'=>$category,'record' =>$record]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        //
        $edit=SubjectsModel::find($id);
        if($edit->update($request->all())){
            return redirect('admin/category');
        }
        else{

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
           $get = SubjectsModel::where('replay_subjects',$id)->get();
           foreach($get as $value)
            {

                $update =SubjectsModel::where('id',$value->id)->update(['replay_subjects'=>'-']);
            }
          $delete =SubjectsModel::find($id)->delete();
          return redirect('admin/category');
    }
}