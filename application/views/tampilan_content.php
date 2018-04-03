<div class="alert alert-block alert-success">
	<button type="button" class="close" data-dismiss="alert">
		<i class="ace-icon fa fa-times"></i>
	</button>
	<i class="ace-icon fa fa-check green"></i>
	Selamat datang
	<?php
	$user=$this->session->userdata('username');
	echo $user ?> di
	<strong class="green">
		Sistem Informasi Destinasi Wisata Kabupaten Cilacap
		<small></small>
	</strong>
</div>
