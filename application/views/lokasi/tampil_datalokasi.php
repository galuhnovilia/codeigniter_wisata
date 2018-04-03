
<script type="text/javascript">
	$(function(){
		//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					"aoColumns": [
					  
					  null, null,null, null, null, null, null, null, null,
					  { "bSortable": false }
					]});
					
	})
</script>


<!--<p><a href="<?php echo base_url();?>index.php/lokasi/tambah" class="btn btn-primary btn-small">Tambah Data</a></p>-->
<table  id="dynamic-table" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>NO</th>
			<th>Nama lokasi</th>
			<th>lokasi</th>
			<th>keterangan</th>
			<th>link Gambar</th>
			<th>longitude</th>
			<th>latitude</th>
			
			<th>Nama Kategori</th>
			<th>Foto lokasi</th>
			<th>Aksi</th>
		</tr>
	</thead>

	<tbody>
		<tr>
		<?php 
		$no = 1;
		foreach ($data->result() as $row) {?>
			<td><?php echo $no++; ?></td>
			<!-- mengambil dari database-->
			<td><?php echo $row->nama_lokasi ; ?></td>
			<td><?php echo $row->lokasi ; ?></td>
			<td><?php echo $row->keta ; ?></td>
			<td><?php echo $row->longtd ; ?></td>
			<td><?php echo $row->lattd ; ?></td>
			<td><?php echo $row->linka ; ?></td>
			<td><?php echo $row->nama_kategori ; ?></td>
			
			<td><img src="<?php echo base_url();?>photos/<?php echo $row->linka; ?>" style="height: 50px;width: 100px;"/></td>
			
			<td>
			<div class="hidden-sm hidden-xs action-buttons"> 
			
				<!--<a class="blue" href="#">
					<i class="ace-icon fa fa-search-plus bigger-130"></i>
				</a>
				-->

				<a class="green" href="<?php echo base_url();?>index.php/lokasi2/edit/<?php echo $row->id; ?>">
					<i class="ace-icon fa fa-pencil bigger-130"></i>
				</a>
				

				<a class="red" href="<?php echo base_url();?>index.php/lokasi2/delete/<?php echo $row->id; ?>" onclick="return confirm('Anda yakin akan menghapus data ini ?');">
					<i class="ace-icon fa fa-trash-o bigger-130"></i>
				</a>
				</div>
			
			</td>
			
			
		</tr>
		<?php } ?>
	</tbody>
</table>