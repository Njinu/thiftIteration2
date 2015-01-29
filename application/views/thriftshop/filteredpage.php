 <div id="filtersearch">
  <script type="text/javascript">
  var $rows = $('#filtersearch').children();
  $('#search').keyup(function() {
    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

    $rows.show().filter(function() {
      var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
      return !~text.indexOf(val);
    }).hide();
  });
  </script>
<?php foreach ($list as $filter): $newitemdate = $filter['price'];?>
                                <!--Tile-->

                                <div class="col-lg-4 col-md-6 col-sm-12">
                              <div class="tile">
                                <div class="badges">`
                                 <!--  <span class="sale"></span> -->
                                </div>
                                <div class="price-label" data-price="299">R <?php echo $filter['price'] ?></div>
                                
                                <a href='<?php echo base_url()."index.php/". "thriftshop/view/".$filter["slug"]."/".$filter['product_id']?>'><img style="max-height:200px;min-height:200px" src='<?php echo base_url();?>uploads/<?php echo $filter['pic_id'] ?>' alt="1"/></a>
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