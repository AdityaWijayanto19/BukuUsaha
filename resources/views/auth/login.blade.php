<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Buku Usaha</title>
    
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
</head>
<body class="bg-gray-100">

    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-4xl flex flex-col m-6 bg-white shadow-xl rounded-2xl md:flex-row">
            
            <div class="w-full md:w-1/2 p-8 md:p-12">
                <a href="#" class="text-2xl font-bold text-primary">Buku Usaha</a>
                <h1 class="mt-6 text-3xl font-bold text-gray-900">Selamat Datang Kembali</h1>
                <p class="mt-2 text-gray-600">Silakan masukkan email dan password Anda.</p>
                
                <form id="loginForm" class="mt-8 space-y-5">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-primary/50"
                            placeholder="contoh@usahaku.com">
                        <span id="email-error" class="text-danger text-xs mt-1 hidden">Email wajib diisi.</span>
                    </div>
                    
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Password</label>
                        <div class="relative">
                            <input type="password" id="password" name="password"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-primary/50">
                            <button type="button" id="password-toggle" class="absolute inset-y-0 right-0 px-3 flex items-center text-gray-500">                             
                                <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                                <svg id="eye-off-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7 .527-1.662 1.49-3.14 2.694-4.306M14 14l-4-4m-4 0a9.954 9.954 0 011.666-3.033M17.583 6.417A9.953 9.953 0 0119.542 12c-1.274 4.057-5.064 7-9.542 7a10.05 10.05 0 01-1.875-.175" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l22 22" /></svg>
                            </button>
                        </div>
                        <span id="password-error" class="text-danger text-xs mt-1 hidden">Password wajib diisi.</span>
                    </div>

                    <button type="submit"
                        class="w-full flex justify-center items-center bg-primary text-white py-3 rounded-lg font-semibold hover:bg-primary/90 transition-colors disabled:bg-primary/70">
                        <span class="btn-text">Masuk</span>
                        <svg class="animate-spin h-5 w-5 text-white hidden btn-spinner" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                    </button>
                </form>

                <div class="mt-6 text-center text-sm">
                    <span class="text-gray-600">Belum punya akun?</span>
                    <a href="#" class="font-semibold text-primary hover:underline">Daftar di sini</a>
                </div>
            </div>

            <div class="w-full md:w-1/2 bg-primary rounded-r-2xl hidden md:flex items-center justify-center p-12">
                <div class="text-white text-center">
                     <svg class="w-48 h-48 mx-auto mb-6" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="20" y="80" width="160" height="100" rx="10" fill="white" fill-opacity="0.2"/>
                        <rect x="35" y="100" width="40" height="60" rx="5" fill="white" fill-opacity="0.5"/>
                        <rect x="85" y="60" width="30" height="100" rx="5" fill="#28A745" fill-opacity="0.7"/>
                        <rect x="125" y="90" width="40" height="70" rx="5" fill="white" fill-opacity="0.5"/>
                        <path d="M40 70C40 58.9543 48.9543 50 60 50H140C151.046 50 160 58.9543 160 70V70H40V70Z" fill="white" fill-opacity="0.3"/>
                    </svg>
                    <h2 class="text-3xl font-bold">Kelola Keuangan Usaha</h2>
                    <p class="mt-2 text-white/80">Catat setiap transaksi dengan mudah dan lihat laporannya secara instan.</p>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const loginForm = document.getElementById('loginForm');
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            const passwordToggle = document.getElementById('password-toggle');
            const eyeIcon = document.getElementById('eye-icon');
            const eyeOffIcon = document.getElementById('eye-off-icon');

            passwordToggle.addEventListener('click', () => {
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    eyeIcon.classList.add('hidden');
                    eyeOffIcon.classList.remove('hidden');
                } else {
                    passwordInput.type = 'password';
                    eyeIcon.classList.remove('hidden');
                    eyeOffIcon.classList.add('hidden');
                }
            });

            function validateField(input, errorElement, message) {
                if (input.value.trim() === '') {
                    errorElement.textContent = message;
                    errorElement.classList.remove('hidden');
                    return false;
                }
                errorElement.classList.add('hidden');
                return true;
            }

            emailInput.addEventListener('blur', () => validateField(emailInput, document.getElementById('email-error'), 'Email wajib diisi.'));
            passwordInput.addEventListener('blur', () => validateField(passwordInput, document.getElementById('password-error'), 'Password wajib diisi.'));

            loginForm.addEventListener('submit', (event) => {
                event.preventDefault();
                
                const isEmailValid = validateField(emailInput, document.getElementById('email-error'), 'Email wajib diisi.');
                const isPasswordValid = validateField(passwordInput, document.getElementById('password-error'), 'Password wajib diisi.');

                if (isEmailValid && isPasswordValid) {
                    const submitButton = loginForm.querySelector('button[type="submit"]');
                    const btnText = submitButton.querySelector('.btn-text');
                    const spinner = submitButton.querySelector('.btn-spinner');

                    btnText.textContent = 'Memproses...';
                    spinner.classList.remove('hidden');
                    submitButton.disabled = true;
                    
                    setTimeout(() => {
                        alert('Login berhasil! Anda akan diarahkan ke dashboard.');
                        window.location.href = '#';
                    }, 2000);
                }
            });
        });
    </script>
</body>
</html>