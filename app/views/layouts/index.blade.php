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
                    <a href="/public/page/39">Harta</a> |
                    <a href="{{ url('gallery/index.php') }}">Galerie</a> |
                    <a href="#">Informatii</a> |
                    <a href="#">Studenti</a> |
                    <a href="15">Contacte</a>
					<!--Facebook botton in page start -->
					<a href="#" data-toggle="modal" data-target="#fcontactModal">Facebook</a>
					
					<div class="modal fade" id="fcontactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLavel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel">Facebook</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                  <center> <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fcich.md&amp;width=500&amp;height=290&amp;colorscheme=dark&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:500px; height:290px;" allowTransparency="true"></iframe></center>
                            </div>
                        </div>
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
					
					
					
					
					<!--Close facebook botton in page -->
                </div>
            </div>
           <!-- <div class="row">
                <div class="col-md-10">
                    <a href="http://cic.cich.md/public/"><img src="{{ asset('assets/images/header_logo.png') }}" title="CICH Logo" alt="CICH Logo" class="img-responsive"/></a>
                </div>
                <div class="col-md-2 text-right">
                    <a href="/public/ro"><img style="width:30px;" src="http://cdn1.iconfinder.com/data/icons/finalflags/48/Romania-Flag.png" title="Română"></a>
                    <a href="/public/en"><img style="margin-left:5px;width:30px;" src="http://abali.ru/wp-content/uploads/2010/12/united-kingdom-flag-48x48.png" title="English"></a>
                </div>
            </div>
			-->
			
			
			<div class="row">
                <div class="col-md-10" style="
    width: 530px;
    height: 100px;
">
                    <a href="http://cic.cich.md/public/"><img src="http://cic.cich.md/public/assets/images/header_logo.png" title="CICH Logo" alt="CICH Logo" style="
    width: 500px;
"></a>
                </div>
<div class="col-md-4" style="
    left: 190px;
    margin-top: 30px;
    bottom: 0px;
    margin-bottom: 0px;
">
                <form class="navbar-form text-right" role="search" action="http://cic.cich.md/public/search" method="post">
                    <div class="form-group">
                        <input type="text" name="search_text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
                <div class="col-md-2 text-right" style="
    width: 105px;
    right: -150;
    left: 150px;
">
                    <a href="/public/ro"><img style="width:25px;" src="http://cdn1.iconfinder.com/data/icons/finalflags/48/Romania-Flag.png" title="Română"></a>
                    <a href="/public/en"><img style="margin-left:5px;width:25px;" src="http://abali.ru/wp-content/uploads/2010/12/united-kingdom-flag-48x48.png" title="English"></a>
                </div>
            </div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
            <div class="row">
                <div class="col-md-offset-3 col-md-8 main-menu text-left">
                    <ul class="nav nav-tabs">
					
				
					
                        @foreach ($relativeMenu as $menu)
                            <li class="dropdown">
                                <a class="dropdown-toggle"
                                            @if (!$menu->submenus && $menu->url)
                                                href="{{ $menu->url }}"
                                            @else
                                                data-toggle="dropdown" href="#"
                                            @endif
                                    >
                                    @if (Session::get('lang') == 'en')
                                        {{ $menu->name_en }}
                                    @else
                                        {{ $menu->name }}
                                    @endif
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
                                                @if (Session::get('lang') == 'en')
                                                    {{ $submenu->name_en }}
                                                @else
                                                    {{ $submenu->name }}
                                                @endif
												</a>
												
											  </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
					
						
						
						
						
						<!--  START MENU   
						
						<div class="wrapper">
    <div>
    
        <div class="header-menu">
        	<ul class="reset">
            	<li class="header-menus"><a href="#"><b>Principala</b></a></li>
                <li class="header-menus" ><a href="#"><b>Informatii</b></a>
                    <ul class="header-menu1" class="reset">
                    	<li class="header-menu5" ><a href="#">Scurt Istoric</a>
                        
                        
                          </li>  
                        
                           
                        
                        <li class="header-menu5"><a href="#">Date statistice</a></li>
        
                       
                        <li class="header-menu5"><a href="#">Colaborări</a></li>
                        <li class="header-menu5"><a href="#">Acreditare</a></li>
                           <li class="header-menu5"><a href="#">Biblioteca</a></li>
                    </ul>
                </li>
                <li class="header-menus"><a href="#"><b>Instruire</b></a>
                    <ul class="header-menu1" class="reset">
                    	<li><a href="#">Specialităţi</a></li>
                        <li><a href="#">Managementul educatiei</a></li>
                        <li><a href="#">Succesele discipolilor</a></li>
                        <li><a href="#">Instruire practica</a></li>
                        <li><a href="#">Comitetul sindical</a></li>
                        
                          <li class="header-menu5"><a href="#">Catedre</a>
                         <ul class="header-menu2">
                            <li> <a href="#">Informatica</a></li>
                            <li> <a href="#">Informatica Aplicata</a></li>
                                <li> <a href="#">Economie</a></li>
                            <li> <a href="#">Limba şi Literatura Română</a></li>
                           <li> <a href="#">Limbi Străine</a></li>
                              <li> <a href="#">Matematica</a></li>
                              <li> <a href="#">Istorie şi ştiinţe socioumane</a></li>
                              <li> <a href="#">Chimie, Biologie şi Fizică</a></li>
                              <li> <a href="#">Educatie Fizică</a></li>
                            
                            
                            
                            </ul>
                            
                        
                        
                        </li>

                    </ul>
                </li>
                
                
                
                 <li class="header-menus"><a href="#"><b>Admitere</b></a>
                    <ul class="header-menu1" class="reset">
                    	<li><a href="#">Comisia de admitere</a></li>
                        <li><a href="#">Condiții de înmatriculare</a></li>
                        <li><a href="#">Calcularea mediei de concurs</a></li>
                        <li><a href="#">Regulamentul</a></li>
                        <li><a href="#">Plan de admitere</a></li>
                         <li><a href="#">Rezultatul admiterii</a></li>
                    </ul>
                </li>
                
                 <li class="header-menus"><a href="#"><b>Studenţi</b></a>
                    <ul class="header-menu1" class="reset">
                    	<li><a href="#">Consiliere și psihologie</a></li>
                        
                          <li class="header-menu5"><a href="#">Campus</a>
                         <ul class="header-menu2">
                            <li> <a href="#">Cazare</a></li>
                            <li> <a href="#">Cantine</a></li>
                                    
                            </ul>
                            
                        
                        
                        </li>
                        
                        <li><a href="#">Comitetul Sindical</a></li>
                       
                         <li class="header-menu5"><a href="#">Examen de absolvire</a>
                         <ul class="header-menu2">
                            <li> <a href="#">Informatica</a></li>
                            <li> <a href="#">Finante</a></li>
                              <li> <a href="#">Contabilitate</a></li>
                              <li> <a href="#">Secretariat Birotica</a></li>
                              <li> <a href="#">Merceologie</a></li>
                              <li> <a href="#">Turism</a></li>
                                    
                            </ul>
                            
                        
                        
                        </li>
                        
                        
                        <li><a href="#">Organizații Studențești</a></li>
                         <li><a href="#">Burse</a></li>
                         <li><a href="#">Absolvenţi</a></li>
                    </ul>
                </li>
                
                
                 <li class="header-menus"><a href="#"><b>Contacte</b></a>
                   
                </li>
                
                
            </ul>
        </div>
    </div>
