  <!--Page Content-->
    <div class="page-content">
    
      <!--Breadcrumbs-->
      <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li>Account: Personal info</li>
      </ol><!--Breadcrumbs Close-->
      
      <!--Account Personal Info-->
      <section>
        <div class="container">
          <div class="row space-top">
          
            <!--Items List-->
            <div class="col-sm-8 space-bottom">
              <h2 class="title">My account</h2>
              <ul class="list-unstyled space-bottom">
                <li><a class="large" href="account-addresses.html">My addresses</a></li>
                <li><a class="large" href="order-history.html">Order history</a></li>
                <li><a class="large" href="wishlist.html">My wishlist</a></li>
              </ul>
              <h3>Personal information</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
              <div class="row">
                <form class="col-md-12 personal-info" method="post">
                  <div class="row">
                    <div class="form-group col-sm-6">
                      <label for="api_first_name">First name</label>
                      <input type="text" class="form-control" name="api_first_name" id="api_first_name" placeholder="First name" required>
                    </div>
                    <div class="form-group col-sm-6">
                      <label for="api_last_name">Last name</label>
                      <input type="text" class="form-control" name="api_last_name" id="api_last_name" placeholder="Last name" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-sm-6">
                      <label for="api_email">Email</label>
                      <input type="email" class="form-control" name="api_email" id="api_email" placeholder="Email" required>
                    </div>
                    <div class="form-group col-sm-6">
                      <label for="api_phone">Phone</label>
                      <input type="text" class="form-control" name="api_phone" id="api_phone" placeholder="Phone" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-sm-6">
                      <label for="api_password">Password</label>
                      <input type="password" class="form-control" name="api_password" id="api_password" placeholder="Password" required>
                    </div>
                    <div class="form-group col-sm-6">
                      <label for="api_conf_password">Confirm password</label>
                      <input type="password" class="form-control" name="api_conf_password" id="api_conf_password" placeholder="Confirm password" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="checkbox custom">
                      <label>
                        <input type="checkbox">Sign up for our newsletter!
                      </label>
                    </div>
                    <div class="checkbox custom">
                      <label>
                        <input type="checkbox">Receive special offers from our us.
                      </label>
                    </div>
                  </div>
                  <input type="submit" class="btn btn-success" value="Save changes">
                </form>
              </div>
            </div>
            
            <!--Sidebar-->
            <div class="col-lg-3 col-lg-offset-1 col-sm-4">
              <h3>Your order</h3>
              <div class="checkout">
                <table>
                  <tr><th>Product</th></tr>
                  <tr>
                    <td class="name border">Nikon D4X<span>x1</span></td>
                    <td class="price border">2715,00 $</td>
                  </tr>
                  <tr>
                    <td class="th">Cart subtotal</td>
                    <td class="price">2715,00 $</td>
                  </tr>
                  <tr>
                    <td class="th border">Shipping</td>
                    <td class="align-r border">Free shipping</td>
                  </tr>
                  <tr>
                    <td class="th">Order total</td>
                    <td class="price">2715,00 $</td>
                  </tr>
                </table>
                <a class="btn btn-success btn-block space-top" href="checkout.html">Place order</a>
              </div>
            </div>
          </div>
        </div>
      </section><!--Account Personal Info Close-->
      
      <!--Catalog Grid-->
      <section class="catalog-grid">
        <div class="container">
          <h2 class="primary-color">Recently viewed</h2>
          <div class="row">
            <!--Tile-->
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="tile">
                <div class="price-label">715,00 $</div>
                <a href="#"><img src="img/catalog/tiles/1.jpg" alt="1"/></a>
                <div class="footer">
                  <a href="#">Nikon D5300</a>
                  <span>by Pirate3d</span>
                  <div class="tools">
                    <div class="rate">
                      <span class="active"></span>
                      <span class="active"></span>
                      <span class="active"></span>
                      <span></span>
                      <span></span>
                    </div>
                    <!--Add To Cart Button-->
                    <a class="add-cart-btn" href="#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
                    <!--Share Button-->
                    <div class="share-btn">
                      <div class="hover-state">
                        <a class="fa fa-facebook-square" href="#"></a>
                        <a class="fa fa-twitter-square" href="#"></a>
                        <a class="fa fa-google-plus-square" href="#"></a>
                      </div>
                      <i class="fa fa-share"></i>
                    </div>
                    <!--Add To Wishlist Button-->
                    <a class="wishlist-btn" href="#">
                      <div class="hover-state">Wishlist</div>
                      <i class="fa fa-plus"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!--Tile-->
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="tile">
                <div class="price-label">715,00 $</div>
                <a href="#"><img src="img/catalog/tiles/2.jpg" alt="2"/></a>
                <div class="footer">
                  <a href="#">Nikon Coolpix</a>
                  <span>by Pirate3d</span>
                  <div class="tools">
                    <div class="rate">
                      <span class="active"></span>
                      <span class="active"></span>
                      <span class="active"></span>
                      <span></span>
                      <span></span>
                    </div>
                    <!--Add To Cart Button-->
                    <a class="add-cart-btn" href="#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
                    <!--Share Button-->
                    <div class="share-btn">
                      <div class="hover-state">
                        <a class="fa fa-facebook-square" href="#"></a>
                        <a class="fa fa-twitter-square" href="#"></a>
                        <a class="fa fa-google-plus-square" href="#"></a>
                      </div>
                      <i class="fa fa-share"></i>
                    </div>
                    <!--Add To Wishlist Button-->
                    <a class="wishlist-btn" href="#">
                      <div class="hover-state">Wishlist</div>
                      <i class="fa fa-plus"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!--Tile-->
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="tile">
                <div class="price-label">715,00 $</div>
                <a href="#"><img src="img/catalog/tiles/3.jpg" alt="3"/></a>
                <div class="footer">
                  <a href="#">Nikon WP-N3</a>
                  <span>by Pirate3d</span>
                  <div class="tools">
                    <div class="rate">
                      <span class="active"></span>
                      <span class="active"></span>
                      <span class="active"></span>
                      <span></span>
                      <span></span>
                    </div>
                    <!--Add To Cart Button-->
                    <a class="add-cart-btn" href="#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
                    <!--Share Button-->
                    <div class="share-btn">
                      <div class="hover-state">
                        <a class="fa fa-facebook-square" href="#"></a>
                        <a class="fa fa-twitter-square" href="#"></a>
                        <a class="fa fa-google-plus-square" href="#"></a>
                      </div>
                      <i class="fa fa-share"></i>
                    </div>
                    <!--Add To Wishlist Button-->
                    <a class="wishlist-btn" href="#">
                      <div class="hover-state">Wishlist</div>
                      <i class="fa fa-plus"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!--Tile-->
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="tile">
                <div class="price-label">715,00 $</div>
                <a href="#"><img src="img/catalog/tiles/4.jpg" alt="4"/></a>
                <div class="footer">
                  <a href="#">Nikkor 10-30 VR</a>
                  <span>by Pirate3d</span>
                  <div class="tools">
                    <div class="rate">
                      <span class="active"></span>
                      <span class="active"></span>
                      <span class="active"></span>
                      <span></span>
                      <span></span>
                    </div>
                    <!--Add To Cart Button-->
                    <a class="add-cart-btn" href="#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
                    <!--Share Button-->
                    <div class="share-btn">
                      <div class="hover-state">
                        <a class="fa fa-facebook-square" href="#"></a>
                        <a class="fa fa-twitter-square" href="#"></a>
                        <a class="fa fa-google-plus-square" href="#"></a>
                      </div>
                      <i class="fa fa-share"></i>
                    </div>
                    <!--Add To Wishlist Button-->
                    <a class="wishlist-btn" href="#">
                      <div class="hover-state">Wishlist</div>
                      <i class="fa fa-plus"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!--Catalog Grid Close-->
      
    </div><!--Page Content Close-->
    
    <!--Sticky Buttons-->
    <div class="sticky-btns">
      <form class="quick-contact ajax-form" method="post" name="quick-contact">
        <h3>Contact us</h3>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
        <div class="form-group">
          <label for="qc-name">Full name</label>
          <input class="form-control input-sm" type="text" name="name" id="qc-name" placeholder="Enter full name">
        </div>
        <div class="form-group">
          <label for="qc-email">Email</label>
          <input class="form-control input-sm" type="email" name="email" id="qc-email" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="qc-message">Your message</label>
          <textarea class="form-control input-sm" name="message" id="qc-message" placeholder="Enter your message"></textarea>
        </div>
        <!-- Validation Response -->
        <div class="response-holder"></div>
        <!-- Response End -->
        <input class="btn btn-success btn-sm btn-block" type="submit" value="Send">
      </form>
      <span id="qcf-btn"><i class="fa fa-envelope"></i></span>
      <span id="scrollTop-btn"><i class="fa fa-chevron-up"></i></span>
    </div><!--Sticky Buttons Close-->
    
    <!--Subscription Widget-->
    <section class="subscr-widget">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-8 col-sm-8">
            <h2 class="light-color">Subscribe to our news</h2>
            
            <!--Mail Chimp Subscription Form-->
            <form class="subscr-form" role="form" action="//8guild.us3.list-manage.com/subscribe/post?u=168a366a98d3248fbc35c0b67&amp;id=d704057a31" target="_blank" method="post" autocomplete="off">
              <div class="form-group">
                <label class="sr-only" for="subscr-name">Enter name</label>
                <input type="text" class="form-control" name="FNAME" id="subscr-name" placeholder="Enter name" required>
                <button class="subscr-next"><i class="icon-arrow-right"></i></button>
              </div>
              <div class="form-group fff" style="display: none">
                <label class="sr-only" for="subscr-email">Enter email</label>
                <input type="email" class="form-control" name="EMAIL" id="subscr-email" placeholder="Enter email" required>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;"><input type="text" name="b_168a366a98d3248fbc35c0b67_d704057a31" tabindex="-1" value=""></div>
                <button type="submit" id="subscr-submit"><i class="icon-check"></i></button>
              </div>
            </form>
            <!--Mail Chimp Subscription Form Close-->
            <p class="p-style2">Please fill the field before continuing</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1">
            <p class="p-style3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
          </div>
        </div>
      </div>
    </section><!--Subscription Widget Close-->