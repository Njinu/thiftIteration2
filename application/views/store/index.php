<div id="nav_holder">

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
            <nav class="menu" >
              <ul class="main" style="margin-top: 0px;">
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
      url: "<?php =base_url()?>.index.php/user/gmail_exists",
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

</div> 


  

  <body style="background-color:#50C878;">

<div id="main">

    <section class="" id="about" style="background: url('<?php echo base_url()."assets/ThriftshopTheme/tiles/fresh_snow.png"?>') repeat  ;">



      <!-- Button trigger modal -->





      <div class="container" style="margin-top:8%;background-color:rgba(1000, 1000, 1000, 0.6); border-radius:20px;">



       <div class="row">

         <div class="col-lg-12 text-center">

           <h2 style="margin-top:-6%;" >Le Store</h2>



           <hr class="star-primary">

         </div>

       </div>



       <div class="container-fluid well " style="margin-bottom:3%;">

        <?php echo link_tag('assets/ThriftshopTheme/multiform/style.css'); ?>

        <?php echo validation_errors(); ?>



<?php echo form_open('store') ?>

        <select style="color:black;" class="options col-md-3" for="cat" name="cat">

          <option>--Organise by Category--</option>

          <?php foreach ($product as $product_item): ?>

          

          <option><?php echo $product_item['category']; ?></option>





        <?php endforeach; ?>

      </select>



      <select style="color:black;" class="options col-md-3" for="vibe" name="vibe">

        <option>--Organise by Vibe--</option>        

        <option>Love</option> 

        <option>Harmony</option>

        <option>Freedom</option>     



      </select>



      <select style="color:black;" class="options col-md-3" for="price" name="price">

        <option>--Organise by Price--</option>        

        <option>Low to High</option> 

        <option>High to Low</option>       

      </select>



      



      <div class="col-md-3" style="margin-top:0.8%;"><input type="submit" name="submit" class="btn btn-info" value="Sort" /></div>

</form>

    </div>



    <?php

    $lovequotes = array("' Love is patient, love is kind. It does not envy, it does not boast, it is not proud. It does not dishonour others, it is not self-seeking, it is not easily angered, it keeps no record of wrongs. Love does not delight in evil but rejoices with the truth. It always protects, always trusts, always hopes, always perseveres (1 Corinthians 13:4-7). '", "' Love has nothing to do with what you are expecting to get — only with what you are expecting to give — which is everything (Katharine Hepburn in Me : Stories of My Life) '","' The more one judges, the less one loves (Honoré de Balzac). '","' You can transmute love, ignore it, muddle it, but you can never pull it out of you. I know by experience that the poets are right: love is eternal (E. M. Forster in A Room with a View). '","' Let us always meet each other with smile, for the smile is the beginning of love. (Mother Teresa) '","' Don't brood. Get on with living and loving. You don't have forever. (Leo Buscaglia) '","' Love many things, for therein lies the true strength, and whosoever loves much performs much, and can accomplish much, and what is done in love is done well. (Vincent Van Gogh) '");

    shuffle($lovequotes);

    $lovevibes = array("#D01800","darkred","#9C0000","#F32E0C","#A1000E");

    shuffle($lovevibes);



    $freedomquotes = array("' For to be free is not merely to cast off one's chains, but to live in a way that respects and enhances the freedom of others.(Nelson Mandela). '","' Emancipate yourselves from mental slavery, none but ourselves can free our minds! (Bob Marley). '","'The revelation of thought takes men out of servitude into freedom. (Ralph Waldo Emerson).'","' Freedom is what you do with what's been done to you. (Jean-Paul Sartre) '","' The only sure bulwark of continuing liberty is a government strong enough to protect the interests of the people, and a people strong enough and well enough informed to maintain its sovereign control over the government. (Franklin D. Roosevelt) '","' May we think of freedom, not as the right to do as we please, but as the opportunity to do what is right. (Peter Marshall) '","' Change does not roll in on the wheels of inevitability, but comes through continuous struggle. And so we must straighten our backs and work for our freedom. A man can't ride you unless your back is bent. (Martin Luther King, Jr.)'","'Freedom is never more than one generation away from extinction. We didn't pass it to our children in the bloodstream. It must be fought for, protected, and handed on for them to do the same. (Ronald Reagan) '");

    shuffle($freedomquotes);

    $freedomvibes = array("#004E45","#009A88","#053F67","#00297E");

    shuffle($freedomvibes);



    $harmonyquotes = array("' Always aim at complete harmony of thought and word and deed. Always aim at purifying your thoughts and everything will be well” (Mahatma Gandhi). '","' I have cherished the ideal of a democratic and free society in which all persons live together in harmony and with equal opportunities” (Nelson Mandela). '","' He who lives in harmony with himself lives in harmony with the universe” (Marcus Aurelius). '","' A wise woman recognizes when her life is out of balance and summons the courage to act to correct it, she knows the meaning of true generosity, happiness is the reward for a life lived in harmony, with a courage and grace” (Suze Orman).  '","' Happiness exists on earth, and it is won through prudent exercise of reason, knowledge of the harmony of the universe, and constant practice of generosity” (Jose Marti). '","' The way of the Creative works through change and transformation, so that each thing receives its true nature and destiny and comes into permanent accord with the Great Harmony: this is what furthers and what perseveres” (Alexander Pope). '");

    shuffle($harmonyquotes);

    $harmonyvibes = array("#CB6B00","#F37918","#BE5400","#B57900");

    shuffle($harmonyvibes);



    $newvibes = array("#1C1C1C","#585870","#1D1D3D","#2B2F3B");

    shuffle($newvibes);

    $increment=0;

    ?>



