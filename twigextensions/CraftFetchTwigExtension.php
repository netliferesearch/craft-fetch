<?php
namespace Craft;

class CraftFetchTwigExtension extends \Twig_Extension
{
	public function getName()
	{
		return 'Craft Fetch Twig Extension';
	}

	public function getFunctions()
	{
		return array(
			'fetch' => new \Twig_Function_Method($this, 'fetch')
		);
	}

  public function fetch($url)
	{
		return craft()->craftFetch->fetch($url);
	}
}
