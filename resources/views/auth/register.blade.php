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
<body class="bg-gray-50">

    <div class="flex items-center justify-center min-h-screen">
        <div class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
            <!-- Left Side: Register Form -->
            <div class="flex flex-col justify-center p-8 md:p-14">
                <span class="mb-3 text-4xl font-bold">Buat Akun Baru</span>
                <span class="font-light text-gray-500 mb-8">
                    Daftar gratis untuk mulai mencatat keuangan usaha Anda.
                </span>
                
                <form id="registerForm">
                    <div class="py-2">
                        <label for="name" class="mb-2 text-md font-medium">Nama Lengkap</label>
                        <input type="text" id="name" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-primary">
                        <span id="name-error" class="text-danger text-sm mt-1 hidden">Nama tidak boleh kosong.</span>
                    </div>
                    <div class="py-2">
                        <label for="email" class="mb-2 text-md font-medium">Email</label>
                        <input type="email" id="email" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-primary">
                        <span id="email-error" class="text-danger text-sm mt-1 hidden">Email tidak valid atau kosong.</span>
                    </div>
                    <div class="py-2">
                        <label for="password" class="mb-2 text-md font-medium">Password</label>
                        <input type="password" id="password" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-primary">
                        <span id="password-error" class="text-danger text-sm mt-1 hidden">Password minimal 6 karakter.</span>
                    </div>
                     <div class="py-2">
                        <label for="confirmPassword" class="mb-2 text-md font-medium">Konfirmasi Password</label>
                        <input type="password" id="confirmPassword" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-primary">
                        <span id="confirmPassword-error" class="text-danger text-sm mt-1 hidden">Password tidak cocok.</span>
                    </div>

                    <button type="submit"
                        class="w-full bg-primary text-white p-3 rounded-lg my-6 hover:bg-black hover:text-white transition-colors">
                        Daftar Sekarang
                    </button>
                </form>
                <p class="text-xs text-gray-400 text-center">Dengan mendaftar, Anda setuju dengan <a href="#" class="text-primary hover:underline">Syarat & Ketentuan</a> Buku Usaha.</p>

                <div class="text-center text-gray-500 mt-6">
                    Sudah punya akun?
                    <a href="#" class="font-bold text-primary hover:underline">Masuk di sini</a>
                </div>
            </div>

            <!-- Right Side: Educational Panel -->
            <div class="relative bg-primary rounded-r-2xl hidden md:block">
                 <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white p-12 w-[450px]">
                    <h2 class="text-3xl font-bold mb-6">Langkah Selanjutnya...</h2>
                    <p class="text-lg font-light leading-relaxed mb-6">Setelah mendaftar, Anda akan kami pandu untuk:</p>
                    <ul class="space-y-4 text-left font-light">
                        <li class="flex items-start">
                            <span class="flex items-center justify-center font-bold text-primary bg-white rounded-full w-8 h-8 mr-4">1</span>
                            <span>Menambahkan usaha pertama Anda (misal: "Laundry Melati", "Warung Bu Siti").</span>
                        </li>
                        <li class="flex items-start">
                            <span class="flex items-center justify-center font-bold text-primary bg-white rounded-full w-8 h-8 mr-4">2</span>
                            <span>Mencatat pemasukan atau pengeluaran pertama Anda.</span>
                        </li>
                    </ul>
                    <p class="mt-8 text-white/80 text-sm">Anda bisa menambahkan lebih dari satu usaha dalam satu akun. Tenang saja, semua bisa diatur nanti!</p>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const registerForm = document.getElementById('registerForm');
            // Dapatkan semua input dan elemen error
            const nameInput = document.getElementById('name');
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            const confirmPasswordInput = document.getElementById('confirmPassword');
            
            const nameError = document.getElementById('name-error');
            const emailError = document.getElementById('email-error');
            const passwordError = document.getElementById('password-error');
            const confirmPasswordError = document.getElementById('confirmPassword-error');
            
            registerForm.addEventListener('submit', function(event) {
                event.preventDefault();
                let isValid = true;

                // Reset semua error
                [nameError, emailError, passwordError, confirmPasswordError].forEach(e => e.classList.add('hidden'));

                // Validasi Nama
                if (nameInput.value.trim() === '') {
                    nameError.classList.remove('hidden');
                    isValid = false;
                }
                
                // Validasi Email Sederhana
                if (!emailInput.value.includes('@') || emailInput.value.trim() === '') {
                    emailError.classList.remove('hidden');
                    isValid = false;
                }
                
                // Validasi Password
                if (passwordInput.value.length < 6) {
                    passwordError.classList.remove('hidden');
                    isValid = false;
                }

                // Validasi Konfirmasi Password
                if (passwordInput.value !== confirmPasswordInput.value || confirmPasswordInput.value === '') {
                    confirmPasswordError.classList.remove('hidden');
                    isValid = false;
                }

                if (isValid) {
                    alert('Pendaftaran berhasil! Mengarahkan ke Dashboard...');
                    window.location.href = '#'; // Ganti dengan link dashboard.html
                }
            });
        });
    </script>
</body>
</html>