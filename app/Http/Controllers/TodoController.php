<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    // 表示
    public function index()
    {
        $items = Todo::all();


        return view('todo.index',['items'=>$items]);
    }
    // 追加
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

// 更新
        public function edit(Request $request)
        {
            $todo = Todo::find($request->content);
            return view('todo.index',['form'=>$todo]);
        }
        public function up_date(Request $request)
        {

            $form = $request->all();

            Todo::where('content',$request->content)->update($form);
            return redirect('/');
        }
// 削除
        public function delete(Request $request)
        {
            $todo = Todo::find($request->content);
            return view('todo.index',['form'=>$todo]);
        }
        public function remove(Request $request)
        {
            Todo::find($request->content)->delete();
            return redirect('/');
        }

}
