<?php
include_once '../dao/user.php';
include_once '../global.php';
include_once '../dao/pdo.php';

// function user_insert($id, $email, $password, $address, $phone_number, $role_id,$ho_ten){
//     $sql = "INSERT INTO user VALUES ($id, $email, $password, $address, $phone_number, $role_id,$ho_ten)";
//     pdo_execute($sql, $id, $email, $password, $address, $phone_number, $role_id,$ho_ten);
// }

function user_insert(  $email,$mat_khau, $ho_ten, $phone, $address,$role_id){
    $sql = "INSERT INTO user(email, mat_khau, ho_ten,adress, phone,role_id) VALUES (?, ?, ?, ?, ?,?)";
    pdo_execute($sql, $email, $mat_khau, $ho_ten,  $phone, $address,$role_id);
}

function user_update($ma_kh, $mat_khau, $ho_ten, $email, $phone, $address,$role_id){
    $sql = "UPDATE user SET mat_khau=?,ho_ten=?,email=?,hinh=?,kich_hoat=?,vai_tro=? WHERE ma_kh=?";
    pdo_execute($sql,$ma_kh, $mat_khau, $ho_ten, $email, $phone, $address,$role_id);
}

function user_delete($ma_kh){
    $sql = "DELETE FROM user  WHERE id=?";
    if(is_array($ma_kh)){
        foreach ($ma_kh as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ma_kh);
    }
}

function user_select_all(){
    $sql = "SELECT * FROM user";
    return pdo_query($sql);
}

function user_select_by_id($ma_kh){
    $sql = "SELECT * FROM user WHERE ma_kh=?";
    return pdo_query_one($sql, $ma_kh);
}

function user_exist($ma_kh){
    $sql = "SELECT count(*) FROM user WHERE $ma_kh=?";
    return pdo_query_value($sql, $ma_kh) > 0;
}

function user_select_by_role($role_id){
    $sql = "SELECT * FROM user WHERE role_id=?";
    return pdo_query($sql, $role_id);
}

function user_change_password($ma_kh, $mat_khau_moi){
    $sql = "UPDATE user SET mat_khau=? WHERE ma_kh=?";
    pdo_execute($sql, $mat_khau_moi, $ma_kh);
}