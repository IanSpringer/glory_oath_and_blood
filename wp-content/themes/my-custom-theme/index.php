<HTML>

<! -- v6 -->

<head>

<meta name="description" content="Founded by Robert Leslie Bennett, Glory Oath + Blood is the side project of a clique of accomplished Hollywood film composers. Original music available for licensing. " />
<meta name="keywords" content="Music, Film, TV, Advertising, Promo, Score, Underscore, Orchestral, Choral, Strings, Brass, Percussion, Synth, Drums, Guitar,  Rise, Epic, Fantasy, Drama, Ethnic" />
<meta name="author" content="GLORY OATH + BLOOD">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="1 month">

<!-- Music, Film, Advertising -->

<meta name="viewport" content="width=device-width">

<title>GLORY OATH + BLOOD</title>

<link href="<?php bloginfo('stylesheet_url'); ?>/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/Auto_Resize.css" >
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jssor.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jssor.slider.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery-1.11.1.min.js"></script>

 <!--#region Bullet Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
    <style>
            /* jssor slider bullet navigator skin 14 css */
            /*
            .jssorb14 div           (normal)
            .jssorb14 div:hover     (normal mouseover)
            .jssorb14 .av           (active)
            .jssorb14 .av:hover     (active mouseover)
            .jssorb14 .dn           (mousedown)
            */
            .jssorb14 {
                position: absolute;
            }
            .jssorb14 div, .jssorb14 div:hover, .jssorb14 .av {
                position: absolute;
                /* size of bullet elment */
                width: 30px;
                height: 35px;
                background: url("/img/SlideshowBullets_v3.png") no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb14 div { background-position: -1px 0px; }
            .jssorb14 div:hover, .jssorb14 .av:hover { background-position: -60px -0px; }
            .jssorb14 .av { background-position: -167px -0px; }
            .jssorb14 .dn, .jssorb14 .dn:hover { background-position: -115px -0px; }
    </style>
    .
</head>

<body marginwidth="0" marginheight="0" leftmargin="0" topmargin="0">
    <script>
        jQuery(document).ready(function ($) {

             var _SlideshowTransitions = [
            //Fade
            { $Duration: 1200, $Opacity: 2 }
            ];

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is                                                                                 1
                $AutoPlayInterval: 6000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing,                                                                                  default value is 3000
                $PauseOnHover: 0,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch                                                                                 device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for                                                                                  desktop and touch device, default value is 1
                $ArrowKeyNavigation: true,                    //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0,                           //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default                                                                                 value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen,                                                                                 navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6                                                                                  vertical reverse, default value is 1
                $DragOrientation: 0,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the                                                                                  $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking                                                                                  position is not 0)
                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                 //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 22,                                  //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 10,                                  //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },
            };

           var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
           ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

    <!-- Jssor Slider Begin -->
    <!-- To move inline styles to css file/block, please specify a class name for each element. -->

    <div id="slider1_container" style="position: top; margin: 0 auto;
        top: 0px; left: 0px; width: 1900px; height: 942px; overflow: hidden;">
        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <div style="position: absolute; display: block; background: (/img/loading.gif) no-repeat center center;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
        </div>
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1900px; height: 942px; overflow: hidden;">
            <div>
                <img u="image" src="<?php bloginfo('template_url'); ?>/img/GOB_WebBanner_Final.jpg" width="1900" height="942"></img>
            </div>
             <div>
                <img u="image" src="<?php bloginfo('template_url'); ?>/img/Fearless_WebBanner_v4.jpg" width="1900" height="942"></img>
            </div>
            <div>
                <img u="image" src="<?php bloginfo('template_url'); ?>/img/BabylonZ_WebBanner_v3.jpg" width="1900" height="942"></img>
            </div>
            <div>
                <img u="image" src="<?php bloginfo('template_url'); ?>/img/BornOfLegend_WebBanner_v4.jpg" width="1900" height="942"></img>
            </div>
            <div>
                <img u="image" src="<?php bloginfo('template_url'); ?>/img/Endorfiendz_WebBanner_v3.jpg" width="1900" height="942"></img>
            </div>
            <div>
                <img u="image" src="<?php bloginfo('template_url'); ?>/img/Bombshell_WebBanner_v4.jpg" width="1900" height="942"></img>
            </div>
        </div>

        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb14" style="bottom: 150px; right: 10px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>
        <!--#endregion Bullet Navigator Skin End -->
    </div>


    <!-- Jssor Slider End -->




<div id="icons-bkg">
  <img src="<?php bloginfo('template_url'); ?>/img/Icon_BKG.png" width="100%" class="icons-bkg">

  <div id="icons">
    <a href="mailto:contact@gloryoathandblood.com" alt="mail">
      <img src="<?php bloginfo('template_url'); ?>/img/Icon_Mail.png" class="icon-mail light">
    </a>

    <a href="https://www.facebook.com/GloryOathAndBlood" target="new" alt="https://www.facebook.com/GloryOathAndBlood">
      <img src="<?php bloginfo('template_url'); ?>/img/Icon_FB.png" class="icon-fb">
    </a>

    <a href="https://twitter.com/gloryoathblood" target="new">
      <img src="<?php bloginfo('template_url'); ?>/img/Icon_Twitter.png" class="icon-twitter">
    </a>

    <a href="http://open.spotify.com/artist/0lkwA8682c7T1ZSnOLe0lf" target="new">
      <img src="<?php bloginfo('template_url'); ?>/img/Icon_Spotify.png" class="icon-spotify">
    </a>

    <a href="https://www.youtube.com/user/gloryoathblood" target="new">
      <img src="<?php bloginfo('template_url'); ?>/img/Icon_YouTube.png" class="icon-youtube">
    </a>

    <a href="https://itunes.apple.com/us/artist/glory-oath-+-blood/id929273275" target="new">
      <img src="<?php bloginfo('template_url'); ?>/img/Icon_iTunes.png" class="icon-itunes">
    </a>

    <a href="http://www.warnerchappellpm.com/glory-oath-blood/" target="new">
      <img src="<?php bloginfo('template_url'); ?>/img/Icon_WCM.png" class="icon-wcm">
    </a>
  </div>
</div>

<div itemscope itemtype="http://schema.org/Organization">


<img src="<?php bloginfo('template_url'); ?>/img/Bottom_BKG.png" class="below-banner"></a>



<div class="copyright">
<center> &copy; 2016 Glory Oath + Blood, All rights reserved</center>
</div>

<div class="hidetext">
<span itemprop="brand">Glory Oath + Blood</span> is an epic music band from <span itemprop="location">Los Angeles</span>.
                  The group was founded in 2014 by film composer <span itemprop="founder">Robert Leslie
             Bennett</span> as a collaborative outlet to experiment in pushing the
        boundaries of the epic music genre.  Group members include <span itemprop="member">Thor
      Laewe, Danny McCarthy, Russell McKamey, and Charlie Lin.</span>  Their albums
   are distributed by Warner/Chappell Production Music.  All Glory Oath + Blood
  albums feature the artwork of Devon Gibbsand Darren Yeow .
</div>


<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jQuery-rwdImageMaps.js"></script>
<script>
$(document).ready(function(e) {
  $('img[usemap]').rwdImageMaps();
});
</script>



</body>




</HTML>
