<?php


namespace Stc\MusiczarconiaBundle\Repository;

use Doctrine\ORM\EntityRepository;

class SchedulerRepository extends EntityRepository
{
    private $conn;

    public function __construct()
    {

    }

    public function findReservationByDate($date)
    {
        $date = date('Y-m-d', strtotime($date));

        return $this->conn->fetchAll('SELECT studio_id, reservation_time, duration
                                      FROM scheduler
                                      WHERE date = "'.$date.'"
                                      AND status = 1');
    }

    public function setConn($conn)
    {
        $this->conn = $conn;
    }

    public function saveReservation($date, $timeslots)
    {
        $date = date('Y-m-d', strtotime($date));
        $stimeSlot = $timeslots[0];
        $duration = count($timeslots);
        $parts = explode('_', $stimeSlot);
        $studio_id = $parts[0];
        $time = $parts[1];
        if (strlen($time) <= 3) {
            $time = "0".$time;
        }
        $reservation_time = substr($time, 0, 2) . ':' . substr($time, 2, 2) . ':00';

        $this->conn->insert('scheduler', array(
            'id' => null,
            'user_id' => 0,
            'studio_id' => $studio_id,
            'date' => $date,
            'reservation_time' => $reservation_time,
            'duration' => $duration,
            'notes' => '',
            'confirmation_code' => '',
            'created_at' => date('Y-m-d'),
            'updated_at' => '',
            'status' => 1
        ));
    }
}