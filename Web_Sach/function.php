<?php
function connect()
{
    return mysqli_connect('localhost', 'root', '', 'qlsachth2');
}

function disConnect($conn)
{
    mysqli_close($conn);
}

// liệt kê các chủ đề
function Get_All_Chu_De()
{
    $conn = connect();
    $sql = "SELECT * FROM chude";
    $kq = mysqli_query($conn, $sql);
    disConnect($conn);
    return $kq;
};

function Get_Sach_Theo_Chu_De($idMaCD){
    $conn = connect();
    $sql = "SELECT * FROM sach WHERE MaCD=$idMaCD";
    $kq = mysqli_query($conn, $sql);
    disConnect($conn);
    return $kq;
}

function Get_All_NhaXB()
{
    $conn = connect();
    $sql = "SELECT * FROM nhaxuatban";
    $kq = mysqli_query($conn, $sql);
    disConnect($conn);
    return $kq;
};
?>