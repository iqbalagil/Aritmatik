<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<body>
    <div class="relative reverse-inline text-left">
        <div>
            <button type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" id="menu-button" aria-expanded="true" aria-haspopup="true">
                Pilih Rumus Bangun
                <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>

        <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md outline-pink-500 bg-white shadow-lg ring-1 ring-pink-500 ring-opacity-1" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
            <div class="py-1" role="none">
                <a href="./aplikasibalok.php" class="text-gray-700 block px-4 py-2 text-sm transition-colors ease-linear smooth-link hover:translate-x-2 after:translate-y-1 delay-150" role="menuitem" tabindex="-1" id="menu-item-0">Balok</a>
                <a href="./aplikasikubus.php" class="text-gray-700 block px-4 py-2 text-sm transition-colors ease-linear smooth-link hover:translate-x-2 after:translate-y-1 delay-150" role="menuitem" tabindex="-1" id="menu-item-1">Kubus</a>
                <a href="./aplikasiprisma.php" class="text-gray-700 block px-4 py-2 text-sm transition-colors ease-linear smooth-link hover:translate-x-2 after:translate-y-1 delay-150" role="menuitem" tabindex="-1" id="menu-item-3">Prisma Segitiga</a>
                <a href="./aplikasitabung.php" class="text-gray-700 block px-4 py-2 text-sm transition-colors ease-linear smooth-link hover:translate-x-2 after:translate-y-1 delay-150" role="menuitem" tabindex="-1" id="menu-item-4">Tabung</a>
                <a href="./aplikasikerucut.php" class="text-gray-700 block px-4 py-2 text-sm transition-colors ease-linear smooth-link hover:translate-x-2 after:translate-y-1 delay-150" role="menuitem" tabindex="-1" id="menu-item-5">Kerucut</a>
            </div>
            <a href="./home-screen.php"><button type="button"  class="bg-neutral-200 rounded-lg ml-2 mb-1 p-2 w-20 hover:bg-neutral-300">Back</button></a>
        </div>
    </div>
</body>
<script src="./index.js"></script>

</html>