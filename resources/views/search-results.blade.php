<!DOCTYPE html>
<html>

<head>
    <title>Search Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                Records
            </div>
            <div class="card-body">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>POST TITLE</th>
                            <th>CONTENT</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($posts)>0)
                        @foreach($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->content}}</td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
                @if(count($posts)==0)
                <h7>Data not found</h7>
                @endif
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</body>

</html>