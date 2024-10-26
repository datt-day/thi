<?php
include "header.php";
include "slider.php";
include "cuoi.php";
include "class/cartegory_class.php";
?>
<?php
$cartegory = new cartegory;
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $cartegory_name = $_POST['cartegory_name'];
    $insert_cartegory = $cartegory -> insert_cartegory($cartegory_name);
}
var_dump($cartegory_name)
?>




<!-- <div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
                <h1>them danh muc</h1>
                <form action="" method="POST">
                    <input name="cartegory_name" type="text" placeholder="nhap ten danh muc">
                    <button type="submit">them</button>
                </form>  
            </div>
        </div>

    </section>
</body>
</html> -->
