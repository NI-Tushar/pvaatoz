function navbarfunc() {
  let elem1 = document.createElement('div');
  elem1.className = 'headerbar fixed-top';

  elem1.innerHTML =
    '<div class="blank1" ></div>' +
    '<div class="logobar">' +
    '<div class="logo">' +
    '<img src="/resources/PVA.PNG" alt="" />' +
    '</div>' +
    '</div>' +
    '<div class="headitem">' +
    '<ul class="headlinks">' +
    '<a href="https://t.me/Behan620971" target="_blank" id="contact" class="contact-1"><img src="/resources/telegram.png" alt="" /></a>'+
          '<a href="#" target="_blank" id="contact" class="contact-1"><img src="/resources/skypee.png" alt="" /></a>'+
          '<a href="https://www.facebook.com/tasfi.albehan" target="_blank" id="contact" class="contact-1"><img src="/resources/facebook.png" alt="" /></a>'+
          '<a class="contact-1" href="https://wa.me/8801304896626?text=hellow" target="_blank"><img src="/resources/whatsapp.png" alt="" />'+
            '<font>+88 01304896626</font>'+
          '</a>'+
    '</ul>' +
    '</div>' +
    '<div class="blank2"></div>' +
    '<div class="blank3"></div>' +
    '<div class="midbar">' +
    '</div>' +
    '<div class="blank4"></div>' +
    '<div class="blank5"></div>' +
    '<div class="navigatbar">' +
    '<div class="logoname">' +
    '<h5>' +
    '<font>PVA</font>AtoZ' +
    '</h5>' +
    '</div>' +
    '<div class="menu-icon">' +
    '<i id="bar" class="fas fa-bars" onclick="handleClicked1()"></i>' +
    '<i id="time" class="fas fa-times" onclick="handleClicked2()"></i>' +
    '</div>' +
    '<div id="navitem" class="navitem">' +
    '<ul>' +
    '<li><a href="/index.html"></href=>Home</a></li>' +
    '<li><a href="/allpro/gmail.html">Gmail</a></li>' +
    '<li><a href="/allpro/agedgmail.html">Aged Gmail</a></li>'+
    '<li><a href="/allpro/edumail.html">Edu Mail</a></li>' +
    '<li><a href="/allpro/tinder.html">Tinder</a></li>' +
    '<li><a href="/allpro/linkedin.html">Linked-in</a></li>' +
    '<li><a href="/allpro/instagram.html">Instagram</a></li>' +
    '<li><a href="/allpro/gvoice.html">Google Voice</a></li>' +
    '<li><a href="/allpro/yahoo.html">Yahoo</a></li>' +
    '</ul>' +
    '<ul>' +
    '<li><a href="/allpro/youtube.html">Youtube</a></li>'+
    '<li><a href="/allpro/tiket.html">Ticket Master</a></li>' +
    '<li><a href="/allpro/outlook.html">Outlook</a></li>' +
    '<li><a href="/allpro/openphone.html">Open Phone</a></li>' +
    // '<li><a href="/allpro/customsite.html">Custom Website</a></li>'+
    // '<li><a href="/allpro/about.html">About</a></li>' +
    // '<li><a href="/allpro/contact.html">Contact</a></li>' +
    '</ul>' +
    '</div>' +
    '</div >' +
    '<div class="blank6"></div>' +
    '</div >';

  let ul = document.querySelector(".whole-headerbar");
  ul.appendChild(elem1);
}

function whatsappfunc() {
  var url = "https://wa.me/8801777608508?text="
  window.open(url, _blank).focus();
}

function handleClicked1() {
  const bar = document.getElementById('bar');
  const time = document.getElementById('time');
  const naitm = document.getElementById('navitem');
  bar.style.display = "none";
  time.style.display = "block";
  naitm.style.display = "block";

}

function handleClicked2() {
  const bar = document.getElementById('bar');
  const time = document.getElementById('time');
  const naitm = document.getElementById('navitem');
  bar.style.display = "block";
  naitm.style.display = "none";
  time.style.display = "none";
}

function func1() {
  const navitm = document.getElementsById('navitem');
  navitm.style.display = "none";
}


// _____________________________________ footer section
function footerfunc() {
  let elem1 = document.createElement('div');
  elem1.innerHTML = '<div style="margin-bottom: 0px;" id="footer-link" class="product-card">' +
    '<div class="blank-1">' +
    '</div>' +
    '<div id="link-cards" class="cards">' +
    '<div  style="border:none;  border-radius: 0px; box-shadow: none; background:  rgb(15, 81, 112);" id="link-card" class="card">' +
    '<div style="background: none;" id="link-card-body" class="card-body">' +
    '<img style="position: absolute;"' +
    'src="/resources/PVA.PNG" alt="">' +
    '<div style="margin-top: 30%; margin-left: 8%; color: #fff;">PVA AtoZ is a website which will privide <br> you the best pva accounts at affordable price.</div>' +
    '</div>' +
    '</div>' +
    '<div style="border:none;  border-radius: 0px; box-shadow: none; background:  rgb(15, 81, 112);" id="link-card" class="card">' +
    '<div style="background: none;" id="link-card-body" class="card-body">' +
    '<div style="margin-left: 8%; margin-top: 8%;">' +
    '<h4 style="color: #fff;">POPULER SERVICES</h4>' +
    '<p><a href="">* BUY GMAIL ACCOUNTS</a></p>' +
    '<p><a href="">* BUY TINDER ACCOUNTS</a></p>' +
    '<p><a href="">* BUY YAHOO ACCOUNTS</a></p>' +
    '<p><a href="">* BUY INSTAGRAM ACCOUNTS</a></p>' +
    '</div>' +
    '</div>' +
    '</div>' +
    '<div style="border:none;  border-radius: 0px; box-shadow: none; background:  rgb(15, 81, 112);" id="link-card" class="card">' +
    '<div style="background: none;" id="link-card-body" class="card-body">' +
    '<div style="margin-left: 8%; margin-top: 8%;">' +
    '<h4 style="color: #fff;">QUICK LINKS</h4>' +
    '<p><a href="">* BUY GOOGLE VOICE</a></p>' +
    '<p><a href="">* BUY PINTEREST</a></p>' +
    '<p><a href="">* BUY TWITTER</a></p>' +
    '<p><a href="">* BUY SNAPCHAT</a></p>' +
    '</div>' +
    '</div>' +
    '</div>' +
    '</div>' +
    '<div class="blank-2">' +
    '</div>' +
    '</div>' +

    '<div style="margin-top: 0%;" class="whole-end-card">' +
    '<div class="blank-1">' +
    '</div>' +
    '<div class="end-cards">' +
    '<div class="end-card">' +
    '<div id="end-1" class="end-card-body">' +
    '<p>© 2023 PVAAtoZ. All Rights Reserved.</p>' +
    '</div>' +
    '</div>' +

    '<div class="end-card">' +
    '<div class="end-card-body">' +
    '<a href=""><img src="/images/footer/facebook.png" alt=""></a>' +
    '<a href=""><img src="/images/footer/instagram.png" alt=""></a>' +
    '<a href=""><img src="/images/footer/youtube.png" alt=""></a>' +
    '<a href=""><img src="/images/footer/pinterest.png" alt=""></a>' +
    '<a href=""><img src="/images/footer/twitter.png" alt=""></a>' +
    '</div>' +
    '</div>' +

    '</div>' +
    '<div class="blank-2">' +
    '</div>' +
    '</div>';
  let ul = document.querySelector(".footer-func");
  ul.appendChild(elem1);
}
