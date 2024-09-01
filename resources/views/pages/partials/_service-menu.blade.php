<div class="container">
    <div class="row my-5">
        <div id="sidebar" class="col-md-3 wow fadeInUp">
            <ul id="services-list" class="s1">
                @foreach ($services as $service)
                <li><a href="{{route('service.show', $service)}}">{{$service->title}}</a></li>
                @endforeach
                
            </ul>
        </div>

  