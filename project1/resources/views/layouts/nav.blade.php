<html>

<head>
    <title> @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</head>

<body>

    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/users">users</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/posts">posts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
    </ul>

    <main class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    @yield('content')
                </div>
                <div class="col-lg-4 col-12">
                    @section('sidebar')
                    @show
                </div>

            </div>
        </div>
    </main>
</body>

</html>