<div style="margin-left:7%;">

    <?php foreach ($product2 as $product_item): ?>

    

    <?php



    $itemvibe =  $product_item['vibe'];

    $increment+=1;

    if($itemvibe == 'Love')

    {

      $quote = reset($lovequotes);

      $vibe = reset($lovevibes);

    } elseif ($itemvibe == 'Freedom') {

      $quote = reset($freedomquotes);

      $vibe = reset($freedomvibes);

    } elseif ($itemvibe == 'Harmony') {

     $quote = reset($harmonyquotes);

     $vibe = reset($harmonyvibes);

   } else $quote = "no quote" and

   $vibe = reset($newvibes);

   $slug = $product_item['slug'];



   if($increment >1){

    ?><div class="col-md-1"></div> <?php

   }



   ?>



  







   <div class="thumbnail col-md-5" style ="outline: none;box-shadow: 0 0 50px <?php echo $vibe ?>; border-color:<?php echo $vibe ?>;border-radius:10px; ">

    <div class="col-md-4" style="margin-top:10%;">

     <img class="img-responsive" src='<?php echo base_url();?>uploads/<?php echo $product_item["location"] ?>' alt=''>

   </div>

   <div class="col-md-8">

     <div class="caption" >



       <h3 class="articlehead2" style="color:black"><?php echo $product_item['name'] ?></h3>

       <hr style ="border-color:<?php echo $vibe ?>;border-radius:10px;">

       <p class="ArticleBody2" style="color:black; height:150px; font-size:100%;" class=""><?php echo $quote ?></p>





     </div> 



   </div>

   <div class="col-md-4" style="margin-bottom:2%;">

     <a href="store/<?php echo $product_item['slug'] ?>" class="btn btn-info" role="button">View Item</a>

   </div>

  </div>









  <?php endforeach ?>

</div>









  </section>

  </div>

  </body>









  <script type="text/javascript">

  //Radnom Div Colors

  var safeColors = ['#50C878','#50C878','#9966CC','#ED9121','#ffda03','#e32636','#a61a1d','#2980b9','#00CED1','#CCCCCC','#130a06','#00688b','#c8caad','#ff6347'];

  var rand = function() {

    return Math.floor(Math.random()*14);

  };



  var randomColor = function() {

    var r = safeColors[rand()];



    return r;

  };



  $(document).ready(function() {



    $('.thumbnail2').each(function() {

      $(this).css('background',randomColor());

    });



  });



  $(document).ready(function() { $('#myModal').modal(options) });



  </script>



  





 