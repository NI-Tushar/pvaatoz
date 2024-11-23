<link rel="stylesheet" href="{{url('style/css/pay_card.css')}}">
<script>
        function close_trc(){
        var pay_card = document.getElementById("trc_card");
        pay_card.style.display="none";
    }
    function flip_trc(){
        var trc_card = document.getElementById("trc_flip_card");
        trc_card.classList.toggle("is-flipped");
    }
</script>

<?php
// ___________ doller to trc
    $total_trc = $total_price*51.55;
?>

<div id="trc_card" class="pay_card">
    <div class="center_pay">
        <div id="trc_flip_card" class="card">

                <!-- __________________________ front site -->
                <div class="card__face card__face--front">
                    <span class="close_btn"><i onclick="close_trc()" class="fa-solid fa-xmark"></i></span>
                    <div class="price trc_price">
                        <p style="color:greergb(0, 138, 115);">{{$total_trc}} trc20</p>
                        <span>${{$total_price}}</span>
                    </div>
                    <div class="head trc_head">
                        <img src="{{url('resource/images/payment_card/trc_logo.png')}}" alt="">
                        <h2 style="color:rgb(0, 138, 115);">Send Your trc Transaction</h2>
                        <p>Scan This QR Code</p>
                    </div>
                    <div class="qr_code">
                        <img src="{{url('resource/images/qr_code/trc_qr.png')}}" alt="">
                    </div>
                    <div class="main_price trc_main_price">
                        <h2 style="color:rgb(0, 138, 115);">{{$total_trc}} trc20</h2>
                    </div>
                    <div class="flip_btn">
                        <button id="flip" onclick="flip_trc()">Click to Manual <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>

                <!-- __________________________ front site -->
                <div class="card__face card__face--back">
                    <span onclick="close_trc()" class="close_btn"><i class="fa-solid fa-xmark"></i></span>
                <div class="price trc_price">
                        <p style="color:aliceblue;">{{$total_trc}} trc20</p>
                        <span class="rear">${{$total_price}}</span>
                    </div>
                    <div class="head trc_head">
                        <img src="{{url('resource/images/payment_card/trc_logo.png')}}" alt="">
                        <h2 style="color:aliceblue;">Send Your trc20 Transaction</h2>
                        <p style="color:aliceblue;" class="rear">Pay Manually</p>
                    </div>
                    <div class="address">
                        <span>Address</span>
                        <p>TF2ChBRqS43fgDwC2YKfRfyve6xPUvSHPH</p>
                        <span>Amount</span>
                        <p>{{$total_trc}} <span>trc20</span></p>
                        <span>Fee</span>
                        <p>0.00 <span>trc20</span></p>
                    </div>
                    <div class="flip_btn">
                        <button class="rear" id="flip" onclick="flip_trc()"><i class="fa-solid fa-arrow-left"></i> Click to Scan</button>
                    </div>
                </div>
            </div>
    </div>
</div>
