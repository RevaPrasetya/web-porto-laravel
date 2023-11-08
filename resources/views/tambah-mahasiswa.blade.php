<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form - Prognet Laravel</title>
    <link href="{{ asset('lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    
</head>
<body>
    
    <div class="container">
        <main>
          <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="{{asset('icon/soft-star-red.svg')}}" alt="" width="72" height="57">
            <h2>Form Mahasiswa</h2>
            <p class="lead">Form untuk memasukkan data mahasiswa.</p>
            <a href="/mahasiswa" class="btn btn-primary btn-sm">Lihat daftar kartu mahasiswa</a>
          </div>
      
          <div class="row g-5">
            <div class="col-md-12 col-lg-12">
              <form class="needs-validation" action="/tambah-mahasiswa" method="POST" novalidate>
                @csrf
                <div class="row g-3">
                    <div class="col-6">
                      <label for="gambar_profil" class="form-label">Link Gambar Profil</label>
                      <input type="text" class="form-control" name="gambar_profil" id="gambar_profil" placeholder="http:// .jpg" required>
                      <div class="invalid-feedback">
                        Masukan gambar profil
                      </div>
                    </div>
                    <div class="col-6">
                      <label for="nim" class="form-label">NIM</label>
                      <input type="number" class="form-control" name="nim" id="nim" placeholder="220*******" required>
                      <div class="invalid-feedback">
                        Masukan Nomor Induk Mahasiswa anda.
                      </div>
                    </div>
    
                  <div class="col-sm-6">
                    <label for="firstName" class="form-label">Nama Depan</label>
                    <input type="text" class="form-control" id="firstName" name="first_name" placeholder="" value="" required>
                    <div class="invalid-feedback">
                      Masukan nama depan yang benar
                    </div>
                  </div>
      
                  <div class="col-sm-6">
                    <label for="lastName" class="form-label">Nama Belakang</label>
                    <input type="text" class="form-control" id="lastName" name="last_name" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Masukan nama belakang yang benar
                    </div>
                  </div>
      
                  <label class="mb-1 ">Jenis Kelamin</label>
        
                  <div class="my-3">
                    <div class="form-check">
                      <input id="laki_laki" name="jenis_kelamin" type="radio" class="form-check-input" value="Laki-laki" checked required>
                      <label class="form-check-label" for="laki_laki">Laki laki</label>
                    </div>
                    <div class="form-check">
                      <input id="perempuan" name="jenis_kelamin" type="radio" class="form-check-input" value="Perempuan" required>
                      <label class="form-check-label" for="perempuan">Perempuan</label>
                    </div>
                    <div class="form-check">
                      <input id="rahasia" name="jenis_kelamin" type="radio" class="form-check-input" value="Rahasia" required>
                      <label class="form-check-label" for="rahasia">Rahasia</label>
                    </div>
                  </div>
    
                  <div class="col-12">
                    <label for="email" class="form-label">Email </label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="contoh@example.com" required>
                    <div class="invalid-feedback">
                        Masukan alamat email yang benar
                    </div>
                  </div>
      
                  <div class="col-12">
                    <label for="address" class="form-label">Alamat Rumah</label>
                    <input type="text" class="form-control" id="address" name="alamat" placeholder="Jln Uluwatu" required>
                    <div class="invalid-feedback">
                        Masukan alamat tempat tinggal yang benar
                    </div>
                  </div>
      
                  <div class="col-md-6">
                    <label for="faculty" class="form-label">Fakultas</label>
                    <select class="form-select" id="faculty" name="fakultas" required>
                      <option value="">Pilih Fakultas</option>
                      <option>Teknik</option>
                      <option>MIPA</option>
                      <option>Ekonomi dan Bisnis</option>
                      <option>Pariwisata</option>
                      <option>Kedokteran</option>
                    </select>
                    <div class="invalid-feedback">
                        Pilih fakultas yang benar
                    </div>
                  </div>
      
                  <div class="col-md-6">
                    <label for="prodi" class="form-label">Program Studi</label>
                    <select class="form-select" id="prodi" name="prodi" required>
                      <option value="">Pilih Program Studi</option>
                      <option>Teknologi Informasi</option>
                      <option>Teknik Mesin</option>
                      <option>Teknik Industri</option>
                      <option>Teknologi Industri</option>
                      <option>Arsitektur</option>
                      <option>Teknik Elektro</option>
                    </select>
                    <div class="invalid-feedback">
                        Pilih program studi yang benar
                    </div>
                  </div>
                </div>
      
                <hr class="my-4">
      
                <button class="w-100 btn btn-primary btn-lg" type="submit">Masukkan data</button>
              </form>
            </div>
          </div>
        </main>
      
        <footer class="my-5 pt-5 text-body-secondary text-center text-small">
          <p class="mb-1">&copy; Reva Prasetya</p>
        </footer>
      </div>


    <script src="{{ asset('lib/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript">
        window.addEventListener("load", function () {
        // Mendapatkan element formnya
        const form = document.querySelector("form.needs-validation");
    
        form.addEventListener("submit", function (event) {
          // Mencegah form untuk tersubmit terlebih dahulu
          event.preventDefault();
    
          // Jalankan fungsi Validasi
          const isValid = validateForm();
    
          // Jika fungsi validateForm() memberikan nilai true, maka isi form sudah valid
          if (isValid) {
            //Kode di bawah berguna untuk lanjut submit sperti biasa
            form.submit();
          }
        });
    
        function validateForm() {
          // Melakukan reset ulang tampilan validasi di form
          resetValidationStyles();
    
          // Variabel sebagai patokan validasi form true atau false
          let isValid = true;
    
          // Validasi NIM
          const nimInput = document.getElementById('nim');
            if (!nimInput.checkValidity() || !isNumeric(nimInput.value)) {
              isValid = false;
              displayError(nimInput);
            }
    
          // Validasi First Name
          const firstNameInput = document.getElementById("firstName");
          if (!firstNameInput.checkValidity()) {
            isValid = false;
            displayError(firstNameInput);
          }
    
          // Validasi Last Name
          const lastNameInput = document.getElementById("lastName");
          if (!lastNameInput.checkValidity()) {
            isValid = false;
            displayError(lastNameInput);
          }
    
          // Validasi Email
          const emailInput = document.getElementById("email");
          if (!emailInput.checkValidity() || !isValidEmail(emailInput.value)) {
            isValid = false;
            displayError(emailInput);
          }
    
          // Validasi Address atau Alamat
          const addressInput = document.getElementById("address");
          if (!addressInput.checkValidity()) {
            isValid = false;
            displayError(addressInput);
          }
    
          // Validasi Faculty
          const facultyInput = document.getElementById("faculty");
          if (!facultyInput.checkValidity()) {
            isValid = false;
            displayError(facultyInput);
          }
    
          // Validasi Program Studi
          const prodiInput = document.getElementById("prodi");
          if (!prodiInput.checkValidity()) {
            isValid = false;
            displayError(prodiInput);
          }
    
          // Memberikan nilai validasi yang baru saja dilakukan, jika false maka proses submit tidak akan berjalan
          return isValid;
        }
    
        function isValidEmail(email) {
          //Menggunakan Regex untuk melakukan validasi email
          const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          return emailRegex.test(email);
        }
    
        function isNumeric(value) {
          //Untuk mengecek apabila benar nilainya berupa angka
          return /^\d+$/.test(value);
        }
    
        function resetValidationStyles() {
          //Mengapus kelas "is-invalid"
          const invalidControls = document.querySelectorAll(".is-invalid");
          invalidControls.forEach((control) => {
            control.classList.remove("is-invalid");
          });
        }
    
        function displayError(inputElement) {
          //Menambahkan kelas "is-invalid" apabila terjadi error pada input
          inputElement.classList.add("is-invalid");
        }
        });
    
      </script>
</body>
</html>