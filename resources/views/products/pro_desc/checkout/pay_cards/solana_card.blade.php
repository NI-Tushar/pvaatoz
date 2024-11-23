<link rel="stylesheet" href="{{url('style/css/pay_card.css')}}">
<script>
        function close_solana(){
        var pay_card = document.getElementById("solana_card");
        pay_card.style.display="none";
    }
    function flip_solana(){
        var solana_card = document.getElementById("solana_flip_card");
        solana_card.classList.toggle("is-flipped");
    }
</script>

<?php
// ___________ doller to solana
    $total_solana = $total_price*0.006883023023712014;
?>

<div id="solana_card" class="pay_card">
    <div class="center_pay">
        <div id="solana_flip_card" class="card">

                <!-- __________________________ front site -->
                <div class="card__face card__face--front">
                    <span class="close_btn"><i onclick="close_solana()" class="fa-solid fa-xmark"></i></span>
                    <div class="price solana_price">
                        <p style="color:rgb(103, 15, 218);">{{$total_solana}} SOL</p>
                        <span>${{$total_price}}</span>
                    </div>
                    <div class="head solana_head">
                        <img src="{{url('resource/images/payment_card/solana_logo.png')}}" alt="">
                        <h2 style="color:rgb(103, 15, 218);">Send Your Solana Transaction</h2>
                        <p>Scan This QR Code</p>
                    </div>
                    <div class="qr_code">
                        <img src="{{url('resource/images/qr_code/solana_qr.png')}}" alt="">
                    </div>
                    <div class="main_price solana_main_price">
                        <h2 style="color:rgb(103, 15, 218);">{{$total_solana}} SOL</h2>
                    </div>
                    <div class="flip_btn">
                        <button id="flip" onclick="flip_solana()">Click to Manual <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>

                <!-- __________________________ front site -->
                <div class="card__face card__face--back">
                    <span onclick="close_solana()" class="close_btn"><i class="fa-solid fa-xmark"></i></span>
                <div class="price solana_price">
                        <p style="color:aliceblue;">{{$total_solana}} SOL</p>
                        <span class="rear">${{$total_price}}</span>
                    </div>
                    <div class="head solana_head">
                        <img src="{{url('resource/images/payment_card/solana_logo.png')}}" alt="">
                        <h2 style="color:aliceblue;">Send Your Solana Transaction</h2>
                        <p style="color:aliceblue;" class="rear">Pay Manually</p>
                    </div>
                    <div class="address">
                        <span>Address</span>
                        <p style="font-size:12px;">3MvmLnX7Y52p9cV9t4uM1mGyU91d2e8Lm6wCPEVr5kgc</p>
                        <span>Amount</span>
                        <p>{{$total_solana}} <span>SOL</span></p>
                        <span>Fee</span>
                        <p>0.00 <span>SOL</span></p>
                    </div>
                    <div class="flip_btn">
                        <button class="rear" id="flip" onclick="flip_solana()"><i class="fa-solid fa-arrow-left"></i> Click to Scan</button>
                    </div>
                </div>
            </div>
    </div>
</div>
