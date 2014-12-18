<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/jquery.js"></script>
<script type="text/javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/json2.js"></script>

<script>
    $(document).ready(function(){
      $("#search").keyup(function(){
        if($("#search").val().length>3){
        $.ajax({
            type: "post",
            url: '<?php echo base_url()."index.php/". "news";?>',
            cache: false,               
            data:'search='+$("#search").val(),
            success: function(response){
                $('#finalResult').html("");
                var obj = JSON.parse(response);
                if(obj.length>0){
                    try{
                        var items=[];   
                        $.each(obj, function(i,val){                                            
                            items.push($('<li/>').text(val.title));
                        }); 
                        $('#finalResult').append.apply($('#finalResult'), items);
                    }catch(e) {     
                        alert('Exception while request..');
                    }       
                }else{
                    $('#finalResult').html($('<li/>').text("No Data Found"));       
                }       
                
            },
            error: function(){                      
                alert('Error while request..');
            }
        });
        }
        return false;
      });
    });
</script>


<body style="background-color:white;">
<div id="main">
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

	            <div class="container" style="margin-top:4%;background-color:rgba(1000, 1000, 1000, 0.6); border-radius:20px; ">

	                <div class="row">
	                    <div class="col-lg-12 text-center">
	                        <h2 style="margin-top:-6%;margin-bottom:2%;" >Info Bytes</h2>
	                      
	                        <hr class="star-primary">
	                    </div>

                        <div class="col-sm-8 col-md-8 ">
                        <form class="navbar-form" role="search">
                        <div class="input-group">
                        <input type="text" class="form-control" placeholder='</span>' name="search" id="search">
                        <ul id="finalResult"></ul>
                        <div class="input-group-btn">

                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
        </div>
	                </div>

	                <!-- Button trigger modal -->

	                <?php
 			
			$lovevibes = array("#D01800","darkred","#9C0000","#F32E0C","#A1000E");
	       	shuffle($lovevibes);
			$freedomvibes = array("#004E45","#009A88","#053F67","#00297E");
	       	shuffle($freedomvibes);
			$harmonyvibes = array("#CB6B00","#F37918","#BE5400","#B57900");
	       	shuffle($harmonyvibes);
	       	$newvibes = array("#1C1C1C","#585870","#1D1D3D","#2B2F3B");
	       	shuffle($newvibes);
            $newsitemtitle = "";
            $newitemcatch = "";
             $newitemid = "";
               $newitemdate = "";
	        ?>

<?php foreach ($latestnews as $news_item):  $newsitemtitle = $news_item['title'];
    $newitemcatch = $news_item['Catchphrase']; $newitemid = $news_item['id']; $newitemdate = $news_item['Date'];$newitemLoc = $news_item['location']; ?>
