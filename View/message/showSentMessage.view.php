<?php require_once '../partials/header.php';?>
<!-- Wrapper -->
<div class="wrapper wrapper-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="inbox--area bg-boxshadow mb-30">
					<div class="row">
						<div class="col-12 col-lg-3">
							<div class="ibox mb-30">
								<div class="ibox-content mailbox-content">
									<div class="file-manager">
										<a class="btn btn-block btn-primary compose-mail" href="createMessage">Compose Mail</a>
										<!-- Title -->
										<div class="folder-title mt-30">
										</div>
										<ul class="folder-list">
											<li><a href="showAllMessage"> <i class="fa fa-inbox "></i> Inbox <span class="label label-warning inbox float-right">
												<?php $i=0; foreach ($message->tampilmessage() as $badge):?>
												<?php if ($badge['ke'] == $_SESSION['id']) {
													if ($badge['status'] == 1) {
														$i++;
													}
												} ?>
												<?php endforeach ?>
												<?php echo $i ?>
											</span> </a></li>
											<li><a href="showSentMessage"> <i class="fa fa-envelope-o"></i> Send Mail</a></li>
										</ul>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-9">
							<!-- Mail Box -->
							<div class="mail-box">
								<table class="table table-hover table-mail">
									<tbody>
										<!-- Unread -->
										<?php foreach ($message->tampilmessage() as $key): ?>
											<?php if ($key['dari'] == $_SESSION['id']): ?>
												<tr style="background-color: white;">
													<?php if ($key['ke_role'] == 'siswa'): ?>
														<?php foreach ($user->tampilsiswa() as $siswa): ?>
															<?php if ($siswa['id_siswa'] == $key['ke']): ?>
																<td class="mail-ontact"><a href="#"><?php echo $siswa['nama'] ?></a></td>
															<?php endif ?>
														<?php endforeach ?>
														<?php elseif ($key['ke_role'] == 'member'): ?>
															<?php foreach ($user->tampiladmin() as $siswa): ?>
																<?php if ($siswa['id_user'] == $key['ke']): ?>
																	<td class="mail-ontact"><a href="#"><?php echo $siswa['username'] ?></a></td>
																<?php endif ?>
															<?php endforeach ?>
															<?php elseif ($key['ke_role'] == 'admin'): ?>
																<?php foreach ($user->tampiladmin() as $siswa): ?>
																	<?php if ($siswa['id_user'] == $key['ke']): ?>
																		<td class="mail-ontact"><a href="#"><?php echo $siswa['username'] ?></a></td>
																	<?php endif ?>
																<?php endforeach ?>
															<?php endif ?>
															<td class="mail-subject"><a href="#"><?php echo $key['subject'] ?></a></td>
															<td class=""></td>
															<td class="text-right mail-date"><?php echo $key['time'] ?></td>
														</tr>
											<?php endif ?>
										<?php endforeach ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php require_once '../partials/footer.php'; ?>