      
@extends('layouts.middle')
@push('title')
<title>Wellcome | PVAATOZ</title>
@endpush

@section('middle_section')
<!-- =================================== start middle section -->








<!-- ________________________________________________________________________ SLIDER START -->
<div class="whole_front_dv">
    
    <div class="main_slide">
      <section id="slideshow">
          <div class="slider">
              <div class="slide current">
                  <div class="content">
                      <h1>Unique IP Created</h1>
                      <p>We Provide 100% Verified PVA Accounts that can fulfill your goal.</p>
                    </div>
                </div>
                
                <div class="slide">
                    <div class="content">
                        <h1>Buy Verrified Accounts</h1>
                        <p>PVAATOZ is a trusted name in the industry with years of experience determined to deliver high-quality and highly secured accounts</p>
                    </div>
                </div>
                
                <div class="slide">
                    <div class="content">
                        <h1>Buy Verrified Gmail</h1>
                        <p>You will get the kind of service that is hard to find nowadays.</p>
                    </div>
                </div>
                
                <div class="slide">
              <div class="content">
                  <h1>Phone Verified</h1>
                  <p>PVAATOZ is a trusted name in the industry with years of experience determined to deliver high-quality and highly secured accounts.</p>
                </div>
            </div>
            
          <div class="slide">
              <div class="content">
                  <h1>Replacement Guranteed</h1>
                  <p>We Provide 100% Verified PVA Accounts that can fulfill your goal.</p>
                </div>
            </div>
    </div>
    
    <div class="onoffswitch">
        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
    	<label class="onoffswitch-label" for="myonoffswitch">Auto</label>
    </div>
		
    <div class="buttons">
        <button id="prev"><i class="fas fa-arrow-left"></i></button>
        <button id="next"><i class="fas fa-arrow-right"></i></button>
    </div>
</section>	
</div>

<div class="left_option">
    <p>Purchase Phone-Verified Social Accounts from pvaatoz: A must-have for online marketers seeking diverse social profiles. pvaatoz offers exclusive social media services with dedicated support.
    Looking to buy phone-verified social accounts? pvaatoz caters to the needs of online marketers, offering exclusive social media services with exceptional support.</p>
    <h3>Buy Our Most Demandable Account</h3>
    <ul>
        <li><a href="{{url('/buy_facebook')}}"><img src="{{url('resource/images/product logo/facebook.png')}}" alt=""><span>Buy facebook</span></a></li>
        <li><a href="{{url('/buy_quora')}}"><img src="{{url('resource/images/product logo/quora.png')}}" alt=""><span>Buy Quora</span></a></li>
        <li><a href="{{url('/buy_linkedin')}}"><img src="{{url('resource/images/product logo/linkedin.png')}}" alt=""><span>Buy Linked-in</span></a></li>
        <li><a href="{{url('/buy_twitter')}}"><img src="{{url('resource/images/product logo/twitter.png')}}" alt=""><span>Buy Twitter</span></a></li>
        <li><a href="{{url('/buy_pinterest')}}"><img src="{{url('resource/images/product logo/pinterest.png')}}" alt=""><span>Buy Pinterest</span></a></li>
    </ul>
</div>
</div>
<script>
    const slides = document.querySelectorAll(".slide");
const next = document.querySelector("#next");
const prev = document.querySelector("#prev");
const toggle = document.querySelector("#myonoffswitch");
let auto = true; // Auto scroll
const intervalTime = 7000;
let slideInterval;

const nextSlide = () => {
	// Get current class
	const current = document.querySelector(".current");
	// Remove current class
	current.classList.remove("current");
	// Check for next slide
	if (current.nextElementSibling) {
		// Add current to next sibiling
		current.nextElementSibling.classList.add("current");
	} else {
		// Add current to start
		slides[0].classList.add("current");
	}
	setTimeout(() => current.classList.remove("current"));
};

const prevSlide = () => {
	// Get current class
	const current = document.querySelector(".current");
	// Remove current class
	current.classList.remove("current");
	// Check for next slide
	if (current.previousElementSibling) {
		// Add current to prev sibiling
		current.previousElementSibling.classList.add("current");
	} else {
		// Add current to last
		slides[slides.length - 1].classList.add("current");
	}
	setTimeout(() => current.classList.remove("current"));
};

