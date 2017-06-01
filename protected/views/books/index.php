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


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$model->search(),
//    'filter' => $model,
    'id' => 'posts-grid',
    'columns' => array (
        'id',
        array(
            'name' => 'name',
            'value' => 'CHtml::link( $data->name, array(\'books/view\',\'id\'=>$data->id))',
            'type' => 'html',
        ),
        array(
            'name' => 'preview',
            'header' => 'Превью',
            'type' => 'image',
            'htmlOptions' => array('class' => 'preview-image'),
            'value' => $model->preview
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
            'name' => 'Action',
            'value' => 'CHtml::link(\'show about\',array(\'books/view\',\'id\'=>$data->id))',
            'filter' => '',
            'type' => 'html',
        ),
    ),
)); ?>
