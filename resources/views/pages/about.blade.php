@extends('layouts.front.base')
@section('subheader')
    <!-- subheader -->
    @include('pages.partials._subheader')
    <!-- subheader close -->
@endsection
@section('content')
    <section id="section-about-us-2" class="side-bg no-padding">
        <div class="image-container col-md-5 pull-left" data-delay="0"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-6 " data-animation="fadeInRight" data-delay="200">
                    <div class="inner-padding">
                        <h2>Award-Winning Film Production in Lagos</h2>

                        <p class="intro">At Fortress Studios, we blend technical mastery with creative vision to produce
                            compelling cinematic experiences. Our dedication to quality and innovation has made us a leader
                            in Nigeria's film industry.</p>

                        From the heart of Lagos, Fortress Studios has been transforming creative ideas into visual
                        realities. With a focus on storytelling, our studio combines the latest technology with a talented
                        team led by renowned cinematographer Moses Inyang. Our projects range from independent films to
                        major commercial productions, each crafted with precision and care.

                        Whether directing, shooting, editing, or producing, we ensure that every aspect of the production
                        process is handled with professionalism and artistic flair. Our commitment to excellence has not
                        only earned us a reputation for quality but also numerous awards and accolades within the industry.

                        At Fortress Studios, we are passionate about filmmaking and dedicated to nurturing the next
                        generation of filmmakers through our comprehensive workshops and training programs. Join us as we
                        continue to push the boundaries of what is possible in cinema.
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-team">
        <div class="container">

            <div class="row">
                <div class="col-md-12 container-3">
                    <!-- team member -->
                    @forelse ($staffs as $team)
                        <div class="de-team-list">
                            <div class="team-pic">
                                <img src="{{ $team->getFirstMediaUrl('avatar', '400') }}" class="img-responsive"
                                    alt="image of {{ $team->name }}" />
                            </div>
                            <div class="team-desc col-md-12">
                                <h3>{{ $team->name }}</h3>
                                <p class="lead">{{ $team->expertise }}</p>
                                <div class="small-border"></div>
                                <p>{{ $team->bio_statement }}</p>

                                <div class="social">
                                    <a href="{{ $team->linkedin_link }}"><i class="fa fa-linkedin fa-lg"></i></a>
                                    <a href="{{ $team->twitter_link }}"><i class="fa fa-twitter fa-lg"></i></a>
                                    <a href="{{ $team->email_address }}"><i class="fa fa-envelope fa-lg"></i></a>
                                    <a href="{{ $team->instagram_link }}"><i class="fa fa-instagram fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- team close -->

                    @empty
                    @endforelse
                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </section>

    <section id="section-testimonial" class="text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                    <h1>Customer Says</h1>
                    <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                    <div class="spacer-single"></div>
                </div>
            </div>
            <div id="testimonial-carousel" class="owl-carousel owl-theme de_carousel wow fadeInUp" data-wow-delay=".3s">
                @forelse ($testimonials as $testimonial)
                    <div class="item">
                        <div class="de_testi">
                            <blockquote>
                                <p>{{$testimonial->content}}.</p>
                                <div class="de_testi_by">
                                    {{$testimonial->author_name}}, {{$testimonial->author_company}}
                                </div>
                            </blockquote>

                        </div>
                    </div>

                @empty
                @endforelse

            
            </div>
        </div>
    </section>
    <!-- section close -->
    @include('pages.partials._contact_us')
@endsection
