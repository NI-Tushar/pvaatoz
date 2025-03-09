<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
       <!-- Boxicons CDN Link -->
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
       <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

       <script src="https://kit.fontawesome.com/5f7bc44e9f.js" crossorigin="anonymous"></script> 

       <link rel="icon" href="{{url('resource/images/logo.png')}}" type="image/x-icon"> 
       
       <link rel="stylesheet" href="{{url('style/css/home.css')}}">
       <link rel="stylesheet" href="{{url('style/css/navbar.css')}}">
       <link rel="stylesheet" href="{{url('style/css/footer.css')}}">



        @stack('title')
        </head>
<body>


    <div class="top_bar">
        <ul>
        <li><a target="_blank" href="https://wa.me/+8801304896626?text="><img src="{{url('resource/images/topbar_logo/whatsapp.png')}}" alt=""></a></li>
        <li><a target="_blank" href="https://t.me/jesusplan1"><img src="{{url('resource/images/topbar_logo/telegram.png')}}" alt=""></a></li>
        <li><a target="_blank" href="https://join.skype.com/invite/sK4XVupbQ2gQ"><img src="{{url('resource/images/topbar_logo/skype.png')}}" alt=""></a></li>
        </ul>   
    </div>

    <nav class="nav">
        <div class="navbar">
            <i class="bx bx-menu" id="open_menu_btn"></i>
            <div class="logo"><img class="logo_img" src="{{url('resource/images/black_bg_logo.png')}}" alt=""><a href="{{url('/')}}">PVA-AtoZ</a></div>
            <div class="nav-links">
                <div class="sidebar-logo">
                    <a href="{{url('/')}}"><span class="logo-name">PVA-AtoZ</span></a>
                    <i class="bx bx-x" ></i>
                </div>
                <ul class="links">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/buy_gmail')}}">Gmail</a></li>
                <li><a href="{{url('/buy_linkedin')}}">Linkedin</a></li>
                <li><a href="{{url('/buy_twitter')}}">Twitter</a></li>
                <li><a href="{{url('/buy_snapchat')}}">Snapchat</a></li>
                <li><a href="{{url('/buy_wise')}}">Wise</a></li>

            
                <li>
                    <a href="#">Other's Social</a>
                    <i class="bx bxs-chevron-down js-arrow arrow "></i>
                    <ul class="js-sub-menu sub-menu">
                        <li><a href="{{url('/buy_edumail')}}">Edu Mail</a></li>
                        <li><a href="{{url('/buy_tinder')}}">Tinder</a></li>
                        <!-- <li><a href="{{url('/buy_pinterest')}}">Pinterest</a></li> -->
                        <li><a href="{{url('/buy_quora')}}">Quora</a></li>
                        <li><a href="{{url('/buy_github')}}">GitHub</a></li>
                        <li><a href="{{url('/buy_facebook')}}">Facebook</a></li>
                        <li><a href="{{url('/buy_outlook')}}">Outlook</a></li>
                        <li><a href="{{url('/buy_voice')}}">Google Voice</a></li>
                        <li><a href="{{url('/buy_discord')}}">Discord</a></li>
                        <li><a href="{{url('/buy_review')}}">Review Mail</a></li>
                        <li><a href="{{url('/buy_twitch')}}">Twitch Account</a></li>
                        <li><a href="{{url('/buy_taboola')}}">Taboola Account</a></li>
                        <li><a href="{{url('/buy_apple')}}">Apple Developer</a></li>
                        <li><a href="{{url('/buy_nextdoor')}}">Nextdoor Account</a></li>
                        <li><a href="{{url('/buy_bereal')}}">Bereal Account</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="#">More</a>
                    <i class="bx bxs-chevron-down js-arrow arrow "></i>
                    <ul class="js-sub-menu sub-menu">
                        <li><a href="{{url('/buy_ticketmaster')}}">Ticketmaster</a></li>
                        <li><a href="{{url('/buy_medium')}}">Medium Account</a></li>
                        <!-- <li><a href="{{url('/buy_coinbase')}}">Coinbase Account</a></li> -->
                        <li><a href="{{url('/buy_naver')}}">Naver Account</a></li>
                        <li><a href="{{url('/buy_binance')}}">Bainance Account</a></li>
                        <li><a href="{{url('/buy_paypal')}}">PayPal Account</a></li>
                        <li><a href="{{url('/buy_payoneer')}}">Payoneer Account</a></li>
                        <li><a href="{{url('/buy_relay')}}">Relay Business Account</a></li>
                        <li><a href="{{url('/buy_stake')}}">Stake Account</a></li>
                        <li><a href="{{url('/buy_ebay')}}">eBay Account</a></li>
                        <li><a href="{{url('/buy_paxful')}}">Paxful Account</a></li>
                        <li><a href="{{url('/buy_airbnb')}}">Airbnb Account</a></li>
                        <li><a href="{{url('/buy_aliexpress')}}">AliExpress Account</a></li>
                        <li><a href="{{url('/buy_googleAdds')}}">Google Adds Grants</a></li>
                        <li><a href="{{url('/buy_console')}}">Google Play Console</a></li>
                    </ul>
                </li>


                <li><a href="{{url('/about_us')}}">About Us</a></li>
                <li><a href="{{url('/contact_us')}}">Contact Us</a></li>
            </ul>
        </div>
            <div class="search-box">
            <!-- <i class="bx bx-search"></i> -->
            <a href="{{url('/your_cart')}}"><i class="fa-solid fa-cart-shopping"></i></a>
            <div class="input-box">
                <input type="text" placeholder="Search...">
                </div>
            </div>
        </nav>
    </div>

<script>
    
    
    // search-box open close js code
    // let navbar = document.querySelector(".navbar");
    // console.log(navbar);
    // let searchBox = document.querySelector(".nav .navbar .search-box .bx-search");
    // let searchBoxCancel = document.querySelector(".search-box .bx-x");

// searchBox.addEventListener("click", ()=>{
//   navbar.classList.toggle("showInput");
//   if(navbar.classList.contains("showInput")){
//     searchBox.classList.replace("bx-search" ,"bx-x");
//   }else {
//     searchBox.classList.replace("bx-x" ,"bx-search");
//   }
// });

// sidebar open close js code
let navLinks = document.querySelector(".nav-links");
let menuOpenBtn = document.querySelector(".navbar .bx-menu");
let menuCloseBtn = document.querySelector(".nav-links .bx-x");
menuOpenBtn.onclick = function() {
navLinks.style.left = "0";
}
menuCloseBtn.onclick = function() {
navLinks.style.left = "-100%";
}


// sidebar submenu open close js code
let htmlcssArrow = document.querySelector(".htmlcss-arrow");
htmlcssArrow.onclick = function() {
 navLinks.classList.toggle("show1");
}
let moreArrow = document.querySelector(".more-arrow");
moreArrow.onclick = function() {
 navLinks.classList.toggle("show2");
}
let jsArrow = document.querySelector(".js-arrow");
jsArrow.onclick = function() {
 navLinks.classList.toggle("show3");
}
</script>