<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


// CRUD III

class CommentController extends Controller
{
// CRUD ZA DODAVANJE

    public function create() {
    return view('user.comments-create');
}

    public function store(Request $request)
    {

        Comment::create([
            'user_id' => Auth::id(),
            'tekst' => $request->tekst,
        ]);

        return redirect()->route('user.comments');
    }

    // LISTA KOMENTARA

     public function comments(){
         $comments = Comment::where('user_id', Auth::id())->get();
        
        return view('user.comments', compact('comments'));
       }
       
// CRUD ZA BRISANJE

    public function destroy($id)
    {
        $comment = Comment::where('user_id', Auth::id())->findOrFail($id);
        $comment->delete();

        return redirect()->route('user.comments');
    }

            
    public function edit($id)
        {
            $comment = Comment::where('user_id', Auth::id())->findOrFail($id);
            return view('user.edit-comment', compact('comment'));
        }

// CRUD ZA EDIT

    public function update(Request $request, $id)
    {
        $request->validate([
            'tekst' => 'required|string|max:1000',
        ]);

        $comment = Comment::where('user_id', Auth::id())->findOrFail($id);
        $comment->tekst = $request->tekst;
        $comment->save();

        return redirect()->route('user.comments');
    }

 



}
