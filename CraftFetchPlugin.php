<?php
namespace Craft;

class CraftFetchPlugin extends BasePlugin
{
	private $_name = 'Craft Fetch';
	private $_developer = 'Knut Melvær';
	private $_developerUrl = 'http://netliferesearch.com/knut';
	private $_version = '1.0';
  private $_description = 'Relays file_get_contents and outputs the raw data';

	public function getName()
	{
		return Craft::t( $this->_name );
	}

	public function getVersion()
	{
		return $this->_version;
	}
  public function getDescription()
  {
    return $this->_description;
  }

	public function getDeveloper()
	{
		return $this->_developer;
	}

	public function getDeveloperUrl()
	{
		return $this->_developerUrl;
	}

  public function addTwigExtension()
  {
      Craft::import('plugins.craftfetch.twigextensions.CraftFetchTwigExtension');
      return new CraftFetchTwigExtension();
  }
}
