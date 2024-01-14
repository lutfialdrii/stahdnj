<?php
/**
 * @var $this View
 * @var $untuk string
 */

use common\models\Constants;
use dosamigos\tinymce\TinyMce;
use kartik\file\FileInput;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\bootstrap4\Modal;
use yii\helpers\Url;
use yii\web\View;

$controller = $this->context->id;
?>

<div class="led-content">
    <div class="row">
        <div class="col-lg-12">
            <?= nl2br($item->deskripsi) ?>
        </div>
    </div>
    <br>
    <div class="clearfix"></div>


    <div class="row">
        <div class="col-lg-12">

            <?php
            if ($untuk === 'isi'):
                $form = ActiveForm::begin([
                    'action' => Url::to([
                        $controller . '/isi-non-kriteria',
                        'led' => $model->id,
                        'prodi' => $prodi->id,
                        'poin' => $poin
                    ]),
                    'options' => ['enctype' => 'multipart/form-data'],
                    'id' => $modelAttribute . '-form'
                ]) ?>

                <?= $form->field($modelNarasi, $modelAttribute)->widget(TinyMce::class, [
                'options' => ['id' => $modelAttribute . '-tinymce-poin'],

            ])->label('') ?>

                <div class="form-group pull-right">
                    <?= Html::submitButton('<i class="la la-save"></i> Simpan',
                        ['class' => 'btn btn-primary btn-pill btn-elevate btn-elevate-air ']) ?>
                </div>
                <?php ActiveForm::end();
            else:?>
                <div class="card bg-light p-3">
                    <div class="card-body">
                        <?= $modelNarasi->$modelAttribute ?>
                    </div>
                </div>

            <?php endif; ?>

        </div>
    </div>
    <div class="kt-separator"></div>


    <?= $this->render('@akreditasi/modules/kriteria9/modules/prodi/views/led/_item_dokumen_non_kriteria', [
        'linkModel' => $linkModel,
        'textModel' => $textModel,
        'uploadModel' => $uploadModel,
        'model' => $model,
        'poin' => $poin,
        'prodi' => $prodi,
        'path' => $path,
        'json_dokumen' => $item->dokumen_sumber,
        'jenis' => Constants::SUMBER,
        'detailCollection' => $detailCollection,
        'untuk' => $untuk
    ]) ?>

    <?= $this->render('@akreditasi/modules/kriteria9/modules/prodi/views/led/_item_dokumen_non_kriteria', [
        'linkModel' => $linkModel,
        'textModel' => $textModel,
        'uploadModel' => $uploadModel,
        'model' => $model,
        'poin' => $poin,
        'prodi' => $prodi,
        'path' => $path,
        'json_dokumen' => $item->dokumen_pendukung,
        'jenis' => Constants::PENDUKUNG,
        'detailCollection' => $detailCollection,
        'untuk' => $untuk

    ]) ?>


    <!--                            Tabel dokumen Lainnya-->
    

</div>
