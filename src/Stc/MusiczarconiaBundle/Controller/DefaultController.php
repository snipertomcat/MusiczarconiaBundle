<?php

namespace Stc\MusiczarconiaBundle\Controller;

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

        $return = array('responseCode' => '', 'htmlContent' => $htmlClasses);
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
}
