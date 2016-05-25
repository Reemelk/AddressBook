<?php

    namespace UserBundle\Controller;

    use UserBundle\Entity\AddressBook;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use UserBundle\Form\ContactType;
    use Symfony\Component\HttpFoundation\Session\Session;

    class ContactController extends Controller
    {
        /* ajout d'un utilisateur*/
        public function newAction(Request $request)
        {
            $addressBook = new AddressBook();
            $addressBook->setUser($this->getUser());
            $form = $this->createForm(ContactType::class, $addressBook);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($addressBook);
                $em->flush();

                return $this->redirectToRoute('contact_list');
            }

            return $this->render('UserBundle:Form:form.html.twig', array(
                'form' => $form->createView(),
            ));
        }

        /* Affiche la liste de contact de l'utilisateur en question */
        public function showAction()
        {
            $id = $this->getUser()->getId();
            $datas = $this->getDoctrine()->getRepository("UserBundle:AddressBook")->findBy(array('user' => $id));

            return $this->render('UserBundle:Contact:contactList.html.twig',
                array('datas' => $datas)
            );
        }

        /* Supprime le contact selectionné */
        public function removeAction($id)
        {
            $userdatas = $this->getDoctrine()->getRepository("UserBundle:AddressBook")->find($id);
            $em = $this->getDoctrine()->getManager();
            $em->remove($userdatas);
            $em->flush();

            return $this->render('UserBundle:Contact:deleteContact.html.twig');
        }

        /* Affiche les informations du contact selectionné */
        public function showallAction($id)
        {
            $userdatas = $this->getDoctrine()->getRepository("UserBundle:AddressBook")->findById($id);

            return $this->render('UserBundle:Contact:contactListByUser.html.twig',
                array('userdatas' => $userdatas)
            );
        }
    }
