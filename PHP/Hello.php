<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sinh viên</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h3>Nhập thông tin sinh viên:</h3>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Tên sinh viên: <input type="text" name="name" class="name"><br>
    Tuổi: <input type="number" name="age" class="age"><br>
    Điểm: <input type="number" name="score" class="score"><br>
    <input type="submit" name="submit" value="Xem Kết quả">
</form>
<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $score = $_POST['score'];

    $result = ($score >= 40) ? "Đỗ" : "Trượt";

    echo "<h4>Kết quả của sinh viên:</h4>";
    echo "Tên sinh viên: " . $name . "<br>";
    echo "Tuổi: " . $age . "<br>";
    echo "Điểm: " . $score . "<br>";
    echo "Kết quả: " . $result . "<br>";
}
?>

<?php
$students = array();
foreach ($students as $student) {
    echo "Tên sinh viên: " . $student["name"] . "<br>";
    echo "Tuổi: " . $student["age"] . "<br>";
    echo "Điểm: " . $student["score"] . "<br>";
    echo "Kết quả: " . ($student["score"] >= 40 ? "Đỗ" : "Trượt") . "<br><br>";
}
?>
</body>
</html>