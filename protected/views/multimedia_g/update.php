<?php
$this->breadcrumbs=array(
	'Multimedias'=>array('index'),
	$model->id_multimedia=>array('view','id'=>$model->id_multimedia),
	'Update',
);

$this->menu=array(
	array('label'=>'List Multimedia','url'=>array('index')),
	array('label'=>'Create Multimedia','url'=>array('create')),
	array('label'=>'View Multimedia','url'=>array('view','id'=>$model->id_multimedia)),
	array('label'=>'Manage Multimedia','url'=>array('admin')),
);
?>

<h1>Update Multimedia <?php echo $model->id_multimedia; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>