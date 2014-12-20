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

 <div class="jumbotron">
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
  <h3 id='<?php echo $int ?>_name'><?php echo $calendar_item['name'] ?> | <?php echo $newitemdateDAY ; ?> <?php echo $monthName; ?></h3>
  <p><?php echo $calendar_item['description'] ?> </p>
  <a href=''></a>
  <a style="color:black" onclick="" data-toggle="modal" data-target='#<?php echo $int ?>ModalEdit' id="editbutton">Edit</a>
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
            <input type="number" class="form-control" id="itemid" name="itemid" placeholder="Category" value='<?php echo $calendar_item['product_id'] ?>'>
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

<?php endforeach ?>

<script type="text/javascript">
$(document).on( "click", '#editbutton2',function(e) {

  var name = $("h3[id$=_name]").attr('id');

        // var name = $("h3[id$=_name]").text();

        document.getElementById("myModalLabel").innerHTML= name;

      });
</script>

<!-- Modal -->
