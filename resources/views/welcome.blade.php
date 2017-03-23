@extends('layouts.app')

@section('content')
    <!-- Section: home -->
    <section id="home" class="divider fullscreen no-bg layer-overlay overlay-dark-light">
        <div class="bg-video">
        <div id="home-video" class="video">
            <div class="player video-container" data-property="{videoURL:'OmiJVYjmZc4',containment:'#home-video',autoPlay:true, showControls:false, mute:false, startAt:0, opacity:1}"></div>
        </div>
        </div>
        <div class="display-table">
        <div class="display-table-cell">
            <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                <div class="inline-block pb-60 pl-40 pr-40 pt-90">
                    <h1 class="text-uppercase text-white font-raleway font-weight-800 font-78 mb-10 mt-0">Твори <span class="text-theme-colored">Добро</span></h1>
                    <p class="font-16 text-white text-left pull-left font-raleway letter-spacing-1 mb-20 ml-10"><em>Все прекрасные чувства в мире весят меньше, чем одно доброе дело.<br> Роберт Лоуэлл</em> </p>
                    <a class="btn btn-colored btn-theme-colored btn-flat pull-right" href="#">Помочь</a> 
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <section id="about" class="bg-lighter">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h4 class="m-0">Благотворительный Фонд</h4>
            <h2 class="title text-theme-colored mt-0">Твори Добро</h2>
            <p class="mb-10">Lorem ipsum dolor sit amet, doloremque suscipit consectetur adipisicing elit. Corporis voluptatibus neque, assumenda maxime. Eaque libero unde corrupti deleniti maxime ratione doloremque suscipit deleniti maxime ratione doloremque suscipit perferendis voluptatibus neque, assumenda maxime aperiam labore debitis atque odit neque possimus optio quo.</p>
            <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis voluptatibus neque, assumenda maxime. Eaque libero unde corrupti deleniti maxime ratione doloremque suscipit deleniti maxime ratione doloremque suscipit perferendis voluptatibus neque, assumenda maxime aperiam labore debitis atque odit neque possimus optio quo.</p>

            <h4 class="mt-20 mb-5">Что мы делаем</h4>
            <ul class="list theme-colored angle-double-right mb-sm-30">
              <li><a href="#">Charity for Children &amp; Education</a></li>
              <li><a href="#">Setting up a charitable trust</a></li>
              <li><a href="#">Services for Charities and Groups</a></li>
              <li><a href="#">Planning to donate to good causes in your will</a></li>
            </ul>
          </div>
          <div class="col-md-5">
            <div class="thumb mt-5">
              <img alt="" src="images/2.jpg" class="img-fullwidth">
            </div>
            <h4 class="mt-20 mb-5">Наша цель</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis voluptatibus neque, assumenda maxime. Eaque libero unde corrupti deleniti maxime ratione doloremque suscipit perferendis aperiam labore debitis atque odit neque possimus optio quo.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Causes -->
    <section>
        <div class="container pb-80">
        <div class="section-title text-center">
            <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3 class="text-uppercase mt-0">Им нужна ваша помощь</h3>
                <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
            </div>
        </div>
        <div class="row mtli-row-clearfix">
            <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="causes bg-lighter box-hover-effect effect1 maxwidth500 mb-sm-30">
                <div class="thumb">
                <img class="img-fullwidth" alt="" src="http://placehold.it/265x195">
                </div>
                <div class="progress-item mt-0">
                <div class="progress mb-0">
                    <div class="progress-bar" data-percent="84"></div>
                </div>
                </div>
                <div class="causes-details clearfix border-bottom p-15 pt-10">
                <h5><a href="#">Имя человека</a></h5>
                <p>Краткое описание проблемы, будет взято 3 строчки из описания в базе данных</p>
                <ul class="list-inline clearfix mt-20">
                    <li class="pull-left pr-0">Собрано: 18 900</li>
                    <li class="text-theme-colored pull-right pr-0">Нужно: 25 000</li>
                </ul>
                <div class="mt-10">
                    <a class="btn btn-dark btn-theme-colored btn-flat btn-sm mt-10" href="#">Помочь</a>
                    <div class="pull-right mt-15"><i class="fa fa-heart-o text-theme-colored"></i> 89 Donors</div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="causes bg-lighter box-hover-effect effect1 maxwidth500 mb-sm-30">
                <div class="thumb">
                <img class="img-fullwidth" alt="" src="http://placehold.it/265x195">
                </div>
                <div class="progress-item mt-0">
                <div class="progress mb-0">
                    <div class="progress-bar" data-percent="85"></div>
                </div>
                </div>
                <div class="causes-details clearfix border-bottom p-15 pt-10">
                <h5><a href="#">Sponsor a child today</a></h5>
                <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Praesent quos sit.</p>
                <ul class="list-inline clearfix mt-20">
                    <li class="pull-left pr-0">Raised: $1890</li>
                    <li class="text-theme-colored pull-right pr-0">Goal: $2500</li>
                </ul>
                <div class="mt-10">
                    <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Donate</a>
                    <div class="pull-right mt-15"><i class="fa fa-heart-o text-theme-colored"></i> 89 Donors</div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="causes bg-lighter box-hover-effect effect1 maxwidth500 mb-sm-30">
                <div class="thumb">
                <img class="img-fullwidth" alt="" src="http://placehold.it/265x195">
                </div>
                <div class="progress-item mt-0">
                <div class="progress mb-0">
                    <div class="progress-bar" data-percent="86"></div>
                </div>
                </div>
                <div class="causes-details clearfix border-bottom p-15 pt-10">
                <h5><a href="#">Sponsor a child today</a></h5>
                <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Praesent quos sit.</p>
                <ul class="list-inline clearfix mt-20">
                    <li class="pull-left pr-0">Raised: $1890</li>
                    <li class="text-theme-colored pull-right pr-0">Goal: $2500</li>
                </ul>
                <div class="mt-10">
                    <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Donate</a>
                    <div class="pull-right mt-15"><i class="fa fa-heart-o text-theme-colored"></i> 89 Donors</div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="causes bg-lighter box-hover-effect effect1 maxwidth500 mb-sm-30">
                <div class="thumb">
                <img class="img-fullwidth" alt="" src="http://placehold.it/265x195">
                </div>
                <div class="progress-item mt-0">
                <div class="progress mb-0">
                    <div class="progress-bar" data-percent="87"></div>
                </div>
                </div>
                <div class="causes-details clearfix border-bottom p-15 pt-10">
                <h5><a href="#">Sponsor a child today</a></h5>
                <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Praesent quos sit.</p>
                <ul class="list-inline clearfix mt-20">
                    <li class="pull-left pr-0">Raised: $1890</li>
                    <li class="text-theme-colored pull-right pr-0">Goal: $2500</li>
                </ul>
                <div class="mt-10">
                    <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Donate</a>
                    <div class="pull-right mt-15"><i class="fa fa-heart-o text-theme-colored"></i> 89 Donors</div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- divider: Donate Now -->
    <section class="divider parallax" data-stellar-background-ratio="0.4" data-bg-img="images/bg/bg7.jpg" style="background-image: url(&quot;images/bg/bg7.jpg&quot;); background-position: 50% -42.9px;">
        <div class="container pt-0 pb-0">
        <div class="row">
            <div class="col-md-7">
            <div class="bg-theme-colored-transparent-deep p-40">
                <h4 class="text-uppercase line-bottom">Сделайте пожертвование!</h4>
                
                <!-- Paypal Both Onetime/Recurring Form Starts -->
                <form id="paypal_donate_form_onetime_recurring" class="form-text-white">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group mb-20">
                            <label><strong>Сколько вы хотите перечислить?</strong></label>
                            <input type="text" name="amount" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group mb-20">
                            <label>Вы можете оставить нам свое имя</label>
                            <input type="text" name="nick" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                    <div class="form-group mb-20">
                        <button type="submit" class="btn btn-flat btn-dark mt-10 pl-30 pr-30" data-loading-text="Please wait...">Сделать пожертвование!</button>
                    </div>
                    </div>
                </div>
                </form>
                
                <!-- Script for Donation Form Custom Amount -->
                <script type="text/javascript">
                $(document).ready(function(e) {
                    var $donation_form = $("#paypal_donate_form_onetime_recurring");
                    //toggle custom amount
                    var $custom_other_amount = $donation_form.find("#custom_other_amount");
                    $custom_other_amount.hide();
                    $donation_form.find("select[name='amount']").change(function() {
                        var $this = $(this);
                        if ($this.val() == 'other') {
                        $custom_other_amount.show().append('<div class="input-group"><span class="input-group-addon">$</span> <input id="input_other_amount" type="text" name="amount" class="form-control" value="100"/></div>');
                        }
                        else{
                        $custom_other_amount.children( ".input-group" ).remove();
                        $custom_other_amount.hide();
                        }
                    });

                    //toggle donation_type_choice
                    var $donation_type_choice = $donation_form.find("#donation_type_choice");
                    $donation_type_choice.hide();
                    $("input[name='payment_type']").change(function() {
                        if (this.value == 'recurring') {
                            $donation_type_choice.show();
                        }
                        else {
                            $donation_type_choice.hide();
                        }
                    });


                    // submit form on click
                    $donation_form.on('submit', function(e){
                            $( "#paypal_donate_form-onetime" ).submit();
                        var item_name = $donation_form.find("select[name='item_name'] option:selected").val();
                        var currency_code = $donation_form.find("select[name='currency_code'] option:selected").val();
                        var amount = $donation_form.find("select[name='amount'] option:selected").val();
                        var t3 = $donation_form.find("input[name='t3']:checked").val();

                        if ( amount == 'other') {
                        amount = $donation_form.find("#input_other_amount").val();
                        }

                        // submit proper form now
                        if ( $("input[name='payment_type']:checked", $donation_form).val() == 'recurring' ) {
                            var recurring_form = $('#paypal_donate_form-recurring');

                            recurring_form.find("input[name='item_name']").val(item_name);
                            recurring_form.find("input[name='currency_code']").val(currency_code);
                            recurring_form.find("input[name='a3']").val(amount);
                            recurring_form.find("input[name='t3']").val(t3);

                            recurring_form.find("input[type='submit']").trigger('click');

                        } else if ( $("input[name='payment_type']:checked", $donation_form).val() == 'one_time' ) {
                            var onetime_form = $('#paypal_donate_form-onetime');

                            onetime_form.find("input[name='item_name']").val(item_name);
                            onetime_form.find("input[name='currency_code']").val(currency_code);
                            onetime_form.find("input[name='amount']").val(amount);

                            onetime_form.find("input[type='submit']").trigger('click');
                        }
                        return false;
                    });

                
                });
                </script>



                <!-- Paypal Onetime Form -->
                <form id="paypal_donate_form-onetime" class="hidden" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_donations">
                <input type="hidden" name="business" value="accounts@thememascot.com">

                <input type="hidden" name="item_name" value="Educate Children"> <!-- updated dynamically -->
                <input type="hidden" name="currency_code" value="USD"> <!-- updated dynamically -->
                <input type="hidden" name="amount" value="20"> <!-- updated dynamically -->

                <input type="hidden" name="no_shipping" value="1">
                <input type="hidden" name="cn" value="Comments...">
                <input type="hidden" name="tax" value="0">
                <input type="hidden" name="lc" value="US">
                <input type="hidden" name="bn" value="PP-DonationsBF">
                <input type="hidden" name="return" value="http://www.yoursite.com/thankyou.html">
                <input type="hidden" name="cancel_return" value="http://www.yoursite.com/paymentcancel.html">
                <input type="hidden" name="notify_url" value="http://www.yoursite.com/notifypayment.php">
                <input type="submit" name="submit">
                </form>
                
                <!-- Paypal Recurring Form -->
                <form id="paypal_donate_form-recurring" class="hidden" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_xclick-subscriptions">
                <input type="hidden" name="business" value="accounts@thememascot.com">

                <input type="hidden" name="item_name" value="Educate Children"> <!-- updated dynamically -->
                <input type="hidden" name="currency_code" value="USD"> <!-- updated dynamically -->
                <input type="hidden" name="a3" value="20"> <!-- updated dynamically -->
                <input type="hidden" name="t3" value="D"> <!-- updated dynamically -->


                <input type="hidden" name="p3" value="1">
                <input type="hidden" name="rm" value="2">
                <input type="hidden" name="src" value="1">
                <input type="hidden" name="sra" value="1">
                <input type="hidden" name="no_shipping" value="0">
                <input type="hidden" name="no_note" value="1">                     
                <input type="hidden" name="lc" value="US">
                <input type="hidden" name="bn" value="PP-DonationsBF">
                <input type="hidden" name="return" value="http://www.yoursite.com/thankyou.html">
                <input type="hidden" name="cancel_return" value="http://www.yoursite.com/paymentcancel.html">
                <input type="hidden" name="notify_url" value="http://www.yoursite.com/notifypayment.php">
                <input type="submit" name="submit">
                </form>
                <!-- Paypal Both Onetime/Recurring Form Ends -->

            </div>
            </div>
            <div class="col-md-5">
            </div>
        </div>
        </div>
    </section>

    <!-- divider: Emergency Services -->
    <section class="divider parallax layer-overlay overlay-deep" data-stellar-background-ratio="0.2" data-bg-img="images/bg/bg2.jpg" style="background-image: url(&quot;images/bg/bg2.jpg&quot;); background-position: 50% 45.35px;">
        <div class="container">
        <div class="section-content text-center">
            <div class="row">
            <div class="col-md-12">
                <h3 class="mt-0">Хотите помочь другим способом?</h3>
                <h2>Позвоните <span class="text-theme-colored">8 900 307 9276 </span> и мы вас выслушаем!</h2>
            </div>
            </div>
        </div>
        </div>      
    </section>

    <!-- Section: featured project -->
    <section>
        <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
            <h4 class="text-uppercase line-bottom mt-0">Будущие проекты</h4>
            <div class="featured-project-carousel owl-nav-top">
                <div class="item">
                <div class="causes bg-lighter box-hover-effect effect1 sm-maxwidth500 mb-sm-30">
                    <div class="thumb">
                    <img class="img-fullwidth" alt="" src="http://placehold.it/360x195">
                    </div>
                    <div class="progress-item mt-0">
                    <div class="progress mb-0">
                        <div class="progress-bar" data-percent="85"></div>
                    </div>
                    </div>
                    <div class="causes-details clearfix border-bottom p-15 pt-10">
                    <p class="mb-10 mt-5"><span class="text-uppercase text-theme-colored"><strong>Название проекта:</strong></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quos aspernatur cupiditate commodi sunt illo.</p>
                        <div class="donate-details">
                        <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Поддержать!</a>
                        <ul class="pull-right list-inline mt-15">
                            <li>Собрано: $1890</li>
                            <li>Цель: $2500</li>
                        </ul>
                        </div>
                    </div>
                </div>
                </div>
                
            </div>
            </div>
            <div class="col-sm-12 col-md-4">
            <h4 class="text-uppercase line-bottom mt-0">Стать волонтером</h4>
            <div class="volunteer-wrapper border-bottom sm-maxwidth500 clearfix pb-15 mb-sm-30">
                <div class="fluid-video-wrapper">
                <iframe src="//player.vimeo.com/video/22029657?title=0&amp;byline=0&amp;portrait=0" height="210"  title="Volunteer policy" allowfullscreen></iframe>
                </div>
                <p class="mb-10 mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quos aspernatur cupiditate commodi sunt illo, dolorum iste molestias.</p>
                <p>
                <a href="#" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">Подать заявку</a>
                <span class="pull-right ml-10 mt-12 font-14">волонтеров</span>
                <span class="animate-number pull-right font-20 text-theme-colored lineheight-20 mt-5" data-value="8657" data-animation-duration="2500">0</span>
                </p>
            </div>
            </div>
            <div class="col-sm-12 col-md-4">
            <h4 class="text-uppercase line-bottom mt-0">Мероприятия</h4>
            <div class="bxslider bx-nav-top">
                <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
                <div class="row">
                    <div class="col-xs-3 p-0">
                    <div class="thumb pl-15">
                        <img alt="..." src="http://placehold.it/75x75" class="media-object">
                    </div>
                    </div>
                    <div class="col-xs-6 p-0 pl-15">
                    <div class="event-content">
                        <h5 class="media-heading text-uppercase"><a href="#">Название события</a></h5>
                        <ul>
                        <li><i class="fa fa-clock-o"></i> время события</li>
                        <li> <i class="fa fa-map-marker"></i> вдресс места</li>
                        </ul>                    
                    </div>                
                    </div>
                    <div class="col-xs-3 pr-0">
                    <div class="event-date text-center">
                        <ul>
                        <li class="font-36 text-theme-colored font-weight-700">28</li>
                        <li class="font-20 text-center text-uppercase">Февр</li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
                <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
                <div class="row">
                    <div class="col-xs-3 p-0">
                    <div class="thumb pl-15">
                        <img alt="..." src="http://placehold.it/75x75" class="media-object">
                    </div>
                    </div>
                    <div class="col-xs-6 p-0 pl-15">
                    <div class="event-content">
                        <h5 class="media-heading text-uppercase"><a href="#">Gear up for giving</a></h5>
                        <ul>
                        <li><i class="fa fa-clock-o"></i> at 5.00 pm - 7.30 pm</li>
                        <li> <i class="fa fa-map-marker"></i> 25 Newyork City.</li>
                        </ul>                    
                    </div>                
                    </div>
                    <div class="col-xs-3 pr-0">
                    <div class="event-date text-center">
                        <ul>
                        <li class="font-36 text-theme-colored font-weight-700">28</li>
                        <li class="font-20 text-center text-uppercase">Feb</li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
                <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
                <div class="row">
                    <div class="col-xs-3 p-0">
                    <div class="thumb pl-15">
                        <img alt="..." src="http://placehold.it/75x75" class="media-object">
                    </div>
                    </div>
                    <div class="col-xs-6 p-0 pl-15">
                    <div class="event-content">
                        <h5 class="media-heading text-uppercase"><a href="#">Gear up for giving</a></h5>
                        <ul>
                        <li><i class="fa fa-clock-o"></i> at 5.00 pm - 7.30 pm</li>
                        <li> <i class="fa fa-map-marker"></i> 25 Newyork City.</li>
                        </ul>                    
                    </div>                
                    </div>
                    <div class="col-xs-3 pr-0">
                    <div class="event-date text-center">
                        <ul>
                        <li class="font-36 text-theme-colored font-weight-700">28</li>
                        <li class="font-20 text-center text-uppercase">Feb</li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
                <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
                <div class="row">
                    <div class="col-xs-3 p-0">
                    <div class="thumb pl-15">
                        <img alt="..." src="http://placehold.it/75x75" class="media-object">
                    </div>
                    </div>
                    <div class="col-xs-6 p-0 pl-15">
                    <div class="event-content">
                        <h5 class="media-heading text-uppercase"><a href="#">Gear up for giving</a></h5>
                        <ul>
                        <li><i class="fa fa-clock-o"></i> at 5.00 pm - 7.30 pm</li>
                        <li> <i class="fa fa-map-marker"></i> 25 Newyork City.</li>
                        </ul>                    
                    </div>                
                    </div>
                    <div class="col-xs-3 pr-0">
                    <div class="event-date text-center">
                        <ul>
                        <li class="font-36 text-theme-colored font-weight-700">28</li>
                        <li class="font-20 text-center text-uppercase">Feb</li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
                <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
                <div class="row">
                    <div class="col-xs-3 p-0">
                    <div class="thumb pl-15">
                        <img alt="..." src="http://placehold.it/75x75" class="media-object">
                    </div>
                    </div>
                    <div class="col-xs-6 p-0 pl-15">
                    <div class="event-content">
                        <h5 class="media-heading text-uppercase"><a href="#">Gear up for giving</a></h5>
                        <ul>
                        <li><i class="fa fa-clock-o"></i> at 5.00 pm - 7.30 pm</li>
                        <li> <i class="fa fa-map-marker"></i> 25 Newyork City.</li>
                        </ul>                    
                    </div>                
                    </div>
                    <div class="col-xs-3 pr-0">
                    <div class="event-date text-center">
                        <ul>
                        <li class="font-36 text-theme-colored font-weight-700">28</li>
                        <li class="font-20 text-center text-uppercase">Feb</li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
                <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
                <div class="row">
                    <div class="col-xs-3 p-0">
                    <div class="thumb pl-15">
                        <img alt="..." src="http://placehold.it/75x75" class="media-object">
                    </div>
                    </div>
                    <div class="col-xs-6 p-0 pl-15">
                    <div class="event-content">
                        <h5 class="media-heading text-uppercase"><a href="#">Gear up for giving</a></h5>
                        <ul>
                        <li><i class="fa fa-clock-o"></i> at 5.00 pm - 7.30 pm</li>
                        <li> <i class="fa fa-map-marker"></i> 25 Newyork City.</li>
                        </ul>                    
                    </div>                
                    </div>
                    <div class="col-xs-3 pr-0">
                    <div class="event-date text-center">
                        <ul>
                        <li class="font-36 text-theme-colored font-weight-700">28</li>
                        <li class="font-20 text-center text-uppercase">Feb</li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Section: Volunteer -->
    <section class="divider parallax layer-overlay overlay-deep" data-stellar-background-ratio="0.2" data-bg-img="images/bg/bg2.jpg" style="background-image: url(&quot;images/bg/bg2.jpg&quot;); background-position: 50% -63.28px;">
        <div class="container pb-80">
        <div class="section-title text-center">
            <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3 class="text-uppercase mt-0">Наши благотворители</h3>
                <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
                </div>
                <p>Здесь можно показывать как раз таки руководителей фонда .<br> voluptatem obcaecati!</p>
            </div>
            </div>
        </div>
        <div class="section-content">
            <div class="row multi-row-clearfix">
            <div class="col-sm-6 col-md-3 mb-sm-60 text-left sm-text-center">
                <div class="volunteer border bg-white-fa maxwidth400 p-30">
                <div class="thumb"><img alt="" src="http://placehold.it/270x270" class="img-fullwidth"></div>
                <div class="info">
                    <h4 class="name"><a href="#">Имя Фамилия</a></h4>
                    <h6 class="occupation">Должность</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit dictum nobis.</p>
                    <hr>
                    <ul class="styled-icons icon-sm icon-dark icon-theme-colored mt-10 mb-0">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-sm-60 text-left sm-text-center">
                <div class="volunteer border bg-white-fa maxwidth400 p-30">
                <div class="thumb"><img alt="" src="http://placehold.it/270x270" class="img-fullwidth"></div>
                <div class="info">
                    <h4 class="name"><a href="#">Hasan Jacobson</a></h4>
                    <h6 class="occupation">Businessman</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit dictum nobis.</p>
                    <hr>
                    <ul class="styled-icons icon-sm icon-dark icon-theme-colored mt-10 mb-0">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-sm-60 text-left sm-text-center">
                <div class="volunteer border bg-white-fa maxwidth400 p-30">
                <div class="thumb"><img alt="" src="http://placehold.it/270x270" class="img-fullwidth"></div>
                <div class="info">
                    <h4 class="name"><a href="#">Hasan Jacobson</a></h4>
                    <h6 class="occupation">Businessman</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit dictum nobis.</p>
                    <hr>
                    <ul class="styled-icons icon-sm icon-dark icon-theme-colored mt-10 mb-0">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-sm-60 text-left sm-text-center">
                <div class="volunteer border bg-white-fa maxwidth400 p-30">
                <div class="thumb"><img alt="" src="http://placehold.it/270x270" class="img-fullwidth"></div>
                <div class="info">
                    <h4 class="name"><a href="#">Hasan Jacobson</a></h4>
                    <h6 class="occupation">Businessman</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit dictum nobis.</p>
                    <hr>
                    <ul class="styled-icons icon-sm icon-dark icon-theme-colored mt-10 mb-0">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    

    <!-- divider: Gallery -->
    <section class="divider bg-lighter">
        <div class="container-fluid">
        <div class="section-title text-center">
            <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3 class="text-uppercase mt-0">Фотоколлекция</h3>
                <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
            </div>
        </div>
        <div class="section-content">
            <div class="row">
            <div class="col-md-12">
                <div class="gallery-isotope grid-7 gutter-small clearfix" data-lightbox="gallery">
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                    <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                        <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg1.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                    <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                        <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg2.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                    <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                        <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg3.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                    <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                        <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg4.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                    <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                        <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg5.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                    <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                        <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg6.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                    <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                        <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg7.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                    <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                        <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg8.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                    <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                        <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg9.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                    <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                        <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg10.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                    <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                        <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg11.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                    <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                        <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg12.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                    <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                        <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg13.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                    <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                        <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg14.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                    <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                        <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg15.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                    <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                        <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg16.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                    <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                        <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg17.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                    <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                        <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg18.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                    <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                        <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg19.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                    <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                        <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg1.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                    <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                        <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg2.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Portfolio Item End -->
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Section: News -->
    <section>
        <div class="container pt-70">
        <div class="section-title text-center">
            <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3 class="text-uppercase mt-0">Последние новости</h3>
                <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <div class="news-carousel owl-nav-top mb-sm-80" data-dots="true">
                <div class="item">
                <article class="post clearfix maxwidth600 mb-sm-30">
                    <div class="entry-header">
                        <div class="post-thumb thumb"> <img src="http://placehold.it/360x220" alt="" class="img-responsive img-fullwidth"> </div>
                    </div>
                    <div class="entry-content border-1px p-20">
                    <h5 class="entry-title mt-0 pt-0"><a href="#">Название новости</a></h5>
                    <p class="text-left mb-20 mt-15 font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left mt-0" href="#">Подробнее...</a>
                    <ul class="list-inline entry-date pull-right font-12 mt-5">
                        <li><span class="text-theme-colored"> 13 ноября 2017</span></li>
                    </ul>
                    <div class="clearfix"></div>
                    </div>
                </article>
                </div>
                <div class="item">
                <article class="post clearfix maxwidth600 mb-sm-30">
                    <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="http://placehold.it/360x220" alt="" class="img-responsive img-fullwidth"> </div>
                    </div>
                    <div class="entry-content border-1px p-20">
                    <h5 class="entry-title mt-0 pt-0"><a href="#">Sponsor a child today</a></h5>
                    <p class="text-left mb-20 mt-15 font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left mt-0" href="#">Read more</a>
                    <ul class="list-inline entry-date pull-right font-12 mt-5">
                        <li><a class="text-theme-colored" href="#">Admin |</a></li>
                        <li><span class="text-theme-colored">Nov 13, 2015</span></li>
                    </ul>
                    <div class="clearfix"></div>
                    </div>
                </article>
                </div>
                <div class="item">
                <article class="post clearfix maxwidth600 mb-sm-30">
                    <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="http://placehold.it/360x220" alt="" class="img-responsive img-fullwidth"> </div>
                    </div>
                    <div class="entry-content border-1px p-20">
                    <h5 class="entry-title mt-0 pt-0"><a href="#">Sponsor a child today</a></h5>
                    <p class="text-left mb-20 mt-15 font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left mt-0" href="#">Read more</a>
                    <ul class="list-inline entry-date pull-right font-12 mt-5">
                        <li><a class="text-theme-colored" href="#">Admin |</a></li>
                        <li><span class="text-theme-colored">Nov 13, 2015</span></li>
                    </ul>
                    <div class="clearfix"></div>
                    </div>
                </article>
                </div>
                <div class="item">
                <article class="post clearfix maxwidth600 mb-sm-30">
                    <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="http://placehold.it/360x220" alt="" class="img-responsive img-fullwidth"> </div>
                    </div>
                    <div class="entry-content border-1px p-20">
                    <h5 class="entry-title mt-0 pt-0"><a href="#">Sponsor a child today</a></h5>
                    <p class="text-left mb-20 mt-15 font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left mt-0" href="#">Read more</a>
                    <ul class="list-inline entry-date pull-right font-12 mt-5">
                        <li><a class="text-theme-colored" href="#">Admin |</a></li>
                        <li><span class="text-theme-colored">Nov 13, 2015</span></li>
                    </ul>
                    <div class="clearfix"></div>
                    </div>
                </article>
                </div>
                <div class="item">
                <article class="post clearfix maxwidth600 mb-sm-30">
                    <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="http://placehold.it/360x220" alt="" class="img-responsive img-fullwidth"> </div>
                    </div>
                    <div class="entry-content border-1px p-20">
                    <h5 class="entry-title mt-0 pt-0"><a href="#">Sponsor a child today</a></h5>
                    <p class="text-left mb-20 mt-15 font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left mt-0" href="#">Read more</a>
                    <ul class="list-inline entry-date pull-right font-12 mt-5">
                        <li><a class="text-theme-colored" href="#">Admin |</a></li>
                        <li><span class="text-theme-colored">Nov 13, 2015</span></li>
                    </ul>
                    <div class="clearfix"></div>
                    </div>
                </article>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Section: Testimonials and Logo -->
    <section class="divider parallax layer-overlay overlay-light" data-stellar-background-ratio="0.2" data-bg-img="images/bg/bg1.jpg" style="background-image: url(&quot;images/bg/bg1.jpg&quot;); background-position: 50% 20.6934px;">
        <div class="container pt-0 pb-0">
        <div class="row equal-height">
            <div class="col-md-5 bg-light-transparent">
            <div class="pt-50 pb-50 pl-20 pr-20">
                <h4 class="line-bottom text-uppercase mt-0">Что говорят о нас</h4>
                <div class="testimonial-carousel owl-nav-top">
                <div class="item">
                    <div class="testimonial-wrapper text-center">
                    <div class="thumb"><img class="img-circle" alt="" src="http://placehold.it/135x135"></div>
                    <div class="content pt-10">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque tincidunt adipiscing elit.</p>
                        <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                        <h5 class="author text-theme-colored mb-0">Имя Фамилия</h5>
                        <h6 class="title text-gray mt-0 mb-15">Профессия</h6>
                    </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-wrapper text-center">
                    <div class="thumb"><img class="img-circle" alt="" src="http://placehold.it/135x135"></div>
                    <div class="content pt-10">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque tincidunt adipiscing elit.</p>
                        <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                        <h5 class="author text-theme-colored mb-0">Catherine Grace</h5>
                        <h6 class="title text-gray mt-0 mb-15">Designer</h6>
                    </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-wrapper text-center">
                    <div class="thumb"><img class="img-circle" alt="" src="http://placehold.it/135x135"></div>
                    <div class="content pt-10">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque tincidunt adipiscing elit.</p>
                        <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                        <h5 class="author text-theme-colored mb-0">Catherine Grace</h5>
                        <h6 class="title text-gray mt-0 mb-15">Designer</h6>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-7">
            <div class="display-table-parent pr-90 pl-90">
                <div class="display-table">
                <div class="display-table-cell">
                    <div class="clients text-center pt-30 pb-20 bg-lightest-transparent">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-4">
                        <img src="http://placehold.it/150x120" alt="" width="100" class="mb-10">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4">
                        <img src="http://placehold.it/150x120" alt="" width="100" class="mb-10">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4">
                        <img src="http://placehold.it/150x120" alt="" width="100" class="mb-10">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4">
                        <img src="http://placehold.it/150x120" alt="" width="100" class="mb-10">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4">
                        <img src="http://placehold.it/150x120" alt="" width="100" class="mb-10">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4">
                        <img src="http://placehold.it/150x120" alt="" width="100" class="mb-10">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4">
                        <img src="http://placehold.it/150x120" alt="" width="100" class="mb-10">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4">
                        <img src="http://placehold.it/150x120" alt="" width="100" class="mb-10">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4">
                        <img src="http://placehold.it/150x120" alt="" width="100" class="mb-10">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    </div>
                    
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Divider: Partners & Donors -->
    <section>
        <div class="container pt-40 pb-30">
        <div class="row">
            <div class="col-md-12">
            <h4 class="text-uppercase line-bottom">Партнеры Фонда</h4>
            <div class="clients-logo carousel">
                <div class="item text-left"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
                <div class="item text-left"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
                <div class="item text-left"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
                <div class="item text-left"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
                <div class="item text-left"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
                <div class="item text-left"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
                <div class="item text-left"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
                <div class="item text-left"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
            </div>
            </div>
        </div>
        </div>
    </section>
@endsection