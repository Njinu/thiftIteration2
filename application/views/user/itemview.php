<script type="text/javascript">

var controller = 'user';
var base_url = '<?php echo site_url(); //you have to load the "url_helper" to use this function ?>';

function load_data_ajax(type){
  $.ajax({
    'url' : base_url + '/' + controller + '/deleteItem',
                    'type' : 'POST', //the way you want to send data to your URL
                    'data' : {'type' : type},
                    'success' : function(data){ //probably this request will return anything, it'll be put in var "data"
                    location.reload();
                  }
                });
}           
</script>

<script>
   $(function(){
       $("#frm2").submit(function(){
         dataString = $("#frm2").serialize();
 
         $.ajax({
           type: "POST",
           url: "<?php echo base_url(); ?>index.php/user/edititem",
           data: dataString,
 
           success: function(data){
              location.reload();
           }
 
         });
 
         return false;  //stop the actual form post !important!
 
      });
   });
</script>


<script type="text/javascript">
$(document).on( "click", '#editbutton2',function(e) {

  var name = $("h3[id$=_name]").attr('id');

        // var name = $("h3[id$=_name]").text();

        document.getElementById("myModalLabel").innerHTML= name;

      });
</script>

<!-- Modal -->












         

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

    //cho element('message', $product_comment);

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
                <ul class="nav navbar-nav side-nav">
                    <li >
                        <a href="myStore"><i class="fa fa-fw fa-dashboard"></i> Add Post</a>
                    </li>
                     <li class="active">
                        <a href="get_item_view"><i class="fa fa-fw fa-edit"></i> Edit Posts</a>
                    </li>
            
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Views</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Comments</a>
                    </li>
                   
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper" style="padding-top:45px;">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thrift Shop</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                
                <!-- /.row -->

                <div class="row">
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
<div class="row">
                    <div class="col-lg-10">
                        <div class="panel panel-default">
                       <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-newspaper-o fa-fw"></i> Update products</h3>
                            </div>
                        <div class="panel-body">


<?php $int = 0 ?>
<?php foreach ($list as $calendar_item): $newitemdate = $calendar_item['date_created']; $findsummary =  $calendar_item['description'];  ?>


  <?php 
  $int +=1;
  $slug = $calendar_item['slug'];       
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

 <style>
 img {display: block; margin: 0 auto;}
 </style>
<script>

function edit_pic(get_id)
{
    // $(".pimg_gap").hide();
    //$(".pimg").hide();
     //$(".pimg_holder").hide(1000);
var pic_id= 'img.p_img'+get_id;
if ($(pic_id)){
    alert(pic_id);
//$(pic_id).css({"width":"50px", "height":"50px", "position":"relative", "visibility":"visible" });
   // $(pic_id).show(1000);
  //  $(".pimg_holder").show(1000);
    //$(".pimg_gap").show(1000);
}
   }

   function complete_pic(get_id){
//$(".pimg_gap").hide();
//$(".pmg").hide();
//$(".pimg_holder").hide(100);
//var pic_id= 'img.p_img'+get_id;

//$(pic_id).css({"width":"0px", "height":"50px", "position":"relative", "visibility":"visible" });
// $(pic_id).hide();

   }
$(document).ready(function(){
$(".pimg").mouseenter(function(){

$(this).css({"width":"80px", "height":"80px" });



});
$(".pimg").mouseleave(function(){

$(this).css({"width":"50px", "height":"50px", "position":"relative", "visibility":"visible" });



});
});

function deletePic(img_id)
{

}
</script>
 <div class="">
