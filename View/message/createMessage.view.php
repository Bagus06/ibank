<?php require_once '../partials/header.php';?>
<!-- Wrapper -->
<div class="wrapper wrapper-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<!-- Email Area -->
				<!-- kings -->
				<div class="compose-email--area bg-boxshadow">
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
											<li><a href="showSentMessage"> <i class="fa fa-envelope-o"></i> Send Mail</a></li>
										</ul>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>

						<!-- Box Header -->
						<div class="col-lg-9">
							<table width="100%">
								<?php if (isset($_SESSION['admin'])): ?>
								<?php elseif(isset($_SESSION['member'])): ?>
									<tr>
										<td align="center"><button class="btn btn-primary" data-toggle="modal" data-target="#ANS">Requesting Addition of New Students</button></td>
										<td align="center"><button class="btn btn-primary" data-toggle="modal" data-target="#CCA">Change Class Admin</button></td>
										<!-- Modal -->
										<div class="modal fade" id="ANS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<!-- Modal Content -->
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Addition of New Students</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span></button>
														</div>
														<!-- Modal Body -->
														<div class="modal-body">
															<form action="../../App/modal/Validate.php?aksi1=ANS" method="post">
																<!-- Line -->
																<div class="ap-line-dashed"></div>
																<div class="form-group row"><label class="col-lg-2 col-form-label">NIS</label>

																	<div class="col-lg-10"><input type="number" name="nis" placeholder="NIS" class="form-control"></div>
																	<input type="hidden" name="id" value="<?php echo $_SESSION['id'] ?>">
																</div>
																<div class="form-group row"><label class="col-lg-2 col-form-label">Name</label>

																	<div class="col-lg-10"><input type="text" name="name" placeholder="Name" class="form-control"></div>
																</div>
																<div class="form-group row"><label class="col-sm-2 col-form-label">Kelamin</label>
																	<div class="col-sm-10">
																		<select class="form-control mb-15" name="kelamin">
																			<option>--Choice kelamin--</option>
																			<?php foreach ($kelamin->tampil() as $key): ?>
																				<option value="<?php echo $key['kelamin']; ?>"><?php echo $key['kelamin']; ?></option>
																			<?php endforeach ?>
																		</select>
																	</div>
																</div>
																<div class="form-group row"><label class="col-sm-2 col-form-label">Kelas</label>
																	<div class="col-sm-10">
																		<select class="form-control mb-15" name="kelas">
																			<option>--Choice Kelas--</option>
																			<?php foreach ($kelas->tampil() as $key): ?>
																				<option value="<?php echo $key['nama_kelas']; ?>"><?php echo $key['nama_kelas']; ?></option>
																			<?php endforeach ?>
																		</select>
																	</div>
																</div>
																<!-- Modal Footer -->
																<div class="modal-footer">
																	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																	<button type="submit" class="btn btn-primary"><span class="fa fa-send"></span> Send</button>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
										<!-- Modal -->
										<div class="modal fade" id="CCA" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<!-- Modal Content -->
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Change Class Admin</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span></button>
														</div>
														<!-- Modal Body -->
														<div class="modal-body">
															<form action="../../App/modal/Validate.php?aksi1=CCA" method="post">
																<!-- Line -->
																<div class="ap-line-dashed"></div>
																<div class="form-group row"><label class="col-lg-2 col-form-label">Old Admin NIS</label>

																	<div class="col-lg-10"><input type="number" name="oldNis" placeholder="Your NIS" class="form-control"></div>
																</div>
																<div class="form-group row"><label class="col-lg-2 col-form-label">New Admin NIS</label>

																	<div class="col-lg-10"><input type="number" name="newNis" placeholder="New Admin NIS" class="form-control"></div>

																	<input type="hidden" name="id" class="form-control" value="<?php echo $_SESSION['id'] ?>">
																</div>
																<!-- Modal Footer -->
																<div class="modal-footer">
																	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																	<button type="submit" class="btn btn-primary"><span class="fa fa-send"></span> Send</button>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
									</tr>
								<?php else: ?>
									<tr>
										<td align="center"><button class="btn btn-primary" data-toggle="modal" data-target="#CP">Request Access Change Password</button></td>
									</tr>
									<!-- Modal -->
									<div class="modal fade" id="CP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<!-- Modal Content -->
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span></button>
													</div>
													<!-- Modal Body -->
													<div class="modal-body">
														<form action="../../App/modal/Validate.php?aksi1=CP" method="post">
															<!-- Line -->
															<div class="ap-line-dashed"></div>
															<div class="form-group row"><label class="col-lg-2 col-form-label">NIS</label>

																<div class="col-lg-10"><input type="number" name="nis" placeholder="Your NIS" class="form-control"></div>
															</div>
															<div class="form-group row"><label class="col-lg-2 col-form-label">Old password</label>

																<div class="col-lg-10"><input type="password" name="oldpass" placeholder="Old password" class="form-control"></div>
															</div>
															<div class="form-group row"><label class="col-lg-2 col-form-label">New Password</label>

																<div class="col-lg-10">
																	<input type="password" placeholder="New Password" name="newpass" class="form-control">
																	<input type="hidden" name="id" class="form-control" value="<?php echo $_SESSION['id'] ?>">
																</div>
															</div>
															<!-- Modal Footer -->
															<div class="modal-footer">
																<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																<button type="submit" class="btn btn-primary"><span class="fa fa-send"></span> Send</button>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
								<?php endif ?>
								<tr>
									<!-- mail box -->
									<form method="get">
										<div class="mail-box" style="padding-bottom: 20px">
											<div class="mail-body">
												<!-- Form -->
													<div class="form-group row"><label class="col-sm-2 col-form-label">To:</label>
														<div class="col-sm-10"><input type="text" class="form-control" value="smith.smith@corporat.com"></div>
													</div>

													<div class="form-group row"><label class="col-sm-2 col-form-label">Subject:</label>
														<div class="col-sm-10"><input type="text" class="form-control" value=""></div>
													</div>
											</div>

											<!-- Mail Text -->
											<div class="mail-text">
												<textarea class="form-control" rows="3"></textarea>
												<div class="clearfix"></div>
											</div>
										</div>
										<div class="mail-body text-right tooltip-demo">
											<button class="btn btn-primary mb-15" type="submit"><i class="fa fa-reply"></i> Send</button>
											<button class="btn btn-white mb-15"><i class="fa fa-times"></i> Discard</button>
										</div>
									</form>
									<h4 align="center"><strong>OR</strong></h4>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require_once '../partials/footer.php'; ?>