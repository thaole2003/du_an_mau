<?php 
    include_once "pdo.php";

    //thêm role
    function role_insert($ma_role,$role_name){
        $sql = "INSERT INTO role('id', 'name') VALUES ('?','?') ";
        pdo_execute($sql,$ma_role,$role_name);
    }

    //update role
    function role_update($ma_role,$role_name){
        $sql = "UPDATE role SET id = ?, 'name' = ? WHERE id = ?";
        pdo_execute($sql,$ma_role,$role_name);
    }

    //xóa role
    function role_delete($ma_role){
        $sql = "DELETE FROM roles WHERE id=?";
                pdo_execute($sql, $ma_role);
            }

    //truy vấn tất cả các role
    function role_select_all(){
        $sql = "SELECT * FROM roles";
        return pdo_query($sql);
    }

    //Kiểm tra sự tồn tại của một role
    function role_exist($ma_role){
        $sql = "SELECT count(*) FROM role WHERE id=?";
        return pdo_query_value($sql, $ma_role) > 0;
    }
    
?>