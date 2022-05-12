<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TicketRequest;
use App\Http\Requests;
use App\CallMeModel;
use Auth;

class UserPanelTicketController extends Controller
{


    public function __construct()
    {
        if ( Auth::check() ) {
            $this->middleware('UserMiddle');
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
        $tickets = CallMeModel::where('email',Auth::user()->email)->orderby('id','desc')->get();
        return View('users.ticket.index',['tickets'=>$tickets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $olv = [1=>'اولویت کم',2=>'اولویت متوسط',3=>'اولویت زیاد'];
        return View('users.ticket.create',['olv'=>$olv]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TicketRequest $request)
    {
        $call = new CallMeModel( $request->all() );
        $call->fname = Auth::user()->fname;
        $call->lname =  Auth::user()->lname;
        $call->email = Auth::user()->email;
        $call->date = time();
        $call->ansewer = '-';
        $call->state = '0';

        if ( $call->save() ) {
            return redirect('/user/ticket');
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
}
