<link rel="stylesheet" href="{{url('style/css/pay_card.css')}}">
<script>
        function close_erc(){
        var pay_card = document.getElementById("erc_card");
        pay_card.style.display="none";
    }
    function flip_erc(){
        var erc_card = document.getElementById("erc_flip_card");
        erc_card.classList.toggle("is-flipped");
    }
</script>

<?php
// ___________ doller to erc
    $total_erc = $total_price*51.55080332862153;
?>

<div id="erc_card" class="pay_card">
    <div class="center_pay">
        <div id="erc_flip_card" class="card">

                <!-- __________________________ front site -->
                <div class="card__face card__face--front">
                    <span class="close_btn"><i onclick="close_erc()" class="fa-solid fa-xmark"></i></span>
                    <div class="price erc_price">
                        <p>{{$total_erc}} erc20</p>
                        <span>${{$total_price}}</span>
                    </div>
                    <div class="head erc_head">
                        <img src="{{url('resource/images/payment_card/erc_logo.png')}}" alt="">
                        <h2>Send Your erc Transaction</h2>
                        <p>Scan This QR Code</p>
                    </div>
                    <div class="qr_code">
                        <img src="{{url('resource/images/qr_code/erc_qr.png')}}" alt="">
                    </div>
                    <div class="main_price erc_main_price">
                        <h2>{{$total_erc}} erc20</h2>
                    </div>
                    <div class="flip_btn">
                        <button id="flip" onclick="flip_erc()">Click to Manual <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>

                <!-- __________________________ front site -->
                <div class="card__face card__face--back">
                    <span onclick="close_erc()" class="close_btn"><i class="fa-solid fa-xmark"></i></span>
                <div class="price erc_price">
                        <p style="color:aliceblue;">{{$total_erc}} erc20</p>
                        <span class="rear">${{$total_price}}</span>
                    </div>
                    <div class="head erc_head">
                        <img src="{{url('resource/images/payment_card/erc_logo.png')}}" alt="">
                        <h2 style="color:aliceblue;">Send Your erc20 Transaction</h2>
                        <p style="color:aliceblue;" class="rear">Pay Manually</p>
                    </div>
                    <div class="address">
                        <span>Address</span>
                        <p>0xaa65ebd6f60f0853b73dff13b5f0eae0f86507a7</p>
                        <span>Amount</span>
                        <p>{{$total_erc}} <span>erc20</span></p>
                        <span>Fee</span>
                        <p>0.00 <span>erc20</span></p>
                    </div>
                    <div class="flip_btn">
                        <button class="rear" id="flip" onclick="flip_erc()"><i class="fa-solid fa-arrow-left"></i> Click to Scan</button>
                    </div>
                </div>
            </div>
    </div>
</div>