// Button events
next.addEventListener("click", (e) => {
	nextSlide();
	if (auto) {
		clearInterval(slideInterval);
		slideInterval = setInterval(nextSlide, intervalTime);
	}
});
prev.addEventListener("click", (e) => {
	prevSlide();
	clearInterval(slideInterval);
	slideInterval = setInterval(nextSlide, intervalTime);
});

// Auto slide toggle
toggle.addEventListener("click", (e) => {
	if (toggle.checked) {
		auto = true;
		slideInterval = setInterval(nextSlide, intervalTime);
	} else {
		auto = false;
		clearInterval(slideInterval);
	}
});

// Auto slide
if (auto) {
	slideInterval = setInterval(nextSlide, intervalTime);
}

</script>
<!-- ________________________________________________________________________ SLIDER END -->

<!-- =================================== end middle section -->







<!-- ________________________________________________________________________ QUICK SHOW START -->
<section>
  <div class="quick_card">
    <div class="blank-1"></div>
      <div class="cards">

              <a href="#main_footer">
                <div class="card">
                  <div class="card-body">
                    <img src="{{url('resource/images/quick_link/payment.png')}}" alt="">
                  </div>
                  <p>Our Payment Method</p>
                </div>
              </a>
              
              
              <a href="#products">
                <div class="card">
                  <div class="card-body">
                    <img src="{{url('resource/images/quick_link/product.png')}}" alt="">
                  </div>
                  <p>Our Products</p>
                </div>
              </a>
            
              
              
              <a href="#about_product">
                <div class="card">
                  <div class="card-body">
                    <img src="{{url('resource/images/quick_link/about_pro.png')}}" alt="">
                  </div>
                  <p>About Products</p>
                </div>
              </a>
            
            
              <a href="{{url('/about_us')}}">
                <div class="card">
                  <div class="card-body">
                    <img src="{{url('resource/images/quick_link/about_us.png')}}" alt="">
                  </div>
                  <p>About Us</p>
                </div>
              </a>
            
            
              <a href="#features">
                <div class="card">
                  <div class="card-body">
                    <img src="{{url('resource/images/quick_link/workflow.png')}}" alt="">
                  </div>
                  <p>Our Amazing Features</p>
                </div>
              </a>
              
            </div>
    <div class="blank-2"></div>
  </div>
</section>
<!-- ________________________________________________________________________ QUICK SHOW END -->









<!-- ________________________________________________________________________ PRODUCT START -->

