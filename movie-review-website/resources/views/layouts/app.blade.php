<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title') - Movies</title>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Nunito', sans-serif;
      background-color: #f3f0eb; /* Light nude */
      color: #54423d; /* Dark brown */
    }

    header {
      background-color: #dfd6c6; /* Light beige */
      border-bottom: 1px solid #c8bbae; /* Dark beige */
      padding: 1rem 0;
      width: 100%;
      text-align: center;
    }

    header a {
      text-decoration: none;
      color: #54423d; /* Dark brown */
    }

    header .text-dark {
      color: #54423d; /* Dark brown */
    }

    .nav-link {
      color: #7b6c5d; /* Brown */
    }

    main {
      min-height: calc(100vh - 180px);
    }

    footer {
      background-color: #dfd6c6; /* Light beige */
      padding: 1rem;
      text-align: center;
      width: 100%;
    }

    .table th,
    .table td {
      vertical-align: middle;
      text-align: center;
    }

    .table th {
      background-color: #c8bbae; /* Dark beige */
      color: #54423d; /* Dark brown */
    }

    .btn-primary {
      color: #fff;
      background-color: #7b6c5d; /* Brown */
      border-color: #7b6c5d; /* Brown */
    }

    .btn-primary:hover {
      background-color: #635348; /* Dark brown */
      border-color: #635348; /* Dark brown */
    }

    .table-striped tbody tr:nth-of-type(odd) {
      background-color: #e2d7c7; /* Light brown */
      color: #54423d; /* Dark brown */
    }
  </style>
</head>
<body>
<header class="d-flex flex-column flex-md-row align-items-center justify-content-center pb-3 mb-4 border-bottom">
  <a href="{{ url('/') }}" class="text-dark text-decoration-none">
    <span class="fs-4 text-dark">Movies</span>
  </a>
</header>


  <main class="container mt-5">
    @yield('content')
  </main>

  <footer class="mt-5 py-3 border-top">
    <p>&copy; {{ date('Y') }} Movie Details</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

