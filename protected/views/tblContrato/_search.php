<?php
/* @var $this TblContratoController */
/* @var $model TblContrato */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contratoN'); ?>
		<?php echo $form->textField($model,'contratoN',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estadoID'); ?>
		<?php echo $form->textField($model,'estadoID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoID'); ?>
		<?php echo $form->textField($model,'tipoID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuarioID'); ?>
		<?php echo $form->textField($model,'usuarioID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'terceroID'); ?>
		<?php echo $form->textField($model,'terceroID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'empresaID'); ?>
		<?php echo $form->textField($model,'empresaID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contratanteID'); ?>
		<?php echo $form->textField($model,'contratanteID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shipping_address'); ?>
		<?php echo $form->textField($model,'shipping_address',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'objeto'); ?>
		<?php echo $form->textArea($model,'objeto',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'start_date'); ?>
		<?php echo $form->textField($model,'start_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'end_date'); ?>
		<?php echo $form->textField($model,'end_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mod_date'); ?>
		<?php echo $form->textField($model,'mod_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor'); ?>
		<?php echo $form->textField($model,'valor',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'userID'); ?>
		<?php echo $form->textField($model,'userID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_c'); ?>
		<?php echo $form->textField($model,'fecha_c'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_m'); ?>
		<?php echo $form->textField($model,'fecha_m'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_c'); ?>
		<?php echo $form->textField($model,'user_c'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_m'); ?>
		<?php echo $form->textField($model,'user_m'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->