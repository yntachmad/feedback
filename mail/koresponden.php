<?php

use yii\helpers\Html;
use yii\helpers\Url;

$logo = Url::to('/img/care-logo.png', true);
$logo_putih = Url::to('/img/care-logo-putih.png', true);


?>


<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="padding-top:0px;font-family:Arial,Helvetica,sans-serif;font-weight:normal;font-size:14px;line-height:19px;color:#444444;border-collapse:collapse;background-color:#ececec">
  <tbody>
    <tr>
      <td width="100%">
        <br>
        <table width="600" cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#ffffff">
        <tbody>
      <tr>
      <td width="600">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff" style="background-color:#ffffff!important;font-family:Arial,Helvetica,sans-serif;font-weight:normal;font-size:14px;line-height:19px;color:#444444;border-collapse:collapse">
              <tbody>
                <tr>
                  <td height="64" width="100%" align="left" bgcolor="#fd7e14" style="padding-left:20px;color:white;font-size:20px;font-family:Arial,Helvetica,sans-serif;" >
					 <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="" style="font-family:Arial,Helvetica,sans-serif;font-weight:normal;font-size:14px;">
						<tr>
							<td style="padding-left:20px;color:white;font-size:20px;font-family:Arial,Helvetica,sans-serif;">
				 
				        Log OutGoing Correspondences
                       <!-- <a href="http://www.airdroid.com" style="text-decoration:none;display:inline" target="_blank"> -->
                        <!-- <img alt="AirDroid" border="0" style="vertical-align:middle;display:inline;float:none" src="https://s3.amazonaws.com/airdroid-img1/mailtemplate/new-v3/header.jpg"></a> -->
							</td>
							<td style="padding:20px;color:white;">
              <?php echo Html::img($logo_putih,['alt' =>'logo CARE','width' => '120']); ?>
							</td>
						</tr>
				  </table>
				  </td>
				  
				  
                </tr>
              </tbody>
            </table>


            <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff" style="font-family:Arial,Helvetica,sans-serif;font-weight:normal;font-size:14px;line-height:19px;color:#444444;border-collapse:collapse;background-color:#ffffff!important">
              <tbody style="border:1px solid #d8d8d8;border-bottom:0">
                <tr>
                  <td width="100%" valign="top" style="padding:30px 68px 22px">
                    <p style="line-height:24px!important;font-size:14px!important;margin-bottom:20px">
                   <h4> Hi, <?= Yii::$app->user->identity->full_name; ?>,</h4>
					<br>
                    Anda telah berhasil melakukan registrasi nomor surat, dengan detail informasi sebagai berikut :					
					</p>
          <br>
					<table style="padding: 0 0px; width: 100%; margin-bottom: 0px;" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td>
                                        <table style="background: #F3F4F5; border-radius: 8px; padding: 20px; width: 100%;" cellspacing="0" cellpadding="0">
                                            <tr style="vertical-align: top; padding-bottom: 10px;">
                                                <td width="30%" style="padding: 0 0 15px 0;">
                                                    <p style="color: rgba(49, 53, 59, 0.68); font-size: 12px; margin: 0;">
                                                        Nomor Surat
                                                    </p>
                                                </td>
                                                <td width="70%" style="padding: 0 0 15px 0;">
                                                    <p style="margin: 0;">
                                                        <b style="color: #FA591D; font-size: 14px;">
                                                           
                                                            <?= $model->format_nomor;?>
                                                           
                                                        </b>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr style="vertical-align: top;">
                                                <td width="30%" style="padding: 0 0 15px 0;">
                                                    <p style="color: rgba(49, 53, 59, 0.68); font-size: 12px; margin: 0;">
                                                        Tanggal Surat
                                                    </p>
                                                </td>
                                                <td width="70%" style=" padding: 0 0 15px 0;">
                                                  
                                                    <p style="margin: 0; font-weight: bold; font-size: 14px; color: rgba(49, 53, 59, 0.96);">
                                                    <?php $tgl = date("d M Y", strtotime($model->tgl_letter)); ?>
                                                    <?= $tgl;?>
                                                       
                                                    </p>
                                                  
                                                </td>
                                            </tr>
                                            <tr style="vertical-align: top;">
                                                <td width="30%" style="padding: 0 0 15px 0;">
                                                    <p style="color: rgba(49, 53, 59, 0.68); font-size: 12px; margin: 0;">
                                                        Ditujukan ke
                                                    </p>
                                                </td>
                                                <td width="70%" style=" padding: 0 0 15px 0;">
                                                  
                                                    <p style="margin: 0; font-weight: bold; font-size: 14px; color: rgba(49, 53, 59, 0.96);">
                                                    <?= $model->kepada;?>
                                                       
                                                    </p>
                                                  
                                                </td>
                                            </tr>
                                            <tr style="vertical-align: top;">
                                                <td width="30%" style="padding: 0 0 15px 0;">
                                                    <p style="color: rgba(49, 53, 59, 0.68); font-size: 12px; margin: 0;">
                                                        Perihal
                                                    </p>
                                                </td>
                                                <td width="70%" style=" padding: 0 0 15px 0;">
                                                  
                                                    <p style="margin: 0; font-weight: bold; font-size: 14px; color: rgba(49, 53, 59, 0.96);">
                                                    <?= $model->subject;?>
                                                       
                                                    </p>
                                                  
                                                </td>
                                            </tr>
											                    <tr style="vertical-align: top;">
                                                <td width="30%" style="padding: 0 0 15px 0;">
                                                    <p style="color: rgba(49, 53, 59, 0.68); font-size: 12px; margin: 0;">
                                                        Penandatangan
                                                    </p>
                                                </td>
                                                <td width="70%" style=" padding: 0 0 15px 0;">
                                                  
                                                    <p style="margin: 0; font-weight: bold; font-size: 14px; color: rgba(49, 53, 59, 0.96);">
                                                    <?= $model->users->full_name;?>
                                                       
                                                    </p>
                                                  
                                                </td>
                                            </tr>
											<tr style="vertical-align: top;">
                                                <td width="30%" style="padding: 0 0 15px 0;">
                                                    <p style="color: rgba(49, 53, 59, 0.68); font-size: 12px; margin: 0;">
                                                        Lokasi
                                                    </p>
                                                </td>
                                                <td width="70%" style=" padding: 0 0 15px 0;">
                                                  
                                                    <p style="margin: 0; font-weight: bold; font-size: 14px; color: rgba(49, 53, 59, 0.96);">
                                                    <?= $model->fieldoffice->name;?>
                                                       
                                                    </p>
                                                  
                                                </td>
                                            </tr>
											<tr style="vertical-align: top;">
                                                <td width="30%" style="padding: 0 0 15px 0;">
                                                    <p style="color: rgba(49, 53, 59, 0.68); font-size: 12px; margin: 0;">
                                                        Keterangan
                                                    </p>
                                                </td>
                                                <td width="70%" style=" padding: 0 0 15px 0;">
                                                  
                                                    <p style="margin: 0; font-weight: bold; font-size: 14px; color: rgba(49, 53, 59, 0.96);">
                                                    <?= $model->keterangan;?>
                                                       
                                                    </p>
                                                  
                                                </td>
                                            </tr>
											
											
                                        </table>
                                    </td>
                                </tr>
                            </table>
					
                          
					
					
					
				
					
                    <p style="line-height:24px!important;font-size:14px!important;margin-bottom:20px">
                           Mohon segera mengunggah dokumen surat Anda dengan mengklik tombol upload dibawah ini, atau abaikan email ini bila anda sudah berhasil mengunggah dokumen.
                    </p>
                 <?php

                    $upload = Url::to(['@web/correspondence/upload', 'id' => $model->correspondence_id],true);

                    ?>

                    <!-- <a href="#" style="display: block; border: 1px solid #fd7e14; border-radius: 10px; padding: 5px 5px; text-align: center; color: white; font-weight: bold; text-decoration: none; font-size: 14px; background: #fd7e14; margin: 0 90px" target="_blank">Upload</a> -->

                    <table  width="50%" cellspacing="0" cellpadding="10" bgcolor="#fd7e14" align="center">
                      <tr>
                          <td style="border-radius: 0px;text-align:center" align="center">
                              <a href="<?= $upload; ?>" target="_blank" style="background-color:#fd7e14;padding: 8px 12px; border-radius: 20px;font-family: Helvetica, Arial, sans-serif;font-size: 18px; color: #ffffff;text-decoration: none;font-weight:bold;">
                                  Upload 
                                        
                              </a>

                             
                          </td>
                      </tr>
                  </table>

          
                    
                  </td>
                </tr>

              </tbody>
            </table>

