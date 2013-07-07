<?php
$this->breadcrumbs=array(
	'Temas_g'=>array('index'),
	$model->id_temas,
);


?>

<h1><?php echo $model->nb_temas; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_temas',
		'nb_temas',
		'descrip_temas',
	),
)); 

if($count_lecciones == 0){
	$html = 'Este tema no tienes lecciones asignadas';
}else{	 
	

	$contenido= 'id_contenido';

	$html='<table><tr><td colspan="8" style="text-align: center;">Lecciones</td></tr>';
	foreach($lecciones as $fila){ 
		$html.= "<tr class='principal' >
		

		 <td
		  'align='center'  style='border: 1px solid #AAAAAA;padding: 0.2em;'>
		<center>".$fila['nb_lecciones']."<a HREF='/condor-tutorialV2-master/Contenidos/index/id=$contenido' style='color:red' ; ><b> Ver.. </b> </a></td>
		 

		
			
			</tr>";
	} 



	$html.='</table>';
	

}

echo $html; 

?>

