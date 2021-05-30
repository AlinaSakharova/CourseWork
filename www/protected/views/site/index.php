<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
header('Content-Type: text/html; charset=UTF-8',true);
?>

<h1>Добро пожаловать на сайт " <i><?php echo CHtml::encode(Yii::app()->name); ?></i> "</h1>

<p>Здесь будет информация о проекте</p>
