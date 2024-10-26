<?php
include "database.php";
?>
<?php 
class cartegory {
    private $db;

    public function __construct()
    {
        $this -> db = new Database();
    }
    public function insert_cartegory($cartegory_name){
        $query = "INSERT INTO tb1_cartegory (cartegory_name) VALUES ('$cartegory_name') ";
        $result = $this ->db ->insert($query);
        header('location:cartegorylist.php'); 
        return $result;
    }
    public function show_cartegory(){
        $query = "SELECT * FROM tb1_cartegory ORDER BY cartegory_id DESC ";
        $result = $this ->db -> select($query);
        return $result;
    }
    public function get_cartegory($cartegory_id){
        $query = "SELECT * FROM tb1_cartegory WHERE cartegory_id = '$cartegory_id' ";
        $result = $this ->db ->select($query);
        return $result;
    }
    public function update_cartegory($cartegory_name,$cartegory_id){
        $query= "UPDATE tb1_cartegory SET cartegory_name = '$cartegory_name' WHERE cartegory_id ='$cartegory_id' ";
        $result = $this ->db ->update($query);
        header('location:cartegorylist.php');
        return $result;
    }
    public function delete_cartegory($cartegory_id){
        $query = "DELETE FROM tb1_cartegory WHERE cartegory_id = '$cartegory_id' ";
        $result = $this ->db ->delete($query);
        header('location:cartegorylist.php');
        return $result;
    }
    
}
?>