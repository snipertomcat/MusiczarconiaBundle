<?php

namespace Stc\MusiczarconiaBundle\Tools;

class DateTimeTools
{
    /*
     * Converts time from database to the id used in the form
     */
    public static function convertTimeToId($reservation)
    {
        $htmlClasses = array();

        $stime = $reservation['reservation_time'];
        $duration = $reservation['duration'];
        $studio = $reservation['studio_id'];

        $split = explode(":",$stime);
        $convertedMins = ($split[1] == '30') ? '50' : '00';
        $simpleStime = ltrim($split[0],'0').$convertedMins;
        $htmlClasses[] = $studio.'_'.$simpleStime;
        $duration = $duration * 2;
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
        return $htmlClasses;
    }
}