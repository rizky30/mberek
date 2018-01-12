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
      <form action="storeContact" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Send us a Message</h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" id="name" name="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
          </form>
        </div>

      </div>
      <!-- /.row -->


    </form>



  @endsection  