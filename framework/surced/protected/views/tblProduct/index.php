<?php
/* @var $this TblProductController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Products',
);
$this->widget('zii.widgets.CMenu',array(
    'items'=>array(
        array(
            'label'=>'Home',
            'url'=>array('site/index'),
        ),
		array(
			'label'=>'Movement',
			'url'=>array('tblMovement/admin'),
		),
        array(
            'label'=>'Create Product',
            'url'=>array('create'),
            'visible'=>Yii::app()->user->checkAccess('administrator')
        ),
        array(
            'label'=>'Manage Product',
            'url'=>array('admin'),
            'visible'=>Yii::app()->user->checkAccess('administrator')
        ),
		array(
            'label'=>'Create Product',
            'url'=>array('create'),
            'visible'=>Yii::app()->user->checkAccess('moderator')
        ),
        array(
            'label'=>'Manage Product',
            'url'=>array('admin'),
            'visible'=>Yii::app()->user->checkAccess('moderator')
        ),
		array(
            'label'=>'Create Movement',
            'url'=>array('tblMovement/create'),
            'visible'=>Yii::app()->user->checkAccess('administrator')
        ),
        array(
            'label'=>'Manage Movement',
            'url'=>array('tblMovement/admin'),
            'visible'=>Yii::app()->user->checkAccess('administrator')
        ),
		array(
            'label'=>'Create Movement',
            'url'=>array('tblMovement/create'),
            'visible'=>Yii::app()->user->checkAccess('moderator')
        ),
        array(
            'label'=>'Manage Movement',
            'url'=>array('tblMovement/admin'),
            'visible'=>Yii::app()->user->checkAccess('moderator')
        ),
	)
	));

?>

<h1>Tbl Products</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
