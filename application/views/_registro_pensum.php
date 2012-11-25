<div>
		<?php $this->load->helper('form');?>
		<?php  echo form_open('pensum/agregar', 'class = "well"'); ?>
		
		<div><h3>Registro de pensum</h3></div>   
		
		<h4>Fecha </h4>
		<input type="text" name="fecha" value="" size="50" />
		<?php echo form_error('fecha','<div class="alert alert-error">', '</div>'); ?>

		<h4>Carrera </h4>
		<input type="text" name="carrera_id" value="" size="50" />
		<?php echo form_error('carrera_id','<div class="alert alert-error">', '</div>'); ?>
		
		<div><input type="submit" value="Enviar" class = "btn btn-success"/> 
		</div>
		</form>
</div>