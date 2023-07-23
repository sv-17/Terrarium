<?php
ob_start();
session_start();
include("include/config.php");
// Load the mPDF library
require_once __DIR__ . '/vendor/autoload.php';

// Create a new mPDF document
$mpdf = new \Mpdf\Mpdf();

// Get the questions from the questions list session variable
$questions = $_SESSION['questionslist'];

// Get the answers from the answers session variable
$answers = $_SESSION['youroption'];

// Get the correct answers from the correct answers session variable
$correctAnswers = $_SESSION['correctoptions'];
// Iterate through the questions and answers
foreach ($questions as $question) {

    // Print the question
    $mpdf->WriteHTML("<h3>$question</h3>");

    // Print the given answer
    // $mpdf->WriteHTML("<p>Given answer: $answers[$question]</p>");

    // // Print the correct answer
    // $mpdf->WriteHTML("<p>Correct answer: $correctAnswers[$question]</p>");
}

// Output the document to a file
$mpdf->Output($_SESSION['Test_Name'] . '.pdf', \Mpdf\Output\Destination::FILE, ['download' => true]);

// Save the file to the htdocs folder
file_put_contents('C:\xampp\htdocs' . $_SESSION['test_name'] . '.pdf', $mpdf->Output());

?>
