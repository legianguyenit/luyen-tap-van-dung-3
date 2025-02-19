<?php
function xapXep(&$mang) {
    $n = count($mang);
    // Duyệt qua từng phần tử của mảng
    for ($i = 0; $i < $n - 1; $i++) {
        // Vòng lặp bên trong để so sánh và đổi chỗ
        for ($j = 0; $j < $n - 1 - $i; $j++) {
            if ($mang[$j] > $mang[$j + 1]) {
                // Hoán đổi vị trí của 2 phần tử nếu phần tử bên trái lớn hơn bên phải
                $temp = $mang[$j];
                $mang[$j] = $mang[$j + 1];
                $mang[$j + 1] = $temp;
            }
        }
    }
}

// Ví dụ sử dụng:
$numbers = [4, 2, 8, 1];
xapXep($numbers);
echo "<pre>";
print_r($numbers);
?>

<?php
function daoNguocMang($mang) {
    $mangDaoNguoc = [];
    $n = count($mang);
    // Duyệt mảng từ phần tử cuối về đầu
    for ($i = $n - 1; $i >= 0; $i--) {
        $mangDaoNguoc[] = $mang[$i];
    }
    return $mangDaoNguoc;
}

// Ví dụ sử dụng:
$numbers = [1, 2, 3, 4, 5];
$mangDaoNguoc = daoNguocMang($numbers);
print_r($mangDaoNguoc);
?>

<?php
function timGiaTri($giaTri, $mang) {
    // Duyệt qua từng phần tử của mảng
    for ($i = 0; $i < count($mang); $i++) {
        if ($mang[$i] == $giaTri) {
            return $i; // Trả về index nếu tìm thấy
        }
    }
    return -1; // Trả về -1 nếu không tìm thấy
}

// Ví dụ sử dụng:
$traiCay = ["Apple", "Banana", "Cherry"];
$index = timGiaTri("Banna", $traiCay);
echo $index; // Sẽ in ra -1 vì không có "Banna" trong mảng
?>

