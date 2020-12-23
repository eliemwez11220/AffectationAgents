<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Ajout d'un nouvel Agent</h3>
            </div>
            <?php echo form_open('agent/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-4">
						<label for="Ville" class="control-label"><span class="text-danger">*</span>Ville residence</label>
						<div class="form-group">
							<select name="Ville" class="form-control">
								<option value="">select</option>
								<?php 
								$Ville_values = array(
									'lubumbashi'=>'Lubumbashi',
									'likasi'=>'Likasi',
									'kipushi'=>'Kipushi',
									'kolwezi'=>'Kolwezi',
									
								);

								foreach($Ville_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('Ville')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('Ville');?></span>
						</div>
					</div>
					<div class="col-md-4">
						<label for="NomAg" class="control-label"><span class="text-danger">*</span>Nom complet Agent</label>
						<div class="form-group">
							<input type="text" name="NomAg" value="<?php echo $this->input->post('NomAg'); ?>" class="form-control" id="NomAg" />
							<span class="text-danger"><?php echo form_error('NomAg');?></span>
						</div>
					</div>
					<div class="col-md-4">
						<label for="Province" class="control-label">Province d'origine</label>
						<div class="form-group">
							<input type="text" name="Province" value="<?php echo $this->input->post('Province'); ?>" class="form-control" id="Province" />
						</div>
					</div>
					<div class="col-md-4">
						<label for="Districte" class="control-label">District d'origine</label>
						<div class="form-group">
							<input type="text" name="Districte" value="<?php echo $this->input->post('Districte'); ?>" class="form-control" id="Districte" />
						</div>
					</div>
					<div class="col-md-4">
						<label for="Territoire" class="control-label">Territoire d'origine </label>
						<div class="form-group">
							<input type="text" name="Territoire" value="<?php echo $this->input->post('Territoire'); ?>" class="form-control" id="Territoire" />
						</div>
					</div>
					<div class="col-md-4">
						<label for="Telephone" class="control-label">Numero Telephone</label>
						<div class="form-group">
							<input type="text" name="Telephone" value="<?php echo $this->input->post('Telephone'); ?>" class="form-control" id="Telephone" />
							<span class="text-danger"><?php echo form_error('Telephone');?></span>
						</div>
					</div>
					<div class="col-md-4">
						<label for="Email" class="control-label">Adresse Email</label>
						<div class="form-group">
							<input type="text" name="Email" value="<?php echo $this->input->post('Email'); ?>" class="form-control" id="Email" />
							<span class="text-danger"><?php echo form_error('Email');?></span>
						</div>
					</div>
					<div class="col-md-4">
						<label for="Fonction" class="control-label"><span class="text-danger">*</span>Fonction</label>
						<div class="form-group">
							<input type="text" name="Fonction" value="<?php echo $this->input->post('Fonction'); ?>" class="form-control" id="Fonction" />
							<span class="text-danger"><?php echo form_error('Fonction');?></span>
						</div>
					</div>
					<div class="col-md-4">
						<label for="Adresse" class="control-label">Adresse residence</label>
						<div class="form-group">
							<input type="text" name="Adresse" value="<?php echo $this->input->post('Adresse'); ?>" class="form-control" id="Adresse" />
						</div>
					</div>
					<div class="col-md-4">
						<label for="Grade" class="control-label"><span class="text-danger">*</span>Grade</label>
						<div class="form-group">
							<input type="text" name="Grade" value="<?php echo $this->input->post('Grade'); ?>" class="form-control" id="Grade" />
							<span class="text-danger"><?php echo form_error('Grade');?></span>
						</div>
					</div>
					
					<div class="col-md-4">
						<label for="LieuNaissance" class="control-label"><span class="text-danger">*</span>LieuNaissance</label>
						<div class="form-group">
							<input type="text" name="LieuNaissance" value="<?php echo $this->input->post('LieuNaissance'); ?>" class="form-control" id="LieuNaissance" />
							<span class="text-danger"><?php echo form_error('LieuNaissance');?></span>
						</div>
					</div>
					<div class="col-md-4">
						<label for="DateNaissance" class="control-label"><span class="text-danger">*</span>DateNaissance</label>
						<div class="form-group">
							<input type="date" name="DateNaissance" value="<?php echo $this->input->post('DateNaissance'); ?>" class="form-control" id="DateNaissance" />
							<span class="text-danger"><?php echo form_error('DateNaissance');?></span>
						</div>
					</div>
					<div class="col-md-4">
						<label for="Matricule" class="control-label"><span class="text-danger">*</span>Numero Matricule Agent</label>
						<div class="form-group">
							<input type="text" name="Matricule" value="<?php echo $this->input->post('Matricule'); ?>" class="form-control" id="Matricule" />
							<span class="text-danger"><?php echo form_error('Matricule');?></span>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Enregistrer agent
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>