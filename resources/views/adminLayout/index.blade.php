<!doctype html>
<html lang="en">

<head>
  <title>Praktikum Pweb</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="/dashboard/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="orange" data-background-color="black">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->

    <!-- sidebar -->
      @include('adminLayout/sidebar')

      <!-- Navbar -->
      @include('adminLayout/breadkrum')

<!-- main content -->
<section class="content">
  <div class="container-fluid">
    @yield('content')
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

        <!-- End Navbar -->
      @include('adminLayout/footer')
          <!-- your footer here -->
        </div>
      </footer>
    </div>
  </div>
</body>

</html>