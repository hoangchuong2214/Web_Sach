<?php
include_once 'function.php';
?>
<div class="row justify-content-center">
    <div class="col-sm-8">
        <div class="card">
            <div class="card-header bg-success text-white font-weight-bold">THÊM SÁCH MỚI</div>
            <form id="main-form" action="xulythemsach.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên sách</label>
                    <input class="form-control" type="text" id="txttensach" name="txttensach" value=""> <!-- name: là cho phía server còn id: là cho javascript -->
                </div>
                <div class="form-group">
                    <label for="">Đơn giá</label>
                    <input class="form-control" type="text" id="txtdongia" name="txtdongia" value="">
                </div>
                <div class="form-group">
                    <label for="" class="form-control-label">Chủ đề</label>
                    <select class="form-control custom-select" name="cbochude">
                        <option value="">---Chọn chủ đề ----</option>
                        <?php
                        /* Code đầu */
                        $kqchude = Get_All_Chu_De();
                        while ($row = mysqli_fetch_assoc($kqchude)) {
                            ?>
                            <option value="<?php echo $row["MaCD"] ?>"><?php echo $row["Tenchude"] ?></option>

                            <?php
                            /* Code cuối */
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="form-control-label">Nhà xuất bản</label>
                    <select class="form-control custom-select" name="cbonhaxb">
                        <option value="">---Chọn nhà xuất bản ----</option>
                        <?php
                        /* Code đầu */
                        $kqnhaxb = Get_All_NhaXB();
                        while ($row = mysqli_fetch_assoc($kqnhaxb)) {
                            ?>

                        <option value="<?php echo $row["MaNXB"] ?>"><?php echo $row["TenNXB"] ?></option>
                        <?php
                            /* Code cuối */
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Ảnh bìa sách</label>
                    <input type="file" class="form-control-file" id="file_anh_bia" name="file_anh_bia">
                </div>
                <div class="form-group text-center">
                    <input type="submit" class="btn btn-success" id="btnsubmit" name="btnsubmit" value="Thực hiện">
                </div>
            </form>
        </div>
    </div>
</div>