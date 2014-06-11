@extends('layouts.index')


@section('main')

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



   <!--
 <div class="pre-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center ">
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
-->



<div class="pre-content" style="
    padding-top: 0px;
    padding-bottom: 0px;
">
        <div class="container" style="
    width: 1150px;
    padding-left: 0px;
    height: 45px;
    margin-left: -67;
    padding-bottom: 0px;
    margin-top: ‒1;
    padding-right: 0px;
">
            
              <a href="#">
                <div align="left" class="col-md-4 text-center ex " style="
    height: 45px;
	border-left: 1px solid #575757;
">
                    <a href="#events">
                        @if (Session::get('lang') == 'en')
                            Notices & Events
                        @else
                            AVIZE &amp; EVENIMENTE
                        @endif
                    </a>
                </div>
              </a>
               <a href="#">
                <div align="center" class="col-md-4 text-center border ex " style="
    height: 45px;
">
                    <a href="#life">
                        @if (Session::get('lang') == 'en')
                            LIFE IN COLLEGE
                        @else
                            VIATA IN COLEGIU
                        @endif
                    </a>
                </div>
              </a>
              <a href="#">
                <div align="right" class="col-md-4 text-center ex" style="
    height: 45px;
	border-right: 1px solid #575757;
">
                    <a href="#study">
                        @if (Session::get('lang') == 'en')
                            STUDY WITH US
                        @else
                            STUDIAZA LA NOI
                        @endif
                    </a>
                </div>
              </a>
           

        </div>
    </div>










    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div><!-- just for margin left and maintain repsonsive. -->
                <div class="col-md-10">
                    <div class="row grey-line">
                        <div class="col-md-12">
                            <h3 id="events">
                                @if (Session::get('lang') == 'en')
                                    Notices & Events
                                @else
                                    AVIZE &amp; EVENIMENTE
                                @endif
                            </h3>
                        </div>
                    </div>
                    <br/>
                    <div class="row grey-line">

                        <div class="col-md-3">
                            <div class="thumbnail">
                                <a class="fancybox" href="{{ URL::asset('assets/images/student.png') }}" data-fancybox-group="gallery" title="">
                                    <img class="img-responsive" src="{{ URL::asset('assets/images/student.png') }}" alt="Example Image">
                                </a>
                                <div class="caption">
                                    Pregatire catre sesiunile de
                                    iarna au inceput.Grupele de anul
                                    III in decurs de 2 saptamini vor
									sustine prima sesiune!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <a class="fancybox" href="{{ URL::asset('assets/images/2.png') }}" data-fancybox-group="gallery" title="">
                                    <img class="img-responsive" src="{{ URL::asset('assets/images/calc.png') }}" alt="Example Image">
                                </a>
                                <div class="caption">
                                   Cu inceputul unui nou an de
                                    invatatura a fost lansato si
                                    sistemul de inregistrate a notelor
                                    in baza de date.									
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <a class="fancybox" href="{{ URL::asset('assets/images/IMG_1592.png') }}" data-fancybox-group="gallery" title="">
                                    <img class="img-responsive" src="{{ URL::asset('assets/images/IMG_1592.png') }}" alt="Example Image" width="500" height="900">
                                </a>
                                <div class="caption">
                                   A inceput desfasurarea 
                                    competitilor la disciplina educatie
                                    fizice:sah,dame si mini fotbal.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <h4>Ultimile Avize</h4>
                            <div class="news">
                                @foreach($events as $event)
                                <div class="grey-line">
                                    <h5>
                                        <a href="{{ url('events/' . $event->id ) }}">
                                            @if (Session::get('lang') == 'en')
                                                {{ $event->title_en }}
                                            @else
                                                {{ $event->title }}
                                            @endif
                                        </a>
                                    </h5>
                                </div>
                                @endforeach
                                <br/>
                                <a href="{{ url('events') }}">Toate avizele</a>
                                <br>
                            </div>
                        </div>
                        <br>
                    </div>
                    <br>

                </div>
            </div>
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
                            <h3 id="life">
                                @if (Session::get('lang') == 'en')
                                    LIFE IN COLLEGE OF INFORMATICS
                                @else
                                    VIATA IN COLEGIUL DE INFORMATICA
                                @endif
                            </h3>
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
                    <h3 id="study">
                        @if (Session::get('lang') == 'en')
                            STUDY AT THE COLLEGE OF INFORMATICS
                        @else
                            STUDIAZA LA COLEGIUL DE INFORMATICA
                        @endif
                    </h3>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ URL::asset('assets/images/colleg.png') }}" alt="Example image" style="
    width: 200px;
    height: 200px;
">
                    <br/>
                </div>
                <div class="col-md-3">
                   <img src="{{ URL::asset('assets/images/campus.png') }}" alt="Example image" style="
    width: 200px;
    height: 200px;
">
                    <br/>
                </div>
                <div class="col-md-3">
                   <img src="{{ URL::asset('assets/images/practica.png') }}" alt="Example image" style="
    width: 200px;
    height: 200px;
">
                    <br/>
                </div>
                <div class="col-md-3">
                   <img src="{{ URL::asset('assets/images/diversitate.png') }}" alt="Example image" style="
    width: 200px;
    height: 200px;
">
                    <br/>
                </div>
            </div>
            <br/>
        </div>
    </div>
@stop