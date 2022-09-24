<?php 
include 'configs.php';
// session_start();
// $admin_id=$_SESSION['admin_id'];


// if(!isset($admin_id)){
//     header('location:userlogin.php');
// };


if(isset($_POST['add_product'])){
    
    $bname = mysqli_real_escape_string($conn,$_POST['bookname']);
    $bprice =$_POST['bookprice'];
    $bimage =$_FILES['image']['bookimage'];
    $bimage_size =$_FILES['image']['size'];
    $bimage_temp =$_FILES['image']['temp_name'];
    $imgfolder= 'others/'.$bimage;
    $category =$_POST['category'];


    $select_pdt=mysqli_query($conn,"SELECT name FROM `products` WHERE name ='$bname' ") or die('Query failed');


    if(mysqli_num_rows($select_pdt)>0){
        $message[] = 'product name is already added';
    }else{
        $add_pdt=mysqli_query($conn, "INSERT INTO `products`(name,price,category,image) VALUES('$bname','$bprice','$category','$bimage')") or die('Query Failed');


        if($add_pdt){
            if($bimage_size > 2000000){
                $message[]='image size is too large';
            }else{
                move_uploaded_file($bimage_temp,$imgfolder);
                $message[]='Product added!';
            }
            
        }else{
                $message[]='Error product can\'t be added';
        }


    }




}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/admin_styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TBY:Products</title>
    <script src="assets/admin_script.js"></script>
</head>
<body>
<?php
    if(isset($message)){
        foreach($message as $message){
            echo '
            <div class="message">
                <span>'.$message.'</span>
                <i class="fa fa-bell" aria-hidden="true" onclick="this.parentElement.remove();"></i>
        
            </div>';
        }
    }
    ?>
<?php   include 'admin_header.php';?>
<!-- Product CRUD section -->
<section class="add-pdts">
<h1>Products</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <h3>Add Products</h3>
        <input type="text" name="bookname" class="box" placeholder="Enter Book Name" required>
        <input type="Number" name="bookprice" min="0" class="box" placeholder="Enter Book price" required>
        
        <select name="category" class="box">
                    <option value="bc1">Compitetive</option>
                    <option value="bc2">Science</option>
                    <option value="bc3">Comme</option>
                </select>

        <input type="file" name="bookimage" accept="image/jpg,image/jpeg,image/png" class="box" placeholder="Enter Book image" required>
        <input type="submit" value="Add Product" name="addproduct" class="btn" placeholder="Add product" >
    
    
    </form>
</section>
<section class="show-products">
<div class="container-box">
    <?php
        $select_pdt=mysqli_query($conn, "SELECT * FROM `products` ") or die('Query failed');
        if(mysqli_num_rows($select_pdt)>0){

        }else{

            echo '';
        }
    ?>
</div>
</section>

    
</body>
</html>