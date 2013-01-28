<?php
/* @var $this CountriesController */
/* @var $model Countries */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'countries-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iso2'); ?>
		<?php echo $form->textField($model,'iso2',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'iso2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iso3'); ?>
		<?php echo $form->textField($model,'iso3',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'iso3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'noc'); ?>
		<?php echo $form->textField($model,'noc',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'noc'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->