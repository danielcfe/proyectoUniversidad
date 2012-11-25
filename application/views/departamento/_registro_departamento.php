<div>
		<?php $this->load->helper('form');?>
		<?php  echo form_open('departamento/agregar', ''); ?>
		
		<h4>Registro de departamentos</h4>     
		
		<h4>Nombre </h4>
		<input type="text" name="nombre" value="" size="50" placeholder = "Informatica" />
		<?php echo form_error('nombre','<div class="alert alert-error">', '</div>'); ?>
		
		<div><input type="submit" value="Enviar" class = "btn btn-success"/> 
		</div>
		</form>
</div>
