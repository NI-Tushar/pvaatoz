@extends('layouts.middle')
@push('title')
<link rel="stylesheet" href="{{url('style/css/product_desc.css')}}">
<title>Buy Varified Facebook Account | PVAATOZ</title>
@endpush




@section('middle_section')



<style>
  .product-image {
    background: linear-gradient(to bottom, #3d67f3 0%, #001f83 100%);
  }
  .footer > a > button {
    background: linear-gradient(to bottom, #3d67f3 0%, #001f83 100%);
    box-shadow: 0 10px 30px 0 rgba(4, 33, 112, 0.7);
  }
  .footer > a > button:hover {
    background: linear-gradient(to bottom, #001f83 0%, #3d67f3 100%);
  }
  .product-details .price .current,
  .product-details .rate a.active, .product-details .rate a:hover{
    color: #3d67f3;
  }
</style>



<div class="pro_desc">

  
  <div class="container">
    <!--   https://www.jerecho.com/codepen/nike-product-page/ -->
    <div class="product-image">
      <!-- <img src="http://co0kie.github.io/codepen/nike-product-page/nikeLogo.png" alt="" class="product-logo"> -->
      <img  src="{{url('resource/images/product_poster/facebook_poster.png')}}" alt="" class="product-pic">

    </div>
    
    <div class="product-details">
      <header>
        <h1 class="title"><span id="quantity">{{$qty}}</span>{{$name}}</h1>
        <span class="colorCat">{{$pack}}</span>
        <div class="price">
          <span class="before">${{$xprice}}</span>
          <span id="current" class="current">${{$price}}</span>
        </div>
        <div class="rate">
          <a href="#!" class="active">★</a>
          <a href="#!" class="active">★</a>
          <a href="#!" class="active">★</a>
        <a href="#!">★</a>
        <a href="#!">★</a>
      </div>
    </header>
    <article>
      <h5>Description</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </article>

    <div class="controls">

      <div class="color">
        <h5>Number of Package</h5>
        <input type="number" name="" id="package" class="pack" min=1 value =1 onchange="price_func()">
      </div>

      <div class="size">
        <h5>Packages</h5>
        <a href="#!" id="to_pack" class="">1</a>
      </div>

      <div class="size">
        <h5>Quantity</h5>
        <a href="#!" id="quant" class=""></a>
      </div>

      <div class="qty">
        <h5>Total Price</h5>
        <a id="to_price" class=""></a>
      </div>

      <script>
        var price = document.getElementById("current").innerText;
        var quantity = document.getElementById("quantity").innerText;
        document.getElementById("to_price").innerHTML = price;

        quantity = Number(quantity);
        document.getElementById("quant").innerHTML = quantity;
        price = price.substring(1);
        price = Number(price);

        function price_func() {
          var pack = document.getElementById("package").value;
          document.getElementById("to_pack").innerHTML = pack;
          
          document.getElementById("quant").innerHTML = quantity*pack;
          document.getElementById("to_price").innerHTML = price*pack+' $';
        }
      </script>
    </div>
    
    <div class="footer">
    <a href="{{url('/checkout')}}">
      <button type="button">
        <img src="http://co0kie.github.io/codepen/nike-product-page/cart.png" alt="">
        <span>Add to cart</span>
      </button>
    </a>
      <a href="#!"><img src="http://co0kie.github.io/codepen/nike-product-page/share.png" alt="">
    </a>
    </div>
  </div>

</div>


</div>



@endsection