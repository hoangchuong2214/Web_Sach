<!DOCTYPE html>
<html lang="en">
<?php
$chuc_nang = 1;
if (isset($_GET['chuc_nang'])) {
    $chuc_nang = $_GET['chuc_nang'];
}


?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Giao diện mẫu</title>

    <!-- Khai báo CSS -->
    <link rel="stylesheet" href="MyScript/bootstrap.min.css">
    <link rel="stylesheet" href="MyScript/mystyle.css">
</head>

<body>
    <div class="container">

        <!-- Phần thực đơn -->
        <?php
        include_once 'menu.php';

        if ($chuc_nang == 1) {
            include_once 'xemsach.php';
        } else {
            include_once 'themsach.php';
        }

        include_once 'footer.php';
        ?>
    </div>

    <!-- Khai báo và sử dụng Script -->
    <script src="MyScript/jquery-3.6.0.min.js"></script>
    <script src="MyScript/popper.min.js"></script>
    <script src="MyScript/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.chude').click(function(){
                var macd = $(this).attr('macd');
                var url = "xulyxemsach.php?MaCD=" + macd;
                $.get(url,function(data){
                    $('#ketqua').html(data);
                });
            });
        });

        function LaySach(){
            // xử lý thêm khi macd không phải là 5 thì sao
            var macd = 5;
                var url = "xulyxemsach.php?MaCD=" + macd;
                $.get(url,function(data){
                    $('#ketqua').html(data);
                });
        }
       LaySach();
    </script>
</body>

</html>