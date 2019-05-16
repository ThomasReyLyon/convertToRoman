<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class Convert extends AbstractController
{

	/**
	 * @Route ("/{arabicNumber}", name="App_convert")
	 * @param int $arabicNumber
	 * @return string
	 */
	public function convert(int $arabicNumber) //:Response
    {
        $latinNumber = [
        	'I' => 1,
			'IV' => 4,
			'V' => 5,
			'IX' => 9,
			'X' => 10,
			'XL' => 40,
			'L' => 50,
			'XC' => 90,
			'C' => 100,
			'CD' => 400,
			'D' => 500,
			'CM' => 900,
			'M' => 1000
		];
		$latinNumber = array_reverse($latinNumber);

		$resultLatin="";

		foreach ($latinNumber as $roman => $value) {
			$matches = $arabicNumber / $value;

			$resultLatin .= str_repeat($roman, $matches);

			$arabicNumber = $arabicNumber % $value;
		}

		return $resultLatin;

		//return new Response($resultLatin);
        //return $this->render('base.html.twig', ['result' => $resultLatin]);
    }
}