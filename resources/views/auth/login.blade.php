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
            <div class="row login-form">
                <div class="col-lg-6 text-container">
                    <h1>Being healthly</h1>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.
                    </p>
                </div>
                <div class="col-lg-6 form-container">
                    <div class="title">
                        <center>
                            <img src="./storage/images/Padlock.png" alt="" width="60">
                        </center>
                        <h2>
                            Welcome Back !
                        </h2>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"></label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"></label>
                        <input type="password" class="form-control" id="exampleFormControlInput1"
                            placeholder="Enter Password">
                    </div>
                    <br>
                    <div class="form-group">
                        <a href="/dashboard"> <input type="submit" class="form-control" value="Login"></a>
                    </div>
                    <div class="flex">
                        <div>
                            Create Account <span> <a href="/register">Sign Up</a></span>
                        </div>
                        <div>
                            <span>Forget Password</span>
                        </div>
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
    </div>

    <script src="https://kit.fontawesome.com/5356469735.js" crossorigin="anonymous"></script>
</body>

</html>