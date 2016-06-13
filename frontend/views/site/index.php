<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
        <div class="container-fluid">
            <div class="row">
            <h2>Selamat Datang di Publikasi Jurnal Online STT Terpadu Nurul Fikri</h2>
            </div>
       
    </div>

    <div class="body-content">

        <div class="panel panel-primary">
            <div class="panel-body">
                <h3 class="lead">Sekolah Tinggi Teknologi Terpadu Nurul Fikri (disingkat STT Terpadu NF) Menerbitkan beberapa jurnal sesuai dengan bidang keilmuan. Situs ini adalah situs yang menyajikan beberapa terbitan jurnal ilmiah STT Terpadu Nurul Fikri.</h3>
            </div>
        </div>
            

<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("p").toggle();
    });
    $("p").hide();
});
</script>
</head>
<body>

<button type="button" class="btn btn-primary btn-lg btn-block">Pilih Bidang Peminatan</button> 

</br>
</br>
<p align="center">
<a class="btn btn-primary" href="#" role="button">Teknologi Perangkat Lunak</a>
<a class="btn btn-primary" href="#" role="button">Infrastruktur TI</a>
<a class="btn btn-primary" href="#" role="button">Tata Kelola SI</a>
<a class="btn btn-primary" href="#" role="button">Enterprise SI</a>
</p>
</body>
</html>
     
    </div>
</div>
