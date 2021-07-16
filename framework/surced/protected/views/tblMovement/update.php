<?php
/* @var $this TblMovementController */
/* @var $model TblMovement */

$this->breadcrumbs=array(
	'Tbl Movements'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblMovement', 'url'=>array('index')),
	array('label'=>'Create TblMovement', 'url'=>array('create')),
	array('label'=>'View TblMovement', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblMovement', 'url'=>array('admin')),
);
?>

<h1>Update TblMovement <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>