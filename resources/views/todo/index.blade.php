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
            <div class="todo">
                {{-- 追加 --}}
                <form action="/add" method="post">
                    @csrf
                    <input type="text" name="content" value="">
                    <input type="submit" value="追加">
                </form>
                <table>
                    <tr>
                        <th>作成日</th>
                        <th>タスク名</th>
                        <th>更新</th>
                        <th>削除</th>
                    </tr>
                    {{-- 表示 --}}
                    <tr>

                        @foreach ($items as $item)
                    <tr>
                        <td>
                            {{$item ->created_at}}
{{-- テキストで表示 --}}

                            {{$item ->update_at}}</td>


                            <td>


                                {{$item ->content}}
                            </td>
                          <td>
{{-- 更新 --}}

                            <form action="/edit" method="POST">
                                 @csrf
                            <input type="submit" name="up_date" value="更新">
                            </form>
                        </td>
                        {{-- 削除 --}}
                    <td>

                        <form action="/delete" method="POST">
                            @csrf
                            <input type="submit" name="delete" value="削除">
                        </td>
                    </form>
                        @endforeach

                    </tr>






                </table>
        </div>
    </div>




</body>
</html>
