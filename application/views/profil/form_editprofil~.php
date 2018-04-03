<script type="text/javascript">
  function cekform()
  {
    if(!$("#username").val())
    {

      alert('maaf User name tidak boleh kosong');
      $("#username").focus();
      return false;
    }
   
    if(!$("#nama_lengkap").val())
    {
      alert('maaf nama Lengkap tidak boleh kosong');
      $("#nama_lengkap").focus();
      return false;
    }
    if(!$("#user").val()){
      alert('maaf user tidak boleh kosong');
      $("#user").focus();
      return false;
    }

   

    if(!$("#tempat").val()){
      alert('maaf tempat  tidak boleh kosong');
      $("#tempat").focus();
      return false;
    }
    if(!$("#tgl_lahir").val()){
      alert('maaf tanggal Lahir  tidak boleh kosong');
      $("#tgl_lahir").focus();
      return false;
    }
     

  }

  function PreviewImage() {
				var oFReader = new FileReader();
				oFReader.readAsDataURL(document.getElementById("foto").files[0]);

				oFReader.onload = function (oFREvent) {
				document.getElementById("uploadPreview").src = oFREvent.target.result;
				};
				};
</script> 
<?php 
$info = $this->session->flashdata('info');
if(!empty($info))
{
  echo $info;
}
?>





