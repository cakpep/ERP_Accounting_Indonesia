<?php
/* @var $this GPayrollReportController */
/* @var $model gPayrollReport */

$this->breadcrumbs = array(
    'G Payroll Reports' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List gPayrollReport', 'url' => array('index')),
    array('label' => 'Create gPayrollReport', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#g-payroll-report-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage G Payroll Reports</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'g-payroll-report-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'parent_id',
        'yearmonth',
        'basic_salary',
        'benefit',
        'deduction',
        /*
          'remark',
          'created_date',
          'created_by',
          'updated_date',
          'updated_by',
         */
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>