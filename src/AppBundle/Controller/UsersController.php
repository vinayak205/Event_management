<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use AppBundle\Entity\Venue;

class UsersController extends Controller{

	/**
     * @Route("/users/regevents", name="users_registered_events")
     */
    public function listRegisteredEventsAction()
    {
        
        try{

        	$user = $this->getUser();
        	$em = $this->getDoctrine()->getManager();
        	$eventUserRepo = $em->getRepository('AppBundle:EventUser');

        	$criteria = new \Doctrine\Common\Collections\Criteria();
        	$criteria->where($criteria->expr()->eq('user', $user));

        	$regEvents = $eventUserRepo->matching($criteria);

        	return $this->render('users/registeredEvents.html.twig', array(
	                'regEvents' => $regEvents
	                ));

        }
        catch(\Exception $e){
        	$this->addFlash(
                'notice',
                'Error: Cannot display registered events!'
            );
            return $this->redirectToRoute('homepage');
        }
        
    }

}