<?php
declare(strict_types = 1);

use PHPUnit\Framework\TestCase;

//./vendor/bin/phpunit --bootstrap /f/xampp/htdocs/InterviewPrep/vendor/autoload.php tests


final class PrepTest extends TestCase
{
	
	public function testFib(): void
	{
		$this->assertEquals(1, Prep::fib(1));
	}
	
	public function testFib2(): void
	{
		$this->assertEquals(0, Prep::fib(0));
	}
	
	public function testFib3(): void
	{
		$this->assertEquals(0, Prep::fib(-1));
	}
	
	public function testPal(): void
	{
		$this->assertEquals(true, Prep::isPal("mom"));
	}
	
	public function testPal2(): void
	{
		$this->assertEquals(false, Prep::isPal("sdf"));
	}
	
	public function testPal3(): void
	{
		$this->assertEquals(true, Prep::isPal("poop"));
	}
	
	public function testPal4(): void
	{
		$this->assertEquals(true, Prep::isPal("Race car"));
	}
	
	public function testPow2(): void
	{
		$this->assertEquals(true, Prep::isPowOf2(4));
	}
	
	public function testPow22(): void
	{
		$this->assertEquals(false, Prep::isPowOf2(5));
	}
	
	public function testPowBase(): void
	{
		$this->assertEquals(true, Prep::isPowOf(100, 10));
	}
	
	public function testPowBase2(): void
	{
		$this->assertEquals(false, Prep::isPowOf(100, 11));
	}
	
	public function testRevString(): void
	{
		$this->assertEquals("dcba", Prep::revString("abcd"));
	}
	
	public function testRevString2(): void
	{
		$this->assertEquals("mom", Prep::revString("mom"));
	}
	
	public function testRevStringRec(): void
	{
		$this->assertEquals("dcba", Prep::revStringRec("abcd"));
	}
	
	public function testRevStringRec2(): void
	{
		$this->assertEquals("mom", Prep::revStringRec("mom"));
	}
	
	public function testIsUniqueChars(): void
	{
		$this->assertEquals(true, Prep::hasUniqueChars("asdfg"));
	}
	
	public function testIsUniqueChars2(): void
	{
		$this->assertEquals(false, Prep::hasUniqueChars("asdffgg"));
	}
	
	public function testIsUniqueChars3(): void
	{
		$this->assertEquals(false, Prep::hasUniqueChars("aa"));
	}
	
	public function testIsPerm(): void
	{
		$this->assertEquals(true, Prep::isPermutation("god", "dog"));
	}
	
	public function testIsPerm2(): void
	{
		$this->assertEquals(false, Prep::isPermutation("god", "dogff"));
	}
	
	public function testIsPerm3(): void
	{
		$this->assertEquals(true, Prep::isPermutation("me + you = fun", "ny =o+   ufmeu"));
	}
	
	public function testIsPerm4(): void
	{
		$this->assertEquals(false, Prep::isPermutation("God", "dog"));
	}
	
	public function testIsPerm5(): void
	{
		$this->assertEquals(false, Prep::isPermutation("", "dog"));
	}
	
	public function testURLify(): void
	{
		$this->assertEquals("hello%20world", Prep::URLify("hello world"));
	}
	
	public function testURLify2(): void
	{
		$this->assertEquals("%20%20%20", Prep::URLify("   "));
	}
	
	public function testURLify3(): void
	{
		$this->assertEquals("hello!", Prep::URLify("hello!"));
	}
	
	public function testBinarySearch(): void
	{
		$this->assertEquals(false, Prep::binarySearch([1,2,3,4,5], 6));
	}
	
	public function testBinarySearch2(): void
	{
		$this->assertEquals(true, Prep::binarySearch([1,2,3,4,5], 1));
	}
	
	public function testBinarySearch3(): void
	{
		$this->assertEquals(true, Prep::binarySearch([-1000, -500, 0, 4, 5, 17237], -1000));
	}
	
	public function testBitwiseAdd(): void
	{
		$this->assertEquals(5, Prep::bitwiseAdd(1, 4));
	}
	
	public function testIsIntPal(): void
	{
		$this->assertEquals(true, Prep::isIntPal(1221));
	}

	public function testIsIntPal2(): void
	{
		$this->assertEquals(false, Prep::isIntPal(122));
	}

	public function testMerge(): void
	{
		$this->assertEquals([1, 1, 2, 3, 4, 5, 6, 8], Prep::merge([1, 4, 5, 8], [1, 2, 3, 6]));
	}

	public function testFindDuplicates(): void
	{
		$this->assertEquals("1, 3, 6", Prep::findDuplicates([1, 2, 6, 4, 1, 3, 3, 6]));
	}

	public function testCoupleSum(): void
	{
		$this->assertEquals([3, 4], Prep::coupleSum([1, 2, 3, 4, 5], 7));
	}

	public function testCompressString(): void
	{
		$this->assertEquals("abc", Prep::compressString("abc"));
	}

	public function testCompressString2(): void
	{
		$this->assertEquals("a3b3c", Prep::compressString("aaabbbc"));
	}

	public function testCompressString3(): void
	{
		$this->assertEquals("a3b3c3", Prep::compressString("aaabbbccc"));
	}

	public function testCountPaths(): void
	{
		$this->assertEquals(1, Prep::countPaths(4, 1));
	}

	public function testCountPaths2(): void
	{
		$this->assertEquals(15, Prep::countPaths(5, 3));
	}

	public function testCountPaths3(): void
	{
		$this->assertEquals(167960, Prep::countPaths(10, 12));
	}

	public function testMaxReps(): void
	{
		$this->assertEquals(2, Prep::maxReps([1, 2, 2, 2, 6, 4, 7, 5, 5]));
	}

	public function testMaxReps2(): void
	{
		$this->assertEquals(1, Prep::maxReps([1, 1]));
	}

	public function testMaxReps3(): void
	{
		$this->assertEquals(0, Prep::maxReps([0]));
	}

	public function testIsIsomorphic(): void
	{
		$this->assertEquals(true, Prep::isIsomorphic("a", "b"));
	}

	public function testIsIsomorphic2(): void
	{
		$this->assertEquals(true, Prep::isIsomorphic("", ""));
	}

	public function testIsIsomorphic3(): void
	{
		$this->assertEquals(true, Prep::isIsomorphic("abcabc", "xyzxyz"));
	}

	public function testIsIsomorphic4(): void
	{
		$this->assertEquals(false, Prep::isIsomorphic("foo", "bar"));
	}

	public function testComputeBinary(): void
	{
		$this->assertEquals("1", Prep::computeBinary(1));
	}

	public function testComputeBinary2(): void
	{
		$this->assertEquals("10", Prep::computeBinary(2));
	}

	public function testComputeBinary3(): void
	{
		$this->assertEquals("0", Prep::computeBinary(0));
	}

	public function testComputeBinary4(): void
	{
		$this->assertEquals("110100", Prep::computeBinary(52));
	}

	public function testFirstNonRepChar(): void
	{
		$this->assertEquals("a", Prep::firstNonRepeatedChar("abc"));
	}

	public function testFirstNonRepChar2(): void
	{
		$this->assertEquals("", Prep::firstNonRepeatedChar("aabbcc"));
	}

	public function testFirstNonRepChar3(): void
	{
		$this->assertEquals("a", Prep::firstNonRepeatedChar("abbc"));
	}

	public function testFirstNonRepChar4(): void
	{
		$this->assertEquals("", Prep::firstNonRepeatedChar(""));
	}
}


?>