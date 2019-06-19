<?php require_once '../partials/header.php';?>
<!-- Wrapper -->
<div class="wrapper wrapper-content">
  <div class="container-fluid">
    <div class="row justify-content-center">

      <div class="col-12">
        <!-- Ibox -->
        <div class="ibox-home bg-boxshadow">
          <div class="ibox-title mb-30">
            <h5>All Siswa</h5>
          </div>
          <!-- Ibox Content -->
          <div class="ibox-content">
            <!-- Table Responsive -->
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover dataTables-example">
                <thead>
                  <tr>
                    <th width="10px">No.</th>
                    <th style="text-align: center;">User</th>
                    <th style="text-align: center;">Saldo</th>
                    <th style="text-align: center;">Kelas</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1; foreach ($user->tampilsiswa() as $key): ?>
                    <tr class="gradeX">
                      <td><?php echo $i++; ?></td>
                      <td><a href="show_profilUser.php?id=<?php  ?>&aksi1=edit" style="color: black;"></a><?php echo $key['nama'] ?></td>
                      <td class="center">Rp. <?php $formatH=number_format($key['saldo'],0,",","."); echo $formatH; ?></td>
                      <td style="text-align: center;"><?php echo $key['nama_kelas']; ?></td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php require_once '../partials/footer.php'; ?>