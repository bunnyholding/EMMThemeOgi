<?php

namespace EMMWeb\EMMTheme\Ogi\Twig;

use Twig\Extension\RuntimeExtensionInterface;

class AppRuntime implements RuntimeExtensionInterface
{

	public function extendedTitleName(array $title, ?array $parent = null): string
	{
		//have main title object which is episode, so tvShowForEpisode can exists ..
		//if so then display modified title name TV-SHOW S01E01

		//if not main title is also provided, e.g. nextEpisode, previousEpisode
		//we check if mainTitle/currentEpisode have tvShowForEpisode and do the same
		if (isset($title['episodeParent'])) {
			$parent = $title['episodeParent'];
		}

		if (isset($parent) && isset($title['season']) && isset($title['episode'])) {
			return sprintf('%s S%02dE%02d', $parent['name'], $title['season'], $title['episode']);
		}

		//if title is provided then mainTitle is just helper in case we are gonna use parent tvShowForEpisode
		return $title['name'];
	}

	/**
	 * @param int $duration
	 * @return string
	 */
	public function convertDurationToTimeFormat(int $duration): string
	{
		//$duration in minutes => hh:mm
		//$duration is seconds => mm:ss
		return sprintf('%02d:%02d',  floor($duration / 60), $duration % 60);
	}
}