<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>User Profile Page - Ace Admin</title>

		<meta name="description" content="3 styles with inline editable feature" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.gritter.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/select2.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-editable.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?php echo base_url();?>assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="<?php echo base_url();?>assets/js/html5shiv.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		

		<div class="main-container ace-save-state" id="main-container">		
			

			<div class="main-content">
				<div class="main-content-inner">
					

					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								


								
									<div id="user-profile-3" class="user-profile row">
										<div class="col-sm-offset-1 col-sm-10">
											

											<div class="space"></div>

											<form class="form-horizontal" method="POST"  action="<?php echo base_url();?>index.php/profil/simpan" onsubmit="return cekform();" enctype="multipart/form-data">
												<div class="tabbable">
													<ul class="nav nav-tabs padding-16">
														<li class="active">
															<a data-toggle="tab" href="#edit-basic">
																<i class="green ace-icon fa fa-pencil-square-o bigger-125"></i>
																Edit Profil
															</a>
														</li>

														
													</ul>
													


													<div class="tab-content profile-edit-tab-content">
														<div id="edit-basic" class="tab-pane in active">
															<h4 class="header blue bolder smaller">General</h4>

															<div class="row">
																<div class="col-xs-12 col-sm-4">
																	<!--<input type="file" />-->
																	<div class="col-sm-9"><?php echo"<img src=http://localhost/wisataCilacap/imagesp/".$this->session->userdata('foto')." width='150px' height='150px' />"; ?>
																<input type="file" name="foto" id="foto" placeholder="Foto" class="span1" value="<?php echo $foto;?>" onchange="PreviewImage();">
																<br/>
																new :<br/>

																<img id="uploadPreview" style="width: 100px; height: 100px;"  ></img><br/><br/>
										
										<!--<i><input id="linkk" type="file" name="linkk" placeholder="Link Gambar" onchange="PreviewImage();" class="span1" value="<?php echo $linkk;?>"></input></i>-->
																																
																</div>
																</div>

																<div class="vspace-12-sm"></div>

																<div class="col-xs-12 col-sm-8">
																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-first">Username</label>

																		<div class="col-sm-8">
																			<input class="col-xs-12 col-sm-10" type="text" name="username" id="username" placeholder="Username" value="<?php
																			$user=$this->session->userdata('username');
																			echo $user
																			?>" />
																		</div>
																	</div>

																	<!--<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-username">Password</label>

																		<div class="col-sm-8">
																			<input type="password" name="password" id="password" />
																		</div>
																	</div>-->

																	<div class="space-4"></div>

																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-first">Nama lengkap</label>

																		<div class="col-sm-8">
																			<input class="col-xs-12 col-sm-10" type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" value="<?php
																			$namleng=$this->session->userdata('nama_lengkap');
																			echo $namleng
																			?>"  />
																			<!--<input class="input-small" type="text" id="form-field-first" placeholder="First Name" value="Alex" />
																			<input class="input-small" type="text" id="form-field-last" placeholder="Last Name" value="Doe" />-->
																		</div>
																	</div>

																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-username">Level User</label>

																		<div class="col-sm-8">
																		<input class="col-xs-12 col-sm-10" type="text" name="nama_lengkap" id="user" placeholder="user" value="<?php
																			$user1=$this->session->userdata('user');
																			echo $user1
																			?>" disabled />
																		
																		</div>
																	</div>
																</div>
															</div>

															<hr />
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-date">Tempat </label>
																<div class="col-sm-9">
																<input class="input-medium" type="text" id="tempat" name="tempat" placeholder="tempat" value="<?php
																			$tem=$this->session->userdata('tempat');
																			echo $tem
																			?>" /> 
																																
																</div>
															</div>
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-date">Tanggal Lahir</label>

																<div class="col-sm-9">
																	<div class="input-medium">
																		<div class="input-group">
																			<input class="input-medium date-picker" id="tgl_lahir" name="tgl_lahir"type="text" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="<?php
																			$tgl=$this->session->userdata('tgl_lahir');
																			echo $tgl
																			?>" />
																			<span class="input-group-addon">
																				<i class="ace-icon fa fa-calendar"></i>
																			</span>
																		</div>
																	</div>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right">Jenis Kelamin</label>

																<div class="col-sm-9">
																<input class="input-medium" type="text" name="jk" id="user" placeholder="jk" value="<?php
																			$jk=$this->session->userdata('jk');
																			echo $jk
																			?>" disabled />
																<!--<label class="inline">
																		<input  id="jk" name="jk"  type="radio" value="wanita" <?php if(!empty($jk) && $jk == "wanita") echo 'checked';?>/> Wanita
																		
																	</label>
																	&nbsp; &nbsp; &nbsp;
																	<label class="inline">
																		<input  id="jk" name="jk"  type="radio" value="pria" <?php if(!empty($jk) && $jk == "pria") echo 'checked';?>/>Pria
																		
																		
																	</label>-->
																	

																	
																	
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">alamat</label>

																<div class="col-sm-9">
																	<input type="text" id="alamat" name="alamat" placeholder="alamat" value="<?php
																			$alm=$this->session->userdata('alamat');
																			echo $alm
																			?>"></input>
																</div>
															</div>

															<div class="space"></div>
															<h4 class="header blue bolder smaller">Contact</h4>


															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-email">Email</label>

																<div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input type="email" id="email" name="email" placeholder="example@gmail.com" value="<?php
																			$e=$this->session->userdata('email');
																			echo $e
																			?>"/>
																		<i class="ace-icon fa fa-envelope"></i>
																	</span>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-website">Website</label>

																<div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input type="url" id="website" name="website" placeholder="http://www.example.com/" value="<?php
																			$web=$this->session->userdata('website');
																			echo $web
																			?>" />
																		<i class="ace-icon fa fa-globe"></i>
																	</span>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-phone">Phone</label>

																<div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input type="text" id="no_telp" name="no_telp" placeholder="999 999-999-999"value="<?php
																			$telp=$this->session->userdata('no_telp');
																			echo $telp
																			?>" />
																		<i class="ace-icon fa fa-phone fa-flip-horizontal"></i>
																	</span>
																</div>
															</div>

															<!--<div class="space"></div>
															<h4 class="header blue bolder smaller">Social</h4>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-facebook">Facebook</label>

																<div class="col-sm-9">
																	<span class="input-icon">
																		<input type="text" value="facebook_alexdoe" id="form-field-facebook" />
																		<i class="ace-icon fa fa-facebook blue"></i>
																	</span>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-twitter">Twitter</label>

																<div class="col-sm-9">
																	<span class="input-icon">
																		<input type="text" value="twitter_alexdoe" id="form-field-twitter" />
																		<i class="ace-icon fa fa-twitter light-blue"></i>
																	</span>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-gplus">Google+</label>

																<div class="col-sm-9">
																	<span class="input-icon">
																		<input type="text" value="google_alexdoe" id="form-field-gplus" />
																		<i class="ace-icon fa fa-google-plus red"></i>
																	</span>
																</div>
															</div>
															-->
														</div>

														
													</div>
												</div>

												<div class="clearfix form-actions">
													<div class="col-md-offset-3 col-md-9">
														<button class="btn btn-info" type="submit">
															<i class="ace-icon fa fa-check bigger-110"></i>
															Save
														</button>

														&nbsp; &nbsp;
														<button class="btn" type="reset">
															<i class="ace-icon fa fa-undo bigger-110"></i>
															Reset
														</button>
														&nbsp; &nbsp;
														<a class="btn btn-danger" href="<?php echo base_url();?>index.php/admin"type="button">
															<i class="ace-icon glyphicon glyphicon-off  bigger-110"></i>
															Tutup
														</a>
													</div>
												</div>
											</form>
										</div><!-- /.span -->
									</div><!-- /.user-profile -->
								

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="<?php echo base_url();?>assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url();?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="<?php echo base_url();?>assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="<?php echo base_url();?>assets/js/jquery-ui.custom.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.gritter.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootbox.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.easypiechart.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.hotkeys.index.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootstrap-wysiwyg.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/select2.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/spinbox.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootstrap-editable.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/ace-editable.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.maskedinput.min.js"></script>

		<!-- ace scripts -->
		<script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		
	</body>
</html>
