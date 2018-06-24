
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Laravel Blog</title>
    {{--<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">--}}

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
</head>
    <body>
        @include('layouts.nav')
        <div class="blog-header">
            <div class="container">
                <h1 class="blog-title">Laravel Bootstrap Blog</h1>
                <p class="lead blog-description">Blog template built with Laravel & Bootstrap.</p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                {{--Column for main content--}}
                @yield ('content')
                {{--Column for Sidebar--}}
                @include ('layouts.sidebar')
            </div>
        </div>
        {{--Footer--}}
        @include ('layouts.footer')
    </body>
</html>