<?
   
  ?>
 
        <?php endforeach ?>

        <?php 
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
<div class="gr">
        <div class="post-summary  post-summary--latest">
            <header class="post-summary__header">
                <a href="/blog/5-of-the-most-innovative-influencer-campaigns/">
                    <div class="post-summary__image" style="background-image: url('<?php echo base_url();?>uploads/<?php echo $newitemLoc ?>');"></div>
                </a>
                <p class="post-date  post-date--small"><span class="post-date__day"><?php echo $newitemdateDAY?></span> <span class="post-date__month"><?php echo $result?></span></p>
                
                                    <p class="image-credit"><a href="http://thetomkatstudio.com" target="_blank"></a></p>
                                
            </header>
            <div class="post-summary__content">
                <p class="post-date"><span class="post-date__day"><?php echo $newitemdateDAY?></span> <span class="post-date__month"><?php echo $result?></span> </p>

                <h4 class="post-summary__title"><a href="/blog/5-of-the-most-innovative-influencer-campaigns/"><?php echo $newsitemtitle?></a></h4>

                <p><?php echo $newitemcatch ?></p>

                <a class="btn btn-warning" href="news/<?php echo $news_item['slug'] ?>" title="Read the entire &ldquo;5 of the most innovative influencer campaigns&rdquo; post">Read More</a>
            </div>
        
    </div>

	        
	<?php foreach ($news as $news_item): ?>
		   
			<?php
     
	       	$itemvibe =  $news_item['vibe'];

	       if($itemvibe == 'Love')
	       {
	       		
	       		$vibe = reset($lovevibes);
	       } elseif ($itemvibe == 'Freedom') {
	       		
	       		$vibe = reset($freedomvibes);
	       } elseif ($itemvibe == 'Harmony') {
	       
	       	$vibe = reset($harmonyvibes);
	       } else
	       $vibe = reset($newvibes);

           if($news_item['id'] == $newitemid) {
           continue;
           }

            $newitemdate2 = $news_item['Date'];
           $dateString2=date($newitemdate2);
            $t2 = explode('-',$dateString2);
            $newitemdate2YEAR = $t2[0]; //month
            $newitemdate2MON= $t2[1]; //day
            $newitemdate2DAY = $t2[2]; //year

             $monthNum2 = $newitemdate2MON;
 $monthName2 = date("F", mktime(0, 0, 0, $monthNum2, 10));
 $thenewitemdate2MON = $monthName2; // Output: May

 $result2 = substr($thenewitemdate2MON, 0, 3);

	         ?>

<div class="post-summary">
            <header class="post-summary__header">
                <a href="/blog/our-favourite-summer-recipes/">
                    <div  class="post-summary__image" style="background-image: url('<?php echo base_url();?>uploads/<?php echo $news_item['location'] ?>'); "></div>
                </a>
                <p class="post-date  post-date--small"><span class="post-date__day"><?php echo $newitemdate2DAY ?></span> <span class="post-date__month"><?php echo $result2 ?></span></p>
                
                                    <p class="image-credit"> <a href="http://ashleyneese.com/" target="_blank"></a></p>
                                
            </header>
            <div class="post-summary__content">
                <h4 class="post-summary__title" ><a  href="/blog/our-favourite-summer-recipes/"><?php echo $news_item['title'] ?></a></h4>

                <p><?php echo $news_item['Catchphrase'] ?></p>

                <a class="btn btn-warning" href="news/<?php echo $news_item['slug'] ?>" title="Read the entire &ldquo;Our Favourite Summer Recipes&rdquo; post">Read More</a>
            </div>
        </div>

       



	                   <!--  <div class="col-md-4" >
	                
	                    	 <div class="thumbnail " style="outline: none;box-shadow: 0 0 60px <?php echo $vibe ?>; border-color:<?php echo $vibe ?>;border-radius:10px;"> 
	                       	<img height="10%;" src='<?php echo base_url()."/assets/ThriftshopTheme/img/ThriftShopcover.png"?>'>

	                           <div class="caption">
	                           <div >
	                             <h3 class="articlehead2" style="color:black"><?php echo $news_item['title'] ?></h3>
	                             <hr style="border-color:<?php echo $vibe ?>;border-radius:10px;">
	                              <p class="articlebody" style="color:black;height:120px;"><?php echo $news_item['Catchphrase'] ?></p>
	                              
	                              <p><a href="news/<?php echo $news_item['slug'] ?>" class="btn btn-info" role="button">View article</a></p>
	                             </div> 
	                             </div>
	                        </div>
	                    </div> -->
	                     
	<?php endforeach ?>
	               

	            </div>
</div>
</div>
	        </section>

	      

	        </body>



	       <script type="text/javascript">


var safeColors = ['#50C878','#50C878','#9966CC','#ED9121','#ffda03','#e32636','#a61a1d','#2980b9','#00CED1','#CCCCCC','#130a06','#00688b','#c8caad','#ff6347'];
var rand = function() {
    return Math.floor(Math.random()*14);
};



var randomColor = function() {
    var r = safeColors[rand()];
    
    return r;
};

$(document).ready(function() {
    
        $('.thumbnail').each(function() {
            $(this).css('background',randomColor());
        });
 
});


</script>