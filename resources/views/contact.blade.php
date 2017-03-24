@extends('layouts.app')

@section('content')
<!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark pt-100" data-bg-img="http://placehold.it/1920x1280">
      <div class="container pt-30 pb-30">
        <!-- Section Content -->
        <div class="section-content text-center">
          <div class="row"> 
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="text-white font-36">Contact</h2>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Contact</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>

    <!-- Divider: Contact -->
    <section class="divider layer-overlay overlay-white-9" data-bg-img="http://placehold.it/1920x1280">
      <div class="container">
        <div class="row pt-30">
          <div class="col-md-7">
            <h3 class="line-bottom mt-0 mb-30">Interested in discussing?</h3>
            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" class="form-transparent" action="includes/sendmail.php" method="post">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Name <small>*</small></label>
                    <input id="form_name" name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_email">Email <small>*</small></label>
                    <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Subject <small>*</small></label>
                    <input id="form_subject" name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_phone">Phone</label>
                    <input id="form_phone" name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="form_name">Message</label>
                <textarea id="form_message" name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
              </div>
              <div class="form-group">
                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button>
                <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
              </div>
            </form>
            <!-- Contact Form Validation-->
            <script type="text/javascript">
              $("#contact_form").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = '#form-result';
                  $(form_result_div).remove();
                  form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                      if( data.status == 'true' ) {
                        $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                  });
                }
              });
            </script>
          </div>
          <div class="col-md-5">
            <h3 class="line-bottom mt-0">Get in touch with us</h3>
            <p>Aliquam officia dolor rerum enim doloremque iusto eos atque tempora dignissimos similique, quae, maxime sit accusantium delectus.</p>
            <ul class="styled-icons icon-dark icon-sm icon-circled mb-20">
              <li><a href="#" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" data-bg-color="#4C75A3"><i class="fa fa-vk"></i></a></li>
              <li><a href="#" data-bg-color="#D9CCB9"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#" data-bg-color="#D71619"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#" data-bg-color="#A4CA39"><i class="fa fa-android"></i></a></li>
              <li><a href="#" data-bg-color="#4C75A3"><i class="fa fa-vk"></i></a></li>
            </ul>

            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-20" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0">Our Office Location</h5>
                <p>#405, Lan Streen, Los Vegas, USA</p>
              </div>
            </div>
            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0">Contact Number</h5>
                <p><a href="tel:+325-12345-65478">+325-12345-65478</a></p>
              </div>
            </div>
            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0">Email Address</h5>
                <p><a href="mailto:supporte@yourdomin.com">supporte@yourdomin.com</a></p>
              </div>
            </div>
            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-20" href="#"> <i class="fa fa-skype text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0">Make a Video Call</h5>
                <p>ThemeMascotSkype</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Google Map -->
    <section>
      <div class="container-fluid p-0">
        <div class="row">

          <!-- Google Map HTML Codes -->
          <div 
            data-address="121 King Street, Melbourne Victoria 3000 Australia"
            data-popupstring-id="#popupstring1"
            class="map-canvas autoload-map"
            data-mapstyle="style1"
            data-height="400"
            data-latlng="-37.817314,144.955431"
            data-title="sample title"
            data-zoom="12"
            data-marker="images/map-marker.png">
          </div>
          <div class="map-popupstring hidden" id="popupstring1">
            <div class="text-center">
              <h3>CharityFund Office</h3>
              <p>121 King Street, Melbourne Victoria 3000 Australia</p>
            </div>
          </div>
            <!-- Google Map Javascript Codes -->
            <script src="http://maps.google.com/maps/api/js?key=AIzaSyAYWE4mHmR9GyPsHSOVZrSCOOljk8DU9B4"></script>
            <script src="js/google-map-init.js"></script>

        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  @endsection