@extends('master')
@section('title',$product->name)
@section('content')

  <section class="py-5">
  <h1 class="text-center my-5">{{$product->name}}</h1>
    <div class="container">
    <div class="row">
    
    <div class="col-6">
    
    <img src="{{asset('storage/'.$product->image)}}" class="img-fluid" alt="">

</div>

<div class="col-6"> 

    <h3>{{$product->name}}</h3>
    <p><ins>{{$product->sale_price}}EGY</ins>
    <del>{{$product->price}}EGY</del></p>
    <p>{!!$product->content!!}</p>
    @auth
    <form action="{{route('ordersave')}}" method="post">
     @csrf
     <input type="hidden" name="product_id" value="{{$product->id}}">
<label for="qnt" class="form-label">QNT</label>
<input type="number" id="qnt" class="form-control" name="qnt">

    <button class="btn btn-primary mt-3 "type="submit">ORDER NOW</buttton>
    </form>
@else
<a href="{{route('login')}}" class="btn btn-primary">LOGIN</a>
<a href="{{route('register')}}" class="btn btn-primary">register</a>
@endauth

    </div>
    
    </div>
    </div>
    </section>
    
    <div id='app'>
      <div class="container py-5">
        <h2>comments</h2>
        <p v-for="comment in comments">
          {% comment .comment %}
        </p>
        <div>
        <!-- {% newcomment %} -->
        <p class="alert alert=success" v-if="successMsg">{% successMsg %}</p>
        <textarea  v-model="newcomment" class="form-control"></textarea>
        <button class="btn btn-primary mt-3" @click="createComment">comment</button>

        </div>

      </div>

    </div>

    <script>
    var app = new Vue({
  el: '#app',

  delimiters: ['{%', '%}'],   
  data: {
    comments:[],
    newcomment: '',
    successMsg:''
  },
  mounted: function (){
    axios.get('{{route ('comments',$product)}}')
    .then(response=>this.comments =response.data)
  },
  methods:{
    createComment:function(){
      // this.newcomment='send'
      let commentData={
        'product_id':{{$product->id}},
        'comment':this.newcomment

      }
      axios.post('{{route ('commentSave')}}', commentData)
    .then(response=>this.comments=response.data)
    this.successMsg ='Comment created successfully';
    }
  }
})
</script>



    <!-- <h1>Hello, world!</h1> -->
    @endsection
    