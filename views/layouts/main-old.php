<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Breadcrumbs;
use app\assets\AppAsset;
use lavrentiev\widgets\toastr\Notification;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <link rel="icon" type="image/png" href="/img/favicon.png" />
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<?php $this->beginBody() ?>

<div class="wrapper">

<?php 

if (Yii::$app->session->hasFlash('success')){

echo Notification::widget([
  'type' => 'success',
  'title' => Yii::$app->session->getFlash('notice'),
  'message' => Yii::$app->session->getFlash('success'),
]);


}elseif(Yii::$app->session->hasFlash('error')){

  echo Notification::widget([
    'type' => 'error',
   // 'title' => 
    'message' => Yii::$app->session->getFlash('error'),
  ]);

}

  
  
  
?>
  


<!-- Navbar -->
<?= $this->render('header') ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?= $this->render('left') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <?= $content; ?>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Footer -->
<?= $this->render('footer') ?>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
