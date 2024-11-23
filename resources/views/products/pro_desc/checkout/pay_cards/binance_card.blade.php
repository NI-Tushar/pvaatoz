<link rel="stylesheet" href="{{url('style/css/pay_card.css')}}">

<script>
        function close_binance(){
        var pay_card = document.getElementById("binance_card");
        pay_card.style.display="none";
    }
    function flip_binance(){
        console.log("fliped");
        var card = document.getElementById("cards");
            card.classList.toggle("is-flipped");
    }
</script>
<?php
// ___________ doller to binance
    $total_binance = $total_price*1;
?>
<div id="binance_card" class="pay_card">
    <div class="center_pay">
        <div id="cards" class="card">
                
                <!-- __________________________ front site -->
                <div class="card__face card__face--front">
                    <span class="close_btn"><i onclick="close_binance()" class="fa-solid fa-xmark"></i></span>
                    <div class="price binance_price">
                        <p>{{$total_binance}} BUSD</p>
                        <span>${{$total_price}}</span>
                    </div>
                    <div class="head binance_head">
                        <img src="{{url('resource/images/payment_card/binance_logo.png')}}" alt="">
                        <h2>Send Your Binance Transaction</h2>
                        <p>Scan This QR Code</p>
                    </div>
                    <div class="qr_code">
                        <img src="https://cdn.pixabay.com/photo/2013/07/12/14/45/qr-code-148732_1280.png" alt="">
                    </div>
                    <div class="main_price binance_main_price">
                        <h2>{{$total_binance}} BUSD</h2>
                    </div>
                    <div class="flip_btn">
                        <button id="flip" onclick="flip_binance()">Click to Manual <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
                
                <!-- __________________________ front site -->
                <div class="card__face card__face--back">
                    <span onclick="close_binance()" class="close_btn"><i class="fa-solid fa-xmark"></i></span>
                <div class="price binance_price">
                        <p>{{$total_binance}} BUSD</p>
                        <span class="rear">${{$total_price}}</span>
                    </div>
                    <div class="head binance_head">
                        <img src="{{url('resource/images/payment_card/binance_logo.png')}}" alt="">
                        <h2>Send Your Binance Transaction</h2>
                        <p class="rear">Pay Manually</p>
                    </div>
                    <div class="address">
                        <span>Address</span>
                        <p>sdf6sd2631465sdf465sd56df6s5d4f6as5d</p>
                        <span>Amount</span>
                        <p>{{$total_binance}} <span>BUSD</span></p>
                        <span>Fee</span>
                        <p>0.00 <span>BUSD</span></p>
                    </div>
                    <div class="flip_btn">
                        <button class="rear" id="flip" onclick="flip_binance()"><i class="fa-solid fa-arrow-left"></i> Click to Scan</button>
                    </div>
                </div>
            </div>
    </div>
</div>