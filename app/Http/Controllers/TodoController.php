<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $items = Todo::all();


        return view('todo.index',['items'=>$items]);
    }
    public function add(Request $request)
    {
        $item = $request->content('index');
        return view('todo.index',
        ['items'=>items]);
    }
    public function create(Request $request)
    {

        $form = $request->all();
        Todo::create($form);
        return redirect('/');
    }
}
