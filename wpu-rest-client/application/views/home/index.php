

    <div class="jumbotron" id="home">
      <div class="container">
        <div class="text-center">
          <img src="<?= base_url(); ?>assets/img/anita.jpg" class="rounded-circle img-thumbnail">
          <h1 class="display-4">Anita</h1>
          <h3 class="lead">Mahasiswa | Penari | Menari</h3>
        </div>
      </div>
    </div>

    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>About Me</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/1.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Lahir di Koto berapak tanggal 07 Mei 2004.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/2.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Sekolah Dasar di SD 14 Lubuk Aur dan Sekolah Menengah Pertama di Mtsn 2 Pesisir Selatan.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/3.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Sekolah Menengah Atas di Mann 1 Pesisir Selatan dengan Jurusan MIPA dan Lulus di Tahun 2022.</p>
              </div>
            </div>
          </div>   
        </div>

        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/4.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Kuliah di Universitas Islam Negeri Imam Bonjol Padang pada angkatan 2022.</p>
              </div>
            </div>
          </div> 
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/5.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Fakultas Sains dan Teknologi dengan Program Studi Sistem Informasi.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/6.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Hobi saya Menari,Membaca Webtoon dan berbisnis/jualan juga yang bisa menghasilkan uang dengan sendiri. Warna Kesukaan Saya Brown dan Pink</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Contact -->
    <section class="contact bg-light" id="contact">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Contact</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card bg-primary text-white mb-4 text-center">
              <div class="card-body">
                <h5 class="card-title">Contact Me</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            
            <ul class="list-group mb-4">
              <li class="list-group-item"><h3>Location</h3></li>
              <li class="list-group-item">My Home</li>
              <li class="list-group-item">KotoBerapak,kec Bayang</li>
              <li class="list-group-item">West Sumatera, Indonesia</li>
            </ul>
          </div>

          <div class="col-lg-6">
            
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-primary">Send Message</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>
