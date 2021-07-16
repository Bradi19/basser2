<?php
/* @var $this TblMovementController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Movements',
);

$this->menu=array(
	array('label'=>'Create TblMovement', 'url'=>array('create')),
	array('label'=>'Manage TblMovement', 'url'=>array('admin')),
);
?>

<h1>Tbl Movements</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
