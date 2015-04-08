<?php 
	$fileHandle = fopen("questionsAndAnswers.txt", "r") or
    die("File does not exist or you lack permission to open it");

    $lineNumber = 1;
    while (!feof($fileHandle)) 
    {
    	$line = fgets($fileHandle);
    	$array = explode("\t", $line);
    	$content = "<div class=\"col-sm-10 col-md-offset-1 question\">"."<fieldset><legend>".$lineNumber.". ".$array[0]."</legend>";
    	for ($count = 1 ; $count <= 4 ; ++$count)
    	{
    		$content .= "<div class=\"radio\"><label><input type=\"radio\" name=\"question".$lineNumber."\" id=\"optionsRadios1\" value=\"".$array[$count]."\"required>";
    		$content .= $array[$count];
    		$content .= "</label></div>";
    	}
    	$content.= "</fieldset><br>"."</div>";
    	echo $content;
    	$lineNumber += 1;
    }
	fclose($fileHandle);
?>