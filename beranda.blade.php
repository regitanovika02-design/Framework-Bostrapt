<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUKETA - Graduation Edition | Jombang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { scroll-behavior: smooth; font-family: 'Poppins', sans-serif; background-color: #f8f9fa; }
        
        /* THEME VIOLET MODERN & ELEGAN */
        .hero-bg { background: linear-gradient(135deg, #4b0082, #8a2be2); color: white; padding: 140px 0; text-align: center; }
        section { padding: 100px 0; }

        /* ANIMASI NAVBAR - MENYALA EMAS & NAIK KE ATAS */
        .navbar-nav .nav-link {
            transition: all 0.3s ease;
            position: relative;
            padding: 10px 20px;
        }
        .navbar-nav .nav-link:hover, .navbar-nav .nav-link.active {
            color: #ffd700 !important; /* Warna Emas */
            transform: translateY(-8px); /* Efek Melayang Keatas */
            font-weight: 600;
        }
        /* Efek bekas garis bawah di menu aktif */
        .navbar-nav .nav-link.active::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 20%;
            width: 60%;
            height: 3px;
            background: #ffd700;
        }

        /* CARD PRODUK DENGAN EFEK ZOOM */
        .card { 
            transition: transform 0.4s ease, box-shadow 0.4s ease; 
            border-radius: 15px; 
            overflow: hidden; 
        }
        .card:hover { transform: scale(1.05); box-shadow: 0 10px 20px rgba(0,0,0,0.2) !important; z-index: 2; }
        .card img { height: 350px; object-fit: cover; }
        
        .btn-custom { background: #ffd700; color: #4b0082; font-weight: bold; border-radius: 30px; border: 2px solid #ffd700; transition: all 0.3s; }
        .btn-custom:hover { background: transparent; color: #ffd700; }
        
        .text-violet { color: #4b0082; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-uppercase fs-3" href="#">BUKETA 🌷</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#beranda">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#produk">Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="#layanan">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#promo">Promo</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <<header id="beranda" class="hero-bg">
        <div class="container">
            <h1 class="display-1 fw-bold mb-3">BUKETA GRADUATION</h1>
            <p class="lead mb-5 fs-4">
                Buket Bunga Wisuda Terbaik di Jombang 🌸<br>
                Tampil segar, elegan, dan bikin momen makin berkesan.<br>
                Pesan sekarang, dan buat hari spesialmu jadi lebih istimewa 💐
            </p>
            <a href="#produk" class="btn btn-custom btn-lg px-5 py-3 shadow-lg">Lihat Koleksi BUKETA</a>
        </div>
    </header>

    <section id="produk">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold text-uppercase display-5 text-violet">Koleksi BUKETA</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card shadow border-0 h-100">
                        <img src="https://lebliss.co.id/cdn/shop/files/DSCF0696_116235e1-0f4d-4b4b-9f36-09b5e972cbb1.jpg?v=1708362014" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="fw-bold">BUKETA Classic White</h5>
                            <p class="text-muted">Perpaduan mawar putih bersih untuk seremoni kelulusan yang sakral.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow border-0 h-100">
                        <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full/catalog-image/95/MTA-171482162/floweradvisor_bunga_mawar_pink_-_karangan_buket_bunga_mawar_pink_hadiah_wisuda_anniversary_pernikahan_-_floweradvisor_full11_i46jzxs1.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="fw-bold">BUKETA Soft Pink Mawar</h5>
                            <p class="text-muted">Ceria dan lembut, cocok untuk merayakan kebahagiaan wisuda sahabat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow border-0 h-100">
                        <img src="https://cdn.shopify.com/s/files/1/0634/1007/7862/files/graduation_bouquet_buket_bunga_wisuda_tema_merah_dengan_teddy_by_le_bliss_bouquet._florist_jakarta_florist_tangerang_surabaya_gresik_sidoarjo.jpg?v=1754636159" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="fw-bold">BUKETA Teddy Red Glory</h5>
                            <p class="text-muted">Buket merah menyala dengan boneka wisuda lucu. Favorit mahasiswa!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="layanan" class="bg-white">
        <div class="container">
            <h2 class="text-center fw-bold mb-5 display-5 text-violet">Keunggulan BUKETA</h2>
            <div class="row text-center g-4">
                <div class="col-md-4">
                    <div class="p-5 rounded-4 shadow-sm bg-light h-100">
                        <h3 class="display-3 mb-3">🚀</h3>
                        <h4 class="fw-bold text-violet">Express Jombang</h4>
                        <p>Pengiriman super cepat khusus wilayah Jombang kota. Pesan hari ini, sampai hari ini.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-5 rounded-4 shadow-sm bg-light h-100">
                        <h3 class="display-3 mb-3">🎓</h3>
                        <h4 class="fw-bold text-violet">Kartu Ucapan Gratis</h4>
                        <p>Dapatkan kartu ucapan wisuda eksklusif dengan desain custom sesukamu.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-5 rounded-4 shadow-sm bg-light h-100">
                        <h3 class="display-3 mb-3">💎</h3>
                        <h4 class="fw-bold text-violet">Premium Quality</h4>
                        <p>Hanya menggunakan bunga kualitas ekspor yang dijamin segar dan tahan lama.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="promo">
        <div class="container text-center">
            <div class="p-5 bg-dark text-white rounded-5 shadow-lg border-start border-warning border-5">
                <h2 class="fw-bold display-4 mb-3">DISKON KHUSUS MAHASISWA!</h2>
                <p class="fs-4 text-warning mb-3">Gunakan kode promo: <span class="badge bg-light text-dark fs-5 px-3 py-2">WISUDACANTIK</span></p>
                <p class="lead">Potongan harga 20% tanpa minimum pembelian khusus untuk momen kelulusan minggu ini.</p>
            </div>
        </div>
    </section>

    <section id="kontak" class="bg-dark text-white py-5">
        <div class="container text-center">
            <h2 class="fw-bold mb-5 display-6 text-warning">Hubungi BUKETA Sudirman</h2>
            <div class="row mb-5 g-3 fs-5">
                <div class="col-md-6 text-md-end">📍 Jalan Sudirman No. 99, Jombang</div>
                <div class="col-md-6 text-md-start">📧 buketasudirman99@gmail.com</div>
                <div class="col-md-6 text-md-end">📸 IG: BUKETA</div>
                <div class="col-md-6 text-md-start">👤 FB: BUKETA</div>
                <div class="col-md-12">🎵 TikTok: BUKETA SUDIRMAN99</div>
            </div>
            <hr class="bg-secondary mb-4">
            <p class="small text-secondary">© 2026 Regita prak10 - BUKETA Graduation Edition | Crafted in Jombang</p>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const navLinks = document.querySelectorAll('.nav-link');
        const sections = document.querySelectorAll('section, header');

        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= (sectionTop - 150)) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>