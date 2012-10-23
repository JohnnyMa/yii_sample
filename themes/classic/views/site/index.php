<?php
$this -> pageTitle = 'Home';
//$this -> breadcrumbs = array('Home');
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'template'=>"{items}\n{pager}",
)); ?>