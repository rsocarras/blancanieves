<?php
/* @var $this TblContratoController */
/* @var $model TblContrato */

$this->breadcrumbs=array(
	'Tbl Contratos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',

);
$this->menu=array(
	array('label'=>'Listar Contratos', 'url'=>array('index')),
	array('label'=>'Crear Contrato', 'url'=>array('create')),
	array('label'=>'Ver Contrato', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Contrato', 'url'=>array('admin')),
);
?>

<h1>Actualizar Contrato #<?php echo $model->contratoN; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
$criteria = new CDbCriteria;
$criteria->select = 'id, nombre_archivo,tamanio'; // select fields which you want in output
$criteria->condition = " id_contrato = '".$_GET['id']."' ";
$documents = TblDocumentos::model()->findAll($criteria);
$documents  = CHtml::listData($documents, 'id', 'nombre_archivo' );
if(is_array($documents)){
    echo "<h4>Archivos</h4>";
    echo "<table>";
    foreach($documents as $d => $c){
        echo "<tr> ";
        echo "<td>$d</td><td>$c</td>";
        echo "</tr>";
    }
    echo "</table>";
}
$this->widget('ext.EAjaxUpload.EAjaxUpload',
array(
        'id'=>'uploadFile',
        'config'=>array(
               'action'=>Yii::app()->createUrl('tblContrato/upload'),
               'allowedExtensions'=>array("jpg","jpeg","gif","exe","mov","mp4","txt","doc","pdf","xls","3gp","php","ini","avi","rar","zip","png"),
               'sizeLimit'=>1000*1024*1024,// maximum file size in bytes
               'minSizeLimit'=>1*1024,
               'auto'=>true,
               'encoding' => 'multipart',
               'multiple' => true,
               'onSubmit'=>'js:function(file, ext){  this.params.cid = ' . $_GET['id'] . ';}',
               'onComplete'=>"js:function(id, fileName, responseJSON){ } ",
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
