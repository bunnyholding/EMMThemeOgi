<?php

namespace EMMWeb\EMMTheme\Ogi\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class TwigExtension extends AbstractExtension
{

	public function getFunctions()
	{
		//write custom function name here, example:
		//new TwigFilter('randomInt', [AppRuntime::class, 'randomInt']),
		//then declare public function randomInt() {} in AppRuntime.php
		return [
			new TwigFunction('extendedTitleName', [AppRuntime::class, 'extendedTitleName']),
		];
	}

	/**
	 * @return array
	 */
	public function getFilters()
	{
		return [
			new TwigFilter('convertDurationToTimeFormat', [AppRuntime::class, 'convertDurationToTimeFormat']),
		];
	}

}