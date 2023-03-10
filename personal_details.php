<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.46.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/jquery.min.js"></script>
  </head>
  <body class="">
    <div class="bg-center bg-cover h-screen" style="background-image: url(assets/2.jpeg)">
      <div class="bg-blue-900 bg-opacity-50 flex flex-col justify-center items-center h-screen w-full px-5">
        <form id="aform" method="post" enctype="multipart/form-data" class="flex flex-col items-center gap-6 w-full h-full max-w-lg">
          <!-- Progress Header starts here -->
          <header class='flex w-full justify-center pt-4'>
            <div class="w-full flex flex-col items-center gap-2 p-1">
              <span class="flex flex-shrink-0 items-center justify-center w-5 h-5 rounded-full bg-orange-500 text-white"> 1 </span>
              <span class="block text-center text-white text-sm">Personal Contact</span>
            </div>
            <div class="w-full flex flex-col items-center gap-2 p-1">
              <span class="flex flex-shrink-0 items-center justify-center w-5 h-5 rounded-full bg-orange-500 text-white"> 2 </span>
              <span class="block text-center text-white text-sm">Personal Contact</span>
            </div>
            <div class="w-full flex flex-col items-center gap-2 p-1">
              <span class="flex flex-shrink-0 items-center justify-center w-5 h-5 rounded-full bg-orange-500 text-white"> 3 </span>
              <span class="block text-center text-white text-sm">Course</span>
            </div>
            <div class="w-full flex flex-col items-center gap-2 p-1">
              <span class="flex flex-shrink-0 items-center justify-center w-5 h-5 rounded-full bg-orange-500 text-white"> 4 </span>
              <span class="block text-center text-white text-sm">Payment</span>
            </div>
          </header>
          <!-- Progress Header Ends here -->

          <!-- Progress Content starts here -->
          <main class="carousel relative w-full h-full max-w-md mb-auto bg-white rounded-md">

            <!-- Slider 1 starts here -->
            <div id="slide1" class="carousel-item relative flex flex-col items-center gap-4 w-full h-full bg-white py-3 rounded-md">
              <h3 class="w-full flex justify-between items-center font-semibold text-center text-blue-900 pb-4 px-6">
                <span class='flex w-full justify-center text-2xl'>Contact Information</span>
              </h3>
              <div class='flex flex-col w-full items-center gap-3 md:gap-5 px-5 mb-auto'>
                <div class="relative w-full max-w-sm">
                  <label for='fullname' class="block mb-2 text-sm font-medium text-blue-900">Name</label>
                  <div class="relative w-full max-w-sm">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                      <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="form-icon w-3 h-3 text-gray-500"
                        fill="currentColor"
                        viewBox="0 0 448 512">
                        <path
                          d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                      </svg>
                    </div>
                    <input name='fullname' type="text" id="fullname" class="text-field bg-transparent border border-gray-300 focus:border-orange-500 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:shadow-lg focus:shadow-orange-100 shadow outline-none block w-full pl-10 p-2.5"
                      placeholder="Full Name">
                  </div>
                </div>

                <div class="relative w-full max-w-sm">
                  <label for='phone' class="block mb-2 text-sm font-medium text-blue-900">Phone</label>
                  <div class="relative w-full max-w-sm">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                      <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="form-icon w-3 h-3 text-gray-500"
                        fill="currentColor"
                        viewBox="0 0 448 512">
                        <path
                          d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                      </svg>
                    </div>
                    <input name='phone' type="text" id="phone" class="text-field bg-transparent border border-gray-300 focus:border-orange-500 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:shadow-lg focus:shadow-orange-100 shadow outline-none block w-full pl-10 p-2.5"
                      placeholder="Phone Number">
                  </div>
                </div>
                
                <div class="relative w-full max-w-sm">
                  <label for='email' class="block mb-2 text-sm font-medium text-blue-900">Email</label>
                  <div class="relative w-full max-w-sm">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                      <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="form-icon w-3 h-3 text-gray-500"
                        fill="currentColor"
                        viewBox="0 0 448 512">
                        <path
                          d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                      </svg>
                    </div>
                    <input name='email' type="email" id="email" class="text-field bg-transparent border border-gray-300 focus:border-orange-500 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:shadow-lg focus:shadow-orange-100 shadow outline-none block w-full pl-10 p-2.5"
                      placeholder="Email">
                  </div>
                </div>
                
                <div class="relative w-full max-w-sm">
                  <label for='address' class="block mb-2 text-sm font-medium text-blue-900">Address</label>
                  <div class="relative w-full max-w-sm">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                      <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="form-icon w-3 h-3 text-gray-500" fill="currentColor" viewBox="0 0 448 512">
                      <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c.2 35.5-28.5 64.3-64 64.3H128.1c-35.3 0-64-28.7-64-64V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24zM352 224c0-35.3-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64s64-28.7 64-64zm-96 96c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80H256z" />
                    </svg>
                    </div>
                    <input name='address' type="text" id="address" class="text-field bg-transparent border border-gray-300 focus:border-orange-500 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:shadow-lg focus:shadow-orange-100 shadow outline-none block w-full pl-10 p-2.5"
                      placeholder="Address">
                  </div>
                </div>
              </div>

              <div class="w-full flex gap-3 justify-between items-center font-semibold text-center text-white pb-4 px-6">
                <button type='button' class='flex w-full justify-center rounded-md text-lg bg-orange-500 py-1' onclick="goToPage('2')">
                  <span>Next</span>
                </button>
              </div>
            </div>
            <!-- Slider 1 ends here -->

            <!-- Slider 2 starts here -->
            <div id="slide2" class="carousel-item relative flex flex-col items-center gap-4 w-full h-full bg-white py-3 rounded-md">
              <h3 class="w-full flex justify-between items-center font-semibold text-center text-blue-900 pb-4 px-6">
                <span class='flex w-full justify-center text-2xl'>Personal Details</span>
              </h3>
              <div class='flex flex-col w-full items-center gap-3 md:gap-5 px-5'>
                <div class="relative w-full max-w-sm">
                  <label for="about" class="block mb-2 text-sm font-medium text-blue-900">Describe
                    Yourself</label>
                  <textarea type="text" rows='1' name='aboutyourself' class="bg-transparent border border-gray-300 focus:border-orange-500 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:shadow-lg focus:shadow-orange-100 shadow outline-none block w-full p-2.5" placeholder="Please, tell us about yourself..."></textarea>
                </div>
              </div>
              <div class='flex flex-col w-full items-center gap-3 md:gap-5 px-5'>
                <div class="relative w-full max-w-sm">
                  <h4 for="about" class="block mb-2 text-sm font-medium text-blue-900">Do you have any tech skills?</h4>
                  <textarea type="text" rows='1' name='techskills' class="bg-transparent border border-gray-300 focus:border-orange-500 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:shadow-lg focus:shadow-orange-100 shadow outline-none block w-full p-2.5" placeholder="Please, tell us about yourself..."></textarea>
                </div>
              </div>
              <div class='flex flex-col w-full items-center gap-3 md:gap-5 px-5'>
                <div class="relative w-full max-w-sm">
                  <label for="if-have-skills" class="block mb-2 text-sm font-medium text-blue-900">If yes, tell us about it</label>
                  <textarea type="text" rows='1' name='abouttechskills' class="bg-transparent border border-gray-300 focus:border-orange-500 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:shadow-lg focus:shadow-orange-100 shadow outline-none block w-full p-2.5" placeholder="Please, tell us about yourself..."></textarea>
                </div>
              </div>
              <div class="w-full px-6 pb-3">
                <h4 class="block mb-2 text-sm font-medium text-gray-900">Kindly upload your picture</h4>
                <div class="flex items-center justify-center w-full">
                  <label for="user-picture"
                    class="flex flex-col items-center justify-center w-full h-24 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                      <svg aria-hidden="true" class="w-5 h-5 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                        </path>
                      </svg>
                      <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                    </div>
                    <input id="user-picture" type="file" name="image" class="hidden" />
                  </label>
                </div>
              </div>
              <div class="w-full flex gap-3 justify-between items-center font-semibold text-center text-white pb-4 px-6">
                <button type='button' class='flex w-full justify-center rounded-md text-lg bg-orange-500 py-1' onclick="goToPage('1')">
                  <span>Prev</span>
                </button>
                <button type='button' class='flex w-full justify-center rounded-md text-lg bg-orange-500 py-1' onclick="goToPage('3')">
                  <span>Next</span>
                </button>
              </div>
            </div>
            <!-- Slider 2 ends here -->

            <!-- Slider 3 starts here -->
            <div id="slide3" class="carousel-item relative flex flex-col items-center gap-4 w-full h-full bg-white py-3 rounded-md">
              <h3 class="w-full flex justify-between items-center font-semibold text-center text-blue-900 pb-4 px-6">
                <span class='flex w-full justify-center text-2xl'>Course</span>
              </h3>
              <div class='flex flex-col w-full h-full items-center gap-3 md:gap-5 px-5'>
                <div class="relative w-full max-w-sm mb:auto h-auto">
                  <h4 for="about" class="block mb-2 text-lg font-semibold text-blue-900">What do you want to learn?</h4>
                  <div class='flex flex-col gap-2 text-gray-600'>
                    <div class='flex items-center'>
                      <input id="web-dev" type="radio" name='skill' value="Website Development" class="">
                      <label for="web-dev" class="ml-1 font-medium ">Website Development (N35,000)</label>
                    </div>
                    <div class='flex items-center'>
                      <input id="web-dev" type="radio" name='skill' value="Android Development" class="">
                      <label for="web-dev" class="ml-1 font-medium">Android Development (N45,000)</label>
                    </div>
                    <div class='flex items-center'>
                      <input id="web-dev" type="radio" name='skill' value="Front-End Development" class="">
                      <label for="web-dev" class="ml-1 font-medium ">Front-End Development (N45,000)</label>
                    </div>
                    <div class='flex items-center'>
                      <input id="web-dev" type="radio" name='skill' value="Back-End Development" class="">
                      <label for="web-dev" class="ml-1 font-medium ">Back-End Development (N60,000)</label>
                    </div>
                    <div class='flex items-center'>
                      <input id="web-dev" type="radio" name='skill' value="Data Science" class="">
                      <label for="web-dev" class="ml-1 font-medium ">Data Science (N60,000)</label>
                    </div>
                  </div>
                </div>
                <div class="w-full flex gap-3 justify-between items-center font-semibold text-center text-white pb-4 px-6">
                  <button type='button' class='flex w-full justify-center rounded-md text-lg bg-orange-500 py-1' onclick="goToPage('2')">
                    <span>Prev</span>
                  </button>
                  <button type='button' class='flex w-full justify-center rounded-md text-lg bg-orange-500 py-1' onclick="goToPage('4')">
                    <span>Next</span>
                  </button>
                </div>
              </div>
            </div>
            <!-- Slider 3 ends here -->

            <!-- Slider 4 starts here -->
            <div id="slide4" class="carousel-item relative flex flex-col items-center gap-4 w-full h-full bg-white py-3 rounded-md">
              <h3 class="w-full flex justify-between items-center font-semibold text-center text-blue-900 pb-4 px-6">
                <button type='button' class='block text-lg' onclick="goToPage('3')">
                  <span><i class='fa fa-arrow-left'></i></span>
                  <span class='sr-only'>Page 3</span>
                </button>
                <span class='flex w-full justify-center text-2xl'>Payment Details</span>
              </h3>
              <div class='flex flex-col w-full items-center gap-3 md:gap-5 px-5'>
                <div class="relative w-full max-w-sm">
                  <h4 for="about" class="block mb-2 text-lg font-semibold text-blue-900">How do you want join?</h4>
                  <div class='flex flex-col gap-2 text-gray-600'>
                    <div class='flex items-baseline'>
                      <input id="physical-join" type="radio" value='physical' name='joinmode' class="">
                      <label for="physical-join" class="ml-1 font-medium">Physical</label>
                    </div>
                    <div class='flex items-baseline'>
                      <input id="virtual-join" type="radio" value='virtual' name='joinmode' class="">
                      <label for="virtual-join" class="ml-1 font-medium ">Virtual (Normal charge plus additional N15,000</label>
                    </div>
                  </div>
                </div>

                <div class="relative w-full  max-w-sm">
                  <h4 for="about" class="block mb-2 text-lg font-semibold text-blue-900">Mode of payment</h4>
                  <div class='flex flex-col gap-2 text-gray-600'>
                    <div class='flex items-baseline'>
                      <input id="bank-pay" type="radio" value='bank' name='paymentmode' class="">
                      <label for="bank-pay" class="ml-1 font-medium">Bank</label>
                    </div>
                    <div class='flex items-baseline'>
                      <input id="cash-pay" type="radio" value='cash' name='paymentmode' class="">
                      <label for="cash-pay" class="ml-1 font-medium ">Cash</label>
                    </div>
                    <div class='flex items-baseline'>
                      <input id="other-pay" type="radio" value='other' name='paymentmode' class="">
                      <label for="other-pay" class="ml-1 font-medium ">Other</label>
                    </div>
                  </div>
                  <div id="resp"></div>
                  <div class="w-full flex gap-3 justify-between items-center font-semibold text-center text-white mt-5 pb-2 px-3">
                    <button type='submit' class='flex w-full justify-center rounded-md text-lg bg-orange-500 py-1'>
                      Register
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Slider 4 ends here -->
          </main>
          <!-- Progress Content ends here -->
          <footer class="relative">
            <div class="absolute bottom-0 -right-10 px-6 hidden">
              <div class="flex justify-end">
                <div class="flex text-center">
                  <img src="assets/Stem.png" class="rounded-lg w-18 h-8" alt="" />
                  <div class="">
                    <h5 class="text-lg text-left font-medium text-white">STEMLAB</h5>
                    <h5 class="text-lg font-medium text-white">INTERNSHIP</h5>
                    <h5 class="text-lg font-medium text-left text-white">2023</h5>
                  </div>
                </div>
              </div>
            </div>

            <div class="flex flex-col justify-end items-center p-4 gap-2">
              <p class="text-sm text-center text-white">
                Welcome to the registration page of the STEMLAB Internship 2023
              </p>
              <div class="text-gray-600">
                <div class="flex justify-center items-center gap-3">
                  <a href="#" class="text-white">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" class="w-2.5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                      <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                      </path>
                    </svg>
                  </a>
                  <a href="#" class="text-white">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                      </path>
                    </svg>
                  </a>
                  <a href="#" class="text-white">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" class="w-3.5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
                      <path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z">
                      </path>
                    </svg>
                  </a>
                  <a href="#" class="text-white">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="w-3.5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                      <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                      </path>
                    </svg>
                  </a>
                  <a href="#" class="text-white">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" class="w-3.5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                      <path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                      </path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </footer>
        </form>
        
      </div>
    </div>

    <script>
      const goToPage = (page) => {
        window.location.href = `#slide${page}`;
      }
      
      function checkCondition(nodeList, condition) {
        for (let i = 0; i < nodeList.length; i++) {
          if (!condition(nodeList[i])) {
            return false;
          }
        }
        return true;
      }

      const enableGoNext = () => {
        // slide1 Controls
        const slide1 = document.querySelector('#slide1');
        const slide1Inputs = slide1.querySelectorAll('input');
        const slide1Condition = node => node.value.length !== 0;
        const slide1NextBtn = slide1.querySelector('.next-btn');
        slide1NextBtn.disabled = true;
        slide1Inputs.forEach(input => {
          input.addEventListener('keyup', (e) => {
            const slide1Result = checkCondition(slide1Inputs, slide1Condition);
            if (slide1Result) {
              slide1NextBtn.disabled = false;
              slide1NextBtn.classList.add('text-orange-500');
              slide1NextBtn.classList.remove('text-blue-900');
            } else {
              slide1NextBtn.disabled = true;
              slide1NextBtn.classList.add('text-blue-900');
              slide1NextBtn.classList.remove('text-orange-500');
            }
          })
        })

        // slide2 Controls
        const slide2 = document.querySelector('#slide2');
        const slide2Inputs = slide2.querySelectorAll('input');
        console.log(slide2Inputs);

        const slide2FileCondition = (node) => {
          console.log(node.value !== '');
          console.log('Gehbewn;l')
          return node.value !== '' && checkCondition(slide2Inputs, slide2OtherInputCondition);
        };

        const slide2OtherInputCondition = (node) => {
          console.log(node.value.length !== 0)
          return node.value.length !== 0 && checkCondition([slide2Inputs[slide2Inputs.length-1]], slide2FileCondition);
        };

        const slide2NextBtn = slide2.querySelector('.next-btn');
          slide2Inputs.forEach((input, index, arr) => {
            const fileInput = arr[arr.length-1];
            console.log(fileInput);
            console.log(input);
            if (arr[input] === fileInput) {
              console.log(fileInput);
              console.log('Changed!');
              fileInput.addEventListener('change', (e) => {
                const slide2Result1 = checkCondition(e.target, slide2FileCondition);
                if (slide2Result1) {
                  console.log(slide2Result1);
                  slide2NextBtn.disabled = false;
                  slide2NextBtn.classList.add('text-orange-500');
                  slide2NextBtn.classList.remove('text-blue-900');
                } else {
                  console.log('False');
                  slide2NextBtn.disabled = true;
                }
              })
            } else {
              input.addEventListener('keyup', (e) => {
                const slide2Result2 = checkCondition(slide2Inputs, slide2OtherInputCondition);
                console.log('hello');
                if (slide2Result2) {
                  console.log('hello');
                  slide2NextBtn.disabled = false;
                  slide2NextBtn.classList.add('text-orange-500');
                  slide2NextBtn.classList.remove('text-blue-900');
                } else {
                  console.log('False');
                  slide2NextBtn.disabled = true;
                }
              })
            }
          });

        // slide3 Controls
        const slide3 = document.querySelector('#slide3');
        const slide3Inputs = slide3.querySelectorAll('input');
        const slide3Condition = node => node.value.length !== 0;
        const slide3NextBtn = slide3.querySelector('.next-btn');
        slide3Inputs.forEach(input => {
          input.addEventListener('keyup', (e) => {
            const slide3Result = checkCondition(slide3Inputs, slide3Condition);
            if (slide3Result) {
              console.log('hello');
              slide3NextBtn.disabled = false;
              slide3NextBtn.classList.add('text-orange-500');
              slide3NextBtn.classList.remove('text-blue-900');
            } else {
              console.log('False');
              slide3NextBtn.disabled = true;
            }
          })
        })
      }

      enableGoNext();

      const textFields = document.querySelectorAll('.text-field');
      textFields.forEach(textField => {
        const currentInputIcon = textField.parentElement.querySelector('.form-icon');
        textField.addEventListener('focus', (e) => {
          currentInputIcon.classList.remove('text-gray-500');
          currentInputIcon.classList.add('text-orange-500');
        });

        textField.addEventListener('blur', (e) => {
          currentInputIcon.classList.remove('text-orange-500');
          currentInputIcon.classList.add('text-gray-500');
        })
      })
    </script>
	<script>
$(document).ready(function () {
  // submit add book
  
  $("#aform").submit(function(e) {
    e.preventDefault();

    $("#resp").html("");
    var formData = new FormData(this);

    $.ajax({
        url: 'signup.php',
        type: 'POST',
        data: formData,
        success: function (data) {
            if(data == 'yes'){
                window.location.href = "success.php";
            }else{
           $("#resp").html(data);
            }
          // $("#aform")[0].reset();
        },
        cache: false,
        contentType: false,
        processData: false
    });
});

});
</script>
  </body>
</html>