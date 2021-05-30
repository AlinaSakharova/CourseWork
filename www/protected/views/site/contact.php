<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */
/* @var $cities City[] */
/* @var $categories CategoryReq[] */

$this->pageTitle=Yii::app()->name . ' - Форма заявки';
 header('Content-Type: text/html; charset=UTF-8',true);
$this->breadcrumbs=array(
	'Форма заявки',
);

$cities = CHtml::listData($cities, 'id','name');
$categories = CHtml::listData($categories, 'id','category_name');
?>

<h1>Заполните форму для получения помощи</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p>
Данная форма предназначена для получения квалифицированной помощи. Ответ будет направлен на ваш e-mail
</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm',array(
	'id'=>'request-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

<p class="note">Поля, помеченные <span class="required">*</span>, обязательны для заполнения.</p>

    
	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->emailField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone'); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->dropDownList($model,'city',$cities, array('prompt'=> 'Выберите город')); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'id_category'); ?>
		<?php echo $form->dropDownList($model,'id_category', $categories, array('prompt'=> 'Выберите категорию')); ?>
		<?php echo $form->error($model,'id_category'); ?>
	</div>
	
	<!--<div class="row">
	//	<?php echo $form->labelEx($model,'subject'); ?>
	//	<?php echo $form->textField($model,'subject'); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>-->
	
	<div class="row">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
	    <?php echo $form->error($model,'body'); ?>
	</div>

<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha', array(
		     'buttonLabel' => 'Другой код'
		)); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Пожалуйста, введите буквы, которые вы видите на изображении.
		</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Отправить форму'); ?>
	</div>


<? $this->endWidget()?>
</div><!-- form -->

<?php endif; ?>