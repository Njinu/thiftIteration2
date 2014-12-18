
<body style="background: url('<?php echo base_url()."assets/ThriftshopTheme/img/hd-wallpaper-6.jpg"?>') no-repeat  ;">
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


             <nav style="background-color: rgba(0, 0, 0, 0.9);" class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a style="font-family: 'Kristi', cursive;font-weight: 300;color:white; " class="navbar-brand page-scroll" href='<?php echo base_url()."index.php"?>'>LE Vibe</a>
                    </div>

                  
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul  class="nav navbar-nav navbar-right">
                            <li class="hidden">
                                <a href="#page-top"></a>
                            </li>

                            <li class="page-scroll">
                                <a  href='<?php echo base_url()."index.php/". "news"?>'>Info Bytes</a>
                            </li>
                         	
                             <li class="page-scroll">
                                <a  href='<?php echo base_url()."index.php/". "store"?>'>Le Store</a>
                            </li>                      

                           <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Create<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href='' >Info bytes</a></li>
                                    <li><a   href=''>Products</a></li>
          
                                </ul>
                            </li>

                              <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">View<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href='' >Orders</a></li>
                                
                                </ul>
                            </li>

                            

                       
                        </ul>
                    </div>
                            

                            
                           <!--  <li class="page-scroll">
                                <a id="signup"  href='<?php echo base_url()."index.php/". "user/signup"?>'>Sign Up</a>
                            </li> -->
                        </ul>
                    </div>
                   
                </div>
            
            </nav>
<div class="container" style="">
<table class="table table-bordered  table-hover table-responsive "  style="margin-top:18%;" border="0" >

<tr class="info">
  <th>Quantity</th>
  <th>Product</th>
  <th style="text-align:right">Price</th>
  <th style="text-align:right">Sub-Total</th>
</tr>

<?php $i = 1; ?>

<?php foreach ($this->cart->contents() as $items): ?>

	<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

	<tr class="active">
	  <td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
	  <td>
		<?php echo $items['name']; ?>

			<?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

				<p>
					<?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

						<strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

					<?php endforeach; ?>
				</p>

			<?php endif; ?>

	  </td>
	  <td style="text-align:right">R <?php echo $this->cart->format_number($items['price']); ?></td>
	  <td style="text-align:right">R <?php echo $this->cart->format_number($items['subtotal']); ?></td>
	</tr>

<?php $i++; ?>

<?php endforeach; ?>

<tr class="active">
  <td colspan="2"></td>
  <td class="right" style="text-align:right"><strong>Total</strong></td>
  <td class="right" style="text-align:right"><strong>R <?php echo $this->cart->format_number($this->cart->total()); ?></strong></td>
</tr>

</table>
<div>
<?php $opts3 = 'class = "btn btn-info btn-lg col-md-2"'; ?>
<p><?php echo form_submit('', 'Update your Cart',$opts3); ?></p>
<a style="margin-left:3%;" href='<?php echo base_url()."index.php/order"?>' class="btn btn-lg btn-info col-md-2 ">Place Order</a>
<div class="col-md-5"></div>
<a style="margin-left:5%;" href='<?php echo base_url()."index.php/"?>' class="btn btn-lg btn-info col-md-2 col-md-offset-5 ">Back </a>
</div>
</div>