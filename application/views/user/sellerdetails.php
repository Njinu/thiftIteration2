  <script>
   $(function(){
       $("#frmUser").submit(function(){
         dataString = $("#frmUser").serialize();
 
         $.ajax({
           type: "POST",
           url: "<?php echo base_url(); ?>index.php/user/submitseller",
           data: dataString,
 
           success: function(data){
              location.reload();
           }
 
         });
 
         return false;  //stop the actual form post !important!
 
      });
   });
   
</script>
  
  
  <!--Page Content-->
    <div class="page-content">
          
      <!--Account Personal Info-->
      <section>
        <div class="container">
          <div class="row space-top">
          
            <!--Items List-->
            <div class="col-sm-8 space-bottom">
              <h2 class="title">My account</h2>
             <hr>
              <h3>Seller Details</h3>
              
              <div class="row">
                <?php echo form_open('user/submitseller',array('id'=>'frmUser','class'=>'col-md-12 personal-info')) ?>
                  <div class="row">
                    <div class="form-group col-sm-12">
                      <label for="api_first_name">Nick Name</label>
                      <input type="text" class="form-control" name="nickname" id="nickname" placeholder="Add a Nickname"  required>
                       <input type="hidden" class="form-control" name="userid" id="userid"  value='<?php echo $me['id']; ?>' required>
                    </div>
                    <div class="form-group col-sm-12">
                      <label for="api_last_name">Bio</label>
                      <input type="hidden" id="firstname" name="firstname" value='<?php echo $me['firstname']; ?>'>
                      <input type="hidden" id="lastname" name="lastname" value='<?php echo $me['lastname']; ?>'>
                      <textarea type="text" class="form-control" name="bio" id="bio" placeholder="Write a bit about yourself" required></textarea>
                    </div>
                  </div>     
                  </div>                 
                  <input type="submit" class="btn btn-success" value="Save changes">
                </form>
               
    
              </div>
            </div>
            
            
            
            <!--Sidebar-->
            
          </div>
        </div>
      </section><!--Account Personal Info Close-->
      
      <!--Catalog Grid-->
     
      
    </div><!--Page Content Close-->
    
   