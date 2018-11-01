@extends('welcome')
@section('content')

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home" class="divider">
      <div class="container-fluid p-0">

        <!-- START REVOLUTION SLIDER 5.0.7 -->
        <div id="rev_slider_home_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery34" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
          <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
          <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
            <ul>

              <?php

                  $published_sliders = DB::table('sliders')
                                      ->where('publication_status' , 1)
                                      ->get();
              ?>

              @foreach($published_sliders as $p_slider)
              <!-- SLIDE 1 -->
              <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="http://placehold.it/1920x1125" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">
                <!-- MAIN IMAGE -->
                <img src="{{url('frontend/images/upload/slider/'.$p_slider->slider_image)}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
                  id="slide-1-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1000" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 1.00);"> 

                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-1-layer-2" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['200','195','160','150']" 
                  data-fontsize="['60','50','40','35']"
                  data-lineheight="['80','75','70','45']"
                  data-fontweight="['800','700','700','700']"
                  data-textalign="['center','center','center','center']"
                  data-width="['800','650','600','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">Our Best <span class="text-theme-colored2">Study</span> Institute
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-1-layer-3" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['290','260','220','220']"
                  data-fontsize="['16','16',16',16']"
                  data-lineheight="['24','24','24','24']"
                  data-fontweight="['400','400','400','400']"
                  data-textalign="['center','center','center','center']"
                  data-width="['800','650','600','460']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="700" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap;">CorpyEdu is a international leader in teaching students to write effectively,<br> learn from each other and think for themselves. 
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption rs-parallaxlevel-0" 
                  id="slide-1-layer-4" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['361','321','281','295']" 
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;" 
                  data-mask_out="x:0;y:0;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  data-responsive="off"
                  style="z-index: 8; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"><!-- <a href="#" class="btn btn-dark btn-theme-colored btn-lg">Help Save Acres</a> <a href="#" class="btn btn-dark btn-theme-colored btn-lg">Join Us</a> -->
                </div>
              </li>

              @endforeach
          
            </ul>
            <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(166, 216, 236, 1.00);"></div>
          </div>
        </div>

        <!-- END REVOLUTION SLIDER -->
        <script>
          var tpj=jQuery;         
          var revapi34;
          tpj(document).ready(function() {
            if(tpj("#rev_slider_home").revolution == undefined){
              revslider_showDoubleJqueryError("#rev_slider_home");
            }else{
              revapi34 = tpj("#rev_slider_home").show().revolution({
                sliderType:"standard",
                jsFileLocation:"js/revolution-slider/js/",
                sliderLayout:"fullwidth",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                  keyboardNavigation:"on",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation:"off",
                  onHoverStop:"on",
                  touch:{
                    touchenabled:"on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                  }
                  ,
                  arrows: {
                    style:"zeus",
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                    left: {
                      h_align:"left",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    },
                    right: {
                      h_align:"right",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    }
                  },
                  bullets: {
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    style:"metis",
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    direction:"horizontal",
                    h_align:"center",
                    v_align:"bottom",
                    h_offset:0,
                    v_offset:30,
                    space:5,
                    tmp:'<span class="tp-bullet-img-wrap"><span class="tp-bullet-image"></span></span>'
                  }
                },
                viewPort: {
                  enable:true,
                  outof:"pause",
                  visible_area:"80%"
                },
                responsiveLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[700,550,500,450],
                lazyType:"none",
                parallax: {
                  type:"scroll",
                  origo:"enterpoint",
                  speed:400,
                  levels:[5,10,15,20,25,30,35,40,45,50],
                },
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                  simplifyAll:"off",
                  nextSlideOnWindowFocus:"off",
                  disableFocusListener:false,
                }
              });
            }
          }); /*ready*/
        </script>
      <!-- END REVOLUTION SLIDER -->
      </div>
    </section>



    <!-- Section: Mission -->
    <section class="bg-lighter">
      <div class="container pb-70 pb-sm-60">
        <div class="section-title">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-center line-height-1 mt-0">Why<span class="text-theme-colored3"> Choose</span> Us</h2>
              <p class="text-center">CorpyEdu is a international leader in teaching students to write effectively,<br> learn from each other and think for themselves. </p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row equal-height">
            <div class="col-sm-4 col-md-4">
              <div class="icon-box-new bg-white text-center clearfix m-0 pr-20 pl-20 pt-30 pb-20 mb-40">
                <a href="#" class="icon icon-circled icon-md flip mb-20"> 
                  <i class="fa fa-desktop font-32 text-white"></i> 
                </a>
                <h3 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1">Best Lab</h3>
                <p>Lorem ipsum dolor sit amet elit. Duis erat nec. Ut lobortis, magna nec rhoncus, neque quam mattis ipsum, vel erat velit at diam.</p>
                <a class="text-black-999" href="#">Read More...</a>
              </div>
            </div>
            <div class="col-sm-4 col-md-4">
              <div class="icon-box-new bg-white text-center clearfix m-0 pr-20 pl-20 pt-30 pb-20 mb-40">
                <a href="#" class="icon icon-circled icon-md flip mb-20">
                  <i class="fa fa-user font-32 text-white"></i> 
                </a>
                <h3 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1">Best Teachers</h3>
                <p>Lorem ipsum dolor sit amet elit. Duis erat nec. Ut lobortis, magna nec rhoncus, neque quam mattis ipsum, vel erat velit at diam.</p>
                <a class="text-black-999" href="#">Read More...</a>
              </div>
            </div>
            <div class="col-sm-4 col-md-4">
              <div class="icon-box-new bg-white text-center clearfix m-0 pr-20 pl-20 pt-30 pb-20 mb-40">
                <a href="#" class="icon icon-circled icon-md flip mb-20">
                  <i class="fa fa-money font-32 text-white"></i> 
                </a>
                <h3 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1">Best Library</h3>
                <p>Lorem ipsum dolor sit amet elit. Duis erat nec. Ut lobortis, magna nec rhoncus, neque quam mattis ipsum, vel erat velit at diam.</p>
                <a class="text-black-999" href="#">Read More...</a>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Testimonial  -->
 <!--    <section>
      <div class="container pt-sm-70">
        <div class="section-content">
          <div class="row">
            <div class="col-sm-6 col-md-4">
              <h2 class="mt-0 mb-40 mt-xs-20 line-height-1">Student's Corner</h2>
              <div class="panel-group accordion-icon-right" id="accordion2" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne2">
                    <h4 class="panel-title font-16">
                      <a class="active" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                        Open Debate Club
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne2">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="panel-thumb mt-15 ml-15 mb-15">
                          <img src="http://placehold.it/120x150" alt="">
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div class="panel-body p-0 mt-10">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingTwo2">
                    <h4 class="panel-title font-16">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                        The Student Newspaper
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo2">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="panel-thumb mt-15 ml-15 mb-15">
                          <img src="http://placehold.it/120x150" alt="">
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div class="panel-body p-0 mt-10">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingThree2">
                    <h4 class="panel-title font-16">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                        Volunteer Work
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree2">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="panel-thumb mt-15 ml-15 mb-15">
                          <img src="http://placehold.it/120x150" alt="">
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div class="panel-body p-0 mt-10">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingFour2">
                    <h4 class="panel-title font-16">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour2" aria-expanded="false" aria-controls="collapseFour2">
                        Sports Club
                      </a>
                    </h4>
                  </div>
                  <div id="collapseFour2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour2">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="panel-thumb mt-15 ml-15 mb-15">
                          <img src="http://placehold.it/120x150" alt="">
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div class="panel-body p-0 mt-10">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <h2 class="mt-0 mb-40 mt-xs-20 line-height-1">Get Event</h2>
              <div class="bxslider bx-nav-top" data-minslides="4" >
                <div class="event media mt-0 no-bg no-border">
                  <div class="event-date media-left text-center flip bg-theme-colored pl-10">
                    <ul class="mt-15 mt-sm-30">
                      <li class="font-20 text-white font-weight-600">28</li>
                      <li class="font-14 text-uppercase text-white">Feb</li>
                    </ul>
                  </div>
                  <div class="media-body">
                    <div class="event-content pull-left flip pl-20 pl-xs-10">
                      <h4 class="event-title media-heading font-raleway font-weight-700 mb-0 pt-5"><a href="#">Gear up for giving</a></h4>
                      <span class="mb-5 font-12 mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                      <span class="font-12"><i class="fa fa-map-marker mr-5 text-theme-colored"></i> 25 Newyork City</span>
                      <p class="mb-5">Lorem ipsum dolor sit amet</p>
                    </div>
                  </div>
                </div>
                <div class="event media mt-0 no-bg no-border">
                  <div class="event-date media-left text-center flip bg-theme-colored2 p-10">
                    <ul class="mt-5 mt-sm-20">
                      <li class="font-20 text-white font-weight-600">28</li>
                      <li class="font-14 text-uppercase text-white">Feb</li>
                    </ul>
                  </div>
                  <div class="media-body">
                    <div class="event-content pull-left flip pl-20 pl-xs-10">
                      <h4 class="event-title media-heading font-raleway font-weight-700 mb-0 pt-5"><a href="#">Gear up for giving</a></h4>
                      <span class="mb-5 font-12 mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                      <span class="font-12"><i class="fa fa-map-marker mr-5 text-theme-colored"></i> 25 Newyork City</span>
                      <p class="mb-5">Lorem ipsum dolor sit amet</p>
                    </div>
                  </div>
                </div>
                <div class="event media mt-0 no-bg no-border">
                  <div class="event-date media-left text-center flip bg-theme-colored3 p-10">
                    <ul class="mt-5 mt-sm-20">
                      <li class="font-20 text-white font-weight-600">28</li>
                      <li class="font-14 text-uppercase text-white">Feb</li>
                    </ul>
                  </div>
                  <div class="media-body">
                    <div class="event-content pull-left flip pl-20 pl-xs-10">
                      <h4 class="event-title media-heading font-raleway font-weight-700 mb-0 pt-5"><a href="#">Gear up for giving</a></h4>
                      <span class="mb-5 font-12 mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                      <span class="font-12"><i class="fa fa-map-marker mr-5 text-theme-colored"></i> 25 Newyork City</span>
                      <p class="mb-5">Lorem ipsum dolor sit amet</p>
                    </div>
                  </div>
                </div>
                <div class="event media mt-0 no-bg no-border">
                  <div class="event-date media-left text-center flip bg-theme-colored p-10">
                    <ul class="mt-5 mt-sm-20">
                      <li class="font-20 text-white font-weight-600">28</li>
                      <li class="font-14 text-uppercase text-white">Feb</li>
                    </ul>
                  </div>
                  <div class="media-body">
                    <div class="event-content pull-left flip pl-20 pl-xs-10">
                      <h4 class="event-title media-heading font-raleway font-weight-700 mb-0 pt-5"><a href="#">Gear up for giving</a></h4>
                      <span class="mb-5 font-12 mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                      <span class="font-12"><i class="fa fa-map-marker mr-5 text-theme-colored"></i> 25 Newyork City</span>
                      <p class="mb-5">Lorem ipsum dolor sit amet</p>
                    </div>
                  </div>
                </div>
                <div class="event media mt-0 no-bg no-border">
                  <div class="event-date media-left text-center flip bg-theme-colored2 p-10">
                    <ul class="mt-5 mt-sm-20">
                      <li class="font-20 text-white font-weight-600">28</li>
                      <li class="font-14 text-uppercase text-white">Feb</li>
                    </ul>
                  </div>
                  <div class="media-body">
                    <div class="event-content pull-left flip pl-20 pl-xs-10">
                      <h4 class="event-title media-heading font-raleway font-weight-700 mb-0 pt-5"><a href="#">Gear up for giving</a></h4>
                      <span class="mb-5 font-12 mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                      <span class="font-12"><i class="fa fa-map-marker mr-5 text-theme-colored"></i> 25 Newyork City</span>
                      <p class="mb-5">Lorem ipsum dolor sit amet</p>
                    </div>
                  </div>
                </div>
                <div class="event media mt-0 no-bg no-border">
                  <div class="event-date media-left text-center flip bg-theme-colored3 p-10">
                    <ul class="mt-5 mt-sm-20">
                      <li class="font-20 text-white font-weight-600">28</li>
                      <li class="font-14 text-uppercase text-white">Feb</li>
                    </ul>
                  </div>
                  <div class="media-body">
                    <div class="event-content pull-left flip pl-20 pl-xs-10">
                      <h4 class="event-title media-heading font-raleway font-weight-700 mb-0 pt-5"><a href="#">Gear up for giving</a></h4>
                      <span class="mb-5 font-12 mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                      <span class="font-12"><i class="fa fa-map-marker mr-5 text-theme-colored"></i> 25 Newyork City</span>
                      <p class="mb-5">Lorem ipsum dolor sit amet</p>
                    </div>
                  </div>
                </div>
                <div class="event media mt-0 no-bg no-border">
                  <div class="event-date media-left text-center flip bg-theme-colored p-10">
                    <ul class="mt-5 mt-sm-20">
                      <li class="font-20 text-white font-weight-600">28</li>
                      <li class="font-14 text-uppercase text-white">Feb</li>
                    </ul>
                  </div>
                  <div class="media-body">
                    <div class="event-content pull-left flip pl-20 pl-xs-10">
                      <h4 class="event-title media-heading font-raleway font-weight-700 mb-0 pt-5"><a href="#">Gear up for giving</a></h4>
                      <span class="mb-5 font-12 mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                      <span class="font-12"><i class="fa fa-map-marker mr-5 text-theme-colored"></i> 25 Newyork City</span>
                      <p class="mb-5">Lorem ipsum dolor sit amet</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <h2 class="mt-0 mb-40 text-center line-height-1 mb-15 mt-sm-0 pt-sm-100">Our Client's Say</h2>
              <div class="owl-carousel-1col" data-nav="true">
                <div class="item">
                  <div class="testimonial-wrapper bg-silver-light form-boxshadow p-15 text-center">
                    <div class="content">
                      <i class="fa fa-quote-left font-42 mt-10 mb-15 mb-sm-0"></i>
                      <a class="mt-20 mb-15 display-block" href="#">
                        <img alt="" src="http://placehold.it/100x100" class="img-circle">
                      </a>
                      <p class="mb-sm-10">Lorem ipsum dolor sit amet elit. Duis erat nec. Ut lobortis, magna rhoncus, neque quam mattis ipsum, vel erat velit at diam.</p>
                      <h4 class="service-box-title font-weight-800">Corvin Adams</h4>
                      <span class="text-theme-colored2 font-14 font-weight-600 mt-5 mt-sm-0">web Desinger (ceo)</span>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial-wrapper bg-silver-light form-boxshadow p-15 text-center">
                    <div class="content">
                      <i class="fa fa-quote-left font-42 mt-10 mb-15 mb-sm-0"></i>
                      <a class="mt-20 mb-15 display-block" href="#">
                        <img alt="" src="http://placehold.it/100x100" class="img-circle">
                      </a>
                      <p class="mb-sm-10">Lorem ipsum dolor sit amet elit. Duis erat nec. Ut lobortis, magna rhoncus, neque quam mattis ipsum, vel erat velit at diam.</p>
                      <h4 class="service-box-title font-weight-800">Jhon Doe</h4>
                      <span class="text-theme-colored2 font-14 font-weight-600 mt-5 mt-sm-0">Web Developer (Maneger)</span>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial-wrapper bg-silver-light form-boxshadow p-15 text-center">
                    <div class="content">
                      <i class="fa fa-quote-left font-42 mt-10 mb-15 mb-sm-0"></i>
                      <a class="mt-20 mb-15 display-block" href="#">
                        <img alt="" src="http://placehold.it/100x100" class="img-circle">
                      </a>
                      <p class="mb-sm-10">Lorem ipsum dolor sit amet elit. Duis erat nec. Ut lobortis, magna rhoncus, neque quam mattis ipsum, vel erat velit at diam.</p>
                      <h4 class="service-box-title font-weight-800">Corvin Adams</h4>
                      <span class="text-theme-colored2 font-14 font-weight-600 mt-5 mt-sm-0">Web Desinger (QC)</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Section: -->
    <section class="layer-overlay overlay-theme-colored-9" data-bg-img="http://placehold.it/1920x1280" data-parallax-ratio="0.7">
      <div class="container">
        <div class="section-title">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-white text-center line-height-1 mt-0">Our Success</h2>
              <p class="text-white-f2 text-center">Lorem ipsum dolor simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                  <div class="funfact">
                    <i class="pe-7s-notebook text-white mt-20 font-48 pull-left flip"></i>
                    <div class="ml-60">
                      <h2 class="animate-number text-white-f1 mt-0 mb-0 font-48 line-bottom-white" data-value="280" data-animation-duration="2000">0</h2>
                      <div class="clearfix"></div>
                      <h5 class="text-white-f2">Courses</h5>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                  <div class="funfact">
                    <i class="pe-7s-users text-white mt-20 font-48 pull-left flip"></i>
                    <div class="ml-60">
                      <h2 class="animate-number text-white-f1 mt-0 mb-0 font-48 line-bottom-white" data-value="15K" data-animation-duration="2500">0</h2>
                      <div class="clearfix"></div>
                      <h5 class="text-white-f2">Students</h5>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="funfact">
                    <i class="pe-7s-study text-white mt-20 font-48 pull-left flip"></i>
                    <div class="ml-60">
                      <h2 class="animate-number text-white-f1 mt-0 mb-0 font-48 line-bottom-white" data-value="10K" data-animation-duration="3000">0</h2>
                      <div class="clearfix"></div>
                      <h5 class="text-white-f2">Graduate Students</h5>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="funfact">
                    <i class="pe-7s-cup text-white mt-20 font-48 pull-left flip"></i>
                    <div class="ml-60">
                      <h2 class="animate-number text-white-f1 mt-0 mb-0 font-48 line-bottom-white" data-value="189" data-animation-duration="3000">0</h2>
                      <div class="clearfix"></div>
                      <h5 class="text-white-f2">Awards</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: -->
    <section>
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
              <h2 class="text-center line-height-1 mt-0">Popular <span class="text-theme-colored3">Courses</span> </h2>
              <p>Choose from over 2,000 online courses with new additions published every month</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row mtli-row-clearfix">
            <div class="col-md-12">
              <div class="horizontal-tab-centered">
                <div class="text-center">
                  <ul class="nav nav-pills mb-10">

               <!--      <li class="active"> <a href="#tab-20" class="" data-toggle="tab" aria-expanded="false"> <i class="fa fa-graduation-cap" aria-hidden="true"></i>IT & Programming</a> </li>
                    <li class=""> <a href="#tab-21" data-toggle="tab" aria-expanded="false"> <i class="fa fa-leanpub"></i>Bussiness</a> </li> -->
                   <!--  <li class=""> <a href="#tab-22" data-toggle="tab" aria-expanded="true"> <i class="fa fa-book"></i>Markting</a> </li> -->
                 
                    
                  </ul>
                </div>
                <div class="panel-body p-0">
                  <div class="tab-content p-0">

                    <div class="tab-pane fade active in" id="tab-20">
                      <div class="row">
                        <!--?php
                          echo "<pre>"; print_r($bussiness_courses); die;
                        ?-->
                        @foreach ($home_courses as $ho_course)
                          <div class="col-sm-4 col-md-4 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="services mb-xs-30">
                              <div class="thumb">
                                <img class="img-fullwidth" alt="" width="480px" height="180px" src="{{url('/backend/courses/'.$ho_course->course_image)}}">
                              </div>
                              <div class="services-details clearfix">
                                <div class="p-20 p-sm-15 bg-lighter">
                                  <h4 class="mt-0 line-height-1 sm-text-center"><a href="#">{{$ho_course->course_name}}</a></h4>
                                  <ul class="list-inline text-theme-colored2 pull-left xs-pull-left  sm-pull-none sm-text-center">
                                    <li>
                                      <i class="fa fa-star" aria-hidden="true"></i>
                                      <i class="fa fa-star" aria-hidden="true"></i>
                                      <i class="fa fa-star" aria-hidden="true"></i>
                                      <i class="fa fa-star" aria-hidden="true"></i>
                                      <i class="fa fa-star" aria-hidden="true"></i>
                                    </li>
                                  </ul>
                                  <div class="course-price bg-theme-colored3 pull-right sm-pull-none xs-pull-right sm-text-center mt-sm-10 mt-xs-0">
                                    <span class="text-white">EG {{$ho_course->course_price}} </span>
                                  </div>
                                  <div class="clearfix"></div>
                                  <ul class="list-inline mt-15 mb-10 clearfix">
                                   

                                    <li class="pull-left sm-pull-none xs-pull-left sm-text-center flip pr-0 clearfix">Period: <span class="font-weight-700"> {{$ho_course->course_hours}} hours </span></li><br><br>

                                     <li class="text-theme-colored  sm-pull-none  sm-text-center flip pr-0"> Instructor : <span class="font-weight-700">{{$ho_course->name}} Acadamy</span></li>
                                    
                                  </ul>

                                   <a class="btn btn-info btn-theme-colored btn-sm text-uppercase mt-10" href="{{url('/course_details/'.$ho_course->course_id)}}">Add To Cart</a>

                                    @if(Auth::check())
                                    <a href="{{ url('/add_to_wishlist/'.$ho_course->course_id) }}" class="btn btn-danger" style="margin-top: 10px"><span>+ Add to Wish List</span></a>
                                    @else
                                    <a href="{{ url('/login') }}" class="btn btn-danger" style="margin-top: 10px"><span>+ Add to Wish List</span></a>
                                    @endif

                                  
                                  
                                </div>
                              </div>
                            </div>
                        </div>
                        @endforeach
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Section:  -->
    <section>
      <div class="container pb-sm-70">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
              <h2 class="mt-0 line-height-1">Faculty <span class="text-theme-colored3">Members</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Acque quidem eaque, amet doloribus, error inventore, quisquam totam magni cumque.</p>
            </div>
          </div>
        </div>
        <div class="section-content text-center">
          <div class="row">
            <div class="col-sm-6 col-md-3 mb-sm-30">
              <div class="team-member bg-light pt-10 pb-15">
                <div class="thumb"><img class="img-fullwidth" src="http://placehold.it/260x270" alt="">
                </div>
                <div class="info">
                  <div class="pt-10 pb-10 bg-theme-colored2">
                    <h4 class="mt-0 mb-0 text-white">Jone doe</h4>
                    <h6 class="mt-0 mb-0 text-white">Manager</h6>
                  </div>
                  <p class="p-15 pb-0">Lorem ipsum dolor sit amet cing, consectetur adipisi. Vel consectetur.</p>
                  <ul class="styled-icons icon-theme-colored icon-circled icon-dark icon-sm mt-15 mb-0">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-sm-30">
              <div class="team-member bg-light pt-10 pb-15">
                <div class="thumb"><img class="img-fullwidth" src="http://placehold.it/260x270" alt="">
                </div>
                <div class="info">
                  <div class="pt-10 pb-10 bg-theme-colored">
                    <h4 class="mt-0 mb-0 text-white">Jone doe</h4>
                    <h6 class="mt-0 mb-0 text-white">Manager</h6>
                  </div>
                  <p class="p-15 pb-0">Lorem ipsum dolor sit amet cing, consectetur adipisi. Vel consectetur.</p>
                  <ul class="styled-icons icon-theme-colored3 icon-circled icon-dark icon-sm mt-15 mb-0">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-sm-30">
              <div class="team-member bg-light pt-10 pb-15">
                <div class="thumb"><img class="img-fullwidth" src="http://placehold.it/260x270" alt="">
                </div>
                <div class="info">
                  <div class="pt-10 pb-10 bg-theme-colored3">
                    <h4 class="mt-0 mb-0 text-white">Jone doe</h4>
                    <h6 class="mt-0 mb-0 text-white">Manager</h6>
                  </div>
                  <p class="p-15 pb-0">Lorem ipsum dolor sit amet cing, consectetur adipisi. Vel consectetur.</p>
                  <ul class="styled-icons icon-theme-colored icon-circled icon-dark icon-sm mt-15 mb-0">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-sm-30">
              <div class="team-member bg-light pt-10 pb-15">
                <div class="thumb"><img class="img-fullwidth" src="http://placehold.it/260x270" alt="">
                </div>
                <div class="info">
                  <div class="pt-10 pb-10 bg-theme-colored">
                    <h4 class="mt-0 mb-0 text-white">Jone doe</h4>
                    <h6 class="mt-0 mb-0 text-white">Manager</h6>
                  </div>
                  <p class="p-15 pb-0">Lorem ipsum dolor sit amet cing, consectetur adipisi. Vel consectetur.</p>
                  <ul class="styled-icons icon-theme-colored2 icon-circled icon-dark icon-sm mt-15 mb-0">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: blog -->
   <!--  <section id="blog" class="bg-silver-light">
      <div class="container pb-70">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
              <h2 class="mt-0 line-height-1 text-center">Latest <span class="text-theme-colored3">News</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Acque quidem eaque, amet doloribus, error inventore, quisquam totam magni cumque.</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-4">
              <article class="post clearfix maxwidth600 mb-30 border-1px">
                <div class="entry-header-new mb-0">
                  <div class="post-thumb thumb"><img src="http://placehold.it/360x250" alt="" class="img-responsive img-fullwidth">
                  </div>
                  <div class="blog-overlay"></div>
                </div>
                <div class="bg-white pt-30 pr-20 pl-20 pb-30 text-center">
                  <h3 class="entry-title mt-0 pt-0"><a class="text-theme-colored" href="#">The Celebration</a></h3>
                  <ul class="list-inline entry-date font-13 mt-5">
                    <li><i class="fa fa-clock-o mr-5 text-theme-colored"></i> Dec - 21 </li>
                    <li><i class="fa fa-map-marker mr-5 text-theme-colored"></i>  121 King Street, Melbourne </li>
                  </ul>
                  <p class="mt-10">Lorem ipsum dolor sit amet. Reiciendis impedit expedita sit deleniti culpa nam fuga neque similique corporis.</p>
                  <a class="btn btn-theme-colored btn-lg btn-flat mt-0 text-white mt-10" href="#">Read more <i class="fa fa-angle-double-right text-theme-colored2"></i></a>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
              <article class="post clearfix maxwidth600 mb-30 border-1px">
                <div class="entry-header-new mb-0">
                  <div class="post-thumb thumb"><img src="http://placehold.it/360x250" alt="" class="img-responsive img-fullwidth">
                  </div>
                  <div class="blog-overlay"></div>
                </div>
                <div class="bg-white pt-30 pr-20 pl-20 pb-30 text-center">
                  <h3 class="entry-title mt-0 pt-0"><a class="text-theme-colored" href="#">The Celebration</a></h3>
                  <ul class="list-inline entry-date font-13 mt-5">
                    <li><i class="fa fa-clock-o mr-5 text-theme-colored"></i> Dec - 21 </li>
                    <li><i class="fa fa-map-marker mr-5 text-theme-colored"></i>  121 King Street, Melbourne </li>
                  </ul>
                  <p class="mt-10">Lorem ipsum dolor sit amet. Reiciendis impedit expedita sit deleniti culpa nam fuga neque similique corporis.</p>
                  <a class="btn btn-theme-colored btn-lg btn-flat mt-0 text-white mt-10" href="#">Read more <i class="fa fa-angle-double-right text-theme-colored2"></i></a>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
              <article class="post clearfix maxwidth600 mb-30 border-1px">
                <div class="entry-header-new mb-0">
                  <div class="post-thumb thumb"><img src="http://placehold.it/360x250" alt="" class="img-responsive img-fullwidth">
                  </div>
                  <div class="blog-overlay"></div>
                </div>
                <div class="bg-white pt-30 pr-20 pl-20 pb-30 text-center">
                  <h3 class="entry-title mt-0 pt-0"><a class="text-theme-colored" href="#">The Celebration</a></h3>
                  <ul class="list-inline entry-date font-13 mt-5">
                    <li><i class="fa fa-clock-o mr-5 text-theme-colored"></i> Dec - 21 </li>
                    <li><i class="fa fa-map-marker mr-5 text-theme-colored"></i>  121 King Street, Melbourne </li>
                  </ul>
                  <p class="mt-10">Lorem ipsum dolor sit amet. Reiciendis impedit expedita sit deleniti culpa nam fuga neque similique corporis.</p>
                  <a class="btn btn-theme-colored btn-lg btn-flat mt-0 text-white mt-10" href="#">Read more <i class="fa fa-angle-double-right text-theme-colored2"></i></a>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section> -->
  </div>
  <!-- end main-content -->


@endsection