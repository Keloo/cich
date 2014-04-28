@extends('layouts.index')

@section('main')
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
                            <h4>Ultimile Avize</h4>
                            <div class="news">
                                @foreach($events as $event)
                                <div class="grey-line">
                                    <h5>
                                        @if (Session::get('lang') == 'en')
                                            {{ $event->title_en }}
                                        @else
                                            {{ $event->title }}
                                        @endif
                                        ({{ date("d/m/Y", strtotime($event->date)) }})
                                    </h5>
                                    @if (Session::get('lang') == 'en')
                                        {{ $event->content_en }}
                                    @else
                                        {{ $event->content }}
                                    @endif
                                </div>
                                @endforeach
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
@stop