<link rel="stylesheet" href="{{url('style/css/pay_card.css')}}">
<script>
        function close_btc(){
        var pay_card = document.getElementById("btc_card");
        pay_card.style.display="none";
    }
    function flip_btc(){
        var card = document.getElementById("card");
            card.classList.toggle("is-flipped");
    }
</script>

<?php
// ___________ doller to btc
    $total_btc = $total_price*0.000018158566962212477;
?>

<div id="btc_card" class="pay_card">
    <div class="center_pay">
        <div id="card" class="card">

                <!-- __________________________ front site -->
                <div class="card__face card__face--front">
                    <span class="close_btn"><i onclick="close_btc()" class="fa-solid fa-xmark"></i></span>
                    <div class="price btc_price">
                        <p>{{$total_btc}} BTC</p>
                        <span>${{$total_price}}</span>
                    </div>
                    <div class="head btc_head">
                        <img src="{{url('resource/images/payment_card/btc_logo.png')}}" alt="">
                        <h2>Send Your BTC Transaction</h2>
                        <p>Scan This QR Code</p>
                    </div>
                    <div class="qr_code">
                        <img src="{{url('resource/images/qr_code/btc_qr.png')}}" alt="">
                    </div>
                    <div class="main_price btc_main_price">
                        <h2>{{$total_btc}} BTC</h2>
                    </div>
                    <div class="flip_btn">
                        <button id="flip" onclick="flip_btc()">Click to Manual <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>

                <!-- __________________________ front site -->
                <div class="card__face card__face--back">
                    <span onclick="close_btc()" class="close_btn"><i class="fa-solid fa-xmark"></i></span>
                <div class="price btc_price">
                        <p>{{$total_btc}} BTC</p>
                        <span class="rear">${{$total_price}}</span>
                    </div>
                    <div class="head btc_head">
                        <img src="{{url('resource/images/payment_card/btc_logo.png')}}" alt="">
                        <h2>Send Your BTC Transaction</h2>
                        <p class="rear">Pay Manually</p>
                    </div>
                    <div class="address">
                        <span>Address</span>
                        <p>1KGa35cGhaZsJyU3LZGdEz1Wt3DGHkp7mV</p>
                        <span>Amount</span>
                        <p>{{$total_btc}} <span>BTC</span></p>
                        <span>Fee</span>
                        <p>0.00 <span>BTC</span></p>
                    </div>
                    <div class="flip_btn">
                        <button class="rear" id="flip" onclick="flip_btc()"><i class="fa-solid fa-arrow-left"></i> Click to Scan</button>
                    </div>
                </div>
            </div>
    </div>
</div>
