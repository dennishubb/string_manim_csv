<?php
    class stringManipulation{
        function capitalizeString($string){     
            return mb_strtoupper($string);
        }
        
        function capitalizeCharacter($string, $mod){
            $stringArray = explode(" ", $string);
            if(count($stringArray) <= 0) return;
            
            $capitalizedString = '';
            for($i = 0; $i < strlen($string); $i++){
                if(($i+1)%$mod == 0) $capitalizedString .= mb_strtoupper($string[$i]);
                else $capitalizedString .= $string[$i];
            }
            
            return $capitalizedString;
        }
    }
?>