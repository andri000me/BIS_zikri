				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
									Data Kantor Cabang
								</h3>

								<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
									<li class="m-nav__item m-nav__item--home">
										<a href="#" class="m-nav__link m-nav__link--icon">
											<i class="m-nav__link-icon la la-home"></i>
										</a>
									</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">
											Data
											</span>
										</a>
									</li>
									<li class="m-nav__separator">
										-
									</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">
												Kantor Cabang
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- END: Subheader -->
					<div class="m-content">
						<div class="m-portlet m-portlet--mobile">
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<h3 class="m-portlet__head-text">
											List Kantor Cabang
										</h3>
									</div>
								</div>
								<div class="m-portlet__head-tools">
									<ul class="m-portlet__nav">
										<li class="m-portlet__nav-item">
											<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
												<?php if ($_SESSION['level']==3) {
			                                    }else if ($_SESSION['level']==2) {
			                                    }else if ($_SESSION['level']==1) : ?>
												<button data-toggle="modal" data-target="#modal-bahan" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill">
													<i class="la la-plus-circle m--font-brand"></i>
												</button>
												<?php endif ?>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<div class="m-portlet__body">
	<!-- <a href="data_pdf/index.php" class="btn btn-success">Print PDF</a> //print ke pdf--> 
		<!--begin: Datatable -->
					<div class="box-body">
						<?php if ($_SESSION['level']==1) : ?>                                               
		              		<div id="gridcab"></div>
						<?php else : ?>
							<div id="gridcabreg"></div>		              		
		          		<?php endif ?>
		          </div>
		<!--end: Datatable -->
			</div>
		</div>
		<!--begin::Modal-->
<div class="modal fade" id="modal-bahan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">
					Tambah Data
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">
						&times;
					</span>
				</button>
			</div>
			<div class="modal-body">
			<!--begin::Form-->
			<form action="../action/insert.php?proses=kantor-cab" method="post" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" enctype="multipart/form-data">
				<div class="m-portlet__body">
					<div class="form-group m-form__group row">
						<div class="col-lg-6">
							<span class="m-form__help">
								Regional
							</span>
				            <select class="form-control m-input m-input--square" id="exampleSelect1" name="id_regional">
                                <?php $tampil=mysqli_query($GLOBALS["___mysqli_ston"],"SELECT * FROM regional ");
                                while ($row = mysqli_fetch_array($tampil)) {
                                    echo "<option value='".$row['id']."'>".$row['nama_regional']."</option>";
                                }
                                ?>
                            </select>
						</div>
						<div class="col-lg-6">
							<span class="m-form__help">
								Nama Kantor Cabang
							</span>
							<input type="text" name="nama_kantor" class="form-control m-input" placeholder="">
						</div>
						<div class="col-lg-6">
							<span class="m-form__help">
								Harga Beli
							</span>
							<input type="number" name="harga_beli" class="form-control m-input" placeholder="">
						</div>
						<div class="col-lg-6">
							<span class="m-form__help">
								Harga Sewa
							</span>
							<input type="number" name="harga_sewa" class="form-control m-input" placeholder="">
						</div>
						<div class="col-lg-6">
							<span class="m-form__help">
								Deposit
							</span>
							<input type="number" name="deposit" class="form-control m-input" placeholder="">
						</div>
						<div class="col-lg-6">
							<span class="m-form__help">
								Biaya Renovasi
							</span>
							<input type="number" name="biaya_renovasi" class="form-control m-input" placeholder="">
						</div>
						<div class="col-lg-6">
							<span class="m-form__help">
								Perjanjian Sewa/AJB
							</span>
							<input type="text" name="perjanjian_sewa" class="form-control m-input" placeholder="">
						</div>
						<div class="col-lg-6">
							<span class="m-form__help">
								Masa Sewa
							</span>
							<input type="text" name="masa_sewa" class="form-control m-input" placeholder="">
						</div>
						<div class="col-lg-6">
							<span class="m-form__help">
								PBB
							</span>
							<input type="number" name="pbb_2016" class="form-control m-input" placeholder="">
						</div>
						<div class="col-lg-6">
							<span class="m-form__help">
								Jatuh Tempo PBB
							</span>
							<div class="input-group date" >
							<input type="text" name="jth_tempo_pbb" class="form-control m-input" readonly id="m_datepicker_3"/>
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="la la-calendar"></i>
								</span>
							</div>
						</div>
						</div>
						<div class="col-lg-6">
							<span class="m-form__help">
								Periode Awal
							</span>
							<div class="input-group date" >
							<input type="text" name="periode_awal" class="form-control m-input" readonly id="m_datepicker_3"/>
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="la la-calendar"></i>
								</span>
							</div>
						</div>
						</div>
						<div class="col-lg-6">
							<span class="m-form__help">
								Periode Akhir
							</span>
							<div class="input-group date" >
							<input type="text" name="periode_akhir" class="form-control m-input" readonly id="m_datepicker_3"/>
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="la la-calendar"></i>
								</span>
							</div>
						</div>
						</div>
						<div class="col-lg-6">
							<span class="m-form__help">
								Biaya Notaris
							</span>
							<input type="number" name="biaya_notaris" class="form-control m-input" placeholder="">
						</div>
						<div class="col-lg-6">
							<span class="m-form__help">
								Pajak Sewa Beli
							</span>
							<input type="number" name="pajak_sewa_beli" class="form-control m-input" placeholder="">
						</div>
						<div class="col-lg-6">
							<span class="m-form__help">
								Tambah Daya Listrik
							</span>
							<input type="number" name="tam_daya_listrik" class="form-control m-input" placeholder="">
						</div>
						<div class="col-lg-6">
							<span class="m-form__help">
								Pemasangan Line Telp.
							</span>
							<input type="number" name="pasang_telp" class="form-control m-input" placeholder="">
						</div>
						<div class="col-lg-6">
							<span class="m-form__help">
								Status Kepemilikan
							</span>
							<input type="text" name="status_kepemilikan" class="form-control m-input" placeholder="">
						</div>
						<div class="col-lg-6">
							<span class="m-form__help">
								Lain-Lain
							</span>
							<input type="text" name="lain2" class="form-control m-input" placeholder="">
						</div>
						<div class="col-lg-12">
							<span class="m-form__help">
								Alamat
							</span>
							<input type="text" name="alamat" class="form-control m-input" placeholder="">
						</div>
						<div class="col-lg-12">
							<span class="m-form__help">
								Keterangan
							</span>
							<input type="text" name="keterangan" class="form-control m-input" placeholder="">
						</div>
						<div class="col-lg-6">
							<span class="m-form__help">
								Email BM
							</span>
							<input type="email" name="email_cabang" class="form-control m-input" placeholder="">
						</div>
						<div class="col-lg-6">
							<span class="m-form__help">
								Nama BM
							</span>
							<input type="text" name="nama_bm" class="form-control m-input" placeholder="">
						</div>
					</div>
				</div>
			<!--end::Form-->
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">
					Close
				</button>
				<button type="submit" class="btn btn-primary">
					Save
				</button>
			</div>
		</form>
		</div>
	</div>
</div>
<!--end::Modal-->