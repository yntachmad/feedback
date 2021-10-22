<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = Yii::t('app', 'Create User');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['menu']='user';
?>

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= Html::encode($this->title) ?></h1>
          </div>
          <div class="col-sm-6">
         
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Advanced Form</li>
            </ol> -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
         
            <h2 class="card-title"> Account Profile</h2>
           
            <!-- <div class="card-tools"> -->
           
              <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button> -->
            <!-- </div> -->
          </div>
          <!-- /.card-header -->
          <div class="card-body">

                
                <?= $this->render('_form-create', [
                    'model' => $model,
                ]) ?>





           
            <!-- /.row -->

           
            
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
         
        </div>
        <!-- /.card -->

        <!-- SELECT2 EXAMPLE -->
       
        <!-- /.card -->

       

        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
