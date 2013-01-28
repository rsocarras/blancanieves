<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<!-- <h1>Bienvenidos a  <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1> -->
<div style="text-align:center;">
	<?php 
	echo CHtml::link('<img style="margin:10px 30px;" src="images/1341508914_file_add.png" alt="Crear Contratos" />', array('/tblcontrato/create'));
	echo CHtml::link('<img style="margin:10px 30px;" src="images/1341508918_file_search.png" alt="Buscar Contratos" />', array('/tblcontrato/admin')); ?>

	<hr>
	<?php
	echo CHtml::link('<img style="margin:10px 30px;" src="images/1341508925_file_edit.png" alt="Editar Contratos" />', array('/tblcontrato/admin'));
	echo CHtml::link('<img style="margin:10px 30px;" src="images/1341508987_user_manage.png" alt="Hola" />', array('/tbluser'));
	?>

</div>