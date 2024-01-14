<?php

/* @var $this yii\web\View */
/* @var $struktur string */

$this->title = 'Beranda';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="kt-portlet">
    <div class="kt-space-30"></div>
    <h1 class="text-center"><?= Yii::$app->params['institusi'] ?></h1>

    <div class="kt-portlet__body">
        <div class="row">
            <div class="text-center col-lg-12">
                <img
                    src="<?= common\helpers\kriteria9\K9InstitusiDirectoryHelper::getStrukturUrl() . '/' . $struktur ?>"
                    height="480px" width="860px">
            </div>
        </div>

        <div class="clearfix"></div>
    </div>

</div>
<!--new-->
<div id="cs_bubble" class="content_bubble text-white d-none wow fadeInUp animated" data-wow-delay="0.3s">
    <div class="bg-secondary border rounded-top text-dark text-center font-weight-bolder pt-4">
        <h5>Contact Support</h5>
    </div>
    <div class="p-4 bg-primary">
        <p>Email : diktihindu@gmail.com</p>
        <p>WA : 085737041419 (Roni Kriswanto)</p>
        <p>WA : 081916732400 (Ida Bagus Kade Putra Upadana)</p>
    </div>
</div>

<div class="bubble_chat">
    <button onclick="clickBubble()" class="btn btn-primary p-3 rounded-circle wow fadeInUp  animated"
        data-wow-delay="0.3s"><svg xmlns="http://www.w3.org/2000/svg" height="35" viewBox="0 -960 960 960" width="35"><path fill="#ffffff" d="M240-400h320v-80H240v80Zm0-120h480v-80H240v80Zm0-120h480v-80H240v80ZM80-80v-720q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v480q0 33-23.5 56.5T800-240H240L80-80Zm126-240h594v-480H160v525l46-45Zm-46 0v-480 480Z"/></svg></button>
</div>
<style>
    .content_bubble {
        position: fixed;
        top: 55%;
        right: 5%;
    }

    .bubble_chat {
        position: fixed;
        top: 85%;
        right: 5%;
    }

    @media only screen and (max-width: 480px) {
        .content_bubble {
            top: 40%;
        }
    }

    /* new */
    @media only screen and (min-width: 481px) and (max-width: 800px) {

        .content_bubble {
            top: 40%;
        }
    }
</style>
<script>
    function clickBubble() {
        let content_id = document.getElementById('cs_bubble');
        if (content_id) {
            let classes = content_id.classList;
            let class_none = 'd-none';
            if (classes.contains(class_none)) {
                classes.remove(class_none);
            } else {
                classes.add(class_none);
            }
        } else {
            console.log('ID tidak ditemukan')
        }
    }
</script>