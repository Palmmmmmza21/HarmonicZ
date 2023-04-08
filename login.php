<?php ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        <form class="w-7/12 mx-auto p-5 shadow-lg  rounded-md mt-8" action="action/login.php" method="POST" enctype="multipart/form-data">
            <div class="flex flex-col gap-1 my-3 relative">
                <label for="username">Username:</label>
                <input class="w-full bg-slate-50 border border-gray-300 outline-none px-10 py-2 rounded-md transition-all duration-150 focus:border-blue-500" type="text" placeholder="Username">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute w-5 top-[38px] left-3 text-gray-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>
            </div>
            <div class="flex flex-col gap-1 my-3 relative">
                <label for="username">Password:</label>
                <input class="w-full bg-slate-50 border border-gray-300 outline-none px-10 py-2 rounded-md transition-all duration-150 focus:border-blue-500" type="password" placeholder="Password">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute w-5 top-[38px] left-3 text-gray-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                </svg>
            </div>
            <div class="flex flex-row justify-end py-1 pr-2">
                <a class="text-blue-500 hover:text-blue-500 transition-all duration-150 underline" href="./register.php">สมัครสมาชิก</a>
            </div>
            <button class="mt-3 w-full rounded-md bg-red-500 text-white py-2 hover:bg-red-600 transition-all duration-150">
                เข้าสู่ระบบ
            </button>
        </form>
    </div>
    <?php require('./components/Footer.php') ?>
</body>

</html>