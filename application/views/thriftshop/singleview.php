<!--Page Content-->
    <div class="page-content">
    
      <!--Breadcrumbs-->
      <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li><a href="shop-filters-left-3cols.html">ItemView</a></li>
        
      </ol><!--Breadcrumbs Close-->
      
      <!--Shopping Cart Message-->
      <section class="cart-message">
      	<i class="fa fa-check-square"></i>
        <p class="p-style3">"Nikon" was successfully added to your cart.</p>
        <a class="btn-outlined-invert btn-success btn-sm" href="shopping-cart.html">View cart</a>
      </section><!--Shopping Cart Message Close-->
      
      <!--Catalog Single Item-->
      <section class="catalog-single">
      	<div class="container">
          <div class="row">
          
          	<!--Product Gallery-->
            <div class="col-lg-6 col-md-6">
            	
              <img src='<?php echo base_url();?>uploads/<?php echo $filter['pic_id'] ?>' class="img-responsive" alt="Responsive image">
            </div>
            
            <!--Product Description-->
            <div class="col-lg-6 col-md-6">
              <h1><?php echo  $filter['name']; ?></h1>
             <!--  <?php print_r($filter) ?> -->
              <div class="rate">
                <span class="active"></span>
                <span class="active"></span>
                <span class="active"></span>
                <span></span>
                <span></span>
              </div>
             <!--  <div class="old-price">815,00 $</div> -->
              <div class="price">R <?php echo  $filter['price']; ?></div>

              <p class="p-style2"><?php echo  $filter['description']; ?></p>
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-5">
                  <h3>Tell Friends</h3>
                  <div class="social-links">
                    <a href="#"><i class="fa fa-tumblr-square"></i></a>
                    <a href="#"><i class="fa fa-pinterest-square"></i></a>
                    <a href="#"><i class="fa fa-facebook-square"></i></a>
                  </div>
                </div>
               
              </div>

               <div class="buttons group">
               <!--  <div class="qnt-count">
                  <a class="incr-btn" href="#">-</a>
                  <input id="quantity" class="form-control" type="text" value="2">
                  <a class="incr-btn" href="#">+</a>
                </div> -->
                 <?php $attributes10 = array('name' => 'WishlistForm', 'id' => 'WishlistForm', 'name' => 'WishlistForm'); ?>
                                     <?php echo form_open('thriftshop/Add_toWishlist',$attributes10) ?>
                <a onclick="addWish('<?php echo $filter['product_id'] ?>')" class="btn btn-success btn-sm" href="#"><i class="fa fa-tree"></i>Add to wishlist</a>
                  <input type="text" style="visibility:hidden" name="productid" id="productid" value= '<?php echo $filter['id'] ?>'>
                                     <input type="submit" style="visibility:hidden" id="toWish" name="toWish" href="#" value=""/>
             </form>
              </div>

              <div class="promo-labels">
                <div data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."><i class="fa fa-truck"></i>Free delivery</div>
                <div data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."><i class="fa fa-space-shuttle"></i>Deliver even on Mars</div>
                <div data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."><i class="fa fa-shield"></i>Safe Buy</div>
              </div>
            </div>
          </div>
        </div>
      </section><!--Catalog Single Item Close-->
      
      <!--Tabs Widget-->
      <section class="tabs-widget">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
          <li class="active"><a href="#specs" data-toggle="tab">Comments</a></li>
          <li><a href="#descr" data-toggle="tab">View Seller</a></li>
        
        </ul>
        <div class="tab-content">
        	<!--Tab1 (Tech Specs)-->
          <div class="tab-pane fade in active" id="specs">
          	<div class="container">
            	<div class="row">
                <section class="tech-specs">
                  <div class="container">
                    <div class="row">
                      <!--Column 1-->
                      <div class="col-lg-12 col-md-12 col-sm-12">
                      <!--   <?php print_r($comments); ?> -->
                         <?php foreach ($comments as $filter): $newitemdate = $filter['id'];?>
                        <!--Item-->
                        <div class="item">
                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-3"><i class="fa fa-user"></i><span><?php echo $filter['firstname'] ?></span></div>
                            <div class="col-lg-8 col-md-8 col-sm-9"><p class="p-style2"><?php echo $filter['message'] ?></p></div>
                          </div>
                        </div>
<?php endforeach ?>
                     </div>                  
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
          
          <!--Tab2 (Description)-->
          <div class="tab-pane fade" id="descr">
          	<div class="container">
            	<div class="row">
              	
                 <section class="container">
        <h2 class="text-center-mobile">Seller Details</h2>
        <div class="row space-top">
          <!--Item-->
          <div class="col-md-4 col-sm-6 space-bottom">
            <div class="row">
              <div class="col-md-3 col-sm-4 featured-icon"><i class="fa fa-user"></i></div>
              <div class="col-md-9 col-sm-8 text-center-mobile">
                <h3>Name</h3>
                <p><?php echo ucfirst($seller['first_name']) ?></p>
              </div>
            </div>
          </div>
          <!--Item-->
          <div class="col-md-4 col-sm-6 space-bottom">
            <div class="row">
              <div class="col-md-3 col-sm-4 featured-icon"><i class="fa fa-thumbs-o-up"></i></div>
              <div class="col-md-9 col-sm-8 text-center-mobile">
                <h3>Likes</h3>
                <p><span class="badge" ><?php echo $seller['likes'] ?></span></p>
              </div>
            </div>
          </div>
          <!--Item-->
          <div class="col-md-4 col-sm-6 space-bottom">
            <div class="row">
              <div class="col-md-3 col-sm-4 featured-icon"><i class="fa fa-thumbs-o-down"></i></div>
              <div class="col-md-9 col-sm-8 text-center-mobile">
                <h3>Dislikes</h3>
                <p><span class="badge"><?php echo $seller['dislikes'] ?></span></p>
              </div>
            </div>
          </div>
          <!--Item-->
        <div class="col-md-4 col-sm-6 space-bottom">
            <div class="row">
              <div class="col-md-3 col-sm-4 featured-icon"><i class="fa fa-book"></i></div>
              <div class="col-md-9 col-sm-8 text-center-mobile">
                <h3>Bio</h3>
                <p><?php echo $seller['bio'] ?></p>
              </div>
            </div>
          </div>
          <!--Item-->
         <div class="col-md-4 col-sm-6 space-bottom">
            <div class="row">
              <div class="col-md-3 col-sm-4 featured-icon"><i class="fa fa-user"></i></div>
              <div class="col-md-9 col-sm-8 text-center-mobile">
                <h3>Name</h3>
                <p><?php echo $seller['first_name'] ?></p>
              </div>
            </div>
          </div>
          
        <!--Item-->
          <div class="col-md-4 col-sm-6 space-bottom">
            <div class="row">
              <div class="col-md-3 col-sm-4 featured-icon"><i class="fa fa-book"></i></div>
              <div class="col-md-9 col-sm-8 text-center-mobile">
                <h3>Personalised gifts</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
              </div>
            </div>
          </div>
        
        </div>
      </section><!--Delivery Info Close-->
              	
              </div>
            </div>
          </div>
          
          <!--Tab3 (Reviews)-->
          
        </div>
      </section><!--Tabs Widget Close-->
      
  
      
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

    <script type="text/javascript">

  function addWish(prodid)
  {
     $('#productid').val(prodid);
   $("#toWish").click();

  }

  </script>
    
      
  	