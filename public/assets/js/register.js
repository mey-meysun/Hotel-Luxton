// const form = document.getElementById('registrationForm');

// form.addEventListener('submit', (e) => {
//     e.preventDefault(); // Mencegah reload halaman

//     const fullName = document.getElementById('fullName').value.trim();
//     const email = document.getElementById('email').value.trim();
//     const username = document.getElementById('username').value.trim();
//     const password = document.getElementById('password').value;
//     const phone = document.getElementById('phone').value.trim();

//     // Validasi
//     if (!fullName || !email || !username || !password || !phone) {
//         alert('Mohon lengkapi semua data!');
//         return;
//     }

//     if (!isValidEmail(email)) {
//         alert('Email tidak valid!');
//         return;
//     }

//     if (password.length < 6) {
//         alert('Password harus minimal 6 karakter!');
//         return;
//     }

//     if (!isValidPhone(phone)) {
//         alert('Nomor telepon hanya boleh berisi angka!');
//         return;
//     }

//     // Jika semua validasi lolos
//     alert('Registrasi berhasil!\nSelamat datang, ' + fullName);
//     form.reset(); // Reset form
// });

// // Fungsi validasi email
// const isValidEmail = (email) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);

// // Fungsi validasi nomor telepon
// const isValidPhone = (phone) => /^[0-9]+$/.test(phone);
