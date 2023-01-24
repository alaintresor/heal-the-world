<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Heal The World</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;1,200;1,400;1,600&display=swap"
        rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="header">


        <div class="container-fluid">
            <div class="menu row">
                <div class="log col-lg-6">
                    <h1>HEAL THE WORLD</h1>
                    <p>You are not alone</p>
                </div>
                <div class="nav col-lg-6">
                    <nav>

                        <span>
                            <i class="fa-solid fa-globe" style="font-size: 30px; color: gray;"></i>
                        </span>
                        <span>
                            <i class="fa-regular fa-envelope" style="font-size: 30px; color: gray;"></i>
                        </span>
                        <span>
                            <i class="fa-regular fa-bell" style="font-size: 30px; color: gray;"></i>
                        </span>
                        <span>
                            <img src="./storage/images/13.png" alt="">

                            <!-- <div class="profile-image">
                            </div> -->
                        </span>
                        <span>
                            <i class="fa-solid fa-gear" style="font-size: 30px; color: gray;"></i>

                            <!-- <div class="profile-image">
                            </div> -->
                        </span>
                    </nav>
                </div>
            </div>
            <section class="contents">
                <div class="row-container">
                    <div class="col-lg-2 sidebar">
                        <div class="nav-item">
                            <a href="#"><span> <i class="fa-solid fa-house-chimney"></i></span> Dashboard</a>
                        </div>
                        <div class="nav-item">
                            <a href="#"><span> <i class="fa-regular fa-square-plus"></i></span> Create Post</a>
                        </div>
                        <div class="nav-item">
                            <a href="#"><span> <i class="fa-solid fa-users-rays"></i></span> Community</a>
                        </div>
                        <div class="nav-item">
                            <a href="#"><span><i class="fa-solid fa-user-doctor"></i></span> Therapies</a>
                        </div>
                        <div class="nav-item">
                            <a href="#"><span><i class="fa-solid fa-blog"></i></span> My Post</a>
                        </div>

                        <div class="nav-item">
                            <a href="#"> <span><i class="fa-solid fa-user"></i></span> Profile</a>
                        </div>
                        <div class="nav-item">
                            <a href="#"><span><i class="fa-solid fa-circle-info"></i></span> Help</a>
                        </div>

                    </div>
                    <div class="col-lg-10 body-content">
                        <div class="container">
                            <div class="box">
                                <h3>Hi, Welcome Back !</h3>
                                <div class="content">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac potenti nunc nibh a
                                    faucibus rhoncus. Ipsum gravida ut mattis in euismod enim id netus porttitor.
                                    Scelerisque quisque augue congue ipsum feugiat. Dui lorem sit nullam
                                </div>
                            </div>

                            <div class="box">
                                <img src="./storage/images/back.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/5356469735.js" crossorigin="anonymous"></script>
</body>

</html>