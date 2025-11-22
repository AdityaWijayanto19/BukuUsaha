<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Buku Usaha</title>
    
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <script>
      // Konfigurasi custom untuk Tailwind CSS
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: {
              sans: ['Poppins', 'system-ui', 'sans-serif'],
            },
            colors: {
              'primary': '#800000',   // Maroon Klasik
              'secondary': '#4A5568', // Abu-abu Biru
              'success': '#28A745',   // Hijau Stabil (Income)
              'danger': '#DC3545',    // Merah Alarm (Expense)
            }
          }
        }
      }
    </script>
</head>
<body class="bg-gray-100">

    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-4xl flex flex-col m-6 bg-white shadow-xl rounded-2xl md:flex-row">
            
            <!-- Left Side: Register Form -->
            <div class="w-full md:w-1/2 p-8 md:p-12">
                <a href="#" class="text-2xl font-bold text-primary">Buku Usaha</a>
                <h1 class="mt-6 text-3xl font-bold text-gray-900">Buat Akun Baru</h1>
                <p class="mt-2 text-gray-600">Daftar gratis untuk mulai mengelola usaha Anda.</p>
                
                <form id="registerForm" class="mt-8 space-y-4">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" id="name"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-primary/50"
                            placeholder="Contoh: Budi Santoso">
                        <span id="name-error" class="text-danger text-xs mt-1 hidden">Nama wajib diisi.</span>
                    </div>

                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-primary/50"
                            placeholder="contoh@usahaku.com">
                        <span id="email-error" class="text-danger text-xs mt-1 hidden">Format email tidak valid.</span>
                    </div>
                    
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Password</label>
                        <div class="relative">
                            <input type="password" id="password"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-primary/50">
                            <button type="button" class="absolute inset-y-0 right-0 px-3 flex items-center text-gray-500 password-toggle">
                                <svg class="eye-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                                <svg class="eye-off-icon hidden" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7 .527-1.662 1.49-3.14 2.694-4.306M14 14l-4-4m-4 0a9.954 9.954 0 011.666-3.033M17.583 6.417A9.953 9.953 0 0119.542 12c-1.274 4.057-5.064 7-9.542 7a10.05 10.05 0 01-1.875-.175" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l22 22" /></svg>
                            </button>
                        </div>
                        <span id="password-error" class="text-danger text-xs mt-1 hidden">Password minimal 8 karakter.</span>
                    </div>

                    <div>
                        <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-700">Konfirmasi Password</label>
                        <div class="relative">
                            <input type="password" id="confirm-password"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-primary/50">
                             <button type="button" class="absolute inset-y-0 right-0 px-3 flex items-center text-gray-500 password-toggle">
                                <svg class="eye-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                                <svg class="eye-off-icon hidden" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7 .527-1.662 1.49-3.14 2.694-4.306M14 14l-4-4m-4 0a9.954 9.954 0 011.666-3.033M17.583 6.417A9.953 9.953 0 0119.542 12c-1.274 4.057-5.064 7-9.542 7a10.05 10.05 0 01-1.875-.175" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l22 22" /></svg>
                            </button>
                        </div>
                        <span id="confirm-password-error" class="text-danger text-xs mt-1 hidden">Password tidak cocok.</span>
                    </div>

                    <button type="submit"
                        class="w-full flex justify-center items-center bg-primary text-white py-3 mt-4 rounded-lg font-semibold hover:bg-primary/90 transition-colors disabled:bg-primary/70">
                        <span class="btn-text">Daftar Akun</span>
                        <svg class="animate-spin h-5 w-5 text-white hidden btn-spinner" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                    </button>
                </form>

                <div class="mt-6 text-center text-sm">
                    <span class="text-gray-600">Sudah punya akun?</span>
                    <a href="#" class="font-semibold text-primary hover:underline">Masuk di sini</a>
                </div>
            </div>

            <!-- Right Side: Info Panel -->
            <div class="w-full md:w-1/2 bg-primary rounded-r-2xl hidden md:flex items-center justify-center p-12">
                <div class="text-white">
                    <h2 class="text-3xl font-bold">Hanya beberapa langkah lagi!</h2>
                    <p class="mt-2 text-white/80 mb-8">Setelah mendaftar, Anda bisa langsung:</p>
                    <ul class="space-y-6">
                        <li class="flex items-start">
                            <div class="flex-shrink-0 flex items-center justify-center w-8 h-8 bg-white/30 rounded-full font-bold text-white mr-4">1</div>
                            <div>
                                <h3 class="font-semibold">Tambahkan Usaha Anda</h3>
                                <p class="text-white/80 text-sm">Masukkan nama usaha Anda, misalnya "Warung Makan Berkah".</p>
                            </div>
                        </li>
                         <li class="flex items-start">
                            <div class="flex-shrink-0 flex items-center justify-center w-8 h-8 bg-white/30 rounded-full font-bold text-white mr-4">2</div>
                            <div>
                                <h3 class="font-semibold">Catat Transaksi Pertama</h3>
                                <p class="text-white/80 text-sm">Mulai catat pemasukan dan pengeluaran harian.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const registerForm = document.getElementById('registerForm');
            const nameInput = document.getElementById('name');
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            const confirmPasswordInput = document.getElementById('confirm-password');

            // --- Password Visibility Toggle for both fields ---
            document.querySelectorAll('.password-toggle').forEach(toggle => {
                toggle.addEventListener('click', (event) => {
                    const button = event.currentTarget;
                    const input = button.previousElementSibling;
                    const eyeIcon = button.querySelector('.eye-icon');
                    const eyeOffIcon = button.querySelector('.eye-off-icon');

                    if (input.type === 'password') {
                        input.type = 'text';
                        eyeIcon.classList.add('hidden');
                        eyeOffIcon.classList.remove('hidden');
                    } else {
                        input.type = 'password';
                        eyeIcon.classList.remove('hidden');
                        eyeOffIcon.classList.add('hidden');
                    }
                });
            });

            // --- Validation Functions ---
            function validateRequired(input, errorElement, message) {
                if (input.value.trim() === '') {
                    errorElement.textContent = message;
                    errorElement.classList.remove('hidden');
                    return false;
                }
                errorElement.classList.add('hidden');
                return true;
            }

            function validateEmail(input, errorElement) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(input.value)) {
                    errorElement.textContent = 'Format email tidak valid.';
                    errorElement.classList.remove('hidden');
                    return false;
                }
                errorElement.classList.add('hidden');
                return true;
            }

            function validatePassword(input, errorElement) {
                if (input.value.length < 8) {
                    errorElement.textContent = 'Password minimal 8 karakter.';
                    errorElement.classList.remove('hidden');
                    return false;
                }
                errorElement.classList.add('hidden');
                return true;
            }

            function validateConfirmPassword(pass1, pass2, errorElement) {
                if (pass1.value !== pass2.value) {
                    errorElement.textContent = 'Password tidak cocok.';
                    errorElement.classList.remove('hidden');
                    return false;
                }
                errorElement.classList.add('hidden');
                return true;
            }
            
            // --- Attach blur listeners ---
            nameInput.addEventListener('blur', () => validateRequired(nameInput, document.getElementById('name-error'), 'Nama wajib diisi.'));
            emailInput.addEventListener('blur', () => validateEmail(emailInput, document.getElementById('email-error')));
            passwordInput.addEventListener('blur', () => validatePassword(passwordInput, document.getElementById('password-error')));
            confirmPasswordInput.addEventListener('blur', () => validateConfirmPassword(passwordInput, confirmPasswordInput, document.getElementById('confirm-password-error')));

            // --- Form Submission Logic ---
            registerForm.addEventListener('submit', (event) => {
                event.preventDefault();
                
                const isNameValid = validateRequired(nameInput, document.getElementById('name-error'), 'Nama wajib diisi.');
                const isEmailValid = validateEmail(emailInput, document.getElementById('email-error'));
                const isPasswordValid = validatePassword(passwordInput, document.getElementById('password-error'));
                const isConfirmPasswordValid = validateConfirmPassword(passwordInput, confirmPasswordInput, document.getElementById('confirm-password-error'));

                if (isNameValid && isEmailValid && isPasswordValid && isConfirmPasswordValid) {
                    const submitButton = registerForm.querySelector('button[type="submit"]');
                    const btnText = submitButton.querySelector('.btn-text');
                    const spinner = submitButton.querySelector('.btn-spinner');

                    btnText.textContent = 'Memproses...';
                    spinner.classList.remove('hidden');
                    submitButton.disabled = true;
                    
                    setTimeout(() => {
                        alert('Pendaftaran berhasil! Anda akan diarahkan ke dashboard.');
                        window.location.href = '#'; // Ganti dengan URL dashboard
                    }, 2000);
                }
            });
        });
    </script>
</body>
</html>