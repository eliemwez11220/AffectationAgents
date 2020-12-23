<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Fiche Evaluation</h3>
            </div>
			<?php echo form_open('fiche_evaluation/edit/'.$fiche_evaluation['Id_evaluation']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="LiBourgmestre" class="control-label">Bureau Commune</label>
						<div class="form-group">
							<select name="LiBourgmestre" class="form-control">
								<option value="">select commune</option>
								<?php 
								foreach($all_communes as $commune)
								{
									$selected = ($commune['Commune_Id'] == $fiche_evaluation['LiBourgmestre']) ? ' selected="selected"' : "";

									echo '<option value="'.$commune['Commune_Id'].'" '.$selected.'>'.$commune['NomOfficier'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Date_evaluation" class="control-label">Date Evaluation</label>
						<div class="form-group">
							<input type="date" name="Date_evaluation" value="<?php echo ($this->input->post('Date_evaluation') ? $this->input->post('Date_evaluation') : $fiche_evaluation['Date_evaluation']); ?>" class="form-control" id="Date_evaluation" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Description" class="control-label">Description</label>
						<div class="form-group">
							<input type="text" name="Description" value="<?php echo ($this->input->post('Description') ? $this->input->post('Description') : $fiche_evaluation['Description']); ?>" class="form-control" id="Description" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Modifier fiche
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>