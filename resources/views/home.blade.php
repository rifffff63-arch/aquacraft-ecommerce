
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AquaCraft - E-Commerce Akuarium</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f9fc;
            color: #183044;
        }

        header {
            background: #073b4c;
            color: white;
            padding: 20px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        header h2 {
            color: #64dfdf;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        .hero {
            padding: 85px 7%;
            background: linear-gradient(120deg, #073b4c, #118ab2);
            color: white;
        }

        .hero h1 {
            font-size: clamp(32px, 5vw, 52px);
            max-width: 650px;
            margin-bottom: 20px;
        }

        .hero p {
            max-width: 600px;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        .hero a {
            display: inline-block;
            background: #64dfdf;
            color: #073b4c;
            padding: 13px 22px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
        }

        section {
            padding: 55px 7%;
        }

        .section-title {
            margin-bottom: 25px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 22px;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 15px #073b4c12;
            overflow: hidden;
        }

        .card img {
            width: 100%;
            height: 170px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .card h3 {
            margin-bottom: 10px;
        }

        .card p {
            color: #617587;
            line-height: 1.6;
            margin-bottom: 12px;
        }

        .price {
            color: #087f8c;
            font-weight: bold;
        }

        .empty {
            color: #617587;
            padding: 15px 0;
        }

        footer {
            background: #073b4c;
            color: white;
            text-align: center;
            padding: 25px;
        }

        @media (max-width: 600px) {
            header {
                padding: 18px 5%;
            }

            nav a {
                margin: 0 12px 0 0;
            }

            section {
                padding: 40px 5%;
            }

            .hero {
                padding: 60px 5%;
            }
        }
    </style>
</head>
<body>

<header>
    <h2>AquaCraft</h2>
    <nav>
        <a href="#beranda">Beranda</a>
        <a href="#kategori">Kategori</a>
        <a href="#produk">Produk</a>
        <a href="#layanan">Layanan</a>
    </nav>
</header>

<div class="hero" id="beranda">
    <h1>Wujudkan Akuarium Impianmu</h1>
    <p>
        Temukan perlengkapan akuarium, ikan hias, dekorasi,
        serta layanan desain akuarium sesuai kebutuhanmu.
    </p>
    <a href="#produk">Jelajahi Produk</a>
</div>

<section id="kategori">
    <h2 class="section-title">Kategori Produk</h2>

    <div class="grid">
        @forelse ($categories as $category)
            <div class="card">
                <h3>{{ $category->name }}</h3>
                <p>{{ $category->description ?: 'Temukan berbagai kebutuhan akuarium.' }}</p>
            </div>
        @empty
            <p class="empty">Belum ada kategori.</p>
        @endforelse
    </div>
</section>

<section id="produk">
    <h2 class="section-title">Produk Pilihan</h2>

    <div class="grid">
        @forelse ($products as $product)
            <div class="card">
                @if ($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}"
                         alt="{{ $product->name }}">
                @endif

                <h3>{{ $product->name }}</h3>
                <p>{{ $product->description ?: 'Produk berkualitas untuk akuariummu.' }}</p>
                <div class="price">
                    Rp {{ number_format((float) $product->price, 0, ',', '.') }}
                </div>
            </div>
        @empty
            <p class="empty">Belum ada produk aktif.</p>
        @endforelse
    </div>
</section>

<section id="layanan">
    <h2 class="section-title">Layanan Kami</h2>

    <div class="grid">
        @forelse ($services as $service)
            <div class="card">
                @if ($service->image)
                    <img src="{{ asset('storage/' . $service->image) }}"
                         alt="{{ $service->name }}">
                @endif

                <h3>{{ $service->name }}</h3>
                <p>{{ $service->description }}</p>
                <div class="price">
                    Rp {{ number_format((float) $service->price, 0, ',', '.') }}
                </div>
            </div>
        @empty
            <p class="empty">Belum ada layanan aktif.</p>
        @endforelse
    </div>
</section>

<footer>
    <p>&copy; {{ date('Y') }} AquaCraft. Semua hak dilindungi.</p>
</footer>

</body>
</html>
