<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Desa Cikasungka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .produk-card img {
            height: 150px;
            object-fit: cover;
        }
        .hero {
            background: url('/images/header.jpg') no-repeat center center;
            background-size: cover;
            height: 800px;
        }
    </style>
</head>
<body>
    <div class="hero text-white text-center d-flex align-items-center justify-content-center">
        <div>
            <h1>Desa Cikasungka</h1>
            <p>Kec. Solear Kab. Tangerang, Prov Banten</p>
        </div>
    </div>
    <!-- Banner Tengah -->
    <div class="container mt-5">
        <div class="card border-0 shadow-sm">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="{{ asset('storage/images/tape-banner.jpg') }}" class="img-fluid rounded-start" alt="Tape Legend">
                </div>
                <div class="col-md-6 d-flex flex-column justify-content-center align-items-start p-4">
                    <h2 class="fw-bold text-uppercase" style="line-height: 1.2;">TAPE LEGEND<br>KHAS DESA<br>CIKASUNGKA</h2>
                    <a href="{{ route('product.show') }}" class="btn btn-outline-primary mt-3">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="text-center mb-4">
            <h3>JAGOAN UMKM (coba aja)</h3>
            <p>Layanan yang berisi UMKM berkualitas khas desa Cikasungka</p>
        </div>

        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card produk-card">
                    <img src="{{ asset('storage/' . $product->gambar) }}" class="card-img-top" alt="{{ $product->nama_produk }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->nama_produk }}</h5>
                        <p class="card-text">{{ $product->deskripsi }}</p>
                        <p class="fw-bold">Rp{{ number_format($product->harga, 0, ',', '.') }}</p>
                        <p class="text-muted">Stok: {{ $product->stok }} | Penjual: {{ $product->penjual }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <footer class="bg-light text-center p-3 mt-4">
        <p>©2025 Powered by Yayasan Pendidikan Telkom</p>
    </footer>
</body>
</html>
