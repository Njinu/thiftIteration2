  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

  
  <body style="background-color:#50C878;">
<div id="main">
    <section class="" id="about" style="background: url('<?php echo base_url()."assets/ThriftshopTheme/tiles/fresh_snow.png"?>') repeat  ;">

      <nav style="background-color: rgba(0, 0, 0, 0.9);" class="navbar navbar-default navbar-fixed-top">
        <div class="container">

          <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
           <a style="font-family: 'Kristi', cursive;font-weight: 300;color:white; " class="navbar-brand page-scroll" href='<?php echo base_url()."index.php"?>'><img  style="height:300%; margin-top:-35%;" src='<?php echo base_url()."assets/ThriftshopTheme/img/Le Vibe-Fina_simple fontl.png"?>' class="img-responsive" alt="Responsive image"/></a>
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

                  <?php if($this->session->userdata('email') == "melony"){ 
                    ?>
                    <li class="page-scroll">
                      <a id="#"  href='<?php echo base_url()."index.php/". "admin/vieworders"; ?>'>Admin</a>
                    </li>
                    <?php 
                  } ?>

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

        </div>

      </nav>

      <!-- Button trigger modal -->


      <div class="container" style="margin-top:8%;background-color:rgba(1000, 1000, 1000, 0.6); border-radius:20px;">

       <div class="row">
         <div class="col-lg-12 text-center">
           <h2 style="margin-top:-6%;" >Le Store</h2>

           <hr class="star-primary">
         </div>
       </div>

       <div class="container-fluid well " style="margin-bottom:3%;">
        <?php echo link_tag('assets/ThriftshopTheme/multiform/style.css'); ?>
        <?php echo validation_errors(); ?>

<?php echo form_open('store') ?>
        <select style="color:black;" class="options col-md-3" for="cat" name="cat">
          <option>--Organise by Category--</option>
          <?php foreach ($product as $product_item): ?>
          
          <option><?php echo $product_item['category']; ?></option>


        <?php endforeach; ?>
      </select>

      <select style="color:black;" class="options col-md-3" for="vibe" name="vibe">
        <option>--Organise by Vibe--</option>        
        <option>Love</option> 
        <option>Harmony</option>
        <option>Freedom</option>     

      </select>

      <select style="color:black;" class="options col-md-3" for="price" name="price">
        <option>--Organise by Price--</option>        
        <option>Low to High</option> 
        <option>High to Low</option>       
      </select>

      

      <div class="col-md-3" style="margin-top:0.8%;"><input type="submit" name="submit" class="btn btn-info" value="Sort" /></div>
