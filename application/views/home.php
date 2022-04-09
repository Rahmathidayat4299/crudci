<!DOCTYPE Html>
<Html>
<Head>
    <Meta Charset="Utf-8">
    <Meta Http-Equiv="X-UA-Compatible" Content="IE=Edge">
    <Title>Halaman Home</Title>
    <Link Rel="Stylesheet" Href="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</Head>
<Body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url ('index.php/loginakses/') ?>">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?php echo base_url ('index.php/loginakses/') ?>">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?php echo base_url ('index.php/loginakses/formInput') ?>">Features</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </div>
  </div>
</nav>
    <h1>Data Mahasiswa Unilak</h1>
    <button type="button" class="btn btn-dark"><a Href= "<?php echo base_url ('index.php/loginakses/formInput') ?>">Tambah Mahasiswa</a></button>
    <Br>
    <Br>
   <div class="col-md-8">
   <div class="table-responsive-sm">
   <table class="table table-sm" >
        <thead>
        <tr class="table-success">
            
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $count = 0;
        foreach($data_mhs as $row){
            

        ?>
        
        <tr class="table-primary">
            
            <td><?php echo $row -> nim?></td>
            <td><?php echo $row -> nama?></td>
            <td><?php echo $row -> jurusan?></td>
            <td> <button type="button" class="btn btn-warning"><a  href="<?php echo base_url ('index.php/loginakses/formEdit/'),$row->nim?>">edit</a></button>    <button type="button"class="btn btn-danger" ><a href="<?php echo base_url ('index.php/loginakses/AksiDeleteData/'),$row->nim?>">delete</a> </button></td>
        </tr>
       <?php } ?>

        </tbody>
       
       
    </table>
   </div>
   </div>

   <footer class="page-footer font-small blue">

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2022 Rahmat Hidayat:
  <a href="/">  2055201151</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
</Body>
</Html>