<section id="products" class="portfolio">
          <div class="main_section_title">
            <div class="section-title">
              <h2>OUR SERVICES</h2>
              <h3>We Provide 100% Verified PVA Accounts that can fulfill your goal. PVAATOZ is a trusted name in the industry
                with years of experience determined to deliver high-quality and highly secured accounts. You will get the kind
                of service that is hard to find nowadays.</h3>
            </div>
          </div>
    
        <div class="product-card">
          <div class="blank-1">
          </div>
          <div class="cards">


            <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/gmail.png')}}" alt="">
                  <h3>Buy Gmail Accounts</h3>
                  <p>You will get 100% genuine pva accounts from us at a very low rate.</p>
                  <ul>
                    <li>Unique IP Created</li>
                    <li>Phone Verified</li>
                    <li>Fresh Accounts</li>
                    <li>Recovery Added</li>
                    <li>Replacement Guranteed</li>
                  </ul>
                  <a href="{{url('/buy_gmail')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div>
    
            <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/wise.png')}}" alt="">
                  <h3>Buy Wise Accounts</h3>
                  <p>You will get 100% genuine uk verified wise accounts.</p>
                  <ul>
                    <li>Hold and exchange 40+ currencies.</li>
                    <li>Exchange between currencies</li>
                    <li>international spending</li>
                    <li>With local account details</li>
                    <li>Currencies including USD, GBP and more</li>
                  </ul>
                  <a href="{{url('/buy_wise')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div>

            <!-- <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/coinbase.png')}}" alt="">
                  <h3>Buy Coinbase Accounts</h3>
                  <p>You will get 100% genuine US verified Coinbase accounts.</p>
                  <ul>
                    <li>Coinbase account full access.</li>
                    <li>The residential address has been verified.</li>
                    <li>100% Customer Satisfaction Guaranteed.</li>
                    <li>7-day replacement guarantee.</li>
                    <li> 24/7 Customer service.</li>
                  </ul>
                  <a href="{{url('/buy_coinbase')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div> -->
    
            <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/linkedin.png')}}" alt="">
                  <h3>Buy Linked-IN Accounts</h3>
                  <p>Different packages available for your convenience at the best rate.</p>
                  <ul>
                    <li>Unique IP Created</li>
                    <li>Phone Verified</li>
                    <li>Fresh Accounts</li>
                    <li>Recovery Added</li>
                    <li>Replacement Guranteed</li>
                  </ul>
                  <a href="{{url('/buy_linkedin')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/facebook.png')}}" alt="">
                  <h3>Buy Facebook Accounts</h3>
                  <p>Different packages available for your convenience at the best rate.</p>
                  <ul>
                    <li>Unique IP Created</li>
                    <li>Phone Verified</li>
                    <li>Fresh Accounts</li>
                    <li>Recovery Added</li>
                    <li>Replacement Guranteed</li>
                  </ul>
                  <a href="{{url('/buy_facebook')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div>


            <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/twitter.png')}}" alt="">
                  <h3>Buy Twitter Accounts</h3>
                  <p>Different packages available for your convenience at the best rate.</p>
                  <ul>
                    <li>Unique IP Created</li>
                    <li>Phone Verified</li>
                    <li>Fresh Accounts</li>
                    <li>Recovery Added</li>
                    <li>Replacement Guranteed</li>
                  </ul>
                  <a href="{{url('/buy_twitter')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div>


            <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/snapchat.png')}}" alt="">
                  <h3>Buy Snapchat Accounts</h3>
                  <p>Different packages available for your convenience at the best rate.</p>
                  <ul>
                    <li>Unique IP Created</li>
                    <li>Phone Verified</li>
                    <li>Fresh Accounts</li>
                    <li>Recovery Added</li>
                    <li>Replacement Guranteed</li>
                  </ul>
                  <a href="{{url('/buy_snapchat')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div>


            <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/edumail.png')}}" alt="">
                  <h3>Buy Edu-mail Accounts</h3>
                  <p>Different packages available for your convenience at the best rate.</p>
                  <ul>
                    <li>Unique IP Created</li>
                    <li>Phone Verified</li>
                    <li>Fresh Accounts</li>
                    <li>Recovery Added</li>
                    <li>Replacement Guranteed</li>
                  </ul>
                  <a href="{{url('/buy_edumail')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div>



            <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/tinder.png')}}" alt="">
                  <h3>Buy Tinder Accounts</h3>
                  <p>Different packages available for your convenience at the best rate.</p>
                  <ul>
                    <li>Unique IP Created</li>
                    <li>Phone Verified</li>
                    <li>Fresh Accounts</li>
                    <li>Recovery Added</li>
                    <li>Replacement Guranteed</li>
                  </ul>
                  <a href="{{url('/buy_tinder')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div>


          <!-- 
            <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/pinterest.png')}}" alt="">
                  <h3>Buy Pinterest Accounts</h3>
                  <p>Different packages available for your convenience at the best rate.</p>
                  <ul>
                    <li>Unique IP Created</li>
                    <li>Phone Verified</li>
                    <li>Fresh Accounts</li>
                    <li>Recovery Added</li>
                    <li>Replacement Guranteed</li>
                  </ul>
                  <a href="{{url('/buy_pinterest')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div> -->



            <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/quora.png')}}" alt="">
                  <h3>Buy Quora Accounts</h3>
                  <p>Different packages available for your convenience at the best rate.</p>
                  <ul>
                    <li>Unique IP Created</li>
                    <li>Phone Verified</li>
                    <li>Fresh Accounts</li>
                    <li>Recovery Added</li>
                    <li>Replacement Guranteed</li>
                  </ul>
                  <a href="{{url('/buy_quora')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div>



            <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/ticketmaster.png')}}" alt="">
                  <h3>Buy Ticket Master Accounts</h3>
                  <p>Different packages available for your convenience at the best rate.</p>
                  <ul>
                    <li>Unique IP Created</li>
                    <li>Phone Verified</li>
                    <li>Fresh Accounts</li>
                    <li>Recovery Added</li>
                    <li>Replacement Guranteed</li>
                  </ul>
                  <a href="{{url('/buy_ticketmaster')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div>



            <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/github.png')}}" alt="">
                  <h3>Buy Git-hub Accounts</h3>
                  <p>Different packages available for your convenience at the best rate.</p>
                  <ul>
                    <li>Unique IP Created</li>
                    <li>Phone Verified</li>
                    <li>Fresh Accounts</li>
                    <li>Recovery Added</li>
                    <li>Replacement Guranteed</li>
                  </ul>
                  <a href="{{url('/buy_github')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div>



            <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/voice.png')}}" alt="">
                  <h3>Buy Google Voice Accounts</h3>
                  <p>A range of packages tailored for your convenience at unbeatable prices.</p>
                  <ul>
                    <li>Unique IP Created</li>
                    <li>Phone Verified</li>
                    <li>Fresh Accounts</li>
                    <li>Recovery Added</li>
                    <li>Replacement Guranteed</li>
                  </ul>
                  <a href="{{url('/buy_voice')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div>



            <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/outlook.png')}}" alt="">
                  <h3>Buy Outlook Accounts</h3>
                  <p>Different packages available for your convenience at the best rate.</p>
                  <ul>
                    <li>Unique IP Created</li>
                    <li>Phone Verified</li>
                    <li>Fresh Accounts</li>
                    <li>Recovery Added</li>
                    <li>Replacement Guranteed</li>
                  </ul>
                  <a href="{{url('/buy_outlook')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div>



            <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/naver.png')}}" alt="">
                  <h3>Buy Never Accounts</h3>
                  <p>A range of packages tailored for your convenience at unbeatable prices.</p>
                  <ul>
                    <li>Unique IP Created</li>
                    <li>Phone Verified</li>
                    <li>Fresh Accounts</li>
                    <li>Recovery Added</li>
                    <li>Replacement Guranteed</li>
                  </ul>
                  <a href="{{url('/buy_naver')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div>



            <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/discord.png')}}" alt="">
                  <h3>Buy Discord Accounts</h3>
                  <p>Different packages available for your convenience at the best rate.</p>
                  <ul>
                    <li>Unique IP Created</li>
                    <li>Phone Verified</li>
                    <li>Fresh Accounts</li>
                    <li>Recovery Added</li>
                    <li>Replacement Guranteed</li>
                  </ul>
                  <a href="{{url('/buy_discord')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div>



            <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/review_mail.png')}}" alt="">
                  <h3>Buy Review Mail Accounts</h3>
                  <p>A range of packages tailored for your convenience at unbeatable prices.</p>
                  <ul>
                    <li>Unique IP Created</li>
                    <li>Phone Verified</li>
                    <li>Fresh Accounts</li>
                    <li>Recovery Added</li>
                    <li>Replacement Guranteed</li>
                  </ul>
                  <a href="{{url('/buy_review')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/paypal.png')}}" alt="">
                  <h3>Buy PayPal Accounts</h3>
                  <p>Various packages available at the most competitive prices for your convenience.</p>
                  <ul>
                    <li>US Verified</li>
                    <li>With SSN and DL</li>
                    <li>Fresh Accounts</li>
                    <li>Recovery Added</li>
                    <li>Replacement Guranteed</li>
                  </ul>
                  <a href="{{url('/buy_paypal')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/payoneer.png')}}" alt="">
                  <h3>Buy PayPal Accounts</h3>
                  <p>Various packages available at the most competitive prices for your convenience.</p>
                  <ul>
                    <li>US Verified</li>
                    <li>With SSN and DL</li>
                    <li>Fresh Accounts</li>
                    <li>Recovery Added</li>
                    <li>Replacement Guranteed</li>
                  </ul>
                  <a href="{{url('/buy_payoneer')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/binance.png')}}" alt="">
                  <h3>Buy Binance Accounts</h3>
                  <p>A range of packages tailored for your convenience at unbeatable prices.</p>
                  <ul>
                    <li>Unique IP Created</li>
                    <li>Phone Verified</li>
                    <li>Fresh Accounts</li>
                    <li>Recovery Added</li>
                    <li>Replacement Guranteed</li>
                  </ul>
                  <a href="{{url('/buy_binance')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div>



            <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/medium.png')}}" alt="">
                  <h3>Buy Medium Accounts</h3>
                  <p>Different packages available for your convenience at the best rate.</p>
                  <ul>
                    <li>Unique IP Created</li>
                    <li>Phone Verified</li>
                    <li>Fresh Accounts</li>
                    <li>Recovery Added</li>
                    <li>Replacement Guranteed</li>
                  </ul>
                  <a href="{{url('/buy_medium')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/relay.png')}}" alt="">
                  <h3>Buy Medium Accounts</h3>
                  <p>Various packages available to suit your needs at the most competitive rates.</p>
                  <ul>
                    <li>Unique IP Created</li>
                    <li>Phone Verified</li>
                    <li>Fresh Accounts</li>
                    <li>Recovery Added</li>
                    <li>Replacement Guranteed</li>
                  </ul>
                  <a href="{{url('/buy_relay')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/stake.png')}}" alt="">
                  <h3>Buy Stake Accounts</h3>
                  <p>Different packages available for your convenience at the best rate.</p>
                  <ul>
                    <li>Earn extra money</li>
                    <li>Verified</li>
                    <li>Diamond Level Accounts</li>
                    <li>Fast Delivery</li>
                    <li>Replacement Guranteed</li>
                  </ul>
                  <a href="{{url('/buy_stake')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/ebay.png')}}" alt="">
                  <h3>Buy eBay Accounts</h3>
                  <p>Various packages available to suit your needs at the most competitive rates</p>
                  <ul>
                    <li>PayPal added</li>
                    <li>100% Verified</li>
                    <li>Recovery Added</li>
                    <li>Fast Delivery</li>
                    <li>Replacement Guranteed</li>
                  </ul>
                  <a href="{{url('/buy_ebay')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/paxful.png')}}" alt="">
                  <h3>Buy Paxful Accounts</h3>
                  <p>Various packages available to suit your needs at the most competitive rates</p>
                  <ul>
                    <li>Free Crypto Wallet</li>
                    <li>100% Verified</li>
                    <li>Recovery Added</li>
                    <li>Fast Delivery</li>
                    <li>Replacement Guranteed</li>
                  </ul>
                  <a href="{{url('/buy_paxful')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/airbnb.png')}}" alt="">
                  <h3>Buy Airbnb Accounts</h3>
                  <p>We offer a selection of packages to fit your needs, all at exceptional prices.</p>
                  <ul>
                    <li>Verified with PayPal</li>
                    <li>100% Verified</li>
                    <li>Recovery Added</li>
                    <li>Fast Delivery</li>
                    <li>Replacement Guranteed</li>
                  </ul>
                  <a href="{{url('/buy_airbnb')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/aliexpress.png')}}" alt="">
                  <h3>Buy AliExpress Accounts</h3>
                  <p>We offer a selection of packages to fit your needs, all at exceptional prices.</p>
                  <ul>
                  <p>Fully verified with documents</p>
                  <p>with payment verified</p>
                  <p>LLC DL SSN VERIFIED</p>
                  <p>Phone Verified</p>
                  <p>Aged Accounts</p>
                  <p>recovery Added</p>
                  <p>Replacement Guranteed</p>
                  <a href="{{url('/buy_aliexpress')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/adds.png')}}" alt="">
                  <h3>Buy Google Adds Accounts</h3>
                  <p>We offer a selection of packages to fit your needs, all at exceptional prices.</p>
                  <ul>
                  <p>fully verified with documents</p>
                  <p>with payment verified</p>
                  <p>Phone Verified</p>
                  <p>Aged Accounts</p>
                  <p>recovery Added</p>
                  <p>Replacement Guranteed</p>
                  <a href="{{url('/buy_googleAdds')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/console.png')}}" alt="">
                  <h3>Buy Google Console Play Accounts</h3>
                  <p>We offer a selection of packages to fit your needs, all at exceptional prices.</p>
                  <ul>
                  <p>fully verified with documents</p>
                  <p>with payment verified</p>
                  <p>Phone Verified</p>
                  <p>Aged Accounts</p>
                  <p>recovery Added</p>
                  <p>Replacement Guranteed</p>
                  <a href="{{url('/buy_console')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <div class="card-desc">
                  <img src="{{url('resource/images/product logo/twich.png')}}" alt="">
                  <h3>Buy Google Console Play Accounts</h3>
                  <p>We offer a selection of packages to fit your needs, all at exceptional prices.</p>
                  <ul>
                  <p>Live Streaming</p>
                  <p>Chat & Emotes</p>
                  <p>Follow & Subscribe</p>
                  <p>Stream Customization</p>
                  <p>Moderation Tools</p>
                  <p>Twitch Mobile & Desktop Apps</p>
                  <a href="{{url('/buy_twitch')}}"><button class="buy"> Buy Now</button></a>
                </div>
              </div>
            </div>



    
          </div>
          <div class="blank-2">
          </div>
        </div>
      </section>
      <!-- ________________________________________________________________________ PRODUCT END -->



















