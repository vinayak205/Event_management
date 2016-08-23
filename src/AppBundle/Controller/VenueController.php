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

        	return $this->render('venue/list.html.twig', array(
                'venues' => $venues
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
    

}

