<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Sekolah</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

       .animated-bg {
    background: url('burung46.gif') no-repeat center center/cover;
}
        

        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Floating circle */
        .circle {
            position: absolute;
            border-radius: 9999px;
            opacity: 0.2;
            animation: float 8s ease-in-out infinite;
        }

        .circle1 {
            width: 200px;
            height: 200px;
            background: #60a5fa;
            top: 10%;
            left: 10%;
        }

        .circle2 {
            width: 300px;
            height: 300px;
            background: #3b82f6;
            bottom: 10%;
            right: 10%;
            animation-delay: 2s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-40px); }
        }
    </style>
</head>

<body class="animated-bg min-h-screen text-white relative overflow-hidden">

    <!-- Floating Elements -->
    <div class="circle circle1"></div>
    <div class="circle circle2"></div>

    <!-- Navbar -->
    <header class="relative z-10 py-6">
        <div class="flex items-center justify-center gap-4">
            <img src="logo.jpeg" class="w-16 h-16">
            <h1 class="text-2xl font-bold tracking-wide">
                SMK PGRI PEKANBARU
            </h1>
        </div>
    </header>

    <!-- Hero -->
    <main class="relative z-10 flex items-center justify-center text-center px-6 min-h-[80vh]">
        <div class="max-w-3xl">

            <h2 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                Website Pengaduan Sekolah Modern
            </h2>

            <div class="bg-white/10 backdrop-blur-md p-4 rounded-xl border border-white/20 shadow-lg mb-8">
    <p class="text-lg md:text-xl text-slate-200">
        Platform digital untuk menyampaikan aspirasi, laporan, dan pengaduan dengan mudah, cepat, dan transparan.
    </p>
</div>
            <div class="flex flex-col sm:flex-row justify-center gap-4">

                <a href="{{ route('login') }}"
                   class="px-8 py-3 rounded-xl bg-blue-500 hover:bg-blue-600 transition shadow-lg">
                    Login
                </a>

                <div class="bg-white/10 backdrop-blur-md p-4 rounded-2xl border border-white/20 shadow-lg inline-block">
    <a href="{{ route('register') }}"
       class="px-8 py-3 rounded-xl border border-black hover:bg-blue hover:text-black transition">
        Daftar
    </a>
</div>

            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer class="text-center pb-6 text-sm text-slate-300 relative z-10">
        © 2026 SMK PGRI Pekanbaru
    </footer>

</body>
</html>