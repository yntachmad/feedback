<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \app\models\LoginForm */

use yii\helpers\Html;
//use yii\bootstrap4\ActiveForm;
use kartik\form\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>


   
<div class = login-form>
    <?php //echo $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder'=>'Username','class'=>'input-group-append'])->label(false) ?>
    <?php
        echo $form->field($model, 'username', [
            'options' => ['placeholder' => 'Username..'],
            'addon' => ['prepend' => ['content'=>'<i class="fas fa-user"></i>']]
        ])->textInput(['placeholder'=>'Username..'])->label(false);
       // 'autofocus' => true,

    ?>

</div>
<div class = login-form>
    <?php //echo $form->field($model, 'password')->passwordInput()->label(false) ?>
    <?php
        echo $form->field($model, 'password', [
            'options' => ['placeholder' => 'Username..'],
            'addon' => ['prepend' => ['content'=>'<i class="fas fa-key"></i>']]
        ])->passwordInput(['placeholder'=>'Password..'])->label(false);

    ?>
</div>

<div class="row">
        <div class="col-8">
          <?= $form->field($model, 'rememberMe')->checkbox() ?>
        </div>

        <!-- <div class="col-4"> -->
        <?php //echo Html::submitButton('Sign In', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
        <!-- </div> -->

</div>



   

    
        
           

               

               

                

                <!-- <div style="color:#999;margin:1em 0">
                    Username : Demo Password: Demo
                </div> -->

                <div class="social-auth-links text-center mb-3">
                
                    <?= Html::submitButton('Sign In', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>

                </div>

               

            <?php ActiveForm::end(); ?>
        
    
