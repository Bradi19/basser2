<?php
/* @var $this TblProductController */
/* @var $model TblProduct */

$this->breadcrumbs=array(
	'Tbl Products'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
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
	array('label'=>'List TblMovement', 'url'=>array('tblMovement/index')),
	array('label'=>'Manage TblMovement', 'url'=>array('tblMovement/admin'),'visible'=>Yii::app()->user->checkAccess('moderator')),
	array('label'=>'Manage TblMovement', 'url'=>array('tblMovement/admin'),'visible'=>Yii::app()->user->checkAccess('administrator')),


);
?>

<h1>Update TblProduct <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>