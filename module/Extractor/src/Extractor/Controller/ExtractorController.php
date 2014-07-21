<?php

namespace Extractor\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Console\Request;


/**
 * This class represents the module's controller 
 * To extract the vdm's posts 
 */
class ExtractorController extends AbstractActionController
{
	/**
	 * Extract action
	 */
	public function extractAction()
	{
		$request = $this->getRequest();
		
		if(!$request instanceof Request){
			throw new \RuntimeException('Use only console request please');
		}
		
		$limit = (int) $request->getParam('limit', 200);
		
		//Access to service
		$extractService = $this->getServiceLocator()->get('extractor.service');
		$extractService->extract($limit);
		
		return 'Extract action Done!' . PHP_EOL;
	}
	
}


