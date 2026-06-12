<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Zevedu Academy - Belajar, Berkembang, Berkarier</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    
    <script id="tailwind-config">
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "primary": "#1152d4",
                        "background-light": "#f6f6f8",
                        "accent-purple": "#5a78f0",
                        "accent-cyan": "#2cc0f1",
                    },
                    fontFamily: {
                        "display": ["Lexend", "sans-serif"],
                        "inter": ["Inter", "sans-serif"],
                    },
                    borderRadius: {"DEFAULT": "0.5rem", "lg": "1rem", "xl": "1.5rem", "full": "9999px"},
                },
            },
        }
    </script>
    <style>
        body { font-family: 'Lexend', sans-serif; scroll-behavior: smooth; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        
        #mobile-menu { transition: transform 0.3s ease-in-out; transform: translateX(100%); }
        #mobile-menu.open { transform: translateX(0%); }
        .promo-card { min-width: 320px; position:relative; border-radius:1rem; overflow:hidden; background:white; box-shadow:0 10px 30px rgba(0,0,0,.05); border: 1px solid #e7ebf3; display:flex; flex-direction:column; transition:transform .25s ease, box-shadow .25s ease; }
        .promo-card:hover { transform:translateY(-6px) scale(1.02); box-shadow:0 16px 40px rgba(17,82,212,0.1); }
        .promo-img { width:100%; height:200px; object-fit:cover; background-color: #f3f4f6; }
        .promo-content { padding:20px; flex:1; display:flex; flex-direction:column; justify-content:space-between; }
        .promo-content h3 { margin:0 0 8px; font-size:1.25rem; font-weight:700; color: #0d121b; }
        .promo-content p { margin:0 0 16px; color:#4c669a; font-size:0.95rem; line-height:1.4; }
        .price { margin-bottom:16px; }
        .price-old { text-decoration:line-through; color:#9ca3af; margin-right:8px; }
        .price-new { color:#1152d4; font-size:1.3rem; font-weight:800; }
        .discount-badge { position:absolute; top:12px; left:12px; background:#1152d4; color:white; font-size:0.85rem; font-weight:700; padding:6px 10px; border-radius:999px; box-shadow:0 3px 6px rgba(17,82,212,0.2); z-index: 10; }
        .btn-buy { display:inline-flex; align-items:center; justify-content:center; gap:8px; background:#1152d4; color:white; padding:12px 16px; border-radius:12px; font-weight:600; text-decoration:none; transition:background .25s ease, transform .2s ease; }
        .btn-buy:hover { background:#0d40a8; transform:translateY(-2px); }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        .nav-category-b { font-size: 15px; font-weight: 600; color: #4c669a; text-decoration: none; padding: 12px 4px; cursor: pointer; display: inline-flex; align-items: center; position: relative; transition: color 0.25s ease; white-space: nowrap; }
        .nav-category-b::before { content: ''; position: absolute; width: 100%; height: 1px; bottom: 0; left: 0; background-color: #cbd5e1; }
        .nav-category-b::after { content: ''; position: absolute; width: 0; height: 3px; bottom: -1px; left: 0; background-color: #1152d4; transition: width 0.3s ease; }
        .nav-category-b:hover, .nav-category-b.active { color: #1152d4; }
        .nav-category-b:hover::after, .nav-category-b.active::after { width: 100%; }
    </style>
</head>
<body class="bg-white text-[#0d121b]">
    <div id="backdrop" class="fixed inset-0 bg-black/50 z-[998] hidden" onclick="toggleMenu()"></div>
    <div id="mobile-menu" class="fixed top-0 right-0 h-full w-80 bg-white z-[999] shadow-2xl p-8 overflow-y-auto flex flex-col">
        <button onclick="toggleMenu()" class="mb-8 p-2 hover:bg-gray-100 rounded-full transition-colors self-end">
            <span class="material-symbols-outlined text-3xl">close</span>
        </button>
        <ul class="space-y-6 flex-grow">
            <li><a href="#" class="block text-lg font-semibold hover:text-primary transition-colors">Fitur Zevedu</a></li>
            <li><a href="#" class="block text-lg font-semibold hover:text-primary transition-colors">Sosial Media</a></li>
            <li><a href="#" class="block text-lg font-semibold hover:text-primary transition-colors">Pusat Bantuan/FAQ</a></li>
            <li><a href="#" class="block text-lg font-semibold hover:text-primary transition-colors">Tentang Zevedu</a></li>
            <li><a href="#" class="block text-lg font-semibold hover:text-primary transition-colors">Kata Mereka</a></li>
        </ul>
        <div class="mt-10 pt-6 border-t border-gray-100">
            <img src="<?= base_url('assets/zevedulogo.jpg') ?>" alt="Zevedu Logo" class="h-12 w-auto opacity-80">
        </div>
    </div>

    <div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-[#e7ebf3] px-6 md:px-20 lg:px-40 py-4 bg-white">
            <div class="flex items-center gap-8 lg:gap-12">
                <img src="<?= base_url('assets/zevedulogo.jpg') ?>" alt="Logo Zevedu" class="h-12 w-auto object-contain">
                <nav class="hidden md:flex items-center gap-6 lg:gap-10 text-sm font-bold text-[#0d121b]">
                    <div class="relative group cursor-pointer">
                        <div class="flex items-center gap-1 hover:text-primary transition-colors">
                            <span>Temukan Kelas</span>
                            <span class="material-symbols-outlined text-[18px]">expand_more</span>
                        </div>
                        <div class="absolute left-0 top-full mt-2 w-56 bg-white border border-gray-100 rounded-xl shadow-xl hidden group-hover:block z-50 p-2">
                            <a href="#" class="block px-4 py-3 hover:bg-primary/5 rounded-lg text-sm font-medium">Web Development</a>
                            <a href="#" class="block px-4 py-3 hover:bg-primary/5 rounded-lg text-sm font-medium">UI/UX Design</a>
                            <a href="#" class="block px-4 py-3 hover:bg-primary/5 rounded-lg text-sm font-medium">Digital Marketing</a>
                        </div>
                    </div>
                    <a href="#" class="hover:text-primary transition-colors">Temukan Sertifikat</a>
                </nav>
            </div>
            <div class="flex items-center gap-2">
                <button class="hidden sm:flex min-w-[100px] cursor-pointer items-center justify-center rounded-xl h-10 px-4 bg-primary text-white text-sm font-bold transition-all hover:bg-primary/90">Daftar</button>
                <button class="hidden sm:flex min-w-[84px] cursor-pointer items-center justify-center rounded-xl h-10 px-4 bg-[#e7ebf3] text-[#0d121b] text-sm font-bold transition-all hover:bg-gray-200">masuk</button>
                <button onclick="toggleMenu()" class="ml-2 p-2 rounded-xl border border-slate-200 hover:border-primary hover:text-primary transition-all flex items-center justify-center">
                    <span class="material-symbols-outlined text-2xl">menu</span>
                </button>
            </div>
        </header>

        <main class="flex-1">
            <section class="flex justify-center py-10 lg:py-20 px-6 md:px-20 lg:px-40 bg-white">
                <div class="max-w-[1200px] w-full">
                    <div class="flex flex-col gap-12 lg:flex-row lg:items-center">
                        <div class="flex flex-col gap-8 flex-1">
                            <div class="flex flex-col gap-4 text-left">
                                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-bold uppercase tracking-wider w-fit">
                                    <span class="material-symbols-outlined !text-[14px]">auto_awesome</span> MARI BERSAMA ZEVEDU ACADEMY !!
                                </div>
                                <h1 class="text-[#0d121b] text-5xl font-black leading-tight tracking-[-0.033em] md:text-7xl">
                                    Belajar, <span class="text-primary">Berkembang</span>, Berkarier
                                </h1>
                                <p class="text-[#4c669a] text-lg font-normal leading-relaxed max-w-[540px]">
                                    Akses pendidikan berkualitas tinggi untuk mengakselerasi karier masa depanmu bersama para mentor ahli dari industri terkemuka.
                                </p>
                            </div>
                            <div class="flex flex-wrap gap-4">
                                <button class="flex min-w-[200px] cursor-pointer items-center justify-center rounded-xl h-14 px-8 bg-primary text-white text-base font-bold shadow-lg shadow-primary/30 hover:scale-105 transition-transform">Coba kelas gratis</button>
                                <button class="flex min-w-[200px] cursor-pointer items-center justify-center rounded-xl h-14 px-8 border-2 border-primary/20 bg-transparent text-primary text-base font-bold hover:bg-primary/5 transition-colors">Kontak Kami</button>
                            </div>
                            <div class="flex items-center gap-4 pt-2">
                                <div class="flex -space-x-3">
                                    <div class="w-10 h-10 rounded-full border-2 border-white bg-cover bg-center bg-[#cbd5e1]" style='background-image: url("<?= base_url('assets/foto1.png') ?>");'></div>
                                    <div class="w-10 h-10 rounded-full border-2 border-white bg-cover bg-center bg-[#cbd5e1]" style='background-image: url("<?= base_url('assets/foto2.png') ?>");'></div>
                                    <div class="w-10 h-10 rounded-full border-2 border-white bg-cover bg-center bg-[#cbd5e1]" style='background-image: url("<?= base_url('assets/foto3.png') ?>");'></div>
                                    <div class="w-10 h-10 rounded-full border-2 border-white bg-cover bg-center bg-[#cbd5e1]" style='background-image: url("<?= base_url('assets/foto4.png') ?>");'></div>
                                    <div class="w-10 h-10 rounded-full border-2 border-white bg-primary flex items-center justify-center text-white text-[10px] font-bold shadow-sm shadow-primary/30">+500k</div>
                                </div>
                                <div class="text-sm text-[#4c669a] font-medium">Telah dipercaya oleh 500+ alumni zevedu</div>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="w-full aspect-square bg-gradient-to-br from-primary/10 to-primary/5 rounded-3xl relative overflow-hidden flex items-center justify-center p-8">
                                <div class="w-full h-full bg-center bg-no-repeat bg-contain rounded-xl relative z-10" style='background-image: url("<?= base_url('assets/zeec.png') ?>");'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-24 px-6 md:px-20 lg:px-10 bg-gradient-to-b from-[#f8fafc] to-[#f1f5f9] border-t border-slate-100 font-inter">
                <div class="max-w-[1200px] mx-auto">
                    <div class="text-center mb-16 max-w-2xl mx-auto">
                        <h2 class="text-3xl md:text-4xl font-extrabold text-[#0d121b] mb-4 tracking-tight">
                            Mengapa Memilih <span class="text-primary">Zevedu Academy?</span>
                        </h2>
                        <p class="text-lg text-[#4c669a]">Ayo bersama kami belajar langsung dari ahlinya yang sudah berpengalaman di bidangnya</p>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="bg-white p-5 pt-14 rounded-[1.5rem] shadow-lg shadow-slate-200/50 border border-slate-50 transition-all duration-300 hover:-translate-y-2 text-center relative flex flex-col">
                            <div class="absolute -top-8 left-1/2 -translate-x-1/2 w-14 h-14 bg-accent-purple rounded-full flex items-center justify-center shadow-lg shadow-accent-purple/20">
                                <span class="material-symbols-outlined text-white text-2xl">devices</span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-800 mb-2 leading-tight">Belajar Kapan Saja</h3>
                            <p class="text-xs text-[#4c669a] leading-relaxed">Akses semua materi melalui perangkat apa pun, desktop maupun mobile.</p>
                        </div>
                        <div class="bg-white p-5 pt-14 rounded-[1.5rem] shadow-lg shadow-slate-200/50 border border-slate-50 transition-all duration-300 hover:-translate-y-2 text-center relative flex flex-col">
                            <div class="absolute -top-8 left-1/2 -translate-x-1/2 w-14 h-14 bg-accent-cyan rounded-full flex items-center justify-center shadow-lg shadow-accent-cyan/20">
                                <span class="material-symbols-outlined text-white text-2xl">timeline</span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-800 mb-2 leading-tight">Kurikulum Terstruktur</h3>
                            <p class="text-xs text-[#4c669a] leading-relaxed">Materi disusun secara logis dari dasar hingga tingkat lanjut untuk Anda.</p>
                        </div>
                        <div class="bg-white p-5 pt-14 rounded-[1.5rem] shadow-lg shadow-slate-200/50 border border-slate-50 transition-all duration-300 hover:-translate-y-2 text-center relative flex flex-col">
                            <div class="absolute -top-8 left-1/2 -translate-x-1/2 w-14 h-14 bg-emerald-500 rounded-full flex items-center justify-center shadow-lg shadow-emerald-500/20">
                                <span class="material-symbols-outlined text-white text-2xl">fact_check</span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-800 mb-2 leading-tight">Validasi Skill</h3>
                            <p class="text-xs text-[#4c669a] leading-relaxed">Uji pemahaman Anda dengan tes berkala yang mengukur perkembangan.</p>
                        </div>
                        <div class="bg-white p-5 pt-14 rounded-[1.5rem] shadow-lg shadow-slate-200/50 border border-slate-50 transition-all duration-300 hover:-translate-y-2 text-center relative flex flex-col">
                            <div class="absolute -top-8 left-1/2 -translate-x-1/2 w-14 h-14 bg-orange-500 rounded-full flex items-center justify-center shadow-lg shadow-orange-500/20">
                                <span class="material-symbols-outlined text-white text-2xl">update</span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-800 mb-2 leading-tight">Kurikulum Terkini</h3>
                            <p class="text-xs text-[#4c669a] leading-relaxed">Materi selalu diperbarui sesuai tren teknologi dan industri terbaru.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-20 px-6 md:px-20 lg:px-40 bg-white overflow-hidden">
                <div class="max-w-[1200px] mx-auto relative">
                    <div class="mb-6">
                        <h2 class="text-2xl md:text-3xl font-extrabold text-[#0d121b] tracking-tight">
                            Program Pilihan <span class="text-primary">Terpopuler</span>
                        </h2>
                    </div>
                    <div class="relative flex items-center justify-between mb-10">
                        <div id="category-scroll" class="flex items-center gap-8 overflow-x-auto no-scrollbar w-full scroll-smooth">
                            <a href="#" class="nav-category-b active">Kelas Unggulan</a>
                            <a href="#" class="nav-category-b">CPNS</a>
                            <a href="#" class="nav-category-b">Biologi</a>
                            <a href="#" class="nav-category-b">Kimia</a>
                            <a href="#" class="nav-category-b">SMA</a>
                            <a href="#" class="nav-category-b">SMP</a>
                        </div>
                    </div>
                    <div class="relative group/carousel px-2">
                        <button onclick="scrollCards('left')" class="absolute -left-4 top-1/2 -translate-y-1/2 z-20 w-12 h-12 rounded-full bg-white/90 backdrop-blur-sm text-slate-800 border border-slate-200 shadow-xl flex items-center justify-center opacity-0 group-hover/carousel:opacity-100 transition-all duration-300 hover:bg-primary hover:text-white">
                            <span class="material-symbols-outlined !text-[24px]">chevron_left</span>
                        </button>
                        <button onclick="scrollCards('right')" class="absolute -right-4 top-1/2 -translate-y-1/2 z-20 w-12 h-12 rounded-full bg-white/90 backdrop-blur-sm text-slate-800 border border-slate-200 shadow-xl flex items-center justify-center opacity-100 lg:opacity-70 group-hover/carousel:opacity-100 transition-all duration-300 hover:bg-primary hover:text-white">
                            <span class="material-symbols-outlined !text-[24px]">chevron_right</span>
                        </button>
                        <div id="card-carousel" class="flex gap-8 overflow-x-auto no-scrollbar pb-6 scroll-smooth snap-x snap-mandatory">
                            <div class="promo-card flex-1 snap-start">
                                <span class="discount-badge">-10%</span>
                                <img src="https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?q=80&w=800&auto=format&fit=crop" alt="Creative Writing" class="promo-img"/>
                                <div class="promo-content">
                                    <h3>Creative Writing</h3>
                                    <p>Transformasi passion menulis kamu jadi karier nyata bersama mentor profesional.</p>
                                    <div class="price">
                                        <span class="price-old">Rp 1.000</span>
                                        <span class="price-new">Rp 900</span>
                                    </div>
                                    <a href="#" class="btn-buy">
                                        <span class="material-symbols-outlined !text-[18px]">shopping_cart</span>
                                        Daftar Sekarang
                                    </a>
                                </div>
                            </div>
                            <div class="promo-card flex-1 snap-start">
                                <span class="discount-badge">-20%</span>
                                <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?q=80&w=800&auto=format&fit=crop" alt="Tech & IT" class="promo-img"/>
                                <div class="promo-content">
                                    <h3>Tech & IT</h3>
                                    <p>Bangun skill software, data, dan cloud secara fleksibel dan sepenuhnya online.</p>
                                    <div class="price">
                                        <span class="price-old">Rp 2.000</span>
                                        <span class="price-new">Rp 1.600</span>
                                    </div>
                                    <a href="#" class="btn-buy">
                                        <span class="material-symbols-outlined !text-[18px]">shopping_cart</span>
                                        Daftar Sekarang
                                    </a>
                                </div>
                            </div>
                            <div class="promo-card flex-1 snap-start">
                                <span class="discount-badge">-15%</span>
                                <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?q=80&w=800&auto=format&fit=crop" alt="Healthcare" class="promo-img"/>
                                <div class="promo-content">
                                    <h3>Healthcare</h3>
                                    <p>Latihan simulasi medis berbasis bukti dengan pembimbing praktisi kesehatan.</p>
                                    <div class="price">
                                        <span class="price-old">Rp 3.000</span>
                                        <span class="price-new">Rp 2.550</span>
                                    </div>
                                    <a href="#" class="btn-buy">
                                        <span class="material-symbols-outlined !text-[18px]">shopping_cart</span>
                                        Daftar Sekarang
                                    </a>
                                </div>
                            </div>
                            <div class="promo-card flex-1 snap-start">
                                <span class="discount-badge">-25%</span>
                                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=800&auto=format&fit=crop" alt="Digital Marketing" class="promo-img"/>
                                <div class="promo-content">
                                    <h3>Digital Marketing Masterclass</h3>
                                    <p>Kuasai strategi SEO, Ads, dan optimasi konversi media sosial langsung praktek.</p>
                                    <div class="price">
                                        <span class="price-old">Rp 4.000</span>
                                        <span class="price-new">Rp 3.000</span>
                                    </div>
                                    <a href="#" class="btn-buy">
                                        <span class="material-symbols-outlined !text-[18px]">shopping_cart</span>
                                        Daftar Sekarang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <script src="<?= base_url('js/main.js') ?>"></script>
</body>
</html>
