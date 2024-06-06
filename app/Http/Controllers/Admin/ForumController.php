<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index(Forum $forum)
    {
        $forums = $forum->all();

        return view('admin.forum.index', ['forums' => $forums]);
    }

    public function form()
    {
        return view('admin.forum.form');
    }

    public function cadastrar(Request $request, Forum $forum)
    {
        $data = $request->all();
        $data['status'] = 'a';

        $forum->create($data);

        return redirect()->route('forum.index');
    }
}
