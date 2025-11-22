<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Buku Usaha</title>
    
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
<body class="bg-gray-50">

    <div class="flex items-center justify-center min-h-screen">
        <div class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
            <!-- Left Side: Login Form -->
            <div class="flex flex-col justify-center p-8 md:p-14">
                <span class="mb-3 text-4xl font-bold">Selamat Datang!</span>
                <span class="font-light text-gray-500 mb-8">
                    Silakan masuk untuk melanjutkan ke dashboard Anda
                </span>
                
                <form id="loginForm">
                    <div class="py-4">
                        <label for="email" class="mb-2 text-md font-medium">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-400 focus:outline-none focus:ring-1 focus:ring-primary"
                            placeholder="contoh@gmail.com">
                        <span id="email-error" class="text-danger text-sm mt-1 hidden">Email tidak boleh kosong.</span>
                    </div>
                    <div class="py-4">
                        <label for="password" class="mb-2 text-md font-medium">Password</label>
                        <input type="password" id="password" name="password"
                            class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-400 focus:outline-none focus:ring-1 focus:ring-primary">
                        <span id="password-error" class="text-danger text-sm mt-1 hidden">Password tidak boleh kosong.</span>
                    </div>

                    <button type="submit"
                        class="w-full bg-primary text-white p-3 rounded-lg my-6 hover:bg-black hover:text-white hover:border hover:border-gray-300 transition-colors">
                        Masuk
                    </button>
                </form>

                <div class="text-center text-gray-500">
                    Belum punya akun?
                    <a href="#" class="font-bold text-primary hover:underline">Daftar Sekarang</a>
                </div>
            </div>

            <!-- Right Side: Info Panel -->
            <div class="relative bg-primary rounded-r-2xl hidden md:block">
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white p-12 text-center w-[450px]">
                    <h2 class="text-3xl font-bold mb-4">Buku Usaha</h2>
                    <p class="text-lg font-light leading-relaxed mb-6">Pencatatan keuangan jadi lebih mudah dan rapi.</p>
                    <ul class="space-y-3 text-left font-light">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 mt-1 text-green-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            <span>Catat pemasukan & pengeluaran usaha dengan cepat.</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 mt-1 text-green-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            <span>Cocok untuk laundry, warung, barbershop, dan lainnya.</span>
                        </li>
                         <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 mt-1 text-green-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            <span>Lihat ringkasan keuangan harian dalam satu dashboard.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loginForm = document.getElementById('loginForm');
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            const emailError = document.getElementById('email-error');
            const passwordError = document.getElementById('password-error');

            loginForm.addEventListener('submit', function(event) {
                event.preventDefault(); // Mencegah form submit
                let isValid = true;

                // Reset error messages
                emailError.classList.add('hidden');
                passwordError.classList.add('hidden');

                // Validasi Email
                if (emailInput.value.trim() === '') {
                    emailError.classList.remove('hidden');
                    isValid = false;
                }

                // Validasi Password
                if (passwordInput.value.trim() === '') {
                    passwordError.classList.remove('hidden');
                    isValid = false;
                }

                if (isValid) {
                    // Jika valid, arahkan ke halaman dashboard
                    // Dalam aplikasi nyata, di sini akan ada proses otentikasi
                    alert('Login berhasil! Mengarahkan ke Dashboard...');
                    window.location.href = '#'; // Ganti dengan link dashboard.html
                }
            });
        });
    </script>
</body>
</html>