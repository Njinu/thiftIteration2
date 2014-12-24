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
  <style type="text/css">
  body{background-color: rgba(96,96,96,0.1);!important}
    #customBtn {
      display: inline-block;
      
      color: black  ;
      width: 165px;
      border-radius: 5px;
      white-space: nowrap;
    }
    #customBtn:hover {
      background: rgba(96,96,96,0.1);
      cursor: hand;
    }
    span.label {
    
    }
    span.icon {
      background: url('/+/images/branding/btn_red_32.png') transparent 5px 50% no-repeat;
      display: inline-block;
      vertical-align: middle;
      width: 35px;
      height: 35px;
      border-right: #bb3f30 1px solid;
    }
    span.buttonText {
      display: inline-block;
      vertical-align: middle;
      padding-left: 35px;
      padding-right: 35px;

      /* Use the Roboto font that is loaded in the <head> */
      font-family: 'Roboto',arial,sans-serif;
    }
  </style>


    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header mainheading">
                    Welcome to the Thriftshop
                </h1>
            </div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      New content
    </div>
  </div>
</div>


<div class="modal fade bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg2">
    <div class="modal-content">
      New content2
    </div>
  </div>
</div>


<div class="modal fade bs-example-modal-lg3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg3">
    <div class="modal-content">
      New content 3
    </div>
  </div>
</div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class=" panel-heading ">
                        <h4><i class="fa fa-fw fa-home"></i> Latest digs Upload</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                       <button type="button" class=" digs btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading ">
                        <h4><i class="fa fa-fw fa-book"></i>Latest Textbook Upload</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <button type="button" class="textbook btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg2">Large modal</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading ">
                        <h4><i class="fa fa-fw fa-gift"></i>Latest Goods Upload</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                         <button type="button" class="goods btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg3">Large modal</button>
                   </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

          <!-- Portfolio Section -->
    <section id="portfolio">      
        <div class="container">
            <div class="col-lg-11" style="float:right;">
                <h1 class="page-header submain1" style="color:#3498db">check them features...</h1>
            </div>
            <div class="col-md-11" style="float:right;">
                <div class="col-md-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption" style="background: rgba(0,0,0,0.7);">
                            <div class="caption-content" >
                             <span style="font-family: Montserrat,"Helvetica Neue",Helvetica,Arial,sans-serif;">Digs</span>
                            </div>
                        </div>
                        <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/cabin.png"?>' class="img-responsive" alt="">
                    </a>
                </div>
            
                <div class="col-md-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption" style="background:rgba(0,0,0,0.7);">
                            <div class="caption-content">
                                   <span style="font-family: Montserrat,"Helvetica Neue",Helvetica,Arial,sans-serif;">Electronics</span>
                            </div>
                        </div>
                        <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/game.png"?>' class="img-responsive" alt="">
                    </a>
                </div>
            
                <div class="col-md-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption" style="background: rgba(0,0,0,0.7);">
                            <div class="caption-content">
                               <span style="font-family: Montserrat,"Helvetica Neue",Helvetica,Arial,sans-serif;">Transport</span>
                            </div>
                        </div>
                        <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/submarine.png"?>' class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
        
        <!-- /.row -->
<div class="col-md-1" style="float:left; height:753px; background-color:forestgreen;top:-293px; margin-bottom:-403px; ">
</br></br></br></br></br></br></br></br></br>
   Advert column </br> </br>
   Advert column </br> </br> 
    Advert column </br> </br> </br>
     Advert column </br> </br></br>      Advert column 

</div>    
        <!-- /.row -->
