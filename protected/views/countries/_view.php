<?php
/* @var $this CountriesController */
/* @var $data Countries */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
	<?php echo CHtml::encode($data->country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iso2')); ?>:</b>
	<?php echo CHtml::encode($data->iso2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iso3')); ?>:</b>
	<?php echo CHtml::encode($data->iso3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('noc')); ?>:</b>
	<?php echo CHtml::encode($data->noc); ?>
	<br />


</div>