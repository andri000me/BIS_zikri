				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
									Data Dokumen Cabang
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
												Penyerahan Dokumen Cabang
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				<style>
					input:required:invalid,
					input:focus:invalid,
					input:required:valid {
					    background-position: 97.5% center;
					    background-repeat: no-repeat;
					}

					input:required:invalid,
					input:focus:invalid {
						/*box-shadow: 4px 4px 4px 4px rgba(200, 0, 0, 0.85);*/
					    background-image: url("../assets/assets/app/media/img/valid/invalid.png");
					}

					input:required:valid {
					    background-image: url("../assets/assets/app/media/img/valid/valid.png");
					    /*box-shadow: 4px 4px 4px 4px rgb(21, 253, 52);*/
					}

					
				</style>

<!-- ========================================================================================= -->

		<div class="m-content">
			<div class="m-portlet m-portlet--mobile">	
				<div class="m-portlet__body">
					<table style="width: 85%">
						<form action="" method="POST" enctype="multipart/form-data" >
							<!-- <tr>
								<td><label for="koderegional">Kode Regional</label></td>
								<td class="custom-file" style="width: 100%">								 	
							      <div class="form-group row">								    
								    <div class="col-sm-10">
							<input type="text" readonly class="form-control-plaintext" id="koderegional" value=<?php echo $_SESSION['kode_reg']; ?>>
								    </div>
								  </div>					
								</td>
							</tr> -->							
							<tr>
								<td><label for="kodecabang">Kode Cabang</label></td>
								<td class="custom-file" style="width: 80%">								 	
							      <div class="form-group row">								    
								    <div class="col-sm-10">
							<input type="text" readonly class="form-control-plaintext" id="kodecabang" value=<?php echo $_SESSION['username']; ?>>
								    </div>
								  </div>							
								</td>
							</tr>							
							<tr>
								<td><label for="koderegional">Kode Regional</label></td>
								<td class="custom-file" style="width: 80%">								 	
							      <div class="form-group">
								    <input type="text" class="form-control" id="koderegional" name="kode_reg">
								  </div>					
								</td>
							</tr>
							<tr>
								<td><label for="namacabang">Nama Cabang</label></td>
								<td class="custom-file" style="width: 80%">								 	
							      <div class="form-group row">								    
								    <div class="col-sm-10">
							<input type="text" readonly class="form-control-plaintext" id="namacabang" value=<?php echo $_SESSION['nama']; ?>>
								    </div>
								  </div>					
								</td>
							</tr>
							<tr>
								<td><label for="dok1">FC Lengkap Sertifikat (SHM/SHGB)</label></td>
								<td class="custom-file" style="width: 80%">								 	
									    <input type="file" class="custom-file-input" id="dok1" name="doc_1" required>
									    <label class="custom-file-label" for="dok1">Choose file...</label>									    
								</td>
								<td><label for="dok3" required></label></td>
							</tr>
							<tr>
								<td><label for="dok2">FC KTP Pemilik (Suami & Istri)</label></td>
								<td class="custom-file" style="width: 80%">								 	
									    <input type="file" class="custom-file-input" id="dok2" name="doc_2" required>
									    <label class="custom-file-label" for="dok2">Choose file...</label>								
								</td>
								<td><label for="dok3" required></label></td>
							</tr>						
							<tr>
								<td><label for="dok3">FC KK Pemilik (Kartu Keluarga)</label></td>
								<td class="custom-file" style="width: 80%">								 	
									    <input type="file" class="custom-file-input" id="dok3" name="doc_3" required>
									    <label class="custom-file-label" for="dok3">Choose file...</label>								
								</td>														
							</tr>
							<tr>
								<td><label for="dok4">FC Akta Nikah Pemilik</label></td>
								<td class="custom-file" style="width: 80%">								 	
									    <input type="file" class="custom-file-input" id="dok4" name="doc_4" required>
									    <label class="custom-file-label" for="dok4">Choose file...</label>								
								</td>
							</tr>
							<tr>
								<td><label for="dok5">FC Lengkap IMB(Izin Mendirikan Bangunan)</label></td>
								<td class="custom-file" style="width: 80%">								 	
									    <input type="file" class="custom-file-input" id="dok5" name="doc_5" required>
									    <label class="custom-file-label" for="dok5">Choose file...</label>								
								</td>
							</tr>
							<tr>
								<td><label for="dok6">FC PBB Terakhir</label></td>
								<td class="custom-file" style="width: 80%">								 	
									    <input type="file" class="custom-file-input" id="dok6" name="doc_6" required>
									    <label class="custom-file-label" for="dok6">Choose file...</label>								
								</td>
							</tr>
							<tr>
								<td><label for="dok7">FC Tagihan Terakhir (Listrik,Tlp,Internet,PDAM)</label></td>
								<td class="custom-file" style="width: 80%">								 	
									    <input type="file" class="custom-file-input" id="dok7" name="doc_7" required>
									    <label class="custom-file-label" for="dok7">Choose file...</label>								
								</td>
							</tr>
							<tr>
								<td><label for="dok8">Foto Gedung dan kondisi sekitar</label></td>
								<td class="custom-file" style="width: 80%">								 	
									    <input type="file" class="custom-file-input" id="dok8" name="doc_8" required>
									    <label class="custom-file-label" for="dok8">Choose file...</label>								
								</td>
							</tr>
							<tr>
								<td><label for="dok9">Contact Person Pemilik/dikuasakan</label></td>
								<td class="custom-file" style="width: 80%">								 	
							      <div class="form-group">
								    <input type="text" class="form-control" id="dok9" name="doc_9">
								  </div>						
								</td>
							</tr>
							<tr>
								<td><label for="dok10">Gedung Alternatif Lain</label></td>
								<td class="custom-file" style="width: 80%">								 	
							      <div class="form-group">
								    <input type="text" class="form-control" id="dok10" name="doc_10">
								  </div>						
								</td>
							</tr>
							<tr>
						<td>
							<br><input type="submit" name="submit" value="Submit" class="btn m-btn--square  btn-success" /> <input type="reset" value="Delete" class="btn m-btn--square  btn-danger" />
						</td>
						</tr>
						</form>
					</table>
				</div>
							*ukuran maksimal 2mb<br>
							*file dalam bentuk PDF
						

					
<!-- 				<script>
// Add the following code if you want the name of the file appear on select
					$(".custom-file-input").on("change", function() {
					  var fileName = $(this).val().split("\\").pop();
					  $(this).siblings(".custom-file-label").addClass("form-control").html(fileName);
					});
				</script> -->
<!-- ========================================================================================= -->
							</div>
						</div>
					</div>
				</div>