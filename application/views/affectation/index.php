<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Liste des Affectations </h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('affectation/add'); ?>" class="btn btn-success btn-sm">Ajouter une nouvelle affectation</a> 
                </div>
            </div>
            <div class="box-body">  
                <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>ServiceID</th>
						<th>Agent Matricule</th>
						<th>DateAffectation</th>
						
						<th>PosteOccupe</th>
						<th>NomGouverneur</th>
						<th>Objectif</th>
						<th>Observation</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($affectations as $t){ ?>
                    <tr>
						<td><?php echo $t['Affectation_id']; ?></td>
						<td><?php echo $t['Service_sid']; ?></td>
						<td><?php echo $t['Agent_sid']; ?></td>
						<td><?php echo $t['DateAffectation']; ?></td>
						
						<td><?php echo $t['PosteOccupe']; ?></td>
						<td><?php echo $t['NomGouverneur']; ?></td>
						<td><?php echo $t['Objectif']; ?></td>
						<td><?php echo $t['affec_observ']; ?></td>
						<td>
                            <a href="<?php echo site_url('affectation/edit/'.$t['Affectation_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editer</a> 
                            <a href="<?php echo site_url('affectation/remove/'.$t['Affectation_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Supprimer</a>
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
