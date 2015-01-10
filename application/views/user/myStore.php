

<style>
.small_pic{
    padding:5px;
    float:left;
    border: 3px solid whitesmoke ;
    margin-top:4px;
    border-radius:3px;
}
</style>
         
          <div style="padding-right: 0px;"class="col-md-12">
  <div id="wrapper">

        <!-- Navigation -->
        <nav style="background-color:#2f343b;"class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Thrift Shop</a>
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
            <style>
            .myactive {
                color:#a3c756 !important;
            }

            </style>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav" style="height:100%;">
                    <li class="active">
                        <a style="padding-top: 20.5px;"class="myactive" href="<?php echo base_url(); ?>index.php/user/myStore"><i class="fa fa-fw fa-dashboard"></i> Add a post</a>
                    </li>
                    <li>
                        <a style="padding-top: 20.5px;" href="<?php echo base_url(); ?>index.php/user/get_item_view"><i class="fa fa-fw fa-edit"></i> Edit Posts</a>
                    </li>
                    <li>
                        <a style="padding-top: 20.5px;" href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Views</a>
                    </li>
                    <li>
                        <a style="padding-top: 20.5px;" href="<?php echo base_url(); ?>index.php/user/get_comments"><i class="fa fa-fw fa-table"></i> Comments</a>
                    </li>
                    
            
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper" style="padding-top:45px; padding-right: 0px; padding-left: 0px;">

            <div class="container-fluid" style="padding-right: 0px;padding-left: 0px;">

                <!-- Page Heading -->
               
                <!-- /.row -->

                
                <!-- /.row -->
                <?php if($notify_message != "") {  ?>

<div id="pop_up" style="position:absolute; z-index:1000000; margin-left:25%;width:440px; height:50px; ">
      <div class="panel panel-primary">
                            <div class="panel-heading">
                                 <?php  echo "Successfull"?>
   
                          </div>
                         <p> <?php echo $notify_message . " added to products </br>
                         you now have: $product_count active products" ?></p>
                       </div>
            

            </div>

<?php
 } ?>


                <div class="row" style="margin-top:0px;background-color: deepskyblue; padding-top:20px;margin-right: 2px;">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-list fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $product_count ?></div>
                                        <div>Active Ads!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-search fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">12</div>
                                        <div>New Views!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $comment_count;?></div>
                                        <div>New Comments!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">1</div>
                                        <div>Alerts!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <!-- /.row -->
<div class="row" style="background-color: whitesmoke;padding-top: 20px;">
                    <div class="col-lg-8">
                        <div class="panel panel-default">
                       <div style=""class="panel-heading">
                                <h3 style="font-weight: bold;font-size: 16px;scolor: rgb(96,96,96);" class="panel-title"><i class="fa fa-newspaper-o fa-fw"></i> Post an Ad</h3>
                            </div>
                        <div class="panel-body">
              <?php
              if ($pic_progress =='' && $product_id==''){ 
              echo form_open('user/createItem',array('id'=>'frm', 'class'=>'frm')) ?>

              <div class="form-group">  
                <label>Title</label>
                <input type="text" class="form-control" id="ItemName" name="ItemName" placeholder="Enter Item Name">
              </div>
          </br>

              <div class="form-group" id="descHolder">
              <label>Description</label> 
                <textarea  class="form-control" id="ItemDescription"  name="ItemDescription" placeholder="Enter Item Description"></textarea>
              </div>
 </br>
              <div class="form-group"> 
                <label>Category</label> 
                <input type="text" class="form-control" id="ItemCategory"  name="ItemCategory" placeholder="Enter Item Category">
              </div>
 </br>

              <div class="form-group"> 
                <label>Price</label> 
                <input type="number" class="form-control" id="ItemPrice" name="ItemPrice" placeholder="Enter Item Price">
              </div>
 </br>

<!--
              <div class="form-group" id="picHolder">
                <label for="ItemPicture">File input</label> <input type="file" id="ItemPicture">
  <link href="<?php //echo base_url(); ?>resources/css/dropzone.css" type="text/css" rel="stylesheet" />
<script src="<?php //echo base_url(); ?>resources/dropzone.js"></script>     !-->          

      

 

             <center>
              <button style="color: #fff;font-size:15px; font-weight:bold;background-color: #2ba8db; border:0px; width:200px; " class="btn btn-primary"type="submit" id="sender" >Submit</button>
                     </center>
                       </form>
              <script>
              $(".sender").click(function(){
 $(".upload").show();

});
              </script>
              <?php  }
              elseif($product_id !=='' && $pic_progress==''){
                echo form_open_multipart('upload/do_upload',array('id'=>'upload', 'class'=>'upload_two'));
                
              ?>
              

              <input type="hidden" value="<?php echo $product_id; ?>" name="product_id" />

                 <h4 style=" width:100%;">  Upload a picture</h4>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="Upload" />

</form>
               <?php 
                } elseif($product_id !=='' && $pic_progress!==''){
        echo form_open_multipart('upload/do_upload',array('id'=>'upload', 'class'=>'upload_one'));
                
              ?>
              <h5 style=" width:100%;">  Upload another picture</h5>

              <input type="hidden" value="<?php echo $product_id; ?>" name="product_id" />
<input type="file" Name="userfile" size="20" />
<?php
foreach ($prev_pic as $pic ) {
   echo' <img class= '.'"'."small_pic".'"'.' style="width:50px; height:50px;  "src="'. base_url().'uploads/'.$pic['pic_id'].'"'.' class= '.'"'.' p_imger'.$image['product_id'].'"'.'>';

}
 ?>
<h5 style="font-size:smaller; width:100%;float:right"> press complete to finish</h5>
    
<input style= "float:right; padding:2px;margin:2px;"type="submit" value="Complete" name="complete" />
<input style= "float:right; padding:2px; margin:2px;"type="submit" value="Upload" />

<script>
 $( "#complete" ).submit(function() {
     $.ajax({
            type:'POST',
            url:'<?php echo base_url("upload/complete_pic"); ?>',
            success:function(data){
                
            }
        });
});
</script>

</form>

        <?php } ?>          </div>
                    </div>
                    </div> <div class="col-lg-4">                 <?php echo $error;?>


             </div>



                          <div class="col-lg-4">
   <div class="panel panel-default" id="foreachtest">
                            <div class="panel-heading">
                                <h3 class="panel-title" style="font-weight: bold;font-size: 16px;scolor: rgb(96,96,96);"><i class="fa fa-clock-o fa-fw"></i> Older Ads</h3>
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

$(document).ready(function() {
   window.setTimeout("fadeMyDiv();", 3000); //call fade in 3 seconds
 }
)

function fadeMyDiv() {
   $("#pop_up").fadeOut('slow');
}


$(document).ready(function(){
      $(".navbar-default").remove();
    $(".hidden_notification").slideUp();
    $(".btn1").hide();
  //  $(".pop_up").

   //$(".pop_up").css("visibility","visible");

   // $(".upload").hide();

   //  $(".upload_two").hide();

  $(".btn1").click(function(){
    $(".hidden_notification").slideUp();
    $(".btn2").show();
    $(".btn1").hide();
    $(".pop_up").fadeOut("slow");

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
  

