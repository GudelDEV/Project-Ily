<?php  
    session_start(); // Memulai Sesion 
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

<body>

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
                        <!-- Register-form-start -->
                        <form method="post" class="mt-4 border p-2" action="login.php">
                            <h3 class='text-center'>Sign Up</h3>
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="form-outline">
                                        <label class="label ms-1" for="username">Username</label>
                                        <input type="text" id="username" class="form-control border" name="username"
                                            required placeholder="Jhon Doe" />
                                    </div>
                                </div>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="ms-1" for="email">Email</label>
                                <input type="email" name="email" class="form-control border" id="email" required
                                    placeholder="name@example.com" />
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="label ms-1" for="password">password</label>
                                <input type="password" name="password" class="form-control border" id="password"
                                    required min="8" placeholder="minimal 8 character" />
                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-4">
                                <input class="form-check-input me-2" type="checkbox" value="aggre" id="checked"
                                    checked />
                                <label class="form-check-label" for="checked">
                                    Setuju Dengan Aplikasi Kami
                                </label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4" name="button" value="Submit"
                                id="button"> Submit
                            </button>

                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>or sign up with:</p>
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>
                        </form>
                        <!-- Register-form-end -->
                        <!-- Login-Form-start -->
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

<?php  
    // Mengecek apakah form daftar ada isinya atau tidak 
    if(isset($_POST['password']) && isset($_POST['email']) && isset($_POST['username'])){
        // Menyimpan inputan user ke dalam variabel 
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Menyimpan nilai variabel ke dalam sesi
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;             
        $_SESSION['username'] = $username;

        // require 'login.php'; // Memuat Login php
    }
    var_dump($_SESSION);
?>