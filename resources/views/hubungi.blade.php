<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inaklug</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <style>
        body {
            font-family: 'Ubuntu';
        }
        /* atur semua font agar jangan terlalu tebal */
        * {
            font-family: 'Ubuntu';
            /* atur ketebalannya */
            font-weight: 10;
        }
        .f-small{
            font-size: 0.8em;
        }
        .bg-gradient-custom {
            background: linear-gradient(to right, rgba(70, 7, 78, 0.9), rgba(60, 142, 214, 0.9));
        }
        .border-button-custom{
            /* gradient border dengan background white */
            background: linear-gradient(to right, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), linear-gradient(to right, rgba(70, 7, 78, 0.9), rgba(60, 142, 214, 0.9));

        }
        .hover:hover{
            background: linear-gradient(to right, rgba(70, 7, 78, 0.9), rgba(60, 142, 214, 0.9));
            color: white;
        }
        .hover{
            color:rgba(60, 142, 214, 1);
        }
        .bg-gradient-custom-footer {
            background: linear-gradient(to right, rgba(70, 7, 78, 0.9), rgba(60, 142, 214, 0.9));
        }
        .navbar-active{
            /* garis bawah putih */
            border-bottom: 1px solid white;
        }

        input::placeholder {
            opacity: 0.4;
            color: white !important;
        }

        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
        }

        .image-overlay {
            position: relative;
        }

        .image-overlay::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            width: 50%;
            background: linear-gradient(to right, rgba(70, 7, 78, 0.9), transparent);
            
            opacity: 0.8;
            border-radius: 10px 0 0 10px;
        }
        .nav-item{
            /* kecilkan fontnya */
            font-size: 0.8em;
        }

        .card-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        .overlay-content {
            position: absolute;
            bottom: 10px;
            left: 10px;
            color: white;
            z-index: 1;
            text-align: left;
        }

        .line {
            width: 1px;
            height: 40px;
            background-color: white;
            margin-bottom: 5px;
        }

        .card-title {
            font-size: 1em;
            margin: 0;
            text-align: left;
        }

        .logo-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 20px;
            gap: 20px;
        }

        .logo-box {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            width: 200px;
            height: 150px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .logo-box img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }
        
        .article-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .article-card {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .article-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .article-title {
            font-size: 16px;
            padding: 15px;
        }

        .btn-custom {
            margin-top: 20px;
            border: 1px solid #197BD0;
            color: #197BD0;
            border-radius: 20px;
            padding: 10px 20px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .btn-custom:hover {
            background-color: #197BD0;
            color: #fff;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <header class="navbar navbar-expand-lg navbar-dark bg-gradient-custom shadow-lg fixed-top">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand text-white d-flex align-items-center" href="#">
                <img src="{{ asset('images/inaklug.png') }}" alt="Inaklug Logo" class="d-inline-block align-text-top" height="50">
                <span class="ms-2 me-5 fs-4">Inaklug</span>
            </a>            

            <!-- Untuk mobile -->
            <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" 
                aria-controls="navbarNav" 
                aria-expanded="false" 
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Route -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link text-white @if (Route::currentRouteName() == 'home') navbar-active @endif" href="{{route('home')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white @if (Route::currentRouteName() == 'tentangKami') navbar-active @endif" href="{{route('tentangKami')}}">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link text-white @if (Route::currentRouteName() == 'layananKami') navbar-active @endif" href="{{route('layananKami')}}">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link text-white @if (Route::currentRouteName() == 'artikel') navbar-active @endif" href="{{route('artikel')}}">Artikel</a></li>
                    <li class="nav-item"><a class="nav-link text-white @if (Route::currentRouteName() == 'hubungi') navbar-active @endif" href="{{route('hubungi')}}">Hubungi Kami</a></li>
                </ul>
                <div class="d-flex align-items-center me-3" style="border-bottom: 1px solid white;">
                    <i class="fas fa-search text-white me-2 mb-2" style="position: relative; top: 5px"></i>
                    <input type="text" class="form-control" placeholder="Ketik pencarian" style="border: none; background: transparent; color: white; font-size: 0.8em;">
                </div>
                <!-- Button Daftar -->
                <a href="#" class="btn rounded-5 px-3 py-2 ms-auto text-white" style="background: rgba(45, 80, 134, 0.9); border: 1px solid white; font-size: 0.8em;">DAFTAR ON-LINE</a>
            </div>
        </div>
    </header>

    <main> 
        <div class="w-100 position-relative" style="height: 450px;">
            <div style="position: absolute; width: 100%; height: 100%; background: linear-gradient(to right, rgba(70, 7, 78, 0.9), transparent);"></div>
            <img src="{{ asset('images/becak.png') }}" alt="" class="w-100 h-100" style="object-fit: cover;">
            <h1 class="position-absolute text-white" style="left: 9%; top: 75%; font-size: 2rem;">HUBUNGI KAMI</h1>
        </div>


        {{-- body 3 --}}
        <div class="container py-5 text-muted" style="max-width: 70%;">
            <h1 class="mt-3 mb-5 fs-4 text-start">KIRIM PESAN</h1>    
            <div class="row text-center">
                <form action="/" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6 mb-3 text-start">
                            <label for="name" class="form-label">Nama*</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nama*" required>
                        </div>
                        <div class="col-6 mb-3 text-start">
                            <label for="email" class="form-label">Email*</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email*" required>
                        </div>
                        <div class="col-6 mb-3 text-start">
                            <label for="organization" class="form-label">Perusahaan/Organisasi</label>
                            <input type="text" class="form-control" name="organization" id="organization" placeholder="Perusahaan/Organisasi">
                        </div>
                        <div class="col-6 mb-3 text-start">
                            <label for="phone" class="form-label">Telepon</label>
                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Telepon">
                        </div>
                        <div class="col-12 mb-3 text-start">
                            <label for="message" class="form-label">Isi Pesan*</label>
                            <textarea class="form-control" name="message" id="message" rows="4" placeholder="Isi Pesan*" required></textarea>
                        </div>
                        <div class="col-12">
                            <span class="btn bg-gradient-custom rounded-5" style="padding:0.5px"><button type="submit" class="hover bg-white btn px-5 py-2 rounded-5 "> KIRIM PESAN</button></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <hr>

        {{-- body 7 --}}
        <div class="container py-5 text-muted" style="max-width: 70%;">
            <h1 class="mt-3 mb-5 fs-4 text-start">LOKASI KAMI</h1>    
            <h2 class="h5">Kantor Pusat</h2>
            <p class="pb-0 mb-0">Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
            <p class="pt-0 mb-0">Phone: (6285) 286754052 - Fax : (6285) 286754052</p>
            <p class="pt-0">Hotline: +6285286754052 / +6285286754052</p>

            <h2 class="h5">Kantor Cabang</h2>
            <p class="pb-0 mb-0">Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
            <p class="pt-0 mb-0">Phone: (6285) 286754052 - Fax : (6285) 286754052</p>
            <p class="pt-0">Hotline: +6285286754052 / +6285286754052</p>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-custom-footer text-center text-white py-3">
        <p class="mb-0">Copyright @ 2020 - Inaklug Indonesia | Hak cipta dilindungi undang-undang</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>