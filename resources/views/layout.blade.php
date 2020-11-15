<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : SimpleWork
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140225

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet"/>
    <link href="{{ asset('css/default.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet" type="text/css" media="all"/>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    @yield('head')
    <script>
    $("#edit").click(function () {
    $("#body").attr("disabled", false);
    $('#save').show();
    $(this).hide();
    });
    </script>
</head>
<body>
<div id="header-wrapper">
    <div id="header" class="container">
        <div id="logo">
            <h1><a href="#">SimpleWork</a></h1>
        </div>
        <div id="menu">
            <ul>
                <li class="{{Request::path()==='posts' ? 'current_page_item': ''}}"><a href="/posts" accesskey="1"
                                                                                       title="">All poats</a></li>
                @auth
                <li class="{{Request::path()==='posts/'.auth()->id() ? 'current_page_item': ''}}"><a
                        href="/posts/{{auth()->id()}}" accesskey="2" title="">My Posts</a></li>
                @else
                    <li class="{{Request::path()==='login' ? 'current_page_item': ''}}"><a
                            href="/login" accesskey="2" title="">My Posts</a></li>
                @endauth

                @auth
                    <li class="{{Request::path()==='logout' ? 'current_page_item': ''}}"><a href="/logout" accesskey="5"
                                                                                            title="">Logout</a></li>
                @else
                    <li class="{{Request::path()==='login' ? 'current_page_item': ''}}"><a href="/login" accesskey="5"
                                                                                           title="">Login</a></li>
                @endauth
            </ul>

        </div>
    </div>
    <br>
</div>
@yield('content')
<div id="copyright" class="container">
    <p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a
            href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>


</body>
</html>
