<?php
    function last($str)
    {
        $length = strlen($str);
        return $str[$length - 1];
    }
    
    function withoutLast($str)
    {
        $length = strlen($str);
        return substr($str, 0, $length - 1);
    }
    
    function revers($str)
    {
        $length = strlen($str);
        $reversStr = '';
        for ($i = 0; $i < $length; $i++)
        {
            $reversStr .= $str[$length - $i - 1];
        }
        return $reversStr; 
    }
    
    function englishLetter($ch)
    {
        $letters = 'abcdefghijklmnopqrstuvwxyz';
        $mark = true;
        if (stripos($letters,  $ch) === false)
        {
            $mark = false;
        }
        return $mark;
    }
    
    function numeral($ch)
    {
        $digits = '1234567890';
        $mark = true;
        if (strpos($digits,  $ch) === false)
        {
            $mark = false;
        }
        return $mark;
    }
        
    function checkIdentifier($str)
    {
        $mark = true;
        $answer = "";
        if (!englishLetter($str[0]))
        {
            $mark = false;
            $answer .= "No<br />";
            $answer .= "The first character is not a letter<br />";
        }
        else
        {
            $length = strlen($str);
            $i = 1;
            while (($i < $length) && ($mark))
            {
                if ((!englishLetter($str[$i]) && !numeral($str[$i])))
                {
                    $mark = false;
                    $answer .= "No<br />";
                    $answer .= "The symbol is not a letter or number<br />";
                }
                $i++;
            }           
        }
        if ($mark)
        {
            $answer .= "Yes";
        }
        return $answer;
    }
    
    function removeExtraBlanks($str)
    {
        $outstr = '';
        if (strlen($str))
        {
            $str = trim($str);
            for ($i = 0; $i < strlen($str); $i++)
            {
                if ($str[$i] != ' ')
                {
                    $outstr .= $str[$i];
                    $mark = true;
                }
                else
                {
                    if ($mark)
                    {
                        $outstr .= ' ';
                        $mark = false;
                    }
                }
            }
            
        }
        return $outstr;     
    }
    
    function passwordStrength($str)
    {
        $strength = 0;
        if (ctype_alnum($str))
        {
            $strength += 4 * strlen($str);
            $strength += 4 * numberDigits($str);
            $strength += 2 * (strlen($str) - numberUpRegister($str));
            $strength += 2 * (strlen($str) - numberDownRegister($str));
            if (ctype_digit($str))
            {
                $strength -= strlen($str);
            }
            if (ctype_alpha($str))
            {
                $strength -= strlen($str);
            }
            $strength -= numberRepeatingCharacters($str);
        }
        return $strength;
    }
    
    function numberDigits($str)
    {
        $count = 0;
        for ($i = 0; $i < strlen($str); $i++)
        {
            if (ctype_digit($str[$i]))
            {
                $count++;
            }
        }
        return $count;
    }
    
    function numberUpRegister($str)
    {
        $count = 0;
        for ($i = 0; $i < strlen($str); $i++)
        {
            if (ctype_upper($str[$i]))
            {
                $count++;
            }
        }
        return $count;
    }
    
    function numberDownRegister($str)
    {
        $count = 0;
        for ($i = 0; $i < strlen($str); $i++)
        {
            if (ctype_lower($str[$i]))
            {
                $count++;
            }
        }
        return $count;
    }
    
    function numberRepeatingCharacters($str)
    {
        $count = 0;
        foreach(count_chars($str, 1) as $i => $val)
        {
            if ($val > 1)
            {
                $count += $val;
            }
        }
        return $count;
    }
    
    
    