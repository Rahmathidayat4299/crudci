<!DOCTYPE Html>
    <Html>
    <Head>
        <Title>Halaman Edit</Title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </Head>
    <Body>
    <div class="col-md-3">
        <h3 >Halaman Edit Mahasiswa</h3>
        </div>
       <div class="container">
       <form action = "<?php echo base_url ('index.php/loginakses/AksiEdit') ?>" Method="Post">
               <div class="col-md-3">
                <div class="form-group">
                        <label>NIM</label>
                        <input type="text" name = "nim" class="form-control" value = "<?php echo $data_mhs->nim ?>"  placeholder="Enter nim">
                        
                    </div>
                    <div class="form-group">
                        <label >Nama</label>
                        <input type="text" name = "nama" class="form-control" id="exampleInputPassword1" value = "<?php echo $data_mhs->nama ?>"  placeholder="Nama">
                    </div>

                    <div class="form-group">
                        <label >Jurusan</label>
                        <input  name = "jurusan" class="form-control" id="exampleInputPassword1" value = "<?php echo $data_mhs->jurusan ?>" placeholder="Jurusan">
                    </div>
               </div>

  <button type="submit" class="btn btn-primary">Save</button>
</form>
       </div>
    </Body>
    <footer class="page-footer font-small blue">

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2022 Rahmat Hidayat:
  <a href="/">  2055201151</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
    </Html>