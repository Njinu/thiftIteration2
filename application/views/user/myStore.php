          <script type="text/javascript">

          var controller = 'user';
          var base_url = '<?php echo site_url(); //you have to load the "url_helper" to use this function ?>';

          $(document).ready ( function(){
            $.ajax({

              'url' : base_url + '/' + controller + '/get_item_view',
                              'type' : 'POST', //the way you want to send data to your URL
                              'data' : {'type' : <?php echo $this->session->userdata('id') ?> },
                              'success' : function(data){ //probably this request will return anything, it'll be put in var "data"
                                  var container = $('#table'); //jquery selector (get element by id)
                                  if(data){
                                    container.html(data);
                                  }
                                }
                              });
          });         
          </script>

          <script>
   $(function(){
       $("#frm").submit(function(){
         dataString = $("#frm").serialize();
 
         $.ajax({
           type: "POST",
           url: "<?php echo base_url(); ?>index.php/user/createItem",
           data: dataString,
 
           success: function(data){
              location.reload();
           }
 
         });
 
         return false;  //stop the actual form post !important!
 
      });
   });
</script>


          <div class="container" style="margin-top:10%">
            <div class="col-md-4">
              <?php echo form_open('user/createItem',array('id'=>'frm')) ?>

              <div class="form-group">  
                <input type="text" class="form-control" id="ItemName" name="ItemName" placeholder="Enter Item Name">
              </div>

              <div class="form-group"> 
                <input type="text" class="form-control" id="ItemDescription"  name="ItemDescription" placeholder="Enter Item Description">
              </div>

              <div class="form-group"> 
                <input type="text" class="form-control" id="ItemCategory"  name="ItemCategory" placeholder="Enter Item Category">
              </div>

              <div class="form-group"> 
                <input type="number" class="form-control" id="ItemPrice" name="ItemPrice" placeholder="Enter Item Price">
              </div>

              <div class="form-group">
                <label for="ItemPicture">File input</label>
                <input type="file" id="ItemPicture">
              </div>

              <button  type="submit"  class="btn btn-default">Submit</button>
            </form>
          </div>

          <div class="col-md-8" id="table">

          </div>