<table width="100%" cellspacing="0" cellpadding="0" border="0" style="font-family:Arial,Helvetica,sans-serif;font-weight:normal;font-size:14px;line-height:19px;color:#444444;border-collapse:collapse">
  <tbody style="border:1px solid #d8d8d8;border-top:0">
    <tr>
      <td>
        <table width="100%" cellspacing="0" cellpadding="0" border="0" style="font-family:Arial,Helvetica,sans-serif;font-weight:normal;font-size:14px;line-height:19px;color:#444444;border-collapse:collapse">
          <tbody>
            <tr>
              <td width="100%" style="padding:0px 68px 10px">
                <p style="font-family:Arial,Helvetica,sans-serif;font-weight:normal;font-size:14px;line-height:24px;margin-top:0!important;margin-bottom:0!important">
                  Thanks!
                  <br>
                  Yayasan CARE Peduli
                </p>
                <br>
              </td>
            </tr>
          </tbody>
        </table>
        <!-- <table width="100%" cellspacing="0" cellpadding="0" border="0" style="font-family:Arial,Helvetica,sans-serif;font-weight:normal;font-size:14px;line-height:19px;color:#444444;border-collapse:collapse">
          <tbody><tr>
            <td style="padding:6px 68px 8px">
              <p style="color:#d6d6d6;border-top:1px solid #ddd"> </p>
            </td>
          </tr>
        </tbody></table> -->
        <!-- <table width="100%" cellspacing="0" cellpadding="0" border="0" style="font-family:Arial,Helvetica,sans-serif;font-weight:normal;font-size:14px;line-height:19px;color:#333333;border-collapse:collapse">
          <tbody>
            <tr>
              <td width="100%" align="left" valign="middle" style="padding:0px 68px 0px;font-size:14px">
                <p style="margin-bottom:6px">
                  Translate AirDroid into your own language&nbsp;&nbsp;<a href="http://crowdin.net/project/airdroid" target="_blank">Click here &gt;&gt;</a>
                </p>
                <p>
                  Interested in becoming a beta tester? <a href="https://plus.google.com/u/0/communities/101598567262600598159" target="_blank">Apply here &gt;&gt;</a>
                </p>
              </td>
            </tr>
          </tbody>
        </table> -->
      <!-- </td>
    </tr> -->
    <!-- <tr>
      <td width="572" align="right" valign="middle" style="padding:0px 13px 12px">
        <table width="100%" cellspacing="0" cellpadding="0" border="0">
          <tbody style="background-color:#ececec">
            <tr height="66px">
              <td width="286" style="vertical-align:middle;text-align:right"><img style="float:right;margin-right:15px" src="https://s3.amazonaws.com/airdroid-img1/mailtemplate/new-v3/lets_social.jpg"></td>
              <td width="286">
                <table>
                  <tbody>
                    <tr style="height:66px">
                      <td style="vertical-align:middle;width:44px">
                        <a href="https://plus.google.com/u/0/100470142129660713333/" title="google plus" style="text-decoration:none" target="_blank">
                          <img src="https://s3.amazonaws.com/airdroid-img1/mailtemplate/new-v3/google_plus.jpg" alt="google plus" style="vertical-align:middle;display:inline;float:none">
                        </a>
                      </td>
                      <td>&nbsp;</td>
                      <td style="vertical-align:middle;width:44px">
                        <a href="http://www.facebook.com/pages/AirDroid/156773881085645" title="facebook" style="text-decoration:none" target="_blank">
                          <img src="https://s3.amazonaws.com/airdroid-img1/mailtemplate/new-v3/facebook.jpg" alt="facebook" style="vertical-align:middle;display:inline;float:none">
                        </a>
                      </td>
                      <td>&nbsp;</td>
                      <td style="vertical-align:middle;width:44px">
                        <a href="http://twitter.com/AirDroidTeam" title="twitter" style="text-decoration:none" target="_blank">
                          <img src="https://s3.amazonaws.com/airdroid-img1/mailtemplate/new-v3/twitter.jpg" alt="twitter" style="vertical-align:middle;display:inline;float:none">
                        </a>
                      </td>
                    </tr> 
                  </tbody>  
                </table>  
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr> -->
  </tbody>
</table>
<table width="100%" bgcolor="#ECECEC" border="0" cellspacing="0" cellpadding="0" style="font-family:Arial,Helvetica,sans-serif;font-weight:normal;font-size:14px;line-height:19px;color:#7e7e7e;border-collapse:collapse">
  <tbody>
    <tr>
      <td width="100%" style="text-align:left;color:#7e7e7e!important;font-size:14px;line-height:14px;padding:10px 15px">
        <p style="text-align:center;color:#a4a4a4">
          Please do not reply directly to this email.<br>
          You can reach us by sending message to <a href="mailto:ycp_correspondence@careind.or.id" target="_blank">ycp_correspondence@careind.or.id</a>.<br>
          
          <br>
        </p>
      </td>
    </tr>
  </tbody>
</table>
</td>
</tr>
</tbody>
</table>

</td></tr></tbody></table></div></div>
