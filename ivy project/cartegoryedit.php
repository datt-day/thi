<?php
include "header.php";
include "slider.php";
include "class/cartegory_class.php";
include "edit.php";
?>

<?php
$cartegory = new cartegory;
if (!isset($_GET['cartegory_id']) || $_GET['cartegory_id']==null){
    echo "<script>window.location = 'cartegorylist.php'</script>";
}
else{
    $cartegory_id = $_GET['$cartegory_id'];
}
    $get_cartegory = $cartegory -> get_cartegory($cartegory_id);
    if ($get_cartegory) {
        $result = $get_cartegory -> fetch_assoc();
    }
?>

<?php
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $cartegory_name = $_POST['cartegory_name'];
    $update_cartegory = $cartegory -> update_cartegory($cartegory_name, $cartegory_id);
}
?>




<!-- <div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
                <h1>them danh muc</h1>
                <form action="" method="POST">
                    <input name="cartegory_name " type="text" placeholder="nhap ten danh muc " value="<?php echo $result['$cartegory_name']?>">
                    <button type="submit">sua</button>
                </form>  
            </div>
        </div>

    </section>
</body>
</html> -->
