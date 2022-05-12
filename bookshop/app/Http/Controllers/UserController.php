<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;


use App\Http\Requests\UserRequest;
class UserController extends Controller
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
        $users =User::orderby('id','desc')->paginate(10);
        return view('admin.users.index',['users'=>$users]);
    }

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $subscriber = "کاربر مشترک";
        $management  = "مدیریت";
        $role ='نقش خود را انتخاب کنید.';
        $roles = ['-'=>$role,'0'=>$subscriber,'1'=>$management];

        return view('admin.users.create',['roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        //
        $new = new User($request->all());
        if ($request->hasfile('imguser')){
            $FileName =time().'.'.$request->file('imguser')->getClientOriginalExtension();
            if($request->file('imguser')->move('assets/imageuser',$FileName)){
                  $new->password =bcrypt($request->password);
                  $new->img=$FileName;
                if($new->save()){
                        return redirect('admin/users');
                }
            }
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
        $subscriber = "کاربر مشترک";
        $management  = "مدیریت";
        $role ='نقش خود را انتخاب کنید.';
        $roles = ['-'=>$role,'0'=>$subscriber,'1'=>$management];
        $record = User::find($id);

        return view('admin.users.edit',['roles'=>$roles,'record' =>$record]);
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
        $edit=User::find($id);
        if ($request->hasFile('imguser'))
        {
            $FileName =time().'.'.$request->file('imguser')->getClientOriginalExtension();
            if($request->file('imguser')->move('assets/imageuser',$FileName))
            {
                  $edit->img=$FileName;
            }
        }
        
        if($request->has('password2'))
        {
            $edit->password =bcrypt($request->password2);
        }
        
        if($edit->update($request->all()))
        {
            return redirect('admin/users');
        }
        else{
            return redirect()->back();
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
        $delete =User::find($id)->delete();
        return redirect('admin/users');
    }
}