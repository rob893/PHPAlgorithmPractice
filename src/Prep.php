<?php
declare(strict_types = 1);


class Prep
{
	
	public static function fib(int $n): int
	{
		if($n <= 0)
		{
			return 0;
		}
		
		if($n == 1)
		{
			return 1;
		}
		
		return Prep::fib($n - 1) + Prep::fib($n - 2);
	}

	public static function betterFib(int $n): int
	{
		if($n <= 0)
		{
			return 0;
		}

		if($n == 1)
		{
			return 1;
		}

		$prevFib = 1;
		$currFib = 1;

		for($i = 2; $i < $n; $i++)
		{
			$newFib = $prevFib + $currFib;
			$prevFib = $currFib;
			$currFib = $newFib;
		}

		return $currFib;
	}
	
	public static function isPal(string $str): bool
	{
		$str = str_replace(' ', '', $str);
		$str = strtolower($str);

		// for($i = 0, $j = strlen($str) - 1; $i < $j; $i++, $j--)
		// {
		// 	if($str[$i] != $str[$j])
		// 	{
		// 		return false;
		// 	}
		// }
		
		// return true;

		return strrev($str) == $str;
	}
	
	public static function isPowOf2(int $n): bool
	{
		return ($n & $n - 1) == 0 ? true : false;
	}
	
	public static function isPowOf(int $n, int $base): bool
	{
		if($n == 2)
		{
			return ($n & $n - 1) == 0 ? true : false;
		}
		
		return log($n, $base) == (int)log($n, $base);
	}
	
	public static function revString(string $str): string
	{
		$result = "";
		
		for($i = strlen($str) - 1; $i >= 0; $i--)
		{
			$result .= $str[$i];
		}
		
		return $result;
	}
	
	
	public static function hasUniqueChars(string $str): bool
	{
		$map = [];
		
		for($i = 0; $i < strlen($str); $i++)
		{
			if(array_key_exists($str[$i], $map))
			{
				return false;
			}
			else
			{
				$map[$str[$i]] = 1;
			}
		}
		
		return true;
	}
	
	public static function isPermutation(string $str1, string $str2): bool //assumes whitespace is significant and is case sensitive
	{
		if(strlen($str1) != strlen($str2))
		{
			return false;
		}
		
		$map = [];
		
		for($i = 0; $i < strlen($str1); $i++)
		{
			if(array_key_exists($str1[$i], $map))
			{
				$map[$str1[$i]]++;
			}
			else
			{
				$map[$str1[$i]] = 1;
			}
		}
		
		for($i = 0; $i < strlen($str2); $i++)
		{
			if(!array_key_exists($str2[$i], $map) || $map[$str2[$i]] <= 0)
			{
				return false;
			}
			else
			{
				$map[$str2[$i]]--;
			}
		}
		
		return true;
	}
	
	public static function URLify(string $str): string
	{
		return str_replace(" ", "%20", $str);
	}
	
	public static function binarySearch(array $arr, int $n): bool //assumes $arr is sorted from lowest to highest
	{
		$start = 0;
		$end = count($arr) - 1;
		
		while($start <= $end)
		{
			$mid = $start + ($end - $start) / 2;
			
			if($arr[$mid] > $n)
			{
				$end = $mid - 1;
			}
			else if($arr[$mid] < $n)
			{
				$start = $mid + 1;
			}
			else
			{
				return true;
			}
		}
		
		return false;
	}
	
	public static function revStringRec(string $str): string
	{
		if($str == null || strlen($str) <= 1)
		{
			return $str;
		}
		
		return Prep::revStringRec(substr($str, 1)) . $str[0];
	}
	
	public static function bitwiseAdd(int $a, int $b): int
	{
		$carry = 0;
		while($b != 0)
		{
			$carry = $a & $b;
			$a = $a ^ $b;
			$b = $carry << 1;
		}
		
		return $a;
	}

	public static function isIntPal(int $num): bool
	{
		return $num == strrev((string)$num);
	}