<?php
// 1. Tạo danh sách 20 sinh viên với thông tin: Họ tên, Ngày sinh, Giới tính, Điểm Toán, Điểm Văn, Điểm Tiếng Anh
$students = [
    [
        "hoTen"    => "Nguyen Van A",
        "ngaySinh" => "01/01/2000",
        "gioiTinh" => "Nam",
        "diemToan" => 7.5,
        "diemVan"  => 6.5,
        "diemAnh"  => 8.0,
    ],
    [
        "hoTen"    => "Le Thi B",
        "ngaySinh" => "02/02/2000",
        "gioiTinh" => "Nữ",
        "diemToan" => 8.5,
        "diemVan"  => 7.0,
        "diemAnh"  => 9.0,
    ],
    [
        "hoTen"    => "Tran Van C",
        "ngaySinh" => "03/03/2000",
        "gioiTinh" => "Nam",
        "diemToan" => 5.5,
        "diemVan"  => 6.0,
        "diemAnh"  => 7.5,
    ],
    [
        "hoTen"    => "Pham Thi D",
        "ngaySinh" => "04/04/2000",
        "gioiTinh" => "Nữ",
        "diemToan" => 9.0,
        "diemVan"  => 8.5,
        "diemAnh"  => 8.0,
    ],
    [
        "hoTen"    => "Hoang Van E",
        "ngaySinh" => "05/05/2000",
        "gioiTinh" => "Nam",
        "diemToan" => 6.5,
        "diemVan"  => 7.0,
        "diemAnh"  => 6.0,
    ],
    [
        "hoTen"    => "Vu Thi F",
        "ngaySinh" => "06/06/2000",
        "gioiTinh" => "Nữ",
        "diemToan" => 8.0,
        "diemVan"  => 8.0,
        "diemAnh"  => 8.5,
    ],
    [
        "hoTen"    => "Doan Van G",
        "ngaySinh" => "07/07/2000",
        "gioiTinh" => "Nam",
        "diemToan" => 7.0,
        "diemVan"  => 6.0,
        "diemAnh"  => 7.5,
    ],
    [
        "hoTen"    => "Bui Thi H",
        "ngaySinh" => "08/08/2000",
        "gioiTinh" => "Nữ",
        "diemToan" => 7.5,
        "diemVan"  => 8.0,
        "diemAnh"  => 8.0,
    ],
    [
        "hoTen"    => "Dang Van I",
        "ngaySinh" => "09/09/2000",
        "gioiTinh" => "Nam",
        "diemToan" => 8.5,
        "diemVan"  => 9.0,
        "diemAnh"  => 8.0,
    ],
    [
        "hoTen"    => "Ly Thi J",
        "ngaySinh" => "10/10/2000",
        "gioiTinh" => "Nữ",
        "diemToan" => 6.0,
        "diemVan"  => 7.5,
        "diemAnh"  => 6.5,
    ],
    [
        "hoTen"    => "Vo Van K",
        "ngaySinh" => "11/11/2000",
        "gioiTinh" => "Nam",
        "diemToan" => 9.0,
        "diemVan"  => 8.0,
        "diemAnh"  => 9.0,
    ],
    [
        "hoTen"    => "Trinh Thi L",
        "ngaySinh" => "12/12/2000",
        "gioiTinh" => "Nữ",
        "diemToan" => 8.0,
        "diemVan"  => 8.5,
        "diemAnh"  => 8.0,
    ],
    [
        "hoTen"    => "Ngo Van M",
        "ngaySinh" => "13/01/2001",
        "gioiTinh" => "Nam",
        "diemToan" => 7.0,
        "diemVan"  => 7.0,
        "diemAnh"  => 7.0,
    ],
    [
        "hoTen"    => "Phan Thi N",
        "ngaySinh" => "14/02/2001",
        "gioiTinh" => "Nữ",
        "diemToan" => 8.5,
        "diemVan"  => 9.0,
        "diemAnh"  => 8.5,
    ],
    [
        "hoTen"    => "Duong Van O",
        "ngaySinh" => "15/03/2001",
        "gioiTinh" => "Nam",
        "diemToan" => 5.5,
        "diemVan"  => 5.5,
        "diemAnh"  => 6.0,
    ],
    [
        "hoTen"    => "Truong Thi P",
        "ngaySinh" => "16/04/2001",
        "gioiTinh" => "Nữ",
        "diemToan" => 9.0,
        "diemVan"  => 9.5,
        "diemAnh"  => 9.0,
    ],
    [
        "hoTen"    => "Do Thi Q",
        "ngaySinh" => "17/05/2001",
        "gioiTinh" => "Nữ",
        "diemToan" => 7.5,
        "diemVan"  => 8.0,
        "diemAnh"  => 7.5,
    ],
    [
        "hoTen"    => "Pham Van R",
        "ngaySinh" => "18/06/2001",
        "gioiTinh" => "Nam",
        "diemToan" => 8.0,
        "diemVan"  => 7.5,
        "diemAnh"  => 8.0,
    ],
    [
        "hoTen"    => "Hoang Thi S",
        "ngaySinh" => "19/07/2001",
        "gioiTinh" => "Nữ",
        "diemToan" => 9.5,
        "diemVan"  => 9.0,
        "diemAnh"  => 9.5,
    ],
    [
        "hoTen"    => "Dang Van T",
        "ngaySinh" => "20/08/2001",
        "gioiTinh" => "Nam",
        "diemToan" => 6.5,
        "diemVan"  => 7.0,
        "diemAnh"  => 6.5,
    ],
];

// 2. Hàm tính điểm trung bình (diemTB) cho mỗi sinh viên và lưu vào mảng
function addAverageScore(&$students) {
    foreach ($students as &$student) {
        $student['diemTB'] = ($student['diemToan'] + $student['diemVan'] + $student['diemAnh']) / 3;
    }
}

