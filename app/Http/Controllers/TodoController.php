<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    // 表示
    public function index()
    {
        $items = Todo::all();


        return view('todo.index',['items'=>$items]);
    }
    // 追加

    public function create(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $todo = new Todo;
        $form = $request->all();
        unset($form['_token_']);
        $todo->fill($form)->save();
        return redirect('/');
    }

// 更新

        public function update(Request $request)
        {
            $this->validate($request, Todo::$rules);
            $todo = Todo::find($request->id);
            $form = $request->all();
            unset($form['_token_']);
            $todo->fill($form)->save();
            return redirect('/');
        }
// 削除
        public function delete(Request $request)
        {
            Todo::find($request->id)->delete();
            return redirect('/');
        }
}
