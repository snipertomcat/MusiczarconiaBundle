<?php

namespace Stc\MusiczarconiaBundle\Controller;

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

        $reservations = $schedularRepository->findReservationByDate($date);
        //print_r($reservations);exit;
        /*
         *
         */
        //check database for reservations on given date:
        if (!empty($reservations)) {

            $error = '';
            //check database for reservations on given time:
            $htmlClasses = DateTimeTools::convertTimeToId($reservations);

            foreach ($time as $timeSlot) {

                if (in_array($timeSlot,$htmlClasses)) {
                    $error = "You've selected a time that is already booked for that studio.\nPlease choose
                              another time slot.";
                }

                if ($error !== '') {
                    $return = array('responseCode' => 200, 'error' => $error);
                    $return = json_encode($return);
                    return new Response($return, 200, array('Content-Type' => 'application/json'));
                }
            }

        }

        //At this point, there is not conflict in the schedule, proceed to save the appointment:

        $schedularRepository->saveReservation($date, $time);

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
