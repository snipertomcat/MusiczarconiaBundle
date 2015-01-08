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
        $this->conn->insert('contacts', array(
            'id' => '',
            'phone_mobile' => $data['phone'],
            'first_name' => $data['fname'],
            'last_name' => $data['lname'],
            'inetmapaddress' => $data['email'],
            'description' => $data['notes'],
            'deleted' => 0
        ));

        return $this->conn->lastInsertId();

        /*$contact = new Contacts();
        $contact->setDateEntered(new \DateTime('now'))
            ->setDeleted(0)
            ->setFirstName($data['fname'])
            ->setLastName($data['lname'])
            ->setPhoneMobile($data['phone'])
            ->setInetmapaddress($data['email'])
            ->setDescription($data['notes']);

        $this->em->persist($contact);

        $this->em->flush();

        return $contact->getId();*/
    }
}