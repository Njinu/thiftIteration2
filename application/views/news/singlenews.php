<script type="text/javascript">
setTimeout('history.go(0);', 8000);
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>

<body style="background-color:#16a085;">

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

	       		$newsarray = array();
	       		
	        ?>
	        
	
    


	<?php foreach ($news as $news_item): ?>

		<?php
     
			$newsarray[]= $news_item;

			 

	       



	      

	         ?>

		                                     
	<?php endforeach ?>

	<?php 

			shuffle($newsarray);
			$displayednews = reset($newsarray);

		$itemvibe =  $displayednews['vibe'];

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
	              <div class="col-md-4" >


	                
	                    	 <div class="thumbnail" style="background-color:<?php echo $vibe ?>; border-radius:20px;"> 
	                    	 	<div id="progress_bar" class="ui-progress-bar ui-container">
            <div class="ui-progress" style="width: 79%;">
                <span class="ui-label" style="display:none;">Processing <b class="value">79%</b></span>
            </div><!-- .ui-progress -->
        </div><!-- #progress_bar -->
	                       	<img height="10%;" src='<?php echo base_url()."/assets/ThriftshopTheme/img/ThriftShopcover.png"?>'>

	                           <div class="caption">
	                           <div >
	                             <h3  style="color:white"><?php echo $displayednews['title'] ?></h3>
	                             <hr>
	                              <p style="color:white;"><?php echo $displayednews['Catchphrase'] ?></p>
	                              
	                              <p><a href="<?php echo base_url()."index.php/news/". $displayednews['slug'] ?>" class="btn btn-info" role="button">View article</a></p>
	                             </div> 
	                             </div>
	                        </div>
	                    </div>   
	            </div>

	            <style type="text/css">

@-webkit-keyframes animate-stripes {
  from {
    background-position: 0 0;
  }
  
  to {
   background-position: 44px 0;
  }
}    
  
.ui-progress-bar {
  position: relative;
  height: 35px;
  padding-right: 2px;
  background-color: #abb2bc;
  border-radius: 35px;
  -moz-border-radius: 35px;
  -webkit-border-radius: 35px;
  background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #b6bcc6), color-stop(1, #9da5b0));
  background: -moz-linear-gradient(#9da5b0 0%, #b6bcc6 100%);
  -webkit-box-shadow: inset 0px 1px 2px 0px rgba(0, 0, 0, 0.5), 0px 1px 0px 0px #FFF;
  -moz-box-shadow: inset 0px 1px 2px 0px rgba(0, 0, 0, 0.5), 0px 1px 0px 0px #FFF;
  box-shadow: inset 0px 1px 2px 0px rgba(0, 0, 0, 0.5), 0px 1px 0px 0px #FFF;
}      
  
.ui-progress {
  position: relative;
  display: block;
  overflow: hidden;
  height: 33px;
  -moz-border-radius: 35px;
  -webkit-border-radius: 35px;
  border-radius: 35px;
  -webkit-background-size: 44px 44px;
  background-color: #74d04c;
  background: -webkit-gradient(linear, 0 0, 44 44,
    color-stop(0.00, rgba(255,255,255,0.17)),
    color-stop(0.25, rgba(255,255,255,0.17)),
    color-stop(0.26, rgba(255,255,255,0)),
    color-stop(0.50, rgba(255,255,255,0)),
    color-stop(0.51, rgba(255,255,255,0.17)),
    color-stop(0.75, rgba(255,255,255,0.17)),
    color-stop(0.76, rgba(255,255,255,0)),
    color-stop(1.00, rgba(255,255,255,0))
  ), -webkit-gradient(linear, left bottom, left top, color-stop(0, #74d04c), color-stop(1, #9bdd62));
  background: -moz-repeating-linear-gradient(top left -30deg,
    rgba(255,255,255,0.17),
    rgba(255,255,255,0.17) 15px,
    rgba(255,255,255,0) 15px,
    rgba(255,255,255,0) 30px
  ), -moz-linear-gradient(#9bdd62 0%, #74d04c 100%);
  -webkit-box-shadow: inset 0px 1px 0px 0px #dbf383, inset 0px -1px 1px #58c43a;
  -moz-box-shadow: inset 0px 1px 0px 0px #dbf383, inset 0px -1px 1px #58c43a;
  box-shadow: inset 0px 1px 0px 0px #dbf383, inset 0px -1px 1px #58c43a;
  border: 1px solid #4c8932;
  -webkit-animation: animate-stripes 2s linear infinite;
}


body {
  background:#eee;
  padding: 30px;
  font-size: 62.5%;
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  position: relative;
  margin: 0;
}
  
#container {
  margin: 0 auto;
  width: 460px;
  padding: 2em;
  background: #DCDDDF;
  
}
  
.ui-progress-bar {
  margin-top: 3em;
  margin-bottom: 3em;
}
  
.ui-progress span.ui-label {
  font-size: 1.2em;
  position: absolute;
  right: 0;
  line-height: 33px;
  padding-right: 12px;
  color: rgba(0,0,0,0.6);
  text-shadow: rgba(255,255,255, 0.45) 0 1px 0px;
  white-space: nowrap;
}

	            </style>

   



	        
<script type="text/javascript">
(function( $ ){
  $.fn.animateProgress = function(progress, callback) {
    return this.each(function() {
      $(this).animate({
        width: progress+'%'
      }, {
        duration: 2000,
  
        easing: 'swing',
  
        step: function( progress ){
          var labelEl = $('.ui-label', this),
              valueEl = $('.value', labelEl);
  
          if (Math.ceil(progress) < 20 && $('.ui-label', this).is(":visible")) {
            labelEl.hide();
          }else{
            if (labelEl.is(":hidden")) {
              labelEl.fadeIn();
            };
          }
  
          if (Math.ceil(progress) == 100) {
            labelEl.text('Done');
            setTimeout(function() {
              labelEl.fadeOut();
            }, 1000);
          }else{
            valueEl.text(Math.ceil(progress) + '%');
          }
        },
        complete: function(scope, i, elem) {
          if (callback) {
            callback.call(this, i, elem );
          };
        }
      });
    });
  };
})( jQuery );
  
$(function() {
  $('#progress_bar .ui-progress .ui-label').hide();
  $('#progress_bar .ui-progress').css('width', '7%');
  
  $('#progress_bar .ui-progress').animateProgress(43, function() {
    $(this).animateProgress(79, function() {
      setTimeout(function() {
        $('#progress_bar .ui-progress').animateProgress(100, function() {
          $('#main_content').slideDown();
        });
      }, 2000);
    });
  });
  
});

</script>
	        
</body>

	       

