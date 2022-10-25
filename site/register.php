<?php 
include_once '../global.php';
include_once '../dao/pdo.php';
include_once '../dao/user.php';
if(isset($_POST['register'])){
$flag = true   ;
    $email = $_POST['email'];
    $password = $_POST['password'];
    $fake_pass=password_hash($password, PASSWORD_DEFAULT);
    $adress = $_POST['adress'];
    $phone = $_POST['phone'];
    $role_id = '1';
    $ho_ten = $_POST['name'];
    if(empty($ho_ten)){
         $err_name = 'không được để trống';
        $flag=false;
    }
    if(empty($email)){
        $err_email = 'không được để trống';
        $flag=false;
    }
    if(empty($phone)){
        $err_phone = 'không được để trống';
        $flag=false;
    }
    if(empty($adress)){
        $err_adress = 'không được để trống';
        $flag=false;
    }
    if(empty($password)){
        $err_pass = 'không được để trống';
        $flag=false;
    }
  
    if($flag==true){
    
        user_insert($email,$fake_pass,$adress,$phone,$role_id,$ho_ten);
        $succes='đăng kí người dùng thành công';
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="../content/css/input.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <style>

.bg2 {
    background: url("../content/img/bgimg.png");

    background-position: center;
    background-size: 100% 100%;
    padding-bottom: 90px;
}
    </style>
</head>
<body>
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
                        <form action="<?= SITE_URL . '?login'?>" method="POST">  <button name='dx' class="px-2  bg-blue-300 font-medium" href="">Đăng xuất</button></form>
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
                 <?php echo isset($_SESSION['auth']['name'])? 'Xin chào,' . $_SESSION['auth']['name'] : '' ?>


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
    <!-- content -->
    <h1 class="text-center" style="color: green;"> <?php echo isset($succes)? $succes : '' ?></h1>
    <div class="container mx-auto w-[800px] h-[500px]">
        <div class="bg2">
            <!-- <img src="img/ao plo.jpg" class="fixed" alt=""> -->
            <h1 class="text-5xl py-2 pt-14 text-center pb-10 italic font-medium text-white">ĐĂNG KÝ</h1>
        
        

            <form action="" method="post">
            <div class="grid grid-cols-2">
                <div class="pl-10">
                    <div class="flex gap-4 py-2">
                        <p class=" font-semibold text-white">Full name *</p>
                        <div class="pl-[37px]"><input type="text" name="name" class=" border border-blue-600 rounded-sm" placeholder="<?php echo isset($err_name)?  $err_name: 'full name' ?>"></div>
                        <span></span>
                    </div>
                    <div class="flex py-2 gap-5">
                        <p class=" font-semibold text-white">Email *</p>
                        <div class="pl-[64px]"><input type="email" name="email" class="border border-blue-600 rounded-sm" placeholder="<?php echo isset($err_email)?  $err_email: 'email' ?>"></div>
                        <span></span>
                    </div>
                    <div class="flex py-2 gap-4">
                        <p class=" font-semibold text-white">Phone number *</p>
                        <input type="text" name="phone" placeholder="<?php echo isset($err_phone)?  $err_phone: 'phone' ?>" class="border border-blue-600 rounded-sm" >
                        <span></span>
                    </div>
                    <div class="flex py-2 gap-4">
                        <p class=" font-semibold text-white">Address *</p>
                        <div class="pl-[49px]"><input type="text" name="adress" class="border border-blue-600 rounded-sm" placeholder="<?php echo isset($err_adress)?  $err_adress: 'address' ?>"></div>
                        <span></span>
                    </div>
                    <div class="flex py-2 gap-4">
                        <p class=" font-semibold text-white">Password *</p>
                        <div class="pl-[27px]"><input type="text" name="password" class="border border-blue-600 rounded-sm" placeholder="<?php echo isset($err_pass)?  $err_pass: 'password' ?>"></div>
                        <span></span>
                    </div>
                </div>
                <div class=" font-weight: 500 flex flex-col ">
                    <h1 class="text-2xl text-white">Lợi ích của việc đăng kí tài khoản</h1>
                    <div class="py-3 text-white">
                        <p>- Kiểm tra trạng thái đơn hàng nhanh chóng</p>
                        <p>- Bỏ sẵn hàng vào giỏ để mua sau</p>
                        <p>- Mua hàng nhanh cực kì</p>
                    </div>
                    <br/>
                    <div class="flex gap-2 pt-11">
                        <button name="register" class="px-5 py-1 bg-orange-500 text-white border rounded-md hover:bg-yellow-500">Đăng ký</button>
                        <a href="login.php" class="px-5 py-1 bg-orange-500 text-white border rounded-md  hover:bg-yellow-500">Đăng nhập</a>
                        <button class="px-5 py-1 bg-orange-500 text-white border rounded-md  hover:bg-yellow-500">Quên mật khẩu</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <script src="../content/js/app.js">

    </script>
</body>
</html>