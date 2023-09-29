<?php
    include_once 'function.php';
    $txttensach = $_POST['txttensach'];
    $txtdongia = $_POST['txtdongia'];
    $cbochude = $_POST['cbochude'];
    $cbonhaxb = $_POST['cbonhaxb'];
    $file_anh_bia = $_FILES['file_anh_bia'];
    $AnhBia = $file_anh_bia['name'];
    move_uploaded_file($file_anh_bia['tmp_name'],"images/" .$file_anh_bia['name']);
    $conn = connect();
    $sql = "INSERT INTO sach(TenSach, MaCD, MaNXB, Dongia, AnhBia)
            VALUES('$txttensach','$cbochude','$cbonhaxb','$txtdongia','$AnhBia')";
    if(mysqli_query($conn,$sql)){
        header('location:index.php');
    } else {
        echo 'Thêm dữ liệu thất bại';
    }
?>