@extends('master')
@section('content')
<section class="hero is-light">
  <div class="hero-body">
    <div class="container ">

            <nav class="breadcrumb is-large is-centered" aria-label="breadcrumbs">
                <ul>
                    <li><a href="{{url('/')}}">Accueil</a></li>
                    <li ><a href="{{url('/blog')}}" >Blog</a></li>
                    <li class="is-active"><a href="{{url('/services')}}"  aria-current="page">Service</a></li>
                    <li><a href="{{url('/about')}}">About</a></li>
                </ul>
            </nav>

      <h1 class="title">
       Nos services
      </h1>
     
    </div>
  </div>
</section>
  <div class="container">
      

          @foreach($services->chunk(3)  as $chunk)
          <div class="columns  is-marginless"   >
          @foreach($chunk as $service)
          <div class="column">
                <div class="card">
                                    <div class="card-image">
                                        <figure class="image is-16by9">
                                            <a href="{{url('/services/'.$service->id)}}">
                                                <img src="{{asset('/storage/'.$service->image)}}" alt="Placeholder image">
                                            </a>                                      
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="media">
                                        
                                        <div class="media-content">
                                            <p class="title is-4">{{$service->title}}</p>
                                           
                                        </div>
                                        </div>

                                        <div class="content">
                                           

                                            {{ substr(strip_tags($service->description), 0, 100) }}


                                        <br>
                                        <time >{{Carbon\Carbon::parse($service->created_at)->toFormattedDateString()}}</time>
                                        </div>
                                    </div>
                </div>
          
          </div>
          @endforeach
          </div>
          @endforeach


     
    </div>

@endsection  
