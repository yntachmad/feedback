<?php
use yii\helpers\Html;
use yii\helpers\Url;
Yii::$app->view->params['menu'] = 'dashboard';

/* @var $this yii\web\View */

$this->title = 'FAM - YAYASAN CARE PEDULI';
$this->params['menu'] ='site';
?>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div> -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
      <div class="row">
        <section class="col-lg-8 connectedSortable">
            <div class="row">

              <div class="col-12 col-sm-6 col-md-6">
                <div class="info-box">
                  <span class="info-box-icon bg-info elevation-1"><i class="nav-icon fas fa-copy"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Feedback</span>
                    <span class="info-box-text">
                      <span style="font-size:22px; color:#fd7e14"><?= $total_correspondence;?> Registered <span> 

                      <!-- <small>%</small> -->
                    </span>
                   
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>

              <div class="col-12 col-sm-6 col-md-6">
          
                  <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-envelope" aria-hidden="true"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Feedback</span>
                      <span style="font-size:22px; color:#fd7e14"><?= $total_memo;?> Responsed <span> 
                      
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                
                  <!-- /.info-box -->
              </div>
              
            </div> <!-- /.end Row -->

            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Latest Feedback Registered</h3>

                <div class="card-tools">
                  <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button> -->
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>No. Register</th>
                      <th>Responden</th>
                      <th>Feedback</th>
                      <?php //if(Yii::$app->user->identity->level == 'Administrator' || Yii::$app->user->identity->level == 'Admin' ):; ?>
                      <th>Status</th>
                      <?php //endif; ?>
                      
                    </tr>
                    </thead>
                    <tbody>
                      <?php foreach($correspondence as $dat): ?>

                        <tr>
                            <td style="white-space:nowrap;overflow: hidden;width:215px;text-overflow: ellipsis; word-break: break-word;display : block;">
                            <?php if(Yii::$app->user->identity->level == 'Administrator' || Yii::$app->user->identity->level == 'Admin' ){
                                echo '<a href="'.Url::toRoute(['correspondence/view', 'id' => $dat->correspondence_id]).'"><strong>'.$dat->format_nomor.'</strong></a>';
                            } else{
                              echo $dat->format_nomor;
                            }
                            
                            
                            ?>
                            


                          </td>
                            <td nowrap><?= date("d M Y", strtotime($dat->tgl_letter)); ?></td>
                            <td style="white-space:nowrap;overflow: hidden;width:270px;text-overflow: ellipsis; word-break: break-word;display : block;">
                            <?= $dat->subject; ?>
                              <!-- <div class="sparkbar" data-color="#00a65a" data-height="20"><?php //$dat->subject; ?></div> -->
                            </td>
                            <?php //if(Yii::$app->user->identity->level == 'Administrator' || Yii::$app->user->identity->level == 'Admin' ):; ?>
                            <?php

                            $status = $dat->status_koresponden;
                            
                            if ($status == 'Registered'){
                             // echo $status;
                              echo "<td><span class='badge badge-success'>".$dat->status_koresponden."</span></td>";
                            }elseif($status == 'Canceled'){
                              echo "<td><span class='badge badge-danger'>".$dat->status_koresponden."</span></td>";
                            }
                            
                            ?>
                           <?php //endif; ?>
                            
                        </tr>


                      <?php endforeach;?>
                    
                    
                   
                    <!-- <tr>
                      <td><a href="pages/examples/invoice.html">OR7429</a></td>
                      <td>iPhone 6 Plus</td>
                      <td><span class="badge badge-danger">Delivered</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                      </td>
                    </tr> -->
                    <!-- <tr>
                      <td><a href="pages/examples/invoice.html">OR9842</a></td>
                      <td>Call of Duty IV</td>
                      <td><span class="badge badge-success">Shipped</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                      </td>
                    </tr> -->
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="<?= Url::toRoute(['correspondence/create']); ?>" class="btn btn-sm btn-info float-left">New Correspondence</a>
                <a href="<?= Url::toRoute(['correspondence/index']); ?>" class="btn btn-sm btn-secondary float-right">View Data</a>
              </div>
              <!-- /.card-footer -->
            </div>

        </section>
        <section class="col-lg-4 connectedSortable">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Recently Responsed Feedback</h3>

                <div class="card-tools">
                  <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button> -->
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">

                  <?php  foreach ($memo as $row) : ?>              
                    <li class="item">
                    <div class="product-img">
                      <img src="dist/img/Untitled3.png" alt="Product Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                      <a href="<?= Url::toRoute(['memo/view', 'id' => $row->memo_id]); ?>" class="product-title"><?= $row->format_nomor; ?>
                        <span class="badge badge-warning float-right">Public</span></a>
                      <span class="product-description">
                      <?= $row->perihal; ?>
                      </span>
                    </div>
                  </li>

                  <?php endforeach; ?>

                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <a href="<?= Url::toRoute(['memo/index']); ?>" class="uppercase">View All Memo</a>
              </div>
              <!-- /.card-footer -->
            </div>

        </section>

    </div>
  </div>
</div>
