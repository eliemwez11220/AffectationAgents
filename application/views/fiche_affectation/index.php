<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Fiche Affectation Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('fiche_affectation/add'); ?>" class="btn btn-success btn-sm">creer fiche affectation</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Matricule</th>
						<th>DateFiche</th>
						<th>Objectif</th>
						<th>Gouverneur</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($fiche_affectation as $f){ ?>
                    <tr>
						<td><?php echo $f['Id']; ?></td>
						<td><?php echo $f['Matricule']; ?></td>
						<td><?php echo $f['DateFiche_service']; ?></td>
						<td><?php echo $f['Objectif']; ?></td>
						<td><?php echo $f['Id_gouverneur']; ?></td>
						<td>
                            <a href="<?php echo site_url('fiche_affectation/edit/'.$f['Id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editer</a> 
                            <a href="<?php echo site_url('fiche_affectation/remove/'.$f['Id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Supprimer</a>
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
