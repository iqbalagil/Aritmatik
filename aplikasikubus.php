<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabung</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class='flex bg-gradient-to-r from-slate-800 to-zinc-900 h-screen bg-cover overflow-hidden'>
    <div class='block m-32 mx-[min(400px)] row-end-3 bg-white p-5 rounded-md md:min-w-[500px] lg:max-w-[1280px] h-fit backdrop-blur-sm shadow-lg shadow-slate-400'>
        <?php include 'linkdropdown.php'; ?>


        <div class="block m-5 ml-3 first-letter:uppercase">
            <p class="font-mono first-line:uppercase first-line:tracking-widset first-letter:text-7xl first-letter:font-bold first-letter:from-slate-800 first-letter:float-left p-3">V<span class="relative top-4">olume <br>kubus</p></span>
        </div>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="grid grid-cols-1 grid-rows-1">
                <label for="" class="block font-bold">Panjang</label>
                <input type="number" name="panjang_sisi" class="text-start outline-rose-500 focus:outline-blue-600 mt-1 w-96 p-2 rounded-md transition ease-in-out delay-150 hover:translate-y-1 hover:scale-110 hover:bg-gray-800 bg-slate-400 text-white">
                <input type="submit" value="Jumlah" name="volume_kubus" class="flex m-3 p-4 bg-slate-700 rounded-xl md:max-w-[80px]">
            </div>
        </form>
        <?php
        if (isset($_POST['volume_kubus'])) {
            $panjang_sisi = $_POST['panjang_sisi'];
            $volume_kubus = $panjang_sisi * $panjang_sisi * $panjang_sisi;
            echo "<p>Volume Kubus = $volume_kubus</p>";
        } ?>
        <div class="grid grid-cols-1 grid-rows-1">
            <div class="block m-5 first-letter:uppercase">
                <p class="font-mono first-line:uppercase first-line:tracking-widset first-letter:text-7xl first-letter:font-bold first-letter:from-slate-800 first-letter:float-left">L<span class='relative top-5'>uas Permukaan <br> panjang sisi 6v2</span></p>
            </div>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

                <div>
                    <label for="" class="block font-bold">Panjang Sisi</label>
                    <input type="number" name="panjang_sisi" class="text-start outline-rose-500 focus:outline-blue-600 mt-1 w-96 p-2 rounded-md transition ease-in-out delay-150 hover:translate-y-1 hover:scale-110 hover:bg-gray-800 bg-slate-400 text-white">
                    <input type="submit" value="Jumlah" name="luaspermukaan_kubus" class="flex m-3 p-4 bg-slate-700 rounded-xl md:max-w-[80px]">
                </div>
        </div>
        </form>
        <?php
        if (isset($_POST['luaspermukaan_kubus'])) {
            $panjang_sisi = $_POST['panjang_sisi'];
            $luas_permukaan_kubus = 6 * $panjang_sisi * $panjang_sisi;
            echo "<p>Luas Permukaan Kubus = $luas_permukaan_kubus</p>";
        } ?>


    </div>

</body>

</html>