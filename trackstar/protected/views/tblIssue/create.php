<?php
/* @var $this TblIssueController */
/* @var $model TblIssue */

$this->breadcrumbs=array(
	'Tbl Issues'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblIssue', 'url'=>array('index')),
	array('label'=>'Manage TblIssue', 'url'=>array('admin')),
);
?>

<h1>Create TblIssue</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>