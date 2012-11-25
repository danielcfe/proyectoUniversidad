<div>
		<?php $this->load->helper('form');?>
		<?php  echo form_open('departamento/agregar', 'class = "well"'); ?>
		
		<h1>Registro de departamentos</h1>     
		
		<h4>Nombre </h4>
		<input type="text" name="nombre" value="" size="50" />
		<?php echo form_error('nombre','<div class="alert alert-error">', '</div>'); ?>
		
		<div><input type="submit" value="Enviar"/> 
		</div>
		</form>
</div>
