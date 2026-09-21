// navbar.js
// Dipakai di SEMUA halaman (home, berita, galeri, guru, jurusan, kontak, profil, eskul, welcome)
// Fungsi: toggle menu hamburger untuk tampilan HP + highlight menu aktif

document.addEventListener('DOMContentLoaded', function () {
  const toggleBtn = document.querySelector('.navbar-toggle');
  const menu = document.querySelector('.navbar-menu');

  if (toggleBtn && menu) {
    toggleBtn.addEventListener('click', function () {
      menu.classList.toggle('active');
      toggleBtn.classList.toggle('active');
    });

    // Tutup menu otomatis kalau salah satu link diklik (khusus mobile)
    const links = menu.querySelectorAll('a');
    links.forEach(function (link) {
      link.addEventListener('click', function () {
        menu.classList.remove('active');
        toggleBtn.classList.remove('active');
      });
    });
  }

  // Efek navbar berubah warna/bayangan saat halaman discroll ke bawah
  const navbar = document.querySelector('.navbar');
  if (navbar) {
    window.addEventListener('scroll', function () {
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });
  }
});