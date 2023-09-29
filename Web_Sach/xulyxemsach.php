<?php
		include_once 'function.php';
		$MaCD = $_GET["MaCD"];
		$sachcd = Get_Sach_Theo_Chu_De($MaCD);
        while($row = mysqli_fetch_assoc($sachcd)){

?>

<div class="col-sm-4 mb-3">
    <div class="card">
        <div class="card-header bg-danger text-white"> <?php echo $row['TenSach'] ?></div>
        <img src="images\<?php echo $row['AnhBia']  ?>" alt="AnhBia" class="card-img-top">
        <div class="card-footer text-center">
            <div class="card-title">Đơn giá: <?php echo $row['Dongia']  ?> VNĐ</div>
            <div class="btn btn-success m-auto">Xem chi tiết</div>
        </div>
    </div>
</div>
<?php
};
?>