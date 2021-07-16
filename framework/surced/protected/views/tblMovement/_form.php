<?php
/* @var $this TblMovementController */
/* @var $model TblMovement */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbl-movement-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
	<?php echo $form->errorSummary($model); ?>
	<?php
		$g = [];

	foreach (TblProduct::model()->findAll() as $key => $value) {
		$g[$value->id] = $value->title;
	}
	?>
	<div class="row">
		<?php echo $form->labelEx($model,'product_id'); ?>
		<?php echo $form->dropDownList($model,'product_id',$g,array('class'=>'form-control selectedchange')); ?>
		<?php echo $form->error($model,'product_id'); ?>
	</div>
	<div class="row">
		<?php //echo $form->labelEx($model,'product_title'); ?>
		<?php echo $form->hiddenField($model,'product_title',array('value' => ""),array('class'=>'form-control')); ?>
		<?php //echo $form->error($model,'product_title'); ?>
	</div>
	<div class="row">
		<?php //echo $form->labelEx($model,'product_title'); ?>
		<?php echo $form->hiddenField($model,'user_id',array('value' => Yii::app()->user->id) ,array('class'=>'form-control olert')); ?>
		<?php //echo $form->error($model,'product_title'); ?>
	</div>
	<div class="row">
		<?php //echo $form->labelEx($model,'product_title'); ?>
		<?php echo $form->hiddenField($model,'user_name',array('value' => Yii::app()->user->name) ,array('class'=>'form-control olert')); ?>
		<?php //echo $form->error($model,'product_title'); ?>
	</div>
	<div class="row">
		<?php //echo $form->labelEx($model,'product_title'); ?>
		<?php echo $form->hiddenField($model,'created_at',array('value' => date('Y-m-d')) ,array('class'=>'form-control olert')); ?>
		<?php //echo $form->error($model,'product_title'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->numberField($model,'quantity',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'quantity'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'movement'); ?>
		<?php echo $form->dropDownList($model,'movement',array('arrival' => 'arrival','consumption'=> 'consumption'),array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'movement'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'form-control btn btn-primary')); ?>
	</div>

<?php

$this->endWidget(); ?>

</div><!-- form -->