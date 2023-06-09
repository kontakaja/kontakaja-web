document.addEventListener('DOMContentLoaded', function () {
    // Mengambil referensi ke elemen <img> dengan kelas logoDisplay dan logoScroll
    const logoDisplay = document.querySelector('.logo-display');
    const logoScroll = document.querySelector('.logo-scrolled');

    // Menampilkan logoDisplay dan menyembunyikan logoScroll pada halaman default
    logoDisplay.style.display = 'inline';
    logoScroll.style.display = 'none';
});

// Mengambil referensi ke elemen <a> dan kedua elemen <img>
const link = document.querySelector('.sidebar__logo');
const logoDisplay = document.querySelector('.logo-display');
const logoScroll = document.querySelector('.logo-scrolled');

// Menambahkan event listener untuk menangani peristiwa hover pada elemen <a>
link.addEventListener('mouseenter', function (event) {
    // Periksa apakah kursor juga berada di dalam area simplebar
    if (!event.target.closest('[data-simplebar]')) {
        // Tampilkan logoScroll dan sembunyikan logoDisplay saat dihover
        logoDisplay.style.display = 'none';
        logoScroll.style.display = 'inline';
    }
});

link.addEventListener('mouseleave', function () {
    // Tampilkan logoDisplay dan sembunyikan logoScroll saat tidak dihover
    logoDisplay.style.display = 'inline';
    logoScroll.style.display = 'none';
});

// Mengambil referensi ke elemen simplebar
const simplebar = document.querySelector('[data-simplebar]');

// Menambahkan event listener untuk menangani peristiwa hover pada elemen simplebar
simplebar.addEventListener('mouseenter', function () {
    // Tampilkan logoScroll saat kursor berada di dalam area simplebar
    logoDisplay.style.display = 'none';
    logoScroll.style.display = 'inline';
});

simplebar.addEventListener('mouseleave', function () {
    // Tampilkan logoDisplay saat kursor berada di luar area simplebar
    logoDisplay.style.display = 'inline';
    logoScroll.style.display = 'none';
});
