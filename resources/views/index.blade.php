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
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="main">


        <div class="container">
            <div class="index-menu">
                <div class="log ">
                    <h1>HEAL THE WORLD</h1>
                    <p>You are not alone</p>
                </div>
                <div class="nav ">
                    <nav>
                        <!-- <span>
                            Home
                        </span>
                        <span>
                            How It Works
                        </span> -->
                        <span class="login">
                            <a href="/login"> Login</a>
                        </span>
                        <span class="btn-borded">
                            <a href="/register">Join Now</a>
                        </span>
                        <span class="mobile-menu">
                            <i class="fa-solid fa-bars"></i>
                        </span>
                    </nav>
                </div>
            </div>
            <div class='home'>
                <div class="row content">
                    <div class="text col-lg-6">
                        <h2>
                            You Have to improve
                            your mental health
                        </h2>
                        <p>Good mental health throughout life can increase resilience, helping protect against mental
                            illness and act as a buffer for normal stressors and hardships that everyone experiences</p>
                        <div class="btn-container">
                            <button class="btn-borded">
                                Get Appointment
                            </button>
                            <button class="btn-outlined">
                                Read More
                            </button>
                        </div>

                    </div>
                    <div class="image col-lg-6">
                        <img src="./storage/images/img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <footer class="container">
            <hr>
            <div class="row">
                <div class="col-lg-6 right">
                    <span>English (United State) <span class="icon"> <i class="fa fa-angle-down"
                                aria-hidden="true"></i></span></span>
                </div>
                <div class="col-lg-6 left">
                    <span>
                        Help
                    </span>
                    <span>
                        Privacy
                    </span>
                    <span>
                        Terms
                    </span>
                </div>
            </div>
    </div>
    </footer>
    <script src="https://kit.fontawesome.com/5356469735.js" crossorigin="anonymous"></script>
</body>

</html>