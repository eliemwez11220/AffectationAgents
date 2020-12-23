<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Bourgmestre Communes Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('commune/add'); ?>" class="btn btn-success btn-sm">Ajouter nouveau</a> 
                </div>
            </div>
            <div class="box-body">
                 <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
						<th>Id</th>
						<th>NomCommune</th>
						<th>NomBourgmestre</th>
						<th>AdresseBureau</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($communes as $t){ ?>
                    <tr>
						<td><?php echo $t['Commune_Id']; ?></td>
						<td><?php echo $t['NomCommune']; ?></td>
						<td><?php echo $t['NomOfficier']; ?></td>
						<td><?php echo $t['AdresseBureau']; ?></td>
						<td>
                            <a href="<?php echo site_url('commune/edit/'.$t['Commune_Id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editer</a> 
                            <a href="<?php echo site_url('commune/remove/'.$t['Commune_Id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Supprimer</a>
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
