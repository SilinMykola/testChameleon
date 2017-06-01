<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<?php
$this->widget('ext.yii-selectize.YiiSelectize', array(
    'name' => 'test2',
    'value' => 'world', // the selected item
    'data' => array(
        'hello' => 'Hello',
        'world' => 'World',
        'world2' => 'World2',
        'world3' => 'World3',
    ),
));

$this->widget('ext.yii-selectize.YiiSelectize', array(
    'name' => 'test4',
    'value' => 'world',
    'data' => array(
        'hello' => 'Hello',
        'world' => 'World',
    ),
    'selectedValues' => array('hello', 'world'),
    'fullWidth' => false,
    'htmlOptions' => array(
        'style' => 'width: 50%',
    ),
    'multiple' => true,
));
