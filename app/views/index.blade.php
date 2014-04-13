<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('http://code.jquery.com/jquery-latest.min.js') }}"></script>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">


    <script src="packages/fancybox/jquery-1.4.3.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>


    <script type="text/javascript" src="packages/fancybox/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="packages/fancybox/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="packages/fancybox/fancybox/jquery.fancybox-1.3.4.css" media="screen" />


    <script>

        $(document).ready(function() {
            /*
             *  Simple image gallery. Uses default settings
             */

            $('.fancybox').fancybox();

            /*
             *  Different effects
             */

            // Change title type, overlay closing speed
            $(".fancybox-effects-a").fancybox({
                helpers: {
                    title : {
                        type : 'outside'
                    },
                    overlay : {
                        speedOut : 0
                    }
                }
            });

            // Disable opening and closing animations, change title type
            $(".fancybox-effects-b").fancybox({
                openEffect  : 'none',
                closeEffect	: 'none',

                helpers : {
                    title : {
                        type : 'over'
                    }
                }
            });

            // Set custom style, close if clicked, change title type and overlay color
            $(".fancybox-effects-c").fancybox({
                wrapCSS    : 'fancybox-custom',
                closeClick : true,

                openEffect : 'none',

                helpers : {
                    title : {
                        type : 'inside'
                    },
                    overlay : {
                        css : {
                            'background' : 'rgba(238,238,238,0.85)'
                        }
                    }
                }
            });

            // Remove padding, set opening and closing animations, close if clicked and disable overlay
            $(".fancybox-effects-d").fancybox({
                padding: 0,

                openEffect : 'elastic',
                openSpeed  : 150,

                closeEffect : 'elastic',
                closeSpeed  : 150,

                closeClick : true,

                helpers : {
                    overlay : null
                }
            });

            /*
             *  Button helper. Disable animations, hide close button, change title type and content
             */

            $('.fancybox-buttons').fancybox({
                openEffect  : 'none',
                closeEffect : 'none',

                prevEffect : 'none',
                nextEffect : 'none',

                closeBtn  : false,

                helpers : {
                    title : {
                        type : 'inside'
                    },
                    buttons	: {}
                },

                afterLoad : function() {
                    this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
                }
            });


            /*
             *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
             */

            $('.fancybox-thumbs').fancybox({
                prevEffect : 'none',
                nextEffect : 'none',

                closeBtn  : false,
                arrows    : false,
                nextClick : true,

                helpers : {
                    thumbs : {
                        width  : 50,
                        height : 50
                    }
                }
            });

            /*
             *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
             */
            $('.fancybox-media')
                .attr('rel', 'media-gallery')
                .fancybox({
                    openEffect : 'none',
                    closeEffect : 'none',
                    prevEffect : 'none',
                    nextEffect : 'none',

                    arrows : false,
                    helpers : {
                        media : {},
                        buttons : {}
                    }
                });

            /*
             *  Open manually
             */

            $("#fancybox-manual-a").click(function() {
                $.fancybox.open('1_b.jpg');
            });

            $("#fancybox-manual-b").click(function() {
                $.fancybox.open({
                    href : 'iframe.html',
                    type : 'iframe',
                    padding : 5
                });
            });

            $("#fancybox-manual-c").click(function() {
                $.fancybox.open([
                    {
                        href : '1_b.jpg',
                        title : 'My title'
                    }, {
                        href : '2_b.jpg',
                        title : '2nd title'
                    }, {
                        href : '3_b.jpg'
                    }
                ], {
                    helpers : {
                        thumbs : {
                            width: 75,
                            height: 50
                        }
                    }
                });
            });


        });

    </script>



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
                    <img src="{{ URL::asset('assets/images/header_logo.png') }}" title="CICH Logo" alt="CICH Logo" class="img-responsive"/>
                </div>
                <div class="col-md-2 text-right">
                    <a href="#">RO</a>
                    <a href="#">EN</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-3 col-md-8 main-menu text-center">
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
                            <a class="fancybox" href="{{ URL::asset('assets/images/example.jpg') }}" data-fancybox-group="gallery" title="">
                                <img class="img-responsive" src="{{ URL::asset('assets/images/example.jpg') }}" alt="Example Image">
                            </a>
                            <div class="caption">
                                asdf asdf a sdf as dfas df asd f asdf
                                asd f asd f asdf a sd f
                                asd f asdf as
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <a class="fancybox" href="{{ URL::asset('assets/images/example.jpg') }}" data-fancybox-group="gallery" title="">
                                <img class="img-responsive" src="{{ URL::asset('assets/images/example.jpg') }}" alt="Example Image">
                            </a>
                            <div class="caption">
                                asdf asdf a sdf as dfas df asd f asdf
                                asd f asd f asdf a sd f
                                asd f asdf as
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <a class="fancybox" href="{{ URL::asset('assets/images/example.jpg') }}" data-fancybox-group="gallery" title="">
                                <img class="img-responsive" src="{{ URL::asset('assets/images/example.jpg') }}" alt="Example Image">
                            </a>
                            <div class="caption">
                                asdasdsadsada
                                3123123
                                3123123
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
                <br/>
            </div>
            <div class="col-md-3">
                <img src="{{ URL::asset('assets/images/example.jpg') }}" alt="Example image" class="img-responsive">
                <br/>
            </div>
            <div class="col-md-3">
                <img src="{{ URL::asset('assets/images/example.jpg') }}" alt="Example image" class="img-responsive">
                <br/>
            </div>
            <div class="col-md-3">
                <img src="{{ URL::asset('assets/images/example.jpg') }}" alt="Example image" class="img-responsive">
                <br/>
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