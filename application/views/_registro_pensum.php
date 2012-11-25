<div>
		<?php $this->load->helper('form');?>
		<?php  echo form_open('pensum/agregar', 'class = "well"'); ?>
		
		<h1>Registro de pensum</h1>     
		
		<h4>Fecha </h4>
		<input type="text" name="fecha" value="" size="50" />
		<?php echo form_error('fecha','<div class="alert alert-error">', '</div>'); ?>

		<h4>Carrera </h4>
		<input type="text" name="carrera_id" value="" size="50" />
		<?php echo form_error('carrera_id','<div class="alert alert-error">', '</div>'); ?>
		
		<div><input type="submit" value="Enviar"/> 
		</div>
		</form>
</div>