
<?php echo link_tag('assets/ThriftshopTheme/multiform/style.css'); ?>



<body style="background: url('<?php echo base_url()."assets/ThriftshopTheme/img/hd-wallpaper-6.jpg"?>') no-repeat  ;">
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


             <nav style="background-color: rgba(0, 0, 0, 0.9);" class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a style="font-family: 'Kristi', cursive;font-weight: 300;color:white; " class="navbar-brand page-scroll" href='<?php echo base_url()."index.php"?>'>LE Vibe</a>
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
                            

                            
                           <!--  <li class="page-scroll">
                                <a id="signup"  href='<?php echo base_url()."index.php/". "user/signup"?>'>Sign Up</a>
                            </li> -->
                        </ul>
                    </div>
                   
                </div>
            
            </nav>

     <!--  <?php echo validation_errors(); ?> -->

<?php echo form_open('order/create') ?>
<div class="" style="margin-top:10%;">
<!-- multistep form -->


    
    <!-- fieldsets -->
 <div class="container">

<div id="step1" class="col-md-5 col-md-offset-3 stepactive step1in" >
        <h2 class="Articlehead">Personal Details</h2>
        <p class="Articlebody" style="color:black">Step 1</p>
        <input style="color:black;" type="text" value='<?php if( form_error('fname')== TRUE) { echo form_error('fname');} else echo set_value('fname'); ?>' class="text_field" for="fname" name="fname" placeholder="First Name (Required)" /><br/>
        <input style="color:black;" type="text" value='<?php if( form_error('lname')== TRUE) { echo form_error('lname');} else echo set_value('lname'); ?>' class="text_field" for="lname" name="lname" placeholder="Last Name (Required)" /><br/>
        <input style="color:black;" type="text" value='<?php if( form_error('cont')== TRUE) { echo form_error('cont');} else echo set_value('cont'); ?>' class="text_field" for="cont" name="cont" placeholder="Contact (Required)" /><br/>
        <label style="color:white;">Gender</label><br/>
        <input style="color:black;" value="male" name="gender" class = "rad" for="gender" type="radio"/>Male
        <input style="color:black;" value="female" name="gender" class = "rad" for="gender" type="radio"/>Female<br/><br>
         <a type="button" href= '<?php echo base_url()."index.php/". "cart"; ?>'  class="btn btn-info custom"> Back<a/>
        <input type="button" onclick= 'disableDiv()' name="next" class="btn btn-info" value="Next" />
       
      </div>

  

    <div id="step2" class="col-md-5 step1in stepinactive" style="margin-top:-3%" >
        <h2 class="Articlehead">Delivery Address</h2>
        <p style="color:black;" class="Articlebody" style="color:black">Step 2</p>
        
        <input style="color:black;" type="text" class="text_field" for="company" name="company" placeholder="Company Name (Optional)" /><br/>
        <input style="color:black;" type="text" class="text_field" for="vat" name="vat" placeholder="Vat Number (Optional)" /><br/>
        <input style="color:black;" type="text" value='<?php if( form_error('post')== TRUE) { echo form_error('post');} else echo set_value('post'); ?>' class="text_field" for="post" name="post" placeholder="Post Code (Required)" /><br/>
         <input style="color:black;" type="text" value='<?php if( form_error('suburb')== TRUE) { echo form_error('suburb');} else echo set_value('suburb'); ?>' class="text_field" for="suburb" name="suburb" placeholder="Suburb (Required)" /><br/>
        <input style="color:black;" type="text" value='<?php if( form_error('city')== TRUE) { echo form_error('city');} else echo set_value('city'); ?>' class="text_field" for="city" name="city" placeholder="City (Required)" /><br/>
        <select style="color:black;" class="options" for="prov" name="prov">
        <option>--Province--</option>
        <option>--Not in South Africa--</option>
        <option>Eastern Cape</option>
        <option>Free State</option>
        <option>Gauteng</option>
        <option>Kwazulu-Natal</option>
        <option>Limpopo</option>
        <option>Mpumalanga</option>
        <option>North West</option>
        <option>Westen Cape</option>
        </select><br/>
        <textarea style="color:black;" for="address" value='<?php if( form_error('address')== TRUE) { echo form_error('address');} else echo set_value('address'); ?>' name="address" placeholder="Street Address (Required)"></textarea><br/>

        <select style="color:black;" id="countries" for="countries"  name="countries">
