<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Demande Affectation Add</h3>
            </div>
            <?php echo form_open('demande_affectation/add'); ?>
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
						<label for="LiBourgmestre" class="control-label">Commune</label>
						<div class="form-group">
							<select name="LiBourgmestre" class="form-control">
								<option value="">select commune</option>
								<?php 
								foreach($all_communes as $commune)
								{
									$selected = ($commune['Commune_Id'] == $this->input->post('LiBourgmestre')) ? ' selected="selected"' : "";

									echo '<option value="'.$commune['Commune_Id'].'" '.$selected.'>'.$commune['NomOfficier'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Date_Demande" class="control-label">Date Demande</label>
						<div class="form-group">
							<input type="text" name="Date_Demande" value="<?php echo $this->input->post('Date_Demande'); ?>" class="has-datepicker form-control" id="Date_Demande" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>