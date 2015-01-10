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












         

           <div style="padding-right: 0px; background-color:ghostwhite;"class="col-md-12">
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
                   <style>
            .myactive {
                color:#a3c756 !important;
            }

            </style>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav" style="height:100%;">
                    <li >
                        <a style="padding-top: 20.5px;" href="<?php echo base_url(); ?>index.php/user/myStore"><i class="fa fa-fw fa-dashboard"></i> Add a post</a>
                    </li>
                    <li class="active">
                        <a class="myactive" style="padding-top: 20.5px;" href="<?php echo base_url(); ?>index.php/user/get_item_view"><i class="fa fa-fw fa-edit"></i> Edit Posts</a>
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

        <div id="page-wrapper" style="padding-top:45px; background-color:ghostwhite;">

            <div class="container-fluid" style="background-color: ghostwhite;">

               
                <!-- /.row -->
<div class="row" style="padding-top: 20px;">

                    <div class="col-lg-6 col-md-offset-3    ">
                        <div class="panel panel-default">
                       <div class="panel-heading" style="background-color: deepskyblue;">
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
 <div class="" style="border-bottom: 1px solid rgba(96,96,96,0.1);">
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
  <h4 id='<?php echo $int ?>_name'>
     <p style="width:70%; float:left;"><?php echo $calendar_item['name'] ?> </p>
 <p style="width:70%;float:left;"> <?php echo $calendar_item['description'] ?> </p>
         <?php 
$pos=$calendar_item['id'];
$img_count=0;
foreach ($product_images as $image) {
    if(($image['product_id'])==$pos &&$img_count==0){
?>
<p style="float:right;width:30%;">
<?php

 echo'<img  style="width:50px; height:50px;  "src="'. base_url().'uploads/'.$image['pic_id'].'"'.' class= '.'"'.' p_imger'.$image['product_id'].'"'.'>';
 $img_count++;
    //}
?>
</p>
<?php
}

}


?>
  <p style=" width:30%; color:silver; font-size:12px;">Category:<?php echo $calendar_item['category'] ?> </br>
  <span>Price:<?php echo $calendar_item['price'] ?></span> </p>
  <p style="float:left; width:30%; color:silver; font-size:12px;">Date Created:<?php echo $calendar_item['date_created'] ?> </p>
  <a href=''></a>
   
 <a  style="font-size:13px; float:right;color:cornflowerblue" onclick="" data-toggle="modal" data-target='#<?php echo 'pic_edt'. $calendar_item['id'] ?>' id="editbutton">Manage Pics</a>

    <a style="color:cornflowerblue;font-size:13px;" onclick="" data-toggle="modal" data-target='#<?php echo $int ?>ModalEdit' id="editbutton">Edit Details</a>
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
input[type=checkbox]:checked  {
  background-color:rgba(96,96,96,0.5); 
  opacity:1;
  } 

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
//echo $pos;
foreach ($product_images as $image) {
    if(($image['product_id'])==$pos){
?>
<div style="float:left;">
<input type='checkbox'  style="float:left;    height: 50px;width: 50px;   position: absolute; opacity:0;
}   "name='<?php echo 'delete_pic[]'?>' value='<?php echo $image['id']?>' id="image_checkbox"/><label for="image_checkbox" 
style="background: transparent url(<?php echo base_url().'uploads/'.$image['pic_id']?>) no-repeat 0 50%; width: 50px; height: 50px;
background-size: 50px 50px;" >
<?php

 //echo'<img  style="width:50px; height:50px;  "src="'. base_url().'uploads/'.$image['pic_id'].'"'.' class= '.'"'.' p_imger'.$image['product_id'].'"'.'>';
    //}
?></label> 
</div>

<?php
}

}


?>     
<input type="submit" class="btn btn-default" value="Delete"></input>
       </form>
<p>Add Pictures</p>
       <?php echo $error;?>

<?php echo form_open_multipart('upload/do_upload');?>
<input type="hidden" value="<?php echo $pos ?>" name="product_id" />
<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

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



                    
                </div>
                <div class="col-md-6 " style="">
                 <div class="panel panel-default">
                       <div style=""class="panel-heading">
                                <h3 style="font-weight: bold;font-size: 16px;scolor: rgb(96,96,96);" class="panel-title"><i class="fa fa-newspaper-o fa-fw"></i> Advert</h3>
                            </div>
                        <div class="panel-body" style="height:279px;">
Your store policy and support links here            
</div>
</div>
       </div>

                 <div class="col-md-4 col-md-offset-1" >
                 <div class="panel panel-default" style="height:279px;">
                       <div style=""class="panel-heading">
                                <h3 style="font-weight: bold;font-size: 16px;scolor: rgb(96,96,96);" class="panel-title"><i class="fa fa-newspaper-o fa-fw"></i> Policy</h3>
                            </div>
                        <div class="panel-body">
Advert here           
</div>
</div>
       </div>
               
                <!-- /.row -->
                <div class="col-md-3 " style="">

                </div>

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
