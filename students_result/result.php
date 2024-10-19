<?php
function calculateResult($marks) {
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            return "Mark range is invalid.";
        }
        if ($mark < 33) {
            return "Failed.";
        }
    }

    $totalMarks = array_sum($marks);
    $averageMarks = $totalMarks / count($marks);

    if ($averageMarks >= 80) {
        $grade = 'A+';
    } elseif ($averageMarks >= 70) {
        $grade = 'A';
    } elseif ($averageMarks >= 60) {
        $grade = 'A-';
    } elseif ($averageMarks >= 50) {
        $grade = 'B';
    } elseif ($averageMarks >= 40) {
        $grade = 'C';
    } elseif ($averageMarks >= 33) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }

    return "Total Marks: $totalMarks\nAverage Marks: $averageMarks\nGrade: $grade";
}

$marks = ['Bangla' => 82, 'English' => 76, 'Math' => 88, 'Science' => 90, 'History' => 94];
$result = calculateResult($marks);
echo $result;
?>
