<!--Page Content-->
<div class="page-content">

  <!--Breadcrumbs-->
  <ol class="breadcrumb">
    <li><a href="index.html">Home</a></li>
    <li>Login/ register</li>
  </ol><!--Breadcrumbs Close-->

  <!--Login / Register-->
  <section class="log-reg container">
   <h2>Login/ register</h2>
   <p class="large">Use social accounts</p>
   <div class="social-login">
    <a class="facebook" href="#"><i class="fa fa-facebook-square"></i></a>
    <a class="google" href="#"><i class="fa fa-google-plus-square"></i></a>
    <a class="twitter" href="#"><i class="fa fa-twitter-square"></i></a>
  </div>
  <div class="row">
    <!--Login-->
    <div class="col-lg-5 col-md-5 col-sm-5">


    <?php echo form_open('user/login_validation',array('class'=>'login-form')) ?>
      <div class="form-group group">
          <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
        <a class="help-link" href="#">Forgot email?</a>
      </div>
      <div class="form-group group">
        <label for="password">Password</label>
         <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        <a class="help-link" href="#">Forgot password?</a>
      </div>
      <div class="checkbox">
        <label><input type="checkbox" name="remember"> Remember me</label>
      </div>
      <input class="btn btn-success" type="submit" value="Login">
    </form>
  </div>
  <!--Registration-->
  <div class="col-lg-7 col-md-7 col-sm-7">
   <?php echo form_open('user/signup_validation',array('class'=>'registr-form')) ?>

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
</div>
</section><!--Login / Register Close-->

<!--Brands Carousel Widget-->
<section class="brand-carousel">
  <div class="container">
    <h2>Brands in our shop</h2>
    <div class="inner">
      <a class="item" href="#"><img src="img/brands/jquery.png" alt="jQuery"/></a>
      <a class="item" href="#"><img src="img/brands/wp.png" alt="WordPress"/></a>
      <a class="item" href="#"><img src="img/brands/woo.png" alt="WooCommerce"/></a>
      <a class="item" href="#"><img src="img/brands/android.png" alt="Android"/></a>
      <a class="item" href="#"><img src="img/brands/macgasm.png" alt="Macgasm"/></a>
      <a class="item" href="#"><img src="img/brands/dropbox.png" alt="Dropbox"/></a>
    </div>
  </div>
</section><!--Brands Carousel Close-->

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