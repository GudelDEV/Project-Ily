<?php  
    session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bosstrap Library CDN CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet" />
</head>
<main>
    <!-- Content Start -->
    <section class="content d-flex position-relative container-fluid"
        style="height: 90vh; align-items: center; justify-content: center;">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <!-- Logo-Banner-start -->
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <section class="text-center fs-3 mb-3">STKIP Muhammadiyah Kuningan</section>
                    <img src="https://tse3.mm.bing.net/th?id=OIP.v9p83fXVwMsE7JgWhZJ3_AHaHK&pid=Api&P=0&h=220"
                        class="img-fluid d-block ms-auto me-auto" alt="Sample image">
                    <p class="text-center lead mt-3">Jl. R.A Moertasiah Soepomo No.28B Kuningan
                        Phone: (0232)874085</p>
                </div>
                <!-- Logo-Banner-End -->
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <!-- Login-Form-start -->
                    <form method="get" action="handling.php" autocomplete="on" class="border p-2">
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </button>

                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                            </button>

                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-linkedin-in"></i>
                            </button>
                        </div>


                        <!-- username Input -->
                        <div class="form-outline mb-2">
                            <label class="label" for="username">username</label>
                            <input type="text" id="username" class="form-control form-control-lg border"
                                placeholder="Jhon Doe" required name="username" />
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-2">
                            <label class="label" for="email">Email</label>
                            <input type="email" id="email" class="form-control form-control-lg border"
                                placeholder="name@example.com" required name="email" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-2">
                            <label class="label" for="password">Password</label>
                            <input type="password" id="password" class="form-control form-control-lg border"
                                placeholder="Enter password" required name="password" min="1" max="8" />
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="Y" id="check"
                                    name="check" />
                                <label class="form-check-label" for="check">
                                    Remember me
                                </label>
                            </div>
                            <a href="#!" class="text-body">Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                                    class="link-danger">Register</a></p>
                        </div>

                    </form>
                    <!-- Login-Form-End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Content End -->
</main>


<footer>
    <div
        class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
        <!-- Copyright -->
        <div class="text-white mb-3 mb-md-0">
            Copyright © 2020. All rights reserved.
        </div>
        <!-- Copyright -->

        <!-- Right -->
        <div>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-google"></i>
            </a>
            <a href="#!" class="text-white">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
        <!-- Right -->
    </div>
</footer>

<!-- Boostrap CDN JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js">
</script>

</body>

</html>