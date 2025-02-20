// JS Toogle sidebar responfife ukuran handphone
function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('-translate-x-full');
}

// JS dropdown pada navbar
document.getElementById('adminBtn').addEventListener('click', function () {
    const dropdown = document.getElementById('dropdown');
    dropdown.classList.toggle('hidden');
});
document.addEventListener('click', function (e) {
    const dropdown = document.getElementById('dropdown');
    const adminBtn = document.getElementById('adminBtn');
    if (!dropdown.contains(e.target) && !adminBtn.contains(e.target)) {
        dropdown.classList.add('hidden');
    }
});

// JS flatpickr untuk mengambil tanggal dari edit_tugas.php
flatpickr("#deadline", { enableTime: false, dateFormat: "Y-m-d" });