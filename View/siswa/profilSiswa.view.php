<?php
require_once '../partials/header.php';
require_once '../../init.php';
?>
<!-- Wrapper -->
<?php foreach ($user->tampilsiswaById() as $key): ?>
  <div class="wrapper wrapper-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Card -->
          <div class="card mb-4">
            <!-- Card Body -->
            <div class="card-body users bg-boxshadow">
              <!-- Media -->
              <div class="media align-items-center mb-3">
                <div class="user--img">
                  <!-- Thumb -->
                  <img src="../../Public/img/member-img/member-7.jpg" alt="">
                </div>
                <!-- Media Body -->
                <div class="media-body user ml-4">
                  <h4 class="user-name-title"><?php echo $key['nama'] ?> <span class=""><?php echo $key['email'] ?></span>
                  </h4>
                  <div class="text-muted mb-2">NIS : <?php echo $key['nis'] ?></div>
                  <a href="#" class="btn-users">Edit</a>
                  <a href="#" class="btn-users">Profile</a>
                  <a href="../message/showAllMessage" class="btn-users"><i class="fa fa-envelope-o"></i></a>
                </div>
              </div>
              <?php $tabung=0; $ambil=0; foreach ($transaction->tampil_data() as $hit): ?>
                <?php if ($hit['siswa_id'] == $_SESSION['id']): ?>
                    <?php if ($hit['mutasi'] == 'Tabung'): ?>
                        <?php $tabung= $tabung+$hit['rupiah']; ?>
                        <?php elseif ($hit['mutasi'] == 'Ambil'): ?>
                            <?php $ambil= $ambil+$hit['rupiah']; ?>
                        <?php endif ?>
                    <?php endif ?>
                <?php endforeach ?>
              <!-- Table -->
              <table class="table user-view-table mb-30">
                <div class="row mb-30">
                <div class="col-12 col-sm-4">
                  <!-- Count text -->
                  <div class="users-count">
                    <a href="#">
                      <h5>Balance</h5>
                    </a>
                    <a href="#">
                      <h6><?php echo $key['saldo'] ?></h6>
                    </a>
                  </div>
                </div>
                <div class="col-12  col-sm-4">
                  <!-- Count text -->
                  <div class="users-count">
                    <a href="#">
                      <div class="fa fa-angle-double-down fa-2x"></div>
                    </a>
                    <a href="#">
                      <h6><?php echo $tabung ?></h6>
                    </a>
                  </div>
                </div>
                <div class="col-12  col-sm-4">
                  <!-- Count text -->
                  <div class="users-count">
                    <a href="#">
                      <div class="fa fa-angle-double-up fa-2x"></div>
                    </a>
                    <a href="#">
                      <h6><?php echo $ambil ?></h6>
                    </a>
                  </div>
                </div>

                <div class="col-12">
                  <!-- Card Body -->
                  <div class="card users-view-table background-color-white">
                    <!-- Table User -->
                    <table class="table user-view-table">
                      <tbody>
                        <tr>
                          <td>Name:</td>
                          <td><?php echo $key['nama'] ?></td>
                        </tr>
                        <tr>
                          <td>E-mail:</td>
                          <td><?php echo $key['email'] ?></td>
                        </tr>
                        <tr>
                          <td>Class:</td>
                          <td><?php echo $key['nama_kelas'] ?></td>
                        </tr>
                      </tbody>
                    </table>

                    <!-- Personal information -->
                    <h6 class="mt-4 mb-3">Personal info</h6>

                    <!-- Table User -->
                    <table class="table user-view-table m-0">
                      <tbody>
                        <tr>
                          <td>Birthday:</td>
                          <td><?php echo $key['tanggal_lahir'] ?></td>
                        </tr>
                        <tr>
                          <td>Address:</td>
                          <td><?php echo $key['address'] ?></td>
                        </tr>
                        <tr>
                          <td>Gender:</td>
                          <td><?php echo $key['kelamin'] ?></td>
                        </tr>
                      </tbody>
                    </table>

                    <h6 class="mt-4 mb-3">Contacts</h6>
                    <!-- Table User -->
                    <table class="table user-view-table m-0">
                      <tbody>
                        <tr>
                          <td>Phone:</td>
                          <td><?php echo $key['no_telephone'] ?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </table>
        </div>
      </div>
    </div>
<?php endforeach ?>
<?php include '../partials/footer.php'; ?>