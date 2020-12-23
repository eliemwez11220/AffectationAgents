<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Fiche Evaluation Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('fiche_evaluation/add'); ?>" class="btn btn-success btn-sm">Creer une nouvelle fiche</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id</th>
						<th>LiBourgmestre</th>
						<th>Date Evaluation</th>
						<th>Description</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($fiche_evaluation as $f){ ?>
                    <tr>
						<td><?php echo $f['Id_evaluation']; ?></td>
						<td><?php echo $f['LiBourgmestre']; ?></td>
						<td><?php echo $f['Date_evaluation']; ?></td>
						<td><?php echo $f['Description']; ?></td>
						<td>
                            <a href="<?php echo site_url('fiche_evaluation/edit/'.$f['Id_evaluation']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editer</a> 
                            <a href="<?php echo site_url('fiche_evaluation/remove/'.$f['Id_evaluation']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Supprimer</a>
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
