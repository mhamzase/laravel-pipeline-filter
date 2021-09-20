<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel | Pipelines</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container my-4">
        <div>
            @foreach ($posts as $post)
                <div class="border">
                    {{ $post->active }} - {{ $post->title }}
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center my-5">
            {{ $posts->appends(request()->input())->links() }}
        </div>
    </div>

</body>

</html>
