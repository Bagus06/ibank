<?php
require_once '../partials/header.php';
require_once '../../init.php';
$_SESSION['menu'] = 'siswa';
$_SESSION['menuli'] = 'siswaC'; 
?>
<br><br><br>
<!-- Wrapper -->
<div class="wrapper wrapper-content---">
  <!-- Middle Box -->
  <div class="col-lg-12">
    <div class="ibox bg-boxshadow mb-30">
      <!-- Title -->
      <div class="ibox-title basic-form mb-30">
        <div align="center">
          <img src="../../Public/bg/icon-1.png" alt="" style="width: 5%;">
        </div>
        <h5 align="center">Register to I-Bank Class</h5>
      </div>
      <!-- Ibox-content -->
      <div class="ibox-content">
        <p>Create admin account</p>
        <form action="../../App/modal/Validate.php?aksi1=addadminUser" method="post">
          <!-- Form Start -->
          <div class="form-group row"><label class="col-lg-2 col-form-label">NIS</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="nis" placeholder="NIS" required="">
            </div>
          </div>
          <div class="form-group row"><label class="col-lg-2 col-form-label">Username</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="username" placeholder="Username" required="">
            </div>
          </div>
          <div class="form-group row"><label class="col-lg-2 col-form-label">Password</label>
            <div class="col-lg-10">
              <input type="password" class="form-control" name="password" placeholder="password" required="">
            </div>
          </div>
            <div class="form-group row"><label class="col-sm-2 col-form-label">Kelas</label>
            <div class="col-sm-10">
              <select class="form-control mb-15" name="kelas">
                <option>--Choice Class--</option>
                <?php foreach ($kelas->tampil() as $key): ?>
                  <option value="<?php echo $key['id_kelas']; ?>"><?php echo $key['nama_kelas']; ?></option>
                <?php endforeach ?>
              </select>
              </div>
            </div>
            <div class="ap-line-dashed"></div>
          <button type="submit" class="btn btn-primary register">Register</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include '../partials/footer.php'; ?>