// 3. Hàm in danh sách sinh viên ra màn hình (có thể in dưới dạng text)
function printStudents($students) {
    foreach ($students as $student) {
        echo "Họ tên: " . $student['hoTen'] . " | Ngày sinh: " . $student['ngaySinh'] .
             " | Giới tính: " . $student['gioiTinh'] . " | Toán: " . $student['diemToan'] .
             " | Văn: " . $student['diemVan'] . " | Anh: " . $student['diemAnh'] .
             " | TB: " . number_format($student['diemTB'], 2) . "\n";
             echo "<pre>";
            print_r($student);
    }
    echo "\n";
}

// 4. Hàm sắp xếp danh sách sinh viên theo tên (hoTen)
function sortStudentsByName($students) {
    usort($students, function($a, $b) {
        return strcmp($a['hoTen'], $b['hoTen']);
    });
    return $students;
}

// 5. Hàm lọc và trả về mảng danh sách các bạn nữ
function getFemaleStudents($students) {
    $femaleStudents = [];
    foreach ($students as $student) {
        // So sánh không phân biệt hoa thường (có thể dùng "nữ" hoặc "nu")
        if (strtolower($student['gioiTinh']) == 'nữ' || strtolower($student['gioiTinh']) == 'nu') {
            $femaleStudents[] = $student;
        }
    }
    return $femaleStudents;
}

// 6. Hàm lọc và trả về mảng danh sách sinh viên có điểm TB >= 8.0
function getHighAverageStudents($students) {
    $highAverageStudents = [];
    foreach ($students as $student) {
        if ($student['diemTB'] >= 8.0) {
            $highAverageStudents[] = $student;
        }
    }
    return $highAverageStudents;
}

// 7. Hàm sắp xếp lại mảng $students theo điểm TB giảm dần và trả về mảng đã sắp xếp
function sortStudentsByAverage($students) {
    usort($students, function($a, $b) {
        return $b['diemTB'] <=> $a['diemTB'];
    });
    return $students;
}

// 8. Hàm tìm bạn nữ có điểm TB cao nhất
function findTopFemaleStudent($students) {
    $femaleStudents = getFemaleStudents($students);
    if (empty($femaleStudents)) {
        return null;
    }
    $topFemale = $femaleStudents[0];
    foreach ($femaleStudents as $student) {
        if ($student['diemTB'] > $topFemale['diemTB']) {
            $topFemale = $student;
        }
    }
    return $topFemale;
}

// ----------------------------------------------
// Thực thi các bước:

// a) Thêm điểm trung bình (diemTB) cho mỗi sinh viên
addAverageScore($students);

// b) In danh sách sinh viên đã sắp xếp theo tên
echo "1. Danh sách sinh viên sắp xếp theo tên:\n";
$studentsSortedByName = sortStudentsByName($students);
printStudents($studentsSortedByName);

// c) Lấy danh sách các bạn nữ và in ra màn hình
echo "2. Danh sách sinh viên nữ:\n";
$femaleStudents = getFemaleStudents($students);
printStudents($femaleStudents);

// d) Lấy danh sách sinh viên có điểm TB >= 8.0 và in ra màn hình
echo "3. Danh sách sinh viên có điểm TB >= 8.0:\n";
$highAverageStudents = getHighAverageStudents($students);
printStudents($highAverageStudents);

// e) Sắp xếp lại mảng $students theo điểm TB giảm dần và in ra màn hình
echo "4. Danh sách sinh viên sắp xếp theo điểm TB (giảm dần):\n";
$studentsSortedByAverage = sortStudentsByAverage($students);
printStudents($studentsSortedByAverage);

// f) Tìm bạn nữ có điểm TB cao nhất và in ra màn hình
echo "5. Bạn nữ có điểm TB cao nhất:\n";
$topFemale = findTopFemaleStudent($students);
if ($topFemale !== null) {
    printStudents([$topFemale]);
} else {
    echo "Không tìm thấy sinh viên nữ.\n";
}
?>
