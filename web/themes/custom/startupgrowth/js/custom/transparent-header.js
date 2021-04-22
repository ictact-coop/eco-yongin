jQuery(document).ready(function($) {
  if($("#banner #slideshow-fullscreen").length>0) {
    $("#header-container").addClass("transparent-header");
  } else {
    $("#header-container").removeClass("transparent-header");
  };
  $("#header-container.transparent-header").css("backgroundColor", "rgba(255,255,255," + drupalSettings.startupgrowth.transparentHeader.transparentHeaderOpacity + ")");
});
