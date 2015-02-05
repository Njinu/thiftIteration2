  <script>
   $(function(){
       $("#frmUser").submit(function(){
         dataString = $("#frmUser").serialize();
 
         $.ajax({
           type: "POST",
           url: "<?php echo base_url(); ?>index.php/user/editUser",
           data: dataString,
 
           success: function(data){
              location.reload();
           }
 
         });
 
         return false;  //stop the actual form post !important!
 
      });
   });
   
     $(function(){
       $("#frmPass").submit(function(){
         dataString = $("#frmPass").serialize();
 
         $.ajax({
           type: "POST",
           url: "<?php echo base_url(); ?>index.php/user/editUserPass",
           data: dataString,
 
           success: function(data){
              location.reload();
           }
 
         });
 
         return false;  //stop the actual form post !important!
 
      });
   });
</script>
  
  
  <!--Page Content-->
    <div class="page-content">
    
      <!--Breadcrumbs-->
      <ol class="breadcrumb">
        <li><a href='<?php echo base_url()."index.php/"?>'>Home</a></li>
        <li><a href='<?php echo base_url()."index.php/". "user/profile"?>'>Account: Personal info</a></li>
      </ol><!--Breadcrumbs Close-->
      
      <!--Account Personal Info-->
      <section>
        <div class="container">
          <div class="row space-top">
          
            <!--Items List-->
            <div class="col-sm-8 space-bottom">
              <h2 class="title">My account</h2>
             <hr>
              <h3>Personal information</h3>
              
              <div class="row">
                <?php echo form_open('user/edititem',array('id'=>'frmUser','class'=>'col-md-12 personal-info')) ?>
                  <div class="row">
                    <div class="form-group col-sm-6">
                      <label for="api_first_name">First name</label>
                      <input type="text" class="form-control" name="fname" id="api_first_name" placeholder="First name" value='<?php echo $me['firstname']; ?>' required>
                       <input type="hidden" class="form-control" name="userid" id="userid"  value='<?php echo $me['id']; ?>' required>
                    </div>
                    <div class="form-group col-sm-6">
                      <label for="api_last_name">Last name</label>
                      <input type="text" class="form-control" name="lname" id="api_last_name" placeholder="Last name" value='<?php echo $me['lastname']; ?>' required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-sm-6">
                      <label for="api_email">Email</label>
                      <input type="email" class="form-control" name="email" id="api_email" placeholder="Email" value='<?php echo $me['email']; ?>' required>
                    </div>
                    <div class="form-group col-sm-6">
                      <label for="api_phone">Phone</label>
                      <input type="text" class="form-control" name="phone" id="api_phone" placeholder="Phone" value='<?php echo $me['phone']; ?>' required>
                    </div>
                  </div>
                  
                  
                  
                          
                  </div>
                  
                  
                  <input type="submit" class="btn btn-success" value="Save changes">
                </form>
               
                <h3 style="margin-top:4%">Password Management</h3>
                <?php echo form_open('user/edititem',array('id'=>'frmPass','class'=>'col-md-12 personal-info')) ?>
                <div class="row">
                    <div class="form-group col-sm-6">
                      <label for="api_password">Current Password</label>
                      <input type="password" class="form-control" name="CurrentPAss" id="CurrentPAss" placeholder="Current Password" required>
                    </div>
                    <div class="form-group col-sm-6">
                      <label for="api_conf_password">New password</label>
                      <input type="password" class="form-control" name="NewPAss" id="NewPAss" placeholder="New password" required>
                    </div>
                    <div class="form-group col-sm-6">
                      <label for="api_conf_password">Confirm New password</label>
                      <input type="password" class="form-control" name="ConfirmPass" id="ConfirmPass" placeholder="Confirm New password" required>
                          <input type="hidden" class="form-control" name="userid" id="userid"  value='<?php echo $me['id']; ?>' required>
                    </div>   
                   <div class="form-group col-sm-12">
                       <input type="submit" class="btn btn-success" value="Save changes">   
                    </div>  
                    
               </form>
              </div>
            </div>
            
            
            
            <!--Sidebar-->
            
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
    
    