<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMKM Notes - Pencatatan Keuangan Sederhana untuk Usaha Anda</title>
    <meta name="description"
        content="Aplikasi web untuk mencatat pemasukan dan pengeluaran UMKM dengan mudah, cepat, dan rapi. Cocok untuk laundry, warung, barbershop, dan lainnya.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        'primary': '#800000',   
                        'secondary': '#4A5568', 
                        'background': '#FFFFFF', 
                        'success': '#28A745',   
                        'danger': '#DC3545',    
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-background text-gray-800 antialiased">

    <header id="header"
        class="bg-white/90 backdrop-blur-lg sticky top-0 z-50 transition-all duration-300 border-b border-gray-200">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-primary">
                UMKM Notes
            </a>

            <div class="hidden md:flex items-center space-x-8">
                <a href="#fitur" class="text-secondary hover:text-primary font-medium">Fitur</a>
                <a href="#cara-kerja" class="text-secondary hover:text-primary font-medium">Cara Kerja</a>
                <a href="#testimoni" class="text-secondary hover:text-primary font-medium">Testimoni</a>
                <a href="#faq" class="text-secondary hover:text-primary font-medium">FAQ</a>
            </div>

            <div class="hidden md:flex items-center space-x-4">
                <a href="#" class="font-semibold text-primary hover:underline">Masuk</a>
                <a href="#"
                    class="px-6 py-2 bg-primary text-white rounded-lg font-semibold hover:bg-primary/90 transition-colors">Daftar</a>
            </div>

            <button id="menu-btn" class="md:hidden focus:outline-none text-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </nav>

        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200">
            <a href="#fitur"
                class="block py-2 px-6 text-sm text-secondary hover:bg-gray-50 hover:text-primary">Fitur</a>
            <a href="#cara-kerja"
                class="block py-2 px-6 text-sm text-secondary hover:bg-gray-50 hover:text-primary">Cara Kerja</a>
            <a href="#testimoni"
                class="block py-2 px-6 text-sm text-secondary hover:bg-gray-50 hover:text-primary">Testimoni</a>
            <a href="#faq" class="block py-2 px-6 text-sm text-secondary hover:bg-gray-50 hover:text-primary">FAQ</a>
            <div class="px-6 py-4 border-t border-gray-200 space-y-3">
                <a href="#" class="block text-center w-full font-semibold text-primary hover:underline">Masuk</a>
                <a href="#"
                    class="block text-center w-full px-6 py-2 bg-primary text-white rounded-lg font-semibold hover:bg-primary/90 transition-colors">Daftar</a>
            </div>
        </div>
    </header>

    <main>
        <section id="hero" class="bg-white py-20 md:py-28">
            <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
                <div class="text-center md:text-left">
                    <h1 class="text-4xl md:text-5xl font-bold leading-tight text-gray-900">
                        Catat Transaksi Usaha Anda, <span class="text-primary">Jadi Lebih Profesional.</span>
                    </h1>
                    <p class="mt-4 text-lg text-secondary">
                        UMKM Notes membantu pemilik usaha kecil mencatat pemasukan dan pengeluaran dengan cepat, rapi,
                        dan bisa diakses kapan saja.
                    </p>
                    <div class="mt-8 flex justify-center md:justify-start space-x-4">
                        <a href="#"
                            class="px-8 py-3 bg-primary text-white rounded-lg font-semibold hover:bg-primary/90 transition-all shadow-lg hover:shadow-xl">
                            Mulai Sekarang
                        </a>
                        <a href="#cara-kerja"
                            class="px-8 py-3 bg-transparent text-secondary rounded-lg font-semibold hover:bg-secondary hover:text-white transition-all border-2 border-secondary">
                            Lihat Cara Kerja
                        </a>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-2xl border border-gray-200">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="font-bold text-gray-800">Ringkasan Keuangan</h3>
                        <span class="text-sm text-gray-500">Bulan Ini</span>
                    </div>
                    <div class="bg-gray-100 h-40 rounded-lg flex items-end p-2 space-x-2">
                        <div class="w-1/4 h-1/3 bg-success/50 rounded-t-md"></div>
                        <div class="w-1/4 h-2/3 bg-success/70 rounded-t-md"></div>
                        <div class="w-1/4 h-1/2 bg-danger/50 rounded-t-md"></div>
                        <div class="w-1/4 h-3/4 bg-success/70 rounded-t-md"></div>
                    </div>
                    <div class="mt-4 space-y-3">
                        <div class="flex justify-between items-center p-2 rounded-lg bg-success/10">
                            <p class="text-sm text-secondary">Penjualan Kopi</p>
                            <p class="font-semibold text-sm text-success">+ Rp 50.000</p>
                        </div>
                        <div class="flex justify-between items-center p-2 rounded-lg bg-danger/10">
                            <p class="text-sm text-secondary">Beli Bahan Baku</p>
                            <p class="font-semibold text-sm text-danger">- Rp 120.000</p>
                        </div>
                        <div class="flex justify-between items-center p-2 rounded-lg bg-success/10">
                            <p class="text-sm text-secondary">Jasa Laundry</p>
                            <p class="font-semibold text-sm text-success">+ Rp 75.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="fitur" class="py-20 bg-gray-50">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Fitur Utama UMKM Notes</h2>
                    <p class="mt-3 text-secondary max-w-2xl mx-auto">Semua yang Anda butuhkan untuk mengelola keuangan
                        usaha dalam satu platform sederhana.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div
                        class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow border border-gray-100">
                        <div
                            class="bg-primary/10 text-primary w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h7" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg mb-2">Multi Usaha</h3>
                        <p class="text-secondary text-sm">Kelola lebih dari satu usaha dalam satu akun. Laundry, warung,
                            dan barbershop bisa diatur sekaligus.</p>
                    </div>
                    <div
                        class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow border border-gray-100">
                        <div
                            class="bg-primary/10 text-primary w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg mb-2">Pencatatan Sederhana</h3>
                        <p class="text-secondary text-sm">Catat pemasukan dan pengeluaran hanya dalam beberapa detik
                            dengan antarmuka yang intuitif.</p>
                    </div>
                    <div
                        class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow border border-gray-100">
                        <div
                            class="bg-primary/10 text-primary w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg mb-2">Laporan Ringkas</h3>
                        <p class="text-secondary text-sm">Lihat ringkasan pemasukan, pengeluaran, dan profit dalam
                            tampilan yang mudah dipahami.</p>
                    </div>
                    <div
                        class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow border border-gray-100">
                        <div
                            class="bg-primary/10 text-primary w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg mb-2">Aman & Online</h3>
                        <p class="text-secondary text-sm">Data usaha Anda tersimpan dengan aman di cloud dan bisa
                            diakses dari mana saja, kapan saja.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="cara-kerja" class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Hanya 3 Langkah Mudah</h2>
                    <p class="mt-3 text-secondary max-w-2xl mx-auto">Mulai mencatat keuangan usaha Anda tanpa ribet.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-16 text-center">
                    <div class="flex flex-col items-center">
                        <div
                            class="w-16 h-16 bg-primary text-white text-2xl font-bold rounded-full flex items-center justify-center mb-4">
                            1</div>
                        <h3 class="font-bold text-xl mb-2">Daftar & Buat Akun</h3>
                        <p class="text-secondary">Buat akun gratis Anda dalam waktu kurang dari satu menit.</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <div
                            class="w-16 h-16 bg-primary text-white text-2xl font-bold rounded-full flex items-center justify-center mb-4">
                            2</div>
                        <h3 class="font-bold text-xl mb-2">Tambah Usaha Anda</h3>
                        <p class="text-secondary">Masukkan nama dan jenis usaha yang ingin Anda catat keuangannya.</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <div
                            class="w-16 h-16 bg-primary text-white text-2xl font-bold rounded-full flex items-center justify-center mb-4">
                            3</div>
                        <h3 class="font-bold text-xl mb-2">Catat Transaksi Harian</h3>
                        <p class="text-secondary">Mulai catat semua pemasukan dan pengeluaran usaha Anda setiap hari.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimoni" class="py-20 bg-gray-50">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Apa Kata Pengguna?</h2>
                    <p class="mt-3 text-secondary max-w-2xl mx-auto">Lihat bagaimana UMKM Notes membantu rekan-rekan
                        pengusaha lainnya.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white p-8 rounded-lg shadow-md border border-gray-100">
                        <p class="text-secondary italic mb-6">"Akhirnya ada aplikasi yang simpel banget buat catat
                            pemasukan harian laundry saya. Gak perlu pusing lagi lihat buku catatan yang berantakan.
                            Mantap!"</p>
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12 rounded-full bg-primary/20 text-primary flex items-center justify-center font-bold text-xl mr-4">
                                B</div>
                            <div>
                                <p class="font-bold text-gray-800">Budi Santoso</p>
                                <p class="text-sm text-secondary">Pemilik Laundry Kiloan</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-8 rounded-lg shadow-md border border-gray-100">
                        <p class="text-secondary italic mb-6">"Sebagai pemilik warung makan, saya jadi bisa lihat untung
                            ruginya tiap hari dengan cepat. Fitur laporannya sangat membantu saya."</p>
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12 rounded-full bg-primary/20 text-primary flex items-center justify-center font-bold text-xl mr-4">
                                S</div>
                            <div>
                                <p class="font-bold text-gray-800">Siti Aminah</p>
                                <p class="text-sm text-secondary">Pemilik Warung Makan</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-8 rounded-lg shadow-md border border-gray-100">
                        <p class="text-secondary italic mb-6">"Sangat berguna untuk bengkel saya. Sekarang saya bisa
                            memisahkan catatan antara jasa servis dan penjualan spare part. Rekomendasi!"</p>
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12 rounded-full bg-primary/20 text-primary flex items-center justify-center font-bold text-xl mr-4">
                                A</div>
                            <div>
                                <p class="font-bold text-gray-800">Agus Wijaya</p>
                                <p class="text-sm text-secondary">Pemilik Bengkel Motor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="faq" class="py-20 bg-white">
            <div class="container mx-auto px-6 max-w-4xl">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Pertanyaan yang Sering Diajukan</h2>
                    <p class="mt-3 text-secondary">Kami siap menjawab pertanyaan Anda.</p>
                </div>
                <div class="space-y-4">
                    <div class="bg-gray-50 rounded-lg border border-gray-200">
                        <button
                            class="faq-toggle w-full flex justify-between items-center text-left p-5 font-semibold text-gray-800">
                            <span>Apakah UMKM Notes berbayar?</span>
                            <svg class="faq-icon w-5 h-5 transition-transform transform"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content hidden p-5 pt-0 text-secondary">
                            Saat ini, UMKM Notes dapat digunakan secara gratis. Kami mungkin akan memperkenalkan fitur
                            premium di masa depan, namun fitur dasar akan selalu gratis.
                        </div>
                    </div>
                    <div class="bg-gray-50 rounded-lg border border-gray-200">
                        <button
                            class="faq-toggle w-full flex justify-between items-center text-left p-5 font-semibold text-gray-800">
                            <span>Apakah cocok untuk semua jenis usaha?</span>
                            <svg class="faq-icon w-5 h-5 transition-transform transform"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content hidden p-5 pt-0 text-secondary">
                            Tentu saja! UMKM Notes dirancang untuk semua jenis usaha mikro, kecil, dan menengah, seperti
                            toko kelontong, warung makan, laundry, barbershop, bengkel, jasa freelance, dan banyak lagi.
                        </div>
                    </div>
                    <div class="bg-gray-50 rounded-lg border border-gray-200">
                        <button
                            class="faq-toggle w-full flex justify-between items-center text-left p-5 font-semibold text-gray-800">
                            <span>Apakah data saya aman?</span>
                            <svg class="faq-icon w-5 h-5 transition-transform transform"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content hidden p-5 pt-0 text-secondary">
                            Keamanan data Anda adalah prioritas kami. Semua data disimpan di server yang aman dengan
                            enkripsi standar industri. Hanya Anda yang dapat mengakses data keuangan Anda.
                        </div>
                    </div>
                    <div class="bg-gray-50 rounded-lg border border-gray-200">
                        <button
                            class="faq-toggle w-full flex justify-between items-center text-left p-5 font-semibold text-gray-800">
                            <span>Apakah bisa diakses lewat HP?</span>
                            <svg class="faq-icon w-5 h-5 transition-transform transform"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content hidden p-5 pt-0 text-secondary">
                            Ya. UMKM Notes adalah aplikasi berbasis web yang responsif, artinya tampilannya akan
                            menyesuaikan dengan perangkat yang Anda gunakan, baik itu komputer, tablet, maupun
                            smartphone. Cukup buka melalui browser di HP Anda.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="cta" class="py-20 bg-primary">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white">Siap Membuat Pencatatan Usaha Anda Lebih Rapi?
                </h2>
                <p class="mt-4 text-white/80 max-w-2xl mx-auto">Daftar sekarang dan rasakan kemudahan mengelola keuangan
                    bisnis Anda. Gratis!</p>
                <div class="mt-8">
                    <a href="#"
                        class="px-10 py-4 bg-white text-primary rounded-lg font-bold text-lg hover:bg-gray-100 transition-all shadow-lg hover:shadow-xl">
                        Daftar Sekarang Gratis
                    </a>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-secondary text-white py-8">
        <div class="container mx-auto px-6 text-center">
            <div class="md:flex justify-between items-center">
                <p class="text-gray-300 mb-4 md:mb-0">
                    &copy; 2025 UMKM Notes. All rights reserved.
                </p>
                <div class="space-x-6">
                    <a href="#" class="text-gray-300 hover:text-white text-sm">Kebijakan Privasi</a>
                    <a href="#" class="text-gray-300 hover:text-white text-sm">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>


    <script>
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 10) {
                header.classList.add('shadow-md');
            } else {
                header.classList.remove('shadow-md');
            }
        });

        const faqToggles = document.querySelectorAll('.faq-toggle');
        faqToggles.forEach(toggle => {
            toggle.addEventListener('click', () => {
                const content = toggle.nextElementSibling;
                const icon = toggle.querySelector('.faq-icon');

                faqToggles.forEach(otherToggle => {
                    if (otherToggle !== toggle) {
                        otherToggle.nextElementSibling.classList.add('hidden');
                        otherToggle.querySelector('.faq-icon').classList.remove('rotate-180');
                    }
                });

                content.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
            });
        });

    </script>
</body>

</html>