@extends('master')
@section('content')


<section class="hero is-light">
  <div class="hero-body">
    <div class="container ">

            <nav class="breadcrumb is-large is-centered" aria-label="breadcrumbs">
                <ul>
                    <li><a href="{{url('/')}}">Accueil</a></li>
                    <li ><a href="{{url('/blog')}}" >Blog</a></li>
                    <li><a href="{{url('/services')}}">Service</a></li>
                    <li class="is-active"  aria-current="page"><a href="{{url('/about')}}">About</a></li>
                </ul>
            </nav>

      <h1 class="title">
       {{$page->title}}
      </h1>
     <h4 class="subtitle">
         {{$page->excerpt}}
     </h4>
    </div>
  </div>
</section>

<div class="container">
<div class="conlumns">
<div class="column">
<p>
{!! $page->body !!}
</p>

</div>
</div>
</div>

@endsection  