	public static function merge(array $arrLeft, array $arrRight): array
	{
		$resultArr = [];
		$leftIndex = 0;
		$rightIndex = 0;
		$resultIndex = 0;
		
		while($leftIndex < count($arrLeft) && $rightIndex < count($arrRight))
		{
			if($arrLeft[$leftIndex] < $arrRight[$rightIndex])
			{
				$resultArr[$resultIndex] = $arrLeft[$leftIndex];
				$resultIndex++;
				$leftIndex++;
			}
			else
			{
				$resultArr[$resultIndex] = $arrRight[$rightIndex];
				$resultIndex++;
				$rightIndex++;
			}
		}

		while($leftIndex < count($arrLeft))
		{
			$resultArr[$resultIndex] = $arrLeft[$leftIndex];
			$resultIndex++;
			$leftIndex++;
		}

		while($rightIndex < count($arrRight))
		{
			$resultArr[$resultIndex] = $arrRight[$rightIndex];
			$resultIndex++;
			$rightIndex++;
		}
		
		return $resultArr;
	}

	public static function findDuplicates(array $arr): string
	{
		$result = [];
		$testSet = [];

		foreach($arr as $entry)
		{
			if(array_key_exists($entry, $testSet))
			{
				$result[] = $entry;
			}
			else
			{
				$testSet[$entry] = 1;
			}
		}

		return implode(", ", $result);
	}

	public static function coupleSum(array $numbers, int $target): array
	{
		$result = [];
		$map = [];

		for($i = 0; $i < count($numbers); $i++)
		{
			$diff = $target - $numbers[$i];
			
			if(array_key_exists($numbers[$i], $map))
			{
				$results[0] = $map[$numbers[$i]] + 1;
				$results[1] = $i + 1;
				break;
			}
			else
			{
				$map[$diff] = $i;	
			}
		}

		return $results;
	}

	public static function compressString(string $str): string
	{
		$answer = "";
		$count = 1;
		
		for($i = 1; $i < strlen($str); $i++)
		{
			$c1 = $str[$i - 1];
			$c2 = $str[$i];
			
			if($c1 == $c2)
			{
				$count++;
			}
			else
			{
				$answer .= $c1;
				
				if($count > 1)
				{
					$answer .= $count;
				}

				$count = 1;
			}

			if($i == strlen($str) - 1)
			{
				$answer .= $c2;
				
				if($count > 1)
				{
					$answer .= $count;
				}
			}
		}

		return $answer;
	}

	public static function countPaths(int $m, int $n): int
	{
		$board = [];
		
		$rows = $m - 1;
		$cols = $n - 1;
		
		for($i = 0; $i <= $rows; $i++)
		{
			$board[$i] = [];
			$board[$i][0] = 1;
		}

		for($i = 0; $i <= $cols; $i++)
		{
			$board[0][$i] = 1;
		}

		for($i = 1; $i <= $rows; $i++)
		{
			for($j = 1; $j <= $cols; $j++)
			{
				$board[$i][$j] = $board[$i - 1][$j] + $board[$i][$j - 1]; 
			}
		}
		
		return $board[$rows][$cols];
	}

	public static function maxReps(array $arr): int
	{
		$map = [];
		$maxReps = -1;
		$answer = -1;

		foreach($arr as $num)
		{
			if(array_key_exists($num, $map))
			{
				$map[$num]++;
			}
			else
			{
				$map[$num] = 1;
			}
		}
		
		foreach($map as $num => $reps)
		{
			if($reps > $maxReps)
			{
				$maxReps = $reps;
				$answer = $num;
			}
		}

		return $answer;
	}

	public static function isIsomorphic(string $str1, string $str2): bool
	{
		if(strlen($str1) != strlen($str2))
		{
			return false;
		}

		$map1 = [];
		$map2 = [];

		for($i = 0; $i < strlen($str1); $i++)
		{
			$c1 = $str1[$i];
			$c2 = $str2[$i];
			
			if(array_key_exists($c1, $map1))
			{
				$map1[$c1]++;
			}
			else
			{
				$map1[$c1] = 1;
			}

			if(array_key_exists($c2, $map2))
			{
				$map2[$c2]++;
			}
			else
			{
				$map2[$c2] = 1;
			}
		}

		for($i = 0; $i < strlen($str1); $i++)
		{
			$c1 = $str1[$i];
			$c2 = $str2[$i];

			if($map1[$c1] != $map2[$c2])
			{
				return false;
			}
		}
		
		return true;
	}
}

?>