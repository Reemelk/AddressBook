<?php

    namespace UserBundle\Entity;

    use FOS\UserBundle\Model\User as BaseUser;
    use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Entity
     * @ORM\Table(name="fos_user")
     */
    class User extends BaseUser
    {
        /**
         * @ORM\OneToMany(targetEntity="AddressBook", mappedBy="user")
         */
        private $addressBook;

        /**
         * @ORM\Id
         * @ORM\Column(type="integer")
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        protected $id;

        public function __construct()
        {
            parent::__construct();
        }
    
    /**
     * Set addressBook
     *
     * @param \UserBundle\Entity\AddressBook $addressBook
     *
     * @return User
     */
    public function setAddressBook(\UserBundle\Entity\AddressBook $addressBook = null)
    {
        $this->addressBook = $addressBook;

        return $this;
    }

    /**
     * Get addressBook
     *
     * @return \UserBundle\Entity\AddressBook
     */
    public function getAddressBook()
    {
        return $this->addressBook;
    }
}
