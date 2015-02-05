    <?php if( validation_errors()  != "") { ?>



<script type="text/javascript">

   $(document).ready(
    function(){

      $( "#notify" ).click();
        // $.fancybox('<div style="height: 90px;padding-left:20px;padding-right:20px;line-height: 90px;color:#2980b9"><?php echo $this->session->flashdata('fancy') ?></div>');
    
        

    });



   </script>
<?php } ?>
  
<!--Page Content-->
<div class="page-content">
 <input type="hidden" id="notify" data-toggle="modal" data-target="#myModal"/>

  <!--Breadcrumbs-->
  <ol class="breadcrumb">
    <li><a href='<?php echo base_url()."index.php/"?>'>Home</a></li>
    <li><a href='<?php echo base_url()."index.php/". "user/signup"?>'>Login/Register</a></li>
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
      <!--   <a class="help-link" href="#" data-toggle="modal" data-target="#myModalforgot">Forgot email?</a> -->
      </div>
      <div class="form-group group">
        <label for="password">Password</label>
         <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        <a class="help-link" href="#" data-toggle="modal" data-target="#myModalforgot">Forgot password?</a>
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

      <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter your first name" value="<?php echo set_value('fname'); ?>"  required>
    </div>
    <div class="form-group">
      <label for="lname">Last Name</label>
      <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter your last name" value="<?php echo set_value('lname'); ?>" required>
    </div>
    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value="<?php echo set_value('email'); ?>" required>
    </div>
    <button onclick="NextStep()" type="button" class="btn btn-default">Next</button>
  </div>

  <div id="step3" style="display:none;">

    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" value="<?php echo set_value('username'); ?>" required>
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
    </div>

    <div class="form-group">
      <label for="passconfirm">Confirm Password</label>
      <input type="password" class="form-control" id="passconfirm" name="passconfirm" placeholder="Confirm password" value="<?php echo set_value('passconfirm'); ?>" required>
    </div>
    <button onclick="PreviousStep2()" type="button" class="btn btn-default">Back</button>
    <button onclick="NextStep2()" type="button" class="btn btn-default">Next</button>

  </div>

  <div class="step2" id="step2" style="display:none;">
    <div class="form-group">
      <label for="cellnumber">Cell Number</label>
      <input type="number" class="form-control" id="cellnumber" name="cellnumber" placeholder="Enter cell number" value="<?php echo set_value('cellnumber'); ?>" required>
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <input type="text" class="form-control" id="address1" name="address1" placeholder="Line 1" value="<?php echo set_value('address1'); ?>" required>
      <input type="text" class="form-control" id="address2" name="address2" placeholder="Line 2" value="<?php echo set_value('address2'); ?>" required>
    </div>
    <div class="form-group">
      <label for="pcode">Postal Code</label>
      <input type="number" class="form-control" id="pcode" name="pcode" placeholder="Enter your postal code" value="<?php echo set_value('pcode'); ?>" required>
    </div>

    <div class="checkbox">
      <label>
        <input onclick="checked()" type="checkbox"> I am above 18 years of age. I have read and agreed to abide by the thethriftshop.co.za user agreement I recognise that all selling and buying activity undertaken by me on the site is legally binding and I commit to honour all purchases and sales.
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
<!-- <section class="brand-carousel">
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
</section> --><!--Brands Carousel Close-->

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



<!-- Modal -->
<div class="modal fade" id="myModalforgot" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-pencil-square-o"></i> Login </h4>
      </div>
      <div class="modal-body">

     <?php echo form_open('user/Forget_validation') ?>
  
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
     
</form>

      </div>
      
    </div>
  </div>
</div>

<script type="text/javascript">


function checked() {

 alert('hello');

}

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

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-danger"  style="width: 50%;margin-top: 30%;margin-left: 20%;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Notification</h4>
      </div>
      <div class="modal-body">
       <?php echo $errors ?>
      </div>
     
    </div>
  </div>
</div>

