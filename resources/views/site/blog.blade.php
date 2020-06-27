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
        Mes derniers Posts
      </h1>
     
    </div>
  </div>
</section>
  <div class="container">


  <div class="tabs is-toggle is-fullwidth">
  <ul>
    <li class="@if($categorie_slug=='all')  is-active @endif ">
      <a href="{{url('/blog')}}">
        <span>All</span>
      </a>
    </li>
    @foreach($categories as $categorie)
    <li   class="  @if($categorie_slug==$categorie->slug)  is-active @endif ">
      <a     href="{{url('/posts/'.$categorie->slug)}}" >
        <span>{{$categorie->name   }}    </span>
      </a>
    </li>
    @endforeach
  </ul>
</div>



      

          @foreach($posts->chunk(3)  as $chunk)
          <div class="columns  is-marginless"   >
          @foreach($chunk as $post)
          <div class="column">
                <div class="card">
                                    <div class="card-image">
                                        <figure class="image is-16by9">
                                            <a href="{{url('/blog/'.$post->slug)}}">
                                                <img src="{{asset('/storage/'.$post->image)}}" alt="{{$post->title}}">
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
                                        <a href="{{url('/posts/'.$categorie->slug)}}" >
                                            <span>{{$categorie->name}}</span>
                                          </a>
                                          <br>

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


          <div class="is-marginless columns">
              
              <div class="column is-half"  align="left">
              @if($posts->currentPage()!=1)
                  <a href="{{$posts->previousPageUrl()}}" class="button is-dark"><span>Precedent</span></a>
                  @endif
              </div>
              
              

              <div class="column is-half"  align="right">
              @if($posts->hasMorePages())
                  <a href="{{$posts->nextPageUrl()}}" class="button is-dark">
                      <span>Suivant</span>
                  </a>
               @endif
                </div>
              
          </div>
          
     
    </div>

@endsection  
