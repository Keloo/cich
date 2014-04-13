<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">


    <script src="{{ asset('http://code.jquery.com/jquery-latest.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
</head>
<body>
<div class="header">
    <div class="container">
        <div class="header">
            <div class="row">
                <div class="col-md-offset-8 col-md-4 text-right links">
                    <a href="#">Avize</a> |
                    <a href="#">Harta</a> |
                    <a href="#">Galerie</a> |
                    <a href="#">Informatii</a> |
                    <a href="#">Studenti</a> |
                    <a href="#">Contacte</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <img src="{{ asset('assets/images/header_logo.png') }}" title="CICH Logo" alt="CICH Logo" class="img-responsive"/>
                </div>
                <div class="col-md-2 text-right">
                    <a href="#">RO</a>
                    <a href="#">EN</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-3 col-md-8 main-menu text-center">
                    <ul class="nav nav-tabs">
                        @foreach ($relativeMenu as $menu)
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    {{ $menu->name }}
                                    @if ($menu->submenus)
                                        <span class="caret"></span>
                                    @endif
                                </a>
                                @if ($menu->submenus)
                                    <ul class="dropdown-menu">
                                        <li><hr class="orange-line-menu"/></li>
                                        @foreach($menu->submenus as $submenu)
                                            <li><a href=
                                            @if ($submenu->url)
                                                {{ $submenu->url }}
                                            @elseif (isset($submenu->page->id))
                                                {{ url('page/'.$submenu->page->id) }}
                                            @else
                                                {{ '#' }}
                                            @endif
                                            {{ '>'.$submenu->name.'</a></li>' }}
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <hr class="orange-line" />
</div>

<div class="post-header">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <a href="#">INFORMARE</a> |
                <a href="#">Lectii Web</a> |
                <a href="#">Forum</a> |
                <a href="#">Orar</a>
            </div>
            <div class="col-md-4">
                <form class="navbar-form text-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{ asset('assets/slider/1.jpg') }}" alt="...">
                        <div class="carousel-caption">
                            <div class="custom-caption">
                                <div class="caption-title">
                                </div>
                                <div class="caption-content">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/slider/2.jpg') }}" alt="...">
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/slider/3.jpg') }}" alt="...">
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="pre-content">
    <div class="container">
        <div class="row">
        </div>
    </div>
</div>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @yield('content')
            </div>
        </div>
    </div>
</div>

<hr class="orange-line"/>
<div class="pre-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-md-offset-5">
                <img class="img-responsive icon" alt="Twitter" src="{{ asset('assets/images/twitter-icon.png') }}">
                <img class="img-responsive icon" alt="Facebook" src="{{ asset('assets/images/facebook-icon.png') }}">
                <img class="img-responsive icon" alt="Youtube" src="{{ asset('assets/images/youtube-icon.png') }}">
                <img class="img-responsive icon" alt="Wifi" src="{{ asset('assets/images/wifi-icon.png') }}">
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('assets/images/footer_logo.png') }}" alt="Colegiu de Informatica" class="img-responsive">
            </div>
            <div class="col-md-3 border-left">
                Studenti <br>
                Specialitati <br>
                Catedre <br>
                Campus <br>
                Comitetul Sindical <br>
                Galerie <br>
            </div>
            <div class="col-md-3 border-left">
                Managementul educational<br>
                Instruirea practica <br>
                Informatii <br>
                Succesele discipolilor <br>
                Admitere <br>
                Harta <br>
            </div>
            <div class="col-md-2 border-left">
                Burse <br>
                Examene de absolvire <br>
                Regulamentul <br>
                Forum <br>
                Absolventi <br>
                Oferte locuri de munca <br>
            </div>
        </div>
        <br>
    </div>
</div>
<div class="post-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="text-center">
                    &copy; Colegiu de Informatica din Chisinau | mun. Chisinau str. Sarmizegetusa 48 | secretariat@cich.md
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    $('.carousel').carousel();
</script>

</body>
</html>