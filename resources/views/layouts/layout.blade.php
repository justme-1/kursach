
<!doctype html>
<html lang="en" class="h-100">

@include('layouts.template.head')

  <body class="d-flex flex-column h-100">
  @include('layouts.template.header')

<!-- Begin page content -->

  <div class="container-fluid">
@yield('content')
  </div>


@include('layouts.template.footer')

  </body>
</html>
