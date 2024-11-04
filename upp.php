<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text_content = $_POST['texts'];

    if (!empty($text_content)) {
        $file = 'ABCBALOCH.txt';

        // Open the file in append mode
        $file_handle = fopen($file, 'a');

        if ($file_handle) {
            // Append the new text to the end of the file
            fwrite($file_handle, $text_content . PHP_EOL);
            fclose($file_handle);
            echo "Done";
        } else {
            echo "Unable to open the file for writing.";
        }
    } else {
        echo "empty content";
    }
}
?>