<!-- <picture>
  <source 
    media="(max-width: 650px)"
    srcset='<?php echo base_url();?>uploads/<?php echo $newitemLoc ?>'>
  <source 
    media="(max-width: 465px)"
    srcset="images/kitten-sitting.png">
  <img 
    src='<?php echo base_url();?>uploads/<?php echo $newitemLoc ?>' 
    alt="a cute kitten">
  </picture> -->
  <br>
  <h4 id='<?php echo $int ?>_name'><?php echo $calendar_item['name'] ?> | <?php echo $newitemdateDAY ; ?> <?php echo $monthName; ?></h4>
  <p><?php echo $calendar_item['description'] ?> </p>
  <a href=''></a>

 <a style="color:black" onclick="" data-toggle="modal" data-target='#<?php echo 'pic_edt'. $calendar_item['id'] ?>' id="editbutton">Manage Pics</a>

    <a style="color:black" onclick="" data-toggle="modal" data-target='#<?php echo $int ?>ModalEdit' id="editbutton">Edit Details</a>
  <p> <!-- <a <?php if(!$slug ){echo "";}else{echo "href='news/$slug'";}?>><?php if(!$slug ){ echo "coming soon";}else{echo "Read more...";} ?></a> -->
  </p>
</div>

<div class="modal fade" id='<?php echo $int ?>ModalEdit' tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $calendar_item['name'] ?></h4>
      </div>
      <div class="modal-body">

          <?php echo form_open('user/edititem',array('id'=>'frm2')) ?>
          <div class="form-group">
            <label for="exampleInputEmail1">Item Name</label>
            <input type="text" class="form-control" id="itemname2" name="itemname2" placeholder='<?php echo $calendar_item['name'] ?>' value= '<?php echo $calendar_item['name'] ?>'>
          </div>
          
          <div class="form-group">
            <label for="exampleInputPassword1">Item Description</label>
            <input type="text" class="form-control" id="itemdescription2" name="itemdescription2" placeholder='<?php echo $calendar_item['description'] ?>' value='<?php echo $calendar_item['description'] ?>'>
          </div>
           <div class="form-group">
            <label for="exampleInputEmail1">Item Price</label>
            <input type="number" class="form-control" id="itemprice2" name="itemprice2" placeholder='<?php echo $calendar_item['price'] ?>' value='<?php echo $calendar_item['price'] ?>'>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Item Status</label>
            <input type="text" class="form-control" id="itemstatus2" name="itemstatus2" placeholder='<?php echo $calendar_item['status'] ?>' value='<?php echo $calendar_item['status'] ?>'>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Item Category</label>
            <input type="text" class="form-control" id="itemcat2" name="itemcat2" placeholder='<?php echo $calendar_item['category'] ?>' value='<?php echo $calendar_item['category'] ?>'>
            <input type="hidden" class="form-control" id="itemid" name="itemid" placeholder="Category" value='<?php echo $calendar_item['id'] ?>'>
          </div>
     
          <button type="submit" class="btn btn-default">Submit</button>
        </form>

      </div>
      <div class="modal-footer">
       <button onclick="load_data_ajax('<?php echo $calendar_item['product_id']  ?>')" type="button" class="btn btn-default" >Delete</button>
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       <button type="button" class="btn btn-primary">Save changes</button>
     </div>
   </div>
 </div>
</div>


<style type="text/css">
</style>


<div class="modal fade" id='<?php echo'pic_edt'. $calendar_item['id'] ?>' tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $calendar_item['name'] ?></h4>
      </div>
      <div class="modal-body">
 <?php echo form_open('user/delete_pic',array('id'=>'delete_pic')) ?>
          <?php 
$pos=$calendar_item['id'];
foreach ($product_images as $image) {

    if(($image['product_id'])==$pos){
?>
<div style="float:left;">
<input type='checkbox'  style="float:left;  "name='<?php echo 'delete_pic[]'?>' value='<?php echo $image['id']?>' id="image_checkbox"/><label for="image_checkbox"><?php

 echo'<img  style="width:50px; height:50px;  "src="'. base_url().'uploads/'.$image['pic_id'].'"'.' class= '.'"'.' p_imger'.$image['product_id'].'"'.'>';
    //}
?></label> 
</div>

<?php
}

}


?>     
<input type="submit" class="btn btn-default" value="Delete"></input>
       </form>
      </div>
      <div class="modal-footer">

       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     </div>
   </div>
 </div>
</div>



