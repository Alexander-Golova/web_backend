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