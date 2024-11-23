@extends('layouts.middle')
@push('title')
<link rel="stylesheet" href="{{url('style/css/contact.css')}}">
<title>Contact Us | PVAATOZ</title>
@endpush




@section('middle_section')




<!-- __________________________________________________________________ CONTACT SECTION START -->
<div class="contact_us">

  
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Mustafa Centre, 207704</div>
          <div class="text-two">Singapore</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+8801304896626</div>
          <div class="text-two">+8801777608508</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">mdrashedd02@gmail.com</div>
          <div class="text-two">nitushar06@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>For Any Query, Feel Free to Contact with us. Our 24 Hours Supportive Team will Response Your Query as soon as possible</p>
        <form action="https://formspree.io/f/xknabryb" method="post">
          <div class="input-box">
            <input name="name" type="text" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <input name="email" type="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box message-box">
            <textarea name="message" type="text" id="" cols="30" rows="10" placeholder="Enter your message" required></textarea>
            </div>
            <div class="button">
              <input type="submit" value="Send Now" >
            </div>
          </form>
        </div>
      </div>
  </div>

</div>
  
  

  
  
  
  
  <section class="map_sec">
    <div class="map_container">
      <div class="map_inner">
        <h4>Find Us on Google Map</h4>
        <p>Find Us on Google Map to Reach Our Head Office to Get Connected</p>
        <div class="map_bind">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54437.500211140024!2d103.8485799006533!3d1.293213056461678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da19c634a9b4a3%3A0xed353a31994d92d7!2sMustafa%20Centre!5e1!3m2!1sen!2sbd!4v1724255801410!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
  </div>
</section>

<!-- __________________________________________________________________ CONTACT SECTION END -->



@endsection

