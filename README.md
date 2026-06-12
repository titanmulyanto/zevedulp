# Zevedu Academy Landing Page

Landing page untuk Zevedu Academy menggunakan **CodeIgniter 4** dan **Tailwind CSS**.

## 📋 Persyaratan

- PHP 8.2 atau lebih tinggi
- Composer
- Node.js dan npm

## 🚀 Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/titanmulyanto/zevedulp.git
cd zevedulp
```

### 2. Install Dependencies
```bash
# Install PHP dependencies
composer install

# Install Node dependencies
npm install
```

### 3. Setup Environment
```bash
cp .env.example .env
```

### 4. Generate Application Key (Opsional)
```bash
php spark key:generate
```

## 🎨 Development

### Build Tailwind CSS
```bash
# Development mode dengan watch
npm run dev

# Production build
npm run build
```

### Run Development Server
```bash
php spark serve
```

Akses aplikasi di `http://localhost:8080`

## 📁 Struktur Folder

```
zevedulp/
├── app/
│   ├── Controllers/      # Controller aplikasi
│   ├── Views/            # Template view
│   └── Config/           # Konfigurasi
├── public/
│   ├── css/              # CSS Tailwind
│   ├── js/               # JavaScript
│   └── assets/           # Gambar dan file statis
├── writable/             # Cache dan logs
├── .env                  # Environment variables
├── composer.json         # PHP dependencies
└── package.json          # Node dependencies
```

## 📝 Fitur

- ✅ Landing page responsif
- ✅ Hero section
- ✅ Feature showcase
- ✅ Promo cards carousel
- ✅ Mobile menu
- ✅ Tailwind CSS styling

## 📄 Lisensi

MIT License
