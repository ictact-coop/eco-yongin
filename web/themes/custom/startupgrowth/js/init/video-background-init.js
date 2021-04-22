jQuery(document).ready(function($) {
  $("body").addClass("video-bg-active");
  $(".video-bg-active #highlighted-bottom").vide({
    mp4: drupalSettings.startupgrowth.VideoBackgroundInit.PathToVideo_mp4,
    webm: drupalSettings.startupgrowth.VideoBackgroundInit.PathToVideo_webm,
    poster: drupalSettings.startupgrowth.VideoBackgroundInit.pathToVideo_jpg
  },{
    posterType: 'jpg',
    className: 'video-container'
  });
});