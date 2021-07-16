<?php
/* @var $this TblMovementController */
/* @var $model TblMovement */

$this->breadcrumbs=array(
	'Tbl Movements'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblProduct', 'url'=>array('tblProduct/index')),
	array('label'=>'History TblMovement', 'url'=>array('admin')),
);
?>

<h1>Create TblMovement</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>