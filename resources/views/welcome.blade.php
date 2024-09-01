@extends('layouts.front.base')
@section('content')



            <!-- youtube video background begin -->
            <section class="full-height no-padding jarallax" data-video-src="mp4:{{asset('images/video.mp4')}}">
                <div class="de-video-container">
                    <div class="de-video-content">
                        <div class="text-center">
                            <div id="text-carousel" class="owl-carousel owl-theme text-slider style-2 border-deco">
                                <div class="item">Leading the African Film Scene<span class="u"></span></div>
                                <div class="item">Fortress Studios<span class="u"></span></div>
                                <div class="item">Creativity Meets Craft<span class="u"></span></div>
                            </div>
                        </div>
                    </div>

                    <div class="de-video-overlay"></div>

                    {{-- <!-- load your video here -->
                    <div class="mk-video-mask"></div>

                    <!-- Video Background - Here you need to replace the videoURL with your youtube video URL -->
                    <a id="bgndVideo" class="player"
                        data-property="{videoURL:'NGl9wab1S8E',containment:'#section-video-bg',autoPlay:true, mute:false, startAt:5, opacity:1}">youtube</a> --}}

                </div>

            </section>
            <!-- youtube video background close -->

            <section id="section-why-choose-us-2">

                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 text-center">
                            <h3 class="style-1"><span class="id-color">We Tell Amazing Stories</span></h3>
                            <h2 class="style-5">Where Creativity Meets Craft in Nigerian Cinema</h2>
                            <p class="lead">At Fortress Studios Nigeria, we thrive on the magic of storytelling. Our
                                foundation is built on a deep passion for cinematic artistry—where bold ideas meet
                                technical mastery to create unforgettable film experiences. We're all about bringing
                                visions to life, from stirring narratives to breathtaking visuals, making each project
                                not just a film, but a masterpiece that resonates with audiences everywhere.</p>
                            <div class="spacer-single"></div>
                        </div>

                        @foreach ($services as $service)
                            <div class="col-md-4 mb-10">
                                <a class="image-popup-no-margins" href="{{ $service->getFirstMediaUrl('featured', '800') }}">
                                    <img src="{{ $service->getFirstMediaUrl('featured', '800') }}"
                                        class="img-responsive img-rounded" alt="{{ $service->title }}">
                                </a>
                                <div class="spacer-single"></div>
                                <h3 class="style-1"><a href="{{route('service.show', $service)}}">{{ $service->title }}</a></h3>
                                {{ $service->excerpt }}
                            </div>
                        @endforeach




                        <div class="spacer-single"></div>

                        <div class="col-md-12 text-center">
                            <a href="{{ route('services') }}" class="btn-custom">Read More</a>
                        </div>

                    </div>
                </div>
            </section>

            <div class="spacer-single"></div>


            <div class="owl-custom-nav">
                <a class="btn-next"></a>
                <a class="btn-prev"></a>
            </div>

            <div id="gallery-carousel-3" class="owl-carousel owl-theme owl-slide">
                @foreach ($films as $film)
                    <!-- gallery item -->
                    <div class="item">
                        <div class="picframe">
                            <a class="simple-ajax-popup-align-top" href="">
                                <span class="overlay-v">
                                    <span class="pf_text">
                                        <span class="project-name">{{ $film->title }}</span>
                                    </span>
                                </span>
                            </a>
                            <img src="{{ $film->getfirstMediaUrl('featured', '700') }}" alt="" />
                        </div>

                    </div>
                    <!-- close gallery item -->
                @endforeach



            </div>
        </div>
        <div class="spacer-single"></div>
        <div class="spacer-single"></div>
        <div class="spacer-single"></div>


        @include('pages.partials._testimonials')
        @include('pages.partials._contact_us')


        <!-- section begin -->
        <section id="section-pattern-1">

            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center">
                        <h3 class="style-1"><span class="id-color">We Unlock Creativity</span></h3>
                        <h2 class="style-5">Why Choose Fortress Studios?</h2>
                        <p class="lead">Fortress Studios is not just a film production company; it's a hub of
                            innovation and creativity. Our experienced team, state-of-the-art technology, and
                            personalized services ensure that each project not only meets but exceeds expectations.
                            Partner with us to transform your cinematic dreams into breathtaking realities. </p>
                        <div class="spacer-single"></div>
                    </div>

                    <div class="col-md-4">
                        <div class="box-icon">
                            <span class="icon"><i class="id-color icon-camera"></i></span>
                            <div class="text">
                                <h3 class="style-1">Cutting-Edge Technology</h3>
                                <p>Benefit from the latest advancements in film technology, enabling us to produce
                                    visually stunning and technically superior films.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="box-icon">
                            <span class="icon"><i class="id-color icon-trophy"></i></span>
                            <div class="text">
                                <h3 class="style-1">Expert Crew</h3>
                                <p>Collaborate with our team of highly skilled professionals, led by the renowned
                                    cinematographer Moses Inyang, dedicated to excellence.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="box-icon">
                            <span class="icon"><i class="id-color icon-paintbrush"></i></span>
                            <div class="text">
                                <h3 class="style-1">Creative Freedom</h3>
                                <p>We champion creative freedom, offering a supportive environment where your unique
                                    vision can flourish and become a captivating film.</p>
                            </div>
                        </div>
                    </div>


                    <div class="spacer-single"></div>

                    <div class="col-md-4">
                        <div class="box-icon">
                            <span class="icon"><i class="id-color icon-clipboard"></i></span>
                            <div class="text">
                                <h3 class="style-1">Comprehensive Services</h3>
                                <p>Enjoy a full spectrum of film production services from pre-production planning to
                                    sophisticated post-production editing all under one roof.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="box-icon">
                            <span class="icon"><i class="id-color icon-recycle"></i></span>
                            <div class="text">
                                <h3 class="style-1"> Industry Connections</h3>
                                <p>Leverage our extensive network within the film industry to connect with top talent
                                    and secure distribution channels.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="box-icon">
                            <span class="icon"><i class="id-color icon-adjustments"></i></span>
                            <div class="text">
                                <h3 class="style-1">Customized Services</h3>
                                <p>We offer personalized service solutions specifically designed to meet the unique
                                    requirements of your project, ensuring a distinctive and effective final product..
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->



        <!-- section begin -->
        <section id="section-fun-facts" class="text-light" data-bgcolor="#33353a">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-md-3 fadeIn" data-wow-delay="0">
                        <h2>Fun Facts</h2>
                    </div>
                    <div class="col-md-3 wow fadeIn" data-wow-delay=".25s">
                        <div class="de_count no-padding">
                            <h3 class="timer" data-to="{{$websiteInfo->projects_counter}}" data-speed="2500">0</h3>
                            <span class="text-light">Projects Completed</span>
                        </div>
                    </div>

                    <div class="col-md-3 wow fadeIn" data-wow-delay=".5s">
                        <div class="de_count no-padding">
                            <h3 class="timer" data-to="{{$websiteInfo->awards_counter}}" data-speed="2500">0</h3>
                            <span class="text-light">Awards Won</span>
                        </div>
                    </div>

                    <div class="col-md-3 wow fadeIn" data-wow-delay=".75s">
                        <div class="de_count no-padding">
                            <h3 class="timer" data-to="{{$websiteInfo->experience_counter}}" data-speed="2500">0</h3>
                            <span class="text-light">Years in Business</span>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- section close -->

    @include('pages.partials._gallery-section')
    </div>

@endsection

@section('scripts')
    
<script src="{{ asset('js/jquery.mb.YTPlayer.min.js') }}"></script>
<script type="text/javascript">
    (function($) {
        "use strict";
        jQuery(".player").mb_YTPlayer();
    })(jQuery);
</script>
@endsection