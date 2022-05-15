<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CallMeModel;
use App\Http\Requests;
use Auth;
class TicketController extends Controller
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
        $ticket = CallMeModel::orderby('id','desc')->paginate(20);
        return View('admin.tickets.index',['ticket'=>$ticket]);
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

    public function ansewerget( $id )
    {
        $tick = CallMeModel::find( $id );
        return View('admin.tickets.edit',['tick'=>$tick]);
    }

    public function ansewer( Request $request )
    {
        $tick = CallMeModel::find( $request->id_ticket );
        $tick->ansewer = $request->answer;
        $tick->state = '1';
        if ( $tick->update() ) {
            return redirect('admin/ticket');
        }
    }
}
