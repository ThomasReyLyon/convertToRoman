<?php


namespace App\Tests;
use App\Controller\Convert;
use PHPUnit\Framework\TestCase;

class ConvertTest extends TestCase
{
	public function testConvert()
	{
		$convert = new Convert();

		$convertArabic = $convert->convert(20);
		$convertArabic1 = $convert->convert(900);
		$convertArabic2 = $convert->convert(358);
		$convertArabic3 = $convert->convert(125);

		$this->assertEquals('XX', $convertArabic);
		$this->assertEquals('CM', $convertArabic1);
		$this->assertEquals('CCCLVIII', $convertArabic2);
		$this->assertEquals('CXXV', $convertArabic3);
	}
}