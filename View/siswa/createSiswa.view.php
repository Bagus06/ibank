<?php
require_once '../partials/header.php';
require_once '../../init.php';
?>
<br><br><br><br><br><br>
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
        <p>Create students account</p>
        <form action="../../App/modal/Validate.php?aksi1=addUser" method="post">
          <!-- Form Start -->
          <div class="form-group row"><label class="col-lg-2 col-form-label">NIS</label>
            <div class="col-lg-10">
              <input type="number" class="form-control" name="nis" placeholder="NIS" required="">
            </div>
          </div>
          <div class="form-group row"><label class="col-lg-2 col-form-label">Name</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="name" placeholder="Name" required="">
            </div>
          </div>
          <div class="form-group row"><label class="col-lg-2 col-form-label">Email</label>
            <div class="col-lg-10">
              <input type="email" class="form-control" name="email" placeholder="Email" required="">
            </div>
          </div>
          <div class="form-group row"><label class="col-lg-2 col-form-label">Telephone</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="phone" placeholder="Telephone" required="">
            </div>
          </div>
          <div class="form-group row"><label class="col-lg-2 col-form-label">Address</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="address" placeholder="Address" required="">
            </div>
          </div>
          <div class="form-group row"><label class="col-lg-2 col-form-label">Date of birth</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="birth" placeholder="Date of birth" required="">
            </div>
          </div>
          <div class="form-group row"><label class="col-sm-2 col-form-label">Kelamin</label>
            <div class="col-sm-10">
              <select class="form-control mb-15" name="kelamin">
                <option>--Choice kelamin--</option>
                <?php foreach ($kelamin->tampil() as $key): ?>
                  <option value="<?php echo $key['id_kelamin']; ?>"><?php echo $key['kelamin']; ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <div class="form-group row"><label class="col-sm-2 col-form-label">Kelas</label>
            <div class="col-sm-10">
              <select class="form-control mb-15" name="kelas">
                <option>--Choice Kelas--</option>
                <?php foreach ($kelas->tampil() as $key): ?>
                  <option value="<?php echo $key['id_kelas']; ?>"><?php echo $key['nama_kelas']; ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <div class="form-group row"><label class="col-lg-2 col-form-label">Password</label>
            <div class="col-lg-10">
              <input type="password" class="form-control" name="password" placeholder="password" required="">
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