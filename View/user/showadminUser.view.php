<?php
require_once '../partials/header.php';
?>
<!-- Wrapper -->
<div class="wrapper wrapper-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
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
        </div>
    </div>
</div>

<?php include '../partials/footer.php'; ?>