<?php ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
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
        <div class="flex flex-col gap-1  py-2 rounded-xl mt-5">
            <div class="flex flex-row gap-1 items-center border-b-2 pb-2 border-gray-900 text-black">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 lg:w-16">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0112 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
                </svg>

                <span class="font-semibold text-base lg:text-4xl">สินค้าทั้งหมด</span>
            </div>
            <div class="flex flex-col lg:flex-row gap-5 mt-3">
                <div class="flex flex-none flex-col w-full lg:w-2/12 border border-gray-500 rounded-md  border-b-0 h-fit">
                    <span class="text-start text-lg border-b border-gray-500 py-2 px-3">หมวดหมู่</span>
                    <ul class="flex flex-col ">
                        <?php for ($i = 0; $i < 4; $i++) { ?>
                            <a href="#">
                                <li class="py-2 px-3 border-b border-gray-400 cursor-pointer hover:bg-gray-600 transition-all duration-100 hover:text-white text-gray-500">
                                    Rov
                                </li>
                            </a>
                        <?php   } ?>
                    </ul>
                </div>
                <div class="grow grid grid-cols-1 lg:grid-cols-3 gap-4 px-2">
                    <?php for ($i = 0; $i < 20; $i++) { ?>
                        <div class="relative hover:scale-105 transition-all duration-100 cursor-pointer">
                            <img class="rounded-t-xl" src="./assets/image/rov.webp" alt="rov">
                            <div class="bg-white shadow-lg p-3 rounded-b-xl">
                                <h1 class="text-xl font-semibold text-center pb-2 border-b">
                                    รหัสไก่ + v5 + รสไก่ อัตตราชนะ 99%
                                </h1>
                                <div class="flex flex-col gap-2 mt-2">
                                    <button class="buyButton w-full py-2 rounded-md text-white bg-red-500 hover:bg-red-600 transition-all duration-150 flex flex-row gap-1 justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                        </svg> สั่งชื้อสินค้า
                                    </button>

                                    <button class="infoButton w-full py-2 rounded-md text-white border border-red-500 hover:text-white text-red-500 hover:bg-red-600 transition-all duration-150 flex flex-row gap-1 justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                        </svg>
                                        รายละเอียด
                                    </button>
                                </div>
                            </div>
                            <div class="absolute top-2 left-2 bg-green-500 text-white px-3 py-1 rounded-sm cursor-pointer hover:bg-green-600 transition-all duration-150">
                                New
                            </div>
                            <div class="absolute top-2 right-2 bg-red-500 text-white px-3 py-1 rounded-sm cursor-pointer hover:bg-red-600 transition-all duration-150">
                                Rov
                            </div>
                        </div>
                    <?php }  ?>
                </div>
            </div>
        </div>
    </div>
    <?php require('./components/Footer.php') ?>
    <script>
        const buyButton = document.getElementsByClassName("buyButton")
        const buyButtonItems = [].slice.call(buyButton)
        buyButtonItems.forEach(function(item, idx) {
            item.addEventListener('click', (() => {
                Swal.fire({
                    title: 'ยืนยันการชื้อ !',
                    text: "ยืนยันการชื้อ รหัสไก่ + v5 + รสไก่ อัตตราชนะ 99%",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'ยืนยัน',
                    cancelButtonText: 'ยกเลิก'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'ยืนยันการชื้อ',
                            'ยินดีด้วยคุณได้รับ รหัสไก่ + v5 + รสไก่ อัตตราชนะ 99%',
                            'success'
                        )
                    }
                })
            }))
        })

        const infoButton = document.getElementsByClassName("infoButton")
        const infoButtonItems = [].slice.call(infoButton)

        infoButtonItems.forEach(function(item, idx) {
            item.addEventListener('click', (() => {
                Swal.fire({
                    text: 'รหัสไก่ + v5 + รสไก่ อัตตราชนะ 99%',
                    confirmButtonText: 'ปิด',
                    confirmButtonColor: '#d33',
                })
            }))
        })
    </script>
</body>

</html>