<?php endforeach ?>
  
       </div>
                    </div>
                    </div> 



                          <div class="col-lg-6">
   <div class="panel panel-default" id="foreachtest">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Manage Pictures</h3>

                            </div>
                            <div class="panel-body">
                                <div class="pimg_holder list-group <?php echo $image['product_id'];?>">
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
                                else {$product_status="Sold";}  ?>

                                    

                                
                                <?php endforeach ?>
                                </div>
                                <div class="text-right">
                                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
      $(".navbar-default").remove();
    $(".hidden_notification").slideUp();
    $(".btn1").hide();
//    $(".pimg_holder").hide();
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

                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Donut Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Tasks Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <span class="badge">just now</span>
                                        <i class="fa fa-fw fa-calendar"></i> Calendar updated
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">4 minutes ago</span>
                                        <i class="fa fa-fw fa-comment"></i> Commented on a post
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">23 minutes ago</span>
                                        <i class="fa fa-fw fa-truck"></i> Order 392 shipped
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">46 minutes ago</span>
                                        <i class="fa fa-fw fa-money"></i> Invoice 653 has been paid
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">1 hour ago</span>
                                        <i class="fa fa-fw fa-user"></i> A new user has been added
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">2 hours ago</span>
                                        <i class="fa fa-fw fa-check"></i> Completed task: "pick up dry cleaning"
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">yesterday</span>
                                        <i class="fa fa-fw fa-globe"></i> Saved the world
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">two days ago</span>
                                        <i class="fa fa-fw fa-check"></i> Completed task: "fix error on sales page"
                                    </a>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Order #</th>
                                                <th>Order Date</th>
                                                <th>Order Time</th>
                                                <th>Amount (USD)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>3326</td>
                                                <td>10/21/2013</td>
                                                <td>3:29 PM</td>
                                                <td>$321.33</td>
                                            </tr>
                                            <tr>
                                                <td>3325</td>
                                                <td>10/21/2013</td>
                                                <td>3:20 PM</td>
                                                <td>$234.34</td>
                                            </tr>
                                            <tr>
                                                <td>3324</td>
                                                <td>10/21/2013</td>
                                                <td>3:03 PM</td>
                                                <td>$724.17</td>
                                            </tr>
                                            <tr>
                                                <td>3323</td>
                                                <td>10/21/2013</td>
                                                <td>3:00 PM</td>
                                                <td>$23.71</td>
                                            </tr>
                                            <tr>
                                                <td>3322</td>
                                                <td>10/21/2013</td>
                                                <td>2:49 PM</td>
                                                <td>$8345.23</td>
                                            </tr>
                                            <tr>
                                                <td>3321</td>
                                                <td>10/21/2013</td>
                                                <td>2:23 PM</td>
                                                <td>$245.12</td>
                                            </tr>
                                            <tr>
                                                <td>3320</td>
                                                <td>10/21/2013</td>
                                                <td>2:15 PM</td>
                                                <td>$5663.54</td>
                                            </tr>
                                            <tr>
                                                <td>3319</td>
                                                <td>10/21/2013</td>
                                                <td>2:13 PM</td>
                                                <td>$943.45</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
          </div>

<script src='<?php echo base_url()."assets/ThriftshopTheme/js/sellerDash/jquery.js"?>'></script>
<script src='<?php echo base_url()."assets/ThriftshopTheme/js/sellerDash/plugins/morris/raphael.min.js"?>'></script>
<script src='<?php echo base_url()."assets/ThriftshopTheme/js/sellerDash/plugins/morris/morris.min.js"?>'></script>
<script src='<?php echo base_url()."assets/ThriftshopTheme/js/sellerDash/plugins/morris/morris-data.js"?>'></script>

<?php echo script_tag('assets/ThriftshopTheme/modernizr.custom.js'); ?>

<?php echo script_tag('assets/ThriftshopTheme/js/sellerDash/plugins/morris/raphael.min.js'); ?>
<?php echo script_tag('assets/ThriftshopTheme/js/sellerDash/plugins/morris/morris.min.js'); ?>
<?php echo script_tag('assets/ThriftshopTheme/js/sellerDash/plugins/morris/morris-data.js'); ?>
