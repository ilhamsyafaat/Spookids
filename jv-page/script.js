// Countdown
const targetDate = new Date('2024-10-26T09:00:00-05:00').getTime();

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
    document.querySelector(".countdown-container").innerHTML = `
    <h3 class="text-[2rem] max-[992px]:text-[1.5rem] max-[768px]:text-[1.25rem] max-[480px]:text-[0.8rem] text-[#ffe7b4] font-light text-center">Going Live - Saturday, 26th October 2024, 09:00 AM EST</h3>
    <div class="countdown flex justify-center items-start gap-4">
      <div class="flex flex-col justify-center items-center">
        <div class="days text-[#FC9850] text-[5rem] max-[768px]:text-[4rem] max-[480px]:text-[2rem] font-medium">0</div>
        <p class="text-[#D9D9D9] text-[1.5rem] max-[768px]:text-[1.25rem] max-[480px]:text-[0.8rem] -mt-5 max-[480px]:-mt-2">Days</p>
      </div>
      <div class="text-[#ffe7b4] text-[5rem] max-[768px]:text-[4rem] max-[480px]:text-[2rem] font-medium">:</div>
      <div class="flex flex-col justify-center items-center">
        <div class="hours text-[#FC9850] text-[5rem] max-[768px]:text-[4rem] max-[480px]:text-[2rem] font-medium">0</div>
        <p class="text-[#D9D9D9] text-[1.5rem] max-[768px]:text-[1.25rem] max-[480px]:text-[0.8rem] -mt-5 max-[480px]:-mt-2">Hours</p>
      </div>
      <div class="text-[#ffe7b4] text-[5rem] max-[768px]:text-[4rem] max-[480px]:text-[2rem] font-medium">:</div>
      <div class="flex flex-col justify-center items-center">
        <div class="minutes text-[#FC9850] text-[5rem] max-[768px]:text-[4rem] max-[480px]:text-[2rem] font-medium">0</div>
        <p class="text-[#D9D9D9] text-[1.5rem] max-[768px]:text-[1.25rem] max-[480px]:text-[0.8rem] -mt-5 max-[480px]:-mt-2">Minutes</p>
      </div>
    </div>
    <div class="relative flex flex-col place-content-center">
      <div class="grid grid-cols-3 max-[600px]:grid-cols-1 place-items-center max-[992px]:gap-5 max-[768px]:gap-10">
        <div class="text-center flex justify-end items-center w-full max-[600px]:hidden">
          <h3 class="happyHalloween dont-miss font-medium text-[#ffe7b4] text-[6rem] max-[768px]:text-[4rem] leading-[9rem] max-[768px]:leading-[7rem]">DO <br> N'T</h3>
        </div>
        <div class="flex place-content-center gap-1 max-[600px]:mt-5">
          <div class="relative">
            <div class="text-center flex justify-center items-center text-[10rem] max-[768px]:text-[8rem] max-[600px]:text-[7rem] max-[480px]:text-[5rem] text-[#ffe7b4] absolute z-[3] left-[12%] bottom-[0.5%]">
              <div class="seconds-puluhan">0</div>
            </div>
            <div class="h-[110px] max-[768px]:h-[90px] max-[600px]:h-[80px] max-[480px]:h-[60px] w-[128px] max-[768px]:w-[100px] max-[600px]:w-[90px] max-[480px]:w-[70px] bg-[#FC9850] drop-shadow-[0_4px_3px_rgba(0,0,0,0.5)]"></div>
            <div class="h-[110px] max-[768px]:h-[90px] max-[600px]:h-[80px] max-[480px]:h-[60px] w-[128px] max-[768px]:w-[100px] max-[600px]:w-[90px] max-[480px]:w-[70px] bg-gradient-to-tl from-[#FC9850] to-[#fbb07b]"></div>
          </div>
          <div class="relative">
            <div class="text-center flex justify-center items-center text-[10rem] max-[768px]:text-[8rem] max-[600px]:text-[7rem] max-[480px]:text-[5rem] text-[#ffe7b4] absolute z-[3] left-[12%] bottom-[0.5%]">
              <div class="seconds-satuan">0</div>
            </div>
            <div class="h-[110px] max-[768px]:h-[90px] max-[600px]:h-[80px] max-[480px]:h-[60px] w-[128px] max-[768px]:w-[100px] max-[600px]:w-[90px] max-[480px]:w-[70px] bg-[#FC9850] drop-shadow-[0_4px_3px_rgba(0,0,0,0.5)]"></div>
            <div class="h-[110px] max-[768px]:h-[90px] max-[600px]:h-[80px] max-[480px]:h-[60px] w-[128px] max-[768px]:w-[100px] max-[600px]:w-[90px] max-[480px]:w-[70px] bg-gradient-to-tl from-[#FC9850] to-[#fbb07b]"></div>
          </div>
        </div>
        <div class="text-center flex justify-start items-center w-full max-[600px]:hidden">
          <h3 class="happyHalloween dont-miss font-medium text-[#ffe7b4] text-[6rem] max-[768px]:text-[4rem] leading-[9rem] max-[768px]:leading-[7rem]">MISS <br> IT!</h3>
        </div>
      </div>
      <div class="relative w-full text-center pl-[1%] -mt-5 max-[768px]:-mt-3 max-[600px]:mt-2">
        <p class="text-[2rem] max-[768px]:text-[1.5rem] max-[600px]:text-[1.25rem] max-[480px]:text-[1rem] text-[#FC9850] tracking-[0.7rem] max-[480px]:tracking-[0.5rem]">SECONDS</p>
      </div>
    </div>
    `
  }
}, 1000);


// Hamburger Button
function myFunction(x) {
  x.classList.toggle("change");
  const navBurger = document.querySelector(".burger")
  navBurger.classList.toggle("show");
}

// Scroll
const smoothScrollLinks = document.querySelectorAll('.smooth-scroll');
smoothScrollLinks.forEach(link => {
    link.addEventListener('click', smoothScroll);
});
function smoothScroll(event) {
    event.preventDefault();

    const targetId = this.getAttribute('href');

    const targetElement = document.querySelector(targetId);

    targetElement.scrollIntoView({
        behavior: 'smooth'
    });
}


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