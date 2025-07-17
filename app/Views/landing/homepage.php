<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Sugar Catculator</title>
    <script>
        tailwind.config = {
            theme: {
            extend: {
                fontFamily: {
                poppins: ['Poppins', 'sans-serif'],
                },
            }
            }
        }
    </script>
    <style>
        .text-outline {
            text-shadow:
            -1px -1px 0 #B08968,
            1px -1px 0 #B08968,
            -1px  1px 0 #B08968,
            1px  1px 0 #B08968;
        }
    </style>
</head>

<body class="pt-24 font-poppins bg-[#EDE0D4] text-[#7F5539] bg-gradient-to-b from-[#EDE0D4] to-[#CEBBAA] text-[#7F5539]">
    <?= view('navbar/navbar') ?>
    <!-- div bagian judul -->
    <div class="w-full h-[650px] bg-[#EDE0D4] text-center mt-4">
        <h1 class="font-bold text-6xl">
            <span class="font-bold text-6xl text-white text-outline">Welcome </span>to
        </h1>
        <h1 class="mt-6 text-9xl text-center font-bold flex justify-center items-center gap-2">
            Sugar 
            <span class="flex items-center">
                C
                <span class="inline-block h-[0.85em] w-[0.85em] pt-[0.05em]">
                    <svg version="1.1" id="Layer_1" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 -5 54 70" fill="none" stroke="#7f5539" class="w-full h-full">
                        <g>
                            <path d="M42.3,54.2c0-1-1.9-6.1,3.9-14.2S51,28.9,51,25.8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M30.3,32.6c7.2,6.8,12.1,17,12.1,23c0,9.7-9.3,5.4-21,5.4S0.1,65.2,0.1,55.6c0-6.1,4.9-16.2,12.1-23" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M27.2,33c8.7-1.8,15.1-7.4,15.1-14.1c0-2.9-2-7.2-2.8-8.8C40.4,8.4,41,0.9,39.6,0c-1.5-0.8-8.3,6.4-8.3,6.4c-3.2-1.4-6-2.2-10.1-2.2S13.3,5,10.1,6.4c0,0-5.6-7.1-7.1-6.2C1.6,1,1.9,8.1,2.7,10C1.9,11.6,0,16,0,18.9C0,25.6,6.4,31.2,15.1,33" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                </span>
                tculator
            </span>
        </h1>
        <!-- card section -->
        <div class="mt-10 ml-10 mr-10 mb-5 flex justify-center gap-6 flex-wrap p-10 text-center">
            <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4997432/" target="_blank" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-lg hover:border-black hover:border-lg">
                <div class="flex items-center gap-2 mb-2">
                    <div class="w-10 h-10 mt-2 ml-3">
                        <svg fill="#7f5539" viewBox="0 0 512 512" id="Flat" xmlns="http://www.w3.org/2000/svg" stroke="#7f5539" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.512"></g><g id="SVGRepo_iconCarrier"> <path d="M189.02051,145.33984A31.35052,31.35052,0,0,1,174.0918,126.606a47.99847,47.99847,0,0,0-92.18262-.00635,31.35,31.35,0,0,1-14.92969,18.74023,44.00739,44.00739,0,0,0,38.11719,79.21094,60.16331,60.16331,0,0,1,45.80664,0,44.00678,44.00678,0,0,0,38.11719-79.21094ZM168,204a19.86485,19.86485,0,0,1-7.80078-1.57568c-.04395-.019-.08887-.0376-.13379-.05616a84.02637,84.02637,0,0,0-64.13086,0c-.04492.01856-.08984.03711-.13379.05616a20.00673,20.00673,0,0,1-17.31445-36.02246c.03515-.01954.07129-.03907.10644-.05909A55.21137,55.21137,0,0,0,104.957,133.29541a23.99908,23.99908,0,0,1,46.08887.00439,55.20367,55.20367,0,0,0,26.36133,33.043c.03515.02.07129.03955.10644.05909A20.00364,20.00364,0,0,1,168,204Zm64-100a24,24,0,1,1-24-24A23.99994,23.99994,0,0,1,232,104ZM48,128a24,24,0,1,1,24-24A23.99994,23.99994,0,0,1,48,128ZM72,56A24,24,0,1,1,96,80,23.99994,23.99994,0,0,1,72,56Zm64,0a24,24,0,1,1,24,24A23.99994,23.99994,0,0,1,136,56Z"></path> </g></svg>            
                    </div>
                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 flex items-center">
                        Apa Hubungan Gula dan Risiko Obesitas?
                    </h5>
                </div>
                <br>
                <p class="font-normal text-gray-700">Tambah Pengetahuan Anda Mengenai konsumsi gula berlebih dengan peningkatan risiko obesitas.</p>
            </a>
            <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7084203/" target="_blank" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-lg hover:border-black hover:border-lg">
                <div class="flex items-center gap-2 mb-2">
                    <div class="w-10 h-10 mt-2 ml-6">
                        <svg fill="#7f5539" viewBox="0 0 512 512" id="Flat" xmlns="http://www.w3.org/2000/svg" stroke="#7f5539" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.512"></g><g id="SVGRepo_iconCarrier"> <path d="M189.02051,145.33984A31.35052,31.35052,0,0,1,174.0918,126.606a47.99847,47.99847,0,0,0-92.18262-.00635,31.35,31.35,0,0,1-14.92969,18.74023,44.00739,44.00739,0,0,0,38.11719,79.21094,60.16331,60.16331,0,0,1,45.80664,0,44.00678,44.00678,0,0,0,38.11719-79.21094ZM168,204a19.86485,19.86485,0,0,1-7.80078-1.57568c-.04395-.019-.08887-.0376-.13379-.05616a84.02637,84.02637,0,0,0-64.13086,0c-.04492.01856-.08984.03711-.13379.05616a20.00673,20.00673,0,0,1-17.31445-36.02246c.03515-.01954.07129-.03907.10644-.05909A55.21137,55.21137,0,0,0,104.957,133.29541a23.99908,23.99908,0,0,1,46.08887.00439,55.20367,55.20367,0,0,0,26.36133,33.043c.03515.02.07129.03955.10644.05909A20.00364,20.00364,0,0,1,168,204Zm64-100a24,24,0,1,1-24-24A23.99994,23.99994,0,0,1,232,104ZM48,128a24,24,0,1,1,24-24A23.99994,23.99994,0,0,1,48,128ZM72,56A24,24,0,1,1,96,80,23.99994,23.99994,0,0,1,72,56Zm64,0a24,24,0,1,1,24,24A23.99994,23.99994,0,0,1,136,56Z"></path> </g></svg>            
                    </div>
                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 flex items-center">
                        Hitung Gula dalam Makanan dan Minuman Anda
                    </h5>
                </div>
                <br>
                <p class="font-normal text-gray-700">Makanan dan Minuman manis adalah penyumbang utama asupan gula harian, hitung pelajari dampaknya terhadap kesehatan Anda.</p>
            </a>
            <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC9248280/" target="_blank" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-lg hover:border-black hover:border-lg">
                <div class="flex items-center gap-2 mb-2">
                    <div class="w-10 h-10 mt-2 ml-6">
                        <svg fill="#7f5539" viewBox="0 0 512 512" id="Flat" xmlns="http://www.w3.org/2000/svg" stroke="#7f5539" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.512"></g><g id="SVGRepo_iconCarrier"> <path d="M189.02051,145.33984A31.35052,31.35052,0,0,1,174.0918,126.606a47.99847,47.99847,0,0,0-92.18262-.00635,31.35,31.35,0,0,1-14.92969,18.74023,44.00739,44.00739,0,0,0,38.11719,79.21094,60.16331,60.16331,0,0,1,45.80664,0,44.00678,44.00678,0,0,0,38.11719-79.21094ZM168,204a19.86485,19.86485,0,0,1-7.80078-1.57568c-.04395-.019-.08887-.0376-.13379-.05616a84.02637,84.02637,0,0,0-64.13086,0c-.04492.01856-.08984.03711-.13379.05616a20.00673,20.00673,0,0,1-17.31445-36.02246c.03515-.01954.07129-.03907.10644-.05909A55.21137,55.21137,0,0,0,104.957,133.29541a23.99908,23.99908,0,0,1,46.08887.00439,55.20367,55.20367,0,0,0,26.36133,33.043c.03515.02.07129.03955.10644.05909A20.00364,20.00364,0,0,1,168,204Zm64-100a24,24,0,1,1-24-24A23.99994,23.99994,0,0,1,232,104ZM48,128a24,24,0,1,1,24-24A23.99994,23.99994,0,0,1,48,128ZM72,56A24,24,0,1,1,96,80,23.99994,23.99994,0,0,1,72,56Zm64,0a24,24,0,1,1,24,24A23.99994,23.99994,0,0,1,136,56Z"></path> </g></svg>            
                    </div>
                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 flex items-center gap-2">
                        Prediksi Risiko Obesitas yang Anda Miliki
                    </h5>
                </div>
                <br>
                <p class="font-normal text-gray-700">Studi mengenai pemodelan risiko obesitas berbasis pola makan, aktivitas fisik, dan konsumsi gula.</p>
            </a>
        </div>
        <p class="text-sm text-gray-500 italic animate-bounce">Scroll down to explore 🐾</p>
    </div>
    <!-- second page -->

    <div class="w-full h-[732px] bg-[#EDE0D4] pt-24 text-center">
        <h1 class="text-6xl font-bold">
            <span>Sugar CatCulator Service</span> <br> That Could You Choose
        </h1>
        <!-- card section -->
        <div class="m-10 flex justify-center gap-6 flex-wrap p-10">
            <a class="w-full sm:w-[48%] max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow-lg hover:border-black transition-all">
                <div class="w-10 h-10 justify-center mb-4">
                    <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--emojione" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4.5 2.2c-3.5 2.2-3.4 25.5.8 33l26.1-16c-4-7.1-23.6-19-26.9-17" fill="#7f5539"> </path> <path d="M9.5 11.3c-1.5.9-2.2 16.2.4 21l16.7-10.2c-2.4-4.6-15.7-11.6-17.1-10.8" fill="#f7a4a4"> </path> <path d="M59.5 2.2c3.5 2.2 3.4 25.5-.7 33l-26.1-16c3.9-7.1 23.5-19 26.8-17" fill="#7f5539"> </path> <path d="M54.5 11.3c1.5.9 2.2 16.2-.4 21L37.3 22.1c2.5-4.6 15.8-11.6 17.2-10.8" fill="#f7a4a4"> </path> <path d="M31.8 13.1C4.7 13.1 2.2 32.5 2.2 43.5C2.2 48 15.4 62 31.8 62c16.4 0 29.6-14 29.6-18.5c0-11-2.5-30.4-29.6-30.4" fill="#7f5539"> </path> <path d="M24.2 38.7s-3.1 4.8-8.8 3.3c-5.7-1.5-6-7.2-6-7.2s3.1-4.8 8.8-3.3c5.8 1.5 6 7.2 6 7.2" fill="#ffffff"> </path> <path d="M23.6 36.2s-2.7 3-6.5 3c-4.1 0-6.5-5.9-6.5-5.9s2.7-3.1 7.6-1.9c4.5 1.2 5.4 4.8 5.4 4.8" fill="#ffffff"> </path> <path d="M19.4 36.1c0 6.6-3.2 6.6-3.2 0c.1-6.6 3.2-6.6 3.2 0" fill="#7f5539"> </path> <path d="M39.4 38.7s3.1 4.8 8.8 3.3c5.7-1.5 6-7.2 6-7.2s-3.1-4.8-8.8-3.3c-5.8 1.5-6 7.2-6 7.2" fill="#ffffff"> </path> <path d="M39.9 36.2s2.7 3 6.5 3c4.1 0 6.5-5.9 6.5-5.9s-2.7-3.1-7.6-1.9c-4.5 1.2-5.4 4.8-5.4 4.8" fill="#ffffff"> </path> <path d="M44.1 36.1c0 6.6 3.2 6.6 3.2 0s-3.2-6.6-3.2 0" fill="#7f5539"> </path> <path d="M40.4 44c-2.6-2-5.4-8.7-8.6-8.7S25.7 42 23.1 44c-4.1 3.2-15 6.8-15 6.8S19.7 61 31.7 61s23.6-10.2 23.6-10.2c.1 0-10.8-3.6-14.9-6.8" fill="#ffffff"> </path> <ellipse cx="31.8" cy="54.5" rx="1.7" ry="2.5" fill="#ff94a4"> </ellipse> <g fill="#7f5539"> <path d="M40.2 53.1c-1 .6-2.1.8-3.1.8c-1.1-.1-2.1-.4-2.9-1.1c-.8-.6-1.4-1.5-1.6-2.6l-.8-4.5l-.8 4.5c-.2 1-.8 1.9-1.6 2.6c-.8.7-1.9 1-2.9 1.1c-1.1 0-2.2-.2-3.1-.8c-1-.6-1.8-1.5-2.2-2.7c.1 1.3.7 2.5 1.7 3.4c1 .9 2.3 1.4 3.5 1.4c1.4.1 2.7-.3 3.8-1.1c.6-.4 1.1-1 1.5-1.6c.4.6.9 1.2 1.5 1.6c1.1.8 2.5 1.2 3.8 1.1c1.3-.1 2.6-.6 3.6-1.4c1-.9 1.7-2.1 1.7-3.4c-.3 1.1-1.1 2.1-2.1 2.7"> </path> <path d="M35.8 44.8c-.8-1-3.3-1.1-4-1.1c-.7 0-3.2.1-4 1.1c-.6.7-.1 2.5 1.4 4c1 1 1.9 1.3 2.6 1.3c.7 0 1.7-.3 2.6-1.3c1.5-1.6 2-3.3 1.4-4"> </path> </g> </g></svg>
                </div>
                <div class="flex">
                    <div class="text-left">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Hitung Risiko obesitas Anda</h5>
                        <p class="mt-9 font-normal text-gray-700">Menggunakan Lightweight Deep Learning untuk membantu anda dalam memprediksi risiko obesitas yang anda miliki.</p>
                        <button onclick="window.location.href='/main/predict'" type="button" class="mt-[1.7rem] py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-[#7f5539] hover:bg-gray-100 hover:text-[#b08968] focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Predict Now</button>
                    </div>
                    <div class="w-64 h-auto mr-10 ml-10 mt-6">
                        <svg viewBox="0 0 320 320" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M164.391 6.55509C133.551 2.42734 110.254 21.7924 98.5978 48.9429C93.6168 60.5448 89.2987 74.9506 86.1126 91.0286C92.1961 88.2624 96.4161 86.3983 96.4161 86.3983C98.8373 85.0698 120.959 80.0833 131.435 78.9181C144.96 72.5691 163.086 62.9612 163.836 62.0351C164.763 63.1797 183.008 76.1311 195.106 83.9049C200.053 84.734 209.658 87.0956 216.203 88.8965C211.728 78.1696 210.937 67.3417 210.202 57.2828C209.392 46.1996 208.651 36.0501 203.124 27.9983C193.607 14.1337 181.771 8.88131 164.391 6.55509ZM275.247 165.048C272.508 165.715 259.167 163.479 246.585 161.37C235.16 159.454 224.362 157.644 222.696 158.208C220.98 158.789 223.567 178.841 226.482 201.429C229.876 227.738 233.715 257.489 231.716 263.928C229.133 272.253 153.388 268.032 106.259 260.663C112.346 270.903 119.648 280.236 128.311 288.309C150.689 309.163 178.366 317.381 209.491 312.744C244.279 307.562 258.431 275.766 268.192 253.836L268.386 253.402C279.105 229.322 284.357 197.031 275.247 165.048ZM82.3301 184.99C86.0727 170.371 88.7903 158.945 87.3961 158.208C86.5981 157.786 83.9979 157.595 80.3993 157.525C80.6031 166.665 81.2279 175.866 82.3301 184.99ZM163.801 61.963C163.866 61.96 163.877 61.9847 163.836 62.0351C163.807 61.9994 163.795 61.9752 163.801 61.963Z" fill="#7f5539"></path> <path d="M96.4164 86.3983C146.029 96.9594 173.702 98.6555 222.696 90.8864M96.4164 86.3983C96.4164 86.3983 43.3575 109.836 42.2963 113.826C41.2351 117.815 39.4327 153.15 40.174 156.213C40.9153 159.277 83.6821 156.245 87.3964 158.208C91.1107 160.171 65.6421 237.997 69.3563 249.965C73.0705 261.934 228.002 275.897 231.716 263.928C235.431 251.96 218.982 159.466 222.696 158.208C226.41 156.95 275.533 167.498 275.755 164.691C275.978 161.884 280 116.319 280 113.826C280 111.332 222.696 90.8864 222.696 90.8864M96.4164 86.3983C98.8376 85.0699 120.959 80.0833 131.435 78.9181M222.696 90.8864C220.112 89.7576 202.461 85.1375 195.106 83.9049M159.556 39.5224C154.292 36.3849 152.136 31.2256 153.72 25.5594C155.332 19.7939 160.157 16.7968 166.454 16.0845C173.934 15.2383 179.345 19.3174 182.902 25.5594C186.228 31.3964 184.898 36.1645 182.902 42.5145C179.786 52.4272 163.801 61.963 163.801 61.963M163.801 61.963C165.073 61.9056 145.697 72.2236 131.435 78.9181M163.801 61.963C163.619 62.3667 182.631 75.8886 195.106 83.9049M131.435 78.9181C155.842 78.9181 171.76 80.9128 195.106 83.9049M214.738 104.351C214.738 104.351 230.885 98.8635 236.492 90.8864C239.887 86.0552 236.895 80.4297 241.798 76.9234C245.518 74.2628 253.471 74.43 253.471 74.43M253.471 74.43C253.471 74.43 252.772 81.9102 253.471 83.4062C254.169 84.9023 274.591 85.8996 275.755 84.4036C276.92 82.9076 277.347 68.4459 276.286 67.4485C275.225 66.4511 256.124 66.4511 254.532 67.4485C252.94 68.4458 253.471 74.43 253.471 74.43ZM114.987 138.261H121.885M128.782 138.261H121.885M121.885 138.261L117.109 161.2M117.109 161.2H109.681M117.109 161.2H126.129M241.798 124.298C241.567 129.442 241.552 131.521 241.798 133.274M258.246 119.81C258.227 122.336 257.985 124.201 256.654 129.285M256.654 139.258C256.877 142.179 256.84 143.817 256.654 146.739M87.3964 232.511C87.7156 235.627 87.7308 237.375 87.3964 240.49M92.7022 244.978C95.4182 245.597 97.0461 245.576 100.13 244.978M156.199 220.931C131.792 242.873 107.915 238.385 100.487 212.952C117.501 195.807 143.465 196.994 156.199 220.931ZM156.199 220.931C156.199 220.931 175.831 240.208 178.484 239.881C181.137 239.553 188.034 206.494 184.851 204.973C181.667 203.453 156.199 220.931 156.199 220.931ZM118.527 211.955L116.935 216.443M170.168 150.229C171.976 150.512 177.805 140.565 183.963 143.248C188.588 145.262 188.799 149.372 187.678 151.725C183.826 159.808 170.942 169.247 170.699 169.179C170.455 169.111 156.21 154.066 154.251 151.725C151.752 148.741 152.843 142.821 157.965 141.752C162.74 140.754 168.361 149.946 170.168 150.229Z" stroke="#000000" stroke-width="5" stroke-linecap="round"></path> </g></svg>
                    </div>
                </div>
            </a>
            <a class="w-full sm:w-[48%] max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow-lg hover:border-black transition-all">
                <div class="w-10 h-10 justify-center mb-4">
                    <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--emojione" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M60.9 2c1.8 13.4 1.5 24.2-1.2 31.1L34.9 14.7C39.8 9.6 49.8 3.5 60.9 2z" fill="#7f5539"> </path> <path d="M57.7 32.2L47.5 18.9s1.9-7.3 11.6-12.4c2.9 11.6-1.4 25.7-1.4 25.7" fill="#f7a4a4"> </path> <path d="M53.8 29.2L47.5 21s2.6-5 8.6-8.2c-3.5 7.5-2.3 16.4-2.3 16.4" fill="#f78d8d"> </path> <path d="M3.1 2C1.3 15.4 1.6 26.2 4.3 33.1l24.8-18.5C24.2 9.6 14.2 3.5 3.1 2z" fill="#7f5539"> </path> <path d="M6.3 32.2l10.3-13.3S14.7 11.6 5 6.5C2 18.1 6.3 32.2 6.3 32.2" fill="#f7a4a4"> </path> <path d="M10.2 29.2l6.4-8.2S14 16 8 12.8c3.4 7.5 2.2 16.4 2.2 16.4" fill="#f78d8d"> </path> <path d="M58.2 50.8c.8-.9 1.4-1.6 1.7-2.2c1.6-2.6 2.1-5.3 2.1-5.3l-2 .4s2.3-2.5 1.7-7.8l-2 2.1s1.9-5.4.3-10.4l-2.2 1.6s.7-2 .1-3.4l-.9.7s1.7-4.7.2-6.6c-.9 2.8-1.9 2.8-1.9 2.8s1.2-2.1.3-3c-1 1.6-1.8.6-1.8.1c.1-.6-.2-1.5 2.7-2c-2.3-1.4-5.1-.4-5.1-.4s.1-1.5 2.1-1.4c-1.9-1.6-4.5-.6-4.5-.6c-4.1-3.1-9.6-4.9-17.1-4.9c-7.4 0-12.9 1.8-17.1 4.9c0 0-2.6-.9-4.5.6c2-.1 2.1 1.4 2.1 1.4s-2.7-1-5.1.4c2.9.4 2.7 1.3 2.7 2c0 .5-.8 1.5-1.8-.1c-1 .9.3 3 .3 3s-1 0-1.9-2.8c-1.5 2 .2 6.6.2 6.6l-.9-.7c-.6 1.4.1 3.4.1 3.4l-2-1.6c-1.7 5 .3 10.4.3 10.4l-1.9-2.1C1.7 41.2 4 43.7 4 43.7l-2-.4s.5 2.7 2.1 5.3c.2.5.8 1.3 1.7 2.2l.1.1C10 55 20.1 62 32 62s22-7 26.1-11.1c0-.1.1-.1.1-.1" fill="#7f5539"> </path> <g fill="#7f5539"> <path d="M37.7 10.8c-1.8-.3-3.7-.4-5.7-.4s-3.9.1-5.7.4c.7 3.9 2.8 6.6 5.7 11.6c3-5.1 5-7.8 5.7-11.6"> </path> <path d="M46.8 13.8c-1.9-1.1-4.1-1.9-6.5-2.5c.6 2.3 1.9 3.9 3.6 6.9c1.3-2.1 2.2-2.7 2.9-4.4"> </path> <path d="M23.7 11.3c-2.5.6-4.6 1.4-6.5 2.5c.7 1.8 1.7 2.3 2.9 4.4c1.8-3.1 3-4.7 3.6-6.9"> </path> </g> <path d="M36 38.8c-.8-.9-3.3-1-4-1c-.7 0-3.2.1-4 1c-.6.7-.1 2.3 1.4 3.8c1 .9 1.9 1.2 2.6 1.2c.7 0 1.7-.3 2.6-1.2c1.6-1.5 2-3.2 1.4-3.8" fill="#000000"> </path> <path d="M24.3 30.8s-.5-3.6-4.5-5c-4.5-1.7-7.6 1.4-8.5 3.7c-1.2 3.4.3 7.1.8 8c.3.6 3.7 3.2 11.2.7c0 0 1.9-3.8 1-7.4" fill="#ffffff"> </path> <path d="M24.3 30.8S18.4 26 18 26c-1.5 0-2.8-.4-3.9.6s-1.9 2.3-2.3 3.7c-.4 1.4-.3 3 0 4.4c.2.7.4 1.5.7 2.2l.1.2c0-.1 0 0 0 0l.1.1c.1.1.2.2.4.3c.3.2.6.4.9.5c1.4.6 2.9.8 4.5.8s3.2-.3 4.8-.7c-1.5.7-3.1 1.1-4.7 1.4c-1.6.2-3.4.2-5-.4c-.4-.1-.8-.3-1.2-.6c-.2-.1-.4-.3-.6-.4c-.1 0-.1-.1-.2-.2l-.1-.1l-.1-.1l-.2-.3c-.4-.8-.7-1.6-.9-2.4c-.4-1.6-.5-3.4-.1-5.1c.5-1.7 1.5-3.2 2.8-4.4c1.3-1.1 3.1-.9 4.9-.7c.6.1 6.4 6 6.4 6" fill="#ffffff"> </path> <path d="M39.7 30.8s.5-3.6 4.5-5c4.5-1.7 7.6 1.4 8.5 3.7c1.2 3.4-.3 7.1-.8 8c-.3.6-3.7 3.2-11.2.7c0 0-1.9-3.8-1-7.4" fill="#ffffff"> </path> <path d="M39.7 30.8s5.8-5.9 6.2-6c1.8-.2 3.6-.4 4.9.7c1.3 1.2 2.3 2.6 2.8 4.4c.4 1.7.3 3.5-.1 5.2c-.2.8-.5 1.6-.9 2.4l-.2.3l-.1.1v.1l-.2.2c-.2.2-.4.3-.6.4l-1.2.6c-1.7.6-3.4.6-5 .4c-1.6-.3-3.2-.7-4.7-1.4c1.6.3 3.2.6 4.8.7c1.6 0 3.2-.2 4.5-.8c.3-.1.7-.3.9-.5c.1-.1.3-.2.4-.3l.1-.1l.1-.2c.3-.7.5-1.4.7-2.2c.3-1.5.4-3 0-4.4c-.4-1.4-1.2-2.7-2.3-3.7c-1.1-1-2.4-.6-3.9-.6c-.3-.1-6.2 4.7-6.2 4.7" fill="#ffffff"> </path> <g fill="#000000"> <ellipse cx="44" cy="32.5" rx="4" ry="4.5"> </ellipse> <ellipse cx="20" cy="32.5" rx="4" ry="4.5"> </ellipse> <path d="M55.9 24.5c-1.9.2-3.5.5-5.2.9c-1.6.4-3.1 1-4.6 1.7c-1.5.7-2.9 1.5-4.2 2.4c-1.4 1-2.6 2.1-4 3.4c.2-1.9 1.1-3.7 2.4-5.1c1.2-1.5 2.9-2.6 4.6-3.4c1.8-.8 3.7-1.3 5.6-1.3c1.9 0 3.8.4 5.4 1.4"> </path> <path d="M8.1 24.5c1.6-1 3.5-1.5 5.4-1.4c1.9 0 3.8.5 5.6 1.3c1.7.8 3.3 2 4.6 3.4c1.2 1.5 2.2 3.2 2.4 5.1c-1.3-1.3-2.6-2.4-4-3.4s-2.8-1.8-4.2-2.4c-1.5-.7-3-1.2-4.6-1.7c-1.7-.4-3.3-.7-5.2-.9"> </path> <path d="M25.8 53.5c5.8 1.4 15.1 0 19.8-3.5c1.2-.9-1.2-4-2.3-3.1c-3.2 2.3-11.2 4.1-16.6 2.9c-1.4-.4-2.4 3.3-.9 3.7"> </path> </g> </g></svg>                
                </div>
                <div class="flex">
                    <div class="text-left">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Hitung Gula Makanan dan Minuman Anda</h5>
                        <p class="font-normal text-gray-700">Minuman manis adalah penyumbang utama asupan gula harian, hitung dan pelajari dampaknya terhadap kesehatan Anda.</p>
                        <button onclick="window.location.href='/main/count'" type="button" class="mt-6 py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-[#7f5539] hover:bg-gray-100 hover:text-[#b08968] focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Count Now</button>
                    </div>
                    <div class="w-64 h-auto mr-10 ml-10 mt-6">
                        <svg viewBox="0 0 320 320" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M144 120.283C143.821 120.201 143.654 120.159 143.5 120.159C88.9129 121.45 45.5 130.496 45.5 142.5L46.8694 179.702C23.889 169.192 8 146.633 8 120.5C8 84.3253 38.4446 55 76 55C113.48 55 143.878 84.2081 144 120.283Z" fill="#7f5539"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M265 227.5L269.471 145.028C269.49 144.852 269.5 144.677 269.5 144.5C269.5 141.36 261.741 136.726 253.804 133.676C286.714 138.253 312 165.532 312 198.5C312 234.675 281.555 264 244 264C222.888 264 204.024 254.733 191.551 240.192C218.432 238.059 244.194 233.709 265 227.5Z" fill="#7f5539"></path> <path d="M269.5 144.5L265 227.5C203 246 97 248 48.5 224L45.5 142.5M269.5 144.5C269.5 138.551 241.649 127.236 237.5 131.5M269.5 144.5C269.5 149 263.279 153.084 252.62 156.5M45.5 142.5C45.5 129.521 96.2487 120 157 120C163.279 120 169.961 120.096 176 120.331C178.326 124.599 179.903 126.972 182.955 131C112.955 129 54 138.521 54 151.5M45.5 142.5C45.5 148.022 54.6874 153.281 69.9237 157.5M45.5 142.5C46.0127 146.361 47.7955 148.335 54 151.5M54 151.5C60.0687 154.438 63.3755 155.747 69.9237 157.5M178.5 166.596C209.379 165.42 236.24 161.749 252.62 156.5M127 166.045C104.312 164.576 84.3911 161.507 69.9237 157.5M69.9237 157.5C69.9237 157.5 77.7766 146.05 85 146C88.9537 145.973 91.1051 149.321 95 150C99.6206 150.806 103.305 151.098 107.5 149C112.5 146.5 112.862 139.496 121 142C127.5 144 121 149 128.5 148C140.145 146.447 143 140.5 154.5 140.5C158.251 140.5 158.787 145.47 162.5 146C164.224 146.246 168.53 143.291 175.5 142C182.678 140.67 192.5 141 192.5 141M192.5 141C192.5 141 160 114.5 174.5 84.5001C179.313 74.5427 182.558 65.1093 193.5 63.5001C202.444 62.1847 212.773 63.776 221.5 67.8372M192.5 141C206.5 155 227.708 157.493 252.349 155.849M145.5 156C145.5 156 149.939 149.72 154.5 152C156.5 153 156 156 160 156.5C164.707 157.088 169 155 169 155M237.5 131.5C232.5 108.5 245.5 100 239 84.5001C235.92 77.1554 229.36 71.4947 221.5 67.8372M237.5 131.5C240.543 145.5 242.588 148.792 252.349 155.849M252.62 156.5L252.349 155.849M221.5 67.8372C221.5 67.8372 236.983 61.3413 247.5 60.5C260 59.4999 267.517 60.8934 265.5 67.8372C264 72.9999 259.5 71.5 250.5 71.5C239.085 71.5 221.5 67.8372 221.5 67.8372ZM201 127.5C201 127.5 195 117.108 195 106C195 102 197.061 88.5893 202.5 87.9999C208.417 87.3588 213.368 92.6571 214.5 98.4999C215.173 101.972 213 108.5 213 108.5M58.5 196C57.9136 198.194 57.8937 200.108 58.5 205M78 198.5C78.6382 201.863 78.4609 203.725 77 207M64.5 211C63.9537 214.29 64.0183 215.889 64.5 218.5M247 178.5C246.405 181.882 246.372 183.943 247 188M254.5 166.596C255.039 170.236 254.982 172.038 254.5 175M179 203C172.5 225.5 132.5 229.5 121.5 203.5C142.022 186.678 161 185.5 179 203ZM179 203C179 203 196.757 213.5 199 212C201.243 210.5 200.5 193 199 190.5C197.5 188 179 203 179 203ZM139.5 204.5V207M35.5 108C40.748 109.995 43.4208 111.559 47.5 115.5M52 86.9999C55.9975 92.2121 57.7636 95.2705 60 101M79.5 89.9999C78.9409 96.2261 78.9053 99.5338 79.5 105" stroke="#000000" stroke-width="5" stroke-linecap="round"></path> </g></svg>                    
                    </div>
                </div>
            </a>
        </div>
    </div>
    <?= view('footer/footer') ?>
</body>
</html>