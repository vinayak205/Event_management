<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use AppBundle\Entity\Venue;
use AppBundle\Entity\Event;
use AppBundle\Entity\EventUser;
use AppBundle\Form\UserType;
use Doctrine\Common\Collections\Criteria;



use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class EventsController extends Controller{


	/**
     * @Route("/events/list", name="events_list")
     * 
     */
    public function listAction(){
    	try{
    		$now = new \DateTime();
        
	        $em = $this->getDoctrine()
	            ->getRepository('AppBundle:Event');

	        $criteria = new \Doctrine\Common\Collections\Criteria();
	        $criteria->where($criteria->expr()->gt('startDate', $now));
	        $criteria->andwhere($criteria->expr()->eq('status', 'approved'));

	        $events = $em->matching($criteria);

	        $user = $this->getUser();
	        $userRole = "anon";
	        if($user){
	        	$userRole = $user -> getUserRole();
	        }
	        $regEvents = array();
	        if($user && $user->getUserRole() == 'ROLE_USER'){
	        	$regEvents = $this->fetchRegisteredEvents();	
	        }

	        
	        #$events = $this->getDoctrine()
	         #   ->getRepository('AppBundle:Event')
	         #   ->findAll();

	        return $this->render('events/list.html.twig', array(
	                'events' => $events,
	                'role' => $userRole,
	                'regEvents' => $regEvents
	            ));

    	}
    	catch(\Exception $e){
    		$this->addFlash(
                'notice',
                'Error: Not able to list the events!'
            );
            return $this->redirectToRoute('homepage');
    	}
        
    }
    /**
    *
	*
    *	fetehes the events the logged in user has registered for.
	*
    *	@return array of event ids.
    */


    public function fetchRegisteredEvents(){
    		$user = $this->getUser();

        	$em = $this->getDoctrine()->getManager();
        	$eventUserRepo = $em->getRepository('AppBundle:EventUser');

        	$criteria = new Criteria();
        	$criteria->where($criteria->expr()->eq('user', $user));

        	$regEvents = $eventUserRepo->matching($criteria);

        	$events = array();
        	foreach ($regEvents as $event) {
        		$events[] = $event->getEvent()->getId();
        	}
        	return $events;
    }

    /**
    *	@param : datetime $start data, datetime $endDate, venue $venue
	*
    *	checks if the given venue is available for the requested time period
	*
    *	@return boolean
    */
    public function checkVenueAvailability($startDate, $endDate, $venue){

    	try{
    		$em = $this->getDoctrine()
                ->getRepository('AppBundle:Event');

            $criteria = new \Doctrine\Common\Collections\Criteria();
            $criteria->where($criteria->expr()->eq('venue', $venue));

            $events = $em->matching($criteria);
            $flag = true;
            foreach($events as $event){
            	if($event->getStartDate() > $endDate){
            		$flag = true;
            	}
            	elseif($event->getEndDate() < $startDate) {
            		$flag = true;
            	}
            	else{
            		$flag = false;
            		break;
            	}
            }
            if($flag){
            	return true;
            }
            else{
            	return false;
            }
    	}
    	catch(\Exception $e){
    		return false;
    	}

    }

    /**
     * @Route("/events/add", name="events_add")
     */
    public function createAction(Request $request){

    	try{
    		$venues = $this->getDoctrine()
	            ->getRepository('AppBundle:Venue')
	            ->findAll();

	        $venueNames = array();
	        
	        $user = $this->getUser();
	        foreach ($venues as $venue) {
	            $temp = $venue -> getName();
	            $venueNames["$temp"] = $venue;
	            
	        }

	        $categoryArray = array(
	        	'Music' => 'Music',
	        	'Sports' => 'Sports',
	        	'Conference' => 'Conference',
	        	'Exhibition' => 'Exhibition',
	        	'Classes' => 'Classes',
	        	'Screening' => 'Screening'

	        	);

	        $event = new Event;
	        $form = $this->createFormBuilder($event)
	            ->add('name', TextType::class, array('attr' => 
	                array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
	            ->add('category', ChoiceType::class, array('choices' => $categoryArray, 
	                'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
	            ->add('short_description', TextType::class, 
	                array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
	            ->add('description', TextareaType::class, 
	                array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
	            ->add('host', TextType::class, array('attr' => 
	                array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
	            ->add('venue', ChoiceType::class, array('choices' => $venueNames, 
	                'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
	            ->add('start_date', DateTimeType::class, 
	                array('attr' => array('class' => 'formcontrol', 'style' => 'margin-bottom:15px')))
	            ->add('end_date', DateTimeType::class, 
	                array('attr' => array('class' => 'formcontrol', 'style' => 'margin-bottom:15px')))
	            ->add('image', FileType::class, array('label' => 'Image for the todo'))
	            ->getForm();
	        $form -> handleRequest($request);
	        if($form -> isSubmitted() && $form -> isValid()){
	            $name = $form['name']->getData();
	            $category = $form['category']->getData();
	            $description = $form['description']->getData();
	            $ven = $form['venue']->getData();
	            $start_date = $form['start_date']->getData();
	            $end_date = $form['end_date']->getData();
	            $host = $form['host']->getData();
	            $short_description = $form['short_description']->getData();
	            $status = "pending";
	            $file = $event->getImage();
	            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            	$file->move(
                	$this->getParameter('event_image_directory'),
                	$fileName
            	);

	            if($end_date <= $start_date){
	                $this->addFlash(
	                'notice',
	                'Error: Start date has to be before the end date!'
	                );
	            
	                return $this->redirectToRoute('events_add');
	            }
	            $available = $this->checkVenueAvailability($start_date, $end_date, $ven);
	            if($available == false){
	            	$this->addFlash(
	                'notice',
	                'Venue not available. Please choose some other location.'
	                );
	            	
	            	return $this->redirectToRoute('events_add');
	            }
	            
	            $event->setName($name);
	            $event->setCategory($category);
	            $event->setDescription($description);
	            $event->setVenue($ven);
	            $event->setStartDate($start_date);
	            $event->setEndDate($end_date);
	            $event->setHost($host);
	            $event->setStatus($status);
	            $event->setShortDescription($short_description);
	            $event->setImage($fileName);
	            $event->setOrganizer($user);

	            $em = $this->getDoctrine()->getManager();
	            $em->persist($event);
	            $em->flush();

	            $this->addFlash(
	                'notice',
	                'Event Added'
	                );
	            
	            return $this->redirectToRoute('events_list');

	        }

	        return $this->render('events/create.html.twig', array(
	                'form' => $form->createView()
	            ));
    	}
    	catch(\Exception $e){
    		$message = $e->getMessage();
    		$this->addFlash(
                'notice',
                "$message"
            );
            return $this->redirectToRoute('events_list');

    	}
    }


    /**
    * @Route("events/details/{id}", name="events_details")
    * @param event of id integer $id
    * @return renders the page displaying details of the event.
    */

    public function detailsAction($id){

    	try{
    		$event = $this->getDoctrine()
	            ->getRepository('AppBundle:Event')
	            ->find($id);

	        $em = $this->getDoctrine()
	            ->getRepository('AppBundle:EventUser');

	        $criteria = new \Doctrine\Common\Collections\Criteria();
	        $criteria->where($criteria->expr()->eq('event', $event));

	        $regUsers = $em->matching($criteria);

	        $noOfUsers = sizeof($regUsers);

	        return $this->render('events/details.html.twig', array(
	                'event' => $event,
	                'noOfUsers' => $noOfUsers
	                ));
    	}
    	catch(\Exception $e){
    		$this->addFlash(
                'notice',
                $e->getMessage()
            );
            return $this->redirectToRoute('events_list');
    	}
        
    }

    /**
    * @Route("events/pending/details/{id}", name="events__pending_details")
    * @param id of event integer $id
    * @return renders the page displaying the details of the pending selected event.
    */

    public function pendingDetailsAction($id){

    	try{
    		$event = $this->getDoctrine()
	            ->getRepository('AppBundle:Event')
	            ->find($id);

	        return $this->render('events/pendingdetails.html.twig', array(
	                'event' => $event));
    	}
    	catch(\Exception $e){
    		$this->addFlash(
                'notice',
                'Error: Details cannot be displayed!'
            );
            return $this->redirectToRoute('pending_list');
    	}
        
    }
    
    /**
    * @Route("events/pending", name="events_pending")
    */

    public function pendingListAction(){
    	try{

    		$em = $this->getDoctrine()
	            ->getRepository('AppBundle:Event');

	        $criteria = new \Doctrine\Common\Collections\Criteria();
	        $criteria->where($criteria->expr()->eq('status', 'pending'));

	        $events = $em->matching($criteria);

	        return $this->render('events/pending.html.twig', array(
	                'events' => $events
	            ));

    	}
    	catch(\Exception $e){
    		$this->addFlash(
                'notice',
                'Error: Events cannot be displayed!'
            );
            return $this->redirectToRoute('homepage');
    	}
        
    }

    /**
    * @Route("events/approve/{id}", name="events_approve")
    */

    public function approveAction($id){
    	try{
    		$em = $this->getDoctrine()->getManager();
	        $event = $em->getRepository('AppBundle:Event')
	            ->find($id);
	        

	        $event->setStatus('approved');

	        $em->flush();

	        $eventUser = new EventUser;
	        $user = $event->getOrganizer();
	       	$eventUser->setUser($user);
	       	$eventUser->setEvent($event);
	       	
	        $em->persist($eventUser);
	        $em->flush();

	        $this->addFlash(
	            'notice',
	            'Event approved'
	        );
	        return $this->redirectToRoute('events_pending');
    	}
    	catch(\Exception $e){
    		$this->addFlash(
	            'notice',
	            'Error: Event not approved'
	             );
	        return $this->redirectToRoute('events_pending');
    	}
        
    }

    /**
    * @Route("events/reject/{id}", name="events_reject")
    */

    public function rejectAction($id){
    	try{
    		$em = $this->getDoctrine()->getManager();
	        $event = $em->getRepository('AppBundle:Event')
	            ->find($id);
	        

	        $event->setStatus('rejected');

	        $em->flush();

	        $this->addFlash(
                'notice',
                'Event Rejected'
                );
            return $this->redirectToRoute('events_pending');
    	}
    	catch(\Exception $e){
    		$this->addFlash(
	            'notice',
	            'Error: Event not rejected'
	             );
	        return $this->redirectToRoute('events_pending');

    	}
        
    }
    

    /**
    * @Route("events/register/{id}", name="events_register")
    */

    public function eventRegisterAction($id){
    	try{
    		$user = $this->getUser();
    		$event = $this->getDoctrine()
	            ->getRepository('AppBundle:Event')
	            ->find($id);
    		if($user){
    			$userRole = $user->getUserRole();
    			if(strcmp($userRole, 'ROLE_USER') == 0){
    				$em = $this->getDoctrine()
	            		->getRepository('AppBundle:EventUser');

	        		$criteria = new \Doctrine\Common\Collections\Criteria();
	        		$criteria->where($criteria->expr()->eq('user', $user));
	        		$criteria->andwhere($criteria->expr()->eq('event', $event));

	        		$result = $em->matching($criteria);

	        		if(!($result->isEmpty())){
	        			$this->addFlash(
	            			'notice',
	            			'Already Registered!');
	        		}
	        		else{
	        			$eventUser = new EventUser;
	        			$eventUser->setUser($user);
	        			$eventUser->setEvent($event);
	        			$em = $this->getDoctrine()->getManager();
	            		$em->persist($eventUser);
	            		$em->flush();

	            		$this->addFlash(
	            			'notice',
	            			'Registered!');

	        		}


    			}
    			else{
    				$this->addFlash(
	            	'notice',
	            	'Access Denied!'
	         	);
    			return $this->redirectToRoute('events_list');    				
    			}	
    		}
    		else{
				$this->addFlash(
	            	'notice',
	            	'Access Denied!'
	         	);
    			return $this->redirectToRoute('events_list');    			
    		}

    		
    		return $this->redirectToRoute('events_list');
    	}
    	catch(\Exception $e){
    		$this->addFlash(
	            'notice',
	            'Error: Not registered.'
	             );
	        return $this->redirectToRoute('events_list');

    	}
        
    }

    /**
    * @Route("events/unregister/{id}", name="events_unregister")
    */

    public function unregisterAction($id){
    	try{
    		$user = $this->getUser();
    		$event = $this->getDoctrine()
	            ->getRepository('AppBundle:Event')
	            ->find($id);
    		if($user){
    			$userRole = $user->getUserRole();
    			if(strcmp($userRole, 'ROLE_USER') == 0){
    				$em = $this->getDoctrine()
	            		->getRepository('AppBundle:EventUser');

	        		$criteria = new \Doctrine\Common\Collections\Criteria();
	        		$criteria->where($criteria->expr()->eq('user', $user));
	        		$criteria->andwhere($criteria->expr()->eq('event', $event));

	        		$result = $em->matching($criteria);

	        		if($result->isEmpty()){
	        			$this->addFlash(
	            			'notice',
	            			'You are not registered for this event.');
	        		}
	        		else{
	        			$objId = "";
	        			foreach($result as $x){
	        				$objId = $x->getId();
	        			}
	        			$em = $this->getDoctrine()->getManager();
	        			$eventUserObj = $em->getRepository('AppBundle:EventUser')->find($objId);

	        			$em->remove($eventUserObj);
	        			$em->flush();

	            		$this->addFlash(
	            			'notice',
	            			'Unregistered');

	        		}


    			}
    			else{
    				$this->addFlash(
	            	'notice',
	            	'Access Denied!'
	         	);
    			return $this->redirectToRoute('events_list');    				
    			}	
    		}
    		else{
				$this->addFlash(
	            	'notice',
	            	'Access Denied!'
	         	);
    			return $this->redirectToRoute('events_list');    			
    		}

    		
    		return $this->redirectToRoute('events_list');
    	}
    	catch(\Exception $e){
    		$this->addFlash(
	            'notice',
	            'Error: Not able to unregister.'
	             );
	        return $this->redirectToRoute('events_list');

    	}
        
    }



}
    