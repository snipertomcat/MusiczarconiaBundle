<?php


namespace Stc\MusiczarconiaBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Stc\MusiczarconiaBundle\Entity\Clients;
use Doctrine\ORM\EntityManager;

class ClientRepository extends EntityRepository
{
    private $conn;

    public function __construct()
    {
        $this->em = $this->getEntityManager();
    }

    public function findClientByName($name)
    {
        return $this->conn->fetchAll('SELECT *
                                      FROM clients
                                      WHERE CONCAT(clients.fname, " ",clients.lname) like "%'.$name.'%"');
    }

    public function setConn($conn)
    {
        $this->conn = $conn;

    }

    public function saveClient($data)
    {
        extract($data);

        $this->conn->insert('clients', array(
            'id' => null,
            'date_entered' => date('Y-m-d'),
            'description' => $notes,
            'deleted' => 0,
            'first_name' => $fname,
            'last_name' => $lname,
            'phone_mobile' => $phone,
            'email' => $email,
        ));

        $client_id = $this->conn->lastInsertId();

        $this->saveSchedulerRelation($client_id, $scheduler_id);

    }

    private function saveSchedulerRelation($client_id, $scheduler_id)
    {
        $this->conn->insert('client_appointments', [
            'scheduler_id' => $scheduler_id,
            'client_id' => $client_id
        ]);
    }
}