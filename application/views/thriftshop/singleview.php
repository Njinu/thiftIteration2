<style type="text/css">
.hoverlike:hover{
  color: #2ba8db
}
.hoverlike{
  color:black
}
.hoverdislike:hover{
  color: #e74c3c
}
.hoverdislike{
  color:black
}
</style>

<!--Page Content-->
    <div class="page-content">
    <input type="hidden" id="notify" data-toggle="modal" data-target="#myModal" />
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
            	
              <img onclick="fbs_click(this)" src='<?php echo base_url();?>uploads/<?php echo $filter['pic_id'] ?>' class="img-responsive" alt="Responsive image">
            <br><p class="p-style2"><?php echo  $filter['description']; ?></p>
            </div>
            
            <!--Product Description-->
            <div class="col-lg-6 col-md-6">
              <h1><?php echo  $filter['name']; ?></h1>
              <hr>
             <!--  <?php print_r($filter) ?> -->
              <div class="rate">
                <span class="active"></span>
                <span class="active"></span>
                <span class="active"></span>
                <span></span>
                <span></span>
              </div>
             <!--  <div class="old-price">815,00 $</div> -->
              <div class="price"><span class="badge">R <?php echo  $filter['price']; ?></span></div>
     
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-5">
                  <h3>Tell Friends</h3>
                  <div class="social-links">
                 
                    <a href="http://twitter.com/home?status=Currentlyreading <?php $_SERVER['REQUEST_URI']; ?>"><i class="fa fa-twitter-square"></i></a>
                   <!--  <a href="#"><i class="fa fa-pinterest-square"></i></a> -->
                    <a onclick="fbs_click(this)"><i class="fa fa-facebook-square"></i></a>
                  </div>
                </div>
               
              </div>

               <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-5">

                  <a href="#" onclick="triggerlike()" class="hoverlike" ><i class="fa fa-thumbs-o-up" style="font-size:180%"></i> <span><?php echo  $filter['likes']; ?></span> </a>
                   <?php $attributeslike = array('name' => 'likeupForm', 'id' => 'likeupForm','style'=> 'display:none'); ?>
                                     <?php echo form_open('thriftshop/likeup',$attributeslike) ?>
                                   <input type="int" style="visibility:hidden" id="prodID" name="prodID" href="#" value='<?php echo  $filter['product_id']; ?>'/>  
                                    <input type="int" style="visibility:hidden" id="clikes" name="clikes" href="#" value='<?php echo  $filter['likes']; ?>'/>  
                   <input type="text" style="visibility:hidden" id="slug1" name="slug1" href="#" value='<?php echo  $filter['slug']; ?>'/>
                   <button type="submit" id="likeupclick" style="visibility:hidden"></button>
                 </form>

                  <a href="#" onclick="triggerdislike()"  class="hoverdislike" ><i class="fa fa-thumbs-o-down" style="font-size:180%"></i> <span><?php echo  $filter['dislikes']; ?></span> </a>
                   <?php $attributeslike2 = array('name' => 'dislikedownForm', 'id' => 'dislikedownForm','style'=> 'display:none'); ?>
                                     <?php echo form_open('thriftshop/dislikedown',$attributeslike2) ?>
                                   <input type="int" style="visibility:hidden" id="prodID2" name="prodID2" href="#" value='<?php echo  $filter['product_id']; ?>'/>  
                                    <input type="int" style="visibility:hidden" id="dlikes" name="dlikes" href="#" value='<?php echo  $filter['dislikes']; ?>'/>  
                    <input type="text" style="visibility:hidden" id="slug2" name="slug2" href="#" value='<?php echo  $filter['slug']; ?>'/>
                   <button type="submit" id="dlikeclick"  style="visibility:hidden"></button>
                 </form>
               
                </div>
               
              </div>

               <div class="buttons group">
               <!--  <div class="qnt-count">
                  <a class="incr-btn" href="#">-</a>
                  <input id="quantity" class="form-control" type="text" value="2">
                  <a class="incr-btn" href="#">+</a>
                </div> -->
                 <?php $attributes10 = array('name' => 'WishlistForm', 'id' => 'WishlistForm'); ?>
                                     <?php echo form_open('thriftshop/Add_toWishlist',$attributes10) ?>
                <a onclick="addWish('<?php echo $filter['product_id'] ?>')" class="btn btn-success btn-sm" href="#"><i class="fa fa-tree"></i>Add to wishlist</a>
                  <input type="text" style="visibility:hidden" name="productid" id="productid" value= '<?php echo $filter['id'] ?>'>
                                     <input type="submit" style="visibility:hidden" id="toWish" name="toWish" href="#" value=""/>
             </form>
              </div>

              <div class="promo-labels">
             
                <div data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."><i class="fa fa-shield"></i>Certified</div>

                <div data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."><i class="fa fa-space-shuttle"></i>Deliver even on Mars</div>
                <div data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."><i class="fa fa-shield"></i>Certified</div>
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
                      
                        <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'thethriftshopcoza'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    

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
          
          <div class="col-md-4 col-sm-4 space-bottom">
            <div class="row">
              <div class="col-md-3 col-sm-4 featured-icon"><i class="fa fa-user"></i></div>
              <div class="col-md-9 col-sm-8 text-center-mobile">
                <h3>Name</h3>
                <p><?php echo ucfirst($seller['first_name']) ?></p>
              </div>
            </div>
          </div>
          <!--Item-->
          <div class="col-md-4 col-sm-4 space-bottom">
            <div class="row">
              <div class="col-md-3 col-sm-4 featured-icon"><i class="fa fa-thumbs-o-up"></i></div>
              <div class="col-md-9 col-sm-8 text-center-mobile">
                <h3>Likes</h3>
                <p><span class="badge" ><?php echo $seller['seller_likes'] ?></span></p>
              </div>
            </div>
          </div>
          <!--Item-->
          <div class="col-md-4 col-sm-4 space-bottom">
            <div class="row">
              <div class="col-md-3 col-sm-4 featured-icon"><i class="fa fa-thumbs-o-down"></i></div>
              <div class="col-md-9 col-sm-8 text-center-mobile">
                <h3>Dislikes</h3>
                <p><span class="badge"><?php echo $seller['seller_dislikes'] ?></span></p>
              </div>
            </div>
          </div>
          <!--Item-->
        <div class="col-md-12 col-sm-12 space-bottom">
            <div class="row">
              <div class="col-md-3 col-sm-4 featured-icon"><i class="fa fa-book"></i></div>
              <div class="col-md-9 col-sm-8 text-center-mobile">
                <h3>Bio</h3>
                <p><?php echo $seller['bio'] ?></p>
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

    <script>
