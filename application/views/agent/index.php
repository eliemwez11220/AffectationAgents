<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing Agents </h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('agent/add'); ?>" class="btn btn-success btn-sm">Ajouter nouvel agent</a> 
                </div>
            </div>
            <div class="box-body">
            	 <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>NomAg</th>
						<th>Ville</th>
						
						<th>Telephone</th>
						<th>Email</th>
						<th>Fonction</th>
						<th>Adresse</th>
						
						<th>LieuNaissance</th>
						<th>DateNaissance</th>
						<th>Matricule</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($agents as $t){ ?>
                    <tr>
						<td><?php echo $t['Agent_id']; ?></td>
						
						<td><?php echo $t['NomAg']; ?></td>
						<td><?php echo $t['Ville']; ?></td>
						<td><?php echo $t['Telephone']; ?></td>
						<td><?php echo $t['Email']; ?></td>
						<td><?php echo $t['Fonction']; ?></td>
						<td><?php echo $t['Adresse']; ?></td>
						
						<td><?php echo $t['LieuNaissance']; ?></td>
						<td><?php echo $t['DateNaissance']; ?></td>
						<td><?php echo $t['Matricule']; ?></td>
						<td>
                            <a href="<?php echo site_url('agent/edit/'.$t['Agent_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editer </a> 
                            <a href="<?php echo site_url('agent/remove/'.$t['Agent_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> supprimer</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
