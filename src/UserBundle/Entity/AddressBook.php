<?php

    namespace UserBundle\Entity;

    use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Table(name="address_book")
     * @ORM\Entity(repositoryClass="UserBundle\Entity\AddressBookRepository")
     */
    class AddressBook
    {
        /**
         * @ORM\ManyToOne(targetEntity="User", inversedBy="addressBook")
         * @ORM\JoinColumn(name="userID", referencedColumnName="id")
         */
        private $user;
        
        /**
         * @ORM\Column(name="id", type="integer")
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        private $id;

        /**
         * @ORM\Column(name="contact", type="string", length=255)
         */
        private $contact;

        /**
         * @ORM\Column(name="email", type="string", length=255)
         */
        private $email;

        /**
         * @ORM\Column(name="address", type="string", length=255)
         */
        private $address;

        /**
         * @ORM\Column(name="telephone", type="string", length=255)
         */
        private $telephone;

        /**
         * @ORM\Column(name="website", type="string", length=255)
         */
        private $website;
    
        /**
         * Get id
         *
         * @return integer
         */
        public function getId()
        {
            return $this->id;
        }
        
        /**
         * Set contact
         *
         * @param string $contact
         *
         * @return AddressBook
         */
        public function setContact($contact)
        {
            $this->contact = $contact;
        
            return $this;
        }
        
        /**
         * Get contact
         *
         * @return string
         */
        public function getContact()
        {
            return $this->contact;
        }
        
        /**
         * Set email
         *
         * @param string $email
         *
         * @return AddressBook
         */
        public function setEmail($email)
        {
            $this->email = $email;
        
            return $this;
        }
        
        /**
         * Get email
         *
         * @return string
         */
        public function getEmail()
        {
            return $this->email;
        }
        
        /**
         * Set address
         *
         * @param string $address
         *
         * @return AddressBook
         */
        public function setAddress($address)
        {
            $this->address = $address;
        
            return $this;
        }
        
        /**
         * Get address
         *
         * @return string
         */
        public function getAddress()
        {
            return $this->address;
        }
        
        /**
         * Set telephone
         *
         * @param string $telephone
         *
         * @return AddressBook
         */
        public function setTelephone($telephone)
        {
            $this->telephone = $telephone;
        
            return $this;
        }
        
        /**
         * Get telephone
         *
         * @return string
         */
        public function getTelephone()
        {
            return $this->telephone;
        }
        
        /**
         * Set website
         *
         * @param string $website
         *
         * @return AddressBook
         */
        public function setWebsite($website)
        {
            $this->website = $website;
        
            return $this;
        }
        
        /**
         * Get website
         *
         * @return string
         */
        public function getWebsite()
        {
            return $this->website;
        }
        
        /**
         * @return mixed
         */
        public function getUser()
        {
            return $this->user;
        }
        
        /**
         * @param mixed $user
         */
        public function setUser($user)
        {
            $this->user = $user;
        }
        
    }
