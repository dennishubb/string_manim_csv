<?php
    class fileManager{
        function readFile($dir = './input/', $filename = 'input.txt'){     
            return file_get_contents($dir.$filename, true);
        }
    }
?>