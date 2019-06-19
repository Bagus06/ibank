<?php
require_once '../partials/header.php';
require_once '../../init.php';
$_SESSION['menu'] = 'siswa';
$_SESSION['menuli'] = 'siswaC'; 
?>
<!-- Wrapper -->
<div class="wrapper wrapper-content">

    <div class="container-fluid">
        <div class="row justify-content-center">
            <?php
                $classBalence = 0;
                foreach ($transaction->count() as $counts) {
                    $classBalence = $classBalence + $counts['saldo'];
                    if ($counts['id_siswa'] == $_SESSION['id']) {
                        $balence=$counts['saldo'];
                    }
                 } 
             ?>
            <?php if (isset($_SESSION['admin'])): ?>
                
            <?php else: ?>
                <div class="col-md-6 col-lg-4">
                    <h5 style="color: white;">Class Balenc</h5>
                    <h1><strong style="color: white;">Rp. <?php $formatH=number_format($classBalence ,0,",","."); echo $formatH; ?></strong></h1>
                </div>
                <?php if (isset($_SESSION['member'])): ?>
                    <div class="col-md-6 col-lg-4">
                    </div>
                <?php else: ?>
                    <div class="col-md-6 col-lg-4">
                        <h5 style="color: white;">Your Balenc</h5>
                        <h1><strong style="color: white;">Rp. <?php $formatH=number_format($balence ,0,",","."); echo $formatH; ?></strong></h1>
                    </div>                                  
                <?php endif ?>
                <div class="col-md-6 col-lg-4">
                </div>
            <?php endif ?>
            <div class="col-md-6 col-lg-4">
                <!-- Widget Content -->
                <div class="widget-content-style rounded-0 two bg-gradient-primary zoom-effect mb-30">
                    <div class="row">
                        <div class="col-4">
                            <!-- Icon -->
                            <div class="widget-style-two-icon">
                                <i class="fa fa-trophy fa-5x"></i>
                            </div>
                        </div>
                        <div class="col-8 text-right">
                            <!-- Text -->
                            <div class="widget-style-two-text">
                                <?php foreach ($transaction->MAX() as $key): ?>
                                    <p><?php echo $key['nama'] ?></p>
                                    <h2 class="widget-content--text">Rp. <?php $formatH=number_format($key['saldo'],0,",","."); echo $formatH; ?></h2>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if (isset($_SESSION['member'])): ?>
                <?php $tabung=0; $ambil=0; foreach ($transaction->tampil_data() as $key): ?>
                    <?php if ($key['kelas_id'] == $_SESSION['kelas']): ?>
                        <?php if ($key['mutasi'] == 'Tabung'): ?>
                            <?php $tabung= $tabung+$key['rupiah']; ?>
                        <?php elseif ($key['mutasi'] == 'Ambil'): ?>
                            <?php $ambil= $ambil+$key['rupiah']; ?>
                        <?php endif ?>
                    <?php endif ?>
                <?php endforeach ?>
            <?php elseif (isset($_SESSION['admin'])): ?>
                <?php $tabung=0; $ambil=0; foreach ($transaction->tampil_data() as $key): ?>
                    <?php if ($key['mutasi'] == 'Tabung'): ?>
                        <?php $tabung= $tabung+$key['rupiah']; ?>
                    <?php elseif ($key['mutasi'] == 'Ambil'): ?>
                            <?php $ambil= $ambil+$key['rupiah']; ?>
                    <?php endif ?>
                <?php endforeach ?>
            <?php else: ?>
                <?php $tabung=0; $ambil=0; foreach ($transaction->tampil_data() as $key): ?>
                <?php if ($key['siswa_id'] == $_SESSION['id']): ?>
                    <?php if ($key['mutasi'] == 'Tabung'): ?>
                        <?php $tabung= $tabung+$key['rupiah']; ?>
                        <?php elseif ($key['mutasi'] == 'Ambil'): ?>
                            <?php $ambil= $ambil+$key['rupiah']; ?>
                        <?php endif ?>
                    <?php endif ?>
                <?php endforeach ?>
            <?php endif ?>
            <div class="col-md-6 col-lg-4">
                <!-- Widget Content -->
                <div class="widget-content-style rounded-0 two bg-gradient-info zoom-effect mb-30">
                    <div class="row">
                        <div class="col-4">
                            <!-- Icon -->
                            <div class="widget-style-two-icon">
                                <i class="fa fa-angle-double-up fa-5x"></i>
                            </div>
                        </div>
                        <div class="col-8 text-right">
                            <!-- Text -->
                            <div class="widget-style-two-text">
                                <p>Deposite</p>
                                <h2 class="widget-content--text">Rp. <?php $formatH=number_format($tabung,0,",","."); echo $formatH; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <!-- Widget Content -->
                <div class="widget-content-style rounded-0 two bg-gradient-danger zoom-effect mb-30">
                    <div class="row">
                        <div class="col-4">
                            <!-- Icon -->
                            <div class="widget-style-two-icon">
                                <i class="fa fa-angle-double-down fa-5x"></i>
                            </div>
                        </div>
                        <div class="col-8 text-right">
                            <!-- Text -->
                            <div class="widget-style-two-text">
                                <p>Cash</p>
                                <h2 class="widget-content--text">Rp. <?php $formatH=number_format($ambil,0,",","."); echo $formatH; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if (isset($_SESSION['admin'])): ?>
                <?php foreach ($user->tampiladmin() as $key): ?>
                        <?php if ($key['role_id'] == 1): ?>
                        <?php else: ?>
                            <div class="col-md-6 col-lg-4">
                                <!-- Contact Box -->
                                <div class="contact-box mb-30">
                                    <div class="row align-items-center">
                                        <div class="col-4">
                                            <!-- Thumb Title -->
                                            <div class="contact-thumb-title">
                                                <img src="../../Public/img/member-img/member-8.jpg" alt="">
                                                <div class="cont-team-titl">
                                                    <h6>Admin <?php echo $key['nama_kelas'] ?></h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-8">
                                            <!-- Team Details -->
                                            <div class="contact-team-details">
                                                <?php foreach ($user->tampilsiswa() as $sis): ?>
                                                    <?php if ($key['nis'] == $sis['nis']): ?>
                                                        <h5><?php echo $sis['nama'] ?></h5>
                                                        <p><i class="fa fa-map-marker"></i>
                                                                <?php echo $sis['address'] ?>
                                                        <!-- Team Address -->
                                                        <div class="team-contact-add">
                                                            <h6><i class="fa fa-phone"></i> <?php echo $sis['no_telephone'] ?></h6>
                                                        </div>
                                                    <?php endif ?>
                                                <?php endforeach ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif ?>
                <?php endforeach ?>
            <?php else: ?>
                <?php foreach ($user->tampilsiswa() as $key): ?>
                    <div class="col-md-6 col-lg-4">
                        <!-- Contact Box -->
                        <div class="contact-box mb-30">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <!-- Thumb Title -->
                                    <div class="contact-thumb-title">
                                        <img src="../../Public/img/member-img/member-8.jpg" alt="">
                                        <div class="cont-team-titl">
                                            <h6><?php echo $key['nama'] ?></h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-8">
                                    <!-- Team Details -->
                                    <div class="contact-team-details">
                                        <!-- Team Address -->
                                        <div class="team-contact-add">
                                            <p><i class="fa fa-map-marker"></i> Address<span><br><?php echo $key['address'] ?></span></p>
                                            <h6><i class="fa fa-phone"></i> <?php echo $key['no_telephone'] ?></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            <?php endif ?>
        </div>
    </div>
</div>

<?php include '../partials/footer.php'; ?>