jQuery(document).ready(function($) {

  if ($(".transparent-header-active").length>0) {
    jQuery("#slideshow-fullscreen .slider-revolution").revolution({
      sliderType:"standard",
      sliderLayout:"fullscreen",
      gridwidth: [1170,970,750,450],
      autoHeight: "on",
      fullScreenOffsetContainer: ".toolbar-tray",
      delay: drupalSettings.startupgrowth.sliderRevolutionFullScreenInit.slideshowFullScreenEffectTime,
      disableProgressBar:'off',
      responsiveLevels:[1199,991,767,480],
      navigation: {
        onHoverStop:"off",
        arrows:{
          enable:true,
          tmp: "",
          left:{
            h_align:"left",
            v_align:"center",
            h_offset:15,
            v_offset:0
          },
          right:{
            h_align:"right",
            v_align:"center",
            h_offset:15,
            v_offset:0
          }
        },
        bullets:{
          style:"",
          enable:true,
          direction:"horizontal",
          space: 5,
          h_align:  drupalSettings.startupgrowth.sliderRevolutionFullScreenInit.slideshowFullScreenBulletsPosition,
          v_align:"bottom",
          h_offset: 0,
          v_offset: 20,
          tmp:"",
        },
        touch:{
          touchenabled:"on",
          swipe_treshold:75,
          swipe_min_touches:1,
          drag_block_vertical:false,
          swipe_direction:"horizontal"
        }
      }
    });
  } else {
    jQuery("#slideshow-fullscreen .slider-revolution").revolution({
      sliderType:"standard",
      sliderLayout:"fullscreen",
      gridwidth: [1170,970,750,450],
      autoHeight: "on",
      fullScreenOffsetContainer: "#header-container, .toolbar-tray",
      delay: drupalSettings.startupgrowth.sliderRevolutionFullScreenInit.slideshowFullScreenEffectTime,
      disableProgressBar:'off',
      responsiveLevels:[1199,991,767,480],
      navigation: {
        onHoverStop:"off",
        arrows:{
          enable:true,
          tmp: "",
          left:{
            h_align:"left",
            v_align:"center",
            h_offset:15,
            v_offset:0
          },
          right:{
            h_align:"right",
            v_align:"center",
            h_offset:15,
            v_offset:0
          }
        },
        bullets:{
          style:"",
          enable:true,
          direction:"horizontal",
          space: 5,
          h_align:  drupalSettings.startupgrowth.sliderRevolutionFullScreenInit.slideshowFullScreenBulletsPosition,
          v_align:"bottom",
          h_offset: 20,
          v_offset: 20,
          tmp:"",
        },
        touch:{
          touchenabled:"on",
          swipe_treshold:75,
          swipe_min_touches:1,
          drag_block_vertical:false,
          swipe_direction:"horizontal"
        }
      }
    });
  }

  $('#slideshow-fullscreen .slider-revolution').bind("revolution.slide.onloaded",function (e) {
    $(".slider-revolution-wrapper:not(.one-slide) .tparrows").fadeIn("slow");
  });

});
