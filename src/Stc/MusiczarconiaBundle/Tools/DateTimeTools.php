<?php

namespace Stc\MusiczarconiaBundle\Tools;

class DateTimeTools
{
    /*
     * Converts time from database to the id used in the form
     */
    public static function convertTimeToId($reservations)
    {
        $htmlClasses = array();

        $timeArray = [
            0    => '1200',
            1    => '1230',
            2    => '100',
            3    => '130',
            4    => '200',
            5    => '230',
            6    => '300',
            7    => '330',
            8    => '400',
            9    => '430',
            10   => '500',
            11   => '530',
            12   => '600',
            13   => '630',
            14   => '700',
            15   => '730',
            16   => '800',
            17   => '830',
            18   => '900',
            19   => '930',
            20   => '1000',
            21   => '1030',
            22   => '1100',
            23   => '1130'
        ];

        foreach ($reservations as $res) {

            $stime = $res['reservation_time'];
            $duration = $res['duration'];
            $studio = $res['studio_id'];

            $split = explode(":",$stime);
            $hour = ltrim($split[0],"0");
            $mins = $split[1];

            /*if (substr($hour, 0, 1) == '0') {
                $hour = substr($hour,1,-1);
            }*/

            $fullTimeString = $hour . $mins;

            //get the time's position int the timeArray:
            $timePosition = array_search($fullTimeString, $timeArray);
            //move up array by key of $duration and retrieve value:
            for ($i=0; $i<=$duration-1; $i++)
            {
                $key = $timePosition + $i;
                $timeValue = $timeArray[$key];
                $htmlClasses[] = $studio . "_" . $timeValue;
            }

        }

        return $htmlClasses;
    }
}