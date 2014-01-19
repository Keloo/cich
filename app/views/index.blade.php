<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    <script href="{{ URL::asset('assets/js/bootstrap.js') }}"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>
<body>
asdf
<div class="header">
    <div class="container">
        <div class="header">
            <div class="row text-right links">
                <a href="#">Avize</a> |

                <a href="#">Harta</a> |

                <a href="#">Galerie</a> |

                <a href="#">Informatii</a> |

                <a href="#">Studenti</a> |

                <a href="#">Contacte</a>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <img src="{{ URL::asset('assets/images/header_logo.png') }}" title="CICH Logo" alt="CICH Logo" class="img-responsive"/>
                </div>
                <div class="col-md-2 text-right">
                    <a href="#"><img src="{{ URL::asset('assets/images/ro.png') }}" /></a>
                    <a href="#"><img src="{{ URL::asset('assets/images/en.png') }}" /></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 col-md-offset-3 main-menu">
                    <ul class="nav nav-tabs">
                        <li><a href="#">Principala</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                Informatii <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><hr class="orange-line-menu"/></li>
                                <li><a href="#">Submenu-1</a></li>
                                <li><a href="#">Submenu-2</a></li>
                                <li><a href="#">Submenu-3</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                Instruire <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><hr class="orange-line-menu"/></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                Admitere <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><hr class="orange-line-menu"/></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                Studenti <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><hr class="orange-line-menu"/></li>
                            </ul>
                        </li>
                        <li><a href="#">Contacte </a></li>
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
                        <img src="{{ URL::asset('assets/slider/1.jpg') }}" alt="...">
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
                        <img src="{{ URL::asset('assets/slider/2.jpg') }}" alt="...">
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ URL::asset('assets/slider/3.jpg') }}" alt="...">
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
            <div class="col-md-4 text-center">
                <a href="#">AVIZE & EVENIMENTE</a>
            </div>
            <div class="col-md-4 text-center border ">
                <a href="#">VIATA IN COLEGIU</a>
            </div>
            <div class="col-md-4 text-center">
                <a href="#">STUDIAZA LA NOI</a>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div><!-- just for margin left and maintain repsonsive. -->
            <div class="col-md-10">
                <div class="row grey-line">
                    <div class="col-md-12">
                        <h3>Avize & Evenimente</h3>
                    </div>
                </div>
                <br/>
                <div class="row grey-line">

                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img class="img-responsive" src="{{ URL::asset('assets/images/example.jpg') }}" alt="Example Image">
                            <div class="caption">
                                asdf asdf a sdf as dfas df asd f asdf
                                asd f asd f asdf a sd f
                                asd f asdf as
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img class="img-responsive" src="{{ URL::asset('assets/images/example.jpg') }}" alt="Example Image">
                            <div class="caption">
                                asdf asdf a sdf as dfas df asd f asdf
                                asd f asd f asdf a sd f
                                asd f asdf as
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img class="img-responsive" src="{{ URL::asset('assets/images/example.jpg') }}" alt="Example Image">
                            <div class="caption">
                                asdf asdf a sdf as dfas df asd f asdf
                                asd f asd f asdf a sd f
                                asd f asdf as
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="grey-line">
                            <h4>Ultimile Avize</h4>
                            <h5>Noiembrie 01</h5>
                            asd fas df asd f asd f asd f asd f
                            asdf as df asd f asd f asd f
                        </div>
                        <div class="grey-line">
                            <h4>Ultimile Avize</h4>
                            <h5>Noiembrie 02</h5>
                            asd fas df asd f asd f asdasdfasdfasdfasdf
                        </div>
                        <div>
                            <h4>Mai mult aaa??!!</h4>
                        </div>
                    </div>
                    <br>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6 thumbnail shadow">
                        <img src="{{ URL::asset('assets/images/example.jpg') }}" alt="Example image" class="img-responsive img-float-left">
                        asfasdf asdf a sdf asd fa sdf a sdf a sdf asd fa sd f
                    </div>
                    <div class="col-md-3">
                        <div class="thumbnail shadow">
                            <img class="img-responsive" src="{{ URL::asset('assets/images/example.jpg') }}" alt="Example Image">
                            <div class="caption">
                                asdf asdf a sdf a
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="grey-line">
                            <h4>Ultimile Avize</h4>
                            <h5>Noiembrie 01</h5>
                            asd fas df asd f asd f asd f asd f
                            asdf as df asd f asd f asd f
                        </div>
                        <div class="grey-line">
                            <h4>Ultimile Avize</h4>
                            <h5>Noiembrie 02</h5>
                            asd fas df asd f asd f asdasdfasdfasdfasdf
                        </div>
                        <div>
                            <h4>Mai mult aaa??!!</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div><!-- just for margin right and maintain repsonsive. -->
    </div>
</div>
<hr class="orange-line"/>

<div class="content_2">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div><!-- just for margin left and maintain repsonsive. -->
            <div class="col-md-10">
                <div class="row grey-line">
                    <div class="col-md-12">
                        <h3>VIATA IN COLEGIUL DE INFORMATICA</h3>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-md-5 thumbnail shadow">
                        <img src="{{ URL::asset('assets/images/example.jpg') }}" alt="Example image" class="img-responsive img-float-left">
                        asfasdf asdf a sdf asd fa sdf a sdf a sdf asd fa sd f
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-6 thumbnail shadow">
                        <div class="">
                            <h4>TOP VIDEO</h4>
                            <hr/>
                            <div class="col-md-4">
                                <img src="{{ URL::asset('assets/images/example.jpg') }}" alt="Example image" class="img-responsive">
                                dadadadadas
                            </div>
                            <div class="col-md-4">
                                <img src="{{ URL::asset('assets/images/example.jpg') }}" alt="Example image" class="img-responsive">
                                dasdasdsadasd
                            </div>
                            <div class="col-md-4">
                                <img src="{{ URL::asset('assets/images/example.jpg') }}" alt="Example image" class="img-responsive">
                                dasdasdasdsa
                            </div>
                            <br/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div><!-- just for margin right and maintain repsonsive. -->
        </div>
    </div>
</div>
<hr class="orange-line"/>
<div class="content_3">
    <div class="container">
        <div class="row grey-line">
            <div class="col-md-12">
                <h3>STUDIAZA LA COLEGIUL DE INFORMATICA</h3>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-3">
                <img src="{{ URL::asset('assets/images/example.jpg') }}" alt="Example image" class="img-responsive">
            </div>
            <div class="col-md-3">
                <img src="{{ URL::asset('assets/images/example.jpg') }}" alt="Example image" class="img-responsive">
            </div>
            <div class="col-md-3">
                <img src="{{ URL::asset('assets/images/example.jpg') }}" alt="Example image" class="img-responsive">
            </div>
            <div class="col-md-3">
                <img src="{{ URL::asset('assets/images/example.jpg') }}" alt="Example image" class="img-responsive">
            </div>
        </div>
        <br/>
    </div>
</div>
<hr class="orange-line"/>
<div class="pre-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-md-offset-5">
                <img class="img-responsive icon" alt="Twitter" src="{{ URL::asset('assets/images/twitter-icon.png') }}">
                <img class="img-responsive icon" alt="Facebook" src="{{ URL::asset('assets/images/facebook-icon.png') }}">
                <img class="img-responsive icon" alt="Youtube" src="{{ URL::asset('assets/images/youtube-icon.png') }}">
                <img class="img-responsive icon" alt="Wifi" src="{{ URL::asset('assets/images/wifi-icon.png') }}">
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ URL::asset('assets/images/footer_logo.png') }}" alt="Colegiu de Informatica" class="img-responsive">
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