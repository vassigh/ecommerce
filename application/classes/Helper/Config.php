<?php
class Helper_Config
{
	private $_data;
    public function __construct($file)
    {
    	$this->loadFile($file);
    }


    public function loadFile($file)
    {
    	if(file_exists($file))
    	{
        	$this->_data = parse_ini_file($file, true);
        }
        else
        {
        	error_log($file . ' not found');
        }
    }


    public function get($value, $rubrique=false)
    {
    	if (empty($rubrique))
    	{
    		return $this->_data[$value];
    	}
    	else
    	{
        	return $this->_data[$rubrique][$value];
        }
    }


}