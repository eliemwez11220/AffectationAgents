<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Piece Edit</h3>
            </div>
			<?php echo form_open('piece/edit/'.$piece['Id_Piece']); ?>
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
									$selected = ($agent['Agent_id'] == $piece['Matricule']) ? ' selected="selected"' : "";

									echo '<option value="'.$agent['Agent_id'].'" '.$selected.'>'.$agent['NomAg'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Date_Piece" class="control-label">Date Piece</label>
						<div class="form-group">
							<input type="text" name="Date_Piece" value="<?php echo ($this->input->post('Date_Piece') ? $this->input->post('Date_Piece') : $piece['Date_Piece']); ?>" class="form-control" id="Date_Piece" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Nom_Piece" class="control-label">Nom Piece</label>
						<div class="form-group">
							<input type="text" name="Nom_Piece" value="<?php echo ($this->input->post('Nom_Piece') ? $this->input->post('Nom_Piece') : $piece['Nom_Piece']); ?>" class="form-control" id="Nom_Piece" />
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