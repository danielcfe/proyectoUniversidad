<div>
		<?php $this->load->helper('form');?>
		<?php  echo form_open('carrera/agregar', 'class = "well"'); ?>
		
		<h1>Registro de carreras</h1>     
		
		<h4>Carrera </h4>
		<input type="text" name="nombre" value="" size="50" />
		<?php echo form_error('nombre','<div class="alert alert-error">', '</div>'); ?>

		<h4>Departamento </h4>
		<input type="text" name="departamento_id" value="" size="50" />
		<?php echo form_error('departamento_id','<div class="alert alert-error">', '</div>'); ?>
		
		<div><input type="submit" value="Enviar"/> 
		</div>
		</form>
</div>