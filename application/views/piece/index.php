<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Piece Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('piece/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Piece</th>
						<th>Matricule</th>
						<th>Date Piece</th>
						<th>Nom Piece</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($piece as $p){ ?>
                    <tr>
						<td><?php echo $p['Id_Piece']; ?></td>
						<td><?php echo $p['Matricule']; ?></td>
						<td><?php echo $p['Date_Piece']; ?></td>
						<td><?php echo $p['Nom_Piece']; ?></td>
						<td>
                            <a href="<?php echo site_url('piece/edit/'.$p['Id_Piece']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('piece/remove/'.$p['Id_Piece']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
