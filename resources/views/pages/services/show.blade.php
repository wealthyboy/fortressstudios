
@extends('layouts.front.base')
@section('subheader')
    <!-- subheader -->
    @include('pages.partials._subheader')
    <!-- subheader close -->
@endsection
@section('content')
    
@include('pages.partials._service-menu')
<div class="col-md-9">
    <div class="row ">
        <div class="col-md-6 wow fadeInUp" data-wow-delay=".3s">
            <img src="{{ $service->getFirstMediaUrl('page_image_1') }}" class="img-rounded img-responsive mb30"
                alt="{{ $websiteInfo->name . ' ' . $service->slug }}">

            <p>{{ $service->body1 }}</p>

        </div>
        <div class="col-md-6 pic-services wow fadeInUp" data-wow-delay=".6s">

            <p>{{ $service->body2 }}</p>

            <img src="{{$service->getFirstMediaUrl('page_image_2')}}" class="img-rounded img-responsive mt10" alt="">
        </div>
    </div>
</div>
</div>
</div>
@endsection
