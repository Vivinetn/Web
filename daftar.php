<?php
include "apacoba.php";

if(isset($_POST['submit'])){
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $makanan = $_POST['makanan'];
  $minuman = $_POST['minuman'];
  $warna = $_POST['warna'];


  if ($nama && $email && $makanan && $minuman && $warna) {
    $sql1 = "insert into datavivin
    (nama, email, makanan, minuman, warna) values ('$nama','$email','$makanan','$minuman','$warna')";
    $q1 = mysqli_query($koneksi,$sql1);
  
  } 
  
echo "Selamat kamu menjadi teman saya :D";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body, h1, h2, h3, p, ul, li, nav {
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            font-size: 16px;
        }
        
        header {
            background-color: #e82163;
            color: #fff;
            padding: 20px;
        }
        
        nav ul {
            list-style: none;
        }
        
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        
        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            font-size: 18px;
        }
    
        aside {
            background-color: #FFC0CB;
            width: 200px;
            float: left;
            height: 100%;
            padding: 10px;
        }
        
        aside ul {
            list-style: none;
        }
        
        aside ul li {
            margin-bottom: 10px;
        }
        
        aside a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            font-size: 16px;
        }
    
        main {
            margin-left: 220px; 
            padding: 20px;
        }
        
        footer {
            clear: both;
            background-color: #e82163;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
        
        h1 {
            color: #FF69B4; 
        }
        
        p {
            color: #333;
            font-size: 18px;
        }
    
        main {
            background-color: #FFF5EE;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
            height: 615px;
        }

        form {
            display: flex;
            flex-direction: column;
            max-width:5000px;
            margin: 0 auto;
        }
        
        label {
            margin-bottom: 5px;
        }
        
        input,
        textarea {
            padding: 10px;
            margin-bottom: 10px;
        }
        
        button {
            background-color: #FF69B4;
            color: #fff;
            padding: 10px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }
        
        button:hover {
            background-color: #FF1493; 
        }

        aside {
            background-color: #FFC0CB;
            width: 200px;
            float: left;
            height: 635px;
            padding: 10px;
        }

        aside ul {
            list-style: none;
        }

        aside ul li {
            margin-bottom: 10px;
        }

        aside a {
            text-decoration: none;
            color: #e82163;
            font-weight: bold;
            font-size: 40px;
        }
        </style>
</head>
<body>
    <!-- Topbar -->
    <header>
        <nav>
            <ul>
                <li><a href="index.php">WEBSITE UNTUK UJIAN AKHIR SEMESTER</a></li>
            </ul>
        </nav>
    </header>

    <!-- Sidebar -->
    <aside>
        <ul>
            <li><a href="test.php">Home</a></li>
            <li><a href="listteman.php">Teman</a></li>
            <li><a href="daftar.php">Daftar</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main>
        <h1>Ayo Daftar Menjadi Teman kami!</h1>
        <section>
            <br>
            <form action="" method="post">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>

                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="makanan">Makanan Favorit:</label>
                <input type="text" id="makanan" name="makanan" required>

                <label for="minuman">Minuman Favorit:</label>
                <input type="text" id="minuman" name="minuman" required>

                <label for="warna">Warna Favorit:</label>
                <input type="text" id="warna" name="warna" required>

                <button type="submit" name="submit" id="submit">Send Message</button>
                <br>
            </form>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; website vivin 2023</p>
    </footer>

</body>
</html>