<div class="row col-md-11" style="float:right;">

    <div id="grid-gallery" class="grid-gallery">
         <h1 class="page-header submain1" style="color:#FAB32F;">Funky Pics (^_^)</h1>
                <section class="grid-wrap">
                    <ul class="grid">
                        <li class="grid-sizer"></li><!-- for Masonry column width -->
                        <li>
                            <figure>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/safe.png"?>'>
                                <figcaption><h3>Letterpress asymmetrical</h3><p>Chillwave hoodie ea gentrify aute sriracha consequat.</p></figcaption>
                            </figure>
                        </li>
                       
                        <li>
                            <figure>
                                 <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/cake.png"?>'>
                                <figcaption><h3>Letterpress asymmetrical</h3><p>Chillwave hoodie ea gentrify aute sriracha consequat.</p></figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/circus.png"?>'>
                                <figcaption><h3>Vice velit chia</h3><p>Laborum tattooed iPhone, Schlitz irure nulla Tonx retro 90's chia cardigan quis asymmetrical paleo. </p></figcaption>
                            </figure>
                        </li>
                         <li>
                            <figure>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/game.png"?>'>
                                <figcaption><h3>Vice velit chia</h3><p>Laborum tattooed iPhone, Schlitz irure nulla Tonx retro 90's chia cardigan quis asymmetrical paleo. </p></figcaption>
                            </figure>
                        </li>
                  
                    </ul>
                </section><!-- // grid-wrap -->
                <section class="slideshow">
                    <ul>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Letterpress asymmetrical</h3>
                                    <p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ullamco craft beer.</p>
                                </figcaption>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/safe.png"?>'>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Vice velit chia</h3>
                                    <p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
                                </figcaption>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/safe.png"?>'>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Brunch semiotics</h3>
                                    <p>IPhone PBR polaroid before they sold out meh you probably haven't heard of them leggings tattooed tote bag, butcher paleo next level single-origin coffee photo booth.</p>
                                </figcaption>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/safe.png"?>'>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Chillwave nihil occupy</h3>
                                    <p>Vice cliche locavore mumblecore vegan wayfarers asymmetrical letterpress hoodie mustache. Shabby chic lomo polaroid, scenester 8-bit Portland Pitchfork VHS tote bag.</p>
                                </figcaption>
                                 <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/cake.png"?>'>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Kale chips lomo biodiesel</h3>
                                    <p>Chambray Schlitz pug YOLO, PBR Tumblr semiotics. Flexitarian YOLO ennui Blue Bottle, forage dreamcatcher chillwave put a bird on it craft beer Etsy.</p>
                                </figcaption>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/cake.png"?>'>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Exercitation occaecat</h3>
                                    <p>Cosby sweater hella lomo Thundercats VHS occupy High Life. Synth pop-up readymade single-origin coffee, fanny pack tousled retro. Fingerstache mlkshk ugh hashtag, church-key ethnic street art pug yr.</p>
                                </figcaption>
                                 <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/cake.png"?>'>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Selfies viral four</h3>
                                    <p>Ethnic readymade pug, small batch XOXO Odd Future normcore kogi food truck craft beer single-origin coffee banh mi photo booth raw denim. XOXO messenger bag pug VHS. Forage gluten-free polaroid, twee hoodie chillwave Helvetica.</p>
                                </figcaption>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/cake.png"?>'>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Photo booth skateboard</h3>
                                    <p>Thundercats pour-over four loko skateboard Brooklyn, Etsy sriracha leggings dreamcatcher narwhal authentic 3 wolf moon synth Portland. Shabby chic photo booth Blue Bottle keffiyeh, McSweeney's roof party Carles.</p>
                                </figcaption>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/cake.png"?>'>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Ex fashion axe</h3>
                                    <p>Ennui Blue Bottle shabby chic, organic butcher High Life tattooed meggings jean shorts Brooklyn sartorial polaroid. Cray raw denim +1, bespoke High Life Odd Future banh mi chillwave Marfa kogi disrupt paleo direct trade 90's Godard. </p>
                                </figcaption>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/cake.png"?>'>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Thundercats next level</h3>
                                    <p>Typewriter authentic PBR, iPhone mixtape fixie post-ironic fingerstache Pitchfork artisan. Wayfarers master cleanse occupy, Tonx lo-fi swag Truffaut irony whatever Blue Bottle readymade PBR gluten-free. Lomo Pinterest Banksy fap. Retro ennui you probably haven't heard of them iPhone, PBR fashion axe polaroid.</p>
                                </figcaption>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/cake.png"?>'>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Bushwick selvage synth</h3>
                                    <p>Schlitz deserunt pour-over consectetur. Selfies plaid asymmetrical farm-to-table, cred gastropub photo booth narwhal non roof party velit raw denim slow-carb meggings pug. Tempor post-ironic seitan cliche bicycle rights. Meh viral Williamsburg, quinoa 8-bit kale chips YOLO Marfa accusamus.</p>
                                </figcaption>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/cake.png"?>'>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Bottle wayfarers locavore</h3>
                                    <p>Aliqua High Life art party fixie farm-to-table. Kitsch Echo Park shabby chic, narwhal fugiat Cosby sweater asymmetrical gastropub tofu. Authentic minim Pinterest Blue Bottle beard, aliqua chia XOXO dolor freegan banh mi vegan fugiat.</p>
                                </figcaption>
                               <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/cake.png"?>'>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Letterpress asymmetrical</h3>
                                    <p>Pickled hoodie Pinterest 90's proident church-key chambray. Salvia incididunt slow-carb ugh skateboard velit, flannel authentic hoodie lomo fixie photo booth farm-to-table. Minim meggings Bushwick, semiotics Vice put a bird.</p>
                                </figcaption>
                               <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/cake.png"?>'>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Vice velit chia</h3>
                                    <p>Tattooed assumenda chambray cray officia. 90's mollit ethnic church-key ex eu pop-up gentrify. Tonx raw denim eu, bitters nesciunt distillery Neutra pop-up. Drinking vinegar Helvetica Truffaut tattooed.</p>
                                </figcaption>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/cake.png"?>'>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Brunch semiotics</h3>
                                    <p>Gentrify High Life adipisicing, duis slow-carb kogi Tumblr raw denim freegan Echo Park. Fingerstache laboris pork belly messenger bag, you probably haven't heard of them vegan twee Intelligentsia Vice Etsy pickled put a bird on it Godard roof party. Meggings small batch dreamcatcher velit.</p>
                                </figcaption>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/cake.png"?>'>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Chillwave nihil occupy</h3>
                                    <p>Marfa exercitation non, beard +1 hashtag cardigan gluten-free mixtape church-key ugh eu Portland leggings. Ennui farm-to-table fingerstache keytar Echo Park tattooed. Seitan qui artisan, aliquip cupidatat sunt Portland wayfarers duis.</p>
                                </figcaption>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/cake.png"?>'>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Kale chips lomo biodiesel</h3>
                                    <p>Lomo church-key whatever, seitan laborum drinking vinegar lo-fi semiotics nihil meh. Skateboard irure before they sold out Banksy. Narwhal High Life lomo aliqua drinking vinegar. PBR&B placeat proident, craft beer forage DIY nostrud meh flexitarian keytar Helvetica.</p>
                                </figcaption>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/cake.png"?>'>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Exercitation occaecat</h3>
                                    <p>Skateboard Truffaut bicycle rights seitan normcore. Culpa lo-fi ennui, Pinterest before they sold out Echo Park roof party sapiente aesthetic consequat Truffaut freegan voluptate. Kogi banh mi vero nihil, freegan gluten-free cliche. Forage Etsy laboris anim normcore, McSweeney's ex.</p>
                                </figcaption>
                                 <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/cake.png"?>'>
                            </figure>
                        </li>
                    </ul>
                    <nav>
                        <span class="icon nav-prev"></span>
                        <span class="icon nav-next"></span>
                        <span class="icon nav-close"></span>
                    </nav>
                    <div class="info-keys icon">Navigate with arrow keys</div>
                </section><!-- // slideshow -->
            </div><!-- // grid-gallery --></div>
        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Modern Business Features</h2>
            </div>
            <div class="col-md-6">
                <p>The Modern Business template by Start Bootstrap includes:</p>
                <ul>
                    <li><strong>Bootstrap v3.2.0</strong>
                    </li>
                    <li>jQuery v1.11.0</li>
                    <li>Font Awesome v4.1.0</li>
                    <li>Working PHP contact form with validation</li>
                    <li>Unstyled page elements for easy customization</li>
                    <li>17 HTML pages</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="http://placehold.it/700x450" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer_back">
                        <p>Copyright &copy; ThriftShop 2014-2020 || Powered by:  <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/7spyre.png"?>'> || Site Map </p>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
           
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h4>Searching for a Digs?</h4>
                            <hr class="star-primary">
                            <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/cabin.png"?>' class="img-responsive img-centered" alt="">
                            <p>Find flats easily by browsing our listed  <a href="https://sellfy.com/p/8Q9P/jV3VZ/">student properties</a>. Users can view pictures of the properties and make contact with property owners </p>
                            <ul class="list-inline item-details">
                                <li>Release
                                    <strong><a href="http://7spyre.com">V1.0 </a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://7spyre.com">January 2015</a>
                                    </strong>
                                </li>
                                <li>Author:
                                    <strong><a href="http://7spyre.com">7Spyre</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
             <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
           
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h4>Need to supply the crib?</h4>
                            <hr class="star-primary">
                            <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/game.png"?>' class="img-responsive img-centered" alt="">
                            <p>Got something to sell? Find buyers easily by upload products using our product portal.
                                                     <ul class="list-inline item-details">
                                <li>Release
                                    <strong><a href="http://7spyre.com">V1.0 </a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://7spyre.com">January 2015</a>
                                    </strong>
                                </li>
                                <li>Author:
                                    <strong><a href="http://7spyre.com">7Spyre</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                      
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h4>Got wheels?</h4>
                            <hr class="star-primary">
                            <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/submarine.png"?>' class="img-responsive img-centered" alt="">

                            <p> Need a new mode of transport? Browse our list of vehicles from skate boards to submarines</p>
                             <ul class="list-inline item-details">
                                <li>Release
                                    <strong><a href="http://7spyre.com">V1.0 </a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://7spyre.com">January 2015</a>
                                    </strong>
                                </li>
                                <li>Author:
                                    <strong><a href="http://7spyre.com">7Spyre</a>
                                    </strong>
                                </li>
                            </ul>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/safe.png"?>' class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/safe.png"?>' class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src='<?php echo base_url()."assets/ThriftshopTheme/img/portfolio/safe.png"?>' class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

