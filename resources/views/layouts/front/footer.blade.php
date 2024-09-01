<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('images/logo.png')}}" class="logo-small" alt=""><br>Explore Fortress Studios
                Nigeria, led by Moses Inwang—your destination for expert film production in Lagos. Discover our
                award-winning services and technology
            </div>

            @if (count($films) > 0)
            <div class="col-md-4">
                <div class="widget widget_recent_post">
                    <h3 class="style-1">Latest Projects</h3>
                    <ul>
                        @foreach ($films->take(5) as $film)
                        <li><a href="{{route('project.show', $film)}}">{{$film->title}}</a></li>
                        @endforeach
                        
                    </ul>
                </div>
            </div>
                @else
                <div class="col-md-4">
                    <div class="widget widget_recent_post">
                        <h3 class="style-1">Services</h3>
                        <ul>
                            @foreach ($services->take(5) as $film)
                            <li><a href="{{route('service.show', $film)}}">{{$film->title}}</a></li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
            @endif
           

            <div class="col-md-4">
                <h3 class="style-1">Contact Us</h3>
                <div class="widget widget-address">
                    <address>
                        <span>{{$websiteInfo->address}}</span>
                        <span><strong>Phone:</strong>{{$websiteInfo->phone}}</span>
                        <span><strong>Email:</strong><a
                                href="mailto:{{$websiteInfo->contact_email}}">{{$websiteInfo->contact_email}}</a></span>
                        <span><strong>Web:</strong><a href="{{url('/')}}">{{url('/')}}</a></span>
                    </address>
                </div>
            </div>
        </div>
    </div>

    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    &copy; website by  <a href="http://www.salitastech.com" target="_blank" rel="noopener noreferrer"><span class="id-color">Salitas Technology Solutions</span></a>
                </div>
                <div class="col-md-6 text-right">
                    <div class="social-icons">
                        <a href="{{$websiteInfo->facebook_link}}"><i class="fa fa-facebook fa-lg"></i></a>
                        <a href="{{$websiteInfo->x_link}}"><i class="fa fa-twitter fa-lg"></i></a>
                        <a href="{{$websiteInfo->instagram}}"><i class="fa fa-instagram fa-lg"></i></a>
                        <a href="{{$websiteInfo->linked_in}}"><i class="fa fa-linkedin fa-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" id="back-to-top"></a>
</footer>