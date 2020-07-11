				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
									Users Setting
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
											Users
											</span>
										</a>
									</li>
									<li class="m-nav__separator">
										-
									</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">
												Data
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
											List Data Users
										</h3>
									</div>
								</div>
								<div class="m-portlet__head-tools">
									<ul class="m-portlet__nav">
										<li class="m-portlet__nav-item">
											<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
												<button data-toggle="modal" data-target="#modal-us" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill">
													<i class="la la-plus-circle m--font-brand"></i>
												</button>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="m-portlet__body">
		<!--begin: Datatable -->
					<div class="box-body">
		              <div id="gridus"></div>
		          </div>
		<!--end: Datatable -->
			</div>
		</div>
		<!--begin::Modal-->
<div class="modal fade" id="modal-us" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
			<form action="../action/insert.php?proses=us" method="post" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" enctype="multipart/form-data">
				<div class="m-portlet__body">
					<div class="form-group m-form__group row">
						<div class="col-lg-6">
						<span class="m-form__help">
								Nama
						</span>
							<input type="text" name="nama" class="form-control m-input" placeholder="Nama">
						</div>
						<div class="col-lg-6">
							<span class="m-form__help">
								Username
							</span>
							<input type="text" name="username" class="form-control m-input" placeholder="Username">
						</div>
						<div class="col-lg-6">
							<span class="m-form__help">
								Password
							</span>
							<input type="password" name="password" class="form-control m-input" placeholder="Password">
						</div>
						<div class="col-lg-6">
							<span class="m-form__help">
								Email
							</span>
							<input type="email" name="email" class="form-control m-input" placeholder="Email">
						</div>
						<div class="col-lg-6">
							<span class="m-form__help">
								Level
							</span>
							<select class="form-control m-input" id="exampleSelect1" name="level">
								<option value="1">Admin</option>
								<option value="2">Regional</option>
								<option value="3">Cabang</option>
							</select>
						</div>
						<div class="col-lg-6">
							<span class="m-form__help">
								Foto
							</span>
						<div></div>
						<div class="custom-file">
							<input type="file" name="foto" class="custom-file-input" id="customFile">
							<label class="custom-file-label" for="customFile">
								Pilih Foto
							</label>
						</div>
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