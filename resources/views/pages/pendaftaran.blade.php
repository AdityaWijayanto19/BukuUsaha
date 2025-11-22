<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siapkan Usaha Anda - Buku Usaha</title>

    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
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
              'success': '#28A745',   
              'danger': '#DC3545',    
            }
          }
        }
      }
    </script>
    <style>
        .step-content {
            transition: opacity 0.4s ease-in-out, transform 0.4s ease-in-out;
        }
        .step-hidden {
            opacity: 0;
            transform: translateX(20px);
            position: absolute;
            pointer-events: none;
        }
        .step-visible {
            opacity: 1;
            transform: translateX(0);
        }
        .progress-step {
            transition: background-color 0.4s ease-in-out, border-color 0.4s ease-in-out, color 0.4s ease-in-out;
        }
        .progress-line {
            transition: width 0.4s ease-in-out;
        }
        #logo-dropzone {
            transition: border-color 0.2s ease;
        }
        #logo-dropzone.drag-over {
            border-color: var(--color-primary);
            background-color: rgba(128, 0, 0, 0.05);
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="container mx-auto max-w-2xl bg-white shadow-2xl rounded-2xl p-8 md:p-12">
        <!-- Header -->
        <div class="text-center">
            <h1 class="text-3xl font-bold text-gray-900">Mari Siapkan Usaha Anda</h1>
            <p class="mt-2 text-gray-600">Hanya perlu beberapa langkah singkat untuk memulai.</p>
        </div>

        <!-- Progress Bar -->
        <div class="mt-10">
            <div class="flex items-center">
                <div id="step-indicator-1" class="progress-step w-8 h-8 flex items-center justify-center rounded-full bg-primary text-white font-bold border-2 border-primary">1</div>
                <div class="flex-auto border-t-2 transition-all duration-500 mx-4 border-primary"></div>
                <div id="step-indicator-2" class="progress-step w-8 h-8 flex items-center justify-center rounded-full bg-white text-secondary font-bold border-2 border-gray-300">2</div>
                <div class="flex-auto border-t-2 transition-all duration-500 mx-4 border-gray-300"></div>
                <div id="step-indicator-3" class="progress-step w-8 h-8 flex items-center justify-center rounded-full bg-white text-secondary font-bold border-2 border-gray-300">3</div>
            </div>
            <div class="flex justify-between text-sm mt-2">
                <span id="step-label-1" class="font-semibold text-primary">Info Dasar</span>
                <span id="step-label-2" class="font-medium text-gray-400">Keuangan Awal</span>
                <span id="step-label-3" class="font-medium text-gray-400">Personalisasi</span>
            </div>
        </div>
        
        <!-- Form Content -->
        <div class="mt-10 relative">
            <form id="businessSetupForm">
                <div id="step-1" class="step-content step-visible space-y-6">
                    <h2 class="text-xl font-semibold text-gray-800">Langkah 1: Informasi Dasar Usaha</h2>
                    <div>
                        <label for="business_name" class="block mb-2 text-sm font-medium text-gray-700">Nama Usaha Anda</label>
                        <input type="text" id="business_name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50" placeholder="Contoh: Warung Berkah Ibu Siti">
                    </div>
                    <div>
                        <label for="business_type" class="block mb-2 text-sm font-medium text-gray-700">Jenis Usaha</label>
                        <select id="business_type" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50">
                            <option value="">Pilih salah satu</option>
                            <option value="laundry">Laundry</option>
                            <option value="warung">Warung Makan</option>
                        </select>
                    </div>
                </div>

                <div id="step-2" class="step-content step-hidden space-y-6">
                    <h2 class="text-xl font-semibold text-gray-800">Langkah 2: Pengaturan Keuangan Awal</h2>
                    <div>
                        <label for="start_date" class="block mb-2 text-sm font-medium text-gray-700">Tanggal Mulai Pencatatan</label>
                        <input type="date" id="start_date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50">
                        <p class="text-xs text-gray-500 mt-1">Semua laporan keuangan akan dihitung mulai dari tanggal ini.</p>
                    </div>
                     <div>
                        <label for="initial_cash" class="block mb-2 text-sm font-medium text-gray-700">Saldo Awal Kas (Uang Tunai)</label>
                        <div class="relative">
                             <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500">Rp</span>
                             <input type="number" id="initial_cash" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50" placeholder="0">
                        </div>
                        <p class="text-xs text-green-700 bg-green-50 p-2 rounded-md mt-2"><b>Penting:</b> Isi dengan jumlah uang tunai yang Anda miliki di tangan saat ini untuk memulai pencatatan yang akurat.</p>
                    </div>
                     <div>
                        <label for="initial_bank" class="block mb-2 text-sm font-medium text-gray-700">Saldo Awal Bank (Opsional)</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500">Rp</span>
                            <input type="number" id="initial_bank" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50" placeholder="0">
                        </div>
                    </div>
                </div>

                <div id="step-3" class="step-content step-hidden space-y-6">
                     <h2 class="text-xl font-semibold text-gray-800">Langkah 3: Personalisasi (Opsional)</h2>
                     <div>
                        <label class="block mb-2 text-sm font-medium text-gray-700">Logo Usaha</label>
                        <div id="logo-dropzone" class="relative flex flex-col items-center justify-center w-full h-40 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                            <div id="logo-prompt" class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-4-4V6a2 2 0 012-2h10a2 2 0 012 2v6a4 4 0 01-4 4H7z" /></svg>
                                <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Klik untuk unggah</span> atau seret file ke sini</p>
                                <p class="text-xs text-gray-500">PNG, JPG (MAX. 2MB)</p>
                            </div>
                            <img id="logo-preview" src="" class="hidden h-full w-full object-contain rounded-lg" alt="Logo Preview"/>
                            <input id="logo" type="file" class="opacity-0 absolute inset-0 w-full h-full cursor-pointer" accept="image/png, image/jpeg">
                        </div>
                    </div>
                    <div>
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-700">Alamat Usaha Singkat</label>
                        <input type="text" id="address" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50" placeholder="Contoh: Jl. Melati No. 10, Jakarta">
                    </div>
                </div>
            </form>
        </div>

        <!-- Navigation Buttons -->
        <div class="mt-10 flex justify-between">
            <button id="prevBtn" class="px-6 py-2 bg-gray-200 text-secondary font-semibold rounded-lg hover:bg-gray-300 disabled:opacity-50 disabled:cursor-not-allowed">
                Kembali
            </button>
            <button id="nextBtn" class="px-6 py-2 bg-primary text-white font-semibold rounded-lg hover:bg-primary/90 disabled:opacity-50 disabled:cursor-not-allowed">
                Lanjutkan
            </button>
             <button id="submitBtn" class="hidden px-6 py-2 flex items-center justify-center bg-success text-white font-semibold rounded-lg hover:bg-success/90 disabled:opacity-50 disabled:cursor-not-allowed">
                <span class="btn-text">Simpan & Masuk ke Dashboard</span>
                <svg class="btn-spinner animate-spin h-5 w-5 text-white hidden ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
            </button>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            let currentStep = 1;
            const totalSteps = 3;

            const steps = {
                1: { content: document.getElementById('step-1'), indicator: document.getElementById('step-indicator-1'), label: document.getElementById('step-label-1') },
                2: { content: document.getElementById('step-2'), indicator: document.getElementById('step-indicator-2'), label: document.getElementById('step-label-2') },
                3: { content: document.getElementById('step-3'), indicator: document.getElementById('step-indicator-3'), label: document.getElementById('step-label-3') },
            };
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const submitBtn = document.getElementById('submitBtn');

            const inputs = {
                business_name: document.getElementById('business_name'),
                business_type: document.getElementById('business_type'),
                start_date: document.getElementById('start_date'),
                initial_cash: document.getElementById('initial_cash'),
            };

            const updateUI = () => {
                Object.values(steps).forEach((step, index) => {
                    const stepNumber = index + 1;
                    step.content.classList.toggle('step-visible', stepNumber === currentStep);
                    step.content.classList.toggle('step-hidden', stepNumber !== currentStep);
                });

                for (let i = 1; i <= totalSteps; i++) {
                    const step = steps[i];
                    if (i < currentStep) { 
                        step.indicator.classList.add('bg-success', 'border-success', 'text-white');
                        step.indicator.classList.remove('bg-primary', 'border-primary', 'bg-white', 'border-gray-300', 'text-secondary');
                        step.indicator.innerHTML = '&#10003;'; 
                        step.label.classList.add('font-semibold', 'text-secondary');
                        step.label.classList.remove('text-primary', 'text-gray-400');
                    } else if (i === currentStep) { 
                        step.indicator.classList.add('bg-primary', 'border-primary', 'text-white');
                        step.indicator.classList.remove('bg-success', 'border-success', 'bg-white', 'border-gray-300', 'text-secondary');
                        step.indicator.innerHTML = i;
                        step.label.classList.add('font-semibold', 'text-primary');
                        step.label.classList.remove('text-secondary', 'text-gray-400');
                    } else { 
                        step.indicator.classList.add('bg-white', 'border-gray-300', 'text-secondary');
                        step.indicator.classList.remove('bg-primary', 'border-primary', 'bg-success', 'border-success', 'text-white');
                        step.indicator.innerHTML = i;
                        step.label.classList.add('font-medium', 'text-gray-400');
                        step.label.classList.remove('text-primary', 'text-secondary');
                    }
                    
                    const line = step.indicator.nextElementSibling;
                    if(line) {
                         line.classList.toggle('border-primary', i < currentStep);
                         line.classList.toggle('border-gray-300', i >= currentStep);
                    }
                }

                prevBtn.disabled = currentStep === 1;
                prevBtn.classList.toggle('hidden', currentStep === 1);
                nextBtn.classList.toggle('hidden', currentStep === totalSteps);
                submitBtn.classList.toggle('hidden', currentStep !== totalSteps);
            };
            
            const validateStep = () => {
                if (currentStep === 1) {
                    return inputs.business_name.value.trim() !== '' && inputs.business_type.value !== '';
                }
                if (currentStep === 2) {
                    return inputs.start_date.value !== '' && inputs.initial_cash.value !== '';
                }
                return true; 
            };
            
            const handleValidation = () => {
                nextBtn.disabled = !validateStep();
            };

            Object.values(inputs).forEach(input => {
                input.addEventListener('input', handleValidation);
            });

            nextBtn.addEventListener('click', () => {
                if (validateStep() && currentStep < totalSteps) {
                    currentStep++;
                    updateUI();
                    handleValidation();
                }
            });

            prevBtn.addEventListener('click', () => {
                if (currentStep > 1) {
                    currentStep--;
                    updateUI();
                    handleValidation();
                }
            });

            submitBtn.addEventListener('click', () => {
                if (validateStep()) {
                    const btnText = submitBtn.querySelector('.btn-text');
                    const spinner = submitBtn.querySelector('.btn-spinner');

                    btnText.textContent = 'Menyimpan...';
                    spinner.classList.remove('hidden');
                    submitBtn.disabled = true;

                    setTimeout(() => {
                        alert('Pengaturan Usaha Berhasil Disimpan!');
                        window.location.href = '#'; 
                    }, 2000);
                }
            });

            const dropzone = document.getElementById('logo-dropzone');
            const fileInput = document.getElementById('logo');
            const preview = document.getElementById('logo-preview');
            const prompt = document.getElementById('logo-prompt');

            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                dropzone.addEventListener(eventName, e => {
                    e.preventDefault();
                    e.stopPropagation();
                });
            });

            ['dragenter', 'dragover'].forEach(eventName => {
                dropzone.addEventListener(eventName, () => dropzone.classList.add('drag-over'));
            });

            ['dragleave', 'drop'].forEach(eventName => {
                dropzone.addEventListener(eventName, () => dropzone.classList.remove('drag-over'));
            });
            
            const handleFile = (file) => {
                 if (file && file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        preview.src = e.target.result;
                        preview.classList.remove('hidden');
                        prompt.classList.add('hidden');
                    };
                    reader.readAsDataURL(file);
                }
            };
            
            dropzone.addEventListener('drop', e => {
                handleFile(e.dataTransfer.files[0]);
            });
            fileInput.addEventListener('change', e => {
                handleFile(e.target.files[0]);
            });

            updateUI();
            handleValidation();
        });
    </script>
</body>
</html>