<?php
include_once 'pdo.php';

/**
 * Thêm loại mới
 * @param String $ten_loai là tên loại
 * @throws PDOException lỗi thêm mới
 */
function loai_insert($name){
    $sql = "INSERT INTO loai(name) VALUES(?)";
    pdo_execute($sql, $name);
}
/**
 * Cập nhật tên loại
 * @param int $ma_loai là mã loại cần cập nhật
 * @param String $ten_loai là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
function loai_update($id, $name){
    $sql = "UPDATE loai SET 'name'=? WHERE id=?";
    pdo_execute($sql, $id, $name);
}
/**
 * Xóa một hoặc nhiều loại
 * @param mix $ma_loai là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */

/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */

// select 4 giá trị mới nhất 
function loai_new(){
    $sql ="SELECT * FROM categories ORDER BY ID DESC LIMIT 4";
    return pdo_query($sql);
}
// select all danh mục
function loai_select_all(){

    $sql = "SELECT * FROM categories";
    return pdo_query($sql);
}

function loai_delete($id){
    $sql = "DELETE FROM loai WHERE id=?";
    pdo_query($sql, $id);
}

/**
 * Truy vấn một loại theo mã
 * @param int $ma_loai là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
function loai_select_by_id($ma_loai){
    $sql = "SELECT * FROM loai WHERE id=?";
    return pdo_query_one($sql, $ma_loai);
}

?>