<?php
/* @var $this BooksController */
/* @var $dataProvider CActiveDataProvider */

//$this->breadcrumbs=array(
//	'Books',
//);

//$this->menu=array(
//	array('label'=>'Create Books', 'url'=>array('create')),
//	array('label'=>'Manage Books', 'url'=>array('admin')),
//);
?>

<h1>Books</h1>
<?php
$this->widget('application.extensions.fancybox.ALFancybox', array(
    'targetDOM'=> '.fancied',
    'config'=>array(),
    )
);
?>


<div class="search-form">
<?php $this->renderPartial('_search',array(
    'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$model->search(),
//    'filter' => $model,
    'id' => 'posts-grid',
    'columns' => array (
        'id',
        array(
            'name' => 'name',
            'value'=> $model->name,
            'type' => 'html',
        ),
        array(
            'name' => 'preview',
            'header' => 'Превью',
            'type' => 'html',
            'value' => 'Chtml::link("<img src=".$data->preview."></<img>", array($data->preview), array(\'class\'=>\'fancied preview-image\'))',
        ),
        array(
            'name' => 'author_id',
            'header' => 'Автор',
            //'filter' => array('' => 'Все') + CHtml::listData(Authors::model()->findAll(), 'id', 'firstname'),
            'value' => '$data["authors"]["firstname"]. " " . $data["authors"]["lastname"];',
        ),
        array(
            'name' => 'date',
            'type' => 'datetime',
        ),
        array(
            'name' => 'date_create',
            'header' => 'Дата добавления',
            'type' => 'date',
        ),
        array(
            'header' => 'Кнопки действий',
            'class'=>'CButtonColumn',

        ),
        array(
            'name' => 'View',
            'value' => 'CHtml::link(\'show about\',array(\'books/ajax\',\'id\'=>$data->id))',// array(\'class\'=>\'fancied\'))',
            'htmlOptions' => array('class'=>'fancied'),
            'filter' => '',
            'type' => 'html',
        ),
        
    ),
)); ?>