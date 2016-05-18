<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
	Osman Chaudhary - Styling<?php
		if( isset($_GET['q']) && ($_GET['q']!=NULL) )
			{$query = $_GET['q']; unset($_GET['q']);}
		else
			{$query = NULL;}
		
		if($query != NULL)
		{
			switch($query)
			{
				case 'janburchard':
					$query = 'janburchard';
					echo ": Jan Burchard";
					break;
				case 'markushennemann':
					$query = 'markushennemann';
					echo ": Mark Ushennemann";
					break;
				case 'florianschmidt':
					$query = 'florianschmidt';
					echo ": Florian Schimidt";
					break;
				case 'phillipkoll':
					$query = 'phillipkoll';
					echo ": Phillip Koll";
					break;
				default:
					//do nothing
					break;
			}//switch
		}//if($query != NULL)
	?>

</title>
<style type="text/css" media="screen">
	@import url(./layout/css/cssreset.css);
	@import url(./layout/css/layoutinc.css);
</style>
<script type="text/javascript" src="scripts/mootools/mootools-core-1.3-full-compat.js"></script>
<script type="text/javascript" src="scripts/mootools/mootools-1.2.4.4-more.js"></script>
<script type="text/javascript" src="scripts/commonajaxfunctions.js"></script>
<script type="text/javascript" src="scripts/Scrollbar.js"></script>
<script type="text/javascript" src="scripts/mainfunctions.js"></script>
</head>

<body class='styling'>

	<div id='wrapper'>
    
    	<div id='header' class='displaynone'></div><!--header-->
    	
        <div id='sidebar'>       	

            	<ul id='navi_prime'>
                	<li><a href='bio.php' class='navi_prime_bio' title=''>bio</a></li>
                    <li><a href='about.php' class='navi_prime_about' title=''>about</a></li>
                    <li><a class='navi_prime_work' title=''>work</a></li>
                    <li><a href='styling.php' class='navi_prime_styling' title=''>styling</a></li>
                    <li><a href='selectedworks.php' class='navi_prime_selectedworks' title=''>selected works</a></li>
                    <li><a href='mailto:contact@osmanchaudhary.com' class='navi_prime_contact' title='contact@osmanchaudhary.com'>contact</a></li>
                </ul><!--navi_prime-->
                
                <ul id='navi_sec_work' class='navi_sec displaynone'>
                	<li id='acnestudios'>acne<span id='link_acnestudios' class='displaynone'><a href='http://www.acnestudios.com' target='_blank'>www.acnestudios.com</a></span></li>
                    <li id='acronym'>acronym<span id='link_acronym' class='displaynone'><a href='http://www.acronym.de' target='_blank'>www.acronym.de</a> , <a href='http://www.acrnm.com' target='_blank'>www.acrnm.com</a></span></li>
                    <li id='disaeran'>disaeran<span id='link_disaeran' class='displaynone'><a href='http://www.disaeran.com/' target='_blank'>www.disaeran.com</a></span></li>
                    <li id='esmod'>esmod<span id='link_esmod' class='displaynone'><a href='http://www.esmod.de/berlin/' target='_blank'>www.esmod.de/berlin/</a></span></li>
                    <li id='herno'>herno laminar<span id='link_herno' class='displaynone'><a href='#' target='_blank'>--</a></span></li>
                    <li id='hugoboss'>hugo boss<span id='link_hugoboss' class='displaynone'><a href='http://www.hugoboss.com/' target='_blank'>www.hugoboss.com</a></span></li>
                    <li id='humanscales'>human scales<span id='link_humanscales' class='displaynone'><a href='http://www.humanscales.se/' target='_blank'>www.humanscales.com</a></span></li>
                    <li id='hope'>hope &amp; glory<span id='link_hope' class='displaynone'><a href='#' target='_blank'>--</a></span></li>
                    <li id='needles'>needles &amp; pins group<span id='link_needles' class='displaynone'><a href='#' target='_blank'>--</a></span></li>
                    <li id='stoneisland'>stone island shadow project<span id='link_stoneisland' class='displaynone'><a href='http://www.stoneisland.co.uk/archive/shadow-project-010/page/shadowproject/'  target='_blank'>www.stoneisland.co.uk</a> , <a href='http://www.stoneisland.com'  target='_blank'>www.stoneisland.com</a></span></li>
                    <li id='whyszeck'>whyszeck<span id='link_whyszeck' class='displaynone'><a href='#' target='_blank'>--</a></span></li>
                </ul><!--navi_sec_work-->
                
