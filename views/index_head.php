<!doctype html>
<html>
    <head>
        <title><?php echo $head_title; ?></title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="<?php echo ASSETS_PATH; ?>/js/jquery.cycle2.min.js"></script>
        <script src="<?php echo ASSETS_PATH; ?>/js/jquery.nicescroll.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo ASSETS_PATH; ?>/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="<?php echo ASSETS_PATH; ?>/css/slideshow.css">
        <!-- a grid framework in 250 bytes? are you kidding me?! -->
        <link rel="stylesheet" type="text/css" href="<?php echo ASSETS_PATH; ?>/css/grid.css">
        <!-- general boring stuff and some visual tweaks -->
        <link rel="stylesheet" type="text/css" href="<?php echo ASSETS_PATH; ?>/css/screen.css">	
        <link rel="stylesheet" type="text/css" href="<?php echo ASSETS_PATH; ?>/css/pauld-nav.css">	
        <link rel="stylesheet" type="text/css" href="<?php echo ASSETS_PATH; ?>/css/hovershow.css">
        	
        <link rel="stylesheet" type="text/css" href="assets/css/pauld-nav.css">

        <!-- all the important responsive layout stuff -->
        <style>
            /* responsive image */
            img {
                max-width: 100%;
                height: auto;
                /*width:100%;*/
            }

            @media \0screen {
                img { 
                    width: auto; /* for ie 8 */
                }
            }

            /* responsive stuff for changing menu to drop down */
            nav select {
                display: none;
            }

            .headleft { 
                padding-top:0;
            }

            @media all and (max-width : 600px) { // was 480
                                                 /* #prog_nav * {display:none;line-height:0;} */
                                                 .top-nav {display:none;line-height:0;}
                                                 .navbar {display:none;line-height:0;}
                                                 .headleft {padding-top:1em;}
                                                 nav select { display: inline-block; }
                                                 #upcoming {width:80%;}
            }

            .container { max-width: 90em; }



            /* you only need width to set up columns; all columns are 100%-width by default, so we start
                   from a one-column mobile layout and gradually improve it according to available screen space */

            @media only screen and (min-width: 37.5em) {
                .feature, .info { width: 50%; }
                .info-1 {width: 100%;}
                .galleryimg {float:none;}
                .info-1 .galleryimg{float:left;}
                .show-third p{font-size: 1em;}
                /* galleryimg not working the way i would like yet */
            }
            /* was 54? */
            @media only screen and (min-width: 57em) {
                .content, .headleft { width: 66.66%; }
                .sidebar, .headright { width: 33.33%; }
                .info    { width: 100%;   }
                .galleryimg {float:left;}
                .headleft {padding-bottom:0em;}
                .headright {padding-top:0em;}
                nav {font-size:.8em;}
                .show-third p{font-size: .7em;}
            }

            @media only screen and (min-width: 76em) {
                .content, .headleft { width: 58.33%; } /* 7/12 */
                .sidebar, .headright { width: 41.66%; } /* 5/12 */
                .info    { width: 50%;    }
                .galleryimg {float:none;}
                .info-1 .galleryimg{float:left;}
                .headleft {padding-bottom:0em;}
                .headright {padding-top:0em;}
                nav {font-size:.9em;}
                .show-third p{font-size: 1em;}
            }

            .navselect optgroup {
                font-style:normal;
                font-weight:normal;
            }
        </style>




        <script>
            $(document).ready(function () {
                //$("html").niceScroll({styler:"fb",cursorcolor:"#000",autohidemode:"scroll"});
                $("#upcoming").niceScroll({
                    styler: "fb",
                    cursorcolor: "#555",
                    cursorwidth: "10px",
                    cursorborderradius: "0px",
                    background: "#ffef00",
                    autohidemode: false
                });
            });

            //$(function() {
            //   $('li a').click(function(e) {
            //       e.preventDefault();
            //       var $this = $(this);
            //       $this.closest('ul').children('li').removeClass('active');
            //       $this.parent().addClass('active');
            //   });
        //});

        </script>

        <script>
        // dropdown animations?
            $(document).ready(function () {
        //$(window).load(function() {
                /*  $( '.dropdown' ).hover(
                 function(){
                 $(this).children('.sub-nav').slideDown(200);
                 },
                 function(){
                 $(this).children('.sub-nav').slideUp(200);
                 }
                 );  */

                $(".dropdown").mouseenter(
                        function () {
                            $(this).children(".sub-nav").slideDown(500);
                        });
                $(".dropdown").mouseleave(
                        function () {
                            $(this).children(".sub-nav").slideUp(500);
                        });
                //$('.dropdown').trigger('mouseout');
                $('.dropdown').trigger('mouseout');
                /* $('nav li ul').hide().removeClass('fallback'); */
                /* $('.navbar li').hover(
                 function () {
                 $('ul', this).stop().slideDown(100);
                 },
                 function () {
                 $('ul', this).stop().slideUp(500);
                 }
                 );	 */
            }); // end ready




        </script>

    </head>
    