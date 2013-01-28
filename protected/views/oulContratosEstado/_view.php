<?php
/* @var $this OulContratosEstadoController */
/* @var $data OulContratosEstado */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('estadoID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->estadoID), array('view', 'id'=>$data->estadoID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />


</div>