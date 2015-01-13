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
                                    <div class="badges">
                                      <span class="sale"></span>
                                    </div>
                                    <div class="price-label" data-price="299">R <?php echo $filter['price'] ?></div>
                                    <a href="thriftshop/<?php echo $filter['slug'] ?>"><img src='<?php echo base_url();?>uploads/<?php echo $filter['pic_id'] ?>' alt="1"/></a>
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

                              <?php endforeach ?>
                            </div>