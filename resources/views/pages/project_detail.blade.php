@extends('layouts.front.base')
@section('subheader')
    @include('pages.partials._subheader')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row p-single">
                    <div class="col-md-3">
                        <div class="p-carousel owl-carousel owl-theme">
                            @foreach ($film->getMedia('images') as $image)
                                <img src="{{ $image->getUrl() }}" class="img-fluid" alt="">
                            @endforeach

                        </div>
                        <div class="p-carousel-thumb owl-carousel owl-theme mt20">
                            @foreach ($film->getMedia('images') as $image)
                                <img src="{{ $image->getUrl() }}" class="img-fluid" alt="">
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-desc">
                            <h3>{{ $film->title }}</h3>
                            <div class="p-rating">
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="price">{{ $film->film_type . ': ' . $film->genre }}</div>
                            <p>{{ $film->description }}</p>

                            <h6 class="text-light  mb10">Release Date</h6>
                            <p>{{ $film->release_date->format('d M, Y') }}</p>
                            <div class="spacer-single"></div>
                            <a href="{{ $film->film_link }}" class="btn btn-line">Visit Link</a>
                        </div>
                    </div>
                    <div id="sidebar" class="col-md-3">

                        <div class="widget widget_category">
                            <h4>Film Information</h4>
                            <ul>
                                @if ($film->producer)
                                    <li><a href="#">Producer: {{ $film->producer }}</a></li>
                                @endif
                                @if ($film->director)
                                    <li><a href="#">Director: {{ $film->director }}</a></li>
                                @endif
                                @if ($film->language)
                                    <li><a href="#">Language: {{ $film->language }}</a></li>
                                @endif
                                @if ($film->country)
                                    <li><a href="#">Country: {{ $film->country }}</a></li>
                                @endif

                            </ul>
                        </div>
                    </div>
                    <div class="spacer-double"></div>


                    {{-- </div> --}}
                 
                </div>



            </div>
        </div>
    </div>
@endsection
