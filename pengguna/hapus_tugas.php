<?php

// Kode Php
include '../php/pengguna/hapus_tugas.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>Listify - Beranda</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- TailwindCSS -->
    <link rel="stylesheet" href="../src/output.css">

    <!-- Vendor Files -->
    <link rel="stylesheet" href="../assets/vendor/FontAwesome6Pro/css/all.min.css">
    <link rel="stylesheet" href="../src/poppins.css">
    
</head>

<body class="h-screen flex flex-col bg-gray-50">

    <!-- Navbar -->
    <div class="flex items-center justify-between bg-[#ffb4a2] p-4 shadow-md">
        <div class="flex items-center">
            <button class="lg:hidden text-white text-2xl mr-4 focus:outline-none" onclick="toggleSidebar()">
                <i class="fas fa-bars"></i>
            </button>
            <h2 class="text-white font-semibold text-2xl ml-5">Listify</h2>
        </div>
        <div class="flex items-center space-x-4">
            <div class="relative">
                <button id="adminBtn" class="text-white font-semibold mr-5 flex items-center">
                    <?php echo htmlspecialchars($_SESSION['nama']); ?> <i class="ml-2 fa-solid fa-arrow-down"></i>
                </button>
                <div id="dropdown" class="hidden absolute right-0 bg-white shadow-lg w-48 mt-2 rounded-md">
                    <ul class="py-2">
                        <li class="px-4 py-2 text-gray-600 hover:bg-[#ffb4a2] transition cursor-pointer hover:bg-gray-100"
                            onclick="window.location.href='../php/logout/logout.php';">
                            <i class="fas fa-sign-out-alt mr-2 text-[#ffb4a2]"></i> Logout
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- End - Navbar -->

    <!-- Wrapper -->
    <div class="flex flex-1 overflow-hidden">

        <!-- Sidebar -->
        <div id="sidebar"
            class="w-64 bg-white shadow-lg p-4 overflow-y-auto fixed lg:relative transform -translate-x-full lg:translate-x-0 transition-transform duration-200 ease-in-out">
            <ul class="space-y-2">
                <li class="flex items-center space-x-2 hover:bg-red-100 p-2 rounded-md"
                    onclick="window.location.href='beranda.php';">
                    <i class="fa-sharp fa-solid fa-house text-[#ffb4a2]"></i>
                    <span class="text-gray-700">Beranda</span>
                </li>
                <li class="flex items-center space-x-2 hover:bg-red-100 p-2 rounded-md transition"
                    onclick="window.location.href='buat_tugas.php';">
                    <i class="fas fa-pencil text-[#ffb4a2]"></i>
                    <span class="text-gray-700">Buat Tugas</span>
                </li>
                <li class="flex items-center space-x-2 bg-red-100 p-2 rounded-md transition"
                    onclick="window.location.href='daftar_tugas.php';">
                    <i class="fas fa-tasks text-[#ffb4a2]"></i>
                    <span class="text-gray-700">Daftar Tugas</span>
                </li>

                <div class="border"></div>

                <li class="bg-[#ffb4a2] hover:bg-red-300 transition duration-200 p-2 rounded-md"
                    onclick="window.location.href='../php/logout/logout.php';">
                    <span class="font-medium ml-5 text-gray-700">Logout</span>
                </li>
            </ul>
        </div> <!-- End - Sidebar -->

        <!-- Main Content -->
        <div class="flex-1 flex flex-col bg-gray-50 p-4 overflow-y-auto">

            <!-- Title -->
            <h2 class="text-2xl font-semibold mb-6 text-gray-700">Beranda</h2>

            <!-- Content -->
            <div class="bg-white p-6 rounded-lg shadow-lg w-full">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Konfirmasi Penghapusan</h3>
                <p class="text-gray-600 mb-4">Apakah Anda yakin ingin menghapus tugas <strong>
                        <?php echo htmlspecialchars($task['nama_tugas']); ?>
                    </strong>? Tindakan ini tidak dapat dibatalkan.</p>

                <?php if (isset($error)): ?>
                <p class="text-red-500">
                    <?php echo $error; ?>
                </p>
                <?php endif; ?>

                <form method="POST" class="flex space-x-4">
                    <button type="submit" name="hapus"
                        class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-700 transition">
                        Hapus
                    </button>
                    <a href="daftar_tugas.php"
                        class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition">
                        Batal
                    </a>
                </form>
            </div>
            
        </div> <!-- End - Main Content -->

    </div> <!-- End - Wrapper -->

    <!-- Javascript -->
    <script src="../assets/js/pengguna/script.js"></script>

</body>

</html>