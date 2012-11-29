<div>
		<?php $this->load->helper('form');?>
		<?php  echo form_open('carrera/agregar', 'class = ""'); ?>
		
		<div><h3>Registro de carreras</h3></div>  

		<h4>Departamento </h4>
		<input type="text"  id = "departamento" value="" size="50" />
		<?php echo form_error('departamento_id','<div class="alert alert-error">', '</div>'); ?>

		<h4>Carrera </h4>
		<input type="text" name="nombre" value="" size="50" />
		<?php echo form_error('nombre','<div class="alert alert-error">', '</div>'); ?>

		<input type="hidden" name="departamento_id" id = "departamento_id" value="" size="50" />
		
		<div><input type="submit" value="Enviar Informacion" class = "btn btn-primary"/> 
		</div>
		</form>
</div>