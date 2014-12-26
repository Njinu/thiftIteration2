<!--Footer-->
    <footer class="footer">
    	<div class="container">
      	<div class="row">
        	<div class="col-lg-5 col-md-5 col-sm-5">
          	<div class="info">
            <!--   <a class="logo" href="index.html"><img src="img/logo.png" alt="Bushido"/></a> -->
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
              <div class="social">
              	<a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
              	<a href="#" target="_blank"><i class="fa fa-youtube-square"></i></a>
              	<a href="#" target="_blank"><i class="fa fa-tumblr-square"></i></a>
              	<a href="#" target="_blank"><i class="fa fa-vimeo-square"></i></a>
              	<a href="#" target="_blank"><i class="fa fa-pinterest-square"></i></a>
              	<a href="#" target="_blank"><i class="fa fa-facebook-square"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
          	<h2>Latest news</h2>
            <ul class="list-unstyled">
            	<li>25 May <a href="#">Nemo enim ipsam voluptatem</a></li>
            	<li>01 May <a href="#">Neque porro quisquam est</a></li>
            	<li>16 Apr <a href="#">Lorem ipsum dolor sit amet</a></li>
            	<li>10 Jan <a href="#">Sed ut perspiciatis unde</a></li>
            </ul>
          </div>
          <div class="contacts col-lg-3 col-md-3 col-sm-3">
          	<h2>Contacts</h2>
            <p class="p-style3">
            	4120 Lenox Avenue, New York, NY,<br/>
              10035 76 Saint Nicholas Avenue<br/>
              <a href="mailto:mail@Thriftshop.com">mail@Thriftshop.com</a><br/>
              +48 543765234<br/>
              +48 555 234 54 34<br/>
            </p>
          </div>
        </div>
        <div class="copyright">
        	<div class="row">
          	<div class="col-lg-7 col-md-7 col-sm-7">
              <p>&copy; 2014 THRIFTSHOP. All Rights Reserved. Designed by <a href="http://8guild.com/" target="_blank">7Spyre</a></p>
            </div>
          	<!-- <div class="col-lg-5 col-md-5 col-sm-5">
            	<div class="payment">
                <img src="img/payment/visa.png" alt="Visa"/>
                <img src="img/payment/paypal.png" alt="PayPal"/>
                <img src="img/payment/master.png" alt="Master Card"/>
                <img src="img/payment/discover.png" alt="Discover"/>
                <img src="img/payment/amazon.png" alt="Amazon"/>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </footer><!--Footer Close-->
    
  
   
    
    <!--Google Remarketing Tag (Placed before </body>)-->
    <script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 966923546;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
    <div style="display:inline;">
  
    </div>
    </noscript>

    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-pencil-square-o"></i> Regsiter</h4>
      </div>
      <div class="modal-body">

     <?php echo form_open('user/signup_validation') ?>

      <div class="step1" id="step1">
  <div class="form-group">
    <label for="fname">First Name</label>
    <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter your first name">
  </div>
   <div class="form-group">
    <label for="lname">Last Name</label>
    <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter your last name">
  </div>
   <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
  </div>
   <button onclick="NextStep()" type="button" class="btn btn-default">Next</button>
</div>

<div id="step3" style="display:none;">

<div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
  </div>

  <div class="form-group">
    <label for="passconfirm">Confirm Password</label>
    <input type="password" class="form-control" id="passconfirm" name="passconfirm" placeholder="Confirm password">
  </div>
  <button onclick="PreviousStep2()" type="button" class="btn btn-default">Back</button>
<button onclick="NextStep2()" type="button" class="btn btn-default">Next</button>

  </div>

  <div class="step2" id="step2" style="display:none;">
    <div class="form-group">
    <label for="cellnumber">Cell Number</label>
    <input type="number" class="form-control" id="cellnumber" name="cellnumber" placeholder="Enter cell number">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address1" name="address1" placeholder="Line 1">
    <input type="text" class="form-control" id="address2" name="address2" placeholder="Line 2">
  </div>
   <div class="form-group">
    <label for="pcode">Postal Code</label>
    <input type="number" class="form-control" id="pcode" name="pcode" placeholder="Enter your postal code">
  </div>

 <div class="checkbox">
    <label>
      <input type="checkbox"> I am above 18 years of age. I have read and agreed to abide by the thethriftshop.co.za user agreement I recognise that all selling and buying activity undertaken by me on the site is legally binding and I commit to honour all purchases and sales.
    </label>
  </div>
   <button onclick="PreviousStep()" type="button" class="btn btn-default">Back</button>
  <button type="submit" class="btn btn-default">Submit</button>
