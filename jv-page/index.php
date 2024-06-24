<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.tailwindcss.com"></script> 
  <title>JV Page</title>
</head>
<body class="bg-[url('./img/bg-1.png')] bg-center bg-cover bg-repeat bg-fixed overflow-x-hidden">

  <!-- Navbar -->
  <section class="bg-[#ffe7b4] py-3 max-[480px]:py-2 mt-8 max-[480px]:mt-5 mx-5 rounded-[50px] sticky top-2 z-20">
    <nav class="flex justify-between items-center">
      <div class="ml-12">
        <img class="w-[6%] max-[992px]:w-[12%]" src="./img/logo.png" alt="logo">
      </div>
      <div class="min-[769px]:flex min-[320px]:hidden justify-evenly items-center bg-white w-[38rem] max-[1200px]:w-[75rem] max-[992px]:w-[90rem] py-4 rounded-[30px] mr-4">
        <a href="#contest" class="smooth-scroll flex justify-center items-center gap-1 rounded-[30px]">
          <p class="font-medium">contest</p>
          <svg class="text-[#FC9850]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
            <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z"/>
          </svg>
        </a>
        <a href="#affiliate" class="smooth-scroll flex justify-center items-center gap-1 rounded-[30px]">
          <p class="font-medium">Affiliate Link</p>
          <svg class="text-[#FC9850]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
            <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z"/>
          </svg>
        </a>
        <a href="#promotion" class="smooth-scroll flex justify-center items-center gap-1 rounded-[30px]">
          <p class="font-medium">Promotion Material</p>
          <svg class="text-[#FC9850]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
            <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z"/>
          </svg>
        </a>
      </div>
      <div class="container min-[769px]:hidden min-[320px]:flex flex-col items-end mr-10 mt-1 cursor-pointer" onclick="myFunction(this)">
        <div class="bar1 w-9 h-1 bg-[#312E35] mb-1 rounded-[20px]"></div>
        <div class="bar2 w-9 h-1 bg-[#312E35] mb-1 rounded-[20px]"></div>
        <div class="bar3 w-9 h-1 bg-[#312E35] mb-1 rounded-[20px]"></div>
      </div>
    </nav>
    <div class="burger flex-col justify-center items-end mr-10 mt-5 gap-3">
      <a href="#contest" class="smooth-scroll flex justify-center items-center gap-2 rounded-[30px]">
        <p class="font-medium text-[#312E35]">contest</p>
        <svg class="text-[#312E35]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
          <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z"/>
        </svg>
      </a>
      <a href="#affiliate" class="smooth-scroll flex justify-center items-center gap-2 rounded-[30px]">
        <p class="font-medium text-[#312E35]">Affiliate Link</p>
        <svg class="text-[#312E35]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
          <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z"/>
        </svg>
      </a>
      <a href="#promotion" class="smooth-scroll flex justify-center items-center gap-2 rounded-[30px]">
        <p class="font-medium text-[#312E35]">Promotion Material</p>
        <svg class="text-[#312E35]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
          <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z"/>
        </svg>
      </a>
    </div>
  </section>


  <!-- Hero -->
  <section>
    <div class="flex flex-col justify-center items-center text-center px-32 max-[992px]:px-24 max-[768px]:px-8 max-[480px]:px-4 mt-16 max-[768px]:mt-12 max-[480px]:mt-7">
      <h1 class="headline text-[4rem] max-[992px]:text-[3rem] max-[768px]:text-[2.65rem] max-[480px]:text-[1.5rem] leading-[4rem] max-[768px]:leading-[3rem] max-[480px]:leading-[2rem] text-[#ffe7b4]">Join Us Promoting <br> Our High Quality Product <br> Get Instant Commissions on <br> Easy to Sell Horror Story Video</h1>
      <div class="bg-[#FC9850] px-10 max-[992px]:px-5 max-[480px]:px-2 py-2 rounded-[20px] mt-5">
        <h3 class="sub-headline tracking-[1px] text-[1.65rem] max-[992px]:text-[1.5rem] max-[768px]:text-[1.35rem] max-[480px]:text-[0.8rem] text-[#ffe7b4] font-semibold leading-[2rem] max-[768px]:leading-[1.5rem] max-[480px]:leading-[1rem]">Over 30+ Spooky Tales to Choose From: Instant Commissions, Easy Sales, Happy Customers!</h3>
      </div>
    </div>
    <div class="flex justify-center items-center mt-16 mb-12 max-[768px]:my-8 max-[480px]:my-5">
      <img class="w-[65rem] max-[992px]:w-[50rem] max-[768px]:w-[40rem] max-[480px]:w-[25rem]" src="./img/BoxMockup.png" alt="">
    </div>
    <div class="text-center text-[#ffe7b4] px-40 max-[992px]:px-24 max-[768px]:px-8 max-[480px]:px-4 text-[1.25rem] max-[992px]:text-[1.15rem] max-[768px]:text-[1rem] max-[480px]:text-[0.65rem] leading-[2rem] max-[992px]:leading-[2rem] max-[768px]:leading-[1.5rem] max-[480px]:leading-[1rem]">
      <h3>Elevate your content strategy with spooky tales! Expand your social media following with short horror stories for kids that both entertain and teach. Start captivating your audience today!</h3>
    </div>
  </section>


  <!-- Timeline -->
  <div class="flex justify-center items-center my-10 max-[992px]:my-12 max-[768px]:my-8 max-[480px]:my-5 w-full">
    <img class="w-[50rem] max-[992px]:w-[40rem] max-[768px]:w-[30rem] max-[480px]:w-[20rem]" src="./img/start-end.svg" alt="">
  </div>


  <!-- Countdown -->
  <section class="countdown-container flex flex-col place-content-center px-10 max-[480px]:px-3 mb-20">
    <h3 class="text-[2rem] max-[992px]:text-[1.5rem] max-[768px]:text-[1.25rem] max-[480px]:text-[0.8rem] text-[#ffe7b4] font-light text-center">Going Live - Saturday, 26th October 2024, 09:00 AM EST</h3>
    <div class="countdown flex justify-center items-start gap-4">
      <div class="flex flex-col justify-center items-center">
        <div class="days text-[#FC9850] text-[5rem] max-[768px]:text-[4rem] max-[480px]:text-[2rem] font-medium"></div>
        <p class="text-[#D9D9D9] text-[1.5rem] max-[768px]:text-[1.25rem] max-[480px]:text-[0.8rem] -mt-5 max-[480px]:-mt-2">Days</p>
      </div>
      <div class="text-[#ffe7b4] text-[5rem] max-[768px]:text-[4rem] max-[480px]:text-[2rem] font-medium">:</div>
      <div class="flex flex-col justify-center items-center">
        <div class="hours text-[#FC9850] text-[5rem] max-[768px]:text-[4rem] max-[480px]:text-[2rem] font-medium"></div>
        <p class="text-[#D9D9D9] text-[1.5rem] max-[768px]:text-[1.25rem] max-[480px]:text-[0.8rem] -mt-5 max-[480px]:-mt-2">Hours</p>
      </div>
      <div class="text-[#ffe7b4] text-[5rem] max-[768px]:text-[4rem] max-[480px]:text-[2rem] font-medium">:</div>
      <div class="flex flex-col justify-center items-center">
        <div class="minutes text-[#FC9850] text-[5rem] max-[768px]:text-[4rem] max-[480px]:text-[2rem] font-medium"></div>
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
              <div class="seconds-puluhan"></div>
            </div>
            <div class="h-[110px] max-[768px]:h-[90px] max-[600px]:h-[80px] max-[480px]:h-[60px] w-[128px] max-[768px]:w-[100px] max-[600px]:w-[90px] max-[480px]:w-[70px] bg-[#FC9850] drop-shadow-[0_4px_3px_rgba(0,0,0,0.5)]"></div>
            <div class="h-[110px] max-[768px]:h-[90px] max-[600px]:h-[80px] max-[480px]:h-[60px] w-[128px] max-[768px]:w-[100px] max-[600px]:w-[90px] max-[480px]:w-[70px] bg-gradient-to-tl from-[#FC9850] to-[#fbb07b]"></div>
          </div>
          <div class="relative">
            <div class="text-center flex justify-center items-center text-[10rem] max-[768px]:text-[8rem] max-[600px]:text-[7rem] max-[480px]:text-[5rem] text-[#ffe7b4] absolute z-[3] left-[12%] bottom-[0.5%]">
              <div class="seconds-satuan"></div>
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
  </section>


  <!-- Affiliate Link -->
  <section id="affiliate" class="flex flex-col place-items-center bg-[url('./img/bg-2.png')] bg-white bg-cover bg-center bg-fixed bg-no-repeat py-16 max-[992px]:py-12 max-[768px]:py-10 max-[480px]:py-5">
    <div class="text-center mb-16">
      <h1 class="happyHalloween text-[3.5rem] max-[992px]:text-[3rem] max-[768px]:text-[2.75rem] max-[480px]:text-[2rem] leading-[3.5rem] max-[992px]:leading-[3rem] max-[768px]:leading-[2.75rem] max-[480px]:leading-[2rem]">Affiliate Link</h1>
      <h3 class="font-medium text-[1.25rem] max-[992px]:text-[1.25rem] max-[768px]:text-[1rem] max-[480px]:text-[0.8rem] -tracking-[1px]">Get Your Affiliate Link Now<h3>
    </div>
    <div class="grid grid-cols-2 max-[768px]:grid-cols-1 justify-center items-center gap-32 max-[992px]:gap-16 px-10 max-[992px]:px-8 max-992px ">
      <div class="flex flex-col place-content-center drop-shadow-[4px_4px_7px_rgba(0,0,0,0.3)]">
        <div class="relative z-[1] text-center text-white flex flex-col place-items-center bg-[url('./img/bg-6.png')] bg-cover bg-center bg-no-repeat border-[4px] border-[#FC9850] px-10 max-[992px]:px-6 max-[768px]:px-12 max-[480px]:px-6 pt-10 max-[992px]:pt-8 max-[480px]:pt-4 pb-20 max-[992px]:pb-16 rounded-tr-[20px] rounded-tl-[20px]">
          <h3 class="text-[2.5rem] max-[992px]:text-[2.25rem] max-[768px]:text-[2.25rem] max-[480px]:text-[1.75rem] -tracking-[1px] leading-[2.5rem]">Subscribe</h3>
          <p class="max-[992px]:text-[0.9rem] max-[480px]:text-[0.7rem] font-light -tracking-[1px] max-[480px]:-tracking-[0.5px]">Submit your email to get update on launch and update information</p>
        </div>
        <form class="relative z-[2] bg-[#FC9850] w-full h-full flex flex-col justify-center px-10 max-[992px]:px-6 max-[768px]:px-12 max-[480px]:px-6 py-5 max-[480px]:py-3 -mt-12 rounded-[20px] drop-shadow-[0px_-5px_5px_rgba(0,0,0,0.5)]">
          <label class="text-[1.25rem] max-[480px]:text-[1rem] font-medium mb-1" for="name">Name</label>
          <input class="max-[480px]:text-[0.9rem] px-4 py-1 rounded-[10px] mb-2" type="text" id="name" name="name" placeholder="Your Name" required />
          <label class="text-[1.25rem] max-[480px]:text-[1rem] font-medium mb-1" for="email">Email</label>
          <input class="max-[480px]:text-[0.9rem] px-4 py-1 rounded-[10px] mb-2" type="email" id="email" name="email" placeholder="Your Email" required />
          <div class="w-full mt-4 max-[992px]:mt-6 max-[768px]:mt-3 max-[480px]:mt-2">
            <button class="float-end bg-[#312E35] text-white px-8 py-2 rounded-[20px] hover:bg-white hover:border-[#312E35] hover:border-[2px] hover:py-[6px] hover:text-[#312E35] hover:font-medium">Subscribe</button>
          </div>
        </form>
      </div>
      <div>
        <img class="w-[30rem]" src="./img/affiliate-element.png" alt="">
      </div>
    </div>
  </section>


  <!-- About -->
  <section class="relative flex flex-col place-items-center bg-[url('./img/bg-2-2.png')] bg-cover bg-no-repeat bg-fixed bg-center py-16 max-[768px]:py-12 max-[480px]:py-8">
    <div class="absolute top-0 left-0">
      <img class="w-[24rem] max-[992px]:w-[20rem] max-[768px]:w-[14rem] max-[480px]:w-[8.5rem]" src="./img/nest.png" alt="">
    </div>
    <div class="absolute top-7 max-[768px]:top-5 max-[480px]:top-2 right-2 max-[768px]:right-1 max-[480px]:right-0">
      <img class="w-[8rem] max-[992px]:w-[6rem] max-[768px]:w-[5rem] max-[480px]:w-[3rem]" src="./img/bat.svg" alt="">
    </div>
    <div>
      <img class="w-[18rem] max-[768px]:w-[14rem] max-[480px]:w-[8rem]" src="./img/introducing.png" alt="">
    </div>
    <div class="text-center w-[50%] max-[992px]:w-[85%] max-[768px]:w-[90%] max-[480px]:w-[95%] mt-10 max-[768px]:mt-5">
      <h3 class="text-[1.25rem] max-[768px]:text-[1rem] max-[480px]:text-[0.75rem] max-[768px]:-my-3 max-[480px]:-my-1 font-normal leading-[1.75rem] max-[768px]:leading-[1.5rem] max-[480px]:leading-[1rem] mb-5">Forget snoozy bedtime stories! Spooky Short is the animated horror short taking social media by storm and freaking out kids everywhere. This bewitching tale is the ultimate mix of spooky and silly, taking your little adventurers on a thrilling, age-appropriate ride filled with unexpected twists and giggles that will have them begging for more.</h3>
      <h3 class="text-[1.25rem] max-[768px]:text-[1rem] max-[480px]:text-[0.75rem] max-[768px]:-my-3 max-[480px]:-my-1 font-normal leading-[1.75rem] max-[768px]:leading-[1.5rem] max-[480px]:leading-[1rem]">Spookids is a brand new and never released before product. This product is made by my professional teams who have more than 10 years of experience in making high-converting digital products.</h3>
    </div>
    <div class="flex justify-center items-center my-12 max-[992px]:my-8 max-[480px]:my-4">
      <img class="w-[65%] max-[992px]:w-[80%] max-[480px]:w-[90%]" src="./img/BoxMockup-phone.png" alt="mockup">
    </div>
    <div class="grid grid-cols-1 gap-10 max-[480px]:gap-5 px-52 max-[992px]:px-32 max-[768px]:px-20 max-[480px]:px-10">
      <div class="relative">
        <a href="../sales-page/index.php">
          <img class="absolute bottom-0 right-[40%] w-[15rem] max-[992px]:w-[10rem] max-[768px]:w-[8.5rem] max-[480px]:w-[5.5rem] max-[380px]:w-[4.25rem] hover:scale-105 duration-200" src="./img/sales-button-2.png" alt="">
        </a>
        <img src="./img/frontend.png" alt="">
      </div>
      <div class="relative">
        <a href="../sales-page/index.php">
          <img class="absolute bottom-0 right-[40%] w-[15rem] max-[992px]:w-[10rem] max-[768px]:w-[8.5rem] max-[480px]:w-[5.5rem] max-[380px]:w-[4.25rem] hover:scale-105 duration-200" src="./img/sales-button-1.png" alt="">
        </a>
        <img src="./img/upsell.png" alt="">
      </div>
    </div>
    <div class="text-center w-[50%] max-[992px]:w-[85%] max-[768px]:w-[90%] max-[480px]:w-[95%] my-12 max-[768px]:my-10">
      <h3 class="text-[1.25rem] max-[768px]:text-[1rem] max-[480px]:text-[0.75rem] max-[768px]:-my-3 max-[480px]:-my-1 font-normal leading-[1.75rem] max-[768px]:leading-[1.5rem] max-[480px]:leading-[1rem]">Get ready to thrill your audience with Spookids: Horror Story Videos For Kids! Our short. With Spookids, you'll not only entertain but also educate, as our stories are crafted to engage young minds while delivering important lessons. Imagine the excitement as your social media content views skyrocket, thanks to the irresistible allure of Spookids. Don't miss out on this unique opportunity to captivate young minds and elevate your online presence. Dive into Spookids today and unleash the spooky fun!</h3>
    </div>
    <div class="px-28 mb-10">
      <h3 class="text-center text-[2.5rem] max-[992px]:text-[2rem] max-[768px]:text-[1.5rem] max-[480px]:text-[1.1rem] leading-[2.75rem] max-[768px]:leading-[2rem] max-[480px]:leading-[1.5rem] font-semibold">Here are some specific examples <br> of how can be used by different professions:</h3>
    </div>
    <div class="flex flex-col justify-center items-center gap-5 px-64 max-[768px]:px-10 max-[480px]:px-1">
      <div class="grid grid-cols-2 max-[992px]:grid-cols-1 max-[768px]:grid-cols-1 max-[480px]:grid-cols-1 gap-x-10 gap-y-5">
        <div class="flex justify-center items-center gap-3 py-2 bg-[#FC9850] rounded-[50px] px-8 max-[480px]:px-5 drop-shadow-[1px_2px_5px_rgba(0,0,0,0.3)] border-[2px] border-[#312E35]">
          <img class="w-[3rem] max-[480px]:w-[3.25rem]" src="./img/educator.png" alt="">
          <div class="text-[#312E35]">
            <h3 class="font-bold text-[16px] max-[768px]:leading-[1.15rem]">Educators</h3>
            <p class="text-[12px] max-[768px]:leading-[1rem] mt-1">Spooky Short can be used as a springboard for creative writing exercises.  Have students write their own spooky stories inspired by the short, or analyze how the animation builds suspense and humor.</p>
          </div>
        </div>
        <div class="flex justify-center items-center gap-3 py-2 bg-[#FC9850] rounded-[50px] px-8 max-[480px]:px-5 drop-shadow-[1px_2px_5px_rgba(0,0,0,0.3)] border-[2px] border-[#312E35]">
          <img class="w-[3rem] max-[480px]:w-[3.25rem]" src="./img/influencer.png" alt="">
          <div class="text-[#312E35]">
            <h3 class="font-bold text-[16px] max-[768px]:leading-[1.15rem]">Social Media Influencers </h3>
            <p class="text-[12px] max-[768px]:leading-[1rem] mt-1">Embrace the spooky trend!  Share clips from Spooky Short, host costume challenges inspired by the characters, or create reaction videos to share with your audience.</p>
          </div>
        </div>
        <div class="flex justify-center items-center gap-3 py-2 bg-[#FC9850] rounded-[50px] px-8 max-[480px]:px-5 drop-shadow-[1px_2px_5px_rgba(0,0,0,0.3)] border-[2px] border-[#312E35]">
          <img class="w-[3rem] max-[480px]:w-[3.25rem]" src="./img/animator.png" alt="">
          <div class="text-[#312E35]">
            <h3 class="font-bold text-[16px] max-[768px]:leading-[1.15rem]">Animators and Creatives</h3>
            <p class="text-[12px] max-[768px]:leading-[1rem] mt-1">Use Spooky Short as a source of inspiration for your own projects.  Analyze the animation style, color palette, and storytelling techniques to learn and develop your own skills.</p>
          </div>
        </div>
        <div class="flex justify-center items-center gap-3 py-2 bg-[#FC9850] rounded-[50px] px-8 max-[480px]:px-5 drop-shadow-[1px_2px_5px_rgba(0,0,0,0.3)] border-[2px] border-[#312E35]">
          <img class="w-[3rem] max-[480px]:w-[3.25rem]" src="./img/creator.png" alt="">
          <div class="text-[#312E35]">
            <h3 class="font-bold text-[16px] max-[768px]:leading-[1.15rem]">Content Creators</h3>
            <p class="text-[12px] max-[768px]:leading-[1rem] mt-1">YouTubers, streamers, and other content creators can leverage Spooky Short's virality!  Host watch parties with live commentary, create reaction videos, or even develop spin-off content inspired by the characters or themes.</p>
          </div>
        </div>
        <div class="flex justify-center items-center gap-3 py-2 bg-[#FC9850] rounded-[50px] px-8 max-[480px]:px-5 drop-shadow-[1px_2px_5px_rgba(0,0,0,0.3)] border-[2px] border-[#312E35]">
          <img class="w-[3rem] max-[480px]:w-[3.25rem]" src="./img/blogger.png" alt="">
          <div class="text-[#312E35]">
            <h3 class="font-bold text-[16px] max-[768px]:leading-[1.15rem]">Bloggers and Reviewers</h3>
            <p class="text-[12px] max-[768px]:leading-[1rem] mt-1">Write a review of Spooky Short for your blog or social media channels.  Analyze the animation style, humor, and age-appropriateness to help parents and educators decide if it's a good fit for their audience.</p>
          </div>
        </div>
        <div class="flex justify-center items-center gap-3 py-2 bg-[#FC9850] rounded-[50px] px-8 max-[480px]:px-5 drop-shadow-[1px_2px_5px_rgba(0,0,0,0.3)] border-[2px] border-[#312E35]">
          <img class="w-[3rem] max-[480px]:w-[3.25rem]" src="./img/markter.png" alt="">
          <div class="text-[#312E35]">
            <h3 class="font-bold text-[16px] max-[768px]:leading-[1.15rem]">Marketers</h3>
            <p class="text-[12px] max-[768px]:leading-[1rem] mt-1">Leverage the popularity of Spooky Short to promote children's products or services. Run social media campaigns using the #SpookyShort hashtag to reach a relevant audience.</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Module -->
  <section class="bg-[url('./img/bg-8.png')] bg-cover bg-fixed bg-center flex place-content-center p-20 max-[1024px] px-10 max-[480px]:py-12 max-[480px]:px-5">
    <div class="grid grid-cols-2 max-[768px]:grid-cols-1 place-items-center gap-10 max-[480px]:gap-7">
      <?php 
        include './produk.php';
        foreach ($produk as $item): 
      ?>
        <div class="bg-[url('./img/bg-7.png')] bg-cover bg-center bg-no-repeat rounded-[20px] flex flex-col justify-center items-center text-center px-5 max-[768px]:px-4 py-8">
          <h3 class="happyHalloween bg-[#FC9850] border-[2px] border-[#312E35] text-[1.5rem] max-[992px]:text-[1.25rem] max-[768px]:text-[1.5rem] max-[480px]:text-[1.25rem] px-12 rounded-full"><?= $item['title']; ?></h3>
          <p class="py-5 max-[992px]:text-[0.8rem] max-[768px]:text-[0.9rem] max-[480px]:text-[0.8rem]"><?= $item['paragraph']; ?></p>
          <div class="flex flex-row justify-center items-center">
            <div class="flex flex-col justify-center items-center w-[50%] md:w-[45%] mt-3 me-2 md:me-3">
              <h1 class="happyHalloween text-[#F3E9D3] bg-[#312E35] text-center rounded-full font-1-2rem mb-3 px-8">Preview</h1>
              <div class="w-full rounded-2xl relative" style="cursor: pointer;">
                <img src="<?php echo $item['img-preview']; ?>" alt="Preview Image" class="w-full h-auto rounded-2xl preview-image" data-preview-url="<?php echo $item['preview']; ?>" data-product-id="<?php echo $item['id']; ?>">
                <iframe id="preview-video-<?php echo $item['id']; ?>" class="hidden absolute inset-0 w-full h-full rounded-2xl" allowfullscreen></iframe>
                <button id="play-button-preview-<?php echo $item['id']; ?>" onclick="openVideo('<?php echo $item['preview']; ?>', '<?php echo $item['id']; ?>', 'preview')" class="play-button absolute inset-0 flex justify-center items-center text-white text-4xl"><i class="fas fa-play"></i></button>
              </div>
            </div>
            <div class="flex flex-col justify-center items-center w-[50%] md:w-[45%] mt-3 ms-2 md:ms-3">
              <h1 class="happyHalloween text-[#F3E9D3] bg-[#312E35] text-center rounded-full font-1-2rem mb-3 px-8">Trailer</h1>
              <div class="w-full rounded-2xl relative" style="cursor: pointer;">
                <img src="<?php echo $item['img-trailer']; ?>" alt="Trailer Image" class="w-full h-auto rounded-2xl trailer-image" data-trailer-url="<?php echo $item['trailer']; ?>" data-product-id="<?php echo $item['id']; ?>">
                <iframe id="trailer-video-<?php echo $item['id']; ?>" class="hidden absolute inset-0 w-full h-full rounded-2xl" allowfullscreen></iframe>
                <button id="play-button-trailer-<?php echo $item['id']; ?>" onclick="openVideo('<?php echo $item['trailer']; ?>', '<?php echo $item['id']; ?>', 'trailer')" class="play-button absolute inset-0 flex justify-center items-center text-white text-4xl"><i class="fas fa-play"></i></button>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>


  <!-- Affiliate Contest -->
  <section id="contest" class="relative flex flex-col place-items-center bg-[url('./img/bg-3.png')] bg-cover bg-no-repeat bg-fixed bg-center w-full py-16 max-[768px]:py-12 max-[480px]:py-8 px-20 max-[480px]:px-5">
    <div class="absolute top-7 max-[768px]:top-5 max-[480px]:top-2 left-2 max-[768px]:left-1 max-[480px]:left-0">
      <img class="w-[8rem] max-[992px]:w-[6rem] max-[768px]:w-[4rem] max-[480px]:w-[2.5rem]" src="./img/bat-1.png" alt="">
    </div>
    <div class="absolute top-0 right-0">
      <img class="w-[12rem] max-[992px]:w-[6.5rem] max-[768px]:w-[4.5rem] max-[480px]:w-[3rem]" src="./img/labu-decor.png" alt="">
    </div>
    <div class="text-center w-[70%] max-[992px]:w-[90%] max-[768px]:w-[100%]">
      <h1 class="happyHalloween text-[3.5rem] max-[992px]:text-[2.5rem] max-[768px]:text-[2rem] max-[480px]:text-[1.5rem] mb-4 max-[992px]:mb-2 max-[768px]:mb-1">Affiliate Contest</h1>
      <h3 class="font-normal text-[1.2rem] max-[992px]:text-[1rem] max-[768px]:text-[0.8rem] max-[480px]:text-[0.6rem]">By promoting our product, you are not only get instant commission but also you can win extra cash from contest prize! The Affiliate Contest is 5 days, starting from 6 April 2024 at 9 am est and end 11 April 2024 at 12 am est.</h3>
    </div>
    <div class="w-[50rem] max-[992px]:w-[40rem] max-[769px]:w-[30rem] max-[480px]:w-[18rem] my-12 max-[992px]:my-10 max-[768px]:my-6 max-[480px]:my-3">
      <img src="./img/champions.png" alt="champions">
    </div>
    <div class="w-[40rem] max-[992px]:w-[30rem] max-[769px]:w-[25rem] max-[480px]:w-[15rem] mb-10 max-[992px]:mb-8 max-[768px]:mb-5 max-[480px]:mb-3">
      <img src="./img/position.png" alt="position">
    </div>
    <div class="text-center w-[60%] max-[992px]:w-[80%] max-[768px]:w-[90%] font-normal text-[1.15rem] max-[992px]:text-[1rem] max-[768px]:text-[0.8rem] max-[480px]:text-[0.6rem]">
      <p class="mb-4">If minimun sales for prize position #1 and #2 are not met, then only prizes 3, 4 and 5 will be delivered to top affilaites</p>
      <p>Teams of up to 2 are allowed for the contest. The leaderboard will be based on the front end sales during <span class="font-semibold">5 days</span> launch ending on <span class="font-semibold">14 March 2024</span> midnight at 23:59 EST.</p>
    </div>
  </section>


  <!-- Sales Funnel -->
  <section class="relative bg-[#4A3E5C] overflow-hidden flex flex-col justify-center items-center py-16 max-[992px]:py-12 max-[768px]:py-10 max-[480px]:py-5 px-20 max-[992px]:px-16 max-[480px]:px-12">
    <div>
      <img class="absolute -top-10 max-[480px]:-top-5 left-0 w-[6rem] max-[768px]:w-[5rem] max-[480px]:w-[3rem]" src="./img/skull.png" alt="">
    </div>
    <div>
      <img class="absolute -bottom-10 max-[768px]:-bottom-8 max-[480px]:-bottom-5 -left-32 max-[768px]:-left-28 max-[480px]:-left-16 w-[15rem] max-[992px]:w-[12rem] max-[768px]:w-[10rem] max-[480px]:w-[6rem]" src="./img/finger.png" alt="">
    </div>
    <div>
      <img class="absolute -top-20 max-[480px]:-top-16 -right-28 max-[992px]:-right-24 max-[768px]:-right-20 max-[480px]:-right-16 w-[16rem] max-[992px]:w-[12rem] max-[768px]:w-[9rem] max-[480px]:w-[7rem]" src="./img/star.png" alt="">
    </div>
    <div>
      <img class="absolute -bottom-32 max-[992px]:-bottom-20 max-[768px]:-bottom-16 max-[480px]:-bottom-8 right-80 max-[992px]:right-40 max-[768px]:right-32 max-[480px]:right-24 w-[18rem] max-[992px]:w-[12rem] max-[768px]:w-[10rem] max-[480px]:w-[5rem]" src="./img/eye.png" alt="">
    </div>
    <div class="relative z-10 text-center flex flex-col justify-center items-center">
      <div class="text-center w-[60%] max-[992px]:w-[80%] max-[768px]:w-[90%] max-[468px]:w-[100%] text-white">
        <h1 class="happyHalloween text-[3.5rem] max-[992px]:text-[2.5rem] max-[768px]:text-[2.25rem] max-[480px]:text-[1.75rem] mb-1">Sales Funnel</h1>
        <h3 class="font-normal text-[1.15rem] max-[992px]:text-[1rem] max-[768px]:text-[0.8rem] max-[480px]:text-[0.5rem]">Our sales funnel will generate more profit for you, enjoy multiple commission from our high converting sales funnel.</h3>
      </div>
      <div class="grid grid-rows-1 grid-cols-4 px-24 max-[992px]:px-10 max-[768px]:px-0 gap-4 max-[992px]:gap-2 mt-10 max-[768px]:mt-6 max-[480px]:mt-4">
        <div class="">
          <img src="./img/frontend-funnel.png" alt="">
        </div>
        <div class="">
          <img src="./img/upsell-funnel.png" alt="">
        </div>
        <div class="">
          <img src="./img/downsell-funnel.png" alt="">
        </div>
        <div class="">
          <img src="./img/upsell2-funnel.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <!-- Terms and Condition -->
  <section class="bg-[url('./img/bg-6.png')] bg-cover bg-center bg-no-repeat bg-fixed py-16 max-[992px]:py-12 max-[768px]:py-10 max-[480px]:py-5 px-28 max-[992px]:px-16 max-[768px]:px-10 max-[480px]:px-5">
    <div class="flex justify-center items-center text-white w-full">
      <h1 class="happyHalloween text-center text-[3.5rem] max-[992px]:text-[2.5rem] max-[768px]:text-[2rem] max-[480px]:text-[1.25rem]">Affiliate Promotion Terms & Conditions</h1>
    </div>
    <div class="grid grid-cols-3 max-[992px]:grid-cols-1 gap-28 max-[992px]:gap-12 max-[480px]:gap-6 place-items-center mt-12 max-[992px]:mt-8 max-[480px]:mt-4">
      <div class="text-white col-span-2 max-[992px]:col-span-1">
        <p class="text-[1.15rem] max-[480px]:text-[0.75rem]">Before joining this affiliate program, please read carefully and agree to the following rules:</p>
        <div class="mt-2 flex flex-col justify-center items-start gap-2 max-[480px]:gap-1">
          <div class="flex justify-start items-start gap-2 font-light">
            <img class="w-[1.5rem] max-[480px]:w-[1.15rem]" src="./img/skull-poin.png" alt="poin">
            <p class="max-[480px]:text-[0.65rem]">You cannot use a 3rd party system to send email promotions. All email contacts must be your own opt-in email list.</p>
          </div>
          <div class="flex justify-start items-start gap-2 font-light">
            <img class="w-[1.5rem] max-[480px]:w-[1.15rem]" src="./img/skull-poin.png" alt="poin">
            <p class="max-[480px]:text-[0.65rem]">You cannot use paid to click traffic, click exchange traffic, cheap traffic, or any other junk traffic.</p>
          </div>
          <div class="flex justify-start items-start gap-2 font-light">
            <img class="w-[1.5rem] max-[480px]:w-[1.15rem]" src="./img/skull-poin.png" alt="poin">
            <p class="max-[480px]:text-[0.65rem]">You cannot run negative PPC or iframe domain campaigns. This creates a bad image for the company and will result in immediate termination from the program.
            </p>
          </div>
          <div class="flex justify-start items-start gap-2 font-light">
            <img class="w-[1.5rem] max-[480px]:w-[1.15rem]" src="./img/skull-poin.png" alt="poin">
            <p class="max-[480px]:text-[0.65rem]">You cannot earn commission on your own purchases.
              If you have a new affiliate account, your payments will be delayed until you have a good track record.</p>
          </div>
          <div class="flex justify-start items-start gap-2 font-light">
            <img class="w-[1.5rem] max-[480px]:w-[1.15rem]" src="./img/skull-poin.png" alt="poin">
            <p class="max-[480px]:text-[0.65rem]">You must accurately represent the product and its features and benefits to customers. Misleading claims, inaccurate information, or false testimonials will result in immediate termination from the program.</p>
          </div>
          <div class="flex justify-start items-start gap-2 font-light">
            <img class="w-[1.5rem] max-[480px]:w-[1.15rem]" src="./img/skull-poin.png" alt="poin">
            <p class="max-[480px]:text-[0.65rem]">Bonuses from this page can only be used to promote Spookids. You cannot re-use, re-sell, redistribute, copy, or edit any of the bonus content.</p>
          </div>
        </div>
      </div>
      <div class="w-full flex place-content-center">
        <img class="w-[25rem] max-[992px]:w-[28rem] max-[480px]:w-[18rem]" src="./img/terms.png" alt="">
      </div>
    </div>
  </section>


  <script src="./js/script.js"></script>
  <script src="./script.js"></script>
</body>
</html>