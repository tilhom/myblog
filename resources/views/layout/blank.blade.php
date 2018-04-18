<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="{{asset('css/blog.css')}}" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      @include('layout.header')
      @include('layout.nav')
    </div>

    <main role="main" class="container">
      <div class="row">
        @yield('content')

        @include('layout.sidebar')

      </div><!-- /.row -->

    </main><!-- /.container -->

   @include('layout.footer')

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('js/jquery-slim.min.js')"></script>
    <script src="{{asset('js/popper.min.js')"></script>
    <script src="{{asset('js/bootstrap.min.js')"></script>
    <script src="{{asset('js/holder.min.js')"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
