<?php $this->beginContent('//layouts/baseFixed'); ?>

<?php //$this->renderPartial('//layouts/_header'); ?>
<?php //$this->renderPartial('//layouts/_navigation'); ?>

<?php if (!Yii::app()->user->isGuest) { ?>
    <div class="row">
        <div class="span12 my-sticky-element">
            <h4 style="margin-top: -5px; padding: 8px; background-color: #cbcbcb">
                <?php
                if (!Yii::app()->user->isGuest)
                    echo sUser::model()->myGroupName;
                ?>
            </h4>
        </div>
    </div>
<?php } ?>

<?php $this->renderPartial('//layouts/_breadcrumb'); ?>
<?php $this->renderPartial('//layouts/_notification'); ?>

<?php echo $content; ?>

<?php $this->endContent(); ?>

