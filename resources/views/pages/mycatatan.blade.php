<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan Saya - Buku Usaha</title>

    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* CSS Variables untuk tema dinamis (konsisten dengan Dashboard) */
        :root {
            --color-primary: #800000; /* Maroon Default */
            --color-secondary: #4A5568;
            --color-success: #28A745;
            --color-danger: #DC3545;
        }
        .theme-blue { --color-primary: #2563eb; }
        .theme-green { --color-primary: #16a34a; }
        .theme-maroon { --color-primary: #800000; }

        /* Custom styles untuk Drag & Drop dan animasi */
        #notes-grid .note-card {
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }
        #notes-grid .note-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
        }
        .dragging {
            opacity: 0.5;
            transform: scale(1.05);
            background: #f0f0f0;
        }
        .drag-over {
            border: 2px dashed var(--color-primary);
            background-color: rgba(128, 0, 0, 0.05);
        }
        /* Animasi untuk modal */
        .modal-enter {
            animation: fadeIn 0.3s ease-out forwards;
        }
        .modal-leave {
            animation: fadeOut 0.3s ease-in forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.95); }
            to { opacity: 1; transform: scale(1); }
        }
        @keyframes fadeOut {
            from { opacity: 1; transform: scale(1); }
            to { opacity: 0; transform: scale(0.95); }
        }
    </style>

    <script>
      // Konfigurasi Tailwind untuk menggunakan CSS Variables
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
        <!-- Sidebar (Sama seperti Dashboard, menu aktif diubah) -->
        <aside class="w-64 bg-white shadow-md hidden md:block">
            <div class="p-6">
                <h1 class="text-2xl font-bold text-primary">Buku Usaha</h1>
            </div>
            <nav class="mt-6">
                <a href="#" class="flex items-center px-6 py-3 text-secondary hover:bg-gray-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    <span class="mx-3">Dashboard</span>
                </a>
                <!-- MENU AKTIF -->
                <a href="#" class="flex items-center px-6 py-3 bg-gray-200 text-primary font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                    <span class="mx-3">Catatan Saya</span>
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

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Topbar (Sama seperti Dashboard) -->
            <header class="flex justify-between items-center p-4 bg-white border-b flex-shrink-0">
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

            <!-- Content Area -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
                <!-- Page Header -->
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-3xl font-bold text-gray-800">Catatan Saya</h1>
                    <button id="create-note-btn" class="flex items-center px-4 py-2 bg-primary text-white rounded-lg font-semibold hover:bg-primary/90 transition-transform hover:scale-105 shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" /></svg>
                        Buat Catatan Baru
                    </button>
                </div>

                <!-- Notes Grid -->
                <div id="notes-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <!-- Catatan akan dirender oleh JavaScript di sini -->
                    <!-- Contoh Tampilan Kartu (dummy) -->
                    <div class="bg-white p-5 rounded-lg shadow border-l-4 border-yellow-500 hidden">
                        <div class="flex justify-between items-start">
                            <h3 class="font-bold text-lg text-gray-800">Review Keuangan Mingguan</h3>
                            <span class="text-xs bg-yellow-100 text-yellow-800 font-medium px-2 py-1 rounded-full">Keuangan</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-2">Cek semua pemasukan dan pengeluaran dari tanggal 15-21 Nov. Pastikan tidak ada yang terlewat.</p>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-xs text-gray-400">Dibuat 2 jam lalu</span>
                            <div>
                                <button class="p-1 text-gray-400 hover:text-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pesan jika tidak ada catatan -->
                <div id="empty-state" class="hidden text-center py-20">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-24 w-24 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                    <h3 class="mt-4 text-xl font-semibold text-gray-700">Belum Ada Catatan</h3>
                    <p class="mt-1 text-gray-500">Klik tombol "Buat Catatan Baru" untuk memulai.</p>
                </div>
            </main>
        </div>
    </div>
    
    <!-- Create Note Modal -->
    <div id="create-note-modal" class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center p-4 hidden">
        <div id="modal-content" class="bg-white rounded-lg shadow-xl w-full max-w-2xl transform transition-all">
            <!-- Step 1: Pilih Jenis Catatan -->
            <div id="modal-step-1" class="p-8">
                <div class="flex justify-between items-center">
                    <h3 class="text-2xl font-bold text-gray-800">Pilih Jenis Catatan</h3>
                    <button id="close-modal-btn" class="text-gray-400 hover:text-gray-600 text-3xl">&times;</button>
                </div>
                <p class="text-gray-500 mt-2">Pilih jenis catatan yang ingin Anda buat.</p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                    <button data-type="keuangan" class="note-type-btn p-6 border-2 border-gray-200 rounded-lg text-center hover:border-primary hover:bg-primary/5 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v.01" /></svg>
                        <span class="font-semibold mt-4 block">Keuangan</span>
                    </button>
                    <button data-type="inventaris" class="note-type-btn p-6 border-2 border-gray-200 rounded-lg text-center hover:border-primary hover:bg-primary/5 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" /></svg>
                        <span class="font-semibold mt-4 block">Inventaris</span>
                    </button>
                    <button data-type="lainnya" class="note-type-btn p-6 border-2 border-gray-200 rounded-lg text-center hover:border-primary hover:bg-primary/5 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                        <span class="font-semibold mt-4 block">Lainnya</span>
                    </button>
                </div>
            </div>

            <!-- Step 2: Form Input -->
            <div id="modal-step-2" class="hidden">
                <!-- Header akan di-inject oleh JS -->
                <div id="modal-form-header" class="flex justify-between items-center p-6 border-b">
                    <div class="flex items-center">
                         <button id="back-to-step-1" class="p-2 mr-4 rounded-full hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                        </button>
                        <h3 class="text-2xl font-bold text-gray-800">Buat Catatan Baru</h3>
                    </div>
                    <button id="close-modal-btn-2" class="text-gray-400 hover:text-gray-600 text-3xl">&times;</button>
                </div>
                <!-- Form Body akan di-inject oleh JS -->
                <div id="modal-form-body" class="p-6 max-h-[60vh] overflow-y-auto"></div>
                <!-- Footer -->
                <div class="flex justify-end p-4 bg-gray-50 border-t rounded-b-lg">
                    <button id="save-note-btn" class="px-6 py-2 bg-primary text-white font-semibold rounded-lg hover:bg-primary/90">Simpan Catatan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Templates for Form Bodies -->
    <template id="form-template-keuangan">
        <div class="space-y-4">
            <div>
                <label for="note-title" class="text-sm font-medium text-gray-700">Judul Catatan</label>
                <input type="text" id="note-title" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-primary" placeholder="Contoh: Analisis Laba Rugi November">
            </div>
            <div>
                <label for="note-content" class="text-sm font-medium text-gray-700">Isi Catatan</label>
                <textarea id="note-content" rows="6" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-primary" placeholder="Tuliskan detail catatan keuangan di sini..."></textarea>
            </div>
        </div>
    </template>
    
    <template id="form-template-inventaris">
        <div class="space-y-4">
            <div>
                <label for="note-title" class="text-sm font-medium text-gray-700">Judul Catatan Inventaris</label>
                <input type="text" id="note-title" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-primary" placeholder="Contoh: Stok Deterjen & Pewangi">
            </div>
            <div>
                <label class="text-sm font-medium text-gray-700">Daftar Barang</label>
                <div id="inventory-items" class="mt-2 space-y-3">
                    <!-- Item akan di-inject oleh JS -->
                </div>
                <button id="add-inventory-item-btn" type="button" class="mt-3 text-sm font-semibold text-primary hover:underline">+ Tambah Barang</button>
            </div>
        </div>
    </template>

    <template id="form-template-lainnya">
         <div class="space-y-4">
            <div>
                <label for="note-title" class="text-sm font-medium text-gray-700">Judul Catatan</label>
                <input type="text" id="note-title" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-primary" placeholder="Contoh: Ide Promosi Akhir Tahun">
            </div>
            <div>
                <label for="note-content" class="text-sm font-medium text-gray-700">Isi Catatan</label>
                <textarea id="note-content" rows="8" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-primary" placeholder="Tuliskan apa saja yang perlu Anda catat..."></textarea>
            </div>
        </div>
    </template>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        // --- THEME LOGIC (from Dashboard) ---
        const root = document.documentElement;
        const savedTheme = localStorage.getItem('buku-usaha-theme') || 'theme-maroon';
        if (savedTheme) {
            root.classList.add(savedTheme);
        }

        // --- DOM ELEMENTS ---
        const notesGrid = document.getElementById('notes-grid');
        const emptyState = document.getElementById('empty-state');
        const createNoteBtn = document.getElementById('create-note-btn');
        const modal = document.getElementById('create-note-modal');
        const modalContent = document.getElementById('modal-content');
        const closeModalBtn = document.getElementById('close-modal-btn');
        const closeModalBtn2 = document.getElementById('close-modal-btn-2');
        const noteTypeButtons = document.querySelectorAll('.note-type-btn');
        const step1 = document.getElementById('modal-step-1');
        const step2 = document.getElementById('modal-step-2');
        const backToStep1Btn = document.getElementById('back-to-step-1');
        const saveNoteBtn = document.getElementById('save-note-btn');
        const modalFormHeader = document.getElementById('modal-form-header');
        const modalFormBody = document.getElementById('modal-form-body');

        // --- STATE MANAGEMENT ---
        let notes = JSON.parse(localStorage.getItem('buku-usaha-notes')) || [];
        let currentNoteType = null;
        
        const noteTypeConfig = {
            keuangan: { color: 'yellow-500', bgColor: 'yellow-100', textColor: 'yellow-800', label: 'Keuangan' },
            inventaris: { color: 'blue-500', bgColor: 'blue-100', textColor: 'blue-800', label: 'Inventaris' },
            lainnya: { color: 'purple-500', bgColor: 'purple-100', textColor: 'purple-800', label: 'Lainnya' }
        };

        // --- RENDER FUNCTION ---
        const renderNotes = () => {
            notesGrid.innerHTML = '';
            if (notes.length === 0) {
                emptyState.classList.remove('hidden');
            } else {
                emptyState.classList.add('hidden');
                notes.forEach(note => {
                    const config = noteTypeConfig[note.type];
                    let contentHtml = '';
                    if (note.type === 'inventaris') {
                        contentHtml = `<ul class="text-sm text-gray-600 mt-2 space-y-1 list-disc list-inside">
                            ${note.items.slice(0, 3).map(item => `<li>${item.name} (${item.quantity}) - <span class="${item.type === 'masuk' ? 'text-success' : 'text-danger'}">${item.type}</span></li>`).join('')}
                            ${note.items.length > 3 ? '<li class="text-xs text-gray-400">...dan lainnya</li>' : ''}
                        </ul>`;
                    } else {
                        contentHtml = `<p class="text-sm text-gray-600 mt-2 break-words">${note.content.substring(0, 100)}${note.content.length > 100 ? '...' : ''}</p>`;
                    }
                    
                    const noteCard = document.createElement('div');
                    noteCard.className = `note-card bg-white p-5 rounded-lg shadow border-l-4 border-${config.color}`;
                    noteCard.setAttribute('draggable', 'true');
                    noteCard.dataset.id = note.id;
                    noteCard.innerHTML = `
                        <div class="flex justify-between items-start">
                            <h3 class="font-bold text-lg text-gray-800 break-words">${note.title}</h3>
                            <span class="text-xs bg-${config.bgColor} text-${config.textColor} font-medium px-2 py-1 rounded-full flex-shrink-0 ml-2">${config.label}</span>
                        </div>
                        ${contentHtml}
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-xs text-gray-400">${new Date(note.createdAt).toLocaleString('id-ID', {day: 'numeric', month: 'short', year:'numeric'})}</span>
                            <div>
                                <button data-id="${note.id}" class="delete-note-btn p-1 text-gray-400 hover:text-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                </button>
                            </div>
                        </div>
                    `;
                    notesGrid.appendChild(noteCard);
                });
            }
        };

        const saveAndRender = () => {
            localStorage.setItem('buku-usaha-notes', JSON.stringify(notes));
            renderNotes();
        };

        // --- MODAL LOGIC ---
        const openModal = () => {
            modal.classList.remove('hidden');
            modalContent.classList.remove('modal-leave');
            modalContent.classList.add('modal-enter');
            step1.classList.remove('hidden');
            step2.classList.add('hidden');
        };

        const closeModal = () => {
            modalContent.classList.remove('modal-enter');
            modalContent.classList.add('modal-leave');
            setTimeout(() => modal.classList.add('hidden'), 300);
        };

        createNoteBtn.addEventListener('click', openModal);
        closeModalBtn.addEventListener('click', closeModal);
        closeModalBtn2.addEventListener('click', closeModal);
        backToStep1Btn.addEventListener('click', () => {
            step2.classList.add('hidden');
            step1.classList.remove('hidden');
        });

        noteTypeButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                currentNoteType = btn.dataset.type;
                const template = document.getElementById(`form-template-${currentNoteType}`);
                modalFormBody.innerHTML = '';
                modalFormBody.appendChild(template.content.cloneNode(true));
                
                modalFormHeader.querySelector('h3').textContent = `Buat Catatan ${noteTypeConfig[currentNoteType].label}`;
                
                if (currentNoteType === 'inventaris') {
                    document.getElementById('add-inventory-item-btn').addEventListener('click', addInventoryItem);
                    addInventoryItem(); // Add the first item row automatically
                }

                step1.classList.add('hidden');
                step2.classList.remove('hidden');
            });
        });

        // --- INVENTORY FORM LOGIC ---
        const addInventoryItem = () => {
            const container = document.getElementById('inventory-items');
            const itemRow = document.createElement('div');
            itemRow.className = 'flex items-center space-x-2 inventory-item-row';
            itemRow.innerHTML = `
                <input type="text" class="item-name flex-grow p-2 border border-gray-300 rounded-md text-sm" placeholder="Nama Barang">
                <input type="number" class="item-quantity w-20 p-2 border border-gray-300 rounded-md text-sm" placeholder="Jml">
                <select class="item-type p-2 border border-gray-300 rounded-md text-sm">
                    <option value="masuk">Masuk</option>
                    <option value="keluar">Keluar</option>
                </select>
                <button type="button" class="remove-item-btn text-gray-400 hover:text-danger p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            `;
            container.appendChild(itemRow);
            itemRow.querySelector('.remove-item-btn').addEventListener('click', () => itemRow.remove());
        };

        // --- SAVE NOTE LOGIC ---
        saveNoteBtn.addEventListener('click', () => {
            const title = modalFormBody.querySelector('#note-title').value.trim();
            if (!title) {
                alert('Judul catatan tidak boleh kosong!');
                return;
            }

            const newNote = {
                id: Date.now(),
                type: currentNoteType,
                title,
                createdAt: new Date().toISOString()
            };

            if (currentNoteType === 'inventaris') {
                newNote.items = [];
                modalFormBody.querySelectorAll('.inventory-item-row').forEach(row => {
                    const name = row.querySelector('.item-name').value.trim();
                    const quantity = row.querySelector('.item-quantity').value;
                    const type = row.querySelector('.item-type').value;
                    if (name && quantity) {
                        newNote.items.push({ name, quantity, type });
                    }
                });
            } else {
                newNote.content = modalFormBody.querySelector('#note-content').value.trim();
            }

            notes.unshift(newNote); // Add to the beginning
            saveAndRender();
            closeModal();
        });

        // --- DELETE NOTE LOGIC ---
        notesGrid.addEventListener('click', e => {
            if (e.target.closest('.delete-note-btn')) {
                const btn = e.target.closest('.delete-note-btn');
                const noteId = parseInt(btn.dataset.id);
                if (confirm('Apakah Anda yakin ingin menghapus catatan ini?')) {
                    notes = notes.filter(note => note.id !== noteId);
                    saveAndRender();
                }
            }
        });
        
        // --- DRAG & DROP LOGIC ---
        let draggedItem = null;

        notesGrid.addEventListener('dragstart', e => {
            if (e.target.classList.contains('note-card')) {
                draggedItem = e.target;
                setTimeout(() => {
                    e.target.classList.add('dragging');
                }, 0);
            }
        });

        notesGrid.addEventListener('dragend', e => {
            if (draggedItem) {
                draggedItem.classList.remove('dragging');
                draggedItem = null;

                // Update the notes array order
                const newOrderIds = [...notesGrid.querySelectorAll('.note-card')].map(card => parseInt(card.dataset.id));
                notes.sort((a, b) => newOrderIds.indexOf(a.id) - newOrderIds.indexOf(b.id));
                saveAndRender();
            }
        });

        notesGrid.addEventListener('dragover', e => {
            e.preventDefault();
            const afterElement = getDragAfterElement(notesGrid, e.clientY);
            const currentlyDragging = document.querySelector('.dragging');
            if (afterElement == null) {
                notesGrid.appendChild(currentlyDragging);
            } else {
                notesGrid.insertBefore(currentlyDragging, afterElement);
            }
        });

        function getDragAfterElement(container, y) {
            const draggableElements = [...container.querySelectorAll('.note-card:not(.dragging)')];
            return draggableElements.reduce((closest, child) => {
                const box = child.getBoundingClientRect();
                const offset = y - box.top - box.height / 2;
                if (offset < 0 && offset > closest.offset) {
                    return { offset: offset, element: child };
                } else {
                    return closest;
                }
            }, { offset: Number.NEGATIVE_INFINITY }).element;
        }

        // --- INITIAL RENDER ---
        renderNotes();
    });
    </script>
</body>
</html>