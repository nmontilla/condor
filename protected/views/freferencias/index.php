<?php
$this->breadcrumbs=array(
	'Freferenciases',
);

$this->menu=array(
	array('label'=>'Create Freferencias','url'=>array('create')),
	array('label'=>'Manage Freferencias','url'=>array('admin')),
);
?>

<h1>Freferenciases</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
