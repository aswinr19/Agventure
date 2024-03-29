@extends('layouts.layout')
@section('content')

<style>
 .product-name {
    font-weight: 900;
    font-size: 15px;
    color: #333;
}
.products-grid .price-box{
    color: #3C8031 !important;
    font-weight: 600;
    font-size: 13px;
}
.price-box .old-price {
    margin: 0;
    color: #ccc;
    float: left;
    font-weight: 600;
}
 .short-desc {
    height: 40px;
    overflow: hidden;
    color: #666;
    font-size: 12px;
}
.img{
  display: flex;
  align-items: center;
  justify-content: center;
}
.text{

}
.empty{


}


</style>
<br> <br> <br>

<!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src=" {{ asset('img1.png') }}" alt="First slide" width="1100" height="400" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img2.png') }}" alt="Second slide" width="1280" height="500" >
    </div> 
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img2.png') }}" alt="Third slide" width="1280" height="500" >
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->




<!-- <center style="padding: 18px 0px 0px 0px;">
  <h1>Popular Products</h1>
</center>

<div class="row" style="padding: 29px;">
  -->
   <!-- ------------------- -->
   @if ($products->count())

    @foreach($products as $product) 
   
    <!-- <div class="container" style="display:grid">
  <div class="row">
    <div class="col-sm">

    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{ asset('images/'. $product->image) }}"" alt="{{ $product->name }} "  style="height:159px;">
  <div class="card-body">
    <p class="card-text">{{ \Illuminate\Support\Str::limit($product->description, 150, $end='...') }}</p>
  </div>
</div> -->


<!-- 

  <div class="card" style="width: 15rem;">
  <img class="card-img-top" src="{{ asset('images/'. $product->image) }}"" alt="{{ $product->name }}" style="height:159px;"alt="Card image cap">
  <div class="card-body" style="padding:.8rem">
    <p class="card-text">
    <div class="product-shop">
<h3 class="product-name" itemprop="name">{{ $product->name }}</h3>
<div class="price-box">
<p class="old-price">
<span class="price">
<span><span class="price">₹275.00</span></span>
<span class="strike-through"></span>
</span>
<span class="label-price">/500g</span>
</p> <br>
<p class="special-price">
<span class="price">
<span><span class="price">₹{{ $product->price }}.00</span></span>
</span>
<span class="label-price">/500g</span>
</p>
</div>
<div class="short-desc ellipsis-text">{{ \Illuminate\Support\Str::limit($product->description, 150, $end='...') }}</div>

</div>
    </p>
  </div>
</div>
</div>
  </div>
</div> -->
  @endforeach
   
  @else
       <p>No products yet. Please check back later.</p>
   @endif
<br> <br> <br> <br>
<div class="img container"><img src="{{ asset('sammy-man-gardener-digging-up-a-carrot.png')}}" alt="plant image" height="350px"></div>
<p class=" text container">
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus magnam iure tenetur! Deserunt, eos blanditiis. Accusantium alias rem officia eos, sapiente, voluptatem aspernatur sunt deserunt maiores iste numquam quod magnam?
  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod expedita commodi fugiat. Cum quae placeat iusto dolores nostrum veritatis aspernatur pariatur sequi nulla, quidem ea incidunt optio atque fugiat asperiores!</p>
</div>
<br> 
<div class="img container" ><img src="{{ asset('sammy-man-and-woman-shopping.png')}}" alt="plant image" height="350px"></div>
<p class=" text container">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla officia praesentium cupiditate recusandae fugit aspernatur officiis deserunt dolores reiciendis suscipit quae ut odio soluta consequuntur consectetur sit distinctio, sed porro!  
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem, libero voluptate. Quisquam iure reiciendis placeat quibusdam commodi assumenda dolorem amet vel ipsam. Minima possimus nostrum eligendi est neque voluptatem repudiandae!</p>
</div>
<br>
<div class="container-sm"></div>
 <div class="img container-sm" ><img src="{{ asset('sammy-plant.png')}}" alt="plant image" height="350px"></div>
 <p class=" text container">
 Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi voluptate esse omnis minus magnam nihil perferendis voluptatum eaque soluta quae, nemo obcaecati modi, molestiae ratione iusto. Ipsum cum nostrum neque?  
 Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur vero incidunt debitis sunt consequatur nulla impedit ratione ea quibusdam delectus non, placeat in magni quaerat ab nobis, aperiam nostrum enim.</p>
</div>
<br> <br> <br>

@endsection