</div>
						
						
						
						
						
					 CLOSE MENU    -->
						
						
						
						
						
						
                    </ul>
                </div>
            </div>
			
			
		
			
			
        </div>
    </div>
	
	

    <hr class="orange-line" />
</div>





<div class="post-header">
    <div class="container">
	
	
    <!--    <div class="row">
            <div class="col-md-8">
                 INFORMARE |
                <a href="http://ciobanu.cich.md/">Lectii Web</a> |
                <a href="http://cich.md/forum/">Forum</a> |
                <a href="http://orar.cich.md/">Orar</a>
            </div>       -->
			
			
			
			<div class="row">
            <div class="col-md-8" style="
    margin-top: 12px;
    top: -3;
    margin-bottom: 0px;
    bottom: 9px;
">
                 INFORMARE |
                <a href="http://ciobanu.cich.md/">Lectii Web</a> |
                <a href="http://cich.md/forum/">Forum</a> |
                <a href="http://schedule.cich.md/">Orar</a>
            </div>
            
        </div>
			
			
			
			
			
			
			
			
          <!--  <div class="col-md-4">
                <form class="navbar-form text-right" role="search" action="{{ url('search') }}" method="post">
                    <div class="form-group">
                        <input type="text" name="search_text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>  -->
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
                        <img src="{{ asset('assets/slider/2.jpg') }}" alt="...">
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
                        <img src="{{ asset('assets/slider/IMG.png') }}" alt="...">
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/slider/calculatoare.png') }}" alt="...">
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

<hr class="orange-line" />
@if (Request::path() != '/' && Request::path() != 'en' && Request::path() != 'ro')

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

@else
    @yield('main')
@endif

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
                <a  href="http://cic.cich.md/public/page/12">Specialitati <br></a>
                Catedre <br>
                Campus <br>
                <a  href="http://cic.cich.md/public/page/7">Comitetul Sindical <br></a>
                 <a  href="{{ url('gallery/index.php') }}"> Galerie <br></a>
            </div>
            <div class="col-md-3 border-left">
             <a  href="http://cic.cich.md/public/page/6">Managementul educational<br></a>
             <a  href="http://cic.cich.md/public/page/14">  Instruirea practica <br></a>
                      Informatii <br>
             <a  href="http://cic.cich.md/public/page/20">Succesele discipolilor <br></a>
                Admitere <br>
                Harta <br>
            </div>
            <div class="col-md-2 border-left">
               <a  href="http://cic.cich.md/public/page/26">Burse <br></a>
                Examene de absolvire <br>
                <a  href="http://cic.cich.md/public/page/10">Regulamentul <br></a>
                <a  href="http://cich.md/forum/">Forum <br></a>
                <a  href="http://cic.cich.md/public/page/27">Absolventi <br></a>
               <a  href="http://cic.cich.md/public/page/28"> Oferte locuri de munca <br></a>
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