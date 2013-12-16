<?php
/* @var $this TblIssueController */
/* @var $model TblIssue */

$this->breadcrumbs=array(
	'Tbl Issues'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TblIssue', 'url'=>array('index')),
	array('label'=>'Create TblIssue', 'url'=>array('create')),
	array('label'=>'Update TblIssue', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblIssue', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblIssue', 'url'=>array('admin')),
);
?>

<h1>View TblIssue #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'project_id',
		'type_id',
		'status_id',
		'owner_id',
		'requester_id',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
	),
)); ?>
