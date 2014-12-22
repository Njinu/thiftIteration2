<head >
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
	<title><?php echo $title ?> - ThriftShop</title>
 <meta charset="utf-8">
	<?php echo link_tag('assets/ThriftshopTheme/css/bootstrap.css'); ?>	
	<?php echo link_tag('assets/ThriftshopTheme/font-awesome/css/font-awesome.css'); ?>
	<?php echo link_tag('assets/ThriftshopTheme/custom/custom.css'); ?>
	<?php echo link_tag('assets/ThriftshopTheme/custom/ElastSlide/custom.css'); ?>
  	<?php echo link_tag('assets/ThriftshopTheme/custom/ElastSlide/demo.css'); ?>
  	<?php echo link_tag('assets/ThriftshopTheme/custom/ElastSlide/elastislide.css'); ?>
    <?php echo link_tag('assets/ThriftshopTheme/custom/kool-swap/koolswap.css'); ?>
    <?php echo link_tag('assets/ThriftshopTheme/css/modern-business.css'); ?>
    <?php echo link_tag('assets/ThriftshopTheme/css/thriftshopcustom.css'); ?>
    <?php echo link_tag('assets/ThriftshopTheme/css/freelancer.css'); ?>
    <?php echo link_tag('assets/ThriftshopTheme/css/bootstrap-social.css'); ?>
   
	<?php echo script_tag('assets/ThriftshopTheme/js/jquery-1.10.2.js'); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
	<?php echo script_tag('<?php echo base_url()."assets/ThriftshopTheme/js/bootstrap.js"?>'); ?>
	<?php echo script_tag('assets/ThriftshopTheme/custom/ElastSlide/jquery.elastislide.js'); ?>
	<?php echo script_tag('assets/ThriftshopTheme/custom/ElastSlide/jquerypp.custom.js'); ?>
	<?php echo script_tag('assets/ThriftshopTheme/custom/ElastSlide/modernizr.custom.17475.js'); ?>
	<?php echo script_tag('assets/ThriftshopTheme/custom/kool-swap/demo.js'); ?>
	<?php echo script_tag('assets/ThriftshopTheme/custom/kool-swap/demo2.js'); ?>
	<?php echo script_tag('assets/ThriftshopTheme/custom/kool-swap/jquery.kool-swap.js'); ?>
	<?php echo script_tag('assets/ThriftshopTheme/js/freelancer.js'); ?>

	<script src='<?php echo base_url()."assets/ThriftshopTheme/js/jquery-1.10.2.js"?>'></script>
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
  	<?php echo link_tag('assets/ThriftshopTheme/css/gridGallery/demo.css'); ?>



	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
	
<nav class="navbar navbar-default navbar-fixed-top" style="" role="navigation">
    <!-- 19B8FC -->
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href='<?php echo base_url()."index.php"?>'>ThriftShop </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right"  style="margin-top: -0.5%;">
                    <li style="margin-top:2%;">
                        <a href="contact.html">Contact <i class="fa fa-phone"></i></a>
                    </li>
                    <li class="dropdown" style="margin-top:2%;">
                        <a href='<?php echo base_url()."index.php/". "thriftshop"?>' >Thrift shopping <i class="fa fa-shopping-cart"></i></a>
                    </li>
                    <?php if(empty($user_me['name']) or empty($this->session->userdata('id'))) {?>
                  <li class="dropdown" style="margin-top:2%;">
                        <a href="" data-toggle="modal" data-target="#myModal">Register <i class="fa fa-pencil-square-o"></i></a>
                    </li>
                     <?php } ?>
                    <li class="dropdown">
                        <a href="#" style="color:#2c3e50;" class="dropdown-toggle" data-toggle="dropdown"><span class="google_name"><?=$user_me['name']?> </span><img class="img-thumbnail" data-src="holder.js/140x140" alt="140x140" src="https://graph.facebook.com/<?=$user_me['id']?>/picture?type=large" style="width: 40px; height: 40px;"><b class="caret"></b> </a>
                    <ul class="dropdown-menu">
                      
                <?php if($user_me['name'] or $this->session->userdata('id')) {?>
                            <li>
                               <a href='<?php echo base_url()."index.php/". "user/logout"?>' style=" border-radius:0px;"> Logout <i style="text-align:right" class="fa fa-sign-out"></i></a>
                            </li>
                            
                              <li>
                            <a href='<?php echo base_url()."index.php/". "user/profile"?>' style=" border-radius:0px;">View Profile <i style="text-align:right" class="fa fa-user"></i></a>
                            </li>  
                              
                              <li>
                            <a href='<?php echo base_url()."index.php/". "user/cart"?>' style=" border-radius:0px;">My Wishlist <i style="text-align:right" class="fa fa-tree"></i></i></a>
                            </li> 
                             <li>
                            <a href='<?php echo base_url()."index.php/". "user/myStore"?>' style=" border-radius:0px;">My Store <i style="text-align:right" class="fa fa-building-o"></i></a>
                            </li>
                            <?php } else {?>

                           
                              <li>
                              <a href='<?php echo $login_url; ?>' class="btn-facebook"style="">Login with <i class="fa fa-facebook"></i></a>
                              
                             
   <div id="gSignInWrapper">
    <span class="label"></span>
    <div id="customBtn" class="customGPlusSignIn" style="border-radius:0px;">
      <span class="buttonText">Login with <i class="fa fa-google-plus"></i></span>
    </div>
  </div>                     </li>
                           
                            <!--Google button !-->   
                          
                            
                              <li>
                            <a  href="#" data-toggle="modal" data-target="#myModallogin" style=" border-radius:0px;">Login with Thrift  <i class="fa fa-sign-in"></i></a>
                            </li>                          
  <body>

                          
  <body>
    </div>
 </body>

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

                            </li>

                            <?php } ?>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>