@extends('layouts/template')
  
  @section('title', 'Contact')

  @section('header')

  @endsection

  @section('content')
    <br>
    <div class="container">

      <br>
      <!-- Page Heading/Breadcrumbs -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          Kontak
        </li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8">
          <!-- Embedded Google Map -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d987.8034804625202!2d112.65841082914362!3d-7.9768286715120515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6285c5c1b44e3%3A0xf6c889ac7452dc3a!2sSekolah+Menengah+Kejuruan+Telkom+Malang!5e0!3m2!1sid!2sid!4v1511447200540" width="750px" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <!-- Contact Details Column --> 
        <div class="col-lg-8">
          <h3>Detil Kontak</h3>
          <p>
            Jalan Danau Ranau
            <br>Sawojajar, Malang
            <br>
          </p>
          <p>
            <abbr title="Phone"></abbr><i class="fa fa-phone"></i> : (+62) 821-1234-5678
          </p>
          <p>
            <abbr title="Email"></abbr><i class="fa fa-envelope"></i> :
            <a href="mailto:sumber_rejeki.cr@gmail.com"> sumber_rejeki.cr@gmail.com
            </a>
          </p>
          <p>
            <abbr title="Hours"></abbr><i class="fa fa-clock-o"></i> : Monday - Friday at 6:00 AM to 5:00 PM
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Send us a Message</h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Phone Number:</label>
                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
  @endsection  