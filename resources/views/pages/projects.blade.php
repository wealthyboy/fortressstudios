@extends('layouts.front.base')
@section('content')



<section id="section-text">
    <div class="container">
        <div class="col-md-12">
            @forelse ($films as $film)
            <div class="de_large-portfolio">
                <a class="d_inner" href="{{route('project.show', $film)}}">
                    <h2 class="ultra-big wow fadeInUp" data-wow-delay=".2s">{{$film->title}}</h2>
                    <div class="d_image">
                        <img src="{{$film->getFirstMediaUrl('featured', '700')}}" alt="banner image for {{$film->project_type .' : ' .$film->genre.', '.$film->release_dat}}" class="img-fluid wow fadeInUp">
                        <span>{{$film->project_type .' : ' .$film->genre.', '.$film->release_date}}</span>
                    </div>
                </a>
            </div>
            @empty
            <div class="de_large-portfolio">
                <a class="d_inner" href="">
                    <h2 class="ultra-big wow fadeInUp" data-wow-delay=".2s">Twin Den Spire</h2>
                    <div class="d_image">
                        <img src="{{asset('images/images-artist/portfolio/1.jpg')}}" alt="" class="img-fluid wow fadeInUp">
                        <span>Movie: Shot by Fortress Studios, 2023</span>
                    </div>
                </a>
            </div>
            @endforelse
            
        </div>
    </div>
</section>

 <!-- section close -->
 @include('pages.partials._contact_us')


@endsection
