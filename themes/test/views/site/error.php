<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>

<div class="clearfix"><h2>Error <?php echo $code; ?></h2></div>

<div class="error">
<?php echo CHtml::encode($message); ?>
</div>