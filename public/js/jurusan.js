// jurusan.js
// Dipakai bareng di 4 halaman: aphp.blade.php, bd.blade.php, rpl.blade.php, tkr.blade.php
// Fungsi: AOS (fade-in per section) + Accordion (expand/collapse) + Smooth scroll ke section

document.addEventListener('DOMContentLoaded', function () {

  // 1. AOS - animasi fade-in tiap section (deskripsi, kompetensi, prospek kerja, fasilitas)
  AOS.init({
    duration: 700,
    easing: 'ease-out',
    once: true,
    offset: 60
  });

  // 2. Accordion - expand/collapse untuk info Mata Pelajaran, Kompetensi, Prospek Kerja
  const accordionItems = document.querySelectorAll('.accordion-item');
  accordionItems.forEach(function (item) {
    const header = item.querySelector('.accordion-header');
    if (header) {
      header.addEventListener('click', function () {
        const isActive = item.classList.contains('active');

        // Tutup semua accordion lain dulu (biar cuma 1 yang terbuka)
        accordionItems.forEach(function (i) {
          i.classList.remove('active');
        });

        // Buka yang diklik (kalau sebelumnya tertutup)
        if (!isActive) {
          item.classList.add('active');
        }
      });
    }
  });

  // 3. Smooth scroll - untuk tombol menu internal, misal "Lihat Kurikulum"
  const scrollLinks = document.querySelectorAll('a[href^="#"]');
  scrollLinks.forEach(function (link) {
    link.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      const target = document.querySelector(targetId);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

});

/*
Contoh struktur HTML accordion:
<div class="accordion-item">
  <div class="accordion-header">Mata Pelajaran Produktif</div>
  <div class="accordion-content">
    <p>Isi konten mata pelajaran di sini...</p>
  </div>
</div>
*/