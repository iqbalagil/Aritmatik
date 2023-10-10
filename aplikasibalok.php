<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<body class='flex bg-gradient-to-r from-slate-800 to-zinc-900 h-screen bg-cover'>
    <div class='block m-32 mx-[min(400px)] row-end-3 bg-white p-5 rounded-md md:min-w-[500px] lg:max-w-[1280px] h-fit backdrop-blur-sm shadow-lg shadow-slate-400'>
        <?php include 'linkdropdown.php'; ?>
        <div class="block m-5 first-letter:uppercase">
            <p for="judul1" class="font-mono first-line:uppercase first-line:tracking-widest
  first-letter:text-7xl first-letter:font-bold first-letter:from-slate-800 first-letter:float-left">V<span class="relative top-5">olume <br> balok</span></p>
        </div>
        <!-- Form for Volume balok -->
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class='md:grid grid-cols-1 col-cente md:max-w-[100px]'>
                <label for="" class="block text-md font-bold p-2">Panjang</label>
                <input type="number" name="bil1" class="text-start text-white focus:outline-blue-600 ml-1 w-72 p-2 rounded-md transition ease-in-out delay-150 hover:translate-y-1 hover:scale-110 hover:bg-gray-800 bg-slate-400">
                <label for="" class="block text-md font-bold p-2">Lebar</label>
                <input type="number" name="bil2" class="text-start text-white focus:outline-blue-600 ml-1 mt-1 w-72 p-2 rounded-md transition ease-in-out delay-150 hover:translate-y-1 hover:scale-110 hover:bg-gray-800 bg-slate-400">
                <label for="" class="block text-md font-bold p-2">Tinggi</label>
                <input type="number" name="bil3" class="text-start text-white focus:outline-blue-600 ml-1 mt-1 w-72 p-2 rounded-md transition ease-in-out delay-150 hover:translate-y-1 hover:scale-110 hover:bg-gray-800 bg-slate-400">
                <input type="submit" name="submit_volume" value="Jumlah" class="flex m-3 p-4 bg-slate-700 rounded-xl md:max-w-[80px]">
            </div>
            <div class="flex relative left-32 top-2">
                <?php
                if (isset($_POST['submit_volume'])) {
                    $bil1 = $_POST['bil1'];
                    $bil2 = $_POST['bil2'];
                    $bil3 = $_POST['bil3'];
                    $rumus2 = $bil1 * $bil2 * $bil3;
                    echo "<p>Volume =</p> $rumus2";
                }
                ?>
            </div>
        </form>

        <!-- Form for Luas Permukaan -->
        <div class="md:block m-5 first-letter:uppercase">
            <p for="judul2" class="font-mono first-line:uppercase first-line:tracking-widest
  first-letter:text-7xl first-letter:font-bold first-letter:from-slate-800 first-letter:float-left">L<span class="relative top-5">uas <br> Permukaan</span></p>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class='md:grid grid-cols-1 grid-rows-1 lg:min-w-[100px]'>
                <label for="" class="block text-md font-bold p-2">Panjang</label>
                <input type="number" name="panjang_luas" class="text-start text-white focus:outline-blue-600 ml-1 w-72 p-2 rounded-md transition ease-in-out delay-150 hover:translate-y-1 hover:scale-110 hover:bg-gray-800 bg-slate-400">
                <label for="" class="block text-md font-bold p-2">Lebar</label>
                <input type="number" name="lebar_luas" class="text-start text-white focus:outline-blue-600 ml-1 mt-1 w-72 p-2 rounded-md transition ease-in-out delay-150 hover:translate-y-1 hover:scale-110 hover:bg-gray-800 bg-slate-400">
                <label for="" class="block text-md font-bold p-2">Tinggi</label>
                <input type="number" name="tinggi_luas" class="text-start text-white focus:outline-blue-600 ml-1 mt-1 w-72 p-2 rounded-md transition ease-in-out delay-150 hover:translate-y-1 hover:scale-110 hover:bg-gray-800 bg-slate-400">
                <input type="submit" name="submit_luas_permukaan" value="Jumlah" class="flex m-3 p-4 bg-slate-700 rounded-xl md:max-w-[80px]">
            </div>
        </form>

        <div class="flex relative left-16 bottom-2">
            <?php
            if (isset($_POST['submit_luas_permukaan'])) {
                $bil21 = $_POST['panjang_luas'];
                $bil22 = $_POST['lebar_luas'];
                $bil23 = $_POST['tinggi_luas'];
                $rumus21 = (2 * $bil21) * (2 * $bil22) * (2 * $bil23);

                echo "<p>Hasil Luas Permukaan Balok = </p>$rumus21";
            }
            ?>
        </div>
    </div>
</body>

</html>
