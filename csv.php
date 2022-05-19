<?php
    
class csv{
    function createCSVFromString($string, $dir = './output/csv/', $filename = null){
        
        if(strlen($string) == 0) return;
        
        if(!$filename) $filename = date('Y-m-d').'.csv';
        
        if (!file_exists($dir)) {
            mkdir($dir, 0755, true);
        }

        $f = fopen($dir.$filename, 'w');
        
        $comma_delimited_string = '';
        for($i = 0; $i < strlen($string); $i++){
            if($i == strlen($string) - 1) $comma_delimited_string .= $string[$i];
            else $comma_delimited_string .= $string[$i].',';
        }
        
        fputcsv($f, explode(',', $comma_delimited_string));

        fclose($f);
        
        return "CSV created!";
    }
}

?>