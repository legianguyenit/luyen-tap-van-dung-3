<?php
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

    function addAverageScore(&$students) {
        foreach ($students as &$student) {
            $student['diemTB'] = ($student['diemToan'] + $student['diemVan'] + $student['diemAnh']) / 3;
        }
    }

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

    function sortStudentsByName($students) {
        usort($students, function($a, $b) {
            return strcmp($a['hoTen'], $b['hoTen']);
        });
        return $students;
    }

    function getFemaleStudents($students) {
        $femaleStudents = [];
        foreach ($students as $student) {
            if (strtolower($student['gioiTinh']) == 'nữ' || strtolower($student['gioiTinh']) == 'nu') {
                $femaleStudents[] = $student;
            }
        }
        return $femaleStudents;
    }

    function getHighAverageStudents($students) {
        $highAverageStudents = [];
        foreach ($students as $student) {
            if ($student['diemTB'] >= 8.0) {
                $highAverageStudents[] = $student;
            }
        }
        return $highAverageStudents;
    }

    function sortStudentsByAverage($students) {
        usort($students, function($a, $b) {
            return $b['diemTB'] <=> $a['diemTB'];
        });
        return $students;
    }

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

    addAverageScore($students);

    echo "1. Danh sách sinh viên sắp xếp theo tên:\n";
    $studentsSortedByName = sortStudentsByName($students);
    printStudents($studentsSortedByName);

    echo "2. Danh sách sinh viên nữ:\n";
    $femaleStudents = getFemaleStudents($students);
    printStudents($femaleStudents);

    echo "3. Danh sách sinh viên có điểm TB >= 8.0:\n";
    $highAverageStudents = getHighAverageStudents($students);
    printStudents($highAverageStudents);

    echo "4. Danh sách sinh viên sắp xếp theo điểm TB (giảm dần):\n";
    $studentsSortedByAverage = sortStudentsByAverage($students);
    printStudents($studentsSortedByAverage);

    echo "5. Bạn nữ có điểm TB cao nhất:\n";
    $topFemale = findTopFemaleStudent($students);
    if ($topFemale !== null) {
        printStudents([$topFemale]);
    } else {
        echo "Không tìm thấy sinh viên nữ.\n";
    }
?>