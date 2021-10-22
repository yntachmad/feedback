<?php

use yii\helpers\Html;

use yii\web\Response; // important lines
//use yii\widgets\ActiveForm; // important lines
// use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
use kartik\password\PasswordInput;
use kartik\select2\Select2;
use app\models\FieldOffice;
use app\models\Project;



/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin([
  
]); ?>

    <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'full_name')->label(false)->textInput([
                    'maxlength' => true, 
                    'placeholder' => 'Full Name'

                ]);?>
            </div>
            
            <div class="col-md-4">
                <?= $form->field($model, 'username')->label(false)->textInput(['maxlength' => true,'placeholder'=>'Username']) ?>
            </div>
            <div class="col-md-4">
               
                <?php echo $form->field($model, 'password_hash')->label(false)->passwordInput(['maxlength' => true,'placeholder' =>'Password']) ?>
            </div>

    </div>
    <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'email')->label(false)->textInput(['maxlength' => true,'placeholder'=>'Email'])?>  
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'level')->label(false)->widget(Select2::classname(),[
                    
                    'data' => [ 'Administrator' => 'Administrator', 'Admin' => 'Admin', 'User' => 'User', 'Responder' => 'Responder', 'Enumerator' => 'Enumerator' ],
                    'theme' => Select2::THEME_KRAJEE_BS4,
                    'options' => ['placeholder' => 'Pilih Level User', 'style' => 'text-transform:capitalize' ],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],

                ]); ?>
            
            </div>
            <div class="col-md-4">               
                <?= $form->field($model, 'jabatan')->label(false)->textInput(['maxlength' => true,'placeholder'=>'Jabatan']) ?>
            </div>
    </div>
    <div class="row">
            <div class="col-md-4">

                <?= $form->field($model, 'lokasi')->label(false)->widget(Select2::classname(),[
                
                'data' => ArrayHelper::map(Fieldoffice::find()->where(['status'=>'aktif'])->all(),'office_id','kota'),
                'theme' => Select2::THEME_KRAJEE_BS4,
                'options' => ['placeholder' => 'Lokasi Kerja', 'style' => 'text-transform:capitalize' ],
                'pluginOptions' => [
                    'allowClear' => true
                ],

                ]) ?>

                
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'status')->label(false)->widget(Select2::classname(),[
                
                'data' => [ 'Aktif' => 'Aktif', 'Non-Aktif' => 'Non-Aktif' ],
                'theme' => Select2::THEME_KRAJEE_BS4,
                'options' => ['placeholder' => 'Status', 'style' => 'text-transform:capitalize' ],
                'pluginOptions' => [
                    'allowClear' => true
                ],

            ]); ?>
            
                
           
            </div>
            <div class="col-md-4">
                    <?= $form->field($model, 'project')->label(false)->widget(Select2::classname(),[
                    
                    'data' => ArrayHelper::map(Project::find()->where(['status'=>'aktif'])->all(),'project_id','alias'),
                    'theme' => Select2::THEME_KRAJEE_BS4,
                    'options' => ['placeholder' => 'Pilih Project', 'style' => 'text-transform:capitalize' ],
                    'pluginOptions' => [
                        'allowClear' => true,
                        'multiple' => true
                    ],

                    ]) ?>
             
            
            </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Register', ['class' => 'btn btn-warning']) ?>
    </div>

    <?php ActiveForm::end(); ?>


<?php

$script = <<< JS

if(performance.navigation.type == 2){
   location.reload(true);
}


JS;
$this->registerJS($script);


?>