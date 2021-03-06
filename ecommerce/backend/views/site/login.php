<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<header>
    <a href="index.html"><h3>mycompany</h3></a>
</header>
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <?php $form = ActiveForm::begin(['id' => 'login-form', 'options' => ['class' => 'login-form', 'style' => 'display:block', 'novalidate'=>'novalidate']]); ?>
        <h3 class="form-title">Sign In</h3>
        <div class="alert alert-danger hiddden">
            <button class="close" data-close="alert"></button>
            <span>
            Enter any username and password. </span>
        </div>
        <?= $form->field($model, 'username') ?>
        <?= $form->field($model, 'password')->passwordInput() ?>
        <div class="form-actions">
            <?= $form->field($model, 'rememberMe')->checkbox() ?>
            <?= Html::submitButton('Login', ['class' => 'btn btn-success', 'name' => 'login-button']) ?>
            <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
        </div>
    <?php ActiveForm::end(); ?>
    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <?php $form = ActiveForm::begin(['id' => 'forget-form', 'options' => ['class' => 'forget-form', 'style' => 'display:none', 'novalidate'=>'novalidate']]); ?>

        <h3>Forget Password ?</h3>
        <p>
             Enter your e-mail address below to reset your password.
        </p>
        <div class="form-group">
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email">
        </div>
        <div class="form-actions">
            <button type="button" id="back-btn" class="btn btn-default">Back</button>
            <?= Html::submitButton('Submit', ['class' => 'btn btn-success', 'name' => 'submit-button']) ?>
        </div>
    <?php ActiveForm::end(); ?>
    <!-- END FORGOT PASSWORD FORM -->
</div>
<footer>
     2015 © mvasystem. Admin Dashboard Template.
</footer>