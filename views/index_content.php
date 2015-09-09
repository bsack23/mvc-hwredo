<body>

    <div class="container">
        <div class="row">
            <div class="navbar">
                <?php include $header_menu; ?>
            </div>         
        </div>
        <div class="row">
            <div class="col headleft">
                <img src="<?php echo ASSETS_PATH; ?>/main-images/banner_logo.png" alt="banner" >
                <?php include $header_navselect; ?>
            </div>
            <div class="col headright">
                <!--<nav> -->
                <!-- what are we going to put here? -->
                <!--</nav> -->
            </div>	    
        </div>
        <div class="row">
            <div class="col content">
                <!-- look at this: http://stackoverflow.com/questions/16482492/cycle2-make-images-links and http://jquery.malsup.com/cycle2/demo/non-image.php -->       
                <div class="cycle-slideshow"
                     data-cycle-timeout=0
                     data-cycle-caption="#adv-custom-caption"
                     data-cycle-overlay-template="{{cycleDesc}}"
                     data-cycle-caption-template="Slide {{slideNum}}: {{cycleTitle}}">
                    <div class="cycle-prev"></div>
                    <div class="cycle-next"></div>
                    <div class="cycle-overlay"></div>
                    <!-- 800 x 450 px -->
                    <!-- this div will be loaded dynamically too -->
                    <img src="<?php echo ASSETS_PATH; ?>/test_images/duke-battersby03.jpg" alt="" data-cycle-title="A &lt;a href=&quot;#&quot;&gt;Date&lt;/a&gt; and Time 1" 
                         data-cycle-desc="Title 1 and description of some kind">
                    <img src="<?php echo ASSETS_PATH; ?>/test_images/duke-battersby04.jpg" alt="" data-cycle-title="A Date and Time 2" 
                         data-cycle-desc="Title 2 and description of some kind">
                    <img src="<?php echo ASSETS_PATH; ?>/test_images/duke-battersby05.jpg" alt="" data-cycle-title="A Date and Time 3" 
                         data-cycle-desc="Title 3 and description of some kind">
                    <img src="<?php echo ASSETS_PATH; ?>/test_images/duke-battersby06.jpg" alt="" data-cycle-title="A Date and Time 4" 
                         data-cycle-desc="Title 4 and description of some kind">
                </div>
                <div id="adv-custom-caption" class="center"></div> 

                <!-- upcoming events -->
                <!--<div id="upcoming" style="height:10em;overflow:auto;"> -->
                <div style="height:1em;clear:both;">&nbsp;<!-- just a dirty spacer --></div>
                <div id="upcoming" >
                    <ul>
                        <!--http://code.google.com/p/jquery-nicescroll/
                        http://webdesign.tutsplus.com/articles/quick-tip-styling-scrollbars-to-match-your-ui-design-webdesign-9430
                        http://www.net-kit.com/jquery-custom-scrollbar-plugins/ -->
                        <?php
                        foreach ($events as $myevent) {
                            if (($myevent->program != 1) && ($myevent->end_date == '0000-00-00')) {
                                echo "<li class=\"" . $myevent->programtext . "\"><a href=\"" .
                                $myevent->id . "\">" . $myevent->date . " - " . $myevent->title . "</a></li>\n";
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div><!--/content-->