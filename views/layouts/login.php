<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition login-page">
<?php $this->beginBody() ?>


<div class="login-box" sytle="border-radius: 2005px;">
  <div class="login-logo">
    <!-- <a href="../../index2.html"><b>Admin</b>LTE</a> -->
    <?= Html::img('@web/img/care-logo-login.png', ['alt' => 'Logo CARE']) ?>
  </div>
  <!-- /.login-logo -->
  <div class="card" sytle="border-radius: 2005px;">
  
    <div class="card-body login-card-body">
   
      <p class="login-box-msg" style="font-weight:400">FEEDBACK AND ACCOUNTABILITY MECHANISM</p>

      <?= $content; ?>

      

      

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>



<?php //echo $content;?>





<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
