
	            <div class="container" style="margin-top:8%;">

	                

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

	       		$productarray = array();
	       		
	        ?>

	        <div class='row'>
    <div class='col-md-12'>
        <div class="carousel slide media-carousel" id="media">
            <div class="carousel-inner">
               

                    <div class="item @active">
                        <div class="row">
                           <?php foreach ($product as $product_item): ?>



		<?php



		$itemvibe =  $product_item['vibe'];

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
     
			 ?>

			<div class="col-md-4">        
	                    	 <div class="thumbnail" style ="background-color:<?php echo $vibe ?>">
	                         <img src='<?php echo base_url()."/assets/ThriftshopTheme/img/ThriftShopcover.png"?>'>
	                           <div class="caption">
	                             <h3 style="color:white"><?php echo $product_item['name'] ?></h3>
	                             <hr>
	                              <p style="color:white; height:200px; font-size:110%;" class=""><?php echo $quote ?></p>
	                              <p><a href="store/<?php echo $product_item['slug'] ?>" class="btn btn-info" role="button">View Item</a></p>
	                             </div> 
	                        </div>
	                    </div>	 
		                                     
	<?php endforeach ?>
                        </div>
                    </div>

                   
                }
            </div>
            <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
            <a data-slide="next" href="#media" class="right carousel-control">›</a>
        </div>
    </div>
</div>

	

	<?php 

			

			
 		?>
	                 
	            </div>



	        

	        


	       

