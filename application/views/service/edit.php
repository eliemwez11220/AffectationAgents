<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Service Edition</h3>
            </div>
			<?php echo form_open('service/edit/'.$service['Service_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="Commune_sid" class="control-label">Bureau Communal</label>
						<div class="form-group">
							<select name="Commune_sid" class="form-control">
								<option value="">select un bureau commune</option>
								<?php 
								foreach($all_communes as $commune)
								{
									$selected = ($commune['Commune_Id'] == $service['Commune_sid']) ? ' selected="selected"' : "";

									echo '<option value="'.$commune['Commune_Id'].'" '.$selected.'>'.$commune['NomCommune'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="NomService" class="control-label"><span class="text-danger">*</span>NomService</label>
						<div class="form-group">
							<input type="text" name="NomService" value="<?php echo ($this->input->post('NomService') ? $this->input->post('NomService') : $service['NomService']); ?>" class="form-control" id="NomService" />
							<span class="text-danger"><?php echo form_error('NomService');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="NomResponsable" class="control-label"><span class="text-danger">*</span>NomResponsable</label>
						<div class="form-group">
							<input type="text" name="NomResponsable" value="<?php echo ($this->input->post('NomResponsable') ? $this->input->post('NomResponsable') : $service['NomResponsable']); ?>" class="form-control" id="NomResponsable" />
							<span class="text-danger"><?php echo form_error('NomResponsable');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="AdresseBureau" class="control-label"><span class="text-danger">*</span>AdresseBureau</label>
						<div class="form-group">
							<input type="text" name="AdresseBureau" value="<?php echo ($this->input->post('AdresseBureau') ? $this->input->post('AdresseBureau') : $service['AdresseBureau']); ?>" class="form-control" id="AdresseBureau" />
							<span class="text-danger"><?php echo form_error('AdresseBureau');?></span>
						</div>
					</div>
					
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Enregistrer modifications
					</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>