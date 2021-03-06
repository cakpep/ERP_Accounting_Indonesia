<?php
$this->breadcrumbs = array(
    'Recruitment Report',
);

$this->menu4 = array(
    array('label' => 'Home', 'icon' => 'home', 'url' => array('/m1/gLeave')),
    array('icon' => 'calendar', 'label' => 'Leave Calendar', 'url' => array('/m1/gLeave/leaveCalendar')),
    array('label' => 'Help', 'icon' => 'bullhorn', 'url' => array('/sHelp/page/to/' . $this->module->id . '.' . $this->id . '/' . $this->action->id), 'linkOptions' => array('target' => '_blank')),
);

$this->menu = array(
        //array('label'=>'Report', 'icon'=>'print', 'url'=>array('report')),
);
?>

<div class="page-header">

    <h1>
        <i class="fa fa-suitcase"></i>
        Periodic Leave Reports By Departments
    </h1>

</div>



<?php
$form = $this->beginWidget('TbActiveForm', array(
    'id' => 'allocation-form',
    'enableAjaxValidation' => false, 'type' => 'horizontal',
        ));
?>


<?php echo $form->errorSummary($model); ?>

<?php
echo $form->dropDownListRow($model, 'report_id', array(
    '1' => '1. Leave Balance by Dept',
    '2' => '2. Employee Leave by Month',
        //'3'=>'3. Summary HR Interview Report',
        //'4'=>'4. Summary User Interview Report',
        //'5'=>'5. Summary Candidate Source Report',
        //'6'=>'6. Report 6',
        ), array(
    'class' => 'span4',
));
?>

<div class="form-actions">
    <?php echo CHtml::htmlButton('<i class="fa fa-print fa-fw"></i>Report', array('class' => 'btn', 'type' => 'submit')); ?>
</div>


<?php
$this->endWidget();

