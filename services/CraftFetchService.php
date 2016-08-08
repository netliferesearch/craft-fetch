<?php
namespace Craft;

class CraftFetchService extends BaseApplicationComponent
{
	function prepValue($value)
	{
		return TemplateHelper::getRaw($value);
	}
	public function fetch($url = null)
	{
		$file = @file_get_contents($url);
		
		if( $file === FALSE )
		{
			if( is_callable( 'curl_init' ) )
			{
				$curl = curl_init();
				
				curl_setopt( $curl, CURLOPT_AUTOREFERER, TRUE );
				curl_setopt( $curl, CURLOPT_HEADER, 0 );
				curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
				curl_setopt( $curl, CURLOPT_URL, $url );
				curl_setopt( $curl, CURLOPT_FOLLOWLOCATION, TRUE );       
				
				$file = curl_exec( $curl );
				    
				curl_close( $curl );

			}
		}
		
		return $this->prepValue($file);
	}
}

?>
