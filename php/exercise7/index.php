<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function generatePassword($length) {
        $lowercase = implode('', range('a', 'z'));         
        $uppercase = implode('', range('A', 'Z'));          
        $digits = implode('', range('0', '9'));             
        $allCharacters = $lowercase . $uppercase . $digits;
        $shuffledCharacters = str_shuffle($allCharacters);
        $password = substr($shuffledCharacters, 0, $length);
        
        if ($length >= 3) {
            $char1 = $lowercase[random_int(0, strlen($lowercase) - 1)];
            $char2 = $uppercase[random_int(0, strlen($uppercase) - 1)];
            $char3 = $digits[random_int(0, strlen($digits) - 1)];
            
            $remainingLength = $length - 3;
            $remainingChars = substr(str_shuffle($allCharacters), 0, $remainingLength);
            
            $password = str_shuffle($char1 . $char2 . $char3 . $remainingChars);
        }
        
        return $password;
    }
    echo generatePassword(8) . "\n";     
    echo generatePassword(10) . "\n";    
    echo generatePassword(12) . "\n";    
    echo generatePassword(6) . "\n";   
    function generatePasswordSimple($length) {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $password = '';
        
        for ($i = 0; $i < $length; $i++) {
            $password .= $chars[random_int(0, strlen($chars) - 1)];
        }
        
        return $password;
    }

    echo "\nУпрощенная версия:\n";
    echo generatePasswordSimple(10) . "\n"; 
    ?>
</body>
</html>