<?php
/**
 * ZF2 Buch Kapitel 7
 * 
 * Das Buch "Zend Framework 2 - Von den Grundlagen bis zur fertigen Anwendung"
 * von Ralf Eggert ist im Addison-Wesley Verlag erschienen. 
 * ISBN 978-3-8273-2994-3
 * 
 * @package    Application
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Alle Listings sind urheberrechtlich geschützt!
 * @link       http://www.zendframeworkbuch.de/ und http://www.awl.de/2994
 */

/**
 * namespace definition and usage
 */
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Listing controller
 * 
 * Shows and executes the listings
 * 
 * @package    Application
 */
class ListingController extends AbstractActionController
{
    /**
     * Redirects to homepage
     */
    public function indexAction()
    {
        return $this->redirect()->toRoute('home');
    }
    
    /**
     * Show listing 07.01
     */
    public function listing0701Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 07.02
     */
    public function listing0702Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 07.03
     */
    public function listing0703Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 07.04
     */
    public function listing0704Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 07.05
     */
    public function listing0705Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 07.06
     */
    public function listing0706Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 07.07
     */
    public function listing0707Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 07.08
     */
    public function listing0708Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 07.09
     */
    public function listing0709Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 07.10
     */
    public function listing0710Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 07.11
     */
    public function listing0711Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 07.12
     */
    public function listing0712Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 07.13
     */
    public function listing0713Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 07.14
     */
    public function listing0714Action()
    {
        return new ViewModel();
    }

    /**
     * Show listing 07.15
     */
    public function listing0715Action()
    {
        return new ViewModel();
    }

    /**
     * Show listing 07.16
     */
    public function listing0716Action()
    {
        return new ViewModel();
    }

    /**
     * Show listing 07.17
     */
    public function listing0717Action()
    {
        return new ViewModel();
    }

    /**
     * Show listing 07.18
     */
    public function listing0718Action()
    {
        return new ViewModel();
    }
}
