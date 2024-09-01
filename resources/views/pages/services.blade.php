@extends('layouts.front.base')
@section('subheader')
    <!-- subheader -->
    @include('pages.partials._subheader')
    <!-- subheader close -->
@endsection
@section('content')
    @foreach ($services as $index => $service)
        <section id="section-service-{{ $index + 1 }}" class="side-bg no-padding"
            @if ($index % 2 == 1) data-bgcolor="#212225" @endif>
            <div class="image-container col-lg-5 @if ($index % 2 == 0) pull-left @else offset-lg-7 col-md-12 pull-right @endif"
                data-delay="0">
                <div class="background-image" style="background-image: url('{{ $service->getFirstMediaUrl('featured') }}')";>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="inner-padding">
                        <div class="col-lg-6 @if ($index % 2 == 0) offset-lg-6 @else col-md-12 @endif wow @if ($index % 2 == 0) fadeInRight @else fadeInLeft @endif"
                            data-wow-delay=".5s">
                            <h3 class="id-color">{{ $service->title }}</h3>
                            {{ $service->excerpt }}
                            <div class="spacer-single"></div>
                            <a href="{{ route('service.show', $service) }}" class="btn-line">Read More</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach


    <!-- section close -->
    @include('pages.partials._contact_us')
@endsection