function fbs_click(TheImg) {
   u=TheImg;
     // t=document.title;
     t=TheImg.getAttribute('alt');
     window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;
 }
 </script>

    <script type="text/javascript">

     function triggerdislike(){
       $("#dlikeclick").click();
    }

    function triggerlike(){
       $("#likeupclick").click();
    }

   

  function addWish(prodid)
  {
     $('#productid').val(prodid);
   $("#toWish").click();

  }

  </script>

  <script type="text/javascript">


$('form#dislikedownForm').submit(function(e) {

  var form = $(this);
  e.preventDefault();

  $.ajax({
    type: "POST",
    url: "<?php echo site_url('thriftshop/dislikedown'); ?>",
        data: form.serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(data){
  location.reload();
      },
      error: function() { alert("Error posting feed."); }
    });

});

</script>

  <script type="text/javascript">

$('form#likeupForm').submit(function(e) {

  var form = $(this);
  e.preventDefault();

  $.ajax({
    type: "POST",
    url: "<?php echo site_url('thriftshop/likeup'); ?>",
        data: form.serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(data){
   location.reload();
      },
      error: function() { alert("Error posting feed."); }
    });

});

</script>

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
    $( "#notify" ).click();
      },
      error: function() { alert("Error posting feed."); }
    });

});

</script>
    
      
  	<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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


</body>