<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-pencil-square-o"></i> Regsiter</h4>
      </div>
      <div class="modal-body">

     <?php echo form_open('user/signup_validation') ?>

      <div class="step1" id="step1">
  <div class="form-group">
    <label for="fname">First Name</label>
    <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter your first name">
  </div>
   <div class="form-group">
    <label for="lname">Last Name</label>
    <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter your last name">
  </div>
   <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
  </div>
   <button onclick="NextStep()" type="button" class="btn btn-default">Next</button>
</div>

<div id="step3" style="display:none;">

<div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
  </div>

  <div class="form-group">
    <label for="passconfirm">Confirm Password</label>
    <input type="password" class="form-control" id="passconfirm" name="passconfirm" placeholder="Confirm password">
  </div>
  <button onclick="PreviousStep2()" type="button" class="btn btn-default">Back</button>
<button onclick="NextStep2()" type="button" class="btn btn-default">Next</button>

  </div>

  <div class="step2" id="step2" style="display:none;">
    <div class="form-group">
    <label for="cellnumber">Cell Number</label>
    <input type="number" class="form-control" id="cellnumber" name="cellnumber" placeholder="Enter cell number">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address1" name="address1" placeholder="Line 1">
    <input type="text" class="form-control" id="address2" name="address2" placeholder="Line 2">
  </div>
   <div class="form-group">
    <label for="pcode">Postal Code</label>
    <input type="number" class="form-control" id="pcode" name="pcode" placeholder="Enter your postal code">
  </div>

 <div class="checkbox">
    <label>
      <input type="checkbox"> I am above 18 years of age. I have read and agreed to abide by the thethriftshop.co.za user agreement I recognise that all selling and buying activity undertaken by me on the site is legally binding and I commit to honour all purchases and sales.
    </label>
  </div>
   <button onclick="PreviousStep()" type="button" class="btn btn-default">Back</button>
  <button type="submit" class="btn btn-default">Submit</button>
</div>
</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
       <!--  <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModallogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-pencil-square-o"></i> Login </h4>
      </div>
      <div class="modal-body">

     <?php echo form_open('user/login_validation') ?>
	
	<div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
     
</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
       <!--  <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
function NextStep() {

   document.getElementById('step1').style.display = "none";
     document.getElementById('step3').style.display = "block";
   
  }

  function PreviousStep() {

   document.getElementById('step3').style.display = "block";
     document.getElementById('step2').style.display = "none";
   
  }

  function PreviousStep2() {

   document.getElementById('step1').style.display = "block";
     document.getElementById('step3').style.display = "none";
   
  }

  function NextStep2() {

   document.getElementById('step3').style.display = "none";
     document.getElementById('step2').style.display = "block";
   
  }
</script>