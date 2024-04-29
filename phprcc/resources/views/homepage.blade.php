@extends('master')
@section('title',"SOUQ HOMEPAGE")
@section('content')




<section>
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
  @foreach ($slides as $slide)
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$loop->index}}" 
    class="@if($loop->first) active @endif" aria-current="true" aria-label="Slide {{$loop->iteration}}"></button>
    @endforeach
  </div>
  <div class="carousel-inner">
    @foreach ($slides as $slide)
    <div class="carousel-item @if($loop->first) active @endif ">
      <img src="{{ asset('storage/' . $slide->image)}}" class="d-block w-100 vh-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5> {{ $slide->title}}</h5>
        <p>{{ $slide->subtitle}}</p>
      </div>
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>



<section class="my-5">
    <h2 class="text-center my-4">RECENT PRODUCT</h2>
    <div class="container">
    <div class="row">
    @foreach($products as $product)
    <div class="col-md-4">
    <div class=shadow>

    <img src="{{asset('storage/'.$product->image)}}" class="img-fluid " alt="">
    <div class="p-5">
    <h3>{{$product->name}}</h3>
    <p><ins>{{$product->sale_price}}EGY</ins>
    <del>{{$product->price}}EGY</del></p>
    <a href ="{{route('single',$product)}}">READ MORE</a>
    </div>    
</div>
    </div>
    
    @endforeach
    </div>
    </div>
    </section>


    <!-- <section class="my-5 py-5">
    <div id="app">
  {% message %}  <strong>{% name %}</strong> 
<a v-bind:href="url">{% social %}</a>
<input type="text" v-model="social">
<input type="text" v-model="url">
<ul>
    <li v-for="film in films">{% film %}</li>
</ul>
</div>
</section> -->


<!-- 
<script>
    var app = new Vue({
  el: '#app',

  delimiters: ['{%', '%}'],   
  data: {
    message: 'Hello Vue!',
    name:"fady",
    social:"facebook",
    url:"https://facebook.com",
    films:['matrix','rings','avengers']
  }
})
</script>
 -->



    <!-- <h1>Hello, world!</h1> -->
    @endsection


