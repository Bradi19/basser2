<?php
/* @var $this TblProductController */
/* @var $model TblProduct */

$this->breadcrumbs=array(
	'Tbl Products'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List TblProduct', 'url'=>array('index')),
	array('label'=>'Create TblProduct', 'url'=>array('create'),'visible'=>Yii::app()->user->checkAccess('administrator')),
	array('label'=>'Update TblProduct', 'url'=>array('update', 'id'=>$model->id),'visible'=>Yii::app()->user->checkAccess('administrator')),
	array('label'=>'Delete TblProduct', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'),'visible'=>Yii::app()->user->checkAccess('administrator')),
	array('label'=>'Manage TblProduct', 'url'=>array('admin'),'visible'=>Yii::app()->user->checkAccess('administrator')),
	array('label'=>'Create TblProduct', 'url'=>array('create'),'visible'=>Yii::app()->user->checkAccess('moderator')),
	array('label'=>'Update TblProduct', 'url'=>array('update', 'id'=>$model->id),'visible'=>Yii::app()->user->checkAccess('moderator')),
	array('label'=>'Delete TblProduct', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'),'visible'=>Yii::app()->user->checkAccess('moderator')),
	array('label'=>'Manage TblProduct', 'url'=>array('admin'),'visible'=>Yii::app()->user->checkAccess('moderator')),

	array('label'=>'History TblMovement', 'url'=>array('tblMovement/admin')),
	array('label'=>'Create TblMovement', 'url'=>array('tblMovement/create')),



);
?>

<h1>View TblProduct #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'detail',
		'price',
		'quantity',
		'content',
	),
)); ?>
