<?php
// Kết nối tới cơ sở dữ liệu
$conn = mysqli_connect("localhost", "root", "", "hello");

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối tới cơ sở dữ liệu thất bại: " . mysqli_connect_error());
}

// Lấy thông tin tìm kiếm từ form
$searchQuery = $_GET['search_query'];

// Truy vấn cơ sở dữ liệu
$sql = "SELECT * FROM employee WHERE name LIKE '%$searchQuery%'";
$result = mysqli_query($conn, $sql);

// Kiểm tra kết quả truy vấn
if (mysqli_num_rows($result) > 0) {
    // Hiển thị kết quả
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Tên: " . $row['name'] . "<br>";
        echo "Tuổi: " . $row['age'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
        echo "Số Điện Thoại: " . $row['phone'] . "<br>";
        echo "Vị trí: " . $row['position'] . "<br>";
        echo "Lương: " . $row['salary'] . "<br><br>";
    }
} else {
    echo "Không tìm thấy nhân viên phù hợp.";
}

// Đóng kết nối cơ sở dữ liệu
mysqli_close($conn);
?>