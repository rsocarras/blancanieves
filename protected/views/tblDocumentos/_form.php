<?php
/* @var $this TblDocumentosController */
/* @var $model TblDocumentos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbl-documentos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_contrato'); ?>
		<?php echo $form->textField($model,'id_contrato'); ?>
		<?php echo $form->error($model,'id_contrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contenido'); ?>
		<?php echo $form->textField($model,'contenido'); ?>
		<?php echo $form->error($model,'contenido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tamanio'); ?>
		<?php echo $form->textField($model,'tamanio',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'tamanio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_archivo'); ?>
		<?php echo $form->textField($model,'nombre_archivo',array('size'=>55,'maxlength'=>55)); ?>
		<?php echo $form->error($model,'nombre_archivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tamanio_unidad'); ?>
		<?php echo $form->textField($model,'tamanio_unidad',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tamanio_unidad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->