
        <!-- section begin -->
        <section id="section-testimonial-kitchen" data-bgimage="url({{ asset('images/background/1.jpg') }}) fixed">
            <div class="container">
                <div class="row">

                    <div class="col-md-8 offset-md-2">

                        <div id="testimonial-carousel-single" class="owl-carousel owl-theme wow fadeInUp">

                            @foreach ($testimonials as $testimonial)
                                <blockquote class="testimonial-big">
                                    {{-- <span class="title">Modern and great design!</span> --}}
                                    {{ $testimonial->content }}

                                    <span
                                        class="name">{{ $testimonial->author_name . ', ' . $testimonial->author_ }},
                                        Customer</span>
                                </blockquote>
                            @endforeach

                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- section close -->