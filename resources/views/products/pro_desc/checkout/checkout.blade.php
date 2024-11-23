@extends('layouts.middle')
@push('title')
<link rel="stylesheet" href="{{url('style/css/checkout.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<title>Checkout | PVAATOZ</title>
@endpush




@section('middle_section')



<div class="checkout">
    <div class="whole_div">

        <div class="row">
            <div class="col-75">
            <div class="container">
                <form action="/action_page.php">
                    
                    <div class="row">
                        <div class="col-50">
                            <h3>Billing Info</h3>
                            <label for="fname"><i class="fa fa-user"></i> Your Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="Required" required>
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="email" id="email" name="email" placeholder="Required" required>
                            <label for="adr"><i class="fa-solid fa-message"></i> Message</label>
                            <textarea name="" id="" cols="30" rows="5" placeholder="Optional"></textarea>
                        </div>
                        
                        <div class="col-50 payment_section">
                            <h3>Payment Methods</h3>
                            <label for="fname">Payment Option</label>
                            <div class="icon-container">
                                <img src="{{url('resource/images/payment_card/binance.png')}}" alt="">
                                <img src="{{url('resource/images/payment_card/erc20.png')}}" alt="">
                                <img src="{{url('resource/images/payment_card/trc20.png')}}" alt="">
                            </div>
                            <div class="icon-container icon_last">
                                <img src="{{url('resource/images/payment_card/solana.png')}}" alt="">
                                <img src="{{url('resource/images/payment_card/bitcoin.PNG')}}" alt="">
                            </div>
                            <label for="cname">Choose Your Payment Option</label>
                            <div class="pay_option">
                                <select name="" id="pay_option">
                                    <!-- <option value="binance">Binance</option> -->
                                    <option value="btc">Bitcoin</option>
                                    <option value="erc20">ERC20</option>
                                    <option value="trc20">TRC20</option>
                                    <option value="solana">Solana</option>
                                </select>
                            </div>
                            <div class="pay_btn">
                                <p onclick="show_pay_card()" class="pay" href=""><span>Make Payment</span></p>
                            </div>
                        </div>
    
                    </div>
                    <script>
                        function paid_func(){
                            checkbox = document.getElementById('paid');
                                if ( checkbox.checked ) {
                                    const dis = document.getElementById("submit_btn");
                                    dis.classList.remove('disabled') 
                                } else {
                                    const dis = document.getElementById("submit_btn");
                                    dis.classList.add('disabled');
                                }
                        }
                    </script>
                    <label>
                        <input id="paid" onchange="paid_func()" type="checkbox" name="" required> I have Completed My Payment
                    </label>
                        <input id="submit_btn" type="submit" value="Send Now" class="btn disabled">
                    </form>
                    </div>
                    </div>

                    
                    <div class="col-25">
                        <?php 
                            $total_price = 0;   
                            $quant=0;
                            $total_price=(float)$total_price;
                            $quant=(float)$quant;

                            foreach(Session::all() as $item => $price):
                                if($item!=='_token' && $item!=='_flash' && $item!='_previous'){
                                    $quant = $quant+1;
                                }else{
                                    $quant=0;
                                }
                            endforeach;
                        ?>
                        <div class="container"> 
                            <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b></b>{{$quant}}</span></h4>
                            <?php
                            $check_list =0;
                                foreach(Session::all() as $item => $price):
                                    if($item!=='_token' && $item!=='_flash' && $item!='_previous'){
                                        $price = (float)$price;
                                        $total_price = $total_price+ $price;
                                        $check_list = 1;
                                        ?>
                                        <p><a href="{{url('/destroy_user_cart_data/'.$item)}}"><i class="fa-solid fa-xmark"></i></a><?php echo $item; ?> <span class="price"><?php echo $price; ?></span></p>
                                        <?php 
                                    }
                                endforeach;
                                if($check_list==0){
                                    ?>
                                    <p>You Did Not Added Any Item</p>
                                    <?php 
                                }
                                ?>
                                <hr>
                            <p>Total <span class="price" style="color:black"><b>${{$total_price}}</b></span></p>
                        </div>
                    </div>
                </div>
            </div>
</div>


<script>
    function show_pay_card(){
        const val = document.getElementById('pay_option');
        const opt = val.value;
        // _________________ for open btc card
        if(opt == 'btc'){
            var btc_card = document.getElementById("btc_card");
            btc_card.style.display="block";
        }else if(opt == 'erc20'){
            var erc20_card = document.getElementById("erc_card");
            erc20_card.style.display="block";
        }else if(opt == 'trc20'){
            var trc20_card = document.getElementById("trc_card");
            trc20_card.style.display="block";
        }else if(opt == 'solana'){
            var solana_card = document.getElementById("solana_card");
            solana_card.style.display="block";
        }else if(opt == 'binance'){
            var solana_card = document.getElementById("solana_card");
            solana_card.style.display="block";
        }
    }
</script>



@include('products.pro_desc.checkout.pay_cards.btc_card')
@include('products.pro_desc.checkout.pay_cards.erc_card')
@include('products.pro_desc.checkout.pay_cards.trc_card')
@include('products.pro_desc.checkout.pay_cards.solana_card')
@include('products.pro_desc.checkout.pay_cards.binance_card')


@endsection