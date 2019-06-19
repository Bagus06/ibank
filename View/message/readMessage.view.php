<?php require_once '../partials/header.php';?>
<!-- Wrapper -->
<div class="wrapper wrapper-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="email-view--area bg-boxshadow">
					<div class="row">
						<div class="col-lg-3">
							<div class="ibox">
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
											<li><a href="inbox.html"> <i class="fa fa-envelope-o"></i> Send Mail</a></li>
										</ul>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>

						<!-- Mail Box -->
						<?php foreach ($message->readMessage() as $key): ?>
							<div class="col-lg-9">
								<div class="mail-box-header">
									<div class="float-right tooltip-demo">
										<a href="#" class="btn btn-white mb-15" data-toggle="tooltip" data-placement="top" title="Print email"><i class="fa fa-print"></i></a>
										<a href="mailbox.html" class="btn btn-white mb-15" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fa fa-trash-o"></i></a>
									</div>

									<h5 class="message-title mb-15">View Message</h5>

									<div class="mail-tools tooltip-demo m-t-md">
										<h3><span class="font-normal">Subject: </span><?php echo $key['subject'] ?></h3>
										<h6 class="mail-add-title"><span class="float-right font-normal"><?php echo $key['time'] ?></span>
											<span class="font-normal">From </span>
											<?php if ($key['dari_role'] == 'siswa'): ?>
												<?php foreach ($user->tampilsiswa() as $siswa): ?>
													<?php if ($siswa['id_siswa'] == $key['dari']): ?>
														<?php echo $siswa['nama'] ?>
													<?php endif ?>
												<?php endforeach ?>
												<?php elseif ($key['dari_role'] == 'member'): ?>
													<?php foreach ($user->tampiladmin() as $siswa): ?>
														<?php if ($siswa['id_user'] == $key['dari']): ?>
															<?php echo $siswa['username'] ?>
														<?php endif ?>
													<?php endforeach ?>
													<?php elseif ($key['dari_role'] == 'admin'): ?>
														<?php foreach ($user->tampiladmin() as $siswa): ?>
															<?php if ($siswa['id_user'] == $key['dari']): ?>
																<td class="mail-ontact"><a href="../../App/modal/Validate.php?aksi1=readMessage"><?php echo $siswa['username'] ?>
															<?php endif ?>
														<?php endforeach ?>
													<?php endif ?>
										</h6>
										</div>
									</div>
									<div class="mail-box">
										<div class="mail-body">
											<?php echo $key['message'] ?>
										</div>

													<!-- Mail Body -->
													<div class="mail-body text-right tooltip-demo">
														<a class="btn btn-white mb-15" href="compose-email.html"><i class="fa fa-arrow-right"></i> Forward</a>

														<button title="" data-placement="top" data-toggle="tooltip" type="button" data-original-title="Print" class="btn btn-white mb-15"><i class="fa fa-print"></i> Print</button>

														<button title="" data-placement="top" data-toggle="tooltip" data-original-title="Remove" class="btn btn-white mb-15"><i class="fa fa-trash-o"></i> Remove</button>

													</div>

													<div class="clearfix"></div>
												</div>
											</div>
										<?php endforeach ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


<?php require_once '../partials/footer.php'; ?>