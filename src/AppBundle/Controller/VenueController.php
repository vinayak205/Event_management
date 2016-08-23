<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use AppBundle\Entity\Venue;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;




class VenueController extends Controller{

	/**
     * @Route("/venue/list", name="venue_list")
     */
    public function listAction(){
    	try{
    		$venues = $this->getDoctrine()
            	->getRepository('AppBundle:Venue')
            	->findAll();

            $user = $this->getUser();
            $userRole = 'ROLE_ADMIN';
            if($user){
            	$userRole = $user->getUserRole();
            }

        	return $this->render('venue/list.html.twig', array(
                'venues' => $venues,
                'role' => $userRole
            ));
    	}
    	catch(\Exception $e){
    		$this->addFlash(
                'notice',
                'Error: Not able to list the venues!'
            );
            return $this->redirectToRoute('homepage');
    	}
        
    }

    /**
     * @Route("/venue/add", name="venue_add")
     */
    public function createAction(Request $request){

    	try{

    		$venue = new Venue;
	        $form = $this->createFormBuilder($venue)
	            ->add('name', TextType::class, array('attr' => 
	            	array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
	            ->add('description', TextareaType::class, array('attr' => 
	            	array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
	            ->add('address', TextareaType::class, array('attr' => 
	            		array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
	            ->getForm();

	        $form -> handleRequest($request);

	        if($form -> isSubmitted() && $form -> isValid()){
	            $name = $form['name']->getData();
	            $description = $form['description']->getData();
	            $address = $form['address']->getData();

	            $venue->setName($name);
	            $venue->setDescription($description);
	            $venue->setAddress($address);

	            $em = $this->getDoctrine()->getManager();
	            $em->persist($venue);
	            $em->flush();

	            $this->addFlash(
	                'notice',
	                'Venue Added'
	                );
	            return $this->redirectToRoute('venue_list');

	        }

	        return $this->render('venue/create.html.twig', array(
	                'form' => $form->createView()
	            ));

    	}
    	catch(\Exception $e){
    		$this->addFlash(
                'notice',
                'Error: Venue not added.'
            );
            return $this->redirectToRoute('venue_list');

    	}

        
    }

    /**
     * @Route("/venue/delete/{id}", name="venue_delete")
     */
    public function deleteAction($id){
    	try{
    		$em = $this->getDoctrine()->getManager();
	        $venue = $em->getRepository('AppBundle:Venue')->find($id);

	        $em->remove($venue);
	        $em->flush();

	        $this->addFlash(
	                'notice',
	                'Venue deleted'
	            );
	        return $this->redirectToRoute('venue_list');
    	}
    	catch(\Exception $e){
    		$this->addFlash(
                'notice',
                'Error: Venue not deleted.'
            );
            return $this->redirectToRoute('venue_list');

    	}
        
    }

    /**
     * @Route("/venue/details/{id}", name="venue_details")
     */
    public function detailAction($id){
    	try{
    		$venue = $this->getDoctrine()
	            ->getRepository('AppBundle:Venue')
	            ->find($id);

	        return $this->render('venue/details.html.twig', array(
	                'venue' => $venue));
    	}
    	catch(\Exception $e){
    		$this->addFlash(
                'notice',
                'Error: Venue details cannot be displayed.'
            );
            return $this->redirectToRoute('venue_list');

    	}
        
    }

    /**
     * @Route("/venue/edit/{id}", name="venue_edit")
     */
    public function editAction($id, Request $request){

    	try{


    		$venue = $this->getDoctrine()
	            ->getRepository('AppBundle:Venue')
	            ->find($id);

	        $venue->setName($venue->getName());
	        
	        $venue->setDescription($venue->getDescription());
	        $venue->setAddress($venue->getAddress());

	        $form = $this->createFormBuilder($venue)
	            ->add('name', TextType::class, array('attr' => 
	            	array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
	            ->add('description', TextareaType::class, 
	            	array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
	            ->add('address', TextareaType::class, 
	            	array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
	            ->getForm();

	        $form -> handleRequest($request);

	        if($form -> isSubmitted() && $form -> isValid()){
	            $name = $form['name']->getData();
	            $description = $form['description']->getData();
	            $address = $form['address']->getData();

	            $em = $this->getDoctrine()->getManager();
	            $venue = $em->getRepository('AppBundle:Venue')->find($id);

	            $venue->setName($name);
	            $venue->setDescription($description);
	            $venue->setAddress($address);

	            $em->flush();

	            $this->addFlash(
	                'notice',
	                'Venue Updated'
	                );
	            return $this->redirectToRoute('venue_list');

	        }

	        return $this->render('venue/edit.html.twig', array(
	                'venue' => $venue,
	                'form' => $form->createView()
	                ));

    	}
    	catch(\Exception $e){
    		$this->addFlash(
                'notice',
                'Error: Venue details cannot be edited.'
            );
            return $this->redirectToRoute('venue_list');
    	}

    }
    
    

}

