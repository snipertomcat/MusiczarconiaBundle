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
}