<!-- ________________________________________________________________________ QUICK SHOW START -->
<section id="features" class="features">
  <h2>Our Amazing Features</h2>
  <div class="feature_card">
    <div class="blank-1"></div>
      <div class="cards">
              
                <div class="card" style="background-image: linear-gradient(to bottom, rgb(252, 93, 93), rgb(67, 3, 67));">
                  <div class="card-body">
                    <img src="{{url('resource/images/features/1.png')}}" alt="">
                  </div>
                  <p>Genuine PVA Accounts</p>
                  <span>You will get 100% Genuine PVA Accounts from us at a very low rate.</span>
                </div>
              
              
              
           
                <div class="card" style="background-image: linear-gradient(to bottom, rgb(9, 185, 255), rgb(67, 3, 67));">
                  <div class="card-body">
                    <img src="{{url('resource/images/features/2.png')}}" alt="">
                  </div>
                  <p>Various PVA Packages</p>
                  <span>Different Packages Available for your convenience at the best rate.</span>
                </div>
                
                
                
                
                
                <div class="card" style="background-image: linear-gradient(to bottom, rgb(26, 231, 105), rgb(67, 3, 67));">
                  <div class="card-body">
                    <img src="{{url('resource/images/features/3.png')}}" alt="">
                  </div>
                  <p>Manual PVA Creation</p>
                  <span>All accounts are created manually & using safety for the authenticity.</span>
                </div>
                
                
                
                
                <div class="card" style="background-image: linear-gradient(to bottom, rgb(79, 102, 43), rgb(67, 3, 67));">
                  <div class="card-body">
                    <img src="{{url('resource/images/features/4.png')}}" alt="">
                  </div>
                  <p>Fast Delivery</p>
                  <span>All accounts are delivered as fast as possible with the highest quality.</span>
                </div>
                
                
                
                
                <div class="card" style="background-image: linear-gradient(to bottom, rgb(255, 210, 9), rgb(67, 3, 67));">
                  <div class="card-body">
                    <img src="{{url('resource/images/features/5.png')}}" alt="">
                  </div>
                  <p>Replacement Gurantee</p>
                  <span>You can replace any PVA Accounts within seven days if anything wrong.</span>
                </div>
                
                
                
                
                <div class="card" style="background-image: linear-gradient(to bottom, rgb(165, 9, 255), rgb(67, 3, 67));">
                  <div class="card-body">
                    <img src="{{url('resource/images/features/6.png')}}" alt="">
                  </div>
                  <p>Various Payment Methods</p>
                  <span>Almost all major payment methods accepted for your convenience.</span>
                </div>
                
                
                
                
                <div class="card" style="background-image: linear-gradient(to bottom, rgb(79, 102, 43), rgb(67, 3, 67));">
                  <div class="card-body">
                    <img src="{{url('resource/images/features/7.png')}}" alt="">
                  </div>
                  <p>Aged PVA Accounts</p>
                  <span>Aged PVA accounts for genuine marketing and better results.</span>
                </div>
                
                
                
                
                <div class="card" style="background-image: linear-gradient(to bottom, rgb(255, 210, 9), rgb(67, 3, 67));">
                  <div class="card-body">
                    <img src="{{url('resource/images/features/8.png')}}" alt="">
                  </div>
                  <p>100% Satisfation</p>
                  <span>If you are not satisfied, you can get your money back as we value you the most. </span>
                </div>
              
                
              </div>
    <div class="blank-2"></div>
  </div>
