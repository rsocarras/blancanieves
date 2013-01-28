<?php
/* @var $this TblContratoController */
/* @var $model TblContrato */

$this->breadcrumbs=array(
	'Contratos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista Contratos', 'url'=>array('index')),
	array('label'=>'Crear Contrato', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tbl-contrato-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar  Contratos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tbl-contrato-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'contratoN',
		'estadoID',
		'start_date',
		'end_date',
		/*
				'tipoID',
		'usuarioID',
		'terceroID',
		'empresaID',
		'contratanteID',
		'shipping_address',
		'objeto',
		'start_date',
		'end_date',
		'mod_date',
		'valor',
		'userID',
		'fecha_c',
		'fecha_m',
		'user_c',
		'user_m',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
