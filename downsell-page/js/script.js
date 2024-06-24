function openVideo(videoUrl, videoId, videoType) {
  var allVideos = document.querySelectorAll('iframe');
  allVideos.forEach(function(video) {
      if (video.getAttribute('id') !== videoType + '-video-' + videoId) {
          video.contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
      }
  });

  var video = document.getElementById(videoType + '-video-' + videoId);
  video.src = videoUrl;
  video.classList.remove('hidden');

  var playButton = document.querySelector('#play-button-' + videoType + '-' + videoId);
  if (playButton) {
      playButton.style.display = 'none';
  }
}

document.querySelectorAll('.preview-image').forEach(item => {
  item.addEventListener('click', event => {
      var productId = item.getAttribute('data-product-id');
      var videoUrl = item.getAttribute('data-preview-url');
      openVideo(videoUrl, productId, 'preview');
  });
});

document.querySelectorAll('.trailer-image').forEach(item => {
  item.addEventListener('click', event => {
      var productId = item.getAttribute('data-product-id');
      var videoUrl = item.getAttribute('data-trailer-url');
      openVideo(videoUrl, productId, 'trailer');
  });
});
