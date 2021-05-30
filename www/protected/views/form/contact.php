<?php $form=$this->beginWidget('CActiveForm'); ?>
    
	
	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>



<? $this->endWidget()?>