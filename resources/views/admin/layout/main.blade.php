<!DOCTYPE html>
<html lang="zh">
  <head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <title>{{ $page_title or "AdminLTE Dashboard" }}</title>
    <link rel="stylesheet" href="{{asset('/assets/css/app.css')}}">
    @yield('style')
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      @include('admin.layout.header')
      @include('admin.layout.sidebar')
      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            {{ $page_title or "Page Title" }}
            <small>{{ $page_description or null }}</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
          </ol>
        </section>
        <section class="content">
          @yield('content')
        </section>
      </div>
      @include('admin.layout.footer')
    </div>
    <script src="{{asset('/assets/js/app.js')}}"></script>
  </body>
</html>
