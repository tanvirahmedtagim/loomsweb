<div class="offcanvas sidecart-canvas offcanvas-end contact-side" tabindex="-1" id="offcanvascart">  
    <div class="offcanvas-body">
        <div class="offcanvas-header">
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
              <div class="sidebar-widget-container">
                  <div class="sidebar-textwidget">					
                      <!-- Sidebar Info Content -->
                      <div class="sidebar-info-contents">
                          <div class="content-inner">
                              <div class="logo">
                                  <a href="{{route('index')}}"><img src="{{ !empty($logo->logo) ? URL::to('storage/' . $logo->logo) : URL::to('image/no_image.png') }}" alt="logo"></a>
                              </div>
                              <div class="content-box">
                                  
                                  <h6>Our Services</h6>
                                  <ul class="sidebar-services-list">
                                      <li><a href="{{route('contact_us')}}">Contact us</a></li>
                                      <li><a href="{{route('shop')}}">Our Products</a></li>
                                      <li><a href="shop-detail.html">Product Single</a></li>
                                      <li><a href="checkout.html">CheckOut</a></li>
                                      <li><a href="register.html">Register</a></li>
                                      <li><a href="blog.html">Our Blog</a></li>
                                      <li><a href="blog-detail.html">Blog Single</a></li>
                                  </ul>
                                  
                                  <h6>Contact info</h6>
                                  <!-- List Style One -->
                                  <ul class="list-style-one">
                                      <li>
                                          <span class="icon flaticon-maps-and-flags"></span>
                                          <strong>Our office</strong>
                                          {!!$contact->address!!}
                                      </li>
                                      <li>
                                          <span class="icon flaticon-call-1"></span>
                                          <strong>Phone</strong>
                                          <a href="tel:{{$contact->phone}}">{{$contact->phone}}</a><br>
                                      </li>
                                      <li>
                                          <span class="icon flaticon-mail"></span>
                                          <strong>Email</strong>
                                          <a href="mailto:{{$contact->email}}">{{$contact->email}}</a>
                                      </li>
                                  </ul>
                              </div>							
                          </div>
                      </div>					
                  </div>
              </div>
          </div>
      </div>