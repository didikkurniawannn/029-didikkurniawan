var USER = {}; // Ganti ini dengan implementasi USER yang sesuai

// Ambil nilai cookie 'accessCode'
function getCookie(name) {
     const cookies = document.cookie.split('; ');
     for (const cookie of cookies) {
          if (cookie.startsWith(name + '=')) {
               return cookie;
          }
     }
     return null;
}

//console.log(document.cookie);

var accessCode = getCookie('accessCode'); // Pastikan ini sesuai dengan nama cookie yang digunakan

if (accessCode) {
     // Gunakan nilai 'accessCode' untuk membuat token
     let token = accessCode;
     // Sekarang, variabel 'token' berisi token yang dapat digunakan dalam permintaan HTTP
     //console.log('accessCode:', token);
} else {
     window.location.href = 'https://ssov2.jamkrida-jabar.co.id/#/login?client_id=8855f0414037714b1fe2ae7aa9ba27fe';
     //console.log('Cookie accessCode tidak ditemukan.');
}

async function makeAjaxRequest() {
     return new Promise((resolve, reject) => {
          $.ajax({
               type: 'GET',
               url: window.location.origin + '/api/checkCookies',
               data: {
                    accessCode: token
               },
               success: function (data) {
                    resolve(data);
               },
               error: function (xhr) {
                    reject(xhr);
               }
          });
     });
}

var LOGGING = async () => {
     try {
          const data = await makeAjaxRequest();
          // Tangani respons sukses di sini
          const response = JSON.parse(data);
          USER.setUser(response.data);
          USER.setModule(response.module);
          // Gantilah ini dengan pengalihan yang sesuai
          window.location.href = '/';
     } catch (error) {
          // Tangani kesalahan jika ada
          console.log('Error cookies tidak ditemukan');
          console.error(error);

          // Jika ada kesalahan, Anda bisa memutuskan untuk tetap di halaman saat ini atau mengarahkan ke halaman lain sesuai kebutuhan.
          // Contoh: window.location.href = '/halaman-error';
     }
};

