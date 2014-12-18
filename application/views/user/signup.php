<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<body style="background: url('<?php echo base_url()."assets/ThriftshopTheme/img/hd-wallpaper-6.jpg"?>') no-repeat  ;">



             <nav style="background-color: rgba(0, 0, 0, 0.9);" class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                       <a style="font-family: 'Kristi', cursive;font-weight: 300;color:white; " class="navbar-brand page-scroll" href='<?php echo base_url()."index.php"?>'><img  style="height:300%; margin-top:-35%;" src='<?php echo base_url()."assets/ThriftshopTheme/img/Le Vibe-Fina_simple fontl.png"?>' class="img-responsive" alt="Responsive image"/></a>
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

                         <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href='<?php if($this->session->userdata('email') == ""){ echo base_url()."index.php/". "user";} ?>' ><?php if ($this->session->userdata('email') != "") {echo $this->session->userdata('email');} else echo "Login";?></a></li>
                                    <li><a   href='<?php if($this->session->userdata('email') != ""){ echo base_url()."index.php/". "cart";} else echo base_url()."index.php/". "user/signup" ?>'><?php if ($this->session->userdata('email') != "") {echo 'View Cart';} else echo "Register";?></a></li>
                                    <li><a href='<?php echo base_url()."index.php/". "user/logout"?>'><?php if ($this->session->userdata('email') != "") {echo "Logout";} else echo "";?></a></li>
                                    
                                </ul>
                            </li> -->
                       
                        </ul>
                    </div>
                            

                            
                           
                        </ul>
                    </div>
                   
                </div>
            
            </nav>
            <div class="container" >
 
 <div style="margin-top:25%;">

	<?php

	echo form_open('user/signup_validation');

	// echo validation_errors();
	?>
	
	<div class="col-md-4">
<br>
	
<div class='input-group' style='color:white;'><span class='input-group-addon'>Email</span>
    <input style="color:black;" type="text" value='<?php echo set_value('email'); ?>' class="form-control" for="email" name="email" placeholder='<?php echo form_error('email'); ?>' />
</div>
    <?php

	?>
</div>

	<div class="col-md-4 ">
		<br>
	
<div class='input-group' style='color:white;'><span class='input-group-addon'>Password</span>
    <input style="color:black;" type="text" class="form-control" for="password" name="password" placeholder='<?php echo form_error('password'); ?>' />
</div>
    <?php
?>
</div>

	<div class="col-md-4">
		<br>

<div class='input-group'  style='color:white;'><span class='input-group-addon'>Confirm Password</span>
    <input style="color:black;" type="text" class="form-control" for="cpassword" name="cpassword" placeholder='<?php echo form_error('cpassword'); ?>' />
</div>

</div>

	<div class="col-md-12" style="margin-top:5%;">
	<center>
	<?php
	$opts5 = 'class = "btn btn-info btn-lg"';
	echo " <br> <p style='color:black;'>";
	echo form_submit('signup_submit','Sign up',$opts5);
	echo "</p>";

	echo form_close();

	?>
	</center>
	</div>
	</div>
</div>
</body>
