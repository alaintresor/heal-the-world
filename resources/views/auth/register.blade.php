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
                <div class="col-lg-8 form-container">
                    <p>
                    <h1 class="primary-color">Hello !</h1>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.
                    </p>
                    <div class="flex">
                        <div class="form-group left">
                            <label for="exampleFormControlInput1"></label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Enter Firstname">
                        </div>
                        <div class="form-group right">
                            <label for="exampleFormControlInput1"></label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Lastname">
                        </div>
                    </div>
                    <div class="flex">
                        <div class="form-group left">
                            <label for="exampleFormControlInput1"></label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="E-mail">
                        </div>
                        <div class="form-group right">
                            <label for="exampleFormControlInput1"></label>
                            <select class="form-control" id="exampleFormControlInput1">
                                <option value="G">select gender</option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="form-group left">
                            <label for="exampleFormControlInput1"></label>
                            <input type="date" class="form-control" id="exampleFormControlInput1"
                                placeholder="Date of birth">
                        </div>
                        <div class="form-group right">
                            <label for="exampleFormControlInput1"></label>
                            <input type="password" class="form-control" id="exampleFormControlInput1"
                                placeholder="Phone number">
                        </div>
                    </div>
                    <div class="flex">
                        <div class="form-group left">
                            <label for="exampleFormControlInput1"> </label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Password">
                        </div>
                        <div class="form-group right">
                            <label for="exampleFormControlInput1"></label>
                            <input type="password" class="form-control" id="exampleFormControlInput1"
                                placeholder="Re-enter Password">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" class="form-control" value="Sign Up" >
                    </div>

                    <div class="sign-up-link">
                        <center>
                            Already have an account? <span class="color_primary"><a href="/login"> Sign in </a></span>
                        </center>
                    </div>
                </div>
                <div class="col-lg-4 text-container">
                    <h1>Glad to see you !</h1>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.
                    </p>
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