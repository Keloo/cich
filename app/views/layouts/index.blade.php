<!DOCTYPE html>
<html lang="en">
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
  
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script><!-- -->

	<script src="../packages/fancybox/jquery-1.4.3.min.js"></script>
	<script type="text/javascript" src="../packages/fancybox/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	
   <script type="text/javascript" src="../packages/fancybox/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
   
    <link rel="stylesheet" type="text/css" href="../packages/fancybox/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
	
	
	
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
                        speedOut : 100
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
                    <a href="15">Contacte</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <a href="http://cic.cich.md/public/page/11"><img src="{{ asset('assets/images/header_logo.png') }}" title="CICH Logo" alt="CICH Logo" class="img-responsive"/></a>
                </div>
                <div class="col-md-2 text-right">
                    <a href="/cich/public/ro">RO</a>
                    <a href="/cich/public/ro">EN</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-3 col-md-8 main-menu text-left">
                    <ul class="nav nav-tabs">
                        @foreach ($relativeMenu as $menu)
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="
                                            @if ($menu->url)
                                                {{ $menu->url }}
                                            @else
                                                #
                                            @endif
                                    ">
                                    {{ $menu->name }}
                                    @if ($menu->submenus)
                                        <span class="caret"></span>
                                    @endif
                                </a>
                                @if ($menu->submenus)
                                    <ul class="dropdown-menu">
                                      <li>        <hr class="orange-line-menu"/>     </li>  
                                        @foreach($menu->submenus as $submenu)
                                                <li> <a href="
													@if ($submenu->url)
														{{ $submenu->url }}
													@elseif (isset($submenu->page->id))
														{{ url('page/'.$submenu->page->id) }}
													@else
														{{ '#' }}
													@endif
												">
													{{ $submenu->name }}
												</a>
												
											  </li>
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
                 INFORMARE |
                <a href="http://ciobanu.cich.md/">Lectii Web</a> |
                <a href="http://cich.md/forum/">Forum</a> |
                <a href="http://orar.cich.md/">Orar</a>
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
			
			               <a href="http://twitter.com/cichmd" target="_blank" ><img class="img-responsive icon" alt="Twitter"   onmouseover="this.src='/public/assets/images/twitter-icon1.png'"      onmouseout="this.src='/public/assets/images/twitter-icon.png'"          src="{{ asset('assets/images/twitter-icon.png') }}"></a>
                           <a href="https://www.facebook.com/cichmd" target="_blank"><img class="img-responsive icon" alt="Facebook"   onmouseover="this.src='/public/assets/images/facebook-icon1.png'"    onmouseout="this.src='/public/assets/images/facebook-icon.png'" src="{{ asset('assets/images/facebook-icon.png') }}"></a>
                           <a href="http://youtube.com/cichmd" target="_blank"><img class="img-responsive icon" alt="Youtube"   onmouseover="this.src='/public/assets/images/youtube-icon1.png'"   onmouseout="this.src='/public/assets/images/youtube-icon.png'"       src="{{ asset('assets/images/youtube-icon.png') }}"></a>
                           <a href="#"> <img class="img-responsive icon" alt="Wifi"  onmouseover="this.src='/public/assets/images/wifi-icon1.png'"    onmouseout="this.src='/public/assets/images/wifi-icon.png'"    src="{{ asset('assets/images/wifi-icon.png') }}"></a>

			<!--
			
			
               <a href="http://twitter.com/cichmd" target="_blank" ><img class="img-responsive icon" alt="Twitter" src="{{ asset('assets/images/twitter-icon.png') }}"></a>
               <a href="https://www.facebook.com/cichmd" target="_blank"><img class="img-responsive icon" alt="Facebook" src="{{ asset('assets/images/facebook-icon.png') }}"></a>
                <a href="http://youtube.com/cichmd" target="_blank"><img class="img-responsive icon" alt="Youtube" src="{{ asset('assets/images/youtube-icon.png') }}"></a>
               <a href="#"> <img class="img-responsive icon" alt="Wifi" src="{{ asset('assets/images/wifi-icon.png') }}"></a>
           -->
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
                <a href="http://cic.cich.md/public/page/12">Specialitati <br></a>
                Catedre <br>
                Campus <br>
                <a href="http://cic.cich.md/public/page/7">Comitetul Sindical <br></a>
                Galerie <br>
            </div>
            <div class="col-md-3 border-left">
             <a href="http://cic.cich.md/public/page/6">Managementul educational<br></a>
             <a href="http://cic.cich.md/public/page/14">  Instruirea practica <br></a>
                      Informatii <br>
             <a href="http://cic.cich.md/public/page/20">Succesele discipolilor <br></a>
                Admitere <br>
                Harta <br>
            </div>
            <div class="col-md-2 border-left">
               <a href="http://cic.cich.md/public/page/26">Burse <br></a>
                Examene de absolvire <br>
                <a href="http://cic.cich.md/public/page/10">Regulamentul <br></a>
                <a href="http://cich.md/forum/">Forum <br></a>
                <a href="http://cic.cich.md/public/page/27">Absolventi <br></a>
               <a href="http://cic.cich.md/public/page/28"> Oferte locuri de munca <br></a>
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