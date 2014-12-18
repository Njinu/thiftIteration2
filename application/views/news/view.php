		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<body style="background-color:white;">

			<div id="fb-root"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=386968854776429&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

			 <section class="" id="about" >

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

		             <?php 
		             $newitemLoc = $news_item['location'];
		             $newitemdate = $news_item['Date'];
            $dateString=date($newitemdate);
            $t = explode('-',$dateString);
            $newitemdateYEAR = $t[0]; //month
            $newitemdateMON= $t[1]; //day
            $newitemdateDAY = $t[2]; //year

             $monthNum = $newitemdateMON;
 $monthName = date("F", mktime(0, 0, 0, $monthNum, 10));
 $thenewitemdateMON = $monthName; // Output: May

 $result = substr($thenewitemdateMON, 0, 3);
        ?>

		            <div class="container">

		            	<table class="table table-striped table-condensed  table-hover">
							 <thead>
							    <tr>
							      <th>Date</span></th>
							    
							      <th>Author</th>
							      <th>Link</th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      <td> <span style="font-size:140%;" class="badge"><?php echo $result ?> <?php echo $newitemdateDAY?></span></td>
							      
							      <td>Paulos Koela</td>
							      <td><a href="http://localhost:82/ThriftShop/index.php/news/hry">http://localhost:82/ThriftShop/index.php/news/hry/ThriftShop/index.php/news/hry<a></td>

							    </tr>
							  </tbody>
						</table>

		            </div>

		<div class="container" style="background-color:rgba(1000, 1000, 1000, 0.6); border-radius:20px; margin-top:1%;">

		<center><?php echo '<h2 class="ArticleHead" style="margin-top:0%;">'.'Title: ' .$news_item['title'].'</h2>';?></center>
		<hr style="border-color:black;max-width: 450px;">
		<!-- <p><?php echo $this->session->flashdata('feedback'); ?> </P> -->
		<div class="container" style=" border-style: ;">
		<div style="margin-top:3%;" class="col-md-6 col-md-offset-1 Articlebody"><?php echo nl2br($news_item['text']);?></div>
		<div style="margin-top:3%;margin-bottom:1%;" class="col-md-4 Articlebody"><img class="img-responsive"  src='<?php echo base_url();?>uploads/<?php echo $newitemLoc ?>'></div>
		</div>
		<br>
		<?php echo validation_errors(); ?>

		<?php 
		$name = $news_item['slug'];
		$add = "news/".$name; 
		echo form_open($add) ?>
		<div class="container col-md-offset-2">
		<div class="star-rating col-md-4 " style="margin-top:4%; margin-bottom:5%;">
									  	<input type="radio" name="rating" value="1"><i></i>
									 	<input type="radio" name="rating" value="2"><i></i>
									  	<input type="radio" name="rating" value="3"><i></i>
									 	<input type="radio" name="rating" value="4"><i></i>
									 	<input type="radio" name="rating" value="5"><i></i>
										</div>
										<p><?php echo $this->session->flashdata('feedback'); ?><p>
											<p><?php print_r($this->session->userdata('item2') ) ?></p>
										<div class="col-md-4 col-md-offset-3 " style="margin-top:3%; margin-bottom:5%;margin-right:15%;">
										<input style="margin-top:2%;" type="submit" name="submit" value="Rate" class="btn btn-lg btn-warning dropdown-toggle "></input>
										<a style="margin-top:2%;" href='<?php echo base_url()."index.php/". "news"?>' class="btn btn-lg btn-warning dropdown-toggle ">Back </a>
										</div>

									</div>

									<div class="container col-md-offset-2">
									<div class="col-md-4;" style="margin-top:%;">Average Rating:</div>
										<div class="col-md-1"></div>
									
								<div class="col-md-2" style="margin-top:-3%;" >
									<?php if(round($news_item['rating']) == 1){
										?>
										<img class="img-responsive" height="42" width="42" src='<?php echo base_url()."assets/ThriftshopTheme/img/Number-1-icon.png"?>'>
									  	<?php
									} elseif (round($news_item['rating']) == 2){
										?>
										<img class="img-responsive" height="42" width="42" src='<?php echo base_url()."assets/ThriftshopTheme/img/Number-2-icon.png"?>'>
										<?php

									} elseif (round($news_item['rating']) == 3) {
										?>
										<img class="img-responsive" height="42" width="42" src='<?php echo base_url()."assets/ThriftshopTheme/img/Number-3-icon.png"?>'>
									  	<?php
									} elseif (round($news_item['rating']) == 4) {
										?>
										<img class="img-responsive" height="42" width="42"  src='<?php echo base_url()."assets/ThriftshopTheme/img/Number-4-icon.png"?>'>
									  	<?php
									} elseif (round($news_item['rating']) == 5) {
										?>
										<img class="img-responsive" height="42" width="42"  src='<?php echo base_url()."assets/ThriftshopTheme/img/Number-5-icon.png"?>'>
									  	<?php
									} ?>	
									</div>
								</div>

		</form>
		</div>
<div class="container col-md-offset-3">
		<div class="fb-comments" data-href="https://www.facebook.com/emir.gluhbegovic" data-numposts="5" data-colorscheme="light"></div>
	</div>

		</section>