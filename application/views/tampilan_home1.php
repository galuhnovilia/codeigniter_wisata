<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Dashboard </title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							<i class="fa fa-users"></i>
							Admin
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src=<?php echo" http://localhost/wisataCilacap/imagesp/".$this->session->userdata('foto'); ?> />
								<span class="user-info">
									<small>Welcome,</small>
									<?php
									$user=$this->session->userdata('username');
									echo $user
									//<?php echo $this->load->view($content);?>

								</span>

								<!--<i class="ace-icon fa fa-caret-down"></i>-->
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					
					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->



				<!-- TAMPILAN MENU-->
				<?php
				$user=$this->session->userdata('user');
				if ($user=='admin'){
				 echo $this->load->view('tampil_menu_admin'); 
				}
				else{
					echo $this->load->view('tampilan_menu');
				}
				?>

				
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Dashboard</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								<?php echo $judul; ?>
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<?php echo $sub_judul; ?>
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="alert alert-block alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<i class="ace-icon fa fa-check green"></i>

									Welcome to
									<strong class="green">
										Dashboard
										<small>Sistem Informasi Destinasi Wisata Kabupaten Cilacap, </small>
										<?php
										$user=$this->session->userdata('username');
										echo $user 
										//<?php echo $this->load->view($content);?> 
									</strong>
	 						<!--	<a href="https://github.com/bopoda/ace">github</a>-->
								</div>


								<!--tampilan profil cilacap-->
								<div class="hr dotted"></div>
								<div>
									<div id="user-profile-1" class="user-profile row">
										<div class="col-xs-12 col-sm-3 center">
											<div>
												<span class="profile-picture">
													<img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="<?php echo base_url();?>assets/images/avatars/profile-pic.png" />
												</span>

												<div class="space-4"></div>

												<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
													<div class="inline position-relative">
														<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
															<i class="ace-icon fa fa-circle light-green"></i>
															&nbsp;
															<span class="white">Logo Cilacap</span>
														</a>

														
													</div>
												</div>
											</div>

											<div class="space-6"></div>

											<div class="profile-contact-info">
												<div class="profile-contact-links align-left">
													<a href="#" class="btn btn-link">
														<i class="ace-icon fa fa-twitter bigger-120 green"></i>
														@infocilacap
													</a>

													<a href="#" class="btn btn-link">
														<i class="ace-icon fa fa-facebook bigger-125 blue"></i>
														 &nbsp;CAH CILACAP
													</a>

													<a href="#" class="btn btn-link">
														<i class="ace-icon fa fa-globe bigger-125 orange"></i>
														www.cilacap.go.id
													</a>

													<a href="#" class="btn btn-link">
														<i class="ace-icon fa fa-instagram bigger-125 red"></i>
														@kulinercilacap
													</a>
												</div>

												<div class="space-6"></div>

												<!--
												<div class="profile-social-links align-center">
													<a href="#" class="tooltip-info" title="" data-original-title="Visit my Facebook">
														<i class="middle ace-icon fa fa-facebook-square fa-2x blue"></i>
													</a>

													<a href="#" class="tooltip-info" title="" data-original-title="Visit my Twitter">
														<i class="middle ace-icon fa fa-twitter-square fa-2x light-blue"></i>
													</a>

													<a href="#" class="tooltip-error" title="" data-original-title="Visit my Pinterest">
														<i class="middle ace-icon fa fa-pinterest-square fa-2x red"></i>
													</a>
												</div>
												-->
											</div>

											<!--<div class="hr hr12 dotted"></div>

											
											<div class="clearfix">
												<div class="grid2">
													<span class="bigger-175 blue">25</span>

													<br />
													Followers
												</div>

												<div class="grid2">
													<span class="bigger-175 blue">12</span>

													<br />
													Following
												</div>
											</div>
											-->

											<div class="hr hr16 dotted"></div>
										</div>

										<div class="col-xs-12 col-sm-9">
											<div class="center">
												
											</div>

											<div class="space-12"></div>

											<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> Provinsi </div>

													<div class="profile-info-value">
														<span class="editable" id="#">Jawa Tengah</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Koordinat </div>

													<div class="profile-info-value">
														<i class="fa fa-map-marker light-orange bigger-110"></i>
														<span class="editable" id="#">7,45 LS - 109,2 BT</span>
														
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Ibu Kota </div>

													<div class="profile-info-value">
														<span class="editable" id="#">Kota Cilacap</span>
													</div>
												</div>


												<div class="profile-info-row">
													<div class="profile-info-name"> Luas </div>

													<div class="profile-info-value">
														<span class="editable" id="#">2.142,59 Km<sup>2</sup></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Populasi </div>

													<div class="profile-info-value">
														<div class="profile-info-name"> Total </div>
														<div class="profile-info-value"><span class="editable" id="#">1.642.107 jiwa</sup></span></div>

														<br/>

														<div class="profile-info-name"> Kepadatan </div>
														<div class="profile-info-value"><span class="editable" id="#">766,41 jiwa/Km<sup>2</sup></span></div>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Demografi </div>

													<div class="profile-info-value">
														<div class="profile-info-name"> Bahasa </div>
														<div class="profile-info-value"><span class="editable" id="#">Jawa, Sunda , &amp; Indonesia</sup></span></div>

														<br/>

														<div class="profile-info-name"> Kode Area Telepon </div>
														<div class="profile-info-value"><span class="editable" id="#">0282, 0280</span></div>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Demografi </div>

													<div class="profile-info-value">
														<div class="profile-info-name"> Bahasa </div>
														<div class="profile-info-value"><span class="editable" id="#">Jawa, Sunda , &amp; Indonesia</sup></span></div>

														<br/>

														<div class="profile-info-name"> Kode Area Telepon </div>
														<div class="profile-info-value"><span class="editable" id="#">0282, 0280</span></div>
													</div>
												</div>

												
											</div>

											<div class="space-20"></div>

											<div class="widget-box transparent">
												<div class="widget-header widget-header-small">
													<h4 class="widget-title blue smaller">
														<i class="ace-icon fa fa-bookmark orange"></i>
														Bentuk dan Wujud Lambang Daerah
													</h4>
													
												</div>

												<div class="widget-body">
													<div class="widget-main padding-8">
														<div id="profile-feed-1" class="profile-feed">
															<div class="profile-activity clearfix">
																<div>
																	<img class="pull-left" alt="bintang segi lima" src="<?php echo base_url();?>assets/images/avatars/star2.png" />
																	<a class="user" href="#"> Bintang Segi Lima </a>
																	

																	<div class="time">
																		<i class="ace-icon glyphicon glyphicon-tags bigger-110"></i>
																		&nbsp;Melambangkan keluhuran cita - cita masyarakat daerah yang berkepribadian Pancasila.
																	</div>
																</div>

																
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<img class="pull-left" alt="tugu pahlawan" src="<?php echo base_url();?>assets/images/avatars/tugu.png" />
																	<a class="user" href="#"> Tugu pahlawan dengan lidah api diatas gelombang laut selatan</a>

																	<div class="time">
																		<i class="ace-icon glyphicon glyphicon-tags bigger-110"></i>
																		&nbsp;tugu pahlawan melambangkan perjuangan heroik masyarakat di masa Revolusi 1945, Lidah api menunjukkan perjuangan berdasarkan pancasila, Gelombang Laut Selatan dengan lekuk gelombang berjumlah 4 dihubungkan dengan lidah api (5) melambangkan perjuangan yang berkobar-kobar sejak revolusi 45 berdasarkan UUD 45 dan jiwa juang 45.
																	</div>
																</div>														
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<img class="pull-left" alt="bunga wijayakusuma" src="<?php echo base_url();?>assets/images/avatars/wiku3.png" />
																	<a class="user" href="#"> Bunga Wijayakusuma</a>

																	<div class="time">
																		<i class="ace-icon glyphicon glyphicon-tags bigger-110"></i>
																		&nbsp;Merupakan lambang wahyu negara pada saat masih berbentuk kerajaan. Wijayakusuma menjadi nama pengenal khas dan merupakan lambang hidup daerah.
																	</div>
																</div>														
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<img class="pull-left" alt="padi dan kapan" src="<?php echo base_url();?>assets/images/avatars/padi.png" />
																	<a class="user" href="#"> Padi dan Kapas</a>

																	<div class="time">
																		<i class="ace-icon glyphicon glyphicon-tags bigger-110"></i>
																		&nbsp;Melambangkan keluhuran cita-cita masyarakat daerah mewujudkan masyarakat adil dan makmur  dalam mengemban Amanat Penderitaan Rakyat.
																		Padi dan kapas bermakna kegiatan masyarakat di bidang pangan dan sandang.
																		Jumlah butir padi 17 dan kapas 8, dihubungkan dengan bunga wijayakusuma yang berkelopak 5, menunjukkan keramatnya Proklamasi Tujuhbelas Delapan Empatlima.
																	</div>
																</div>														
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<img class="pull-left" alt="hiu" src="<?php echo base_url();?>assets/images/avatars/hiu2.png" />
																	<a class="user" href="#"> Ikan Hiu</a>

																	<div class="time">
																		<i class="ace-icon glyphicon glyphicon-tags bigger-110"></i>
																		&nbsp; Ikan hiu melambangkan Cilacap berada di daerah pantai laut selatan, penghasil ikan, dan sebagian dari masyarakatnya adalah nelayan.
																	</div>
																</div>														
															</div>

															
														</div>
													</div>
												</div>
											</div>

											<!-- ke dua-->
											<div class="space-20"></div>

											<div class="widget-box transparent">
												<div class="widget-header widget-header-small">
													<h4 class="widget-title blue smaller">
														<i class="ace-icon fa fa-bookmark orange"></i>
														Warna Lambang Daerah dan Maknanya
													</h4>
													
												</div>

												<div class="widget-body">
													<div class="widget-main padding-8">
														<div id="profile-feed-1" class="profile-feed">
															<div class="profile-activity clearfix">
																<div>
																	<img class="pull-left" alt="merah" src="<?php echo base_url();?>assets/images/avatars/merah.png" />
																	<a class="user" href="#">Warna Merah Hati </a>
																	

																	<div class="time">
																		<i class="ace-icon glyphicon glyphicon-tags bigger-110"></i>
																		&nbsp;Keberanian, keuletan, kewaspadaan serta melambangkan perjuangan yang gagah berani.
																	</div>
																</div>

																
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<img class="pull-left" alt="gold" src="<?php echo base_url();?>assets/images/avatars/gold.png" />
																	<a class="user" href="#">Warna Kuning Emas</a>

																	<div class="time">
																		<i class="ace-icon glyphicon glyphicon-tags bigger-110"></i>
																		&nbsp;Keluhuran di dalam mengemban tugas.
																	</div>
																</div>														
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<img class="pull-left" alt="white" src="<?php echo base_url();?>assets/images/avatars/white.png" />
																	<a class="user" href="#"> Warna Putih</a>

																	<div class="time">
																		<i class="ace-icon glyphicon glyphicon-tags bigger-110"></i>
																		&nbsp;Kesucian Jiwa.
																	</div>
																</div>														
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<img class="pull-left" alt="hitam" src="<?php echo base_url();?>assets/images/avatars/hitam.png" />
																	<a class="user" href="#"> Warna Hitam</a>

																	<div class="time">
																		<i class="ace-icon glyphicon glyphicon-tags bigger-110"></i>
																		&nbsp;Ketenangan dan ketabahan.
																	</div>
																</div>														
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<img class="pull-left" alt="biru" src="<?php echo base_url();?>assets/images/avatars/birum.png" />
																	<a class="user" href="#"> Warna Biru laut &amp;</a>
																	<img class="pull-left" alt="biru" src="<?php echo base_url();?>assets/images/avatars/birut.png" />
																	<a class="user" href="#"> Warna Biru Tua</a>

																	<div class="time">
																		<i class="ace-icon glyphicon glyphicon-tags bigger-110"></i>
																		&nbsp;Cilacap terletak di pantai Selatan Samudera Indonesia.Seluruh warna menggambarkan kepribadian masyarakat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;daerah.
																	</div>
																</div>														
															</div>
	
														</div>
													</div>
												</div>
											</div>


											<!--end ke 2-->

											<!-- ke tiga-->
											<div class="space-20"></div>

											<div class="widget-box transparent">
												<div class="widget-header widget-header-small">
													<h4 class="widget-title blue smaller">
														<i class="ace-icon fa fa-bookmark orange"></i>
														Motto
													</h4>
													
												</div>

												<div>
													<img width= "300px" height="100px" alt="motto" src="<?php echo base_url();?>assets/images/avatars/motto.png" />
																
												</div>

												<div class="widget-body">
													<div class="widget-main padding-8">
														<div id="profile-feed-1" class="profile-feed">
															<div class="profile-activity clearfix">
																<div>																
																	<a class="user" href="#">JALA</a>
																	<div class="time">
																		
																		&nbsp;Air, lautan
																	</div>
																</div>
																<hr/>
																<div>																
																	<a class="user" href="#">BHUMI</a>
																	<div class="time">
																		
																		&nbsp;Tanah, Daratan
																	</div>
																</div>

																<hr/>
																<div>																
																	<a class="user" href="#">WIJAYAKUSUMA</a>
																	<div class="time">
																		
																		&nbsp;Bunga Kejayaan
																	</div>
																</div>

																<hr/>
																<div>																
																	<a class="user" href="#">CAKTI</a>
																	<div class="time">
																		
																		&nbsp;Ilmu tertinggi
																	</div>
																</div>		
																<hr/>														
															
	
														</div>
													</div>
												</div>


											</div>


											<!--end ke 3-->
											<!-- ke empat-->
											<div class="space-20"></div>

											<div class="widget-box transparent">
												<div class="widget-header widget-header-small">
													<h4 class="widget-title blue smaller">
														<i class="ace-icon fa fa-bookmark orange"></i>
														Sesanti
													</h4>
													
												</div>

												<div>
													<img width= "300px" height="100px" alt="sesanti" src="<?php echo base_url();?>assets/images/avatars/sesanti.png" />
																
												

											</div>


											<!--end ke 4-->


											<br/>

											<div class="space-6"></div>

											<div class="center">
												
											</div>
										</div>
									</div>
								</div>

								
								<!-- end cilacap-->

								<!-- tampilan home~~-->
								


								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder"></span>
							Cilacap Website &copy; Galuh Ayu Novilia 2016/2017
						</span>

						&nbsp; &nbsp;
					
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url();?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="<?php echo base_url();?>assets/js/jquery-ui.custom.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.easypiechart.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.sparkline.index.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.flot.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.flot.pie.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->
		<script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: ace.vars['old_ie'] ? false : 1000,
						size: size
					});
				})
			
				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html',
									 {
										tagValuesAttribute:'data-values',
										type: 'bar',
										barColor: barColor ,
										chartRangeMin:$(this).data('min') || 0
									 });
				});
			
			
			  //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
			  //but sometimes it brings up errors with normal resize event handlers
			  $.resize.throttleWindow = false;
			
			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "social networks",  data: 38.7, color: "#68BC31"},
				{ label: "search engines",  data: 24.5, color: "#2091CF"},
				{ label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
				{ label: "direct traffic",  data: 18.6, color: "#DA5430"},
				{ label: "other",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne", 
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);
			
			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);
			
			
			  //pie chart tooltip example
			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;
			
			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}
				
			 });
			
				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					$tooltip.remove();
				});
			
			
			
			
				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}
			
				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}
			
				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}
				
			
				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});
			
			
				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			
				$('.dialogs,.comments').ace_scroll({
					size: 300
			    });
				
				
				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if(ace.vars['touch'] && ace.vars['android']) {
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				  });
				}
			
				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {
						//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});
			
			
				//show the dropdowns on top or bottom depending on window height and menu position
				$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
					var offset = $(this).offset();
			
					var $w = $(window)
					if (offset.top > $w.scrollTop() + $w.innerHeight() - 100) 
						$(this).addClass('dropup');
					else $(this).removeClass('dropup');
				});
			
			})
		</script>
	</body>
</html>
