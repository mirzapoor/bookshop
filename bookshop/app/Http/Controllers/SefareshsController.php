<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SefareshatsModel;
use App\Http\Requests;
use Auth;
class SefareshsController extends Controller
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
        $sefr = SefareshatsModel::orderby('id','desc')->paginate(20);
        return View('admin.sefareshs.index',['sefr'=>$sefr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $sefaresh = SefareshatsModel::find( $id );
        return View('admin.sefareshs.show',['sefaresh'=>$sefaresh]);
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
    }

    public function editstate( $idsefaresh , $idstate )
    {
       $update = SefareshatsModel::find( $idsefaresh );
       $update->state = $idstate;
       if ( $update->update() ) {
           return redirect('admin/sefareshs');
       }
    }
}