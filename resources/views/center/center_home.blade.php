@extends('welcome')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as trainee!
                </div>
            </div>
        </div>
    </div>
</div>
 -->

   <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
 <!--?php

   echo "<pre>"; print_r($user); die;

 ?-->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="product">
              <div class="col-md-4">
                
              
                      <div class="team-block bg-light pt-10 pb-15">
                        <div class="team-thumb text-center">
                        <img src="{{url('/frontend/images/upload/center/'.$user->image)}}" width="250px" height="250px"> 

                        </div>
                        <div class="info">
                         <!--  <div class="pt-10 pb-10 bg-theme-colored2">
                            <h4 class="mt-0 mb-0 text-white">Jone doe</h4>
                            <h6 class="mt-0 mb-0 text-white">Manager</h6>
                          </div> -->
                    
                          <ul class="styled-icons icon-theme-colored icon-circled icon-dark icon-sm mt-15 mb-0 text-center">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                          </ul>
                        </div>
                      </div>
                


              </div>
              <div class="col-md-8">
                <div class="product-summary">
                  <h2 class="product-title">Acadamy Info</h2>
             
                      <table class="table table-striped">
                        <tbody>
                          <tr>
                            <th>Name</th>
                            <td><p>{{$user->name}}</p></td>
                          </tr>
                          <tr>
                            <th>Email</th>
                            <td><p>{{$user->email}}</p></td>
                          </tr>
                          <tr>
                            <th>phone</th>
                            <td><p>{{$user->phone}}</p></td>
                          </tr>
                          <tr>
                            <th>City</th>
                            <td>{{ $user->city }}</td>
                          </tr>
                          <tr>
                            <th>Address</th>
                            <td>{{ $user->address }}</td>
                          </tr>
                            <tr>
                              <th>off_image</th>
                              @foreach($user->center as $cen_doc)
                                <td>                                  
                                     <img src="{{url('/frontend/images/upload/center/'.$cen_doc->off_doc)}}" width="250px" height="250px"> 

                                </td>
                              @endforeach

                            </tr>
                        </tbody>
                      </table>
                
                </div>
              </div>
              
            </div>
           
          </div>
        </div>
      </div>
    </section>

        <div class="container">

            <div class="section-title text-center">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                  <h2 class="text-center line-height-1 mt-0">Popular <span class="text-theme-colored3">Courses</span> </h2>
      
                </div>
              </div>
            </div>
            <div class="section-content">
              <div class="row mtli-row-clearfix">
                <div class="col-md-12">
                  <div class="horizontal-tab-centered">
                    <div class="text-center">
                      <ul class="nav nav-pills mb-10">
                        <li class="active"> <a href="#tab-20" class="" data-toggle="tab" aria-expanded="false"> <i class="fa fa-graduation-cap" aria-hidden="true"></i>Faculty of Arts</a> </li>
                        <li class=""> <a href="#tab-21" data-toggle="tab" aria-expanded="false"> <i class="fa fa-leanpub"></i>Faculty of Commerce</a> </li>
                        <li class=""> <a href="#tab-22" data-toggle="tab" aria-expanded="true"> <i class="fa fa-book"></i>Faculty of Science</a> </li>
                        <li class=""> <a href="#tab-23" data-toggle="tab" aria-expanded="false"> <i class="fa fa-certificate"> </i>Postgraduate</a> </li>
                        <li class=""> <a href="#tab-24" data-toggle="tab" aria-expanded="false"> <i class="fa fa-university" aria-hidden="true"></i>Research Higher Degree</a> </li>
                      </ul>
                    </div>
                    <div class="panel-body p-0">
                      <div class="tab-content p-0">
                        <div class="tab-pane fade active in" id="tab-20">
                          <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                              <div class="services mb-xs-30">
                                <div class="thumb">
                                  <img class="img-fullwidth" alt="" src="http://placehold.it/260x170">
                                </div>
                                <div class="services-details clearfix">
                                  <div class="p-20 p-sm-15 bg-lighter">
                                    <h4 class="mt-0 line-height-1 sm-text-center"><a href="#">Anthropology</a></h4>
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
                                      <span class="text-white">$200</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <ul class="list-inline mt-15 mb-10 clearfix">
                                      <li class="pull-left sm-pull-none xs-pull-left sm-text-center flip pr-0 clearfix">Course: <span class="font-weight-700">4 Years</span></li>
                                      <li class="text-theme-colored pull-right sm-pull-none xs-pull-right sm-text-center flip pr-0">Class Size: <span class="font-weight-700">110</span></li>
                                    </ul>
                                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                              <div class="services mb-xs-30">
                                <div class="thumb">
                                  <img class="img-fullwidth" alt="" src="http://placehold.it/260x170">
                                </div>
                                <div class="services-details clearfix">
                                  <div class="p-20 p-sm-15 bg-lighter">
                                    <h4 class="mt-0 line-height-1 sm-text-center"><a href="#">Philosophy</a></h4>
                                    <ul class="list-inline text-theme-colored2 pull-left xs-pull-left sm-pull-none sm-text-center">
                                      <li>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                      </li>
                                    </ul>
                                    <div class="course-price bg-theme-colored3 pull-right xs-pull-right sm-pull-none sm-text-center mt-sm-10 mt-xs-0">
                                      <span class="text-white">$200</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <ul class="list-inline mt-15 mb-10 clearfix">
                                      <li class="pull-left sm-pull-none sm-text-center flip pr-0 clearfix">Course: <span class="font-weight-700">4 Years</span></li>
                                      <li class="text-theme-colored pull-right sm-pull-none sm-text-center flip pr-0">Class Size: <span class="font-weight-700">110</span></li>
                                    </ul>
                                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                              <div class="services mb-xs-30">
                                <div class="thumb">
                                  <img class="img-fullwidth" alt="" src="http://placehold.it/260x170">
                                </div>
                                <div class="services-details clearfix">
                                  <div class="p-20 p-sm-15 bg-lighter">
                                    <h4 class="mt-0 line-height-1 sm-text-center"><a href="#">Public Policy</a></h4>
                                    <ul class="list-inline text-theme-colored2 pull-left xs-pull-left sm-pull-none sm-text-center">
                                      <li>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                      </li>
                                    </ul>
                                    <div class="course-price bg-theme-colored3 pull-right xs-pull-right sm-pull-none sm-text-center mt-sm-10 mt-xs-0">
                                      <span class="text-white">$200</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <ul class="list-inline mt-15 mb-10 clearfix">
                                      <li class="pull-left xs-pull-left sm-pull-none sm-text-center flip pr-0 clearfix">Course: <span class="font-weight-700">4 Years</span></li>
                                      <li class="text-theme-colored pull-right xs-pull-right sm-pull-none sm-text-center flip pr-0">Class Size: <span class="font-weight-700">110</span></li>
                                    </ul>
                                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                              <div class="services">
                                <div class="thumb">
                                  <img class="img-fullwidth" alt="" src="http://placehold.it/260x170">
                                </div>
                                <div class="services-details clearfix">
                                  <div class="p-20 p-sm-15 bg-lighter">
                                    <h4 class="mt-0 line-height-1 sm-text-center"><a href="#">Sociology</a></h4>
                                    <ul class="list-inline text-theme-colored2 pull-left xs-pull-left sm-pull-none sm-text-center">
                                      <li>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                      </li>
                                    </ul>
                                    <div class="course-price bg-theme-colored3 pull-right xs-pull-right sm-pull-none sm-text-center mt-sm-10 mt-xs-0">
                                      <span class="text-white">$200</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <ul class="list-inline mt-15 mb-10 clearfix">
                                      <li class="pull-left xs-pull-left sm-pull-none sm-text-center flip pr-0 clearfix">Course: <span class="font-weight-700">4 Years</span></li>
                                      <li class="text-theme-colored pull-right xs-pull-right sm-pull-none sm-text-center flip pr-0">Class Size: <span class="font-weight-700">110</span></li>
                                    </ul>
                                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="tab-21">
                          <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4">
                              <div class="services mb-sm-50">
                                <div class="thumb">
                                  <img class="img-fullwidth" alt="" src="http://placehold.it/357x234">
                                </div>
                                <div class="services-details clearfix">
                                  <div class="p-20 p-sm-15 bg-lighter">
                                    <h4 class="mt-0 line-height-1"><a href="#">Accounting</a></h4>
                                    <ul class="list-inline text-theme-colored2 pull-left">
                                      <li>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                      </li>
                                    </ul>
                                    <div class="course-price bg-theme-colored3 pull-right">
                                      <span class="text-white">$200</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <ul class="list-inline mt-15 mb-10 clearfix">
                                      <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">$189</span></li>
                                      <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">110</span></li>
                                    </ul>
                                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                              <div class="services mb-sm-50">
                                <div class="thumb">
                                  <img class="img-fullwidth" alt="" src="http://placehold.it/357x234">
                                </div>
                                <div class="services-details clearfix">
                                  <div class="p-20 p-sm-15 bg-lighter">
                                    <h4 class="mt-0 line-height-1"><a href="#">Finance and Tax</a></h4>
                                    <ul class="list-inline text-theme-colored2 pull-left">
                                      <li>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                      </li>
                                    </ul>
                                    <div class="course-price bg-theme-colored3 pull-right">
                                      <span class="text-white">$200</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <ul class="list-inline mt-15 mb-10 clearfix">
                                      <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">$189</span></li>
                                      <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">110</span></li>
                                    </ul>
                                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                              <div class="services mb-sm-50">
                                <div class="thumb">
                                  <img class="img-fullwidth" alt="" src="http://placehold.it/357x234">
                                </div>
                                <div class="services-details clearfix">
                                  <div class="p-20 p-sm-15 bg-lighter">
                                    <h4 class="mt-0 line-height-1"><a href="#">School of Management</a></h4>
                                    <ul class="list-inline text-theme-colored2 pull-left">
                                      <li>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                      </li>
                                    </ul>
                                    <div class="course-price bg-theme-colored3 pull-right">
                                      <span class="text-white">$200</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <ul class="list-inline mt-15 mb-10 clearfix">
                                      <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">$189</span></li>
                                      <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">110</span></li>
                                    </ul>
                                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="tab-22">
                          <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3">
                              <div class="services mb-sm-50">
                                <div class="thumb">
                                  <img class="img-fullwidth" alt="" src="http://placehold.it/260x170">
                                </div>
                                <div class="services-details clearfix">
                                  <div class="p-20 p-sm-15 bg-lighter">
                                    <h4 class="mt-0 line-height-1"><a href="#">Biochemistry</a></h4>
                                    <ul class="list-inline text-theme-colored2 pull-left">
                                      <li>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                      </li>
                                    </ul>
                                    <div class="course-price bg-theme-colored3 pull-right">
                                      <span class="text-white">$200</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <ul class="list-inline mt-15 mb-10 clearfix">
                                      <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">4 Years</span></li>
                                      <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">110</span></li>
                                    </ul>
                                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                              <div class="services mb-sm-50">
                                <div class="thumb">
                                  <img class="img-fullwidth" alt="" src="http://placehold.it/357x234">
                                </div>
                                <div class="services-details clearfix">
                                  <div class="p-20 p-sm-15 bg-lighter">
                                    <h4 class="mt-0 line-height-1"><a href="#">Physics</a></h4>
                                    <ul class="list-inline text-theme-colored2 pull-left">
                                      <li>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                      </li>
                                    </ul>
                                    <div class="course-price bg-theme-colored3 pull-right">
                                      <span class="text-white">$200</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <ul class="list-inline mt-15 mb-10 clearfix">
                                      <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">4 Years</span></li>
                                      <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">110</span></li>
                                    </ul>
                                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                              <div class="services mb-sm-50">
                                <div class="thumb">
                                  <img class="img-fullwidth" alt="" src="http://placehold.it/260x170">
                                </div>
                                <div class="services-details clearfix">
                                  <div class="p-20 p-sm-15 bg-lighter">
                                    <h4 class="mt-0 line-height-1"><a href="#">Chemistry</a></h4>
                                    <ul class="list-inline text-theme-colored2 pull-left">
                                      <li>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                      </li>
                                    </ul>
                                    <div class="course-price bg-theme-colored3 pull-right">
                                      <span class="text-white">$200</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <ul class="list-inline mt-15 mb-10 clearfix">
                                      <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">4 Years</span></li>
                                      <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">110</span></li>
                                    </ul>
                                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                              <div class="services mb-sm-50">
                                <div class="thumb">
                                  <img class="img-fullwidth" alt="" src="http://placehold.it/260x170">
                                </div>
                                <div class="services-details clearfix">
                                  <div class="p-20 p-sm-15 bg-lighter">
                                    <h4 class="mt-0 line-height-1"><a href="#">Mathematics</a></h4>
                                    <ul class="list-inline text-theme-colored2 pull-left">
                                      <li>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                      </li>
                                    </ul>
                                    <div class="course-price bg-theme-colored3 pull-right">
                                      <span class="text-white">$200</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <ul class="list-inline mt-15 mb-10 clearfix">
                                      <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">4 Years</span></li>
                                      <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">110</span></li>
                                    </ul>
                                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="tab-23">
                          <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3">
                              <div class="services mb-sm-50">
                                <div class="thumb">
                                  <img class="img-fullwidth" alt="" src="http://placehold.it/260x170">
                                </div>
                                <div class="services-details clearfix">
                                  <div class="p-20 p-sm-15 bg-lighter">
                                    <h4 class="mt-0 line-height-1"><a href="#">Molecular Imaging</a></h4>
                                    <ul class="list-inline text-theme-colored2 pull-left">
                                      <li>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                      </li>
                                    </ul>
                                    <div class="course-price bg-theme-colored3 pull-right">
                                      <span class="text-white">$200</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <ul class="list-inline mt-15 mb-10 clearfix">
                                      <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">1.5 Years</span></li>
                                      <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">40</span></li>
                                    </ul>
                                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                              <div class="services mb-sm-50">
                                <div class="thumb">
                                  <img class="img-fullwidth" alt="" src="http://placehold.it/260x170">
                                </div>
                                <div class="services-details clearfix">
                                  <div class="p-20 p-sm-15 bg-lighter">
                                    <h4 class="mt-0 line-height-1"><a href="#">Bioinformatics</a></h4>
                                    <ul class="list-inline text-theme-colored2 pull-left">
                                      <li>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                      </li>
                                    </ul>
                                    <div class="course-price bg-theme-colored3 pull-right">
                                      <span class="text-white">$200</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <ul class="list-inline mt-15 mb-10 clearfix">
                                      <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">1.5 Years</span></li>
                                      <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">40</span></li>
                                    </ul>
                                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                              <div class="services mb-sm-50">
                                <div class="thumb">
                                  <img class="img-fullwidth" alt="" src="http://placehold.it/260x170">
                                </div>
                                <div class="services-details clearfix">
                                  <div class="p-20 p-sm-15 bg-lighter">
                                    <h4 class="mt-0 line-height-1"><a href="#">Data Science</a></h4>
                                    <ul class="list-inline text-theme-colored2 pull-left">
                                      <li>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                      </li>
                                    </ul>
                                    <div class="course-price bg-theme-colored3 pull-right">
                                      <span class="text-white">$200</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <ul class="list-inline mt-15 mb-10 clearfix">
                                      <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">2 Years</span></li>
                                      <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">50</span></li>
                                    </ul>
                                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                              <div class="services mb-sm-50">
                                <div class="thumb">
                                  <img class="img-fullwidth" alt="" src="http://placehold.it/260x170">
                                </div>
                                <div class="services-details clearfix">
                                  <div class="p-20 p-sm-15 bg-lighter">
                                    <h4 class="mt-0 line-height-1"><a href="#">Mineral Resources</a></h4>
                                    <ul class="list-inline text-theme-colored2 pull-left">
                                      <li>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                      </li>
                                    </ul>
                                    <div class="course-price bg-theme-colored3 pull-right">
                                      <span class="text-white">$200</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <ul class="list-inline mt-15 mb-10 clearfix">
                                      <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">2 Years</span></li>
                                      <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">50</span></li>
                                    </ul>
                                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="tab-24">
                          <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4">
                              <div class="services mb-sm-50">
                                <div class="thumb">
                                  <img class="img-fullwidth" alt="" src="http://placehold.it/357x234">
                                </div>
                                <div class="services-details clearfix">
                                  <div class="p-20 p-sm-15 bg-lighter">
                                    <h4 class="mt-0 line-height-1"><a href="#">Plant Biology</a></h4>
                                    <ul class="list-inline text-theme-colored2 pull-left">
                                      <li>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                      </li>
                                    </ul>
                                    <div class="course-price bg-theme-colored3 pull-right">
                                      <span class="text-white">$200</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <ul class="list-inline mt-15 mb-10 clearfix">
                                      <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">$189</span></li>
                                      <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">48 weeks</span></li>
                                    </ul>
                                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                              <div class="services mb-sm-50">
                                <div class="thumb">
                                  <img class="img-fullwidth" alt="" src="http://placehold.it/357x234">
                                </div>
                                <div class="services-details clearfix">
                                  <div class="p-20 p-sm-15 bg-lighter">
                                    <h4 class="mt-0 line-height-1"><a href="#">Geology</a></h4>
                                    <ul class="list-inline text-theme-colored2 pull-left">
                                      <li>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                      </li>
                                    </ul>
                                    <div class="course-price bg-theme-colored3 pull-right">
                                      <span class="text-white">$200</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <ul class="list-inline mt-15 mb-10 clearfix">
                                      <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">$189</span></li>
                                      <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">40 weeks</span></li>
                                    </ul>
                                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                              <div class="services mb-sm-50">
                                <div class="thumb">
                                  <img class="img-fullwidth" alt="" src="http://placehold.it/357x234">
                                </div>
                                <div class="services-details clearfix">
                                  <div class="p-20 p-sm-15 bg-lighter">
                                    <h4 class="mt-0 line-height-1"><a href="#">School of Management</a></h4>
                                    <ul class="list-inline text-theme-colored2 pull-left">
                                      <li>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                      </li>
                                    </ul>
                                    <div class="course-price bg-theme-colored3 pull-right">
                                      <span class="text-white">$200</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <ul class="list-inline mt-15 mb-10 clearfix">
                                      <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">$189</span></li>
                                      <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">110</span></li>
                                    </ul>
                                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        </div>


  </div>


  

@endsection
