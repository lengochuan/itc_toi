<?php

if( $v == 'dssv' ) {
    //Danh sách sinh viên
   
    $sinh_vien = new sinh_vien();
    $listSVSSSS = $sinh_vien->list_all();

    $smarty->assign('listSV', $listSVSSSS);

} elseif( $v == 'xu_ly_dang_nhap' ) {


} else {
    echo "Invalid action.";
}