</section>
<!-- ________________________________________________________________________ QUICK SHOW END -->























      <!-- ________________________________________________________________________ BLOG START -->
       <!-- ___________________________________________ ABOUT GMAIL -->

    <div id="about_product" class="product_content">
      <!-- <img src="/images/product-poster/gmail-mid-poster.jpg" alt=""> -->
      <div class="content-text">
          <h2>OUR PVA SERVICE:</h2>
          <p>
          Elevate your online business with our selection of bulk email accounts and various social profiles. Our inventory includes verified email and social accounts complete with authentic phone numbers, allowing you to expand your online presence effortlessly. Explore our cost-effective options for purchasing phone-verified social accounts and start boosting your online business today.
          Take your online business to new heights with our assortment of bulk email accounts and other social accounts. All our accounts are verified and tied to authentic phone numbers, ensuring reliability. Don't miss out on the opportunity to acquire budget-friendly, phone-verified social accounts. 
          Boost your online business with ease by securing bulk email accounts and a variety of social accounts from our services. You can trust in the authenticity of our email and social accounts, thanks to their real phone number verifications. And the best part? You can enjoy these phone-verified social accounts at a highly competitive price.
              <br><br>
          </p>
          <h2>WHY YOU SHOULD BUY ACCOUNTS FROM pvaatoz?</h2>
          <ul>
              <li>1. pvaatoz is one of the foremost well known social media account providers.</li>
              <li>2. You can purchase your AOL accounts with paypal right away nearly 5 to 10 minutes will take
                  to
                  provide your wanted AOL package.
              <li>
              <li>3. You have a 7 days cash back ensure for any kind of problem.</li>
              <li>4. You can arrange more seasoned or fresher indeed any matured AOL pva account.</li>
              <li>5. We continuously center on our committed client bolster so we are accessible to any kind of social
                  media
                  stage where you'll get moment offer assistance from us.</li>
              <li>6. We accept diverse sorts of installment strategies so you don’t ought to stress almost your
                  installments
                  framework to pay us.</li>
              <li>7. All AOL accounts are phone confirmed from the secure source.</li>
          </ul>
          <h2>HOW TO BUY ACCOUNTS FROM pvaatoz</h2>
          <p>
              It is exceptionally simple to purchase Accounts on the off chance that you have got cash. Our accounts can be effectively opened if you'll verify them effectively along with your phone number or
              facebook.
              You'll be able effortlessly make a AOL account from your pc or versatile phone but you cannot make
              boundless AOL pva accounts. So you ought to confirm the AOL pva with the phone number. But
              you
              should keep
              in mind that your service supplier will not let you employ the phone number once more and again. That’s
              why you
              would like to discover website who will assist you to purchase AOL accounts with a watchword at a
              sensible
              cost at the same time. You'll purchase moreover purchase facebook accounts
              <br><br>
              To purchase ancient AOL accounts from pvaatoz you've got to browse the landing page to begin with.
              At that
              point you've got to go to the benefit segment once you will see the AOL account administrations
              recorded.
              Go to the AOL account page and you may see distinctive sorts of packages. From there fair select
              your
              craved bundle that you simply need to purchase. Select or tap any bundles and it'll let you divert to
              the
              installment
              page where you'll be able pay with a diverse installment choice.
              <br><br>
              pvaatoz basically acknowledge all sorts of installment alternatives such as PayPal, MasterCard
              installment,
              culminate cash and Bitcoin. In some cases pvaatoz offer a few rebate for particular bulk AOL
              accounts
              bundles which is astonishing.
              
              You'll be able snatch our rebate offer by paying with a particular installment alternative.
              <br><br>
              After installment you have got to wait for a minute and you may be informed before long to provide your
              accounts
              by email. pvaatoz mainly convey the accounts in a spreadsheet which may be a exceptionally helpful
              highlight that
              will assist you
              to oversee the accounts effectively.
          </p>
          <h2>WHY WOULD YOU BUY OLD ACCOUNT AT REASONABLE PRICE</h2>
          <p>
              You'll have a part of websites which give AOL mail for your marketing. Regular we need to spend a
              part of
              cash to induce appropriate administrations. But the thing is that most of the websites on the web don’t
              give the
              quality
              benefit particularly they by and large take the cash from the client but in return they give
              exceptionally poor
              services. So to buy AOL channel , pvaatoz can be the trusted source since it is solid and it has
              dedicated
              team bolster.
              You are doing not ought to stress almost the quality of any sorts of accounts. Pvanet some of the time
              offers
              astounding rebates and you'll snatch it from there on the off chance that you're a customary client
              otherwise
              you can contact
              us for a special offer by subscribing to our bulletin. We'll inform you through e-mail on the off chance
              that
              any offer is running.
          </p>
      </div>
  </div>
      <!-- ________________________________________________________________________ BLOG END -->
      
      
      
      
      
      




      @endsection