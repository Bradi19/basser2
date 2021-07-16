<?php
/* @var $this TblProductController */
/* @var $data TblProduct */
?>

<div class="view bg-light container d-flex col-12">
<div width="400" class="col-6" style="width: 400px;">
<div class="row">
	<div class="col"><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</div>
	<div class="col"><?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?></div>
</div>
	<div class="row">
	<div class="col"><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</div>
	<div class="col"><?php echo CHtml::encode($data->title); ?></div>
	</div>
	<div class="row">
	<div class="col"><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</div>
	<div class="col"><?php echo CHtml::encode($data->price); ?></div>
	</div>
	<div class="row">
	<div class="col"><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</div>
	<div class="col"><?php echo CHtml::encode($data->quantity); ?></div>
	</div>
	
</div>
<div class="d-flex justify-content-center col-2">
	<div><?php echo CHtml::link(CHtml::encode("Go to - #".$data->id), array('view', 'id'=>$data->id),array('class'=>'btn btn-success')); ?>
</div></div>
</div>