<option value="AF">Afghanistan</option>
<option value="AX">Åland Islands</option>
<option value="AL">Albania</option>
<option value="DZ">Algeria</option>
<option value="AS">American Samoa</option>
<option value="AD">Andorra</option>
<option value="AO">Angola</option>
<option value="AI">Anguilla</option>
<option value="AQ">Antarctica</option>
<option value="AG">Antigua and Barbuda</option>
<option value="AR">Argentina</option>
<option value="AM">Armenia</option>
<option value="AW">Aruba</option>
<option value="AU">Australia</option>
<option value="AT">Austria</option>
<option value="AZ">Azerbaijan</option>
<option value="BS">Bahamas</option>
<option value="BH">Bahrain</option>
<option value="BD">Bangladesh</option>
<option value="BB">Barbados</option>
<option value="BY">Belarus</option>
<option value="BE">Belgium</option>
<option value="BZ">Belize</option>
<option value="BJ">Benin</option>
<option value="BM">Bermuda</option>
<option value="BT">Bhutan</option>
<option value="BO">Bolivia</option>
<option value="BA">Bosnia and Herzegovina</option>
<option value="BW">Botswana</option>
<option value="BV">Bouvet Island</option>
<option value="BR">Brazil</option>
<option value="IO">British Indian Ocean Territory</option>
<option value="BN">Brunei Darussalam</option>
<option value="BG">Bulgaria</option>
<option value="BF">Burkina Faso</option>
<option value="BI">Burundi</option>
<option value="KH">Cambodia</option>
<option value="CM">Cameroon</option>
<option value="CA">Canada</option>
<option value="CV">Cape Verde</option>
<option value="KY">Cayman Islands</option>
<option value="CF">Central African Republic</option>
<option value="TD">Chad</option>
<option value="CL">Chile</option>
<option value="CN">China</option>
<option value="CX">Christmas Island</option>
<option value="CC">Cocos (Keeling) Islands</option>
<option value="CO">Colombia</option>
<option value="KM">Comoros</option>
<option value="CG">Congo</option>
<option value="CD">Congo, The Democratic Republic of The</option>
<option value="CK">Cook Islands</option>
<option value="CR">Costa Rica</option>
<option value="CI">Cote D'ivoire</option>
<option value="HR">Croatia</option>
<option value="CU">Cuba</option>
<option value="CY">Cyprus</option>
<option value="CZ">Czech Republic</option>
<option value="DK">Denmark</option>
<option value="DJ">Djibouti</option>
<option value="DM">Dominica</option>
<option value="DO">Dominican Republic</option>
<option value="EC">Ecuador</option>
<option value="EG">Egypt</option>
<option value="SV">El Salvador</option>
<option value="GQ">Equatorial Guinea</option>
<option value="ER">Eritrea</option>
<option value="EE">Estonia</option>
<option value="ET">Ethiopia</option>
<option value="FK">Falkland Islands (Malvinas)</option>
<option value="FO">Faroe Islands</option>
<option value="FJ">Fiji</option>
<option value="FI">Finland</option>
<option value="FR">France</option>
<option value="GF">French Guiana</option>
<option value="PF">French Polynesia</option>
<option value="TF">French Southern Territories</option>
<option value="GA">Gabon</option>
<option value="GM">Gambia</option>
<option value="GE">Georgia</option>
<option value="DE">Germany</option>
<option value="GH">Ghana</option>
<option value="GI">Gibraltar</option>
<option value="GR">Greece</option>
<option value="GL">Greenland</option>
<option value="GD">Grenada</option>
<option value="GP">Guadeloupe</option>
<option value="GU">Guam</option>
<option value="GT">Guatemala</option>
<option value="GG">Guernsey</option>
<option value="GN">Guinea</option>
<option value="GW">Guinea-bissau</option>
<option value="GY">Guyana</option>
<option value="HT">Haiti</option>
<option value="HM">Heard Island and Mcdonald Islands</option>
<option value="VA">Holy See (Vatican City State)</option>
<option value="HN">Honduras</option>
<option value="HK">Hong Kong</option>
<option value="HU">Hungary</option>
<option value="IS">Iceland</option>
<option value="IN">India</option>
<option value="ID">Indonesia</option>
<option value="IR">Iran, Islamic Republic of</option>
<option value="IQ">Iraq</option>
<option value="IE">Ireland</option>
<option value="IM">Isle of Man</option>
<option value="IL">Israel</option>
<option value="IT">Italy</option>
<option value="JM">Jamaica</option>
<option value="JP">Japan</option>
<option value="JE">Jersey</option>
<option value="JO">Jordan</option>
<option value="KZ">Kazakhstan</option>
<option value="KE">Kenya</option>
<option value="KI">Kiribati</option>
<option value="KP">Korea, Democratic People's Republic of</option>
<option value="KR">Korea, Republic of</option>
<option value="KW">Kuwait</option>
<option value="KG">Kyrgyzstan</option>
<option value="LA">Lao People's Democratic Republic</option>
<option value="LV">Latvia</option>
<option value="LB">Lebanon</option>
<option value="LS">Lesotho</option>
<option value="LR">Liberia</option>
<option value="LY">Libyan Arab Jamahiriya</option>
<option value="LI">Liechtenstein</option>
<option value="LT">Lithuania</option>
<option value="LU">Luxembourg</option>
<option value="MO">Macao</option>
<option value="MK">Macedonia, The Former Yugoslav Republic of</option>
<option value="MG">Madagascar</option>
<option value="MW">Malawi</option>
<option value="MY">Malaysia</option>
<option value="MV">Maldives</option>
<option value="ML">Mali</option>
<option value="MT">Malta</option>
<option value="MH">Marshall Islands</option>
<option value="MQ">Martinique</option>
<option value="MR">Mauritania</option>
<option value="MU">Mauritius</option>
<option value="YT">Mayotte</option>
<option value="MX">Mexico</option>
<option value="FM">Micronesia, Federated States of</option>
<option value="MD">Moldova, Republic of</option>
<option value="MC">Monaco</option>
<option value="MN">Mongolia</option>
<option value="ME">Montenegro</option>
<option value="MS">Montserrat</option>
<option value="MA">Morocco</option>
<option value="MZ">Mozambique</option>
<option value="MM">Myanmar</option>
<option value="NA">Namibia</option>
<option value="NR">Nauru</option>
<option value="NP">Nepal</option>
<option value="NL">Netherlands</option>
<option value="AN">Netherlands Antilles</option>
<option value="NC">New Caledonia</option>
<option value="NZ">New Zealand</option>
<option value="NI">Nicaragua</option>
<option value="NE">Niger</option>
<option value="NG">Nigeria</option>
<option value="NU">Niue</option>
<option value="NF">Norfolk Island</option>
<option value="MP">Northern Mariana Islands</option>
<option value="NO">Norway</option>
<option value="OM">Oman</option>
<option value="PK">Pakistan</option>
<option value="PW">Palau</option>
<option value="PS">Palestinian Territory, Occupied</option>
<option value="PA">Panama</option>
<option value="PG">Papua New Guinea</option>
<option value="PY">Paraguay</option>
<option value="PE">Peru</option>
<option value="PH">Philippines</option>
<option value="PN">Pitcairn</option>
<option value="PL">Poland</option>
<option value="PT">Portugal</option>
<option value="PR">Puerto Rico</option>
<option value="QA">Qatar</option>
<option value="RE">Reunion</option>
<option value="RO">Romania</option>
<option value="RU">Russian Federation</option>
<option value="RW">Rwanda</option>
<option value="SH">Saint Helena</option>
<option value="KN">Saint Kitts and Nevis</option>
<option value="LC">Saint Lucia</option>
<option value="PM">Saint Pierre and Miquelon</option>
<option value="VC">Saint Vincent and The Grenadines</option>
<option value="WS">Samoa</option>
<option value="SM">San Marino</option>
<option value="ST">Sao Tome and Principe</option>
<option value="SA">Saudi Arabia</option>
<option value="SN">Senegal</option>
<option value="RS">Serbia</option>
<option value="SC">Seychelles</option>
<option value="SL">Sierra Leone</option>
<option value="SG">Singapore</option>
<option value="SK">Slovakia</option>
<option value="SI">Slovenia</option>
<option value="SB">Solomon Islands</option>
<option value="SO">Somalia</option>
<option value="ZA">South Africa</option>
<option value="GS">South Georgia and The South Sandwich Islands</option>
<option value="ES">Spain</option>
<option value="LK">Sri Lanka</option>
<option value="SD">Sudan</option>
<option value="SR">Suriname</option>
<option value="SJ">Svalbard and Jan Mayen</option>
<option value="SZ">Swaziland</option>
<option value="SE">Sweden</option>
<option value="CH">Switzerland</option>
<option value="SY">Syrian Arab Republic</option>
<option value="TW">Taiwan, Province of China</option>
<option value="TJ">Tajikistan</option>
<option value="TZ">Tanzania, United Republic of</option>
<option value="TH">Thailand</option>
<option value="TL">Timor-leste</option>
<option value="TG">Togo</option>
<option value="TK">Tokelau</option>
<option value="TO">Tonga</option>
<option value="TT">Trinidad and Tobago</option>
<option value="TN">Tunisia</option>
<option value="TR">Turkey</option>
<option value="TM">Turkmenistan</option>
<option value="TC">Turks and Caicos Islands</option>
<option value="TV">Tuvalu</option>
<option value="UG">Uganda</option>
<option value="UA">Ukraine</option>
<option value="AE">United Arab Emirates</option>
<option value="GB">United Kingdom</option>
<option value="US">United States</option>
<option value="UM">United States Minor Outlying Islands</option>
<option value="UY">Uruguay</option>
<option value="UZ">Uzbekistan</option>
<option value="VU">Vanuatu</option>
<option value="VE">Venezuela</option>
<option value="VN">Viet Nam</option>
<option value="VG">Virgin Islands, British</option>
<option value="VI">Virgin Islands, U.S.</option>
<option value="WF">Wallis and Futuna</option>
<option value="EH">Western Sahara</option>
<option value="YE">Yemen</option>
<option value="ZM">Zambia</option>
<option value="ZW">Zimbabwe</option>
</select>

        <input type="button" onclick= 'disableDiv3()' name="previous" class="btn btn-info" value="Previous" />
         <input type="submit" name="submit" class="btn btn-info" value="Order" />
   </div>

     <!--  <div id="step3" class="col-md-5 stepinactive">
        <h2 class="Articlehead">Confirm Order</h2>
        <p class="Articlebody" style="color:black">Step 3</p>
        <input style="color:black;" type="text" class="text_field" name="email" placeholder="First Name" /><br/>
        <input style="color:black;" type="password" class="text_field" name="pass" placeholder="Surname" /><br/>
        <input style="color:black;" type="password" class="text_field" name="cpass" placeholder="Confirm Password" /><br/>
         <input type="button" onclick= 'disableDiv4()' class="btn btn-info" value="Previous" />
        <input type="submit" name="submit" class="btn btn-info" value="Order" />
    </div> -->

    <!-- <div id="step4" class="col-md-5 stepinactive">
        <h2 class="Articlehead">Create your account</h2>
        <p class="Articlebody" style="color:black">Step 1</p>
        <input style="color:black;" type="text" class="text_field" name="email" placeholder="First Name" /><br/>
        <input style="color:black;" type="password" class="text_field" name="pass" placeholder="Surname" /><br/>
        <input style="color:black;" type="password" class="text_field" name="cpass" placeholder="Confirm Password" /><br/>
         <a type="button" href= '<?php echo base_url()."index.php/". "cart"; ?>'  class="btn btn-info custom"> Back<a/>
        <input type="button" onclick= 'disableDiv()' name="next" class="btn btn-info" value="Next" />
         <input type="button" onclick= 'disableDiv4()' class="btn btn-info" value="Previous" />
        <input type="submit" class="btn btn-info" value="Submit" />
    </div> -->
      
</div>
</form>
</div>
</div>
</form>
</body>



<script type="text/javascript">
 function disableDiv() {
    // alert("Hello It works");
 
step1.className = "stepinactive";
step2.className="col-md-5 col-md-offset-3 stepactive ";
  }

  function disableDiv2() {
    // alert("Hello It works");

step1.className = "stepinactive";
step2.className="stepinactive";
step3.className="col-md-5 col-md-offset-3 stepactive ";
  }

  function disableDiv3() {
    // alert("Hello It works");

step1.className = "col-md-5 col-md-offset-3 stepactive ";
step2.className="stepinactive";
step3.className="stepinactive";
  }

function disableDiv4() {
    // alert("Hello It works");
 
step1.className = "stepinactive";
step2.className="col-md-5 col-md-offset-3 stepactive ";
step3.className="stepinactive";
  }

</script>