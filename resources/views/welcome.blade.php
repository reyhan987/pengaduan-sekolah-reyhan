<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Laravel</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        /* Background utama bisa kamu ganti */
        .hero-bg {
            background-image: url('PGRI.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* Overlay biar teks tetap jelas */
        .overlay {
            background: linear-gradient(to right, rgba(15, 23, 42, 0.85), rgba(30, 41, 59, 0.65));
        }
    </style>
</head>
<body class="bg-gray-100">

    <section class="hero-bg min-h-screen relative">
        <div class="overlay absolute inset-0"></div>

        <!-- Navbar -->
        <header class="relative z-10">
            <div class="flex items-center gap-3 justify-center">
    <img src="logo.jpeg" alt="" class="w-20 h-20 object-contain">
    <h1 class="text-white text-2xl font-bold tracking-wide">
        SMK PGRI PEKANBARU
    </h1>
</div>
        </header>

        <!-- Hero Content -->
        <main class="relative z-10 flex items-center justify-center min-h-[85vh] px-6">
            <div class="max-w-4xl text-center text-white">
                
                <h2 class="text-4xl md:text-6xl font-bold leading-tight mb-6">
                     Selamat Datang di Website Pengaduan Sekolah
                </h2>

                <p class="text-lg md:text-xl text-slate-200 max-w-2xl mx-auto mb-8 leading-relaxed">
                    Website Sekolah Yang Mudah Di gunakan, sederhana, elegan, dan ramah bagi boomer.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('login') }}"
                       class="w-full sm:w-auto px-8 py-3 rounded-2xl bg-blue-500 text-white font-semibold text-lg hover:bg-blue-600 transition duration-300 shadow-xl shadow-blue-500/30">
                        Login Sekarang
                    </a>

                    <a href="{{ route('register') }}"
                       class="w-full sm:w-auto px-8 py-3 rounded-2xl border border-white text-white font-semibold text-lg hover:bg-white hover:text-slate-900 transition duration-300">
                        Daftar Akun
                    </a>
                </div>

               
                </div>
            </div>
        </main>
    </section>

</body>
</html>