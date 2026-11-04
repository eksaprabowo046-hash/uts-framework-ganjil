# Tugas Pemrograman Berbasis Framework - Blade Templating Laravel

Implementasi sistem layouting (Blade templating) pada template HTML statis **Landing Page (Pureglow)** dan **Admin Dashboard (Scoxe)** ke dalam struktur proyek Laravel yang fungsional, modular, dan terstruktur.

---

## 📋 Fitur & Ketentuan Implementasi

1. **Sistem Layouting Modular (Blade Engine)**
   - Menggunakan sistem pewarisan `@extends('layouts....')`, `@section('content')`, dan `@yield('content')`.
   - Pemisahan komponen ke dalam partials terpisah menggunakan `@include(...)`:
     - **Landing Page**: `head`, `header`, `footer`, `scripts`, `mobile_nav`, `widgets`
     - **Admin Dashboard**: `head`, `header`, `sidebar`, `footer`, `scripts`
2. **Aset Statis Terkelola**
   - Seluruh asset CSS, JS, font, dan image dimuat menggunakan helper `{{ asset(...) }}`.
   - Lokasi aset:
     - Landing: `public/landing-assets/`
     - Admin: `public/admin-assets/`
3. **Navigasi Terintegrasi**
   - Semua tautan navigasi dan tombol antar-halaman menggunakan fungsi named route `{{ route(...) }}`.

---

## 🚀 Panduan Menjalankan Proyek

Pastikan perangkat telah terpasang **PHP >= 8.2** dan **Composer**.

### 1. Clone Repository
```bash
git clone https://github.com/eksaprabowo046-hash/uts-framework-ganjil.git
cd uts-framework-ganjil
```

### 2. Install Dependensi PHP
```bash
composer install
```

### 3. Konfigurasi Environment File
Salin file `.env.example` menjadi `.env`:
```bash
# Windows (CMD / PowerShell)
copy .env.example .env

# Atau (Linux / macOS / Git Bash)
cp .env.example .env
```

### 4. Generate Application Key
```bash
php artisan key:generate
```

### 5. Jalankan Development Server
```bash
php artisan serve
```

Aplikasi siap diakses pada browser melalui alamat: [http://localhost:8000](http://localhost:8000)

---

## 🌐 Daftar Halaman & Rute

### Landing Page (Template Pureglow)
| No | Halaman | URL Path | Route Name | Keterangan |
|---|---|---|---|---|
| 1 | Home | `/` | `landing.home` | Beranda Landing Page |
| 2 | About | `/about` | `landing.about` | Tentang Kami |
| 3 | Products | `/products` | `landing.products` | Katalog Produk |
| 4 | Checkout | `/checkout` | `landing.checkout` | Keranjang & Pembayaran |
| 5 | Testimonials | `/testimonials` | `landing.testimonials` | Ulasan Pelanggan |
| 6 | Blog | `/blog` | `landing.blog` | Artikel & Berita |

### Admin Dashboard (Template Scoxe)
| No | Halaman | URL Path | Route Name | Keterangan |
|---|---|---|---|---|
| 1 | Dashboard | `/admin` | `admin.dashboard` | Halaman Utama Dashboard Admin |
| 2 | Chart.js | `/admin/charts-chartjs` | `admin.charts` | Visualisasi Grafik Statistik |
| 3 | Form Elements | `/admin/forms-elements` | `admin.forms` | Elemen Form Input Admin |
| 4 | DataTables | `/admin/tables-datatables` | `admin.tables` | Tabel Data Dinamis |
| 5 | SweetAlerts | `/admin/ui-sweetalerts` | `admin.alerts` | Komponen Alert & Notifikasi |
| 6 | Login | `/admin/login` | `admin.login` | Halaman Masuk Akun Admin |

---

## 📁 Struktur View Blade

```
resources/views/
├── layouts/
│   ├── landing.blade.php      # Layout utama Landing Page
│   └── admin.blade.php        # Layout utama Admin Dashboard
├── landing/
│   ├── partials/
│   │   ├── head.blade.php
│   │   ├── header.blade.php
│   │   ├── footer.blade.php
│   │   ├── scripts.blade.php
│   │   ├── mobile_nav.blade.php
│   │   └── widgets.blade.php
│   ├── index.blade.php
│   ├── about.blade.php
│   ├── products.blade.php
│   ├── checkout.blade.php
│   ├── testimonials.blade.php
│   └── blog.blade.php
└── admin/
    ├── partials/
    │   ├── head.blade.php
    │   ├── header.blade.php
    │   ├── sidebar.blade.php
    │   ├── footer.blade.php
    │   └── scripts.blade.php
    ├── index.blade.php
    ├── charts_chartjs.blade.php
    ├── forms_elements.blade.php
    ├── tables_datatables.blade.php
    ├── ui_sweetalerts.blade.php
    └── login.blade.php
```
