
@extends('layouts.middle')
@push('title')
<link rel="stylesheet" href="{{url('style/css/product_desc.css')}}">
<title>Buy Varified Coinbase Account | PVAATOZ</title>
@endpush




@section('middle_section')
<style>
  .product-image {
    background: linear-gradient(to bottom, rgb(0, 109, 233) 0%, rgb(0, 22, 63)  100%);
  }
  .footer >a> button {
    background: linear-gradient(to bottom, rgb(0, 109, 233) 0%, rgb(0, 22, 63)  100%);
    box-shadow: 0 10px 30px 0 rgba(2, 45, 53, 0.7);
  }
  .footer >a> button:hover {
    background: linear-gradient(to bottom, rgb(0, 22, 63) 0%, rgb(0, 109, 233) 100%);
  }
  .product-details .price .current,
  .product-details .rate a.active, .product-details .rate a:hover{
    color: rgb(0, 109, 233);
  }
</style>

<div class="pro_desc">

  
  <div class="container">
    <!--   https://www.jerecho.com/codepen/nike-product-page/ -->
    <div class="product-image">
      <!-- <img src="http://co0kie.github.io/codepen/nike-product-page/nikeLogo.png" alt="" class="product-logo"> -->
      <img  src="{{url('resource/images/product_poster/coinbase_poster.png')}}" alt="" class="product-pic">

    </div>
    <?php
      $qty = $qty;
      $pro_name = $name;
      $price = $price;
    ?>
    <div class="product-details">
      <header>
        <h1 id="product_name" class="title"><span id="quantity">{{$qty}}</span><span id="pro_name"> <?php echo $pro_name;?></span></h1>
        <span class="colorCat">{{$pack}}</span>
        <div class="price">
          <span id="xprice" class="before">${{$xprice}}</span>
          <span id="current" class="current">$<?php echo $price;?></span>
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
      <p>Coinbase accounts come with credentials sent directly to your email. Benefit from a 3-day replacement guarantee and round-the-clock support for an effortless experience.</p>
    </article>

    <div class="controls">

      <div class="color">
        <h5>Number of Package</h5>
        <input type="number" name="package" id="package" class="pack" min=1 value=1  onchange="price_func()">
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
        <script type='text/javascript'>
          
          var price = document.getElementById("current").innerText;
          var quantity = document.getElementById("quantity").innerText;
          var pro_name = document.getElementById("pro_name").innerText;
          
          document.getElementById("to_price").innerHTML = price;
          
          quantity = Number(quantity);
          document.getElementById("quant").innerHTML = quantity;
          
          price = price.substring(1);
          price = Number(price);
          
          function price_func() {
            var pack = document.getElementById("package").value;
            document.getElementById("to_pack").innerHTML = pack;
            var total_quant = quantity*pack;
            var total_price = price*pack;
            document.getElementById("quant").innerHTML = total_quant;
            document.getElementById("to_price").innerHTML = total_price+' $';
        

            // Update the href attribute of the anchor tag
            // document.getElementById('myLink').href = "{{url('show_one')}}?product_name=" + product_name;
            document.getElementById('myLink').href = "{{ url('packages_user_cart_data') }}?quantity=" + total_quant + "&pro_name=" + pro_name + "&price=" + total_price;
          }

          </script>
           
      </div>


      <div class="footer">
        <!-- <input type="submit" value="Enter"> -->
        <a id="myLink" href="{{url('/user_cart_data/'.$qty.'/'.$pro_name.'/'.$price)}}">
    
    
          <button type="button">
            
            <img src="http://co0kie.github.io/codepen/nike-product-page/cart.png" alt="">
            <span>Add to cart</span>
          </button>
        </a>
        <a href="#!"><img src="http://co0kie.github.io/codepen/nike-product-page/share.png" alt=""></a>
      </div>
    </div>
   
  </div>

</div>



@endsection