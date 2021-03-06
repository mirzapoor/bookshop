<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WritersRequest;
use App\Http\Requests;
use App\WritersModel;
use Auth;
class WriterController extends Controller
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
        $writer=WritersModel::orderby('id','desc')->paginate(6);

        return view('admin.writer.index',['writer'=>$writer]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('admin.writer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WritersRequest $request)
    {
        $writer = new WritersModel($request->all());
        if ($writer->save()){
            return redirect()->back();
        }
        else{
            return redirect()->back();
        }
        //
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
        $record =WritersModel::find($id);
        return view('admin.writer.edit',['record' =>$record]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WritersRequest $request, $id)
    {
        //
        $edit=WritersModel::find($id);
        if($edit->update($request->all())){
            return redirect('admin/writer');
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
        $delete =WritersModel::find($id)->delete();
        return redirect('admin/writer');
    }
}
