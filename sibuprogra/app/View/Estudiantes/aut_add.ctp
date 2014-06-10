<div class="estudiantes form">
<?php echo $this->Form->create('Estudiante'); ?>
    <fieldset>
        <legend><?php echo __('Registro de Nuevo Estudiante'); ?></legend>
        <div class="col-md-12">
            <div class="col-md-2"> <?php echo "<label>Identificación</label><br>".$this->Form->input('identificacion',array('size'=>12,'label'=>false)); ?> </div>
            <div class="col-md-2"> <?php echo "<label>Código Est.</label><br>".$this->Form->input('codigo',array('size'=>12,'label'=>false)); ?> </div>
            <div class="col-md-3"> <?php echo "<label>Nombres</label><br>".$this->Form->input('nombres',array('size'=>20,'label'=>false)); ?> </div>
            <div class="col-md-3"> <?php echo "<label>Apellidos</label><br>".$this->Form->input('apellidos',array('size'=>20,'label'=>false)); ?> </div>
       </div>
        <div class="col-md-12"><br>
            <div class="col-md-2"> <?php echo "<label>Género</label><br>".$this->Form->select('genero',array('M'=>'M','F'=>'F'),array('empty'=>false)); ?> </div>
            <div class="col-md-2"> <?php echo "<label>Teléfono</label><br>".$this->Form->input('telefono',array('size'=>12,'label'=>false)); ?> </div>
            <div class="col-md-2"> <?php echo "<label>Celular</label><br>".$this->Form->input('celular',array('size'=>12,'label'=>false)); ?> </div>
            <div class="col-md-6"> <?php echo "<label>Fecha Nac.</label><br>".$this->Form->input('fec_nac',array('label'=>false)); ?> </div>
        </div>
        <div class="col-md-12"><br>
            <div class="col-md-4"> <?php echo "<label>Programa</label><br>".$this->Form->input('programa_id',array('label'=>false)); ?> </div>
            <div class="col-md-8"> <?php echo "<label>Dirección y Barrio</label><br>".$this->Form->input('direccion',array('label'=>false,'type'=>'text','size'=>30)); ?> </div>
        </div>
        <div class="col-md-12"><br><?php echo $this->Form->end(__('Aceptar')); ?></div>
    </fieldset>
</div>
<div class="actions">
	<ul>
	</ul>
</div>
