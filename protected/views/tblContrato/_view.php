<?php
/* @var $this TblContratoController */
/* @var $data TblContrato */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contratoN')); ?>:</b>
	<?php echo CHtml::encode($data->contratoN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estadoID')); ?>:</b>
	<?php echo CHtml::encode($data->estadoID); ?>
	<br />

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('terceroID')); ?>:</b>
	<?php echo CHtml::encode($data->terceroID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empresaID')); ?>:</b>
	<?php echo CHtml::encode($data->empresaID); ?>
	<br />



	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha de Inicio')); ?>:</b>
	<?php echo CHtml::encode($data->start_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha De Final')); ?>:</b>
	<?php echo CHtml::encode($data->end_date); ?>
	<br />
<?php /*
<b><?php echo CHtml::encode($data->getAttributeLabel('tipoID')); ?>:</b>
	<?php echo CHtml::encode($data->tipoID); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('contratanteID')); ?>:</b>
	<?php echo CHtml::encode($data->contratanteID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_address')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('objeto')); ?>:</b>
	<?php echo CHtml::encode($data->objeto); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarioID')); ?>:</b>
	<?php echo CHtml::encode($data->usuarioID); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('mod_date')); ?>:</b>
	<?php echo CHtml::encode($data->mod_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor')); ?>:</b>
	<?php echo CHtml::encode($data->valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userID')); ?>:</b>
	<?php echo CHtml::encode($data->userID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_c')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_c); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_m')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_m); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_c')); ?>:</b>
	<?php echo CHtml::encode($data->user_c); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_m')); ?>:</b>
	<?php echo CHtml::encode($data->user_m); ?>
	<br />

	*/ ?>
	

</div>