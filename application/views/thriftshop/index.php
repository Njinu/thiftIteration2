    <!--Filters Modal-->
    <div class="modal fade" id="filterModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
        	<div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button></div>
          <div class="modal-body">
            <!--Here goes filters dynamically pasted by jQuery-->
          </div>
        </div>
      </div>
    </div>
    
    <!--Filters Toggle-->
    <div class="filter-toggle" data-toggle="modal" data-target="#filterModal"><i class="fa fa-filter"></i></div>
    
    <!--Page Content-->
    <div class="page-content">

      <!--Breadcrumbs-->
      <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li>Shop</li>
      </ol><!--Breadcrumbs Close-->
      
      <!--Catalog Grid-->
      <section class="catalog-grid">
      	<div class="container">
          <h2 class="with-sorting">The ThriftShop</h2>
          <div class="sorting">
            <a id="thenamefilter" onclick="performfiltername()">Sort by Name</a>
             <a id="thepricefilter" onclick="performfilter()" >Sort by Price</a>
              <?php $attributes3 = array('name' => 'price-filters3', 'id' => 'filterform3', 'name' => 'filterform3'); ?>
               <?php $attributes4 = array('name' => 'price-filters4', 'id' => 'filterform4', 'name' => 'filterform4'); ?>
                <?php $attributes5 = array('name' => 'price-filters5', 'id' => 'filterform5', 'name' => 'filterform5'); ?>
               <?php $attributes6 = array('name' => 'price-filters6', 'id' => 'filterform6', 'name' => 'filterform6'); ?>
            <?php echo form_open('thriftshop/get_filteredpage',$attributes3) ?>
            <input type="submit" style="visibility:hidden" hidden; id="pricefilter" name="pricefilter" href="#" value="Sort by Price"/>
          </form>
          <?php echo form_open('thriftshop/get_filteredpage',$attributes4) ?>
            <input type="submit" style="visibility:hidden" hidden; id="pricefilter2" name="pricefilter2" href="#" value="Sort by Price"/>
          </form>

          <?php echo form_open('thriftshop/get_filteredpage',$attributes5) ?>
            <input type="submit" style="visibility:hidden" hidden; id="namefilter" name="namefilter" href="#" value="Sort by Price"/>
          </form>
          <?php echo form_open('thriftshop/get_filteredpage',$attributes6) ?>
            <input type="submit" style="visibility:hidden" hidden; id="namefilter2" name="namefilter2" href="#" value="Sort by Price"/>
          </form>

          </div>
          <div class="subnav">
          	<a href="#">iPhone cases</a>
            <a href="#">iPad cases</a>
          </div>
          <div class="row">

            <!--Filters-->
            <div class="filters-mobile col-lg-3 col-md-3 col-sm-4">
            	<div class="shop-filters">

                <!--Price Section-->
                <section class="filter-section">
                	<h3>Filter by price</h3>
                  <?php $attributes = array('name' => 'price-filters', 'id' => 'filterform', 'name' => 'filterform'); ?>
                  <?php $attributes2 = array('name' => 'price-filters', 'id' => 'filterform2', 'name' => 'filterform2'); ?>
                  <?php echo form_open('thriftshop/get_filteredpage',$attributes2) ?>
                  <span class="clear" id="clearPrice" >Clear price</span>
                  <div class="price-btns">
                   <input type="hidden" id="minValue" name="minValue" value="" />
                   <input type="hidden" id="maxValue" name="maxValue" value="" />
                   <button type="submit" onclick="adjustvalue50()"  class="btn btn-success btn-sm" value="50">Below R50</button><br/>
                   <button type="submit" onclick="adjustvalue100()"  class="btn btn-success btn-sm" value="50-100">R50-R100</button><br/>
                   <button  type="submit" onclick="adjustvalue300()" class="btn btn-success btn-sm" value="100-300">R100-R300</button><br/>
                   <button  type="submit" onclick="adjustvalue1000()" class="btn btn-success btn-sm" value="300-1000">R300-R1000</button>
                   
                 </div>
               </form>
               <?php echo form_open('thriftshop/get_filteredpage',$attributes) ?>
               <div class="price-slider" id="slider-container">
                 <div id="price-range"></div>
                 <div class="values group">
                   <!--data-min-val represent minimal price and data-max-val maximum price respectively in pricing slider range; value="" - default values-->
                   <span class="labels">R </span>
                   <input class="form-control" name="minVal" id="minVal" type="text" data-min-val="10" value="180">
                   <span class="labels">- R</span>
                   <input class="form-control" name="maxVal" id="maxVal" type="text" data-max-val="2500" value="1400">
                   
                 </div>
                 <input class="btn btn-primary btn-sm" id="filterbutton" type="submit" value="Filter">
               </div>
             </form>
           </section>
           
           <!--Colors Section-->
           <section class="filter-section">
             <h3>Filter by color</h3>
             <span class="clear clearChecks">Clear colors</span>
             <label>
              <input type="checkbox" name="colors" value="black" id="color_0" checked>
              Black (12)</label>
              <br>
              <label>
                <input type="checkbox" name="colors" value="white" id="color_1">
                White (1)</label>
                <br>
                <label>
                  <input type="checkbox" name="colors" value="green" id="color_2">
                  Green  (34)</label>
                  <br>
                  <label>
                    <input type="checkbox" name="colors" value="blue" id="color_3">
                    Blue (23)</label>
                    <br>
                    <label>
                      <input type="checkbox" name="colors" value="red" id="color_4">
                      Red (12)</label>
                    </section>

                    <!--Colors Section-->
                    <section class="filter-section">
                     <h3>Filter by size</h3>
                     <span class="clear clearChecks">Clear size</span>
                     <label>
                      <input type="checkbox" name="sizes" value="small" id="size_0" checked>
                      Small (12)</label>
                      <br>
                      <label>
                        <input type="checkbox" name="sizes" value="white" id="size_1">
                        Medium (34)</label>
                        <br>
                        <label>
                          <input type="checkbox" name="sizes" value="green" id="size_2">
                          Large (11)</label>
                          <br>
                          <label>
                            <input type="checkbox" name="sizes" value="blue" id="size_3">
                            Extra large (1)</label>
                            <br>
                            <label>
                              <input type="checkbox" name="sizes" value="red" id="size_4">
                              Superman (0)</label>
                            </section>

                            <!--Categories Section-->
                            <section class="filter-section">
                             <h3>Categories</h3>
                             <ul class="categories">
                               <li class="has-subcategory"><a href="#">iPhone cases (123)</a><!--Class "has-subcategory" for dropdown propper work-->
                                 <ul class="subcategory">
                                   <li><a href="#">iPhone cases (1)</a></li>
                                   <li><a href="#">iPad cases (45)</a></li>
                                   <li><a href="#">MacBook cases (34)</a></li>
                                   <li><a href="#">Something (12)</a></li>
                                   <li><a href="#">Air cases (23)</a></li>
                                 </ul>
                               </li>
                               <li><a href="#">iPad cases (34)</a></li>
                               <li><a href="#">MacBook cases (78)</a></li>
                               <li class="has-subcategory"><a href="#">Something (45)</a>
                                 <ul class="subcategory">
                                   <li><a href="#">Subcategory (1)</a></li>
                                   <li><a href="#">Subcategory (45)</a></li>
                                   <li><a href="#">Subcategory (23)</a></li>
                                 </ul>
                               </li>
                               <li><a href="#">Air cases (23)</a></li>
                             </ul>
                           </section>
                         </div>
                       </div>

                       <!--Tiles-->
                       <div class="col-lg-9 col-md-9 col-sm-8">
                        <input type="text" id="search" placeholder="Type to search"  class="form-control">
                        <div class="row" id="filtertable">
                          <div id="filtersearch">
                            <?php foreach ($filterslatest as $filter): $newitemdate = $calendar_item['date'];?>
                            <!--Tile-->

                            <div class="col-lg-4 col-md-6 col-sm-12">
                              <div class="tile">
                                <div class="badges">
                                  <span class="sale"></span>
                                </div>
                                <div class="price-label" data-price="299">R <?php echo $filter['price'] ?></div>
                                <a href="#"><img src='<?php echo base_url();?>uploads/<?php echo $filter['pic_id'] ?>' alt="1"/></a>
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
                      </div>
                      <!--Pagination-->
                      <ul class="pagination">
                        <li class="prev-page"><a class="fa fa-arrow-circle-left" href="#"></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li class="next-page"><a class="fa fa-arrow-circle-right" href="#"></a></li>
                      </ul>
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

   <!--Subscription Widget-->
   <section class="subscr-widget">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-8 col-sm-8">
          <h2 class="light-color">Subscribe to our news</h2>

          <!--Mail Chimp Subscription Form-->
          <form class="subscr-form" role="form" action="//8guild.us3.list-manage.com/subscribe/post?u=168a366a98d3248fbc35c0b67&amp;id=d704057a31" target="_blank" method="post" autocomplete="off">
            <div class="form-group">
              <label class="sr-only" for="subscr-name">Enter name</label>
              <input type="text" class="form-control" name="FNAME" id="subscr-name" placeholder="Enter name" required>
              <button class="subscr-next"><i class="fa fa-chevron-circle-right"></i></button>
            </div>
            <div class="form-group fff" style="display: none">
              <label class="sr-only" for="subscr-email">Enter email</label>
              <input type="email" class="form-control" name="EMAIL" id="subscr-email" placeholder="Enter email" required>
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;"><input type="text" name="b_168a366a98d3248fbc35c0b67_d704057a31" tabindex="-1" value=""></div>
              <button type="submit" id="subscr-submit"><i class="icon-check"></i></button>
            </div>
          </form>
          <!--Mail Chimp Subscription Form Close-->
          <p class="p-style2">Please fill the field before continuing</p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1">
          <p class="p-style3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        </div>
      </div>
    </div>
  </section><!--Subscription Widget Close-->

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


  


  <script type="text/javascript">

  var controller = 'thriftshop';
  var base_url = '<?php echo site_url(); //you have to load the "url_helper" to use this function ?>';

  function load_data_ajax2(type){
    $.ajax({
      'url' : base_url + '/' + controller + '/get_filteredpage',
                    'type' : 'POST', //the way you want to send data to your URL
                    'data' : {'type' : type},
                    'success' : function(data){ //probably this request will return anything, it'll be put in var "data"
                        var container = $('#filtertable'); //jquery selector (get element by id)
                        if(data){
                          container.html(data);
                        }
                      }
                    });
  }
  </script>

  <script type="text/javascript">

  $('form#filterform').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    $.ajax({
      type: "POST",
      url: "<?php echo site_url('thriftshop/get_filteredpage'); ?>",
        data: form.serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(data){
        var container = $('#filtertable'); //jquery selector (get element by id)
        if(data){
          container.html(data);
        }
      },
      error: function() { alert("Error posting feed."); }
    });

  });

  </script>

  <script type="text/javascript">

  function performfilter()
  {
    $("#pricefilter").click();
    $("#thepricefilter").attr("onclick","performfilter2()");  
  }

  function performfilter2()
  {
    $("#pricefilter2").click();
    $("#thepricefilter").attr("onclick","performfilter()"); 
  }

  function performfiltername()
  {

    $("#namefilter").click();
    $("#thenamefilter").attr("onclick","performfiltername2()");

    
  }

  function performfiltername2()
  {

    $("#namefilter2").click();
    $("#thenamefilter").attr("onclick","performfiltername()");

    
  }

  function adjustvalue50()
  {
    $( "#minValue" ).val(0);
    $( "#maxValue" ).val(50);
  }

  function adjustvalue100()
  {
   $( "#minValue" ).val(50);
   $( "#maxValue" ).val(100);
 }

 function adjustvalue300()
 {
  $( "#minValue" ).val(100);
  $( "#maxValue" ).val(300);
}

