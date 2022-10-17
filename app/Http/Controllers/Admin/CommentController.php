<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User;

class CommentController extends Controller
{
    protected $comment;
    protected $user;


    public function __construct(Comment $comment, User $user)
    {
        $this->comment = $comment;
        $this->user = $user;
    }

    public function index($user_id)
    {
        if (!$user = $this->user->find($user_id))
        {
            return redirect()->back();
        }

        $comments = $user->comments()->get();

        return view('users.comments.index', compact('user', 'comments'));
    }

    public function create($user_id)
    {
        if (!$user = $this->user->find($user_id))
        {
            return redirect()->back();
        }

        $comments = $user->comments()->get();

        return view('users.comments.create', compact('user', 'comments'));
    }

    public function store(Request $request, $user_id)
    {
        if (!$user = $this->user->find($user_id))
        {
            return redirect()->back();
        }

        $user->comments()->create([
            'body' => $request->body,
            'visible' => isset($request->visible)
        ]);

        return redirect()->route('comments.index', $user->id);
    }
}
