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
                        <br>
                        <div class="container">
                            <h3>Post</h3>
                        </div>
                        <hr>
                        <div class="container">
                            <form action="" class="blog-form">

                                <textarea name="" id="" rows="5" placeholder="| Feel to say ......"></textarea>
                                <div class="post">
                                    <span><i class="fa-solid fa-earth-americas"></i> <b> Everyone</b> Can Reply</span>
                                </div>

                                <hr>
                                <div class="post">
                                    <div class="icons">
                                        <span><i class="fa-regular fa-image"></i></span>
                                        <span><i class="fa-regular fa-face-smile"></i></span>
                                        <span><i class="fa-solid fa-video"></i></span>
                                        <span><i class="fa-solid fa-location-dot"></i></span>
                                    </div>
                                    <div class="submittion">
                                        <button>Post</button>
                                    </div>
                                </div>

                            </form>
                            <hr>
                            <center>
                                <h3>
                                    Recent Posts (23)
                                </h3>
                            </center>
                            <hr>
                            <div class="blog">
                                <div class="header">
                                    <img src="./storage/images/13.png" alt="" width="50">
                                    <div class="names">
                                        <span> <b>Kabano Festo</b> <span class="small"> Rwanda</span></span>
                                        <span class="small">@kbb .2 hours ago</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac potenti nunc nibh a
                                        faucibus rhoncus..
                                    </p>
                                    <img src="./storage/images/kbb.png" alt="">
                                </div>
                                <div class="footer">
                                    <span> <i class="fa-regular fa-comment primary-color"></i> 45</span>
                                    <span><i class="fa-regular fa-heart"></i> 3k</span>
                                    <span><i class="fa-regular fa-eye"></i> 12k</span>
                                    <span><i class="fa-solid fa-arrow-up-from-bracket"></i></span>
                                </div>
                            </div>
                            <div class="blog">
                                <div class="header">
                                    <img src="./storage/images/13.png" alt="" width="50">
                                    <div class="names">
                                        <span> <b>Kabano Festo</b> <span class="small"> Rwanda</span></span>
                                        <span class="small">@kbb .2 hours ago</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac potenti nunc nibh a
                                        faucibus rhoncus..
                                    </p>
                                    <img src="./storage/images/kbb.png" alt="">
                                </div>
                                <div class="footer">
                                    <span> <i class="fa-regular fa-comment primary-color"></i> 45</span>
                                    <span><i class="fa-regular fa-heart"></i> 3k</span>
                                    <span><i class="fa-regular fa-eye"></i> 12k</span>
                                    <span><i class="fa-solid fa-arrow-up-from-bracket"></i></span>
                                </div>
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