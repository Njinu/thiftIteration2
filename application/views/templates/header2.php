  <?php
// Turn off error reporting
  error_reporting(0);

// Report runtime errors
  error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Report all errors
  error_reporting(E_ALL);

// Same as error_reporting(E_ALL);
  ini_set("error_reporting", E_ALL);

// Report all errors except E_NOTICE
  error_reporting(E_ALL & ~E_NOTICE);
  ?> 


<head >

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59016173-1', 'auto');
  ga('send', 'pageview');

</script>

  <?php 


function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}

?>
<?php
function curPageName() {
 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

?>
<script>


$(document).ready(function(){
var pathname = window.location.pathname; // Returns path only
var url      = window.location.href;
// console.log('>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>'+url);
};
</script>

  <script type="text/javascript">
  !function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","group","track","ready","alias","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t){var e=document.createElement("script");e.type="text/javascript";e.async=!0;e.src=("https:"===document.location.protocol?"https://":"http://")+"cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(e,n)};analytics.SNIPPET_VERSION="3.0.1";
  analytics.load("zvOEyjooJZnkG8hCgVCi9DQzRDVwfSau");
  analytics.page()
  }}();
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <title><?php echo $title ?> - ThriftShop</title>
  <meta charset="utf-8">
  <?php echo link_tag('assets/ThriftshopTheme/css/bootstrap.css'); ?>	
  <?php echo link_tag('assets/ThriftshopTheme/font-awesome/css/font-awesome.css'); ?>
  <?php echo link_tag('assets/ThriftshopTheme/custom/custom.css'); ?>
  <?php echo link_tag('assets/ThriftshopTheme/custom/ElastSlide/custom.css'); ?>
  <?php echo link_tag('assets/ThriftshopTheme/custom/ElastSlide/demo.css'); ?>
  <?php echo link_tag('assets/ThriftshopTheme/custom/ElastSlide/elastislide.css'); ?>
  <?php echo link_tag('assets/ThriftshopTheme/custom/kool-swap/koolswap.css'); ?>
<!--   <?php echo link_tag('assets/ThriftshopTheme/css/modern-business.css'); ?> -->
  <?php echo link_tag('assets/ThriftshopTheme/css/thriftshopcustom.css'); ?>
  <?php echo link_tag('assets/ThriftshopTheme/css/freelancer.css'); ?>
  <?php echo link_tag('assets/ThriftshopTheme/css/bootstrap-social.css'); ?>

  <!--  -->

  <!-- ThriftStyles -->

  <?php echo link_tag('assets/Thiftstore/css/masterslider.css'); ?>   
  <!--Styles-->
  <?php echo link_tag('assets/Thiftstore/css/styles.css'); ?>
  <!--Color Scheme-->
  <?php echo link_tag('assets/Thiftstore/css/colors/color-default.css'); ?>
  <!--Color Switcher-->
  <?php echo link_tag('assets/Thiftstore/css/colors/color-switcher.css'); ?>
  <!--Modernizr-->
  <?php echo script_tag('assets/Thiftstore/js/modernizr.custom.js'); ?>

  <!-- -->

  <?php echo script_tag('assets/ThriftshopTheme/js/jquery-1.10.2.js'); ?>
 <?php echo script_tag('https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js'); ?>
  <?php echo script_tag('<?php echo base_url()."assets/ThriftshopTheme/js/bootstrap.js"?>'); ?>
  <?php echo script_tag('assets/ThriftshopTheme/custom/ElastSlide/jquery.elastislide.js'); ?>
  <?php echo script_tag('assets/ThriftshopTheme/custom/ElastSlide/jquerypp.custom.js'); ?>
  <?php echo script_tag('assets/ThriftshopTheme/custom/ElastSlide/modernizr.custom.17475.js'); ?>
  <?php echo script_tag('assets/ThriftshopTheme/custom/kool-swap/demo.js'); ?>
  <?php echo script_tag('assets/ThriftshopTheme/custom/kool-swap/demo2.js'); ?>
  <?php echo script_tag('assets/ThriftshopTheme/custom/kool-swap/jquery.kool-swap.js'); ?>
  <?php echo script_tag('assets/ThriftshopTheme/js/freelancer.js'); ?>

  <!--   <------------------------------------------------------------------------------------------ -->
  <!-- ThriftScript -->


  <!-------------------------------------------------------------------------------------->

  <script src='<?php echo base_url()."assets/ThriftshopTheme/js/jquery-1.10.2.js"?>'></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
  <script src='<?php echo base_url()."assets/ThriftshopTheme/js/bootstrap.js"?>'></script>		
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src='<?php echo base_url()."assets/ThriftshopTheme/custom/ElastSlide/jquery.elastislide.js"?>'></script>
  <script src='<?php echo base_url()."assets/ThriftshopTheme/custom/ElastSlide/jquerypp.custom.js"?>'></script>
  <script src='<?php echo base_url()."assets/ThriftshopTheme/custom/ElastSlide/modernizr.custom.17475.js"?>'></script>
  <script src='<?php echo base_url()."assets/ThriftshopTheme/custom/kool-swap/jquery.kool-swap.js"?>'></script>
  <script src='<?php echo base_url()."assets/ThriftshopTheme/custom/kool-swap/demo.js"?>'></script>
  <script src='<?php echo base_url()."assets/ThriftshopTheme/js/freelancer.js"?>'></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
  <script src="https://apis.google.com/js/client:platform.js?onload=render" async defer></script>


  <?php echo script_tag('assets/ThriftshopTheme/modernizr.custom.js'); ?>
  <script src='<?php echo base_url()."assets/ThriftshopTheme/modernizr.custom.js"?>'></script>


  <?php echo link_tag('assets/ThriftshopTheme/css/gridGallery/component.css'); ?>
  <!-- w -->



   <?php echo link_tag('assets/ThriftshopTheme/css/font-awesome-4.3.0/css/font-awesome.min.css'); ?>
  
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Kristi' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Schoolbell' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Gorditas' rel='stylesheet' type='text/css'>

  <!-- google login !-->

  <script src = "https://plus.google.com/js/client:plusone.js"></script>

