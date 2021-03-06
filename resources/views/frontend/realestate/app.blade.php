<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
@yield('meta-tags')
<meta name="csrf-token" content="{{ csrf_token() }}">
    @theme_include('widgets.headcss')
    @yield('customstyle')
</head>
<body>
<div class="page category">

    @theme_include('widgets.header')
    @yield('breadcrumbs')

    <section class="main">
        <div class="section">
            <div class="container">
                <div class="col-sm-12">
                    <div class="row mainpage-wrapper">


                        @yield('content')

                    </div>
                </div>

            </div>
        </div>
    </section>

    {{--Xử lý ẩn footer khi ở chế độ kín--}}
    @if(env('LOGIN') === true)
        @if(Auth::check())
    @theme_include('widgets.footer')
        @endif
    @else
        @theme_include('widgets.footer')
    @endif

</div>
@theme_include('widgets.systemjs')
@yield('js-footer')
</body>

</html>
