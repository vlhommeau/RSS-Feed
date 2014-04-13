<?php

namespace tuto\WelcomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Eko\FeedBundle\Feed\Reader;

class HomepageController extends Controller
{
    public function indexAction()
    {
    	$reader = new Reader;    	
        $feed = $reader->load('http://www.mein-elektroauto.com/feed/')->get();
/*     	$this->feedAction(); */
        return $this->render('tutoWelcomeBundle:Homepage:index.html.twig', array('desc' => $feed->getDescription()));
    }
    
    public function feedAction()
    {
        $reader = $this->get('eko_feed.feed.reader');
        $feed = $reader->load('http://php.net/feed.atom')->get();
    }

}