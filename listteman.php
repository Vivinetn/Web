<?php
include "apacoba.php";
$result = mysqli_query($koneksi, "SELECT * FROM datavivin ORDER BY 'id' ASC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cute Table Website</title>
    <link rel="stylesheet" type="text/css" href="cute.css">
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
        <h1>List Teman Teman Kami <3</h1>

        <section>
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Makanan Favorit</th>
                        <th>Minuman Favorit</th>
                        <th>Warna Favorit</th>
                    </tr>
                </thead>
                <tbody>
                <?php  
                while($data = mysqli_fetch_array($result)) 
                {         
                    echo "<tr>";
                        echo "<td>".$data['nama']."</td>";
                        echo "<td>".$data['email']."</td>";  
                        echo "<td>".$data['makanan']."</td>";  
                        echo "<td>".$data['minuman']."</td>"; 
                        echo "<td>".$data['warna']."</td>";            
                }
            ?>
                </tbody>
            </table>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; website vivin 2023</p>
    </footer>

</body>
</html>
