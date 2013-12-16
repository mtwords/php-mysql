<?php
/* @var $this TblIssueController */
/* @var $model TblIssue */

$this->breadcrumbs=array(
	'Tbl Issues'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblIssue', 'url'=>array('index')),
	array('label'=>'Create TblIssue', 'url'=>array('create')),
	array('label'=>'View TblIssue', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblIssue', 'url'=>array('admin')),
);
?>

<h1>Update TblIssue <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>