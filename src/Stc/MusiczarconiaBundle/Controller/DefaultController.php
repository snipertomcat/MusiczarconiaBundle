<?php

namespace Stc\MusiczarconiaBundle\Controller;

use Stc\MusiczarconiaBundle\Form\Handler\AppointmentFormHandler;
use Stc\MusiczarconiaBundle\Form\Handler\ContactFormHandler;
use Stc\MusiczarconiaBundle\Tools\DateTimeTools;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\DateTime;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $page_data = array();

        return $this->render('StcMusiczarconiaBundle:Default:index.html.twig', $page_data);
    }

    public function displayAction($date='')
    {
        $page_data = array();

        return $this->render('StcMusiczarconiaBundle:Default:display.html.twig', $page_data);
    }

    public function currentreservationsAction()
    {
        $request = $this->get('request');
        $date = $request->request->get('dateclick');

        //$dateObj = new \DateTime($date);
        //$date = date_format($dateObj, 'Y-m-d');
        //print_r($request->request);exit;
        $schedulerRepository = $this->get('stc_musiczarconia.repository.scheduler');

        $todaysReservations = $schedulerRepository->findReservationByDate($date);
        //print_r($todaysReservations);exit;
        //$htmlClasses = array();

        $htmlClasses = DateTimeTools::convertTimeToId($todaysReservations);

        $return = array('responseCode' => '200', 'htmlContent' => $htmlClasses);
        $return = json_encode($return);

        return new Response($return, 200, array('Content-Type' => 'application/json'));
    }

    public function appointmentAction()
    {
        $request = $this->get('request');

        $date = $request->request->get('dateclick');
        $time = rtrim($request->request->get('time_container'));
        $time = explode(' ',$time);
//print_r($time);exit;
        $schedularRepository = $this->get('stc_musiczarconia.repository.scheduler');
        $clientRepository = $this->get('stc_musiczarconia.repository.clients');

        $reservations = $schedularRepository->findReservationByDate($date);
        //print_r($reservations);exit;
        //check database for reservations on given date:
        if (!empty($reservations)) {

            $error = '';
            //check database for reservations on given time:
            $htmlClasses = DateTimeTools::convertTimeToId($reservations);

            foreach ($time as $timeSlot) {

                if (in_array($timeSlot,$htmlClasses)) {
                    $error = "You've selected a time that is already booked.\nPlease choose
                              another time slot.";
                }

                if ($error !== '') {
                    $return = array('responseCode' => 200, 'error' => $error);
                    $return = json_encode($return);
                    return new Response($return, 200, array('Content-Type' => 'application/json'));
                }
            }

        }
        //@todo put this into the handler or create an event listener instead of inline with controller:
        $requestVars = $request->request->getIterator()->getArrayCopy();
        $scheduleInsertId = $schedularRepository->saveReservation($date, $time);
        $requestVars['scheduler_id'] = $scheduleInsertId;

        $appointmentHandler = $this->get('stc_musiczarconia.form.handler.appointments');
        $appointmentHandler->handle($requestVars);


        //At this point, there is not conflict in the schedule, proceed to save the appointment:

 /*
        $fname = $request->request->get('fname');
        $lname = $request->request->get('lname');
        $phone = $request->request->get('phone');
        $email = $request->request->get('email');
        $notes = $request->request->get('notes');

        $data = ['fname' => $fname,
            'lname' => $lname,
            'phone' => $phone,
            'email' => $email,
            'notes' => $notes
        ];
*/
        //$handler = new ContactFormHandler($data);


        //$this->get('doctrine.orm.entity_manager')->getConnection()->insert('scheduler_contact',
        //    ['scheduler_id'=>$newScheduleId, 'contact_id'=>$newContactId]);

        $return = array('responseCode' => 200, 'error' => '', 'response' => 'Thank you! Your time spot has been
        reserved');
        $return = json_encode($return);
        return new Response($return, 200, array('Content-Type' => 'application/json'));


    }



    public function dayviewAction()
    {
        $request = $this->get('request');

        $date = $request->request->get('dateclick'); //date will be in mm/dd/yyyy

        $schedulerRepository = $this->get('stc_musiczarconia.repository.scheduler');

        $reservations = $schedulerRepository->findReservationByDate($date);
        $htmlClasses = DateTimeTools::convertTimeToId($reservations);

        $return = array('responseCode' => 200, 'htmlContent' => $htmlClasses);

        $return = json_encode($return);

        return new Response($return, 200, array('Content-Type' => 'application/json'));

    }

    public function studiosAction()
    {

        return $this->render('@StcMusiczarconia/Default/studios.html.twig');
    }
}
