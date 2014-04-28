<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title>CICH Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="{{ asset('assets/css/adm.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-responsive.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">


    <script src="{{ asset('assets/js/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
    <script src="{{ asset('packages/ckeditor/ckeditor.js') }}"></script>
</head>
<body>

<div class="navbar navbar-fixed-top">
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <span class="brand">CICH Admin</span>

                <div class="nav-collapse collapse">

                    <ul class="nav">
                        <li
                            @if(Request::segment(2) == '')
                                class="active"
                            @endif
                        ><a href="{{ url('admin') }}"><i class="icon-file icon-black"></i> Pages</a></li>
                        <li
                             @if(Request::segment(2) == 'menu')
                                class="active"
                             @endif
                        ><a href="{{ url('admin').'/menu' }}"><i class="icon-list icon-black"></i> Menu</a></li>
                        <li
                        @if(Request::segment(2) == 'events')
                        class="active"
                        @endif
                        ><a href="{{ url('admin').'/events' }}"><i class="icon-list-alt icon-black"></i> Events</a></li>

                    </ul>


                    <ul class="nav pull-right settings">
                        <li><a href="{{ url('admin').'/logout' }}" class="tip icon logout" data-original-title="Logout"
                                    data-placement="bottom">
                             <i class="icon-large icon-off"></i></a>
                        </li>
                    </ul>

                    <ul class="nav pull-right settings">
                        <li class="divider-vertical"></li>
                    </ul>

                    <p class="navbar-text pull-right">
                        Welcome <strong>Admin</strong>
                    </p>

                    <ul class="nav pull-right settings">
                        <li class="divider-vertical"></li>
                    </ul>

                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span2 pull-left">
        <div class="well sidebar-nav menu-admin">
            <ul class="nav nav-tabs nav-stacked">
                @yield('menu')
            </ul>
        </div>
    </div>
    <!--/.well -->
    <!--/span3-->

    <div class="span10 pull-left">

        <div class="well">
            @yield('content')
        </div>
    </div>
    <!--/span9-->

</div>
<!--/row-fluid-->

<hr>

<footer align="center">
    <p>Copyright &copy; 2014 <strong>CICH</strong></p>
</footer>

<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/jquery-1.8.3.min.js"><\/script>')</script>
<script src="assets/js/bootstrap.min.js"></script>
<script>
    // enable tooltips
    $(".tip").tooltip();
</script>

</body>
</html>
