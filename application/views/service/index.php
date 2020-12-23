<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Services Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('service/add'); ?>" class="btn btn-success btn-sm">Ajouter nouveau service</a> 
                </div>
            </div>
            <div class="box-body">
                 <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
						<th>Id</th>
						<th>Commune Sid</th>
						<th>NomService</th>
						<th>NomResponsable</th>
						<th>AdresseBureau</th>
						
						<th>Actions</th>
                    </tr>
                    <?php foreach($services as $t){ ?>
                    <tr>
						<td><?php echo $t['Service_id']; ?></td>
						<td><?php echo $t['Commune_sid']; ?></td>
						<td><?php echo $t['NomService']; ?></td>
						<td><?php echo $t['NomResponsable']; ?></td>
						<td><?php echo $t['AdresseBureau']; ?></td>
						
						<td>
                            <a href="<?php echo site_url('service/edit/'.$t['Service_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editer</a> 
                            <a href="<?php echo site_url('service/remove/'.$t['Service_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> supprimer</a>
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
