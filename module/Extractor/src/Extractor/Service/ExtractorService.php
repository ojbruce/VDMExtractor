<?php

namespace Extractor\Service;

use Zend\ServiceManager\ServiceLocatorAwareInterface
use Zend\ServiceManager\ServiceLocatorInterface


/**
 * This class represents the module's service
 * To extract the vdm's posts 
 */
class ExtractorService implements ServiceLocatorAwareInterface
{
	// Acces to other services
	protected $serviceLocator;	
	
	// Url of the website
	protected $VDMUrl = 'http://www.viedemerde.fr/?page=';
	
	/**
	 * Setter for serviceLocator attribut
	 * @param $service the service locator
	 */
	public function setServiceLocator(ServiceLocatorInterface $service)
	{
		$this->serviceLocator = $service;
		
		return $this;
	}
	
	/**
	 * Getter of serviceLocator attribut
	 * @return $service the service locator
	 */
	public function getServiceLocator()
	{
		return $this->serviceLocator;
	}
	
}