function adjustvalue1000()
{
  $( "#minValue" ).val(300);
  $( "#maxValue" ).val(1000);
}
</script>

<script type="text/javascript">

$('form#filterform2').submit(function(e) {

  var form = $(this);

  

  e.preventDefault();

  $.ajax({
    type: "POST",
    url: "<?php echo site_url('thriftshop/get_filteredpage2'); ?>",
        data: form.serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(data){
        var container = $('#filtertable'); //jquery selector (get element by id)
        if(data){
          container.html(data);
        }
      },
      error: function() { alert("Error posting feed."); }
    });

});

</script>

<script type="text/javascript">

$('form#filterform3').submit(function(e) {

  var form = $(this);

  

  e.preventDefault();

  $.ajax({
    type: "POST",
    url: "<?php echo site_url('thriftshop/get_filteredpage3'); ?>",
        data: form.serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(data){
        var container = $('#filtertable'); //jquery selector (get element by id)
        if(data){
          container.html(data);
        }
      },
      error: function() { alert("Error posting feed."); }
    });

});

</script>

<script type="text/javascript">

$('form#filterform4').submit(function(e) {

  var form = $(this);

  

  e.preventDefault();

  $.ajax({
    type: "POST",
    url: "<?php echo site_url('thriftshop/get_filteredpage4'); ?>",
        data: form.serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(data){
        var container = $('#filtertable'); //jquery selector (get element by id)
        if(data){
          container.html(data);
        }
      },
      error: function() { alert("Error posting feed."); }
    });

});

</script>

<script type="text/javascript">

$('form#filterform5').submit(function(e) {

  var form = $(this);

  

  e.preventDefault();

  $.ajax({
    type: "POST",
    url: "<?php echo site_url('thriftshop/get_filteredpage5'); ?>",
        data: form.serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(data){
        var container = $('#filtertable'); //jquery selector (get element by id)
        if(data){
          container.html(data);
        }
      },
      error: function() { alert("Error posting feed."); }
    });

});

</script>

<script type="text/javascript">

$('form#filterform6').submit(function(e) {

  var form = $(this);

  

  e.preventDefault();

  $.ajax({
    type: "POST",
    url: "<?php echo site_url('thriftshop/get_filteredpage6'); ?>",
        data: form.serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(data){
        var container = $('#filtertable'); //jquery selector (get element by id)
        if(data){
          container.html(data);
        }
      },
      error: function() { alert("Error posting feed."); }
    });

});

</script>
