const targetDate = new Date('2024-05-14T09:00:00-05:00').getTime();

const countdown = setInterval(function() {
  const now = new Date().getTime();
  const distance = targetDate - now;

  const days = Math.floor(distance / (1000 * 60 * 60 * 24));
  const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((distance % (1000 * 60)) / 1000);

  const daysString = days.toString().padStart(2, '0');
  const hoursString = hours.toString().padStart(2, '0');
  const minutesString = minutes.toString().padStart(2, '0');
  const secondsString = seconds.toString().padStart(2, '0');
  const secondsPuluhan = Math.floor(seconds / 10);
  const secondsSatuan = seconds % 10;

  document.querySelector(".days").innerHTML = daysString;
  document.querySelector(".hours").innerHTML = hoursString;
  document.querySelector(".minutes").innerHTML = minutesString;
  document.querySelector(".seconds-puluhan").innerHTML = secondsPuluhan;
  document.querySelector(".seconds-satuan").innerHTML = secondsSatuan;

  if (distance < 0) {
    clearInterval(countdown);
    document.querySelector(".countdown").innerHTML = `
    <div class="first-item count-item flex flex-col items-center justify-center bg-gradient-to-b from-white via-gray-200 to-gray-300">
      <div class="days font-extrabold text-4xl">${daysString}</div>
      <div class="font-bold">Days</div>
    </div>
    <div class="count-item flex flex-col items-center justify-center bg-gradient-to-b from-white via-gray-200 to-gray-300">
      <div class="hours font-extrabold text-4xl">${hoursString}</div>
      <div class="font-bold">Hours</div>
    </div>
    <div class="count-item flex flex-col items-center justify-center bg-gradient-to-b from-white via-gray-200 to-gray-300">
      <div class="minutes font-extrabold text-4xl">${minutesString}</div>
      <div class="font-bold">Minutes</div>
    </div>
    <div class="last-item count-item flex flex-col items-center justify-center bg-gradient-to-b from-white via-gray-200 to-gray-300">
      <div class="seconds font-extrabold text-4xl">${secondsString}</div>
      <div class="font-bold">Seconds</div>
    </div>
    `;
    document.querySelector(".result-container").style.display = "flex";
  }
}, 1000);


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
