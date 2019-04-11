<?php
include "config.php";
// load file model
include "application/model.php";
$data = $_GET['ma_chi_nhanh'];
$model = new model();
$ma_bo_phan = $model->fetch("SELECT * FROM qlns_bophan WHERE ma_chi_nhanh ='$data'");
foreach ($ma_bo_phan as $item){
    echo '<option value="'.$item['ma_bp'].'">'. $item['name_bp'] . "</option>";
}