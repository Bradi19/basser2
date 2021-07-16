<?php
/* @var $this TblMovementController */
/* @var $model TblMovement */

$this->breadcrumbs=array(
	'Tbl Movements'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TblProduct', 'url'=>array('tblProduct/index')),
	array('label'=>'Create TblMovement', 'url'=>array('create')),
	array('label'=>'History TblMovement', 'url'=>array('admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tbl-movement-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tbl Movements</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tbl-movement-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'product_title',
		'quantity',
		'movement',
		'user_id',
		'created_at',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
