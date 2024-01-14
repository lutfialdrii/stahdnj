<?php

/* @var $this yii\web\View */
/* @var $jumlahProdi integer */
/* @var $jumlahPengguna integer */
/* @var $apt integer */
/* @var $aps integer */
/* @var $persenAps float */
/* @var $persenApt float */

$this->title = 'Beranda';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="row">
    <div class="col-lg-12">
        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                       <span class="kt-portlet__head-icon">
                              <i class="flaticon2-dashboard"></i>
                                               </span>
                    <h3 class="kt-portlet__head-title">
                        Selamat Datang
                        <small>di Dashboard Admin</small>
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">
                <p> Untuk petunjuk penggunaan aplikasi, silahkan merujuk pada buku panduan yang telah diberikan.
                    Fitur bagian admin:</p>
                <ul>
                    <li>Manajemen Data Institusi (Perguran Tinggi, Unit/Satker/Lembaga, Program Studi)</li>
                    <li>Manajemen Data Pengguna (Akun, Hak Akses Pengguna)</li>
                    <li>Manajemen Data Akreditasi Program Studi</li>
                    <li>Manajemen Data Sertifikat Akreditasi</li>
                    <!--<li><i>Monitoring</i> Antrian (Queue Monitor)</li>-->
                </ul>
            </div>
        </div>

        <!--end::Portlet-->
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
