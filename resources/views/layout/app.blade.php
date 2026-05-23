<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Pembayaran Santri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
@yield('content')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container">

            <a class="navbar-brand" href="#">Pembayaran Santri </a>

            <div>
                <a href="/home" class="btn btn-outline-light">Dashboard</a>

                <a href="/santri" class="btn btn-outline-light">Data Santri</a>

                <a href="#" class="btn btn-outline-light">Bayar Bulanan</a>


            </div>

        </div>

    </nav>

    <div class="container mt-5">

        @yield('content')

    </div>

</body>

</html>