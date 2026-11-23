# SIFIN — Sistem Informasi Inventory Sekolah

**SIFIN (Sistem Informasi Inventory Sekolah)** adalah aplikasi berbasis web yang dikembangkan untuk membantu pengelolaan data aset, sarana, prasarana, serta inventaris barang di lingkungan sekolah secara terstruktur dan terkomputerisasi.

Repositori ini dibuat sebagai bagian dari proyek mata kuliah **Rekayasa Perangkat Lunak (RPL)**.

---

## Fitur Utama

- **Autentikasi & Manajemen Pengguna:** Sistem login berbasis sesi (*session*) untuk mengamankan akses pengelolaan data inventaris.
- **Manajemen Data Barang / Inventaris:** Pencatatan, pembaruan, pencarian, dan penghapusan data barang inventaris sekolah (CRUD).
- **Manajemen Kategori & Lokasi / Ruangan:** Pengelompokan barang berdasarkan kategori serta penempatan lokasi atau ruangan di sekolah.
- **Pencatatan Transaksi Inventaris:** Monitoring barang masuk, barang keluar, peminjaman, maupun kondisi aset sekolah.
- **Dashboard & Rekapitulasi:** Ringkasan informasi stok dan kondisi inventaris sekolah secara keseluruhan.

---

## Teknologi & Tools yang Digunakan

- **Arsitektur:** PHP Native dengan pola **MVC (Model-View-Controller)**
- **Database:** MySQL / MariaDB
- **Frontend:** HTML5, CSS3, JavaScript *(tambahkan Bootstrap / AdminLTE jika digunakan)*
- **Local Server Environment:** Laragon
- **Code Editor & Version Control:** Visual Studio Code, Git & GitHub

---

## Struktur Folder

Proyek ini memisahkan logika aplikasi inti dan aset yang dapat diakses publik ke dalam dua direktori utama (`app/` dan `public/`):

```text
RPL_Project/
├── app/
│   ├── config/          # Konfigurasi aplikasi & koneksi database
│   ├── controllers/     # Controller untuk menangani request dan alur logika
│   ├── core/            # Routing utama, Base Controller, dan wrapper Database
│   ├── models/          # Model untuk query dan manipulasi data MySQL
│   └── views/           # Antarmuka pengguna (HTML/PHP templates)
├── docs/                # Dokumen proyek (Laporan RPL & Slide PPT)
├── public/
│   ├── css/             # File stylesheet
│   ├── js/              # File JavaScript
│   ├── img/             # Aset gambar & ikon
│   ├── .htaccess        # Konfigurasi URL rewriting (Pretty URLs)
│   └── index.php        # Entry point (front controller) aplikasi
└── README.md
```

## Akses Link

[Buka Formulir Pengujian UAT](https://Takaa057.gihub.io/docs/formulir_pengujian_aplikasi_uat.html)
