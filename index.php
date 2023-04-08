<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                container: {
                    center: true,
                    padding: {
                        DEFAULT: '1rem',
                        sm: '2rem',
                        lg: '4rem',
                        xl: '5rem',
                        '2xl': '6rem',
                    },
                },
                extend: {}
            }
        }
    </script>
</head>
<style>
    html {
        font-family: 'Kanit', sans-serif !important;
    }
</style>

<body>
    <?php require('./components/Navbar.php') ?>
    <div class="container py-4">
        <img class="w-full h-[500px/2]  lg:h-[500px] object-cover mx-auto" src="./assets/image/wallpaper.webp" alt="wallpaper">
        <div class="flex flex-row justify-between items-center mt-6">
            <div>
                <h1 class="text-4xl font-bold">
                    Product
                </h1>
                <span>
                    สินค้าแนะนำสำหรับคุณ
                </span>
            </div>
            <a href="./products.php">
                <button class="bg-blue-500 rounded-md font-sm px-3 py-2 text-white transition-all duration-150 hover:bg-blue-600">
                    ดูเพิ่มเติม
                </button>
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-7 mt-5">
            <?php
            for ($i = 0; $i < 4; $i++) { ?>
                <a href="./products.php">
                    <div class="flex flex-col items-center hover:scale-105 transition-all duration-150 border-b border-gray-400 pb-5 group">
                        <img class="w-full rounded-lg cursor-pointer" src="./assets/image/rov.webp" alt="rov">
                        <span class="mt-3 text-lg group-hover:text-blue-500 transition-all duration-100">Rov</span>
                        <span class="mt-3 text-md text-gray-500 group-hover:text-blue-500 transition-all duration-100">ดูเพิ่มเติม</span>
                    </div>
                </a>

            <?php   } ?>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 mt-10">
            <div class="transition-all hover:scale-105 duration-150 border-2 border-gray-400 flex py-5 flex-col items-center gap-2 group hover:text-blue-500 cursor-pointer hover:border-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                </svg>

                <span class="text-4xl">
                    0 ชิ้น
                </span>
                <span class="text-gray-500 group-hover:text-blue-500 transition-all duration-100">พร้อมจำหน่าย</span>
            </div>
            <div class="transition-all hover:scale-105 duration-150 border-2 border-gray-400 flex py-5 flex-col items-center gap-2 group hover:text-blue-500 cursor-pointer hover:border-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-2.25-1.313M21 7.5v2.25m0-2.25l-2.25 1.313M3 7.5l2.25-1.313M3 7.5l2.25 1.313M3 7.5v2.25m9 3l2.25-1.313M12 12.75l-2.25-1.313M12 12.75V15m0 6.75l2.25-1.313M12 21.75V19.5m0 2.25l-2.25-1.313m0-16.875L12 2.25l2.25 1.313M21 14.25v2.25l-2.25 1.313m-13.5 0L3 16.5v-2.25" />
                </svg>


                <span class="text-4xl">
                    0 ครั้ง
                </span>
                <span class="text-gray-500 group-hover:text-blue-500 transition-all duration-100">จำหน่ายไปแล้ว</span>
            </div>
            <div class="transition-all hover:scale-105 duration-150 border-2 border-gray-400 flex py-5 flex-col items-center gap-2 group hover:text-blue-500 cursor-pointer hover:border-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                </svg>


                <span class="text-4xl">
                    0 คน
                </span>
                <span class="text-gray-500 group-hover:text-blue-500 transition-all duration-100">มีสมาชิกทั้งหมด</span>
            </div>
        </div>
    </div>
    <?php require('./components/Footer.php') ?>
</body>

</html>