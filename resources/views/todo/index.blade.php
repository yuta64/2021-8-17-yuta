<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/reste.css">
    <link rel="stylesheet" href="/css/style.css">
</head>


<body>
    <div class="container">
        <div class="card">
            <p class="title_todo">Todo List </p>
{{-- エラー表示 --}}
            @if (count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif
            <div class="todo">
{{-- 追加 --}}
                <form action="/todo/create" method="post" class="flex between mb-30">
                    @csrf
                    <input type="text" name="content"  class="input-add">
                    <input type="submit" class="button-add" value="追加">
                </form>
                <table>
                    <tr>
                        <th>作成日</th>
                        <th>タスク名</th>
                        <th>更新</th>
                        <th>削除</th>
                    </tr>
                    <tr>
                        {{-- 表示 --}}

                        @foreach ($items as $item)
                    <tr>
                        <td>
                            {{$item ->created_at}}

                        </td>

                        <form action="{{ route('todo.update', ['id' => $item->id] )}}" method="post">
                            @csrf
                            <td>
                                <input type="text" class="input-update" value="{{$item->content }}" name="content">
                            </td>
                            <td>
                                <button class="button-update">更新 </button>
                            </td>
                        </form>
                        <td>

                            <form action="{{ route('todo.delete', ['id' =>$item->id]) }}" method="post">
                                @csrf
                                <button class="button-delete">削除 </button>
                            </form>
                        </td>

                    </tr>

                    @endforeach


                </table>
            </div>
        </div>
            </div>
        </div>

</body>
</html>
