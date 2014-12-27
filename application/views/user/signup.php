
  <meta name="description" content="Responsive HTML5 E-Commerce Template" />
  <meta name="keywords" content="responsive html5 template, e-commerce, shop, bootstrap 3.0, css, jquery, flat, modern" />
  <meta name="author" content="8Guild" />
  <!--Mobile Specific Meta Tag-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <!--Favicon-->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <!--Master Slider Styles-->

  <!--Adding Media Queries Support for IE8-->
    <!--[if lt IE 9]>
      <script src="js/plugins/respond.js"></script>
      <![endif]-->
      <!--Google Analytics-->
      <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-46803427-2']);
      _gaq.push(['_trackPageview']);
      (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';

        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
      })();
      </script>


      <!--Body-->
      <body style="padding:0px;">

        <!--Color Switcher-->
        <div class="color-switcher group animated">
          <div class="toggle"><i class="fa fa-cog"></i></div>

        </div><!--Color Switcher End-->

        <!--Login Modal-->
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h2>Login or <a href="register.html">Register</a></h2>
                <p class="large">Use social accounts</p>
                <div class="social-login">
                  <a class="facebook" href="#"><i class="fa fa-facebook-square"></i></a>
                  <a class="google" href="#"><i class="fa fa-google-plus-square"></i></a>
                  <a class="twitter" href="#"><i class="fa fa-twitter-square"></i></a>
                </div>
              </div>
              <div class="modal-body">
                <form class="login-form">
                  <div class="form-group group">
                    <label for="log-email">Email</label>
                    <input type="email" class="form-control" name="log-email" id="log-email" placeholder="Enter your email" required>
                    <a class="help-link" href="#">Forgot email?</a>
                  </div>
                  <div class="form-group group">
                    <label for="log-password">Password</label>
                    <input type="text" class="form-control" name="log-password" id="log-password" placeholder="Enter your password" required>
                    <a class="help-link" href="#">Forgot password?</a>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Remember me</label>
                  </div>
                  <input class="btn btn-success" type="submit" value="Login">
                </form>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!--Header-->
        <header data-offset-top="500" data-stuck="600"><!--data-offset-top is when header converts to small variant and data-stuck when it becomes visible. Values in px represent position of scroll from top. Make sure there is at least 100px between those two values for smooth animation-->

          <!--Search Form-->
          <form class="search-form closed" method="get" role="form" autocomplete="off">
            <div class="container">
              <div class="close-search"><i class="fa fa-times"></i></div>
              <div class="form-group">
                <label class="sr-only" for="search-hd">Search for procuct</label>
                <input type="text" class="form-control" name="search-hd" id="search-hd" placeholder="Search for procuct">
                <button type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
              </div>
            </div>
          </form>

          <!--Split Background-->
          <div class="left-bg"></div>
          <div class="right-bg"></div>

          <div class="container">
            <!-- <a class="logo" href="index.html"><img src="img/logo.png" alt="Bushido"/></a> -->

            <!--Language / Currency Switchers-->
            <ul class="switchers">
              <li>$
                <ul class="dropdown">
                  <li><a href="#">&euro;</a></li>
                  <li><a href="#">$</a></li>
                </ul>
              </li>
              <li>En
                <ul class="dropdown">
                  <li><a href="#">En</a></li>
                  <li><a href="#">Fr</a></li>
                  <li><a href="#">Gr</a></li>
                </ul>
              </li>
            </ul>

            <!--Mobile Menu Toggle-->
            <div class="menu-toggle"><i class="fa fa-list"></i></div>
            <div class="mobile-border"><span></span></div>

            <!--Main Menu-->
            <nav class="menu">
              <ul class="main">
                <li class="has-submenu"><a href='<?php echo base_url()."index.php/"?>'>Home</a><!--Class "has-submenu" for proper highlighting and dropdown-->

                </li>
                <li class="has-submenu"><a href='<?php echo base_url()."index.php/". "thriftshop"?>'>Shop<i class="fa fa-chevron-down"></i></a>
                <!--   <ul class="submenu">
                    <li><a href='<?php echo base_url()."index.php/". "thriftshop/wishlist"?>'>Wishlist</a></li>
                    <li><a href='<?php echo base_url()."index.php/". "thriftshop/shop"?>'>Store</a></li>
                  </ul> -->
                </li>
                <li class="has-submenu"><a href='<?php echo base_url()."index.php/". "thriftshop/support"?>'>Support<i class="fa fa-chevron-down"></i></a>

                </li>

                 <li class="has-submenu"><a href='<?php echo base_url()."index.php/". "user/signup"?>'>Signup<i class="fa fa-chevron-down"></i></a>

                </li>
           <!--  <li class="has-submenu"><a href="#">Pages<span class="label">NEW</span><i class="fa fa-chevron-down"></i></a>
              <ul class="submenu">
                <li><a href="register.html">Login / Registration</a></li>
                <li><a href="account-personal-info.html">Account: Personal Info<span class="label">NEW</span></a></li>
                <li><a href="account-addresses.html">Account: Addresses<span class="label">NEW</span></a></li>
                <li><a href="order-history.html">Orders History<span class="label">NEW</span></a></li>
                <li><a href="order-tracking.html">Order Tracking<span class="label">NEW</span></a></li>
                <li><a href="delivery-info.html">Delivery Info<span class="label">NEW</span></a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contacts.html">Contacts</a></li>
                <li><a href="coming-soon.html">Coming Soon</a></li>
                <li><a href="404.html">404 Page</a></li>
                <li><a href="support.html">Support Page</a></li>
                <li><a href="cs-page.html">Components &amp; Styles</a></li>
              </ul>
            </li> -->

          </ul>
          <ul class="catalog">
            <li class="has-submenu"><a href="shop-filters-left-3cols.html">Phones<i class="fa fa-chevron-down"></i></a>
              <ul class="submenu">
                <li><a href="#">Nokia</a></li>
                <li class="has-submenu"><a href="#">iPhone</a><!--Class "has-submenu" for adding carret and dropdown-->
                  <ul class="sub-submenu">
                    <li><a href="#">iPhone 4</a></li>
                    <li><a href="#">iPhone 4s</a></li>
                    <li><a href="#">iPhone 5c</a></li>
                    <li><a href="#">iPhone 5s</a></li>
                  </ul>
                </li>
                <li><a href="#">HTC</a></li>
                <li class="has-submenu"><a href="#">Samsung</a>
                  <ul class="sub-submenu">
                    <li><a href="#">Galaxy Note 3</a></li>
                    <li><a href="#">Galaxy S5</a></li>
                    <li><a href="#">Galaxy S3 Neo</a></li>
                    <li><a href="#">Galaxy Gear</a></li>
                    <li><a href="#">Galaxy S Duos 2</a></li>
                  </ul>
                </li>
                <li><a href="#">BlackBerry</a></li>
                <li class="offer">
                  <div class="col-1">
                    <p class="p-style2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                  <div class="col-2">
                    <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="Special Offer"/>
                    <a class="btn btn-block" href="#"><span>584$</span>Special offer</a>
                  </div>
                </li>
              </ul>
            </li>
            <li><a href="shop-filters-left-3cols.html">Cameras</a></li>
            <li><a href="shop-filters-left-3cols.html">Personal computers</a></li>
            <li><a href="shop-filters-left-3cols.html">Gaming consoles</a></li>
            <li><a href="shop-filters-left-3cols.html">TV sets</a></li>
          </ul>
        </nav>
        
        <!--Toolbar-->
        <div class="toolbar group">
          <button class="search-btn btn-outlined-invert"><i class="glyphicon glyphicon-search"></i></button>
          <div class="middle-btns">
            <a class="btn-outlined-invert" href='<?php echo base_url()."index.php/". "thriftshop/wishlist"?>'><i class="fa fa-heart"></i> <span>Wishlist</span></a>
            <a class="login-btn btn-outlined-invert" href="#" data-toggle="modal" data-target="#loginModal"><i class="glyphicon glyphicon-user"></i> <span>Login</span></a>
          </div>
          <div class="cart-btn">
            <a class="btn btn-outlined-invert" href='<?php echo base_url()."index.php/". "user/signup"?>'><i class="glyphicon glyphicon-user"></i></a>
            
            <!--Cart Dropdown-->
            <div class="cart-dropdown">
              <span></span><!--Small rectangle to overlap Cart button-->
              <div class="body">
                
               <?php if($user_me['name'] or $this->session->userdata('id')) {?>

              
                <a href='<?php echo base_url()."index.php/". "user/profile"?>' style=" border-radius:0px;">View Profile <i style="text-align:right" class="fa fa-user"></i></a>
             

            </div>
            <div class="footer group">
              <div class="buttons">
                <a class="btn btn-outlined-invert" href='<?php echo base_url()."index.php/". "user/logout"?>' style=" border-radius:0px;"><i class="fa fa-sign-out"></i>Logout</a>
                <a class="btn btn-outlined-invert" href='<?php echo base_url()."index.php/". "user/myStore"?>' style=" border-radius:0px;"><i class="fa fa-building-o"></i>My Store</a>
              </div>
            </div>

            <?php } else {?>

            <h1>Login With:</h1>

            <div class="social-login"> 
                  <a class="facebook" href='<?php echo $login_url; ?>'><i class="fa fa-facebook-square"></i></a>
                  <a class="buttonText customGPlusSignIn" href="#"><i class="fa fa-google-plus-square"></i></a>
                  <a class="twitter" data-toggle="modal" data-target="#myModallogin" href="#"> <i class="fa fa-sign-in"></i></a>
                </div>

           <!--  <li>
              <a href='<?php echo $login_url; ?>' class="btn-facebook"style="">Login with <i class="fa fa-facebook"></i></a>
            </li>  

            <li>
              <a  href="#" data-toggle="modal" data-target="#myModallogin" style=" border-radius:0px;">Login with Thrift  <i class="fa fa-sign-in"></i></a>
            </li>    -->

          </div>
          <div class="footer group">
            
          </div>

          <script type="text/javascript">
  /**
   * Handler for the signin callback triggered after the user selects an account.
   */
  function onSignInCallback(resp) {
    gapi.client.load('plus', 'v1', apiClientLoaded);
    console.log("here");
  }

  function insertGoogle(googleId)
  {


    console.log (googleId);

  }

  /**
   * Sets up an API call after the Google API client loads.
   */
  function apiClientLoaded() {
    gapi.client.plus.people.get({userId: 'me'}).execute(handleEmailResponse);
  }

  /**
   * Response callback for when the API client receives a response.
   *
   * @param resp The API response object with the user email and profile information.
   */
  function handleEmailResponse(resp) {
    var primaryEmail;
    for (var i=0; i < resp.emails.length; i++) {
      if (resp.emails[i].type === 'account') 
        primaryEmail = resp.emails[i].value;

    }

   // document.getElementById('responseContainer').value = 'Primary email: ' +
      //  primaryEmail + '\n\nFull Response:\n' + JSON.stringify(resp);
    var googleData = JSON.stringify(resp);
    var googleId= resp.id;
    var gender= resp.gender;
    var age= resp.ageRange.min;
    var pUser = resp.isPlusUser;
    var fName = resp.name.givenName;
    var lName = resp.name.familyName;
    var pic = resp.image.url;

    console.log (pic);
     insertGoogle(pic);
     $('.img-thumbnail').attr('src', pic);
       $('.google_name').html(' ' + fName +' '+lName + '    ');
     // check if user is registered here
      $.ajax({
      url: "<?=base_url()?>.index.php/user/gmail_exists",
       type: 'POST',
       data: {"googleId":googleId},
      // dataType:"json", 
       success: function(data){
      // alert(pic);;
           //if true
         //  get details
// if false
//redirect
 
       // window.location = "http://localhost:90/thriftShop_Iteration2/index.php/user/googleLogin/gId/"+<?php echo("googleId") ?>+"/gMail/"+<?php echo("fName") ?>;

       },
       error: function(){
       //    alert("Fail");
       }
   });
  
   e.preventDefault();

   //Register new user
   
  }



  </script> <!--Google button !-->    

<?php } ?>

        </div><!--Cart Dropdown Close-->
      </div>
    </div><!--Toolbar Close-->
  </div>
</header><!--Header Close-->


<script>
gapi.client.load('plus','v1', function(){
    var request = gapi.client.plus.people.get({
        'userId': 'me'
    });
    request.execute(function(resp) {
        console.log('Retrieved profile for:' + resp.displayName);
    });
});
</script>
<script>
function render() {
    gapi.signin.render('customBtn', {
        'callback': 'onSignInCallback',
        'clientid': '668784135808-461oqhniijb05dp1s5gf9gt7tboq0d4m.apps.googleusercontent.com',
        'cookiepolicy': 'single_host_origin',
        'requestvisibleactions': 'http://schema.org/AddAction',
        'scope': 'https://www.googleapis.com/auth/plus.login'
    });
}
</script>
<!--Page Content-->
<div class="page-content">

  <!--Breadcrumbs-->
  <ol class="breadcrumb">
    <li><a href="index.html">Home</a></li>
    <li>Login/Register</li>
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