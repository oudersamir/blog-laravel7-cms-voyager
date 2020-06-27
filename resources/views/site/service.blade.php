@extends('master')
@section('content')
<section class="hero is-light">
  <div class="hero-body">
    <div class="container ">

            <nav class="breadcrumb is-large is-centered" aria-label="breadcrumbs">
                <ul>
                    <li><a href="{{url('/')}}">Accueil</a></li>
                    <li class="is-active"><a href="{{url('/blog')}}" aria-current="page">Blog</a></li>
                    <li><a href="{{url('/services')}}">Service</a></li>
                    <li><a href="{{url('/about')}}">About</a></li>
                </ul>
            </nav>

      <h1 class="title">
       {{$service->title}}
      </h1>
     <h4 class="subtitle">
         {{$service->description}}
     </h4>
    </div>
  </div>
</section>

<div class="container">
    <div class="columns">
        <div class="column is-marginless">
            <figure class="image is-4by3">
            <img src="{{asset('/storage/'.$service->image)}}" alt="">
            </figure>           
            <p>
                {!! $service->body  !!}
            </p>
        </div>
    </div>
</div>
@endsection  
