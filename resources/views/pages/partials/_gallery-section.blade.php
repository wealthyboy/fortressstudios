    <!-- section begin -->
    <section id="section-portfolio" aria-label="section-portfolio" class="no-top no-bottom">
        <div class="grid" data-col="4" data-gridspace="0" data-ratio="466/700">
            <div class="grid-sizer"></div>
          
            @foreach ($gallery as $image)
            <div class="grid-item {{ $image->orientation == 'wide' ? 'large-width' : 'large-height' }} hospitaly">
                <!-- gallery item -->
                <div class="item">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="">
                            <span class="overlay">
                                <span class="pf_title">
                                    <span class="project-name">{{ $image->title }}</span>
                                </span>
                            </span>
                        </a>
        
                        <img src="{{ $image->getFirstMediaUrl('image') }}" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->
            </div>
        @endforeach
        
            {{-- <div class="grid-item large-width hospitaly">
                <!-- gallery item -->
                <div class="item">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="project-details-2.html">
                            <span class="overlay">
                                <span class="pf_title">
                                    <span class="project-name">Modern Elegance Suite</span>
                                </span>
                            </span>
                        </a>

                        <img src="images/portfolio-new/pf%20(2).jpg" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->
            </div>
            <div class="grid-item large-height hospitaly">
                <!-- gallery item -->
                <div class="item">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="project-details-3.html">
                            <span class="overlay">
                                <span class="pf_title">
                                    <span class="project-name">Apartment Renovation</span>
                                </span>
                            </span>
                        </a>

                        <img src="images/portfolio-new/pf%20(3).jpg" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->
            </div>
            <div class="grid-item residential">
                <!-- gallery item -->
                <div class="item">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="project-details-youtube.html">
                            <span class="overlay">
                                <span class="pf_title">
                                    <span class="project-name">Youtube Video</span>
                                </span>
                            </span>
                        </a>
                        <img src="images/portfolio-new/pf%20(4).jpg" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->
            </div>
            <div class="grid-item large-height office">
                <!-- gallery item -->
                <div class="item">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="project-details-vimeo.html">
                            <span class="overlay">
                                <span class="pf_title">
                                    <span class="project-name">Vimeo Video</span>
                                </span>
                            </span>
                        </a>
                        <img src="images/portfolio-new/pf%20(5).jpg" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->
            </div>
            <div class="grid-item commercial">
                <!-- gallery item -->
                <div class="item">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="project-details.html">
                            <span class="overlay">
                                <span class="pf_title">
                                    <span class="project-name">Restaurant In Texas</span>
                                </span>
                            </span>
                        </a>
                        <img src="images/portfolio-new/pf%20(6).jpg" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->
            </div>

            <div class="grid-item large-width office">
                <!-- gallery item -->
                <div class="item office">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="project-details.html">
                            <span class="overlay">
                                <span class="pf_title">
                                    <span class="project-name">Office On Space</span>
                                </span>
                            </span>
                        </a>

                        <img src="images/portfolio-new/pf%20(8).jpg" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->
            </div>

            <div class="grid-item residential">
                <!-- gallery item -->
                <div class="item residential">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top">
                            <span class="overlay">
                                <span class="pf_title">
                                    <span class="project-name">Summer House</span>
                                </span>
                            </span>
                        </a>

                        <img src="images/portfolio-new/pf%20(7).jpg" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->
            </div> --}}


        </div>
    </section>
    <!-- section close -->
