<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PakhshRequest;
use App\PakhshModel;

class PakhshController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pakhsh=PakhshModel::orderby('id','desc')->paginate(6);
        //
        return view('admin.pakhsh.index',['pakhsh'=>$pakhsh]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pakhsh.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PakhshRequest $request)
    {
        $pakhsh = new PakhshModel($request->all());
        if ($pakhsh->save()){
            return redirect('admin/pakhsh');
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
        $record =PakhshModel::find($id);
        return view('admin.pakhsh.edit',['record' =>$record]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PakhshRequest $request, $id)
    {
        //
        $edit=PakhshModel::find($id);
        if($edit->update($request->all())){
            return redirect('admin/pakhsh');
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
     
        $delete =PakhshModel::find($id)->delete();
        return redirect('admin/pakhsh');
    }
}
