<?php

defined('_JEXEC') or die('Restricted access');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<jdoc:include type="head" />
	<?php JHTML::_('behavior.framework', true); 
	$app                = JFactory::getApplication();
	$templateparams     = $app->getTemplate(true)->params;
	$csite_name	= $app->getCfg('sitename');
	$license = 'globbersthemes.com';
	?>
	
	<?php   //main width
    $mod_left = $this->countModules( 'position-5' );
    $mod_right = $this->countModules( 'position-7' );
    if ( $mod_left && $mod_right ) {
    $width = '';
    } elseif ( ($mod_left || $mod_right) ) {
    $width = '-mid';
    } else {
     $width = '-full';}
    ?>
	
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/marhanceblack/css/tdefaut.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/marhanceblack/css/box.css" type="text/css" media="all" />
<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/mootools.js"></script>
<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/scroll.js"></script>
<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/script.js"></script>
<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/jquery.js"></script>
<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/superfish.js"></script>        
<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/hover.js"></script>		
<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/slideshow.js"></script>
<link rel="icon" type="image/gif" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/favicon.gif" />

<!--[if IE 7]>
<link href="templates/<?php echo $this->template ?>/css/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->

<script type="text/javascript">	
var $j = jQuery.noConflict(); 			        
 $j(document).ready(function() {	    
 $j(' .navigation ul  ').superfish({		  
 delay:       800,                            		  
 animation:   {opacity:'show',height:'show'},  		  
 speed:       'normal',                          		  
 autoArrows:  false,                           		  
 dropShadows: false                            	  
 });	   
 });    
 </script> 		

<script type="text/javascript">
        window.addEvent('domready', function() {
        SqueezeBox.initialize({});
        $$('a.modal').each(function(el) {
            el.addEvent('click', function(e) {
                new Event(e).stop();
                 SqueezeBox.fromElement(el);
            });
         });
      });
    </script>

</head>
<body>
    <div id="header">
        <div class="pagewidth">
			<div id="header-top">
			    <div id="tool">
				    <div id="tool-content">
				        <div id="loginbt">
                            <div class="text-login">	
						    
					        </div>
                        </div>
                            <div style="display:none;">
                                <div id="helpdiv" >
                                    <jdoc:include type="modules" name="login" style="xhtml" />
                                </div>
                            </div>
					
				            <div id="search">
                                <div  class="text-login">	
							       
					            </div>
                            </div>
                                <div style="display:none;">
                                    <div id="helpdiv2" >
                                        <jdoc:include type="modules" name="position-0" />
                                    </div>
                                </div>
				    </div>
			    </div>
		     </div>
        </div>			 
        
   
		    <div id="header-center">
			    <div class="pagewidth">
				    <div id="sitename">
                        
					</div>
				</div>
			</div>
			    <div class="pagewidth">
					<div id="topmenu">
					    <div class="navigation">
                            
							     <jdoc:include type="modules" name="position-1"  />
                        </div>
					</div>
				</div>
	</div>
	    <div class="pagewidth">
            <div id="slideshow"> 
			    <img src="templates/<?php echo $this->template ?>/images/slide4.jpg" alt="image4" />
			</div>
					
				<div id="newsflash">
				    <jdoc:include type="modules" name="position-12" style="xhtml" />
                </div>
		</div>
		    <div class="pagewidth">
			    <div id="pathway"><p>
				    <jdoc:include type="modules" name="position-2" /></p>
			    </div>
			</div>
			    <div class="pagewidth">
				    <?php if($this->countModules('position-5')) : ?>
			            <div id="left">
				    	    <jdoc:include type="modules" name="position-5" style="rounded" />
				        </div>
				    <?php endif; ?>
								
					<div id="main<?php echo $width; ?>">
				        <jdoc:include type="component" />
				    </div>
								
					<?php if($this->countModules('position-7')) : ?>
			            <div id="right">
				    	    <jdoc:include type="modules" name="position-7" style="rounded" />
				        </div>
				    <?php endif; ?>
				</div>
				    <div id="footer">
					    <div class="pagewidth">
							<div id="users-box">
				                <div class="box">
						            <jdoc:include type="modules" name="position-3" style="xhtml" />
					            </div>
					            <div class="box">
						            <jdoc:include type="modules" name="position-4" style="xhtml" />
					            </div>
					            <div class="box">
						            <jdoc:include type="modules" name="position-6" style="xhtml" />
					            </div>
								<div class="box">
						            <jdoc:include type="modules" name="position-8" style="xhtml" />
					            </div>
				            </div>
						</div>
				    </div>
					    <div id="footer_tm">
							<div class="pagewidth">
                                <div class="ftb">
                                     <?php echo date( 'Y' ); ?>&nbsp; <?php echo $csite_name; ?>&nbsp;&nbsp;<?php require("template.php"); ?>       
                                </div>
                                    <div id="top">
                                        <div class="top-button">
                                            <a href="#" onclick="scrollToTop();return false;"><img src="templates/<?php echo $this->template ?>/images/top.png" width="30" height="30" alt="top" /></a>
                                        </div>
				                    </div>
							</div>
			            </div>
    
</body>
</html>