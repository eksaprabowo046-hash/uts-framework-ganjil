# Tugas Pemrograman Berbasis Framework - Blade Templating Laravel

Implementasi sistem layouting (Blade templating) pada template HTML statis **Landing Page (Pureglow)** dan **Admin Dashboard (Scoxe)** ke dalam struktur proyek Laravel yang modular, fungsional, dan memenuhi seluruh kriteria evaluasi UTS / Tugas.

---

## 📋 Pemenuhan Kriteria Penilaian (100 Poin)

| No | Komponen Evaluasi | Bobot | Status | Penjelasan Implementasi |
|:--:|---|:---:|:---:|---|
| 1 | **Routing** (Kebenaran pemetaan URL) | 10 Poin | ✅ **Terpenuhi** | Seluruh rute terdaftar di `routes/web.php`, memetakan URL ke Controller yang sesuai tanpa closure route langsung ke view. |
| 2 | **Controller** (Kebenaran fungsi return view) | 10 Poin | ✅ **Terpenuhi** | Menggunakan Controller terpisah: `LandingController` (Frontend) dan `AdminController` (Backend/Admin). Setiap method me-return view Blade yang relevan. |
| 3 | **Layouting Template Admin** (Pemisahan file layout utama Admin) | 10 Poin | ✅ **Terpenuhi** | Layout utama `resources/views/layouts/admin.blade.php` modular dengan partials: `head`, `header`, `sidebar`, `footer`, dan `scripts`. |
| 4 | **Layouting Template Landing** (Pemisahan file layout utama Landing) | 10 Poin | ✅ **Terpenuhi** | Layout utama `resources/views/layouts/landing.blade.php` modular dengan partials: `head`, `header`, `footer`, `scripts`, `mobile_nav`, dan `widgets`. |
| 5 | **Implementasi Templating Halaman Admin** (6 file @ 5 poin) | 30 Poin | ✅ **Terpenuhi** | 6 file view Admin (`index`, `charts_chartjs`, `forms_elements`, `tables_datatables`, `ui_sweetalerts`, `login`) meng-extend layout utama dan mengisi `@section('content')`. |
| 6 | **Implementasi Templating Halaman Landing** (6 file @ 5 poin) | 30 Poin | ✅ **Terpenuhi** | 6 file view Landing (`index`, `about`, `products`, `checkout`, `testimonials`, `blog`) meng-extend layout utama dan mengisi `@section('content')`. |
| **TOTAL** | **NILAI MAKSIMAL** | **100 Poin** | 💯 **LENGKAP** | **Semua 6 komponen evaluasi telah terpenuhi sempurna.** |

---

## 🌐 Daftar Halaman & Pemetaan Rute

### 1. Landing Page (Template Pureglow - 6 Halaman)
| No | Halaman | URL Path | Method Controller | Route Name | File View Blade |
|:--:|---|---|---|---|---|
| 1 | Home / Index | `/` | `LandingController@index` | `landing.home` | `resources/views/landing/index.blade.php` |
| 2 | About | `/about` | `LandingController@about` | `landing.about` | `resources/views/landing/about.blade.php` |
| 3 | Products | `/products` | `LandingController@products` | `landing.products` | `resources/views/landing/products.blade.php` |
| 4 | Checkout | `/checkout` | `LandingController@checkout` | `landing.checkout` | `resources/views/landing/checkout.blade.php` |
| 5 | Testimonials | `/testimonials` | `LandingController@testimonials` | `landing.testimonials` | `resources/views/landing/testimonials.blade.php` |
| 6 | Blog | `/blog` | `LandingController@blog` | `landing.blog` | `resources/views/landing/blog.blade.php` |

### 2. Admin Dashboard (Template Scoxe - 6 Halaman)
| No | Halaman | URL Path | Method Controller | Route Name | File View Blade |
|:--:|---|---|---|---|---|
| 1 | Dashboard | `/admin` / `/admin/dashboard` | `AdminController@index` | `admin.dashboard` | `resources/views/admin/index.blade.php` |
| 2 | Chart.js | `/admin/charts-chartjs` | `AdminController@chartsChartjs` | `admin.charts_chartjs` | `resources/views/admin/charts_chartjs.blade.php` |
| 3 | Form Elements | `/admin/forms-elements` | `AdminController@formsElements` | `admin.forms_elements` | `resources/views/admin/forms_elements.blade.php` |
| 4 | DataTables | `/admin/tables-datatables` | `AdminController@tablesDatatables` | `admin.tables_datatables` | `resources/views/admin/tables_datatables.blade.php` |
| 5 | SweetAlerts | `/admin/ui-sweetalerts` | `AdminController@uiSweetalerts` | `admin.ui_sweetalerts` | `resources/views/admin/ui_sweetalerts.blade.php` |
| 6 | Login | `/admin/login` | `AdminController@login` | `admin.login` | `resources/views/admin/login.blade.php` |

---

## 📁 Struktur View Blade & Komponen Modular

Sesuai ketentuan, setiap layout utama memisahkan komponen HTML minimal: **Head**, **Header/Menubar**, **Main Content**, **Footer**, dan **Scripts**.

```
resources/views/
├── layouts/
│   ├── landing.blade.php          # Layout Utama Landing Page
│   └── admin.blade.php            # Layout Utama Admin Dashboard
├── landing/
│   ├── partials/
│   │   ├── head.blade.php         # Komponen Head (Meta & CSS)
│   │   ├── header.blade.php       # Komponen Header & Navbar
│   │   ├── footer.blade.php       # Komponen Footer
│   │   ├── scripts.blade.php      # Komponen Scripts JS
│   │   ├── mobile_nav.blade.php   # Komponen Navigasi Mobile
│   │   └── widgets.blade.php      # Komponen Widget & Chat
│   ├── index.blade.php            # View 1: Beranda
│   ├── about.blade.php            # View 2: Tentang Kami
│   ├── products.blade.php         # View 3: Katalog Produk
│   ├── checkout.blade.php         # View 4: Checkout & Pembayaran
│   ├── testimonials.blade.php     # View 5: Testimoni Pengguna
│   └── blog.blade.php             # View 6: Artikel & Berita
└── admin/
    ├── partials/
    │   ├── head.blade.php         # Komponen Head (Meta & CSS)
    │   ├── header.blade.php       # Komponen Header & Topbar
    │   ├── sidebar.blade.php      # Komponen Menubar / Sidebar
    │   ├── footer.blade.php       # Komponen Footer
    │   └── scripts.blade.php      # Komponen Scripts JS
    ├── index.blade.php            # View 1: Admin Dashboard
    ├── charts_chartjs.blade.php   # View 2: Chart.js
    ├── forms_elements.blade.php   # View 3: Form Elements
    ├── tables_datatables.blade.php# View 4: DataTables Basic
    ├── ui_sweetalerts.blade.php   # View 5: SweetAlerts
    └── login.blade.php            # View 6: Halaman Login
```

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
# Windows
copy .env.example .env

# Linux / macOS
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
- Landing Page: [http://localhost:8000](http://localhost:8000)
- Admin Panel: [http://localhost:8000/admin](http://localhost:8000/admin)