</form>
    </div>

    <?php
    $lovequotes = array("' Love is patient, love is kind. It does not envy, it does not boast, it is not proud. It does not dishonour others, it is not self-seeking, it is not easily angered, it keeps no record of wrongs. Love does not delight in evil but rejoices with the truth. It always protects, always trusts, always hopes, always perseveres (1 Corinthians 13:4-7). '", "' Love has nothing to do with what you are expecting to get — only with what you are expecting to give — which is everything (Katharine Hepburn in Me : Stories of My Life) '","' The more one judges, the less one loves (Honoré de Balzac). '","' You can transmute love, ignore it, muddle it, but you can never pull it out of you. I know by experience that the poets are right: love is eternal (E. M. Forster in A Room with a View). '","' Let us always meet each other with smile, for the smile is the beginning of love. (Mother Teresa) '","' Don't brood. Get on with living and loving. You don't have forever. (Leo Buscaglia) '","' Love many things, for therein lies the true strength, and whosoever loves much performs much, and can accomplish much, and what is done in love is done well. (Vincent Van Gogh) '");
    shuffle($lovequotes);
    $lovevibes = array("#D01800","darkred","#9C0000","#F32E0C","#A1000E");
    shuffle($lovevibes);

    $freedomquotes = array("' For to be free is not merely to cast off one's chains, but to live in a way that respects and enhances the freedom of others.(Nelson Mandela). '","' Emancipate yourselves from mental slavery, none but ourselves can free our minds! (Bob Marley). '","'The revelation of thought takes men out of servitude into freedom. (Ralph Waldo Emerson).'","' Freedom is what you do with what's been done to you. (Jean-Paul Sartre) '","' The only sure bulwark of continuing liberty is a government strong enough to protect the interests of the people, and a people strong enough and well enough informed to maintain its sovereign control over the government. (Franklin D. Roosevelt) '","' May we think of freedom, not as the right to do as we please, but as the opportunity to do what is right. (Peter Marshall) '","' Change does not roll in on the wheels of inevitability, but comes through continuous struggle. And so we must straighten our backs and work for our freedom. A man can't ride you unless your back is bent. (Martin Luther King, Jr.)'","'Freedom is never more than one generation away from extinction. We didn't pass it to our children in the bloodstream. It must be fought for, protected, and handed on for them to do the same. (Ronald Reagan) '");
    shuffle($freedomquotes);
    $freedomvibes = array("#004E45","#009A88","#053F67","#00297E");
    shuffle($freedomvibes);

    $harmonyquotes = array("' Always aim at complete harmony of thought and word and deed. Always aim at purifying your thoughts and everything will be well” (Mahatma Gandhi). '","' I have cherished the ideal of a democratic and free society in which all persons live together in harmony and with equal opportunities” (Nelson Mandela). '","' He who lives in harmony with himself lives in harmony with the universe” (Marcus Aurelius). '","' A wise woman recognizes when her life is out of balance and summons the courage to act to correct it, she knows the meaning of true generosity, happiness is the reward for a life lived in harmony, with a courage and grace” (Suze Orman).  '","' Happiness exists on earth, and it is won through prudent exercise of reason, knowledge of the harmony of the universe, and constant practice of generosity” (Jose Marti). '","' The way of the Creative works through change and transformation, so that each thing receives its true nature and destiny and comes into permanent accord with the Great Harmony: this is what furthers and what perseveres” (Alexander Pope). '");
    shuffle($harmonyquotes);
    $harmonyvibes = array("#CB6B00","#F37918","#BE5400","#B57900");
    shuffle($harmonyvibes);

    $newvibes = array("#1C1C1C","#585870","#1D1D3D","#2B2F3B");
    shuffle($newvibes);
    $increment=0;
    ?>

<div style="margin-left:7%;">
    <?php foreach ($product2 as $product_item): ?>
    
    <?php

    $itemvibe =  $product_item['vibe'];
    $increment+=1;
    if($itemvibe == 'Love')
    {
      $quote = reset($lovequotes);
      $vibe = reset($lovevibes);
    } elseif ($itemvibe == 'Freedom') {
      $quote = reset($freedomquotes);
      $vibe = reset($freedomvibes);
    } elseif ($itemvibe == 'Harmony') {
     $quote = reset($harmonyquotes);
     $vibe = reset($harmonyvibes);
   } else $quote = "no quote" and
   $vibe = reset($newvibes);
   $slug = $product_item['slug'];

   if($increment >1){
    ?><div class="col-md-1"></div> <?php
   }

   ?>

  



   <div class="thumbnail col-md-5" style ="outline: none;box-shadow: 0 0 50px <?php echo $vibe ?>; border-color:<?php echo $vibe ?>;border-radius:10px; ">
    <div class="col-md-4" style="margin-top:10%;">
     <img class="img-responsive" src='<?php echo base_url();?>uploads/<?php echo $product_item["location"] ?>' alt=''>
   </div>
   <div class="col-md-8">
     <div class="caption" >

       <h3 class="articlehead2" style="color:black"><?php echo $product_item['name'] ?></h3>
       <hr style ="border-color:<?php echo $vibe ?>;border-radius:10px;">
       <p class="ArticleBody2" style="color:black; height:150px; font-size:100%;" class=""><?php echo $quote ?></p>


     </div> 

   </div>
   <div class="col-md-4" style="margin-bottom:2%;">
     <a href="store/<?php echo $product_item['slug'] ?>" class="btn btn-info" role="button">View Item</a>
   </div>
  </div>




  <?php endforeach ?>
</div>




  </section>
  </div>
  </body>




  <script type="text/javascript">
  //Radnom Div Colors
  var safeColors = ['#50C878','#50C878','#9966CC','#ED9121','#ffda03','#e32636','#a61a1d','#2980b9','#00CED1','#CCCCCC','#130a06','#00688b','#c8caad','#ff6347'];
  var rand = function() {
    return Math.floor(Math.random()*14);
  };

  var randomColor = function() {
    var r = safeColors[rand()];

    return r;
  };

  $(document).ready(function() {

    $('.thumbnail2').each(function() {
      $(this).css('background',randomColor());
    });

  });

  $(document).ready(function() { $('#myModal').modal(options) });

  </script>

  


 