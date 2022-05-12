<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CommentsModel;
use App\Http\Requests;
// use Auth;
class CommentController extends Controller
{
    // public function __construct()
    // {
    //     if ( Auth::check() ) {
    //         $this->middleware('AdminMiddle');
    //     }else{
    //         $this->middleware('auth');
    //     }
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comments = CommentsModel::orderby('id','desc')->paginate(15);
        return View('admin.comment.index',['comments'=>$comments]);
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
        $comment = new CommentsModel();
        $comment->name_comments = Auth::user()->fname;
        $comment->lname_comments = Auth::user()->lname;
        $comment->email_comments = Auth::user()->email;
        $comment->content_comments = $request->answer;
        $comment->replaye_comments = $request->id_comment;
        $comment->id_books = $request->id_books;
        $comment->state = '1';

        if ( $comment->save() ) {

            $oldcomment = CommentsModel::find( $request->id_comment );
            $oldcomment->state = '1';
            if ( $oldcomment->update() ) {
                return redirect('admin/comments');
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
        $delete = CommentsModel::find( $id )->delete();
        return redirect('admin/comments');
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
        
        $comment = CommentsModel::find( $id );
        return View('admin.comment.edit',['comment'=>$comment]);
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

    public function success( $id )
    {
        $comment = CommentsModel::find( $id );
        $comment->state = '1';
        if ( $comment->update() ) {
            return redirect('admin/comments');
        }
    }
}
