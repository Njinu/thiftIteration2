<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<body style="background-color:white;">
		 <section class="" id="about" style="background: url('<?php echo base_url()."assets/ThriftshopTheme/tiles/fresh_snow.png"?>') repeat  ;">

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
	                                <a  href='<?php echo base_url()."index.php#portfolio"?>'>About</a>
	                            </li>
	                            <li class="page-scroll">
	                                <a  href='<?php echo base_url()."index.php/". "news"?>'>Info Bytes</a>
	                            </li>
	                         	
	                             <li class="page-scroll">
	                                <a  href='<?php echo base_url()."index.php/". "store"?>'>Le Store</a>
	                            </li>

	                            <li class="page-scroll">
	                                <a href='<?php echo base_url()."index.php#contact"?>' id="element" >Contact</a>
	                            </li>

	                          <li class="dropdown">
	                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><span class="caret"></span></a>
	                                <ul class="dropdown-menu">
	                                    <li><a href='<?php if($this->session->userdata('email') == ""){ echo base_url()."index.php/". "user";} ?>' ><?php if ($this->session->userdata('email') != "") {echo $this->session->userdata('email');} else echo "Login";?></a></li>
	                                    <li><a   href='<?php if($this->session->userdata('email') == ""){echo base_url()."index.php/". "user/signup"; } ?>'><?php if ($this->session->userdata('email') == "") {echo "Register";} ?></a></li>
	                                    <li><a href='<?php echo base_url()."index.php/". "user/logout"?>'><?php if ($this->session->userdata('email') != "") {echo "Logout";} else echo "";?></a></li>
	                                    
	                                     <?php if($this->session->userdata('email') == "melony"){ 
                            ?>
                            <li class="page-scroll">
                                <a id="#"  href='<?php echo base_url()."index.php/". "admin/vieworders"; ?>'>Admin</a>
                            </li>
                            <?php 
                            } ?>
	                                    
	                                </ul>
	                            </li>
	                       
	                            <?php if($this->cart->total_items() > 0){ 
	                            ?>
	                            <li class="dropdown">
	                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span><span class="caret"></span></a>
	                                <ul class="dropdown-menu">
	                                    <li><a href= '<?php echo base_url()."index.php/". "cart"; ?>' >Items in Cart: <?php echo $this->cart->total_items() ?></a></li>
	                                           
	                                    	                                                                                                    
	                                </ul>
	                            </li>
	                            <?php 
	                            } ?>



	                        </ul>
	                    </div>
	                   
	                </div>
	            
	            </nav>

<div class="container" style="background-color:rgba(1000, 1000, 1000, 0.6); border-radius:20px; margin-top:5%;border-style:groove; border-color:#3498db">
<center><?php echo '<h2 class="ArticleHead" style="margin-top:3%;">'.$product_item['name'].'</h2>';?></center>
<hr style="border-color:black;max-width: 450px;">

<div class="container" style=" border-style: ;">
<div style="margin-top:3%;" class="col-md-6 col-md-offset-1 Articlebody" ><?php echo $product_item['description'];?></div>
<div style="margin-top:3%;margin-bottom:1%;" class="col-md-4 Articlebody"><img class="img-responsive"  src='<?php echo $product_item['picture'];?>'></div>

</div>

<br>
<div class="col-md-2 col-md-offset-1">
<ul class="list-group">
  <li class="list-group-item">
    <span class="badge">R <?php echo $product_item['price']; ?></span>
   Price
  </li>
</ul>
</div>
<div class="col-md-12"></div>
<?php echo validation_errors(); ?>

<?php 
$name = $product_item['slug'];
$add = "store/".$name; 
echo form_open($add) ?>


								<div class="container">

								<div class="col-md-offset-1" style="margin-top:2%;">
								<!-- <input type="submit" name="submit" class="btn btn-lg btn-info dropdown-toggle "></input> -->
								<a href='<?php echo base_url()."index.php/". "store"?>' type="button"  class="btn btn-lg btn-info dropdown-toggle ">Back </a>	
								<input class="btn btn-lg btn-info"  type="submit" name="submit" value="Add to Cart" />						
									
									<p><?php echo $this->session->flashdata('feedback'); ?><p>
									<input style="visibility:hidden;" type="input" name="id" value='<?php echo $product_item['id']; ?>'/><br />
									
									<input style="visibility:hidden;" type="input" name="quantity" value='<?php echo '1'; ?>' /><br />
									
									<input style="visibility:hidden;" type="input" name="price" value='<?php echo $product_item['price']; ?>' /><br />
									
									<input style="visibility:hidden;" type="input" name="name" value='<?php echo $product_item['name'] ; ?>' /><br />					

									
										</div>

								</div>
								
								</div>

</section>
