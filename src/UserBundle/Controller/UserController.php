<?php

    namespace UserBundle\Controller;

    use Symfony\Component\Form\Forms;
    use UserBundle\Entity\User;
    use UserBundle\Entity\AddressBook;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;


    class UserController extends Controller
    {
        /**
         * @Route("/")
         */
        public function indexAction()
        {
            return $this->render('UserBundle:Reception:index.html.twig');
        }
    }
