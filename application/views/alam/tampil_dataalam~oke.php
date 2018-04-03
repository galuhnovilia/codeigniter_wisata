<script type="text/javascript">
	$(function(){
		//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					"aoColumns": [
					  
					  null, null,null, null, null,
					  { "bSortable": false }
					]});
					
	})
</script>


<table  id="dynamic-table" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>no</th>
			<th>Nama Alam</th>
			<th>lokasi</th>
			<th>link gambar</th>
			<th>keterangan</th>
			<th>aksi</th>
		</tr>
	</thead>

	<tbody>
		<tr>
		<?php 
		$no = 1;
		foreach ($data->result() as $row) {?>
			<td><?php echo $no++; ?></td>
			<!-- mengambil dari database-->
			<td><?php echo $row->namaa ; ?></td>
			<td><?php echo $row->lokasia ; ?></td>
			<td><?php echo $row->linka ; ?></td>
			<td><?php echo $row->keta ; ?></td>
			<td>
			<div class="hidden-sm hidden-xs action-buttons">
				<!--<a class="blue" href="#">
					<i class="ace-icon fa fa-search-plus bigger-130"></i>
				</a>
				-->

				<a class="green" href="#">
					<i class="ace-icon fa fa-pencil bigger-130"></i>
				</a>

				<a class="red" href="#">
					<i class="ace-icon fa fa-trash-o bigger-130"></i>
				</a>
			</div>
			</td>
			
		</tr>
		<?php } ?>
	</tbody>
</table>