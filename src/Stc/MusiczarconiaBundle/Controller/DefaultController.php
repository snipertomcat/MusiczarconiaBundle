<?php

namespace Stc\MusiczarconiaBundle\Controller;

use Stc\MusiczarconiaBundle\Tools\DateTimeTools;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

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
        $dateObj = new \DateTime($date);
        $date = date_format($dateObj, 'Y-m-d');
        //print_r($request->request);exit;
        $schedulerRepository = $this->get('stc_musiczarconia.repository.scheduler');

        $todaysReservations = $schedulerRepository->findReservationByDate($date);
        //print_r($todaysReservations);exit;
        $htmlClasses = array();

        foreach ($todaysReservations as $res) {
            $stime = $res['reservation_time'];
            $duration = $res['duration'];
            $studio = $res['studio_id'];

            $split = explode(":",$stime);
            $convertedMins = ($split[1] == '30') ? '50' : '00';
            $simpleStime = ltrim($split[0],'0').$convertedMins;
            $htmlClasses[] = $studio.'_'.$simpleStime;
            $duration = $duration*2;
            for ($i=1;$i<=($duration-.5);$i++) {
                $timeVerticle = ($simpleStime + 30);
                //echo substr(($simpleStime+30),1,2);exit;
                if (substr(($simpleStime+30),1,2) == '30') {
                    $simpleStime+=70;
                } elseif (substr($simpleStime+30,2,2) == '30') {
                    $simpleStime+=70;
                } else {
                    $simpleStime+=30;
                }
                if ($timeVerticle == '1300') {
                    $timeVerticle = '100';
                    $simpleStime = '100';
                } else if ($timeVerticle == '1370') {
                    $timeVerticle = '130';
                    $simpleStime = '130';
                }
                $htmlClasses[] = $studio.'_'.$timeVerticle;
            }
        }

        $return = array('responseCode' => '200', 'htmlContent' => $htmlClasses);
        $return = json_encode($return);

        return new Response($return, 200, array('Content-Type' => 'application/json'));
    }

    public function appointmentAction()
    {
        $request = $this->get('request');

        $date = $request->request->get('dateclick');
        $time = $request->request->get('time_container');
        $time = explode(' ',$time);

        array_pop($time);

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
            foreach ($reservations as $reservation) {

                $convertedTimes = DateTimeTools::convertTimeToId($reservation);
                $i = 0;

                foreach ($time as $timeSlot) {
                    if ($convertedTimes[$i] == $timeSlot) {
                        $error = "You've selected a time that is already booked for that studio.\nPlease choose
                                  another time slot.";
                    }

                    if ($error !== '') {
                        $return = array('responseCode' => 200, 'error' => $error);
                        $return = json_encode($return);
                        return new Response($return, 200, array('Content-Type' => 'application/json'));
                    } else {
                        $i++;
                    }
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
        $htmlClasses = array();

        foreach ($reservations as $res) {
            $stime = $res['reservation_time'];
            $duration = $res['duration'];
            $studio = $res['studio_id'];

            $split = explode(":",$stime);
            $convertedMins = ($split[1] == '30') ? '50' : '00';
            $simpleStime = ltrim($split[0],'0').$convertedMins;
            $htmlClasses[] = $studio.'_'.$simpleStime;
            $duration = $duration*2;
            for ($i=1;$i<=($duration-.5);$i++) {
                $timeVerticle = ($simpleStime + 30);
                //echo substr(($simpleStime+30),1,2);exit;
                if (substr(($simpleStime+30),1,2) == '30') {
                    $simpleStime+=70;
                } elseif (substr($simpleStime+30,2,2) == '30') {
                    $simpleStime+=70;
                } else {
                    $simpleStime+=30;
                }
                if ($timeVerticle == '1300') {
                    $timeVerticle = '100';
                } else if ($timeVerticle == '1370') {
                    $timeVerticle = '130';
                }
                $htmlClasses[] = $studio.'_'.$timeVerticle;
            }
        }

        $return = array('responseCode' => 200, 'htmlContent' => $htmlClasses);

        $return = json_encode($return);

        return new Response($return, 200, array('Content-Type' => 'application/json'));

    }

    public function studiosAction()
    {

        return $this->render('@StcMusiczarconia/Default/studios.html.twig');
    }
}
