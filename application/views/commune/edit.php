<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Bourgmestre Commune Edition</h3>
            </div>
			<?php echo form_open('commune/edit/'.$commune['Commune_Id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="NomCommune" class="control-label">NomCommune</label>
						<div class="form-group">
							<input type="text" name="NomCommune" value="<?php echo ($this->input->post('NomCommune') ? $this->input->post('NomCommune') : $commune['NomCommune']); ?>" class="form-control" id="NomCommune" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="NomOfficier" class="control-label">NomOfficier</label>
						<div class="form-group">
							<input type="text" name="NomOfficier" value="<?php echo ($this->input->post('NomOfficier') ? $this->input->post('NomOfficier') : $commune['NomOfficier']); ?>" class="form-control" id="NomOfficier" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="AdresseBureau" class="control-label">AdresseBureau</label>
						<div class="form-group">
							<textarea name="AdresseBureau" class="form-control" id="AdresseBureau"><?php echo ($this->input->post('AdresseBureau') ? $this->input->post('AdresseBureau') : $commune['AdresseBureau']); ?></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Enregistrer modification
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>