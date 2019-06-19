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
										<th>NIS</th>
										<th>User</th>
										<th>Saldo</th>
										<th>Kelas</th>
										<th style="text-align: center; width: auto;">Aksi</th>
										<th style="text-align: center; width: auto;">Ambil</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($user->tampilsiswa() as $key): ?>
										<tr class="gradeX">
											<td><?php echo $key['nis']; ?></td>
											<td><a href="show_profilUser.php?id=<?php  ?>&aksi1=edit" style="color: black;"><?php echo $key['nama']; ?></a></td>
											<td class="center">Rp. <?php $formatH=number_format($key['saldo'],0,",","."); echo $formatH; ?></td>
											<td><?php echo $key['nama_kelas']; ?></td>
											<td align="center">
												<?php
	                          // echo $a;
												$b = date('d-m-Y');
												$d = date('d-m-Y', strtotime('+7 day', strtotime( $b )));
	                          // var_dump($a,$b);
												?>
												<a data-toggle="modal" data-target="#add<?php echo $key['id_siswa']; ?>">
													<div class="fa fa-plus fa-2x" style="text-align: right;color: blue"></div>
												</a>
											</td>
											<td align="center">
												<?php if ($key['verifed'] > $b ): ?>
													<a href=""><span class="icon_circle-empty fa-3x" style="color: red;padding-right: 0px;"></span></a>
												<?php else: ?>
													<a href=""><span class="icon_circle-slelected fa-3x" style="color: yellowgreen;padding-right: 0px"></span></a>
												<?php endif ?>
											</td>
										</tr>
										<!-- Modal -->
										<div class="modal fade" id="add<?php echo $key['id_siswa']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<!-- Modal Content -->
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Add Transaction</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span></button>
														</div>
														<!-- Modal Body -->
														<div class="modal-body">
															<form action="../../App/modal/Validate.php?aksi1=addMutasi" method="post">
																<!-- Line -->
																<div class="ap-line-dashed"></div>
																<div class="form-group row"><label class="col-sm-2 col-form-label">Amount of Rupiah</label>
																	<div class="col-sm-10">
																		<div class="input-group mb-15">
																			<div class="input-group-prepend">
																				<span class="input-group-addon">Rp. </span>
																			</div>
																			<input type="double" name="rupiah" class="form-control">
																			<input type="hidden" name="id" value="<?php echo $key['id_siswa']; ?>">
																			<div class="input-group-append">
																				<span class="input-group-addon">.00</span>
																			</div>
																		</div>
																	</div>
																</div>
																<!-- Line -->
																<div class="ap-line-dashed"></div>
																<div class="form-group row"><label class="col-sm-2 col-form-label">Transaction</label>
																	<div class="col-sm-10">
																		<select class="form-control mb-15" name="mutasi">
																			<option value="Tabung">Deposito</option>
																			<option value="Ambil" <?php if ($key['verifed'] > $b): ?>
																			disabled
																			<?php endif ?>>Cash</option>
																		</select>
																	</div>
																</div>
																<!-- Modal Footer -->
																<div class="modal-footer">
																	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																	<button type="submit" class="btn btn-primary">Add</button>
																</div>
															</form>
														</div>
													</div>
											</div>
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