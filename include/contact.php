    <!-- Page Content -->
    <div class="page-heading contact-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Kontak</h4>
              <h2>Mari Sewa Kamera &amp; Lensa Disini</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Kirim Pesan anda disini.</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-4">
            <ul class="accordion">
              <li>
                  <a>Cara Sewa di Kamera Kita</a>
                  <div class="content">
                    <p><strong>1. Pesan/Pinjam</strong></p>
                    <p>Untuk pesan kamu bisa datang langung ke Kamera kita, atau pesan terlebih dahulu melalui Whatsapp </p>
                    <p><strong>2. Pengambilan alat</strong></p>
                    <p>Setelah kamu menyelesaikan pesanan via Whatsapp. Kamu bisa mengambil peralatan sesuai dengan waktu dan lokasi pesanan kamu. </p>
                    <p><strong>3. Periode Pemakaian</strong></p>
                    <p>Selamat memakai peralatan yang telah kamu pinjam dengan sepenuh hati. </p>
                    <p><strong>4. Pengembalian alat</strong></p>
                    <p>Setelah selesai memakai peralatan, kamu bisa mengembalikan peralatan yang telah dipinjam ke Kamera Kita. </p>
                  
                  </div>
              </li>
              <li>
                  <a>Hubungi Kami</a>
                  <div class="content">
                      <p>Hubungi kami melalui : </p>
                        <?php 
                            $sql_kontak = "SELECT media, kontak FROM kontak";
                            $query_kontak = mysqli_query($koneksi, $sql_kontak);
                            while($data_kontak = mysqli_fetch_row($query_kontak)){
                                $media = $data_kontak[0];
                                $kontak = $data_kontak[1];
                        ?>
                          <p><?php if($media=="Whatsapp"){echo "<i class='fab fa-whatsapp'></i> ".$kontak;}elseif($media=="Gmail"){echo "<i class='far fa-envelope'></i> ".$kontak;} ?></p>
                        <?php
                            }
                        ?>
                      </ul>
                  </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

