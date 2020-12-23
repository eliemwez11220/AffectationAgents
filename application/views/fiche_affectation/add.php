<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Fiche Affectation</h3>
            </div>
            <?php echo form_open('fiche_affectation/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="Matricule" class="control-label">Agent</label>
						<div class="form-group">
							<select name="Matricule" class="form-control">
								<option value="">select agent</option>
								<?php 
								foreach($all_agents as $agent)
								{
									$selected = ($agent['Agent_id'] == $this->input->post('Matricule')) ? ' selected="selected"' : "";

									echo '<option value="'.$agent['Agent_id'].'" '.$selected.'>'.$agent['NomAg'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="DateFiche_service" class="control-label">DateFiche Service</label>
						<div class="form-group">
							<input type="date" name="DateFiche_service" value="<?php echo $this->input->post('DateFiche_service'); ?>" class="form-control" id="DateFiche_service" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Objectif" class="control-label">Objectif</label>
						<div class="form-group">
							<input type="text" name="Objectif" value="<?php echo $this->input->post('Objectif'); ?>" class="form-control" id="Objectif" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Id_gouverneur" class="control-label">Nom Gouverneur</label>
						<div class="form-group">
							<input type="text" name="Id_gouverneur" value="<?php echo $this->input->post('Id_gouverneur'); ?>" class="form-control" id="Id_gouverneur" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Enregistrer
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>