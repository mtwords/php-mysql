<?php
/* @var $this TblIssueController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Issues',
);

$this->menu=array(
	array('label'=>'Create TblIssue', 'url'=>array('create')),
	array('label'=>'Manage TblIssue', 'url'=>array('admin')),
);
?>

<h1>Tbl Issues</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
