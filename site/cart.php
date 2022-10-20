<?php
    include_once '../global.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../content/css/input.css">
</head>

<body>
    <div class="container mx-auto">
        <!-- header -->
    <div class="mx-auto container bg-gray-400 flex justify-between ">
        <div class="p-4">
            <img class="h-12 w-40" src="../content/img/Screen Shot 2022-09-21 at 01.33 1.png" alt="">
        </div>
        <div class="flex p-4 ">
            <button class="bg-white px-6 rounded-l-md"><svg width="30" height="30" viewBox="0 0 37 32" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M35.5015 30.2513L25.5406 21.8061M25.5406 21.8061C28.2365 19.5205 29.7511 16.4204 29.7511 13.188C29.7511 9.95551 28.2365 6.85546 25.5406 4.56977C22.8446 2.28408 19.1882 1 15.3755 1C11.5629 1 7.90643 2.28408 5.2105 4.56977C2.51456 6.85546 1 9.95551 1 13.188C1 16.4204 2.51456 19.5205 5.2105 21.8061C7.90643 24.0918 11.5629 25.3759 15.3755 25.3759C19.1882 25.3759 22.8446 24.0918 25.5406 21.8061V21.8061Z"
                        stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
            <input class="rounded-r-md input" placeholder="Tìm kiếm">
        </div>
        <div>
        <div class="flex p-4 gap-6">
            <div class="">
                <button class=""><svg width="35" height="35" viewBox="0 0 45 39" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M36.5834 33.1046C34.9239 31.2158 32.7769 29.6841 30.3115 28.63C27.8461 27.576 25.1297 27.0285 22.3762 27.0306C19.6227 27.0285 16.9063 27.576 14.4409 28.63C11.9755 29.6841 9.82845 31.2158 8.16894 33.1046M36.5811 33.1046C39.8194 30.6285 42.1056 27.3646 43.1365 23.7458C44.1674 20.127 43.8943 16.3243 42.3534 12.842C40.8125 9.35976 38.0767 6.3624 34.5086 4.24748C30.9406 2.13256 26.709 1 22.375 1C18.041 1 13.8094 2.13256 10.2414 4.24748C6.67334 6.3624 3.93747 9.35976 2.39659 12.842C0.855699 16.3243 0.582601 20.127 1.61351 23.7458C2.64442 27.3646 4.93063 30.6285 8.16894 33.1046M36.5811 33.1046C32.6719 36.1021 27.6146 37.7558 22.3762 37.7494C17.137 37.7563 12.0788 36.1026 8.16894 33.1046M29.5012 14.7806C29.5012 16.4051 28.7505 17.963 27.4143 19.1117C26.0781 20.2603 24.2659 20.9056 22.3762 20.9056C20.4865 20.9056 18.6743 20.2603 17.3381 19.1117C16.0019 17.963 15.2512 16.4051 15.2512 14.7806C15.2512 13.1562 16.0019 11.5983 17.3381 10.4496C18.6743 9.30096 20.4865 8.65565 22.3762 8.65565C24.2659 8.65565 26.0781 9.30096 27.4143 10.4496C28.7505 11.5983 29.5012 13.1562 29.5012 14.7806V14.7806Z"
                            stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="">
                <button class=""><svg width="35" height="35" viewBox="0 0 39 42" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1 1H3.64487C4.6181 1 5.46728 1.74849 5.71917 2.82212L6.45004 5.95791M11.0185 25.5495C9.50014 25.5495 8.04401 26.2392 6.97039 27.4669C5.89678 28.6947 5.29363 30.3598 5.29363 32.096H35.349M11.0185 25.5495H32.4255C34.5647 20.5305 36.4329 15.3282 38.0053 9.97312C27.7005 6.96859 17.0804 5.61725 6.45004 5.95791M11.0185 25.5495L6.45004 5.95791M8.15605 38.6426C8.15605 39.0766 8.00526 39.4929 7.73686 39.7999C7.46845 40.1068 7.10442 40.2792 6.72484 40.2792C6.34526 40.2792 5.98122 40.1068 5.71282 39.7999C5.44442 39.4929 5.29363 39.0766 5.29363 38.6426C5.29363 38.2085 5.44442 37.7922 5.71282 37.4853C5.98122 37.1784 6.34526 37.0059 6.72484 37.0059C7.10442 37.0059 7.46845 37.1784 7.73686 37.4853C8.00526 37.7922 8.15605 38.2085 8.15605 38.6426V38.6426ZM32.4866 38.6426C32.4866 39.0766 32.3358 39.4929 32.0674 39.7999C31.799 40.1068 31.435 40.2792 31.0554 40.2792C30.6758 40.2792 30.3118 40.1068 30.0434 39.7999C29.775 39.4929 29.6242 39.0766 29.6242 38.6426C29.6242 38.2085 29.775 37.7922 30.0434 37.4853C30.3118 37.1784 30.6758 37.0059 31.0554 37.0059C31.435 37.0059 31.799 37.1784 32.0674 37.4853C32.3358 37.7922 32.4866 38.2085 32.4866 38.6426V38.6426Z"
                            stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div class=" absolute hidden" id="content">
                    <div class="grid grid-cols-1 gap-2 p-1 bg-orange-300">
                    <a href="<?= SITE_URL ?>?login" class="px-2 bg-blue-300 font-medium " href="">Đăng nhập</a>
                        <a href="<?= SITE_URL ?>?register" class="px-2  bg-blue-300 font-medium" href="">Đăng ký</a>
                        <a class="px-2  bg-blue-300 font-medium" href="">Đăng xuất</a>
                    </div>
                </div>
            </div>
            <div class="" >
                <button class="" onclick="showhide()"><svg width="35" height="35" viewBox="0 0 29 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0 1.2375C0 0.909295 0.142232 0.594531 0.395406 0.362455C0.64858 0.130379 0.991958 0 1.35 0H27.45C27.808 0 28.1514 0.130379 28.4046 0.362455C28.6578 0.594531 28.8 0.909295 28.8 1.2375C28.8 1.56571 28.6578 1.88047 28.4046 2.11254C28.1514 2.34462 27.808 2.475 27.45 2.475H1.35C0.991958 2.475 0.64858 2.34462 0.395406 2.11254C0.142232 1.88047 0 1.56571 0 1.2375ZM0 9.9C0 9.57179 0.142232 9.25703 0.395406 9.02496C0.64858 8.79288 0.991958 8.6625 1.35 8.6625H27.45C27.808 8.6625 28.1514 8.79288 28.4046 9.02496C28.6578 9.25703 28.8 9.57179 28.8 9.9C28.8 10.2282 28.6578 10.543 28.4046 10.775C28.1514 11.0071 27.808 11.1375 27.45 11.1375H1.35C0.991958 11.1375 0.64858 11.0071 0.395406 10.775C0.142232 10.543 0 10.2282 0 9.9ZM0 18.5625C0 18.2343 0.142232 17.9195 0.395406 17.6875C0.64858 17.4554 0.991958 17.325 1.35 17.325H27.45C27.808 17.325 28.1514 17.4554 28.4046 17.6875C28.6578 17.9195 28.8 18.2343 28.8 18.5625C28.8 18.8907 28.6578 19.2055 28.4046 19.4375C28.1514 19.6696 27.808 19.8 27.45 19.8H1.35C0.991958 19.8 0.64858 19.6696 0.395406 19.4375C0.142232 19.2055 0 18.8907 0 18.5625Z"
                            fill="black" />
                    </svg>
                </button>
               
            </div>
        </div>
        <h2> <?php echo isset($_SESSION['name_user'])? 'Xin chào,'.$_SESSION['name_user']: '' ?> </h2>
        </div>
        

    </div>
   
    
   
    <!-- nav -->
    <nav class=" justify-center gap-8 flex w-full p-6 font-medium text-2xl mx-auto container">
        <a href="<?= SITE_URL ?>" class="list-none hover:bg-orange-500 hover:p-2 rounded-md hover:text-white">Trang chủ</a>
        <a href="<?= SITE_URL ?>?introduce" class="list-none  hover:bg-orange-500 hover:p-2 rounded-md hover:text-white">Giới thiệu</a>
        <a href="<?= SITE_URL ?>?colection"
            class="list-none   hover:bg-orange-500 hover:p-2 rounded-md hover:text-white">Bộ sưu tập</a>

        <a href="<?= SITE_URL ?>?products" class="list-none   hover:bg-orange-500 hover:p-2 rounded-md hover:text-white">Sản
            phẩm</a>


        <a href="<?= SITE_URL ?>?sale"
            class="list-none  hover:bg-orange-500 hover:px-8 hover:p-2 rounded-md hover:text-white">Sale</a>

    </nav>
        <!--  -->
        <div class="container mx-auto">
            <div>
                <h1 class="text-center text-4xl font-medium py-10">Giỏ hàng</h1>
            </div>
            <table class="container mx-auto">
                <tr class="">
                    <td class="border border-black w-3/5 text-center h-14">Tên sản phẩm</td>
                    <td class="border border-black w-20 text-center h-14">Hình</td>
                    <td class="border border-black w-24 text-center h-14">Đơn giá</td>
                    <td class="border border-black w-20 text-center h-14">Số lượng</td>
                    <td class="border border-black w-24 text-center h-14">Thành tiền</td>
                    <td class="border border-black w-24 text-center h-14">Thao tác</td>
                </tr>
                <tr>
                    <td id="pro" data-price="900" class="border border-black w-1/2 text-center h-14">Iphone 13</td>
                    <td class="border border-black w-20 text-center h-14"><img src="img/facebook.jfif"
                            class="h-6 mx-auto" alt=""></td>
                    <td class="border border-black w-24 text-center h-14">900</td>
                    <td class="border border-black w-14 text-center h-14"><input type="number"
                            class="text-center w-20 py-3" id="qty1"></td>
                    <td class="border border-black w-24 text-center h-14"><span id="td1">...</span></td></td>
                    <td class="text-center border border-black h-14">
                        <button onclick="xoa1()" class="border border-black text-center  py-2 px-[6px]">Xóa</button>
                        <button onclick="mua1()" class="border border-black text-center  py-2 px-[4px]">Mua</button>
                    </td>
                </tr>
                <tr>
                    <td id="pri" data-price1="100" class="border border-black w-1/2 text-center h-14">pin dự phòng</td>
                    <td class="border border-black w-20 text-center h-14"><img src="img/facebook.jfif"
                            class="h-6 mx-auto" alt=""></td>
                    <td class="border border-black w-24 text-center h-14">100</td>
                    <td class="border border-black w-14 text-center h-14"><input type="number"
                            class="text-center w-20 py-3" id="qty2"></td>
                    <td class="border border-black w-14 text-center h-14"><span id="td2">...</span></td>
                    <td class="text-center border border-black h-14">
                        <button onclick="xoa2()" class="border border-black text-center  py-2 px-[6px]">Xóa</button>
                        <button onclick="mua2()" class="border border-black text-center  py-2 px-[4px]">Mua</button>
                    </td>
                </tr>
                <tr>
                    <td id="pre" data-price2="1000" class="border border-black w-1/2 text-center h-10">APPLE Macbook AIR 2022</td>
                    <td class="border border-black w-20 text-center h-10"><img src="img/facebook.jfif"
                            class="h-6 mx-auto" alt=""></td>
                    <td class="border border-black w-24 text-center h-10">1000</td>
                    <td class="border border-black w-14 text-center h-10"><input type="number"
                            class="text-center w-20 py-3" id="qty3"></td>
                    <td class="border border-black w-14 text-center h-10"><span id="td3">...</span></td></td>
                    <td class="text-center border border-black h-14">
                        <button onclick="xoa3()" class="border border-black text-center  py-2 px-[6px]">Xóa</button>
                        <button onclick="mua3()" class="border border-black text-center  py-2 px-[4px]">Mua</button>
                    </td>
                </tr>
            </table>
            <div class="flex mx-auto">
                <div class="border border-b-zinc-900 border-l-zinc-900 lg:w-[1274px] md:w-[1230px] w-[534px] h-14">
                    <h1 class="py-3 text-center">Tổng đơn hàng</h1>
                </div>
                <div class="lg:w-[131px] md:w-40 w-[90px] border border-x-black border-b-black ">
                    <h1 id="tong" class="text-center py-3"><span>...</span></h1>
                </div>
                <div class="m:hidden lg:block">
                    <div class="lg:w-[131px] md:w-10 h-14 border border-r-black border-b-black"></div>
                </div>
            </div>
            <div class="flex gap-5">
                <div class=" py-3">
                    <button onclick="dong_y()" id="dong_y" class="bg-orange-400 px-3 py-3 rounded-md border border-black">Đồng ý đặt hàng</button>
                </div>
                <div class=" py-3">
                    <button onclick="xoa_gio()" id="xoa_gio" class="bg-orange-400 px-3 py-3 rounded-md border border-black">Xóa giỏ hàng</button>
                </div>
            </div>
        <!--  -->
        <div>

        </div>
    </div>
    <script src="../content/js/app.js"></script>
</body>

</html>