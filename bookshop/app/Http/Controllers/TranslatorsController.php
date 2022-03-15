<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TranslatorsRequest;
use App\MotarjemsModel;
class TranslatorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $translator=MotarjemsModel::orderby('id','desc')->paginate(6);
        return view('admin.translator.index',['translator'=>$translator]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.translator.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TranslatorsRequest $request)
    {
        //
        $translator = new MotarjemsModel($request->all());
        if ($translator->save()){
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
        $record =MotarjemsModel::find($id);
        return view('admin.translator.edit',['record' =>$record]);
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
        $edit=MotarjemsModel::find($id);
        if($edit->update($request->all())){
            return redirect('admin/translator');
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
        $delete =MotarjemsModel::find($id)->delete();
        return redirect('admin/translator');
    }
}