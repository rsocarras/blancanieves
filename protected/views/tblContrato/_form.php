<?php
/* @var $this TblContratoController */
/* @var $model TblContrato */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbl-contrato-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'contratoN'); ?>
		<?php echo $form->textField($model,'contratoN',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'contratoN'); ?>
	</div>
	<div class="row">
		<div class="span30">
			<?php echo $form->labelEx($model,'start_date'); ?>
			<?php #echo $form->textField($model,'start_date'); 

			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model'=>$model,
					'attribute'=>'start_date',
					'language'=>'es',
					'options'=>array(
						 'dateFormat'=>'yy-mm-dd',
						'constrainInput'=>'false',
						'duration'=>'fast',
						'showAnim'=>'slide',
						),

					));

			?>
			<?php echo $form->error($model,'start_date'); ?>
		</div>

		<div class="span30">
			<?php echo $form->labelEx($model,'end_date'); ?>
			<?php #echo $form->textField($model,'end_date'); 

			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model'=>$model,
					'attribute'=>'end_date',
					'language'=>'es',
					'options'=>array(
						'dateFormat'=>'yy-mm-dd',
						'constrainInput'=>'false',
						'duration'=>'fast',
						'showAnim'=>'slide',
						),

					));

			?>
			<?php echo $form->error($model,'end_date'); ?>
		</div>
		<div class="span30">
			<?php echo $form->labelEx($model,'valor'); ?>
			<?php echo $form->textField($model,'valor',array('size'=>30,'maxlength'=>10)); ?>
			<?php echo $form->error($model,'valor'); ?>
		</div>
	</div>	
	<div class="row">
		<div class="span30">
			<?php echo $form->labelEx($model,'estadoID'); ?>
			<?php echo $form->dropDownList($model,'estadoID', CHtml::listData(OulContratosEstado::model()->findAll(),'estadoID','estado'));?>
			<?php echo $form->error($model,'estadoID'); ?>
		</div>	
		<div class="span30">
			<?php echo $form->labelEx($model,'tipoID'); ?>
			<?php echo $form->dropDownList($model,'tipoID', CHtml::listData(TblContratosTipo::model()->findAll(),'tipoID','tipo'));?>
			<?php echo $form->error($model,'tipoID'); ?>
		</div>
		<div class="span30">
			<?php echo $form->labelEx($model,'usuarioID'); ?>
			<?php echo $form->dropDownList($model,'usuarioID', CHtml::listData(TblUser::model()->findAll(),'id','username'));?>
			<?php echo $form->error($model,'usuarioID'); ?>
		</div>	
	</div>
	<hr>
	<div class="row">
		<div class="span30">
			<?php echo $form->labelEx($model,'terceroID'); ?>
			<?php echo $form->dropDownList($model,'terceroID', CHtml::listData(TblTercero::model()->findAll(),'terceroID','nombre'));?>
			<?php echo $form->error($model,'terceroID'); ?>
		</div>

		<div class="span30">
			<?php echo $form->labelEx($model,'empresaID'); ?>
			<?php echo $form->textField($model,'empresaID'); ?>
			<?php echo $form->error($model,'empresaID'); ?>
		</div>

		<div class="span30">
			<?php echo $form->labelEx($model,'contratanteID'); ?>
			<?php echo $form->textField($model,'contratanteID'); ?>
			<?php echo $form->error($model,'contratanteID'); ?>
		</div>
	</div>
	<hr>
	<div class="row">
		<?php echo $form->labelEx($model,'shipping_address'); ?>
		<?php echo $form->textField($model,'shipping_address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'shipping_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'objeto'); ?>
		<?php echo $form->textArea($model,'objeto',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'objeto'); ?>
	</div>



	<div class="row">
		<?php //echo $form->labelEx($model,'userID'); ?>
		<?php //echo $form->textField($model,'userID'); ?>
		<?php echo $form->hiddenField($model,'userID',array('type'=>'hidden')); ?>
		<?php echo $form->error($model,'userID'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'fecha_c'); ?>
		<?php //echo $form->textField($model,'fecha_c',array('value'=>date('Y-d-m'))); ?>
		<?php echo $form->hiddenField($model,'fecha_c',array('type'=>'hidden','value'=>date('Y-m-d H:m:s'))); ?>
		<?php echo $form->error($model,'fecha_c'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'fecha_m'); ?>
		<?php echo $form->hiddenField($model,'fecha_m',array('type'=>'hidden','value'=>date('Y-m-d H:m:s'))); ?>
		<?php //echo $form->textField($model,'fecha_m',array('value'=>date('Y-m-d H:m:s'))); ?>
		<?php echo $form->error($model,'fecha_m'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'user_c'); ?>
		<?php echo $form->hiddenField($model,'user_c',array('type'=>'hidden')); ?>
		<?php //echo $form->textField($model,'user_c'); ?>
		<?php echo $form->error($model,'user_c'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'user_m'); ?>
		<?php echo $form->hiddenField($model,'user_m',array('type'=>'hidden','value'=>"'". Yii::app()->user->name ."'")); ?>
		<?php //echo $form->textField($model,'user_m'); ?>
		<?php echo $form->error($model,'user_m'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->