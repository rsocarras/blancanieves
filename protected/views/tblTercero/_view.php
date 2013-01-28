<?php
/* @var $this TblTerceroController */
/* @var $data TblTercero */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('terceroID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->terceroID), array('view', 'id'=>$data->terceroID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codep')); ?>:</b>
	<?php echo CHtml::encode($data->codep); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudad')); ?>:</b>
	<?php echo CHtml::encode($data->ciudad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departament')); ?>:</b>
	<?php echo CHtml::encode($data->departament); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pais')); ?>:</b>
	<?php echo CHtml::encode($data->pais); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fax')); ?>:</b>
	<?php echo CHtml::encode($data->fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_c')); ?>:</b>
	<?php echo CHtml::encode($data->user_c); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_m')); ?>:</b>
	<?php echo CHtml::encode($data->user_m); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_c')); ?>:</b>
	<?php echo CHtml::encode($data->date_c); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_m')); ?>:</b>
	<?php echo CHtml::encode($data->date_m); ?>
	<br />

	*/ ?>

</div>