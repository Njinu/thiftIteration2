


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
                        <p><?php echo $category['name'] ?></p>
                    </a>
                </div>
        
              <?php endforeach ?>
             
          
            </div>
        </div>
    </section><!--Categories Close-->
    
    <!--Catalog Grid-->
    <section class="catalog-grid">
        <div class="container">
            <h2 class="primary-color">Catalog picks</h2>
            <div class="row">
               
                 <?php foreach ($catalog as $filter): $newitemdate = $calendar_item['price'];?>
                            <!--Tile-->

                            <div class="col-lg-3 col-md-4 col-sm-6">
                              <div class="tile">
                                <div class="badges">
                                <!--   <span class="sale"></span> -->
                                </div>
                                <div class="price-label" data-price="299">R <?php echo $filter['price'] ?></div>
                                <a href="thriftshop/view/<?php echo $filter['slug']?>/<?php echo $filter['product_id']?>"><img src='<?php echo base_url();?>uploads/<?php echo $filter['pic_id'] ?>' alt="1"/></a>
                                <div class="footer">
                                  <a href="#"><?php echo $filter['name'] ?></a>
                                  <span><?php echo $filter['category'] ?></span>
                                  <div class="tools">
                                    <div class="rate">
                                      <span class="active"></span>
                                      <span class="active"></span>
                                      <span class="active"></span>
                                      <span></span>
                                      <span></span>
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
            <li class="active"><a href="#bestsel" data-toggle="tab">Bestseller items</a></li>
            <li><a href="#onsale" data-toggle="tab">Items on sale</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="bestsel">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-7">
                            <a class="media-link" href="#">
                                <div class="overlay">
                                    <div class="descr"><div>X-MAS LIGHT IPHONE LENS<span>$14.95</span></div></div>
                                </div>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="1"/>
                            </a>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <a class="media-link" href="#">
                                <div class="overlay">
                                    <div class="descr"><div>Hedadset for iPhone<span>$19.40</span></div></div>
                                </div>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="2"/>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <a class="media-link" href="#">
                                <div class="overlay">
                                    <div class="descr"><div>Product Name<span>$24.15</span></div></div>
                                </div>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="3"/>
                            </a>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <a class="media-link" href="#">
                                <div class="overlay">
                                    <div class="descr"><div>Product Name<span>$24.15</span></div></div>
                                </div>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="4"/>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <a class="media-link" href="#">
                                <div class="overlay">
                                    <div class="descr"><div>Product Name<span>$24.15</span></div></div>
                                </div>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="5"/>
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
    
    <!--Posts/Twitter Widget-->
    <section class="posts-widget">
        <div class="tw-bg"></div>
        <div class="container">
            <div class="row">
                <div class="latest-posts col-lg-8 col-md-8">
                    <div class="row">
                        <div class="col-lg-3">
                            <h2 class="extra-bold">Latests posts</h2>
                            <a class="btn btn-success btn-block" href="#">To blog</a>
                        </div>
                        <div class="col-lg-9">
                            <!--Post-->
                            <div class="post row">
                                <div class="col-lg-6 col-sm-6">
                                    <a href="#"><img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="1"/></a>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <h3><a href="#">Another Title</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                    <div class="author"><i class="fa fa-user"></i><a href="#">By Bedismo</a></div>
                                    <div class="comments"><i class="fa fa-comment"></i><a href="#">Comments (34)</a></div>
                                </div>
                            </div><!--Post End-->
                            <!--Post-->
                            <div class="post row">
                                <div class="col-lg-6 col-sm-6">
                                    <a href="#"><img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="2"/></a>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <h3><a href="#">Awesome Title</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                    <div class="author"><i class="fa fa-user"></i><a href="#">By Jeddah</a></div>
                                    <div class="comments"><i class="fa fa-comment"></i><a href="#">Comments (101)</a></div>
                                </div>
                            </div><!--Post End-->
                        </div>
                    </div>
                </div>
                <div class="twitter-feed col-lg-4 col-md-4">
                    <a class="tw-follow" href="https://twitter.com/8Guild" target="_blank">
                        <div class="button">Follow us<i class="fa fa-twitter"></i></div>
                        <h2 class="extra-bold">On Twitter <i class="fa fa-twitter"></i></h2>
                    </a>
                    <!--Tweet-->
                    <div class="tweet">
                        <a href="#">@Bedismo</a>
                        <p class="p-style3">Uberly impressed with the AMAZING support I constantly get from awesome!!!</p>
                        <div class="group">
                            <div class="actions">
                                <a href="#">Reply</a>
                                <a href="#">Retweet</a>
                                <a href="#">Favorite</a>
                            </div>
                            <span class="date">5 Mar 2014</span>
                        </div>
                    </div><!--Tweet Close-->
                    <!--Tweet-->
                    <div class="tweet">
                        <a href="#">@Bedismo</a>
                        <p class="p-style3">Uberly impressed with the AMAZING support I constantly get from awesome!!!</p>
                        <div class="group">
                            <div class="actions">
                                <a href="#">Reply</a>
                                <a href="#">Retweet</a>
                                <a href="#">Favorite</a>
                            </div>
                            <span class="date">5 Mar 2014</span>
                        </div>
                    </div><!--Tweet Close-->
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

    <script>
function fbs_click(TheImg) {
   u=TheImg;
     // t=document.title;
     t=TheImg.getAttribute('alt');
     window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;
 }
 </script>
