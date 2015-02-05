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

   <script>
  $(function(){
   $("#frmUser2").submit(function(){
     dataString = $("#frmUser2").serialize();

     $.ajax({
       type: "POST",
       url: "<?php echo base_url(); ?>index.php/user/updateseller",
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
  <div class="page-content" style="padding-top:45px; padding-right: 0px; padding-left: 0px;">

    <!--Account Personal Info-->
    <section>
      <div class="container">
        <div class="row space-top">

          <!--Items List-->
          <div class="col-sm-8 space-bottom">
            <h2 class="title">My account</h2>
            <hr>
            <h3>Seller Details</h3>

            <?php if(!$seller['nick_name']) { ?>

            <div class="row">
              <?php echo form_open('user/submitseller',array('id'=>'frmUser','class'=>'col-md-12 personal-info')) ?>
              <div class="row">
                <div class="form-group col-sm-12">
                  <label for="api_first_name">Nick Name</label>
                  <input type="text" class="form-control" name="nickname" id="nickname" value='<?php echo $seller['nick_name']; ?>' placeholder='<?php echo $seller['nick_name']; ?>'   required>
                  <input type="hidden" class="form-control" name="userid" id="userid"  value='<?php echo $me['id']; ?>' required>
                </div>
                <div class="form-group col-sm-12">
                  <label for="api_last_name">Bio</label>
                  <input type="hidden" id="firstname" name="firstname" value='<?php echo $me['firstname']; ?>'>
                  <input type="hidden" id="lastname" name="lastname" value='<?php echo $me['lastname']; ?>'>
                  <textarea type="text" class="form-control" cols="40" rows="4" name="bio" id="bio" required><?php echo $seller['bio']; ?></textarea>
                </div>
                <div class="form-group col-sm-12"> 
                  <label>Location</label> 
                  <select class="form-control" id="location">
                    <option class="placeholder" selected="selected" disabled="disabled"><?php echo $seller['location']; ?></option>
                    <option value="Eastern-Cape">Eastern Cape</option>
                    <option value="Free-State">Free State</option>
                    <option value="Gauteng" >Gauteng</option>
                    <option value="KwaZulu-Natal">KwaZulu-Natal</option>
                    <option value="Limpopo">Limpopo</option>
                    <option value="Mpumalanga">Mpumalanga</option>
                    <option value="North-West">North West</option>
                    <option value="Northern-Cape">Northern Cape</option>
                    <option value="Western-Cape">Western Cape</option>
                  </select>
                  <input type="hidden" value='<?php echo $seller['location']; ?>' class="form-control" id="locationid" name="locationid" placeholder="Enter Item Name">
                </div>
                 <div class="form-group col-sm-12">
                  <label for="api_first_name">UCT Registered?</label>
                  <input type="text" class="form-control" name="UCTemail" id="UCTemail" value='<?php echo $seller['UCTemail']; ?>' placeholder='<?php echo $seller['UCTemail']; ?>'   required>
                </div>
              </div>     
            </div>                 
            <input type="submit" class="btn btn-success" value="Save changes">
          </form>
            <?php }else { ?>
                <div class="row">
              <?php echo form_open('user/updateseller',array('id'=>'frmUser2','class'=>'col-md-12 personal-info')) ?>
              <div class="row">
                <div class="form-group col-sm-12">
                  <label for="api_first_name">Nick Name</label>
                  <input type="text" class="form-control" name="nickname" id="nickname" value='<?php echo $seller['nick_name']; ?>' placeholder='<?php echo $seller['nick_name']; ?>'   required>
                  <input type="hidden" class="form-control" name="userid" id="userid"  value='<?php echo $me['id']; ?>' required>
                </div>
                <div class="form-group col-sm-12">
                  <label for="api_last_name">Bio</label>
                  <input type="hidden" id="firstname" name="firstname" value='<?php echo $me['firstname']; ?>'>
                  <input type="hidden" id="lastname" name="lastname" value='<?php echo $me['lastname']; ?>'>
                  <textarea type="text" class="form-control" cols="40" rows="4" name="bio" id="bio" required><?php echo $seller['bio']; ?></textarea>
                </div>
                <div class="form-group col-sm-12"> 
                  <label>Location</label> 
                  <select class="form-control" id="location">
                    <option class="placeholder" selected="selected" disabled="disabled"><?php echo $seller['location']; ?></option>
                    <option value="Eastern-Cape">Eastern Cape</option>
                    <option value="Free-State">Free State</option>
                    <option value="Gauteng" >Gauteng</option>
                    <option value="KwaZulu-Natal">KwaZulu-Natal</option>
                    <option value="Limpopo">Limpopo</option>
                    <option value="Mpumalanga">Mpumalanga</option>
                    <option value="North-West">North West</option>
                    <option value="Northern-Cape">Northern Cape</option>
                    <option value="Western-Cape">Western Cape</option>
                  </select>
                  <input type="hidden" value='<?php echo $seller['location']; ?>' class="form-control" id="locationid" name="locationid" placeholder="Enter Item Name">
                </div>
                 <div class="form-group col-sm-12">
                  <label for="api_first_name">UCT Registered?</label>
                  <input type="text" class="form-control" name="UCTemail" id="UCTemail" value='<?php echo $seller['UCTemail']; ?>' placeholder='<?php echo $seller['UCTemail']; ?>'   required>
                </div>
              </div>     
            </div>                 
            <input type="submit" class="btn btn-success" value="Save changes">
          </form>
            <?php } ?>

        </div>
      </div>



      <!--Sidebar-->

    </div>
  </div>
</section><!--Account Personal Info Close-->

<!--Catalog Grid-->


</div><!--Page Content Close-->

<script type="text/javascript">
 $("#location").change(function () {
        var end = this.value;
         $('#locationid').val(end);
    });
</script>