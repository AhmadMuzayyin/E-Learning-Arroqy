
<!DOCTYPE html>
<html lang="en">
<head>

  @include('layouts.meta_header')
  
  <title>@yield('title') | LPI Arraqy</title>

  @include('layouts.style_header')
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  
  @include('layouts.navbar')

  @include('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    @yield('content')
  
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  @include('layouts.footer')

</div>
<!-- ./wrapper -->

@include('layouts.footer_scripts')
@stack('after-script')

</body>
</html>
