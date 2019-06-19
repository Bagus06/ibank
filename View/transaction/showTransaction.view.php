<?php require_once '../partials/header.php';?>
<!-- Wrapper -->
<div class="wrapper wrapper-content">
	<div class="container-fluid">
		<div class="row justify-content-center">

			<div class="col-12">
				<!-- Ibox -->
				<div class="ibox-home bg-boxshadow">
					<div class="ibox-title mb-30">
						<h5>History Transaction</h5>
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
										<th>Transaction</th>
										<th>Balance</th>
										<th>Class</th>
										<th>Date</th>
									</tr>
								</thead>
								<tbody>
									<?php if (isset($_SESSION['admin'])): ?>
										<?php if (is_array($transaction->tampil_data())): ?>
											<?php foreach ($transaction->tampil_data() as $key): ?>
											<tr class="gradeX">
												<td><?php echo $key['nis']; ?></td>
												<td><a href="show_profilUser.php?id=<?php echo $key['siswa_id']; ?>&aksi1=edit" style="color: black;"><?php echo $key['nama']; ?></a></td>
												<td class="center"><?php echo $key['mutasi']; ?></td>
												<td>Rp. <?php $formatH=number_format($key['rupiah'],0,",","."); echo $formatH; ?></td>
												<td>
													<?php foreach ($kelas->tampil() as $kelass): ?>
														<?php if ($kelass['id_kelas'] == $key['kelas_id']): ?>
															<?php echo $kelass['nama_kelas']; ?>
														<?php endif ?>
													<?php endforeach ?>
												</td>
												<td align="center"><?php echo $key['date'] ?></td>
											</tr>
											<?php endforeach ?>
										<?php endif ?>
									<?php elseif (isset($_SESSION['member'])): ?>
										<?php if (is_array($transaction->tampil_data())): ?>
											<?php foreach ($transaction->tampil_data() as $key): ?>
											<tr class="gradeX">
												<td><?php echo $key['nis']; ?></td>
												<td><a href="show_profilUser.php?id=<?php echo $key['siswa_id']; ?>&aksi1=edit" style="color: black;"><?php echo $key['nama']; ?></a></td>
												<td class="center"><?php echo $key['mutasi']; ?></td>
												<td>Rp. <?php $formatH=number_format($key['rupiah'],0,",","."); echo $formatH; ?></td>
												<td>
													<?php foreach ($kelas->tampil() as $kelass): ?>
														<?php if ($kelass['id_kelas'] == $key['kelas_id']): ?>
															<?php echo $kelass['nama_kelas']; ?>
														<?php endif ?>
													<?php endforeach ?>
												</td>
												<td align="center"><?php echo $key['date'] ?></td>
											</tr>
											<?php endforeach ?>
										<?php endif ?>
									<?php else: ?>
										<?php if (is_array($transaction->tampil_dataById())): ?>
											<?php foreach ($transaction->tampil_dataById() as $key): ?>
											<tr class="gradeX">
												<td><?php echo $key['nis']; ?></td>
												<td><a href="show_profilUser.php?id=<?php echo $key['siswa_id']; ?>&aksi1=edit" style="color: black;"><?php echo $key['nama']; ?></a></td>
												<td class="center"><?php echo $key['mutasi']; ?></td>
												<td>Rp. <?php $formatH=number_format($key['rupiah'],0,",","."); echo $formatH; ?></td>
												<td>
													<?php foreach ($kelas->tampil() as $kelass): ?>
														<?php if ($kelass['id_kelas'] == $key['kelas_id']): ?>
															<?php echo $kelass['nama_kelas']; ?>
														<?php endif ?>
													<?php endforeach ?>
												</td>
												<td align="center"><?php echo $key['date'] ?></td>
											</tr>
											<?php endforeach ?>
										<?php endif ?>
									<?php endif ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php require_once '../partials/footer.php'; ?>