	<?php
/* @var $this TblTerceroController */
/* @var $model TblTercero */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbl-tercero-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<div class="span50">
			<?php echo $form->labelEx($model,'nombre'); ?>
			<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'nombre'); ?>
		</div>	
		<div class="span50">
			<?php echo $form->labelEx($model,'estado'); ?>
			<?php echo $form->textField($model,'estado'); ?>
			<?php echo $form->error($model,'estado'); ?>
		</div>	
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>45,'maxlength'=>245)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codep'); ?>
		<?php echo $form->textField($model,'codep',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'codep'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudad'); ?>
		<?php echo $form->textField($model,'ciudad',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ciudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'departamento'); ?>
		<?php echo $form->textField($model,'departament',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'departament'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pais'); ?>
		<?php echo $form->dropDownList($model,'pais', CHtml::listData(Countries::model()->findAll(),'id','country'));?>
		<?php echo $form->error($model,'pais'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fax'); ?>
		<?php echo $form->textField($model,'fax',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'fax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>45,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_c'); ?>
		<?php echo $form->textField($model,'user_c'); ?>
		<?php echo $form->error($model,'user_c'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_m'); ?>
		<?php echo $form->textField($model,'user_m'); ?>
		<?php echo $form->error($model,'user_m'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_c'); ?>
		<?php echo $form->textField($model,'date_c'); ?>
		<?php echo $form->error($model,'date_c'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_m'); ?>
		<?php echo $form->textField($model,'date_m'); ?>
		<?php echo $form->error($model,'date_m'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->