<?php  
    session_start(); // Mulai session
    var_dump($_SESSION);
    // data sesion akun hasil register dari sesion di simpan ke dalam variable 
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];

    // data Admin agar tidak perlu bulak balik karena sesion telah berakhir
    $adminName = 'Admin';
    $adminEmail = 'admin@gmail.com';
    $adminPass = '12345678';
    
    // inputan user di masukan ke dalam variable
    $input_username = $_GET['username'];
    $input_email = $_GET['email'];
    $input_password = $_GET['password'];
    $remember = $_GET['check'];

    // Pengecekan Kondisi apakan yang inputan yang user masukan sama dengan yang ada pada sesion atau tidak, jika sama maka 
    // akan login ke dashbord jika tidak maka akan muncul login gagal dan kembali ke page login 

    // function sesi ulang 

    if($input_username === $username && $input_password === $password && $input_email === $email || $input_username === $adminName && $input_password === $adminPass && $input_email === $adminEmail){
        echo "<h1>Berhasil login </h1>";
        // echo "<button onclick=\"sesiUlang();\">Lanjut Ke dashboard</button>";
        if($remember == 'Y'){
            setcookie('username' ,$adminName , time() + 86000 , "/");
            setcookie('email' ,$adminEmail , time() + 86000 , "/");
            setcookie('password' ,$adminPass , time() + 86000 , "/");
        }
    
        session_start(); // Mulai pemberian sesion kembali
        $_SESSION['nama'] = $adminName; // sesion nama di isi dari variable usernama
         $_SESSION['login'] = 'login'; // sesion login di isi dengan nilai login untuk pengecekan

         header('location: starter.php');
        

    }else {
        echo"<h1>anda Gagal Login  </h1>";
        echo "<a href='login.php'>Kembali</a>";

    }



    // echo"<h1>Usernama inputan : $input_username </h1>";
    // echo"<h1>email inputan : $input_email </h1>";
    // echo"<h1>passowrd inputan : $input_password </h1>";


 ?>