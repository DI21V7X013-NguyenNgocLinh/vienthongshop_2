<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Quản Trị Hệ Thống</title>



    <!-- Link cdn css -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <!-- Slick css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- remix icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">


    <!-- Link custom css -->
    
   
    <link rel="stylesheet" href="./public/backend/css/base_admin.css">
    <link rel="stylesheet" href="./public/backend/css/main_admin.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
   

    <div class="app">
        <header class="header">
            <div class="header__middle">
                            <div class="title_admin">
                                <h3> Quản Trị Website</h3>
                            </div>
            </div>


            <div class="header__bottom">
                
                   
                    <div class="navigation">
                        <div class="nav__item">
                            <a href="#" class="nav__links">Xem Hồ Sơ Tài Khoảng</a>
                        </div>
                        <div class="nav__item">
                            <a href="#" class="nav__links">Thay Đổi Mật Khẩu</a>
                        </div>
                        <div class="nav__item">
                            <a href="#" class="nav__links">Cập Nhật Lại Thông Tin</a>
                        </div>                     
                        <div class="nav__item">
                            <a href="#" class="nav__links">Đăng Xuất</a>
                        </div>
                    </div>
                
                
            </div>

          
        </header>
        <!------------end header----------------------------------------------------------->
       
       
        

        <main>
            <div class="main__body">
                
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="category">
                                <div class="category__title">
                                    <span>Danh SÁch Chức Năng</span>
                                </div>
                                <ul class="category__list">
                                    <li>
                                        <a href="#" class="category__links">
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="./assets/imgs/icon_menu_left.png" alt="">
                                                <span>Quản lý danh mục sản phẩm</span>
                                            </div>
                                            <i class="ri-arrow-down-s-line"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="category__links">
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="./assets/imgs/icon_menu_left.png" alt="">
                                                <span>Quản Lý Sản Phẩm</span>
                                            </div>
                                            <i class="ri-arrow-down-s-line"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="category__links">
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="./assets/imgs/icon_menu_left.png" alt="">
                                                <span>Quản Lý..</span>
                                            </div>
                                            <i class="ri-arrow-down-s-line"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="category__links">
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="./assets/imgs/icon_menu_left.png" alt="">
                                                <span>Quản Lý</span>
                                            </div>
                                            <i class="ri-arrow-down-s-line"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>



                          

                            

                        </div>

                        
                        
                    </div>
                


              
            </div>
        </main>

        <footer class="footer">
            

            

        </footer>
    </div>
    

    <!-- Link cdn js -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>    
     <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    
    <!-- Link custom js -->
    <script src="{{asset('front-end/assets/js/main.js')}}"></script>

   
</body>
</html>