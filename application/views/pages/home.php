<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=359141144257377&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


    <?php if($this->session->flashdata('fancy') != "") { ?>


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
     <input type="hidden" id="notify2" data-toggle="modal" data-target="#myModal2"/>
    <!--Hero Slider-->
    <section class="hero-slider" style="padding:0px">
        <div class="master-slider" id="hero-slider">
            
            <!--Slide 1-->
            <div class="ms-slide" data-delay="7">
                <div class="overlay"></div>
                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' data-src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="Nikon D4S"/>
                <h2 style="width: 456px; left: 110px; top: 110px;" class="light-color ms-layer" data-effect="top(50,true)" data-duration="700" data-delay="250" data-ease="easeOutQuad">Nikon D4S</h2>
                <p style="width: 456px; left: 110px; top: 210px;" class="light-color ms-layer" data-effect="back(500)" data-duration="700" data-delay="500" data-ease="easeOutQuad">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                <div style="left: 110px; top: 300px;" class="ms-layer button" data-effect="bottom(50,true)" data-duration="600" data-delay="950" data-ease="easeOutQuad"><a class="btn btn-primary" href="#"><span>1845$</span>Buy it now</a></div>
            </div>
            
            <!--Slide 2-->
            <div class="ms-slide" data-delay="7">
                <span class="overlay"></span>
                <img src="masterslider/blank.gif" data-src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="Nest"/>
                <h2 style="width: 456px; left: 110px; top: 110px;" class="light-color ms-layer" data-effect="bottom(50,true)" data-duration="700" data-delay="250" data-ease="easeOutQuad">Nest</h2>
                <p style="width: 456px; left: 110px; top: 210px;" class="light-color ms-layer" data-effect="bottom(50,true)" data-duration="700" data-delay="500" data-ease="easeOutQuad">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                <div style="left: 110px; top: 300px;" class="ms-layer button" data-effect="rotatebottom(30|90,long,br,true)" data-duration="600" data-delay="950" data-ease="easeOutQuad"><a class="btn btn-primary" href="#"><span>1640$</span>Buy it now</a></div>
            </div>
            
            <!--Slide 3-->
            <div class="ms-slide" data-delay="7">
                <div class="overlay"></div>
                <img src="masterslider/blank.gif" data-src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="3D Printer"/>
                <h2 style="width: 456px; left: 110px; top: 110px;" class="light-color ms-layer" data-effect="left(50,true)" data-duration="700" data-delay="250" data-ease="easeOutQuad">3D Printer</h2>
                <p style="width: 456px; left: 110px; top: 210px;" class="light-color ms-layer" data-effect="left(50,true)" data-duration="700" data-delay="500" data-ease="easeOutQuad">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                <div style="left: 110px; top: 300px;" class="ms-layer button" data-effect="left(50,true)" data-duration="600" data-delay="950" data-ease="easeOutQuad"><a class="btn btn-primary" href="#"><span>2500$</span>Buy it now</a></div>
            </div>
            
        </div>
    </section><!--Hero Slider Close-->


    
    <!--Categories-->
    <section class="cat-tiles">
        <div class="container">
            <h2>Browse categories</h2>
            <div class="row">
                
                <?php foreach ($categories2 as $category): $newitemdate = 0; ?>
             
                <!--Category-->
                <div class="category col-lg-2 col-md-2 col-sm-4 col-xs-6">
                    <a href="#">
                        <img src='<?php echo base_url();?>uploads/<?php echo $category['pic_id'] ?>' alt="1"/>
                        <p><?php echo $category['category'] ?></p>
                    </a>
                </div>
        
              <?php endforeach ?>
             
          
            </div>
        </div>
    </section><!--Categories Close-->
    
    <!--Catalog Grid-->
    <section class="catalog-grid">
        <div class="container">
            <h2 class="primary-color">Latest Goods</h2>
            <div class="row">
               
                 <?php foreach ($catalog as $filter): $newitemdate = $calendar_item['price'];?>
                            <!--Tile-->

                            <div class="col-lg-3 col-md-4 col-sm-6">
                              <div class="tile">
                                <div class="badges">
                                <!--   <span class="sale"></span> -->
                                </div>
                                <div class="price-label" data-price="299">R <?php echo $filter['price'] ?></div>
                                <a href='<?php echo base_url()."index.php/". "thriftshop/view/".$filter["slug"]."/".$filter['product_id']?>'><img src='<?php echo base_url();?>uploads/<?php echo $filter['pic_id'] ?>' alt="1"/></a>
                                <div class="footer">
                                  <a href="#"><?php echo $filter['name'] ?></a>
                                  <span><?php echo $filter['category'] ?></span>
                                  <div class="tools">
                                    <div class="rate">

                                      <span class="active"><i><?php echo $filter['likes']; ?></i> <i class="fa fa-thumbs-up"></i></span>
                                      <span class="active"><i><?php echo $filter['dislikes']; ?></i> <i class="fa fa-thumbs-down"></i></span>
                                     
                                    </div>
                                    <!--Add To Cart Button-->
                                     <?php $attributes10 = array('name' => 'WishlistForm', 'id' => 'WishlistForm', 'name' => 'WishlistForm'); ?>
                                     <?php echo form_open('thriftshop/Add_toWishlist',$attributes10) ?>

                                    <a onclick="addWish('<?php echo $filter['product_id'] ?>')" href="#"  class="add-cart-btn"><span>to Wishlist</span><i class="fa fa-tree"></i></a>
                                     <input type="text" style="visibility:hidden" name="productid" id="productid" value= '<?php echo $filter['id'] ?>'>
                                     <input type="submit" style="visibility:hidden" id="toWish" name="toWish" href="#" value=""/>
                                  </form>
                                    <!--Share Button-->
                                    <div class="share-btn">
                                      <div class="hover-state">

                                        <a onclick="fbs_click(this)" class="fa fa-facebook-square" href="#"></a>
                                        <a class="fa fa-twitter-square" href="http://twitter.com/home?status=Currentlyreading <?php $_SERVER['REQUEST_URI']; ?>"></a>
                                       
                                      </div>
                                      <i class="fa fa-share"></i>
                                    </div>
                                    <!--Add To Wishlist Button-->
                                   <!--  <a class="wishlist-btn" href="#">
                                      <div class="hover-state">Wishlist</div>
                                      <i class="fa fa-plus"></i>
                                    </a> -->
                                  </div>
                                </div>
                              </div>
                            </div>

                          <?php endforeach ?>
                
            </div>
        </div>
    </section><!--Catalog Grid Close-->
    
    <!--Tabs Widget-->
    <section class="tabs-widget">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="active"><a href="#bestsel" data-toggle="tab">Most Liked Items</a></li>
            <li><a href="#onsale" data-toggle="tab">Items on sale</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="bestsel">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-7">
                            <a class="media-link" href="#">
                                <div class="overlay">
                                    <div class="descr"><div><?php echo $toprated[0]['name'] ?><span>R <?php echo $toprated[0]['price'] ?></span><span>Likes:<?php echo $toprated[0]['likes'] ?></div></div>
                                </div>
                                <img src='<?php echo base_url();?>uploads/<?php echo $toprated[0]['pic_id'] ?>' alt="1"/>
                            </a>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <a class="media-link" href="#">
                                <div class="overlay">
                                    <div class="descr"><div><?php echo $toprated[1]['name'] ?><span>R <?php echo $toprated[1]['price'] ?></span><span>Likes:<?php echo $toprated[1]['likes'] ?></div></div>
                                </div>
                                <img src='<?php echo base_url();?>uploads/<?php echo $toprated[1]['pic_id'] ?>' alt="2"/>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <a class="media-link" href="#">
                                <div class="overlay">
                                    <div class="descr"><div><?php echo $toprated[3]['name'] ?><span>R <?php echo $toprated[3]['price'] ?></span><span>Likes:<?php echo $toprated[3]['likes'] ?></div></div>
                                </div>
                                <img src='<?php echo base_url();?>uploads/<?php echo $toprated[3]['pic_id'] ?>' alt="3"/>
                            </a>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <a class="media-link" href="#">
                                <div class="overlay">
                                    <div class="descr"><div><?php echo $toprated[2]['name'] ?><span>R <?php echo $toprated[2]['price'] ?></span><span>Likes:<?php echo $toprated[2]['likes'] ?></span></div></div>
                                </div>
                                <img src='<?php echo base_url();?>uploads/<?php echo $toprated[2]['pic_id'] ?>' alt="4"/>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <a class="media-link" href="#">
                                <div class="overlay">
                                    <div class="descr"><div><?php echo $toprated[4]['name'] ?><span>R <?php echo $toprated[4]['price'] ?></span><span>Likes:<?php echo $toprated[4]['likes'] ?></div></div>
                                </div>
                                <img src='<?php echo base_url();?>uploads/<?php echo $toprated[4]['pic_id'] ?>' alt="5"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="onsale">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <a class="media-link" href="#">
                                <div class="overlay">
                                    <div class="descr"><div>Product Name<span>$14.95</span></div></div>
                                </div>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="6"/>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <a class="media-link" href="#">
                                <div class="overlay">
                                    <div class="descr"><div>Product Name<span>$19.40</span></div></div>
                                </div>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="7"/>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <a class="media-link" href="#">
                                <div class="overlay">
                                    <div class="descr"><div>Product Name<span>$19.40</span></div></div>
                                </div>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="8"/>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <a class="media-link" href="#">
                                <div class="overlay">
                                    <div class="descr"><div>Product Name<span>$14.95</span></div></div>
                                </div>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="9"/>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <a class="media-link" href="#">
                                <div class="overlay">
                                    <div class="descr"><div>Product Name<span>$19.40</span></div></div>
                                </div>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="10"/>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <a class="media-link" href="#">
                                <div class="overlay">
                                    <div class="descr"><div>Product Name<span>$19.40</span></div></div>
                                </div>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="11"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--Tabs Widget Close-->

    <section class="brand-carousel" style="background-color:#a3c756;color:white"> 
        <center><h1 style="color:white;font-size:400%;">Social Feeds</h1></center>
        <hr>
    </section>
    
    <!--Posts/Twitter Widget-->
    <section class="posts-widget">
        <div class="tw-bg"></div>
        <div class="container">
            <div class="row">
                <div class="latest-posts col-lg-8 col-md-8">
                    <div class="row">
                    
              <div class="fb-like-box" data-href="https://www.facebook.com/pages/Thriftshop/413901205429151" data-width="600" data-height="600" data-colorscheme="dark" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
                    </div>
                </div>
                <div class="twitter-feed col-lg-4 col-md-4">
                   
                    <!--Tweet-->
             <a class="twitter-timeline" href="https://twitter.com/TheThriftshopZA" data-widget-id="559374291821527040">Tweets by @TheThriftshopZA</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
            </div>
        </div>
    </section>
    
    <!--Gallery Widget-->
    <section class="gray-bg gallery-widget">
        <div class="container">
            <h2>Product gallery</h2>
            <div class="filters">
                <a class="active" href="#" data-group="all">All</a>
                <a href="#" data-group="camera">Camera</a>
                <a href="#" data-group="flash">Flash</a>
                <a href="#" data-group="lenses">Lenses</a>
                <a href="#" data-group="video">Video</a>
            </div>
            <div class="gallery-grid">
                <!--Item-->
                <div class="gallery-item" data-groups='["camera"]' data-src="img/gallery-widget/1.jpg">
                    <a href="img/gallery-widget/1.jpg">
                        <div class="overlay"><span><i class="icon-expand"></i></span></div>
                        <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="1"/>
                    </a>
                </div>
                <!--Item-->
                <div class="gallery-item" data-groups='["camera"]' data-src="img/gallery-widget/2.jpg">
                    <a href="img/gallery-widget/2.jpg">
                        <div class="overlay"><span><i class="icon-expand"></i></span></div>
                        <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="2"/>
                    </a>
                </div>
                <!--Item-->
                <div class="gallery-item" data-groups='["video"]' data-src="https://www.youtube.com/watch?v=hdEAWW7tZSA">
                    <a href="https://www.youtube.com/watch?v=hdEAWW7tZSA">
                        <div class="overlay"><span><i class="icon-music-play"></i></span></div>
                        <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="3"/>
                    </a>
                </div>
                <!--Item-->
                <div class="gallery-item" data-groups='["lenses"]' data-src="img/gallery-widget/4.jpg">
                    <a href="img/gallery-widget/4.jpg">
                        <div class="overlay"><span><i class="icon-expand"></i></span></div>
                        <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="4"/>
                    </a>
                </div>
                <!--Item-->
                <div class="gallery-item" data-groups='["flash"]' data-src="img/gallery-widget/5.jpg">
                    <a href="img/gallery-widget/5.jpg">
                        <div class="overlay"><span><i class="icon-expand"></i></span></div>
                        <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="5"/>
                    </a>
                </div>
                <!--Item-->
                <div class="gallery-item" data-groups='["flash"]' data-src="img/gallery-widget/6.jpg">
                    <a href="img/gallery-widget/6.jpg">
                        <div class="overlay"><span><i class="icon-expand"></i></span></div>
                        <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="6"/>
                    </a>
                </div>
            </div>
        </div>
    </section><!--Gallery Widget Close-->
    
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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="width: 50%;margin-top: 30%;margin-left: 20%;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Notification</h4>
      </div>
      <div class="modal-body">
       <?php echo $this->session->flashdata('fancy') ?>
      </div>
     
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="width: 50%;margin-top: 30%;margin-left: 20%;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Notification</h4>
      </div>

      <div class="modal-body">
       Added to your Wishlist
      </div>
     
    </div>
  </div>
</div>



<script type="text/javascript">

$('form#WishlistForm').submit(function(e) {

  var form = $(this);

  

  e.preventDefault();

  $.ajax({
    type: "POST",
    url: "<?php echo site_url('thriftshop/Add_toWishlist'); ?>",
        data: form.serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(data){
    $( "#notify2" ).click();
      },
      error: function() { alert("Error posting feed."); }
    });

});

</script>

    <script>
 function addWish(prodid)
  {
     $('#productid').val(prodid);
   $("#toWish").click();

  }

    
function fbs_click(TheImg) {
   u=TheImg;
     // t=document.title;
     t=TheImg.getAttribute('alt');
     window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;
 }
 </script>



