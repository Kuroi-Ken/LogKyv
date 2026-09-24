<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite('resources/css/app.css')

    <title>Laravel</title>

    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link
        href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
        rel="stylesheet"
    >
</head>

<body class="min-h-screen overflow-hidden">

    <header class="flex h-15 lg:h-25 items-center justify-between px-8">

        <a href="" class="flex items-center gap-3">
            <img
                class="h-12 w-20 object-cover"
                src="{{ asset('assets/no-image.jpg') }}"
                alt="Logo LogKyv"
            >

            <span class="text-xl font-semibold">
                LogKyv
            </span>
        </a>

        <!-- Sound -->
        <a href="" class="pr-2">
            <i data-feather="volume-2"></i>
        </a>

    </header>

    <div class="mx-auto flex h-[calc(100vh-5rem)] lg:gap-30 w-full max-w-6xl items-center px-8">

        <main class="flex w-3/5 flex-col items-center text-center">

            <h1 class="text-3xl font-medium leading-tight">
                Selamat Datang di Website
                <br>
                Belajar Akuntansi LogKyv
            </h1>

            <p class="mt-5 max-w-xl text-sm leading-relaxed text-gray-600">
                Jelajahi materi Praktikum Akuntansi Lembaga/Instansi
                Pemerintah melalui pembelajaran interaktif yang mudah
                dipahami, menarik, dan menyenangkan.
            </p>

            <a
                href=""
                class="mt-8 rounded-lg bg-red-200 px-6 py-3 font-medium transition hover:bg-red-300"
            >
                Mulai Menjelajah
            </a>

        </main>

        <aside class="flex w-2/5 justify-center">

            <div>
                <img
                    class="h-auto w-64 object-contain"
                    src="{{ asset('assets/no-image.jpg') }}"
                    alt="Ilustrasi Akuntansi"
                >
            </div>

        </aside>

    </div>


    <script>
        feather.replace();
    </script>

</body>

</html>
```
