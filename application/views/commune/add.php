<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Ajout bourgmestre Commune</h3>
            </div>
            <?php echo form_open('commune/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="NomCommune" class="control-label">NomCommune</label>
						<div class="form-group">
							<input type="text" name="NomCommune" value="<?php echo $this->input->post('NomCommune'); ?>" class="form-control" id="NomCommune" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="NomOfficier" class="control-label">NomOfficier</label>
						<div class="form-group">
							<input type="text" name="NomOfficier" value="<?php echo $this->input->post('NomOfficier'); ?>" class="form-control" id="NomOfficier" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="AdresseBureau" class="control-label">AdresseBureau</label>
						<div class="form-group">
							<textarea name="AdresseBureau" class="form-control" id="AdresseBureau"><?php echo $this->input->post('AdresseBureau'); ?></textarea>
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