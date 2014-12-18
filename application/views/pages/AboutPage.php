 <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


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

 <div id="portfolio"  >
            <br>
            <section  >
                <div class="container"  style="background-color:rgba(1000, 1000, 1000, 0.64); border-radius:20px">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 style="font-family: 'Josefin Sans', sans-serif;color:black;font-size:250%;">About</h2>
                            <!-- <hr style="border-color:rgba(157, 157, 157, 0.8);max-width: 450px;"> -->
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-8 col-md-offset-2 " style="font-size:110%;" >
                           <p style=""><hr class="" style="border-color:white;">The objective of Living the Energy Vibe is to promote the connection between information and action. LE Vibe aims to improve the accessibility of knowledge on the subject of sustainable development. The 1987 Brundtland Commission defined sustainable development as “meeting the needs of the present without compromising the ability of future generations to meet their own needs”. This is of course a very broad definition, and there is a lot of debate around the concept and how to achieve it in reality. LE Vibe promotes this debate! – we do not all have to agree on everything, but thinking about sustainable development, and talking about it, is all part of the path to understanding. Being conscious involves understanding not only how our behaviour affects us as individuals, but also how it affects society, and the environment. John Donne wrote poems about it, Dennis Brown sang about it: “No man is an Island.” The information bites will cover topics such as consumerism, privilege, participation, to name a few. Anyone is welcome to comment and engage in debate on a post – the more we can learn from each other the better. As Albert Einstein said “No problem can be solved from the same level of consciousness that created it. <hr style="border-color:white;"></p>
                        </div>

                        <div class="col-md-8 col-md-offset-2" style="font-size:110%; margin-top:-5%;">
                            <p style="font-size:200%;"><hr class="" style="border-color:white;">The products created by LE Vibe are based on the ideals of sustainable development for South Africa. The products are designed to be good for the individual - healthy and beautiful. Products are designed and produced in South Africa with the aim of creating employment and utilizing local skills, so they are good for society. Last but not least, using natural alternatives that are reusable and recyclable is relieves pressure off the amount of waste we produce, so it is good for the environment. Once you have made the step to find new ideas and understand them, it is time to Live the Energy Vibe! There is story about a man walking along a shore covered with washed-up, dying starfish when he notices a boy throwing them back into the ocean, one by one. Sceptical, the man says to the boy that there are kilometres of beach and hundreds of starfish, and that he’ll never make a difference. As the boy throws a starfish back into the ocean, he says, “I just made a difference to that one”. The moral of the story is that each and every person is able to make difference. If through our action we could turn this into a collaborative effort, we are all able to be part of creating sustainable development in South Africa. </p>
                        </div>                  
                    </div>
                </div>
            </section>
            </div>