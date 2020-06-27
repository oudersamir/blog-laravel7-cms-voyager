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
                    <li><a href="{{url('/about')}}" >About</a></li>
                    <li class="is-active"><a href="{{url('/contact')}}" aria-current="page">Contact</a></li>

                </ul>
            </nav>

      <h1 class="title">
       Contactez nous
      </h1>
     
    </div>
  </div>
</section>
<br>
@if(session('status'))
<div class="notification is-primary">
{{session('status')}}
</div>
@endif
<br>
  <div class="container">
  <div class="columns">
          <!-- <div class="column">Email: ouder.samir@gmail.com</div>
          <div class="column">Telephne: 0663238004</div>
          <div class="column">oudersamir</div> -->

          <div class="tile is-ancestor   is-warning is-marginless">
  <div class="tile is-parent">
    <article class="tile is-child box  notification is-success">
      <p class="title">Email</p>
      <p class="subtitle">{{setting('contact.telephone')}}</p>
    </article>
  </div>
  <div class="tile is-parent">
    <article class="tile is-child box  notification is-success">
      <p class="title">Telephone</p>
      <p class="subtitle">{{setting('contact.email')}}</p>
    </article>
  </div>
  <div class="tile is-parent">
    <article class="tile is-child box  notification is-success">
      <p class="title">Reseaux sociaux</p>
      <p class="subtitle">With some content</p>
     
    </article>
  </div>
</div>
  </div>
  <div class="columns">
  <div class="column is-9">


   {!! setting('contact.maps') !!}
  </div>
  <div class="column is-3">
  <form action="{{url('/contact')}}"  method="post">
  {{csrf_field()}}
  <div class="field">
          <label for="nom" class="label">Votre nom</label>
          <div class="control">
          <input value="{{old('name')}}"  id="nom" type="text" name="name" class="input @if($errors->has('name')) is-danger @endif" placeholder="Votre nom complet">
          </div>
          @if($errors->has('name'))
          <p class="help is-danger">{{$errors->first('name')}}</p>
          @endif
  </div>
  <div class="field">
          <label for="email" class="label">Email</label>
          <div class="control">
          <input value="{{old('email')}}"  id="email" type="text"  name="email"  class="input @if($errors->has('email')) is-danger @endif" placeholder="Email">
          </div>
          @if($errors->has('email'))
          <p class="help is-danger">{{$errors->first('email')}}</p>
          @endif
  </div>
  <div class="field">
          <label for="message" class="label">Message</label>
          <div class="control">
          <textarea  id="message" type="text"  name="message"  class="input @if($errors->has('message')) is-danger @endif" placeholder="message">{{old('message')}}</textarea>
          </div>
          @if($errors->has('message'))
          <p class="help is-danger">{{$errors->first('message')}}</p>
          @endif
  </div>
  <button class="button is-success"  type="submit">Envoyer</button>
        
  </form>
  </div>
  </div>
  </div>

@endsection  
