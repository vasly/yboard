<?php
/* @var $this ReviewsController */
/* @var $model Reviews */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'reviews-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note"><?= t('Fields with <span class="required">*</span> are required.') ?></p>

        <?php echo $form->errorSummary($model); ?>
    <div >
        <?php echo $form->labelEx($model, 'name'); ?>
<?php echo $form->textField($model, 'name'); ?>
<?php echo $form->error($model, 'name'); ?>
    </div>

    <div >
        <?php echo $form->labelEx($model, 'category_id'); ?>
        <?php echo CHtml::dropDownList('category_id', $model->category_id, CHtml::listData(Category::model()->findAll(), "id", "name"), array('empty' => t('Choose category')));
        ?>
<?php echo $form->error($model, 'category_id'); ?>
    </div>

    <div >
        <?php echo $form->labelEx($model, 'text'); ?>
        <?php echo $form->textArea($model, 'text', array('class' => 'adv_redactor')); ?>
<?php echo $form->error($model, 'text'); ?>
    </div>

    <div >
        <?php echo $form->labelEx($model, 'price'); ?>
        <?php echo $form->textField($model, 'price'); ?>
        <?php echo CHtml::dropDownList('currency', 0, $this->settings['currency']); ?>
<?php echo $form->error($model, 'price'); ?>
    </div>

    <div class="row buttons">
<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn')); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->