<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Buku Usaha</title>

    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --color-primary: #800000; 
            --color-secondary: #4A5568;
            --color-success: #28A745;
            --color-danger: #DC3545;
        }

        .theme-blue { --color-primary: #2563eb; }
        .theme-green { --color-primary: #16a34a; }
        .theme-maroon { --color-primary: #800000; }
    </style>

    <script>
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: {
              sans: ['Poppins', 'system-ui', 'sans-serif'],
            },
            colors: {
              primary: 'var(--color-primary)',
              secondary: 'var(--color-secondary)',
              success: 'var(--color-success)',
              danger: 'var(--color-danger)',
            }
          }
        }
      }
    </script>
</head>
<body class="bg-gray-100">

    <div class="flex h-screen">
        <aside class="w-64 bg-white shadow-md hidden md:block">
            <div class="p-6">
                <h1 class="text-2xl font-bold text-primary">Buku Usaha</h1>
            </div>
            <nav class="mt-6">
                <a href="#" class="flex items-center px-6 py-3 bg-gray-200 text-primary font-bold">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    <span class="mx-3">Dashboard</span>
                </a>
                <a href="#" class="flex items-center px-6 py-3 text-secondary hover:bg-gray-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    <span class="mx-3">Transaksi</span>
                </a>
                <a href="#" class="flex items-center px-6 py-3 text-secondary hover:bg-gray-100">
                     <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    <span class="mx-3">Usaha Saya</span>
                </a>
                <a href="#" class="flex items-center px-6 py-3 text-secondary hover:bg-gray-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.096 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    <span class="mx-3">Pengaturan</span>
                </a>
            </nav>
        </aside>

        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="flex justify-between items-center p-4 bg-white border-b">
                <div>
                    <span class="text-sm text-gray-500">Usaha Aktif:</span>
                    <h2 class="text-xl font-semibold">Laundry Melati</h2>
                </div>
                <div class="relative">
                     <button class="flex items-center space-x-2">
                        <span class="font-medium">Andi Hermawan</span>
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                     </button>
                </div>
            </header>

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="lg:col-span-2 space-y-6">

                        <div id="widget-summary" class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="bg-white p-6 rounded-lg shadow">
                                <h3 class="text-sm font-medium text-gray-500">Pemasukan Hari Ini</h3>
                                <p class="text-3xl font-bold text-success mt-2">Rp 750.000</p>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow">
                                <h3 class="text-sm font-medium text-gray-500">Pengeluaran Hari Ini</h3>
                                <p class="text-3xl font-bold text-danger mt-2">Rp 215.000</p>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow">
                                <h3 class="text-sm font-medium text-gray-500">Selisih (Profit)</h3>
                                <p class="text-3xl font-bold text-secondary mt-2">Rp 535.000</p>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-xl font-semibold">Transaksi Terbaru</h3>
                                <button id="add-transaction-btn" class="px-4 py-2 bg-primary text-white rounded-lg text-sm font-semibold hover:bg-primary/90">
                                    + Tambah Transaksi
                                </button>
                            </div>
                            <div class="overflow-x-auto">
                                <table class="w-full text-left">
                                    <thead>
                                        <tr class="text-gray-500">
                                            <th class="py-2">Tanggal</th>
                                            <th class="py-2">Keterangan</th>
                                            <th class="py-2 text-right">Nominal</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y">
                                        <tr>
                                            <td class="py-3 text-sm text-gray-500">23 Nov 2025</td>
                                            <td><span class="font-semibold">Laundry Kiloan</span><br><span class="text-xs text-gray-400">Pemasukan</span></td>
                                            <td class="py-3 text-right font-semibold text-success">+ Rp 50.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-3 text-sm text-gray-500">23 Nov 2025</td>
                                            <td><span class="font-semibold">Beli Deterjen</span><br><span class="text-xs text-gray-400">Pengeluaran</span></td>
                                            <td class="py-3 text-right font-semibold text-danger">- Rp 120.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-3 text-sm text-gray-500">23 Nov 2025</td>
                                            <td><span class="font-semibold">Setrika Uap</span><br><span class="text-xs text-gray-400">Pemasukan</span></td>
                                            <td class="py-3 text-right font-semibold text-success">+ Rp 25.000</td>
                                        </tr>
                                         <tr>
                                            <td class="py-3 text-sm text-gray-500">22 Nov 2025</td>
                                            <td><span class="font-semibold">Bayar Listrik</span><br><span class="text-xs text-gray-400">Pengeluaran</span></td>
                                            <td class="py-3 text-right font-semibold text-danger">- Rp 95.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                         <div id="widget-chart" class="bg-white p-6 rounded-lg shadow">
                            <h3 class="text-xl font-semibold mb-4">Grafik Keuangan (7 Hari Terakhir)</h3>
                            <div class="bg-gray-100 h-64 rounded-lg flex items-center justify-center">
                                <p class="text-gray-400">Grafik sederhana akan muncul di sini.</p>
                            </div>
                         </div>
                    </div>

                    <div class="lg:col-span-1 space-y-6">

                        <div id="onboarding-panel" class="bg-blue-50 border-l-4 border-blue-500 p-6 rounded-lg shadow">
                            <h4 class="font-bold text-blue-800">Langkah Awal Menggunakan Buku Usaha</h4>
                            <p class="text-sm text-blue-700 mt-2 mb-4">Ikuti panduan singkat ini untuk memulai.</p>
                            <ul class="space-y-3 text-sm">
                                <li class="font-medium text-gray-700">1. Tambah atau atur usaha Anda di menu "Usaha Saya".</li>
                                <li class="font-medium text-gray-700">2. Klik tombol "+ Tambah Transaksi" untuk mencatat pemasukan/pengeluaran pertama.</li>
                                <li class="font-medium text-gray-700">3. Ringkasan keuangan akan otomatis ter-update di atas.</li>
                            </ul>
                            <p class="text-xs text-gray-500 mt-4">Tips: Tidak perlu langsung rapi, yang penting dicatat dulu setiap transaksi yang terjadi.</p>
                            <button id="dismiss-onboarding" class="mt-4 w-full text-center py-2 bg-blue-500 text-white rounded-lg text-sm font-semibold hover:bg-blue-600">Saya Mengerti</button>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow">
                             <h4 class="font-bold text-gray-800 mb-4">Pengaturan Tampilan</h4>
                             
                             <div class="mb-6">
                                <label class="text-sm font-semibold text-gray-600">Pilih Warna Tema</label>
                                <div id="theme-selector" class="flex space-x-3 mt-2">
                                    <label>
                                        <input type="radio" name="theme" value="theme-maroon" class="sr-only" checked>
                                        <div class="w-8 h-8 rounded-full bg-[#800000] cursor-pointer ring-2 ring-offset-2 ring-transparent"></div>
                                    </label>
                                     <label>
                                        <input type="radio" name="theme" value="theme-blue" class="sr-only">
                                        <div class="w-8 h-8 rounded-full bg-[#2563eb] cursor-pointer ring-2 ring-offset-2 ring-transparent"></div>
                                    </label>
                                     <label>
                                        <input type="radio" name="theme" value="theme-green" class="sr-only">
                                        <div class="w-8 h-8 rounded-full bg-[#16a34a] cursor-pointer ring-2 ring-offset-2 ring-transparent"></div>
                                    </label>
                                </div>
                             </div>

                             <div>
                                 <label class="text-sm font-semibold text-gray-600">Tampilkan/Sembunyikan Widget</label>
                                 <div id="widget-settings" class="space-y-2 mt-2">
                                     <label class="flex items-center">
                                         <input type="checkbox" data-widget="widget-summary" class="h-4 w-4 text-primary rounded focus:ring-primary" checked>
                                         <span class="ml-2 text-sm text-gray-700">Tampilkan Ringkasan Keuangan</span>
                                     </label>
                                     <label class="flex items-center">
                                         <input type="checkbox" data-widget="widget-chart" class="h-4 w-4 text-primary rounded focus:ring-primary" checked>
                                         <span class="ml-2 text-sm text-gray-700">Tampilkan Grafik Sederhana</span>
                                     </label>
                                     <label class="flex items-center">
                                         <input type="checkbox" data-widget="onboarding-panel" class="h-4 w-4 text-primary rounded focus:ring-primary" checked>
                                         <span class="ml-2 text-sm text-gray-700">Tampilkan Panel Onboarding</span>
                                     </label>
                                 </div>
                             </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    
    <div id="add-transaction-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 hidden">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md">
            <div class="flex justify-between items-center p-4 border-b">
                <h3 class="text-xl font-semibold">Tambah Transaksi Baru</h3>
                <button id="close-modal-btn" class="text-gray-400 hover:text-gray-600">&times;</button>
            </div>
            <div class="p-6 space-y-4">
                <div>
                    <label class="text-sm font-medium">Jenis Transaksi</label>
                    <div class="flex space-x-4 mt-1">
                        <label class="flex-1 p-3 border rounded-lg text-center cursor-pointer has-[:checked]:bg-success/10 has-[:checked]:border-success">
                            <input type="radio" name="type" value="income" class="sr-only" checked>
                            Pemasukan
                        </label>
                         <label class="flex-1 p-3 border rounded-lg text-center cursor-pointer has-[:checked]:bg-danger/10 has-[:checked]:border-danger">
                            <input type="radio" name="type" value="expense" class="sr-only">
                            Pengeluaran
                        </label>
                    </div>
                </div>
                 <div>
                    <label for="amount" class="text-sm font-medium">Nominal (Rp)</label>
                    <input type="number" id="amount" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-primary" placeholder="Contoh: 50000">
                </div>
                 <div>
                    <label for="description" class="text-sm font-medium">Keterangan</label>
                    <input type="text" id="description" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-primary" placeholder="Contoh: Laundry Kiloan">
                </div>
            </div>
            <div class="flex justify-end p-4 bg-gray-50 border-t rounded-b-lg">
                <button class="px-6 py-2 bg-primary text-white font-semibold rounded-lg hover:bg-primary/90">Simpan</button>
            </div>
        </div>
    </div>


    <script>
    document.addEventListener('DOMContentLoaded', () => {

        const onboardingPanel = document.getElementById('onboarding-panel');
        const dismissOnboardingBtn = document.getElementById('dismiss-onboarding');
        
        if (dismissOnboardingBtn) {
            dismissOnboardingBtn.addEventListener('click', () => {
                onboardingPanel.style.display = 'none';
            });
        }


        const themeSelector = document.getElementById('theme-selector');
        const themeRadios = document.querySelectorAll('input[name="theme"]');
        const root = document.documentElement;

        function applyTheme(themeClass) {
            root.classList.remove('theme-maroon', 'theme-blue', 'theme-green');
          
            if (themeClass) {
                root.classList.add(themeClass);
            }
            localStorage.setItem('buku-usaha-theme', themeClass);
            
             themeRadios.forEach(radio => {
                const radioDiv = radio.nextElementSibling;
                if (radio.value === themeClass) {
                    radio.checked = true;
                    radioDiv.classList.add('ring-primary');
                } else {
                    radioDiv.classList.remove('ring-primary');
                }
            });
        }

        const savedTheme = localStorage.getItem('buku-usaha-theme') || 'theme-maroon';
        applyTheme(savedTheme);

        themeRadios.forEach(radio => {
            radio.addEventListener('change', (event) => {
                applyTheme(event.target.value);
            });
        });


        const widgetCheckboxes = document.querySelectorAll('#widget-settings input[type="checkbox"]');

        widgetCheckboxes.forEach(checkbox => {
            const widgetId = checkbox.dataset.widget;
            const widget = document.getElementById(widgetId);

            const isVisible = localStorage.getItem(widgetId) !== 'hidden';
            checkbox.checked = isVisible;
            if (!isVisible) {
                widget.classList.add('hidden');
            }

            checkbox.addEventListener('change', () => {
                if (checkbox.checked) {
                    widget.classList.remove('hidden');
                    localStorage.setItem(widgetId, 'visible');
                } else {
                    widget.classList.add('hidden');
                    localStorage.setItem(widgetId, 'hidden');
                }
            });
        });
        
        const modal = document.getElementById('add-transaction-modal');
        const addTransactionBtn = document.getElementById('add-transaction-btn');
        const closeModalBtn = document.getElementById('close-modal-btn');

        addTransactionBtn.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });

        closeModalBtn.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        modal.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.classList.add('hidden');
            }
        });
    });
    </script>
</body>
</html>