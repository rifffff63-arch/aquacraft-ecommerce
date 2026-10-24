<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard Admin | AquaCraft</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-50 font-sans text-slate-800 antialiased">

<div class="min-h-screen lg:flex">

    <!-- SIDEBAR -->
    <aside class="flex w-full flex-col border-b border-slate-200 bg-white lg:fixed lg:inset-y-0 lg:left-0 lg:w-64 lg:border-b-0 lg:border-r z-20">

        <!-- Logo -->
        <div class="flex items-center gap-3 border-b border-slate-100 px-6 py-6">
            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-teal-700 text-xl text-white shadow-sm shadow-teal-200">
                🐠
            </div>
            <div class="min-w-0">
                <h1 class="truncate text-xl font-bold tracking-tight text-slate-900">
                    AquaCraft
                </h1>
                <p class="truncate mt-0.5 text-xs font-medium text-slate-500">
                    Admin Workspace
                </p>
            </div>
        </div>

        <!-- Navigasi -->
        <div class="flex-1 overflow-y-auto px-4 pt-6 pb-4">
            <p class="px-3 text-xs font-bold uppercase tracking-wider text-slate-400">
                Menu Utama
            </p>

            <nav class="mt-3 space-y-1.5">
                <a href="{{ route('admin.dashboard') }}"
                   class="flex items-center gap-3 rounded-xl bg-teal-50 px-3.5 py-3 font-semibold text-teal-800 transition hover:bg-teal-100">
                    <svg class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <rect x="3.5" y="3.5" width="7" height="7" rx="1.5"/>
                        <rect x="13.5" y="3.5" width="7" height="7" rx="1.5"/>
                        <rect x="3.5" y="13.5" width="7" height="7" rx="1.5"/>
                        <rect x="13.5" y="13.5" width="7" height="7" rx="1.5"/>
                    </svg>
                    Dashboard
                </a>

                <a href="{{ route('home') }}"
                   class="flex items-center gap-3 rounded-xl px-3.5 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-50 hover:text-teal-800">
                    <svg class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 10.5 12 3l9 7.5"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.5 9v11h13V9M9 20v-6h6v6"/>
                    </svg>
                    Lihat Website
                    <svg class="ml-auto h-4 w-4 shrink-0 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 17 17 7M8 7h9v9"/>
                    </svg>
                </a>

                <a href="{{ route('profile.edit') }}"
                   class="flex items-center gap-3 rounded-xl px-3.5 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-50 hover:text-teal-800">
                    <svg class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <circle cx="12" cy="8" r="3.5"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 20c.5-3.5 3-5.5 7-5.5s6.5 2 7 5.5"/>
                    </svg>
                    Profil Saya
                </a>
            </nav>

            <p class="mt-8 px-3 text-xs font-bold uppercase tracking-wider text-slate-400">
                Pengelolaan
            </p>

            <div class="mt-3 space-y-1.5">
                <div class="flex items-center gap-3 rounded-xl px-3.5 py-3 text-sm text-slate-400 cursor-not-allowed">
                    <svg class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h18l-2 13H5L3 7Z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 7a4 4 0 0 1 8 0"/>
                    </svg>
                    Produk
                    <span class="ml-auto rounded-md bg-slate-100 px-2 py-1 text-[10px] font-medium">Segera</span>
                </div>

                <div class="flex items-center gap-3 rounded-xl px-3.5 py-3 text-sm text-slate-400 cursor-not-allowed">
                    <svg class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 5h16v14H4zM4 10h16M9 5v5M15 10v9"/>
                    </svg>
                    Kategori
                    <span class="ml-auto rounded-md bg-slate-100 px-2 py-1 text-[10px] font-medium">Segera</span>
                </div>

                <div class="flex items-center gap-3 rounded-xl px-3.5 py-3 text-sm text-slate-400 cursor-not-allowed">
                    <svg class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 4h18v16H3zM3 9h18M8 4v5M16 9v11"/>
                    </svg>
                    Pesanan
                    <span class="ml-auto rounded-md bg-slate-100 px-2 py-1 text-[10px] font-medium">Segera</span>
                </div>

                <div class="flex items-center gap-3 rounded-xl px-3.5 py-3 text-sm text-slate-400 cursor-not-allowed">
                    <svg class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18M3 12h18M5.6 5.6l12.8 12.8M18.4 5.6 5.6 18.4"/>
                    </svg>
                    Jasa Desain
                    <span class="ml-auto rounded-md bg-slate-100 px-2 py-1 text-[10px] font-medium">Segera</span>
                </div>
            </div>
        </div>

        <!-- Akun dan Logout -->
        <div class="border-t border-slate-100 p-4">
            <a href="{{ route('profile.edit') }}"
               class="mb-3 flex items-center gap-3 rounded-xl p-2 transition hover:bg-slate-50">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-teal-100 font-bold text-teal-800">
                    {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                </div>

                <div class="min-w-0 flex-1">
                    <p class="truncate text-sm font-semibold text-slate-800">
                        {{ auth()->user()->name ?? 'Administrator' }}
                    </p>
                    <p class="truncate text-xs text-slate-500">
                        Administrator
                    </p>
                </div>
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                        class="flex w-full items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-slate-600 transition hover:bg-red-50 hover:text-red-600">
                    <svg class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 17l5-5-5-5M15 12H3"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3h6a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-6"/>
                    </svg>
                    Keluar dari akun
                </button>
            </form>
        </div>
    </aside>

    <!-- KONTEN UTAMA -->
    <main class="min-w-0 flex-1 lg:ml-64">

        <!-- Header -->
        <header class="sticky top-0 z-10 flex flex-wrap items-center justify-between gap-4 border-b border-slate-200 bg-white/95 px-5 py-4 backdrop-blur sm:px-8">
            <div>
                <p class="text-xs font-bold text-teal-600 uppercase tracking-wider">
                    Workspace / Overview
                </p>
                <h2 class="mt-1 text-xl font-bold text-slate-900 sm:text-2xl">
                    Dashboard
                </h2>
            </div>

            <div class="flex items-center gap-3">
                <div class="hidden text-right sm:block">
                    <p class="text-sm font-semibold text-slate-800">
                        {{ auth()->user()->name ?? 'Administrator' }}
                    </p>
                    <p class="mt-0.5 text-xs text-slate-500">
                        Administrator
                    </p>
                </div>

                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-teal-100 bg-teal-50 font-bold text-teal-800">
                    {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                </div>
            </div>
        </header>

        <div class="mx-auto max-w-7xl space-y-8 p-5 sm:p-8">

            <!-- Sambutan -->
            <section class="relative overflow-hidden rounded-2xl border border-slate-200 bg-white">
                <div class="absolute right-0 top-0 h-full w-1/3 bg-gradient-to-l from-teal-50 to-transparent opacity-60"></div>
                
                <div class="relative grid items-center md:grid-cols-[1fr_auto]">
                    <div class="p-6 sm:p-9">
                        <span class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-teal-700">
                            <span class="h-2 w-2 rounded-full bg-teal-500 animate-pulse"></span>
                            Admin workspace
                        </span>

                        <h3 class="mt-4 text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                            Selamat datang, {{ auth()->user()->name ?? 'Administrator' }} 👋
                        </h3>

                        <p class="mt-3 max-w-xl text-sm leading-7 text-slate-500 sm:text-base">
                            Kelola dan kembangkan bisnis AquaCraft. Semua kebutuhan pengelolaan toko akuarium akan terintegrasi di sini.
                        </p>

                        <a href="{{ route('home') }}"
                           class="mt-6 inline-flex items-center gap-2 rounded-xl bg-teal-700 px-5 py-3 text-sm font-semibold text-white transition hover:bg-teal-800 hover:shadow-md">
                            Buka Website
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </a>
                    </div>

                    <div class="hidden items-center justify-center px-10 py-8 md:flex">
                        <div class="flex h-32 w-32 items-center justify-center rounded-full bg-teal-50 border-4 border-white shadow-sm">
                            <div class="flex h-20 w-20 items-center justify-center rounded-full bg-teal-100 text-4xl">
                                🐠
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Bagian fitur -->
            <section>
                <div class="mb-5 flex flex-wrap items-end justify-between gap-3">
                    <div>
                        <h3 class="text-lg font-bold text-slate-900">
                            Pengelolaan Toko
                        </h3>
                        <p class="mt-1 text-sm text-slate-500">
                            Gambaran fitur utama dalam sistem AquaCraft.
                        </p>
                    </div>

                    <span class="rounded-lg border border-slate-200 bg-white px-3 py-1.5 text-xs font-semibold text-slate-500 shadow-sm">
                        4 modul direncanakan
                    </span>
                </div>

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">

                    <!-- Produk -->
                    <article class="group flex flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white transition hover:border-teal-300 hover:shadow-lg">
                        <!-- Pembungkus Gambar dengan Rasio Aspek (Merapikan ukuran gambar) -->
                        <div class="relative w-full aspect-video overflow-hidden bg-slate-100">
                            <img src="https://images.unsplash.com/photo-1522069169874-c58ec4b76be5?w=500&q=80" alt="Produk Akuarium" class="absolute inset-0 h-full w-full object-cover transition duration-500 group-hover:scale-105">
                        </div>
                        <div class="flex flex-1 flex-col p-5">
                            <div class="flex items-center justify-between gap-2">
                                <h4 class="font-bold text-slate-900 text-base truncate">Produk</h4>
                                <span class="shrink-0 rounded-md bg-teal-50 px-2 py-1 text-[10px] font-bold text-teal-600">
                                    RENCANA
                                </span>
                            </div>
                            <p class="mt-2 text-sm leading-6 text-slate-500">
                                Kelola katalog produk dan perlengkapan akuarium.
                            </p>
                            <!-- mt-auto memastikan bagian ini selalu terdorong ke bawah -->
                            <div class="mt-auto pt-4 border-t border-slate-100 text-xs font-medium text-slate-400">
                                Modul belum dibuat
                            </div>
                        </div>
                    </article>

                    <!-- Kategori -->
                    <article class="group flex flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white transition hover:border-blue-300 hover:shadow-lg">
                        <div class="relative w-full aspect-video overflow-hidden bg-slate-100">
                            <img src="https://images.unsplash.com/photo-1524704796725-9fc3044a58b2?w=500&q=80" alt="Kategori Ikan" class="absolute inset-0 h-full w-full object-cover transition duration-500 group-hover:scale-105">
                        </div>
                        <div class="flex flex-1 flex-col p-5">
                            <div class="flex items-center justify-between gap-2">
                                <h4 class="font-bold text-slate-900 text-base truncate">Kategori</h4>
                                <span class="shrink-0 rounded-md bg-blue-50 px-2 py-1 text-[10px] font-bold text-blue-600">
                                    RENCANA
                                </span>
                            </div>
                            <p class="mt-2 text-sm leading-6 text-slate-500">
                                Atur kategori untuk mengelompokkan jenis produk.
                            </p>
                            <div class="mt-auto pt-4 border-t border-slate-100 text-xs font-medium text-slate-400">
                                Modul belum dibuat
                            </div>
                        </div>
                    </article>

                    <!-- Pesanan -->
                    <article class="group flex flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white transition hover:border-amber-300 hover:shadow-lg">
                        <div class="relative w-full aspect-video overflow-hidden bg-slate-100">
                            <img src="https://images.unsplash.com/photo-1586864387967-d02ef85d93e8?w=500&q=80" alt="Pesanan" class="absolute inset-0 h-full w-full object-cover transition duration-500 group-hover:scale-105">
                        </div>
                        <div class="flex flex-1 flex-col p-5">
                            <div class="flex items-center justify-between gap-2">
                                <h4 class="font-bold text-slate-900 text-base truncate">Pesanan</h4>
                                <span class="shrink-0 rounded-md bg-amber-50 px-2 py-1 text-[10px] font-bold text-amber-600">
                                    RENCANA
                                </span>
                            </div>
                            <p class="mt-2 text-sm leading-6 text-slate-500">
                                Pantau pesanan dan proses transaksi pelanggan.
                            </p>
                            <div class="mt-auto pt-4 border-t border-slate-100 text-xs font-medium text-slate-400">
                                Modul belum dibuat
                            </div>
                        </div>
                    </article>

                    <!-- Jasa Desain -->
                    <article class="group flex flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white transition hover:border-purple-300 hover:shadow-lg">
                        <div class="relative w-full aspect-video overflow-hidden bg-slate-100">
                            <img src="https://images.unsplash.com/photo-1534043464124-3be32fe000c9?w=500&q=80" alt="Aquascape Desain" class="absolute inset-0 h-full w-full object-cover transition duration-500 group-hover:scale-105">
                        </div>
                        <div class="flex flex-1 flex-col p-5">
                            <div class="flex items-center justify-between gap-2">
                                <h4 class="font-bold text-slate-900 text-base truncate">Jasa Desain</h4>
                                <span class="shrink-0 rounded-md bg-purple-50 px-2 py-1 text-[10px] font-bold text-purple-600">
                                    RENCANA
                                </span>
                            </div>
                            <p class="mt-2 text-sm leading-6 text-slate-500">
                                Kelola layanan pembuatan dan aquascape kustom.
                            </p>
                            <div class="mt-auto pt-4 border-t border-slate-100 text-xs font-medium text-slate-400">
                                Modul belum dibuat
                            </div>
                        </div>
                    </article>

                </div>
            </section>

            <!-- Informasi akun -->
            <section class="grid grid-cols-1 gap-6 xl:grid-cols-3">

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm xl:col-span-2">
                    <div class="flex items-center gap-3">
                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-50 text-emerald-700">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900">Informasi Akun</h3>
                            <p class="mt-1 text-sm text-slate-500">
                                Detail akun yang sedang digunakan.
                            </p>
                        </div>
                    </div>

                    <div class="mt-6 divide-y divide-slate-100">
                        <div class="flex flex-wrap justify-between gap-2 py-4 text-sm">
                            <span class="text-slate-500">Nama pengguna</span>
                            <span class="font-semibold text-slate-800">{{ auth()->user()->name ?? 'Administrator' }}</span>
                        </div>

                        <div class="flex flex-wrap justify-between gap-2 py-4 text-sm">
                            <span class="text-slate-500">Alamat email</span>
                            <span class="font-medium text-slate-800">{{ auth()->user()->email ?? 'admin@aquacraft.com' }}</span>
                        </div>

                        <div class="flex flex-wrap justify-between gap-2 py-4 text-sm">
                            <span class="text-slate-500">Peran akun</span>
                            <span class="rounded-full bg-teal-50 px-3 py-1 text-xs font-semibold text-teal-800 border border-teal-100">
                                Administrator
                            </span>
                        </div>
                    </div>

                    <a href="{{ route('profile.edit') }}"
                       class="mt-3 inline-flex items-center gap-2 text-sm font-semibold text-teal-700 transition hover:text-teal-900 hover:underline">
                        Ubah profil
                        <span>→</span>
                    </a>
                </div>

                <!-- Tentang AquaCraft -->
                <div class="relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-teal-50 text-2xl relative z-10">
                        🌊
                    </div>

                    <h3 class="mt-5 text-lg font-bold text-slate-900 relative z-10">
                        Tentang AquaCraft
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500 relative z-10">
                        Platform e-commerce terbaik untuk mengelola produk, jasa, dan desain akuarium kustom kesayangan Anda.
                    </p>

                    <div class="mt-6 border-t border-slate-100 pt-4 relative z-10">
                        <p class="text-xs font-medium text-slate-400">
                            Admin Workspace &middot; {{ date('Y') }}
                        </p>
                    </div>
                    
                    <svg class="absolute -bottom-6 -right-6 h-32 w-32 text-slate-50 opacity-70" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/>
                    </svg>
                </div>

            </section>

            <!-- Footer -->
            <footer class="border-t border-slate-200 py-6 text-center text-xs font-medium text-slate-400">
                &copy; {{ date('Y') }} AquaCraft. Dibuat dengan sepenuh hati. All rights reserved.
            </footer>

        </div>
    </main>
</div>

</body>
</html>