<ul id='navi_sec_styling' class='navi_sec displaynone'>
            		<li><a href='styling.php?q=janburchard' class='' title=''>Jan Burchard</a></li>
                    <li><a href='styling.php?q=markushennemann' class='' title=''>Markus Hennemann</a></li>
                    <li><a href='styling.php?q=florianschmidt' class='' title=''>Florian Schmidt</a></li>
                    <li><a href='styling.php?q=phillipkoll' class='' title=''>Phillip Koll</a></li>
            	</ul><!--navi_sec_styling-->
            
            	<div id='navi_sec_selectedworks' class='navi_sec displaynone'><a>comming soon</a></div>
                <div id='logo'><a href='home.php' title='' class=''>Osman<span>chaudhary</span></a></div>
            
        </div><!--navigation-->
    
    	<div id='content'>
        
        	<?php
			if($query != NULL)
			{
				switch($query)
				{
					case 'janburchard':
			?>
                <div id='gallery_janburchard' class='gallery'>
                  <div id='gallery_page'>         	
                      <ul id='image_thumbs'>
                          <li><a href='' /><img src='images/janburchard/janburchard_04.jpg' /></a></li>
                          <li><a href='' /><img src='images/janburchard/janburchard_03.jpg' /></a></li>
                          <li><a href='' /><img src='images/janburchard/janburchard_02.jpg' /></a></li>
                          <li><a href='' /><img src='images/janburchard/janburchard_01.jpg' /></a></li>
                          <li><a href='' /><img src='images/janburchard/janburchard_08.jpg' /></a></li>
                          <li><a href='' /><img src='images/janburchard/janburchard_07.jpg' /></a></li>
                          <li><a href='' /><img src='images/janburchard/janburchard_06.jpg' /></a></li>
                          <li><a href='' /><img src='images/janburchard/janburchard_05.jpg' /></a></li>
                          <li><a href='' /><img src='images/janburchard/janburchard_12.jpg' /></a></li>
                          <li><a href='' /><img src='images/janburchard/janburchard_11.jpg' /></a></li>
                          <li><a href='' /><img src='images/janburchard/janburchard_10.jpg' /></a></li>
                          <li><a href='' /><img src='images/janburchard/janburchard_09.jpg' /></a></li>
                          <li><a href='' /><img src='images/janburchard/janburchard_16.jpg' /></a></li>
                          <li><a href='' /><img src='images/janburchard/janburchard_15.jpg' /></a></li>
                          <li><a href='' /><img src='images/janburchard/janburchard_14.jpg' /></a></li>
                          <li><a href='' /><img src='images/janburchard/janburchard_13.jpg' /></a></li>
                          <li><a href='' /><img src='images/janburchard/janburchard_20.jpg' /></a></li>
                          <li><a href='' /><img src='images/janburchard/janburchard_19.jpg' /></a></li>
                          <li><a href='' /><img src='images/janburchard/janburchard_18.jpg' /></a></li>
                          <li><a href='' /><img src='images/janburchard/janburchard_17.jpg' /></a></li>
                      </ul>                      
                  </div><!--gallery_page-->
                  <div id='scrollbar_uparrow'><img src='layout/images/arr_up.png' /></div>
                  <div id='scrollbar_vertical'><div id='scrollbar_knob'></div></div>
                  <div id='scrollbar_downarrow'><img src='layout/images/arr_down.png' /></div>
                </div>

                
            <?php
						break;
					case 'markushennemann':
			?>
            	<div id='gallery_markushennemann' class='gallery'>
                <div id='gallery_page'>              	
                  <ul id='image_thumbs'>                  
                      <li><a href='' /><img src='images/markushennemann/markushennemann_04.jpg' /></a></li>
                      <li><a href='' /><img src='images/markushennemann/markushennemann_03.jpg' /></a></li>
                      <li><a href='' /><img src='images/markushennemann/markushennemann_02.jpg' /></a></li>
                      <li><a href='' /><img src='images/markushennemann/markushennemann_01.jpg' /></a></li>
                      <li><a href='' /><img src='images/markushennemann/markushennemann_08.jpg' /></a></li>
                      <li><a href='' /><img src='images/markushennemann/markushennemann_07.jpg' /></a></li>
                      <li><a href='' /><img src='images/markushennemann/markushennemann_06.jpg' /></a></li>
                      <li><a href='' /><img src='images/markushennemann/markushennemann_05.jpg' /></a></li>
                      <li><a href='' /><img src='images/markushennemann/markushennemann_12.jpg' /></a></li>
                      <li><a href='' /><img src='images/markushennemann/markushennemann_11.jpg' /></a></li>
                      <li><a href='' /><img src='images/markushennemann/markushennemann_10.jpg' /></a></li>
                      <li><a href='' /><img src='images/markushennemann/markushennemann_09.jpg' /></a></li>
                      <li><a href='' /><img src='images/markushennemann/markushennemann_14.jpg' /></a></li>
                      <li><a href='' /><img src='images/markushennemann/markushennemann_13.jpg' /></a></li>
                  </ul>
                  </div><!--gallery-page-->
                  <div id='scrollbar_uparrow'><img src='layout/images/arr_up.png' /></div>
                  <div id='scrollbar_vertical'><div id='scrollbar_knob'></div></div>
                  <div id='scrollbar_downarrow'><img src='layout/images/arr_down.png' /></div>
                </div><!--gallery-->
            <?php
						break;
					case 'florianschmidt':
			?>
            	<div id='gallery_florianschmidt' class='gallery'>              	
                  <ul id='image_thumbs'>
                      <li><a href='' /><img src='images/florianschmidt/florianschmidt_04.jpg' /></a></li>
                      <li><a href='' /><img src='images/florianschmidt/florianschmidt_03.jpg' /></a></li>
                      <li><a href='' /><img src='images/florianschmidt/florianschmidt_02.jpg' /></a></li>
                      <li><a href='' /><img src='images/florianschmidt/florianschmidt_01.jpg' /></a></li>
                      <li><a href='' /><img src='images/florianschmidt/florianschmidt_05.jpg' /></a></li>
                  </ul> 
                </div><!--gallery-->
            <?php
						break;
					case 'phillipkoll':
			?>
                 <div id='gallery_florianschmidt' class='gallery'>              	
                  <ul id='image_thumbs'>
                      <li><a href='' /><img src='images/phillipkoll/phillipkoll_04.jpg' /></a></li>
                      <li><a href='' /><img src='images/phillipkoll/phillipkoll_03.jpg' /></a></li>
                      <li><a href='' /><img src='images/phillipkoll/phillipkoll_02.jpg' /></a></li>
                      <li><a href='' /><img src='images/phillipkoll/phillipkoll_01.jpg' /></a></li>
                      <li><a href='' /><img src='images/phillipkoll/phillipkoll_07.jpg' /></a></li>
                      <li><a href='' /><img src='images/phillipkoll/phillipkoll_06.jpg' /></a></li>
                      <li><a href='' /><img src='images/phillipkoll/phillipkoll_05.jpg' /></a></li>
                  </ul> 
                </div><!--gallery-->
            <?			
						break;
					default:
						//do nothing
						break;
				}//switch
			}//if($query != NULL)
			?>
        
        </div><!--content-->
    	<div id='copyright'>
			<div>Copyright &copy; Osman Chaudhary 2012. All rights reserved.</div>        
        </div>
    	<div id='footer' class='displaynone'>&nbsp;</div><!--footer-->
    
    </div><!--wrapper-->

</body>
</html>