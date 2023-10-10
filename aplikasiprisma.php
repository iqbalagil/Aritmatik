<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body class='flex bg-gradient-to-r from-slate-800 to-zinc-900 h-screen bg-cover '>
    <div class='block m-32 mx-[min(400px)] row-end-3 bg-white p-5 rounded-md md:min-w-[500px] lg:max-w-[1280px] h-fit backdrop-blur-sm shadow-lg shadow-slate-400'>
        <?php include 'linkdropdown.php'; ?>
        <div class="block m-5 first-letter:uppercase">
            <p for="judul1" class="font-mono first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:from-slate-800 first-letter:float-left">V<span class="relative top-5">olume <br> prisma: luas alas * prisma</span></p>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="grid grid-row-2 grid-cols-1 mt-8">
                    <label for="" class="block font-bold">Luas Alas</label>
                    <input type="number" name="la_volum" class="text-start text-white focus:outline-blue-600 ml-1 mt-1 w-72 p-2 rounded-md transition ease-in-out delay-150 hover:translate-y-1 hover:scale-110 hover:bg-gray-800 bg-slate-400">
                    <label for="judul" class="block font-bold mt-2">Tinggi</label>
                    <input type="number" name="t_volume" class="text-start text-white focus:outline-blue-600 ml-1 mt-1 w-72 p-2 rounded-md transition ease-in-out delay-150 hover:translate-y-1 hover:scale-110 hover:bg-gray-800 bg-slate-400">
                    <input type="submit" value="Jumlah" name="volume_prisma" class="flex m-3 p-4 bg-slate-700 rounded-xl md:max-w-[80px]">
                </div>
            </form>
            <div class="flex relative left-32 bottom-12">
                <?php
                if (isset($_POST['la_volum'])) {
                    $bil12 = $_POST['la_volum'];
                    $bil13 = $_POST['t_volume'];
                    $rumus1 = $bil12 * $bil13;
                    echo "<p>Volume =</p> $rumus1";
                }
                ?>
            </div>
            <div class="block mt-2 first-letter:uppercase">
                <p for="judul1" class="font-mono first-line:uppercase first-line:tracking-widest
  first-letter:text-7xl first-letter:font-bold first-letter:from-slate-800 first-letter:float-left">L<span class="relative top-5">uas <br> permukaan</span></p>
                <div class="grid grid-row-2 grid-cols-1 mt-8">
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="grid grid-row-2 grid-cols-1 mt-8">
                        <label for="LuasA" class="block font-bold">Luas Alas</label>
                        <input type="number" name="bil1" class="text-start text-white focus:outline-blue-600 ml-1 mt-1 w-72 p-2 rounded-md transition ease-in-out delay-150 hover:translate-y-1 hover:scale-110 hover:bg-gray-800 bg-slate-400">
                        <label for="Keliling" class="block font-bold">Keliling</label>
                        <input type="number" name="bil2" class="text-start text-white focus:outline-blue-600 ml-1 mt-1 w-72 p-2 rounded-md transition ease-in-out delay-150 hover:translate-y-1 hover:scale-110 hover:bg-gray-800 bg-slate-400">
                        <label for="Tinggi" class="block font-bold">Tinggi</label>
                        <input type="number" name="bil3" class="text-start text-white focus:outline-blue-600 ml-1 mt-1 w-72 p-2 rounded-md transition ease-in-out delay-150 hover:translate-y-1 hover:scale-110 hover:bg-gray-800 bg-slate-400">
                        <input type="submit" value="Jumlah" class="flex m-3 p-4 bg-slate-700 rounded-xl md:max-w-[80px]">
                    </div>
                    </form>
                    <div class="flex relative left-32 bottom-12">
                    <?php 
                    if (isset($_POST['bil1']))
                    {
                        $bil1 = $_POST['bil1'];
                        $bil2 = $_POST['bil2'];
                        $bil3 = $_POST['bil3'];
                        $rumus2 = 2 * $bil1 * $bil2 * $bil3;
                        echo "<p>Luas Permukaan =</p> $rumus2";
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>