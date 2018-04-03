<form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/lokasi2/index" enctype="multipart/form-data" >
	<div class="form-group">
		<label class="col-sm-1 control-label no-padding-right">PIlih Shared</label>
		<div class="col-sm-3">
			<select id="user" class="form-control" type="text" name="user" required>
				<option value=''>- Pilih Pengguna -</option>
				<?php
				$no = 1;
				foreach ($data ->result() as $row ) {
					//$this->db->where('nama_kategori');
					
					$query = $this->db->get('kategori');
					/*if ($query->num_rows()>0)
					{
						foreach ($query->result() as $row) 
						{
							$kepada   =$row->kepada;
						}
					}*/
					//elseif (($row->username==$this->session->userdata('username'))||($row->username==$kepada)) {
					// } 
					?>
						<option value='<?php echo $row->nama_kategori;?>'><?php echo $row->nama_kategori;?></option>
						<?php }?>
					</select>
				</div>
			</div>
			<div>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<button type="submit" class="btn btn-primary btn-small">Simpan</button>
				<button type="reset" class="btn btn-primary btn-small">Reset</button>
				<a href="<?php echo base_url();?>index.php/lokasi2" class="btn btn-primary btn-small">Tutup</a>
			</div>
		</form>