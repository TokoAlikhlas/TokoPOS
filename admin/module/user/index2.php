 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <?php 
		  $id = $_SESSION['admin']['id_member'];
		  $hasil = $lihat -> member_edit($id);
      ?>
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12 main-chart">
						<h3>Tambah User Kasir</h3>
						<?php if(isset($_GET['success'])){?>
						<div class="alert alert-success">
							<p>Tambah Data Berhasil !</p>
						</div>
						<?php }?>
						<?php if(isset($_GET['remove'])){?>
						<div class="alert alert-danger">
							<p>Hapus Data Berhasil !</p>
						</div>
						<?php }?>
						
						<div class="col-sm-5">
						<div class="panel panel-primary">
									<div class="panel-heading">
										<h4><i class="fa fa-user"></i>  Tambah Pengguna </h4>
									</div>
									<div class="panel-body">
										<div class="box-content">
											<form class="form-horizontal" method="POST" action="fungsi/tambah/tambah.php?profil=tambah" enctype="multipart/form-data">
												<fieldset>
													<div class="control-group">
														<label class="control-label" for="typeahead">Nama </label>
														<div class="input-group">
														  <div class="input-group-addon">
															<i class="fa fa-user"></i>
														  </div>
															<input type="text" class="form-control" style="border-radius:0px;" name="nama" data-items="4"  required="required"/>
														</div>
													</div>
													<div class="control-group">
														<label class="control-label" for="typeahead">Alamat </label>
														<div class="controls">
															<textarea  name="alamat" rows="3" class="form-control" style="border-radius:0px;" required="required"></textarea>
														</div>
													</div>
													<div class="control-group">
														<label class="control-label" for="typeahead">Telepon </label>
														<div class="input-group">
														  <div class="input-group-addon">
															<i class="fa fa-phone"></i>
														  </div>
															<input type="text" class="form-control" style="border-radius:0px;" name="tlp"  required="required"/>
														</div>
													</div>
													<div class="control-group">
														<label class="control-label" for="typeahead">Email </label>
														<div class="input-group">
														  <div class="input-group-addon">
															<i class="fa fa-envelope-square"></i>
														  </div>
															<input type="email" class="form-control" style="border-radius:0px;" name="email"  required="required"/>
														</div>
													</div>
													<br>
													<div class="control-group">
														<label class="control-label" for="typeahead">NIK ( KTP ) </label>
														<div class="input-group">
														  <div class="input-group-addon">
															<i class="fa fa-user"></i>
														  </div>
															<input type="text" class="form-control" style="border-radius:0px;" name="nik"  required="required"/>
														</div>
													</div>													
													<br>
													<div class="form-actions pull-right">
														<button class="btn btn-primary" name="btn" value="Tambah" style="border-radius:0px;"><i class="fa fa-pencil"></i> Tambah User Kasir </button>
													</div>
												</fieldset>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<h4><i class="fa fa-lock"></i>  Tambah User Pengguna </h4>
									</div>
									<div class="panel-body">
										<div class="box-content">
											 <form class="form-horizontal" method="POST" action="fungsi/tambah/tambah.php?user=tambah">
												
												<fieldset>
													<div class="control-group">
														<label class="control-label" for="typeahead">Username </label>
														<div class="input-group">
														  <div class="input-group-addon">
															<i class="fa fa-user"></i>
														  </div>
															<input type="text" class="form-control" placeholder="Enter Username" style="border-radius:0px;" name="user" data-items="4" />
														</div>
													</div>
													<div class="control-group">
														<label class="control-label" for="typeahead">Password</label>
														<div class="input-group">
														  <div class="input-group-addon">
															<i class="fa fa-lock"></i>
														  </div>
															<input type="password" class="form-control" placeholder="Enter Password" style="border-radius:0px;" id="pass" name="pass" data-items="4" value="" required="required"/>
														</div>
													</div>
													<div class="control-group">
														<label class="control-label" for="typeahead">User Id</label>
														<div class="input-group">
														  <div class="input-group-addon">
															<i class="fa fa-lock"></i>
														  </div>
															<input type="text" class="form-control" placeholder="Enter User Id" style="border-radius:0px;" id="idmember" name="idmember" data-items="4" value="" required="required"/>
														</div>
													</div>
													<br>
													<div class="pull-right">
														<button type="submit" class="btn btn-primary" value="Tambah" style="border-radius:0px;" name="proses"><i class="fa fa-pencil"></i> Tambah Username </button>
													</div>
												</fieldset>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix" style="padding-top:5%;"></div>
				  </div>
              </div>
          </section>
      </section>

							<!-- <div class="col-sm-5">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<h4><i class="fa fa-user"></i>  Tambah Pengguna </h4>
									</div>
									<div class="panel-body">
										<div class="box-content">
											<form class="form-horizontal" method="POST" action="fungsi/tambah/tambah.php?profil=tambah" enctype="multipart/form-data">
												<fieldset>
													<div class="control-group">
														<label class="control-label" for="typeahead">Nama </label>
														<div class="input-group">
														  <div class="input-group-addon">
															<i class="fa fa-user"></i>
														  </div>
															<input type="text" class="form-control" style="border-radius:0px;" name="nama" data-items="4"  required="required"/>
														</div>
													</div>
													<div class="control-group">
														<label class="control-label" for="typeahead">Alamat </label>
														<div class="controls">
															<textarea  name="alamat" rows="3" class="form-control" style="border-radius:0px;" required="required"></textarea>
														</div>
													</div>
													<div class="control-group">
														<label class="control-label" for="typeahead">Telepon </label>
														<div class="input-group">
														  <div class="input-group-addon">
															<i class="fa fa-phone"></i>
														  </div>
															<input type="text" class="form-control" style="border-radius:0px;" name="tlp"  required="required"/>
														</div>
													</div>
													<div class="control-group">
														<label class="control-label" for="typeahead">Email </label>
														<div class="input-group">
														  <div class="input-group-addon">
															<i class="fa fa-envelope-square"></i>
														  </div>
															<input type="email" class="form-control" style="border-radius:0px;" name="email"  required="required"/>
														</div>
													</div>
													<br>
													<div class="control-group">
														<label class="control-label" for="typeahead">NIK ( KTP ) </label>
														<div class="input-group">
														  <div class="input-group-addon">
															<i class="fa fa-user"></i>
														  </div>
															<input type="text" class="form-control" style="border-radius:0px;" name="nik"  required="required"/>
														</div>
													</div>													
													<br>
													<div class="form-actions pull-right">
														<button class="btn btn-primary" name="btn" value="Tambah" style="border-radius:0px;"><i class="fa fa-pencil"></i> Tambah User Kasir </button>
													</div>
												</fieldset>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix" style="padding-top:5%;"></div>
				  </div>
              </div>
          </section>
      </section> -->
	
