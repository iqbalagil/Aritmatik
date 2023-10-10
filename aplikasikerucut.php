`<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Kerucut</title>
</head>

<body class='flex bg-gradient-to-r from-slate-800 to-zinc-900 h-screen bg-cover'>
    <div class='block m-32 mx-[min(400px)]  bg-white p-5 rounded-md md:min-w-[500px] relative bottom-2 lg:max-w-[1280px] h-fit backdrop-blur-sm  shadow-lg shadow-slate-400'>
        <?php include 'linkdropdown.php'; ?>
        <div class="block m-5 first-letter:uppercase">
            <p for="judul1" class="font-mono first-line:uppercase first-line:tracking-widest
  first-letter:text-7xl first-letter:font-bold first-letter:from-slate-800 first-letter:float-left">V<span class="relative top-5">olume <br> kerucut</span></p>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class='md:grid grid-cols-1 col-cente md:max-w-[100px]'>
                <label for="" class="block text-md font-bold p-2">Jari-Jari Alas</label>
                <input type="number" name="jari_jari" class="text-start text-white focus:outline-blue-600 ml-1 w-72 p-2 rounded-md transition ease-in-out delay-150 hover:translate-y-1 hover:scale-110 hover:bg-gray-800 bg-slate-400">
                <label for="" class="block text-md font-bold p-2">Tinggi</label>
                <input type="number" name="tinggi" class="text-start text-white focus:outline-blue-600 ml-1 mt-1 w-72 p-2 rounded-md transition ease-in-out delay-150 hover:translate-y-1 hover:scale-110 hover:bg-gray-800 bg-slate-400">
                <input type="submit" name="submit_volume" value="Jumlah" class="flex m-3 p-4 bg-slate-700 rounded-xl md:max-w-[80px]">
            </div>
            <div class="flex relative left-32 top-2">
                <?php
                if (isset($_POST['submit_volume'])) {
                    $jari_jari = $_POST['jari_jari'];
                    $tinggi = $_POST['tinggi'];
                    $volume_kerucut = (1/3) * pi() * $jari_jari * $jari_jari * $tinggi;
                    echo "<p>Volume Kerucut = </p>" . number_format($volume_kerucut, 2);
                }
                ?>
            </div>
        </form>

        <div class="md:block m-5 first-letter:uppercase">
            <p for="judul2" class="font-mono first-line:uppercase first-line:tracking-widest
  first-letter:text-7xl first-letter:font-bold first-letter:from-slate-800 first-letter:float-left">L<span class="relative top-5">uas <br> Permukaan</span></p>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class='md:grid grid-cols-1 grid-rows-1 lg:min-w-[100px]'>
                <label for="" class="block text-md font-bold p-2">Jari-Jari Alas</label>
                <input type="number" name="jari_jari_luas" class="text-start text-white focus:outline-blue-600 ml-1 w-72 p-2 rounded-md transition ease-in-out delay-150 hover:translate-y-1 hover:scale-110 hover:bg-gray-800 bg-slate-400">
                <label for="" class="block text-md font-bold p-2">Panjang Garis Pelukis</label>
                <input type="number" name="panjang_pelukis" class="text-start text-white focus:outline-blue-600 ml-1 mt-1 w-72 p-2 rounded-md transition ease-in-out delay-150 hover:translate-y-1 hover:scale-110 hover:bg-gray-800 bg-slate-400">
                <input type="submit" name="submit_luas_permukaan" value="Jumlah" class="flex m-3 p-4 bg-slate-700 rounded-xl md:max-w-[80px]">
            </div>
        </form>

        <div class="flex relative left-16 bottom-2">
            <?php
                if (isset($_POST['submit_luas_permukaan'])) {
                    $jari_jari_luas = $_POST['jari_jari_luas'];
                    $panjang_pelukis = $_POST['panjang_pelukis'];

                    // Hitung luas permukaan kerucut
                    $luas_permukaan_kerucut = pi() * $jari_jari_luas * ($jari_jari_luas + $panjang_pelukis);

                    echo "<p>Luas Permukaan Kerucut = </p>" . number_format($luas_permukaan_kerucut, 2);
                }
                ?>
        </div>
    </div>
</body>

</html>

`