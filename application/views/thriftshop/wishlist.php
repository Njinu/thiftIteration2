
  

   <style>
   .delete{
    width:10%;
   }
   </style>
    
    <!--Page Content-->
    <div class="page-content">
    
      <!--Breadcrumbs-->
      <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li>Wishlist</li>
      </ol><!--Breadcrumbs Close-->
      
      <!--Wishlist-->
      <section class="wishlist">
      	<div class="container">
        	<div class="row">
          
          	<!--Items List-->
          	<div class="col-lg-9 col-md-9">
            	<h2 class="title">Wishlist</h2>
            	<table class="items-list">
              	<tr>
                	<th>&nbsp;</th>
                  <th>Product name</th>
                  <th>Product price</th>
                </tr>
              <!--  <?php print_r($wishlist) ?> -->
              <?php if(!$wishlist) {

?>


<script type="text/javascript">
$( document ).ready(function() {
   $("#trigermodal").click();
});

</script>
<?php

              }else {?>

                <?php foreach ($wishlist as $filter): $newitemdate = $filter['name'];?>
                <!--Item-->
                <tr class="item first">
                	<td class="thumb"><a href='<?php echo base_url()."index.php/". "thriftshop/view/".$filter["slug"]."/".$filter['product_id']?>'><img src='<?php echo base_url();?>uploads/<?php echo $filter['pic_id'] ?>' alt="1"/></a></td>
                  <td class="name"><a href='<?php echo base_url()."index.php/". "thriftshop/view/".$filter["slug"]."/".$filter['product_id']?>'><?php echo $filter['name']; ?></a></td>
                  <td class="price">R <?php echo $filter['price']; ?></td>
                  
                  <td onclick="deletewish('<?php echo $filter['product_id'] ?>')" class="delete" data-toggle="modal" data-target="#myModal"><i class="fa fa-times"></i></td>
                </tr>
                <!--Item-->
                          <?php endforeach ?>
                <?php } ?>
              
              </table>
            </div>
            
            <!--Sidebar-->
            <div class="col-lg-3 col-md-3">
              
              <!--Top items-->
              <h3 class="space-top">Top items</h3>
            	<div class="top-item">
                <div class="price-label">715,00 $</div>
                <a href="#"><img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="Special Offer"/></a>
                <div class="footer"><a href="#">Nikkon D5300</a></div>
              </div>
            	<div class="top-item">
                <div class="price-label">715,00 $</div>
                <a href="#"><img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="Special Offer"/></a>
                <div class="footer"><a href="#">Nikkor AF-S</a></div>
              </div>
            </div>
          </div>
        </div>
      </section><!--Wishlist Close-->
      
      <!--Catalog Grid-->
      <section class="catalog-grid">
      	<div class="container">
        	<h2 class="primary-color">Newcomers</h2>
          <div class="row">
            <!--Tile-->
          	<div class="col-lg-3 col-md-4 col-sm-6">
            	<div class="tile">
              	<div class="price-label">715,00 $</div>
              	<a href="#"><img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="7"/></a>
                <div class="footer">
                	<a href="#">Nikon J4</a>
                  <span>by Pirate3d</span>
                  <div class="tools">
                  	<div class="rate">
                    	<span class="active"></span>
                      <span class="active"></span>
                      <span class="active"></span>
                      <span></span>
                      <span></span>
                    </div>
                    <!--Add To Cart Button-->
                    <a class="add-cart-btn" href="#"><span>To cart</span><i class="fa fa-shopping-cart"></i></a>
                    <!--Share Button-->
                    <div class="share-btn">
                    	<div class="hover-state">
                      	<a class="fa fa-facebook-square" href="#"></a>
                        <a class="fa fa-twitter-square" href="#"></a>
                        <a class="fa fa-google-plus-square" href="#"></a>
                      </div>
                      <i class="fa fa-share"></i>
                    </div>
                    <!--Add To Wishlist Button-->
                    <a class="wishlist-btn" href="#">
                    	<div class="hover-state">Wishlist</div>
                    	<i class="fa fa-plus"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!--Tile-->
          	<div class="col-lg-3 col-md-4 col-sm-6">
            	<div class="tile">
              	<div class="price-label">715,00 $</div>
              	<a href="#"><img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="2"/></a>
                <div class="footer">
                	<a href="#">Nikon Coolpix</a>
                  <span>by Pirate3d</span>
                  <div class="tools">
                  	<div class="rate">
                    	<span class="active"></span>
                      <span class="active"></span>
                      <span class="active"></span>
                      <span></span>
                      <span></span>
                    </div>
                    <!--Add To Cart Button-->
                    <a class="add-cart-btn" href="#"><span>To cart</span><i class="fa fa-shopping-cart"></i></a>
                    <!--Share Button-->
                    <div class="share-btn">
                    	<div class="hover-state">
                      	<a class="fa fa-facebook-square" href="#"></a>
                        <a class="fa fa-twitter-square" href="#"></a>
                        <a class="fa fa-google-plus-square" href="#"></a>
                      </div>
                      <i class="fa fa-share"></i>
                    </div>
                    <!--Add To Wishlist Button-->
                    <a class="wishlist-btn" href="#">
                    	<div class="hover-state">Wishlist</div>
                    	<i class="fa fa-plus"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!--Tile-->
          	<div class="col-lg-3 col-md-4 col-sm-6">
            	<div class="tile">
              	<div class="price-label">715,00 $</div>
              	<a href="#"><img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="3"/></a>
                <div class="footer">
                	<a href="#">Nikon WP-N3</a>
                  <span>by Pirate3d</span>
                  <div class="tools">
                  	<div class="rate">
                    	<span class="active"></span>
                      <span class="active"></span>
                      <span class="active"></span>
                      <span></span>
                      <span></span>
                    </div>
                    <!--Add To Cart Button-->
                    <a class="add-cart-btn" href="#"><span>To cart</span><i class="fa fa-shopping-cart"></i></a>
                    <!--Share Button-->
                    <div class="share-btn">
                    	<div class="hover-state">
                      	<a class="fa fa-facebook-square" href="#"></a>
                        <a class="fa fa-twitter-square" href="#"></a>
                        <a class="fa fa-google-plus-square" href="#"></a>
                      </div>
                      <i class="fa fa-share"></i>
                    </div>
                    <!--Add To Wishlist Button-->
                    <a class="wishlist-btn" href="#">
                    	<div class="hover-state">Wishlist</div>
                    	<i class="fa fa-plus"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!--Tile-->
          	<div class="col-lg-3 col-md-4 col-sm-6">
            	<div class="tile">
              	<div class="price-label">715,00 $</div>
              	<a href="#"><img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="4"/></a>
                <div class="footer">
                	<a href="#">Nikkor 10-30 VR</a>
                  <span>by Pirate3d</span>
                  <div class="tools">
                  	<div class="rate">
                    	<span class="active"></span>
                      <span class="active"></span>
                      <span class="active"></span>
                      <span></span>
                      <span></span>
                    </div>
                    <!--Add To Cart Button-->
                    <a class="add-cart-btn" href="#"><span>To cart</span><i class="fa fa-shopping-cart"></i></a>
                    <!--Share Button-->
                    <div class="share-btn">
                    	<div class="hover-state">
                      	<a class="fa fa-facebook-square" href="#"></a>
                        <a class="fa fa-twitter-square" href="#"></a>
                        <a class="fa fa-google-plus-square" href="#"></a>
                      </div>
                      <i class="fa fa-share"></i>
                    </div>
                    <!--Add To Wishlist Button-->
                    <a class="wishlist-btn" href="#">
                    	<div class="hover-state">Wishlist</div>
                    	<i class="fa fa-plus"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!--Catalog Grid Close-->
      
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
    <div class="modal-content" style="">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Notification</h4>
      </div>

      <div class="modal-body">
       Do you wish do delete this item?
      </div>

      <div class="modal-footer">
         <?php echo form_open('thriftshop/deletefromwish') ?>
         <input type="hidden" id="theproductid" name="theproductid" value="" />
        <button type="submit" class="btn btn-default" >Yes</button>
        <button type="button" onclick="location.reload()" class="btn btn-primary" data-dismiss="modal">No</button>
      </form>
        
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
      There are no items in your wishlist
      </div>
     
    </div>
  </div>
</div>

<script type="text/javascript">
 function deletewish(prodid)
  {
     $('#theproductid').val(prodid);

  }
</script>