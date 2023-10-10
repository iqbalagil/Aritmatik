<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<body>

    <body class='flex bg-gradient-to-r from-slate-800 to-zinc-900 h-screen bg-cover overflow-hidden'>
        <div class='block m-32 mx-[min(400px)] row-end-3 bg-white p-5 rounded-md md:min-w-[500px] lg:max-w-[1280px] h-fit backdrop-blur-sm shadow-lg shadow-slate-400'>
            <?php include 'linkdropdown.php'; ?>
            <div class="block m-5 first-letter:uppercase">
                <p for="judul1" class="font-mono first-line:uppercase first-line:tracking-widest
  first-letter:text-7xl first-letter:font-bold first-letter:from-slate-800 first-letter:float-left">V<span class="relative top-5">olume <br> tabung</span></p>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class='md:grid grid-cols-1 col-cente md:max-w-[100px]'>
                    <label for="" class="block text-md font-bold p-2">Jari-jari</label>
                    <input type="number" name="jari_jari" class="text-start text-white focus:outline-blue-600 ml-1 w-72 p-2 rounded-md transition ease-in-out delay-150 hover:translate-y-1 hover:scale-110 hover:bg-gray-800 bg-slate-400">
                    <label for="" class="block text-md font-bold p-2">Tinggi</label>
                    <input type="number" name="tinggi_tabung" class="text-start text-white focus:outline-blue-600 ml-1 mt-1 w-72 p-2 rounded-md transition ease-in-out delay-150 hover:translate-y-1 hover:scale-110 hover:bg-gray-800 bg-slate-400">
                    <input type="submit" value="Jumlah" class="flex m-3 p-4 pr-6 bg-slate-700 rounded-xl md:max-w-[90px]">
                </div>
            </form>
            <div class="block ml-16">
                <?php
                if (isset($_POST['jari_jari']) && isset($_POST['tinggi_tabung'])) {
                    $jari_jari = $_POST['jari_jari'];
                    $tinggi_tabung = $_POST['tinggi_tabung'];
                    $volume_tabung = 3.14 * $jari_jari * $jari_jari * $tinggi_tabung; 
                
                    echo "<p>Volume Tabung = $volume_tabung</p>";
                }
                
                ?>
            </div>

            <div class="md:block m-5 first-letter:uppercase">
                <p for="judul2" class="font-mono first-line:uppercase first-line:tracking-widest
  first-letter:text-7xl first-letter:font-bold first-letter:from-slate-800 first-letter:float-left">L<span class="relative top-5">uas <br> Permukaan</span></p>
            </div>
            <?php 
            if (isset($_POST['jari_jari']) && isset($_POST['tinggi_tabung'])) {
                $jari_jari = $_POST['jari_jari'];
                $tinggi_tabung = $_POST['tinggi_tabung'];
            
                $luas_tutup_atas = 2 * 3.14 * $jari_jari * $jari_jari;
            
                $luas_selimut_tabung = 2 * 3.14 * $jari_jari * $tinggi_tabung;

                $luas_permukaan_tabung = $luas_tutup_atas + $luas_selimut_tabung;
            
                echo "<p>Luas Permukaan Tabung = $luas_permukaan_tabung</p>";
            }
            
            ?>
        </div>

    </body>

</html>