</head>

<body>
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

       <!--  -->
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <center><h2>Check out our <a href="register.html">Media</a></h2></center>       
                <center><div class="social-login">
                  <a class="facebook" href="https://www.facebook.com/pages/Thriftshop/413901205429151"><i class="fa fa-facebook-square"></i></a>               
                  <a class="twitter" href="https://twitter.com/TheThriftshopZA"><i class="fa fa-twitter-square"></i></a>
                </div></center>
              </div>
             
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!--Header-->
        <header data-offset-top="500" data-stuck="600"><!--data-offset-top is when header converts to small variant and data-stuck when it becomes visible. Values in px represent position of scroll from top. Make sure there is at least 100px between those two values for smooth animation-->

          <!--Search Form-->
           <?php $attributes10 = array('name' => 'SearchForm', 'id' => 'SearchForm','class'=>'search-form closed'); ?>
           <?php echo form_open('thriftshop/ShopSearch',$attributes10) ?>
          
            <div class="container">
              <div class="close-search"><i class="fa fa-times"></i></div>
              <div class="form-group">
                <label class="sr-only" for="search-hd">Search for procuct</label>
                <input type="text" class="form-control" name="search-hd" id="search-hd" placeholder="Search for procuct">
                <button type="submit"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>

          <!--Split Background-->
          <div class="left-bg"></div>
          <div class="right-bg"></div>

          <div class="container">
            <!-- <a class="logo" href="index.html"><img src="img/logo.png" alt="Bushido"/></a> -->

            <!--Language / Currency Switchers-->
            <!-- <ul class="switchers">
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
 -->
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
           </ul>
          <ul class="catalog">
            <li class="has-submenu"><a href='<?php echo base_url()."index.php/". "thriftshop/indexFlat"?>'>Flat Wise<i class="fa fa-chevron-down"></i></a>
              <ul class="submenu">
                <li><a href='<?php echo base_url()."index.php/". "thriftshop/indexFlat"?>'>Accomodation</a></li>
                
                <li><a href='<?php echo base_url()."index.php/". "thriftshop/indexFurn"?>'>Furniture</a></li>
               
                  <li ><a href='<?php echo base_url()."index.php/". "thriftshop/indexMis"?>'>Miscellaneous</a></li>
                   <li ><a style="color:#2f343b">....</a></li>
                <li><a href="#"></a></li>
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

              <li class="has-submenu"><a href='<?php echo base_url()."index.php/". "thriftshop/indexbooks"?>'>Student Wise<i class="fa fa-chevron-down"></i></a>
              <ul class="submenu">
                <li><a href='<?php echo base_url()."index.php/". "thriftshop/indexjobs"?>'>Jobs </a></li>
                <li ><a href='<?php echo base_url()."index.php/". "thriftshop/indexbooks"?>'>Books</a><!--Class "has-submenu" for adding carret and dropdown-->
                  
                </li>
              
                <li><a href='<?php echo base_url()."index.php/". "thriftshop/indextutors"?>'>Tutoring</a>
                  
                </li>
                <li ><a href='<?php echo base_url()."index.php/". "thriftshop/indexSG"?>'>Sporting Goods</a>
                  
                </li> 
                <li><a href="#"></a></li>
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

            <li><a href='<?php echo base_url()."index.php/". "thriftshop/indexEle"?>'>Electronics</a></li>
            <li><a href='<?php echo base_url()."index.php/". "thriftshop/indexVeh"?>'>Vehicles</a></li>          

            <li><a href='<?php echo base_url()."index.php/". "thriftshop/indexComp"?>'>Competitions</a></li>
          </ul>
        </nav>
        
        <!--Toolbar-->
        <div class="toolbar group">
          <button class="search-btn btn-outlined-invert"><i class="fa fa-search"></i></button>
          <div class="middle-btns">
            <a class="btn-outlined-invert" href='<?php echo base_url()."index.php/". "thriftshop/wishlist"?>'><i class="fa fa-heart"></i> <span>Wishlist</span></a>
            <a class="login-btn btn-outlined-invert" href="#" data-toggle="modal" data-target="#loginModal"><i class="fa fa-slideshare"></i><span>Media</span></a>
          </div>
          <div class="cart-btn">
            <a class="btn btn-outlined-invert" href='<?php echo base_url()."index.php/". "user/signup"?>'><i class="fa fa-user"></i></a>
            
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