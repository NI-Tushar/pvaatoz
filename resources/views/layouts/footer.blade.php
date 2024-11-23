<div id="main_footer" class="main_footer">
    <img class="cover_img" src="{{url('resource/images/world-map.png')}}" alt="">
    <div class="blank1"></div>
    <div class="footer">
        <div class="footer_part left_footer">
            <a href="{{url('/')}}"><img class="logo_img" src="{{url('resource/images/footer_logo.png')}}" alt=""></a>
            <div class="footer_desc">
                <p>We Provide 100% Verified PVA Accounts that can fulfill your goal. PVAATOZ is a trusted name in the industry
                with years of experience determined to deliver high-quality and highly secured accounts. You will get the kind
                of service that is hard to find nowadays.</p>
                <ul class="footer-social">
                    <li><a  target="_blank" href="https://join.skype.com/invite/sK4XVupbQ2gQ"><i class="fa-brands fa-skype"></i></a></li>
                    <li><a  target="_blank" href="https://t.me/Behan620971"><i class="fab fa-telegram"></i></a></li>
                    <li><a  target="_blank" href="https://wa.me/+8801304896626?text="><i class="fab fa-whatsapp"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="footer_part middle_footer">
            <div class="footer_desc">
                <h3>Quick Links</h3>
                <ul>
                    <a href="{{url('/buy_discord')}}"><li>Buy Discord</li></a>
                    <a href="{{url('/buy_review')}}"><li>Buy Review Mail</li></a>
                    <a href="{{url('/buy_tinder')}}"><li>Buy Tinder</li></a>
                    <a href="{{url('/buy_quora')}}"><li>Buy Quora</li></a>
                    <a href="{{url('/buy_pinterest')}}"><li>Buy Pinterest</li></a>
                </ul>
                <div class="payment">
                    <h3>Our Payment Method</h3>
            
                    <img src="{{url('resource/images/payment/bitcoin.png')}}" alt="">
                    <img src="{{url('resource/images/payment/binance.png')}}" alt="">
                    <img src="{{url('resource/images/payment/trc20.png')}}" alt="">
                    <img src="{{url('resource/images/payment/erc20.png')}}" alt="">
                    
                </div>
            </div>
      </div>
      <div class="footer_part right_footer">
          <div class="footer_desc">
              <h3>Contacts</h3>
              <p>For Any Query, Contact With Our 24 Hours Supportive Team</p>
              <a href=""><p>Phone:+8801304896626</p></a>
              <a href=""><p>mdrashedd02@gmail.com</p></a>
            </div>
        </div>
        <div class="blank1"></div>
    </div>
</div>

<?php
    date_default_timezone_set("Asia/Dhaka");
    $year = date('Y');
?>

<div class="copy_right">
    <div class="copy_side_div">
        <p>PVA AtoZ © {{$year}} All Right Reserved</p>
    </div>
    <div class="copy_side_div">
        <p>Terms of Service | Privacy Policy</p>
    </div>
</div>


    </body>
</html>