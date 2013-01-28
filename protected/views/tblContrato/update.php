<?php
/* @var $this TblContratoController */
/* @var $model TblContrato */

$this->breadcrumbs=array(
	'Tbl Contratos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',

);
$this->menu=array(
	array('label'=>'List TblContrato', 'url'=>array('index')),
	array('label'=>'Create TblContrato', 'url'=>array('create')),
	array('label'=>'View TblContrato', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblContrato', 'url'=>array('admin')),
);
?>

<h1>Actualizar Contrato #<?php echo $model->contratoN; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
 $this->widget('ext.EAjaxUpload.EAjaxUpload',
array(
        'id'=>'uploadFile',
        'config'=>array(
               'action'=>Yii::app()->createUrl('tblcontrato/upload'),
               'allowedExtensions'=>array("jpg","jpeg","gif","exe","mov","mp4","txt","doc","pdf","xls","3gp","php","ini","avi","rar","zip","png"),//array("jpg","jpeg","gif","exe","mov" and etc...
               'sizeLimit'=>1000*1024*1024,// maximum file size in bytes
               'minSizeLimit'=>1*1024,
               'auto'=>true,
               'multiple' => true,
               'onComplete'=>"js:function(id, fileName, responseJSON){ alert(fileName); }",
               'messages'=>array(
                                 'typeError'=>"{file} has invalid extension. Only {extensions} are allowed.",
                                'sizeError'=>"{file} is too large, maximum file size is {sizeLimit}.",
                                'minSizeError'=>"{file} is too small, minimum file size is {minSizeLimit}.",
                                'emptyError'=>"{file} is empty, please select files again without it.",
                                'onLeave'=>"The files are being uploaded, if you leave now the upload will be cancelled."
                               ),
               'showMessage'=>"js:function(message){ alert(message); }"
               )
 
               ));
?>