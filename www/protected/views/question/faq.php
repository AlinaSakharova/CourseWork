<?php
/* @var $this SiteController */
/* @var $model question */
/* @var $form CActiveForm */


$this->pageTitle=Yii::app()->name . ' - Вопрос-ответ';
 header('Content-Type: text/html; charset=UTF-8',true);
$this->breadcrumbs=array(
	'Вопрос-ответ',
);
?>
<h1>Здесь вы можете найти ответ на свой вопрос</h1>

<?php if(Yii::app()->user->hasFlash('question')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('question'); ?>
</div>


<?php endif; ?>



<table style="font-size: 20px">
<?php 
  // echo '<pre>';
  // var_dump($faq);
  // echo '</pre>';
  // exit;
    
    echo "<br>";
	echo $cat_faq->category_name;
   foreach($faq as $row){
  echo "<tr>";
   echo "<td>".CHTML::encode($row->question)."</td>";
  
  // echo "<br>";   
   echo "<td>".CHTML::encode($row->answer)."</td>";  
  echo "</tr>" ;

   }; 
?>
</table>

