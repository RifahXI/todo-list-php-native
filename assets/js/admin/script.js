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

// JS Toogle password pada input password edit_pengguna.php dan tambah_pengguna.php
const togglePassword = document.getElementById('togglePassword');
    const passwordField = document.getElementById('password');

    togglePassword.addEventListener('click', function (e) {
        // Toggle the type of the password field between text and password
        const type = passwordField.type === 'password' ? 'text' : 'password';
        passwordField.type = type;

        // Toggle the eye icon
        this.querySelector('i').classList.toggle('fa-eye');
        this.querySelector('i').classList.toggle('fa-eye-slash');
    });