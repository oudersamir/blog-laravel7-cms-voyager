@extends('master')

@section('content')

<!-- 
<div class="carousel carousel-animated carousel-animate-slide"  data-autoplay="true">
     <div class="carousel-container">
          @foreach($slides as $slide)
          <div class="carousel-item has-background is-active">
               <img class="is-background" src="{{asset('/storage/'.$slide->image)}}" alt=""  width="100%" height="100%" class="is-background">
               <div class="title">{{$slide->title}}</div>
          </div>
          @endforeach
       
     </div>
     <div class="carousel-navigation is-centered">
          <div class="carousel-nav-left">
          <i class="fa fa-chevron-left"  aria-hidden="true"></i>
          </div>
          <div class="carousel-nav-right">
          <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </div>
     </div>

     </div>
</div> -->


<img src="{{asset('/storage/slides/June2020/4IDP2eNJjhYcHP5nu4No.jpg')}}" alt=""  width="100%" height="50%">






<div class="is-divider"  data-content="Nos services"></div>

<div class="hero is-light">
     <div class="hero-body">
          <div class="container">
          <div class="container">  

     <div class="columns  is-marginless">
     @foreach($services as $service)
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
                                            <a href="{{url('services/'.$service->id)}}" class="button is-success">Voir plus</a>
                                           
                                        </div>
                                        </div>

                                    </div>
                </div>
          
          </div>
          @endforeach
     </div>

</div> 
</div>
</div>
</div>

<br>
<br>
<br>
<div class="is-divider"  data-content="Nos actualites"></div>

<div class="hero is-light">
     <div class="hero-body">
          <div class="container">

@foreach($posts->chunk(3)  as $chunk)
     <div class="columns  is-marginless"   >
     @foreach($chunk as $post)
     <div class="column">
           <div class="card">
                               <div class="card-image">
                                   <figure class="image is-16by9">
                                       <a href="{{url('/blog/'.$post->slug)}}">
                                           <img src="{{asset('/storage/'.$post->image)}}" alt="Placeholder image">
                                       </a>                                      
                                   </figure>
                               </div>
                               <div class="card-content">
                                   <div class="media">
                                   
                                   <div class="media-content">
                                       <p class="title is-4">{{$post->title}}</p>
                                      
                                   </div>
                                   </div>

                                   <div class="content">
                                      

                                       {{ substr(strip_tags($post->excerpt), 0, 100) }}


                                   <br>
                                   <time >{{Carbon\Carbon::parse($post->created_at)->toFormattedDateString()}}</time>
                                   </div>
                               </div>
           </div>
     
     </div>
     @endforeach
     </div>
     @endforeach
          </div>
     </div>
</div>



@endsection  
@section('stylesheet')
<link rel="stylesheet" href="{{asset('css/bulma-carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/bulma-divider.min.css')}}">

@endsection
@section('javascript')
<script  type="text/javascript" src="{{asset('js/bulma-carousel.min.js')}}"></script>

@endsection