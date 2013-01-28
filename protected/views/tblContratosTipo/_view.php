<?php
/* @var $this TblContratosTipoController */
/* @var $data TblContratosTipo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tipoID), array('view', 'id'=>$data->tipoID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />


</div>