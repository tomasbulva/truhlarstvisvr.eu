<?php
include("../settings.php");
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>SVR Plánička s.r.o.</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- CSS
  ================================================== -->
  <link href='http://fonts.googleapis.com/css?family=Fugaz+One|Titillium+Web:400,700,400italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Nova+Round|Kelly+Slab|Oleo+Script|Contrail+One|Lobster|Atomic+Age|Fugaz+One|Titillium+Web:400,700,400italic|Gruppo|Nova+Square' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="stylesheets/base.css">
  <link rel="stylesheet" href="stylesheets/skeleton.css">
  <link rel="stylesheet" href="stylesheets/layout.css">

  <!-- Favicons
  ================================================== -->
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">


</head>
<body>

    	<div class="menu frame_ full-width">
            <div class="container frame_">
                <div class="sixteen columns alpha omega">
                    <div class="menulogo pull-left"><h1><a href="#top" title="SVR" class="logo">SVR Plánička<small>s.r.o.</small>&nbsp;</h1></div>
                    <div id="mainmenu" class="pull-left">
                      <ul class="nav">
                        <li class="two column _frame menuabout alpha omega"><a href="#about" class="scrollit target-about menulink" title="">ABOUT</a></li>
                        <li class="two column _frame menuproducts alpha omega"><a href="#products" class="scrollit target-product menulink" title="">PRODUCTS</a></li>
                        <li class="two column _frame menuclients alpha omega"><a href="#clients" class="scrollit target-clients menulink" title="">CLIENTS</a></li>
                        <li class="two column _frame menucontact alpha omega"><a href="#contact" class="target-contacts menulink" title="">CONTACTS</a></li>
                      </ul>
                    </div>
                    <div id="langmenu" class="pull-right">
                      <ul class="nav">
                        <li class="two column _frame alpha omega">|</li>
                        <li class="two column _frame alpha omega"><a href="<?php echo $webroot; ?>/cz/" class="scrollit target-about" title="">CZ</a></li>
                        <li class="two column _frame alpha omega active"><a href="<?php echo $webroot; ?>/en/" class="scrollit target-work" title="">EN</a></li>
                        <li class="two column _frame alpha omega"><a href="<?php echo $webroot; ?>/de/" class="target-login" title="">DE</a></li>
                        <!-- <li class="two column _frame alpha omega"><a href="<?php echo $webroot; ?>/fr" class="target-login" title="">FR</a></li> -->
                      </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="section top frame_ full-width" id="top">
            <div class="container frame_ topcontent">
                <div class="sixteen columns">

                    <h1 class="special">WOODWORK</h1>

                </div>
            </div>
			<div class="full-width cycle-slideshow topbackground" data-cycle-timeout="10000" data-cycle-slides="> div">

				<div class="topbackground-slide" style="background-image: url(images/background0.jpg);"></div>
				<div class="topbackground-slide" style="background-image: url(images/background1.jpg);"></div>
				<div class="topbackground-slide" style="background-image: url(images/background2.jpg);"></div>
				<div class="topbackground-slide" style="background-image: url(images/background3.jpg);"></div>
				<div class="topbackground-slide" style="background-image: url(images/background4.jpg);"></div>
				<div class="topbackground-slide" style="background-image: url(images/background5.jpg);"></div>
				<div class="topbackground-slide" style="background-image: url(images/background6.jpg);"></div>
				<div class="topbackground-slide" style="background-image: url(images/background7.jpg);"></div>

			</div>
        </div>

        <div class="section mainsection about full-width " id="about">
            <div class="container frame_ vlasta-bgr">
				<div class="row">
	                <div class="eight columns offset-by-eight">
	                	<div class="text">
							<p>SVR is a family owned company that was established in 1993. We are a dedicated company that is ready to handle any type of woodworking need that you may have, from creating custom furniture, euro windows, doors, stairs, renovation and replication of historic wooden windows and doors to complete project management.</p>

							<p>We can help you design what you have in mind, or you can bring us a picture or drawing to work from. Once the idea is given to us, we will then produce a technical drawing for your approval and for our precise building. SVR is staffed with experienced, detail oriented woodworkers that use state of the art materials, machines and techiques to produce an exquisite work of art. All of our projects use materials of the highest quality and we stand behind every piece manufactured.<p>

							<p class="desc">Founder: Ing. Vlastimil Planicka</p>
	                	</div>
	                </div>
				</div>
            </div>
        </div>

        <div class="section mainsection work full-width" id="products">
            <div class="container">
            	<div class="row">
	            	<div class="leftarrow arrow"><a href="#" title="left arrow" id="prev" class="leftarrow_anchor"><img src="images/svr_11.png" alt="svr_11" width="66" height="124"></a></div>
	            	<div class="rightarrow arrow"><a href="#" title="right arrow" id="next" class="rightarrow_anchor"><img src="images/svr_12.png" alt="svr_11" width="66" height="124"></a></div>

	                <div class="full-width cycle-slideshow"
	                			data-cycle-fx=scrollHorz
								data-cycle-timeout=5000
								data-cycle-pager="#custom-pager"
								data-cycle-pager-template="<a href=#> {{slideNum}} </a>"
								data-cycle-prev="#prev"
								data-cycle-next="#next"
								data-cycle-pause-on-hover="true"
								>

	                    <img src="products/malipetrovna.jpg" alt="malipetrovna" width="960" height="799">
						<img src="products/popovicky_1.jpg" alt="popovicky_1" width="960" height="799">
						<img src="products/popovicky_2.jpg" alt="popovicky_2" width="960" height="799">
						<img src="products/popovicky_3.jpg" alt="popovicky_3" width="960" height="799">
						<img src="products/Popovicky-detail_4.jpg" alt="Popovicky-detail_4" width="960" height="799">
						<img src="products/praha_1.jpg" alt="praha_1" width="960" height="799">
						<img src="products/praha_2.jpg" alt="praha_2" width="960" height="799">
						<img src="products/Praha_8.jpg" alt="Praha_8" width="960" height="799">
						<img src="products/praha_9.jpg" alt="praha_9" width="960" height="799">
						<img src="products/praha_10.jpg" alt="praha_10" width="960" height="799">
						<img src="products/PrahaKB_3.jpg" alt="PrahaKB_3" width="960" height="799">
						<img src="products/PrahaKB_4.jpg" alt="PrahaKB_4" width="960" height="799">
						<img src="products/PrahaKB_5.jpg" alt="PrahaKB_5" width="960" height="799">
						<img src="products/PrahaKB_6.jpg" alt="PrahaKB_6" width="960" height="799">
						<img src="products/PrahaKB_7.jpg" alt="PrahaKB_7" width="960" height="799">
						<img src="products/Slany_1.jpg" alt="Slany_1" width="960" height="799">
						<img src="products/Slany_2.jpg" alt="Slany_2" width="960" height="799">
						<img src="products/Slany_3.jpg" alt="Slany_3" width="960" height="799">
						<img src="products/Slany_4.jpg" alt="Slany_4" width="960" height="799">
						<img src="products/Slany_5-gympl.jpg" alt="Slany_5-gympl" width="960" height="799">
						<img src="products/Slany_6.jpg" alt="Slany_6" width="960" height="799">
						<img src="products/Slany_7.jpg" alt="Slany_7" width="960" height="799">
						<img src="products/Slany_8.jpg" alt="Slany_8" width="960" height="799">
						<img src="products/Slany_9.jpg" alt="Slany_9" width="960" height="799">
						<img src="products/trebiz_1_05.jpg" alt="trebiz_1_05" width="960" height="799">
						<img src="products/trebiz_2_05.jpg" alt="trebiz_2_05" width="960" height="799">
						<img src="products/trebiz_3_05.jpg" alt="trebiz_3_05" width="960" height="799">
						<img src="products/trebiz_4_05.jpg" alt="trebiz_4_05" width="960" height="799">
            <!-- <img src="products/pc_1.jpg" alt="trebiz_4_05" width="960" height="799"> -->

            <img src="products/door3.jpg" alt="trebiz_4_05" width="960" height="799">
            <img src="products/door4.jpg" alt="trebiz_4_05" width="960" height="799">
            <img src="products/door5.jpg" alt="trebiz_4_05" width="960" height="799">
            <img src="products/door5-det.jpg" alt="trebiz_4_05" width="960" height="799">
            <img src="products/Skola.jpg" alt="trebiz_4_05" width="960" height="799">
            <img src="products/Skola1.jpg" alt="trebiz_4_05" width="960" height="799">

	                </div>

	                <div class="controll" id="custom-pager"></div>
            	</div>
            </div>
        </div>
        <div class="section mainsection work full-width" id="clients">
            <div class="container frame_">
                <div class="row">
	                <div class="three columns"><img src="images/svr_15.png" alt="svr_15" width="170" height="144"></div>
	                <div class="three columns"><img src="images/svr_17.png" alt="svr_17" width="160" height="144"></div>

	                <div class="four columns"><img src="images/svr_19.png" alt="svr_19" width="219" height="144"></div>

	                <div class="three columns"><img src="images/svr_21.png" alt="svr_21" width="162" height="144"></div>
	                <div class="three columns"><img src="images/svr_23.png" alt="svr_23" width="169" height="144"></div>
                </div>
                <div class="row">
	                <div class="three columns"><img src="images/svr_24.png" alt="svr_24" width="170" height="157"></div>
	                <div class="three columns"><img src="images/svr_25.png" alt="svr_25" width="160" height="157"></div>

	                <div class="four columns"><img src="images/svr_26.png" alt="svr_26" width="219" height="157"></div>

	                <div class="three columns"><img src="images/svr_27.png" alt="svr_27" width="162" height="157"></div>
	                <div class="three columns"><img src="images/svr_28.png" alt="svr_28" width="169" height="157"></div>
                </div>
            </div>
        </div>
        <div class="section mainsection footer full-width" id="contact">
            <div class="container specialcont">
            	<iframe width="960" height="800" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2548.9106619247627!2d13.99085375!3d50.2935955!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8300cedaf4a51172!2zVHJ1aGzDocWZc3R2w60gU1ZSIFBsw6FuacSNa2E!5e0!3m2!1scs!2scz!4v1391721869004"></iframe>
                <div class="sixteen columns">
                    <div class="row">
                        <div class="eight columns alpha">
                            <p>
                              <b>SVR Plánička s.r.o.</b><br>
                              Manufacturing plant: Nám. J. Š. Baara 11, 27374 Klobuky, <br>Česká Republika, Evropa
                            </p>
                        </div>
                        <div class="eight columns omega">
                            <p>
                            <b>Ing. Vlastimil Planicka</b><br>
							TEL +420 604 207 780, <br>EMAIL <a href="mailto:svr@truhlarstvisvr.eu" title="svr@truhlarstvisvr.eu">svr@truhlarstvisvr.eu</a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container afterfooter">
            	<p>
	            	&copy; 2020 SVR Plánička s.r.o. All rights reserved
            	</p>
            </div>
        </div>





<!-- End Document
================================================== -->

<script src="js/lib/modernizr.custom.82918.js"></script>
<script src="js/lib/jquery-2.0.2.min.js"></script>
<script src="js/lib/jquery.transit.min.js"></script>
<script src="js/lib/waypoints.min.js"></script>
<script src="js/lib/jquery.cycle2.min.js"></script>
<script src="js/main.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49279374-2', 'truhlarstvisvr.eu');
  ga('send', 'pageview');

</script>
</body>
</html>
