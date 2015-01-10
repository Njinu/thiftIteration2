
         

          <div class="col-md-12">
  <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <?php  foreach($product_comments as $product_comment){


?>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p><?php echo $product_comment["message"];?></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <?php } ?>
                     
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Njinu Kimani <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav" style="height:100%;">
                    <li class="active">
                        <a href="<?php echo base_url(); ?>index.php/user/myStore"><i class="fa fa-fw fa-dashboard"></i> Add a post</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/user/get_item_view"><i class="fa fa-fw fa-edit"></i> Edit Posts</a>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Views</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/user/get_comments"><i class="fa fa-fw fa-table"></i> Comments</a>
                    </li>
                    
            
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

       <div id="page-wrapper" style="padding-top:45px; background-color:ghostwhite;">

            <div class="container-fluid" style="background-color: ghostwhite;">

               <style>
.panel-body figure.free:before {
background: #72d08d;
border-radius: 50%;
color: #fff;
content: attr(data-content);
font-size: 9px;
font-weight: 500;
height: 40px;
right:40px;
letter-spacing: 1px;
line-height: 40px;
position: absolute;
text-align: center;
top: 40 px;
width: 40px;
z-index: 1;

}
.panel-body figure:hover.free:before {
content: attr();
font-size: 9px;
transition: all 0.3s ease-out 0s;
-moz-transition: all 0.3s ease-out 0s;
-webkit-transition: all 0.3s ease-out 0s;
transform: rotate(360deg);

}
               </style>
              
            

                <!-- /.row -->
<div class="row" style="padding-top: 20px;">
                    <div class="col-lg-8">
                        <div class="panel panel-default">
                       <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-newspaper-o fa-fw"></i> Comments</h3>
                            </div>
                        <div class="panel-body">
<?php foreach ($product_comments as $key ) {
?>
<p style="width:50%;"> " <?php echo $key['message'];?>   "  </p>
  
   <figure class="free">
</figure>   
<?php
foreach ($comment_user as $user) {
if($key['user_id']==$user['id']){

?>
<p style="font-style: oblique; color:silver;">from: <?php echo $user['firstname']?> <?php echo $user['lastname']?>
    <?php foreach ($products as $prod ) {
        if($prod['id']==$key['product_id']){ 
            $p_key=$key['product_id']
     ?>
 on <a href="<?php echo base_url(); ?>index.php/user/get_item_view/<?php echo $p_key ?>" > <span> <?php echo $prod['name']  ;?></span> </a></p>

<?php
}
	}
}	


}
}

    ?>                  
 </div>
                    </div>
                    </div> <div class="col-lg-4">                 <?php echo $error;?>
    

             </div>



                          <div class="col-lg-4">
   <div class="panel panel-default" id="foreachtest">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Recent views</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <?php 
                                     

  //  echo element('message', $product_comments);

  // foreach ($product_comments as $comment): $product_likes = $comment['likes']; 
           // echo $product_likes;

    //        endforeach
                                    ?>
                                <?php 
                                $i==0;
                                foreach ($products as $product): $product_name = $product['name']; 
                                if ($product['status']==0){  $product_status="Inactive"; }
                                elseif($product['status']==1){$product_status="Active";}
                                else {$product_status="Sold";}  if($i<2){ $i=$i+1;?>

                                    <a href="get_item_view/<?php echo $product['id']?>" class="list-group-item">
                                        <span class="badge"><?php echo $product_status; ?></span>
                                        <img src="" class="fa fa-fw fa-calendar"></i> <?php echo $product_name ?>
                                    </a>
                                  <?php } 
                                  else{ ?>   
                                    <a href="get_item_view/<?php echo $product['id']?>" class="list-group-item hidden_notification" id="">
                                        <span class="badge"><?php echo $product_status; ?></span>
                                        <img src="" class="fa fa-fw fa-calendar"></i> <?php echo $product_name ?>
                                    </a>

                                
                                <?php }endforeach ?>
                                </div>
                                <div class="text-right">
                                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
      $(".navbar-default").remove();
    $(".hidden_notification").slideUp();
    $(".btn1").hide();
   // $(".upload").hide();

   //  $(".upload_two").hide();

  $(".btn1").click(function(){
    $(".hidden_notification").slideUp();
    $(".btn2").show();
    $(".btn1").hide();
  });
  $(".btn2").click(function(){
    $(".hidden_notification").slideDown();
   $(".btn1").show();
   $(".btn2").hide();
  });
});
</script>

                                    <a class="btn2" >View All  <i class="fa fa-arrow-circle-right"></i></a>
                                    <a class="btn1" >Hide  <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
          </div>

<script src='<?php echo base_url()."assets/ThriftshopTheme/js/sellerDash/jquery.js"?>'></script>
<script src='<?php echo base_url()."assets/ThriftshopTheme/js/sellerDash/bootstrap.min.js"?>'></script>
<script src='<?php echo base_url()."assets/ThriftshopTheme/js/sellerDash/plugins/morris/raphael.min.js"?>'></script>
<script src='<?php echo base_url()."assets/ThriftshopTheme/js/sellerDash/plugins/morris/morris.min.js"?>'></script>
<script src='<?php echo base_url()."assets/ThriftshopTheme/js/sellerDash/plugins/morris/morris-data.js"?>'></script>

<?php echo script_tag('assets/ThriftshopTheme/modernizr.custom.js'); ?>
<?php echo script_tag('assets/ThriftshopTheme/js/sellerDash/bootstrap.min.js'); ?>
<?php echo script_tag('assets/ThriftshopTheme/js/sellerDash/plugins/morris/raphael.min.js'); ?>
<?php echo script_tag('assets/ThriftshopTheme/js/sellerDash/plugins/morris/morris.min.js'); ?>
<?php echo script_tag('assets/ThriftshopTheme/js/sellerDash/plugins/morris/morris-data.js'); ?>
  <?php if($this->session->flashdata('fancy') != "") { ?>



<script type="text/javascript">

   $(document).ready(
    function(){

      
             jQuery.noConflict();
           

        $.fancybox('<div style="height: 90px;padding-left:20px;padding-right:20px;line-height: 90px;color:#2980b9"><?php echo $this->session->flashdata('fancy') ?></div>');
    
        

    });

$('figure').hover(function(){
    $(this).attr('data-content','bar');
});



   </script>
<?php } ?>