</div>
</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
       <!--  <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModallogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-pencil-square-o"></i> Login </h4>
      </div>
      <div class="modal-body">

     <?php echo form_open('user/login_validation') ?>
  
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
     
</form>

      </div>
      
    </div>
  </div>
</div>

<script type="text/javascript">
function NextStep() {

   document.getElementById('step1').style.display = "none";
     document.getElementById('step3').style.display = "block";
   
  }

  function PreviousStep() {

   document.getElementById('step3').style.display = "block";
     document.getElementById('step2').style.display = "none";
   
  }

  function PreviousStep2() {

   document.getElementById('step1').style.display = "block";
     document.getElementById('step3').style.display = "none";
   
  }

  function NextStep2() {

   document.getElementById('step3').style.display = "none";
     document.getElementById('step2').style.display = "block";
   
  }
</script>

  <!--Javascript (jQuery) Libraries and Plugins-->
   <!-- ThriftScript -->
   <?php echo script_tag('assets/Thiftstore/js/jquery-ui-1.10.4.custom.min.js'); ?>
 <?php echo script_tag('assets/Thiftstore/js/jquery.easing.min.js'); ?>
    <?php echo script_tag('assets/Thiftstore/js/smoothscroll.js'); ?>
     <?php echo script_tag('assets/Thiftstore/js/jquery.validate.min.js'); ?>
    <?php echo script_tag('assets/Thiftstore/js/icheck.min.js'); ?>
    <?php echo script_tag('assets/Thiftstore/js/jquery.placeholder.js'); ?>
    <?php echo script_tag('assets/Thiftstore/js/jquery.stellar.min.js'); ?>
    <?php echo script_tag('assets/Thiftstore/js/jquery.touchSwipe.min.js'); ?>
    <?php echo script_tag('assets/Thiftstore/js/jquery.shuffle.min.js'); ?>
    <?php echo script_tag('assets/Thiftstore/js/lightGallery.min.js'); ?>
   <?php echo script_tag('assets/Thiftstore/js/owl.carousel.min.js'); ?>
    <?php echo script_tag('assets/Thiftstore/js/masterslider.min.js'); ?>
    <?php echo script_tag('assets/Thiftstore/js/jquery.nouislider.min.js'); ?>
   <?php echo script_tag('assets/Thiftstore/js/mailer.js'); ?>
   <?php echo script_tag('assets/Thiftstore/js/scripts.js'); ?>
    <?php echo script_tag('assets/Thiftstore/js/color-switcher.js'); ?>

   

    <!-------------------------------------------------------------------------------------->

        <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
<?php echo script_tag('assets/ThriftshopTheme/cbpGridGallery.js'); ?>
    <?php echo script_tag('assets/ThriftshopTheme/classie.js'); ?>
    <?php echo script_tag('assets/ThriftshopTheme/imagesloaded.pkgd.min.js'); ?>
    <?php echo script_tag('assets/ThriftshopTheme/masonry.pkgd.min.js'); ?>

<script src='<?php echo base_url()."assets/ThriftshopTheme/gridGalley/cbpGridGallery.js"?>'></script>
<script src='<?php echo base_url()."assets/ThriftshopTheme/gridGalley/classie.js"?>'></script>
<script src='<?php echo base_url()."assets/ThriftshopTheme/gridGalley/imagesloaded.pkgd.min.js"?>'></script>
<script src='<?php echo base_url()."assets/ThriftshopTheme/gridGalley/masonry.pkgd.min.js"?>'></script>


        <script>
            new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
        </script>
    
  </body><!--Body Close-->
