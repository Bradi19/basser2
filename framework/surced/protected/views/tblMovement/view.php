<?php
/* @var $this TblMovementController */
/* @var $model TblMovement */

$this->breadcrumbs=array(
	'Tbl Movements'=>array('index'),
	$model->id,
);

$this->menu=array(
	//array('label'=>'List TblMovement', 'url'=>array('index')),
	array('label'=>'Create TblMovement', 'url'=>array('create')),
	array('label'=>'Update TblMovement', 'url'=>array('update', 'id'=>$model->id),"visible" => Yii::app()->user->checkAccess('administrator')),
	array('label'=>'Delete TblMovement', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'),"visible" => Yii::app()->user->checkAccess('administrator')),
	array('label'=>'History TblMovement', 'url'=>array('admin')),
);
?>

<h1>View TblMovement #<?php echo $model->id; ?></h1>

<?php 
$lo= new TblProduct();
$prod = $lo->find($model->product_id );
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'product_title',
		'movement',
		'user_name',
		'quantity',
		'created_at',
	),
)); ?>
