@extends('layout.app')
@section('content')

<!--main-->
    <main>
        <!--subheader-->
        <section id="subheader" class="subheader6" data-speed="8" data-type="background">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Contact</h1>
            </div>
            </div>
        </div>
    <div class="crumb">
            <div class="container">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="sep">/</li>
                <li> Contact Us </li>
            </ul>
            </div>
        </div>
        </section>
        <!--subheader-->
        <div class="clearfix"></div>
        <div id="content">
        <div class="container">
            <div class="row contact">
            <!--Contact -->
            <div class="col-md-8 col-sm-6">
                <h3>Send Us Message</h3>
                <form action="http://www.creativethemes.co.in/" name="contactForm" id="contact_form" method="post">
                <div class="row">
                    <div class="col-md-6">
                    <div id="name_error" class="error">Please enter your name.</div>
                    <div>
                        <input name="name" id="name" class="form-control" placeholder="Your Name" type="text">
                    </div>
                    <div id="email_error" class="error">Please enter your valid E-mail ID.</div>
                    <div>
                        <input name="email" id="email" class="form-control" placeholder="Your Email" type="text">
                    </div>
                    <div id="phone_error" class="error">Please enter your phone number.</div>
                    <div>
                        <input name="phone" id="phone" class="form-control" placeholder="Your Phone" type="text">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div id="message_error" class="error">Please enter your message.</div>
                    <div>
                        <textarea name="message" id="message" class="form-control" placeholder="Your Message"></textarea>
                    </div>
                    </div>
                    <div class="col-md-12">
                    <p id="submit">
                        <input value="Submit Form" onclick="return ajaxmailcontact();" class="submit-bt submit-bt2" type="button">
                    </p>
                    <div id="mail_success" class="success">Your message has been sent successfully.</div>
                    <div id="mail_fail" class="error">Sorry, error occured this time sending your message.</div>
                    </div>
                </div>
                </form>
            </div>
            <div id="sidebar" class="col-md-4 col-sm-6">
                <div class="widget widget_text conact-add">
                <h3>Contact Info</h3>
                <address>
                <span><strong> Address</strong></span> <span><strong>Phone:</strong>(404) 980-0322, (856) 444-5146</span> <span><strong>Email:</strong><a href="mailto:patrckdavid2@gmail.com">patrckdavid2@gmail.com</a></span> <span><strong>Web:</strong><a href="#test">http://example.com</a></span> <span><strong>Open</strong>Sunday - Friday 08:00 - 18:00</span>
                </address>
                </div>
            </div>
            <!--Contact -->
            </div>
        </div>
        </div>
        <!--map-->
        <div class="map-container">

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667.9863602070095!2d79.90812931489332!3d23.170697916590242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3981b1e678777605%3A0xa184e82b5245da38!2sSRGIT!5e0!3m2!1sen!2sin!4v1526132321949" class="map-css"></iframe>
    </div>
    <!--map-->
    <div class="clearfix"></div>
  </main>
  <!--main-->

@endsection
