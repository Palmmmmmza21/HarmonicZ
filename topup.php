<?php ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topup</title>
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
        <div class="flex flex-col gap-1 px-4 py-2 rounded-xl mt-5">
            <div class="flex flex-row gap-1 items-center border-b-2 pb-2 border-gray-900 text-black">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 lg:w-16">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                </svg>
                <span class="font-semibold text-base lg:text-4xl">เติมเงิน</span>
            </div>
            <div class="pt-3">
                <span class="text-lg">เติมเงินด้วยซองของขวัญ TrueMoney Wallet</span>
                <div class="flex flex-col lg:flex-row gap-3 mt-3">
                    <iframe class="w-full h-[350px/2] lg:h-[350px]" src="https://www.youtube.com/embed/tSB3i02gUSw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <form class="w-full px-3 flex flex-col item-between justify-between" action="#">
                        <div class="flex flex-col gap-1">
                            <label class="text-gray-500" for="truemoney">ลิ้งค์ซองของขวัญ</label>
                            <input class="w-full outline-none bg-slate-50 py-2 px-3 border border-gray-300 transition rounded-md focus:border-blue-500" type="text" placeholder="ใส่ลิ้งค์ซองของขวัญ">
                            <span>Recaptcha</span>
                        </div>
                        <button class="text-white rounded-md w-fll py-2 bg-blue-500 hover:bg-blue-600 w-full mt-3" type="submit">
                            เติมเงิน
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php require('./components/Footer.php') ?>
</body>

</html>