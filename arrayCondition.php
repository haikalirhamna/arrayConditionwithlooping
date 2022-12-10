<?php
// Create Array

$students =array (array("Fajar", "20200040078", "Teknik Informatika", 88, ""), 
            array("Roihan", "20200050083", "Teknik Informatika", 85, ""), array("Tofik", "20200032232", "Teknik Informatika", 45, ""), 
            array("Syamsul", "20200040011", "Teknik Informatika", 65, ""), array("Reza", "20200040033", "Teknik Informatika", 75, ""));
    
// looping check grade
    echo "<table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                    <th>Nilai</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>";
    foreach ($students as $student) {
        if ($student[3] >= 75) {
            $student[4] = "Lulus";
        }
        else {
            $student[4] = "Tidak Lulus";
        }
        echo"
            <tr>
                <td>$student[0]</td>
                <td>$student[1]</td>
                <td>$student[2]</td>
                <td>$student[3]</td>
                <td>$student[4]</td>
            </tr>";
    }
    echo "</tbody>
    </table>";
// program ini hanya akan melakukan pengecekan pada array index[3]
//  dan mengubah nilai pada array index[4] menjadi lulus jika index[3] lebih besar sama dengan 75
//  dan tidak lulus jika kurang dari 75 
?>
