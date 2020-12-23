<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Nouvelle Affectation</h3>
            </div>
            <?php echo form_open('affectation/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="Service_sid" class="control-label">Service</label>
						<div class="form-group">
							<select name="Service_sid" class="form-control">
								<option value="">selectionnez un service</option>
								<?php 
								foreach($all_services as $service)
								{
									$selected = ($service['Service_id'] == $this->input->post('Service_sid')) ? ' selected="selected"' : "";

									echo '<option value="'.$service['Service_id'].'" '.$selected.'>'.$service['NomService'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Agent_sid" class="control-label"><span class="text-danger">*</span>Agent concerne</label>
						<div class="form-group">
							<select name="Agent_sid" class="form-control">
								<option value="">selectionnez agent</option>
								<?php 
								foreach($all_agents as $agent)
								{
									$selected = ($agent['Agent_id'] == $this->input->post('Agent_sid')) ? ' selected="selected"' : "";

									echo '<option value="'.$agent['Agent_id'].'" '.$selected.'>'.$agent['NomAg'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('Agent_sid');?></span>
						</div>
					</div>
					<div class="col-md-4">
						<label for="DateAffectation" class="control-label"><span class="text-danger">*</span>DateAffectation</label>
						<div class="form-group">
							<input type="date" name="DateAffectation" value="<?php echo $this->input->post('DateAffectation'); ?>" class="form-control" id="DateAffectation" />
							<span class="text-danger"><?php echo form_error('DateAffectation');?></span>
						</div>
					</div>
					
					<div class="col-md-4">
						<label for="PosteOccupe" class="control-label">PosteOccupe</label>
						<div class="form-group">
							<input type="text" name="PosteOccupe" value="<?php echo $this->input->post('PosteOccupe'); ?>" class="form-control" id="PosteOccupe" />
						</div>
					</div>
					<div class="col-md-4">
						<label for="NomGouverneur" class="control-label">NomGouverneur</label>
						<div class="form-group">
							<input type="text" name="NomGouverneur" value="<?php echo $this->input->post('NomGouverneur'); ?>" class="form-control" id="NomGouverneur" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Objectif" class="control-label">Objectif</label>
						<div class="form-group">
							<textarea name="Objectif" class="form-control" id="Objectif"><?php echo $this->input->post('Objectif'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="affec_observ" class="control-label">Observation sur l'affectation</label>
						<div class="form-group">
							<textarea name="affec_observ" class="form-control" id="affec_observ"><?php echo $this->input->post('affec_observ'); ?></textarea>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Enregistrer affectation
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>