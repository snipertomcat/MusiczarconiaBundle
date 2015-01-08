<?php


namespace Stc\MusiczarconiaBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Stc\MusiczarconiaBundle\Entity\Contacts;
use Doctrine\ORM\EntityManager;

class ContactRepository extends EntityRepository
{
    private $conn;

    protected $em;

    public function __construct($em)
    {
        $this->em = $em;
    }

    public function findContactByName($name)
    {
        return $this->conn->fetchAll('SELECT *
                                      FROM contacts
                                      WHERE CONCAT(contacts.fname, " ",contacts.lname) like "%'.$name.'%"');
    }

    public function setConn($conn)
    {
        $this->conn = $conn;

    }

    public function saveContact($data)
    {
    }
}