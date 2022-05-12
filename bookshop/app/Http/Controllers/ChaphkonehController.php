<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ChaphkonehsRequest;
use App\ChaphkonehsModel;
use  App\Requests;
use Auth;

class ChaphkonehController extends Controller
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
        $chaphkoneh=ChaphkonehsModel::orderby('id','desc')->paginate(6);
        return view('admin.chaphkoneh.index',['chaphkoneh'=>$chaphkoneh]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.chaphkoneh.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChaphkonehsRequest $request)
    {
        //
        $chaphkoneh = new ChaphkonehsModel($request->all());
        if ($chaphkoneh->save()){
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
        $record =ChaphkonehsModel::find($id);
        return view('admin.chaphkoneh.edit',['record' =>$record]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ChaphkonehsRequest $request, $id)
    {
        //
        $edit=ChaphkonehsModel::find($id);
        if($edit->update($request->all())){
            return redirect('admin/chaphkoneh');
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
        $delete =ChaphkonehsModel::find($id)->delete();
        return redirect('admin/chaphkoneh');
    }
}
