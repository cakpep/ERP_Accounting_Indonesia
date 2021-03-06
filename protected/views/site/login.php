<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=147658935414729";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>


<?php
$isExist = is_file(Yii::app()->basePath . "/views/site/theme.php");
if ($isExist) {
    $this->renderPartial('theme');
}

$this->pageTitle = Yii::app()->name . ' - Home';
?>


<div class="row">
    <div class="span6">
        <?php
        $this->renderPartial("_carousel")
        ?>
        <?php
        $this->renderPartial("_fullArticle")
        ?>
    </div>

    <div class="span6">

        <div class="row">
            <div class="span3">
                <?php $this->renderPartial("_latestNews") ?>
            </div>

            <div class="span3">
                <?php $this->renderPartial("_tabLogin", array("model" => $model)) ?>
            </div>
        </div>

        <div class="row">
            <div class="span6">

                <?php
                $this->beginWidget('bootstrap.widgets.TbBox', array(
                    'title' => 'Business Unit Activity Info',
                    'headerIcon' => 'fa fa-globe fa-fw',
                    'htmlHeaderOptions' => array('style' => 'border-radius:4px;padding: 0 10px;'),
                    'htmlContentOptions' => array('style' => 'border:none;padding:20px 0'),
                ));

                $dir2 = Yii::app()->basePath . "/../shareimages/photo2/";

                $this->widget('ext.albumPhoto2', array(
                    'dir' => $dir2,
                    'columns' => 3,
                    'span' => 2,
                    'limit' => 3,
                    'header' => 5,
                    'descLimit' => 40,
                ));

                $this->endWidget();
                ?>

            </div>
        </div>

        <div class="row">
            <div class="span6">
                <?php
                $this->renderPartial("_quote")
                ?>

                <?php $this->renderPartial("_category", array('category_id' => 1)) ?>
                <?php //$this->renderPartial("_category",array('category_id'=>2)) ?>
                <?php $this->renderPartial("_category", array('category_id' => 4)) ?>

                <hr/>
                <div class="pull-right">
                    <p>
                        <strong><?php echo CHtml::link('News Index', Yii::app()->createUrl('/sCompanyNews')); ?></strong>				
                    </p>
                </div>


            </div>
        </div>
    </div>
</div>

<?php //$this->renderPartial("_tabSocNet", array())  ?>

