<?php
    $filename = "Resume_Yuchao Zhou.pdf";
	header("Content-Type: text/plain");
	header('Content-Disposition: attachment; filename="Resume_Yuchao Zhou.pdf"');
	header('Content-Transfer-Encodeing: binary');
	readfile($filename);
?>