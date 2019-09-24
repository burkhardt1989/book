<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Book */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'money')->textInput(['maxlength' => true]) ?>

    <?= Html::label('类型') ?><br>
    <?= Html::dropDownList('Book[type_id]', $model->type_id, ArrayHelper::map($types, 'id', 'name')) ?>

    <br><br>
    <?= DatePicker::widget([
            'name' => 'Book[date]', 
            'value' => $model->date ? $model->date : date('Y-m-d', strtotime('-1 days')),
            'options' => ['placeholder' => 'Select issue date ...'],
            'pluginOptions' => [
                'format' => 'yyyy-mm-dd',
                'todayHighlight' => true
            ]
        ]);
    ?>
    <br>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

