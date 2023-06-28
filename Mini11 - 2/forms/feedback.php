<?php
// Get the feedback data
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

// Store the feedback data in an array
$data = array($name, $email, $feedback);

// Open the Excel file
$filename = "feedback.xlsx";
$excel = new COM("Excel.Application");
$workbook = $excel->Workbooks->Open($filename);
$worksheet = $workbook->Worksheets("Sheet1");

// Get the last used row in the worksheet
$last_row = $worksheet->UsedRange->Rows->Count;

// Write the feedback data to the worksheet
$worksheet->Range("A" . ($last_row + 1))->Value = $name;
$worksheet->Range("B" . ($last_row + 1))->Value = $email;
$worksheet->Range("C" . ($last_row + 1))->Value = $feedback;

// Save and close the Excel file
$workbook->Save();
$workbook->Close();
$excel->Quit();

// Output a success message
echo "Thank you for your feedback! Your response has been saved.";
?>