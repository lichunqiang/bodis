<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RegisterForm */
/* @var $form ActiveForm */
$this->title = 'Regsiter';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-register">

    <?php $form = ActiveForm::begin([
    	'id' => 'register-form',
    	'options' => ['class' => 'form-horizontal'],
    	'fieldConfig' => [
    	    'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
    	    'labelOptions' => ['class' => 'col-lg-1 control-label'],
    	],
   	]); ?>

        <?= $form->field($model, 'account') ?>
        <?= $form->field($model, 'password')->passwordInput() ?>
        <?= $form->field($model, 'email') ?>
    
        <div class="form-group">
        	<div class="col-lg-offset-1 col-lg-11">
            	<?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
            	<?= Html::a('Login', ['site/login']) ?>
            </div>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-register -->
