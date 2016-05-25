<?php
/**
*   Fichier
*
*  PHP Version 5.4
*
* @category Nothing
* @package  Nothing
* @author   daidec_o <ourdia.daideche@epitech.eu>
* @license  http://opensource.org/licenses/gpl-license.php GNU Public License
* @link     http://localhost:8080/rendu/
*/

namespace Quiz\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Quiz\IndexBundle\Entity\User;
use Quiz\IndexBundle\Entity\Category;
use Quiz\IndexBundle\Entity\Quiz;
use Symfony\Component\Security\Core\SecurityContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
// N'oubliez pas ce use pour l'annotation
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 *   Class
 *
 * @category Nothing
 * @package  Nothing
 * @author   daidec_o <ourdia.daideche@epitech.eu>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     http://localhost:8080/rendu/
 */
class QuizController extends Controller
{
    /**
    *  Doc function
    *  @param  object $request regle
    *  @return return
    */
    public function inscriptionAction(Request $request)
    {
        $user = new User();
        //$formBuilder = $this->createFormBuilder($user);
        $formBuilder = $this->get('form.factory')->createBuilder('form', $user);
        $formBuilder
            ->add('username',   'text')
            ->add('password', 'password')
            ->add('mail',    'email');

        $form = $formBuilder->getForm();

        $content = $this
            ->get('templating')
            ->render('QuizIndexBundle:Quiz:inscription.html.twig', ['form' => $form->createView()]);

        $form->handleRequest($request);
        //die(var_dump($form->handleRequest($request)));


        if ($form->isValid()) {
            // On l'enregistre notre objet $advert dans la base de données, par exemple
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'compte bien enregistrée.');

            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirect($this->generateUrl('index'));
        }
                //die(var_dump($form->createView()));
        return new Response($content);

        //return $this->render('QuizIndexBundle:Quiz:index.html.twig', array('form' => $form->createView()));   
    }

    /**
    *  Doc function
    *  @return return
    */
    public function viewAction()
    {
        return $this->render('QuizIndexBundle:Quiz:view.html.twig');
    }

    /**
    *  Doc function
    *  @param  object $request regle
    *  @return return
    */
    public function connexionAction(Request $request)
    {
            // Si le visiteur est déjà identifié, on le redirige vers l'accueil
        if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('index'));
        }

        $session = $request->getSession();

        // On vérifie s'il y a des erreurs d'une précédente soumission du formulaire
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render(
            'QuizIndexBundle:Quiz:connexion.html.twig', 
            array(
                // Valeur du précédent nom d'utilisateur entré par l'internaute
                'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                'error'         => $error,
            )
        );
        /*   $user = new User();
        //$formBuilder = $this->createFormBuilder($user);
        $formBuilder = $this->get('form.factory')->createBuilder('form', $user);
        $formBuilder
            ->add('login',   'text')
            ->add('password','password');

        $form = $formBuilder->getForm();


        $form->handleRequest($request);

        if ($form->isValid()) {
            $req = $form->getViewData();
            $login = $req->getLogin();
            $pass = $req->getpassword();

            
          // On l'enregistre notre objet $advert dans la base de données, par exemple
          /* $em = $this->getDoctrine()->getManager();
          $em->persist($user);
          $em->flush();*/
          /*        $repository = $this->getDoctrine()
                ->getRepository('QuizIndexBundle:User');
            $products = $repository->findBy(
                array('login' => $login,
                      'password' => $pass)
            );

            //die(var_dump(count($products)));

                if (count($products) != 0) {
                        //die(var_dump($products));
                    $request->getSession()->getFlashBag()->add('info', 'Annonce bien enregistrée.');

                  // On redirige vers la page de visualisation de l'annonce nouvellement créée
                    return $this->redirect($this->generateUrl('autre_page'));
                } else {
                    $request->getSession()->getFlashBag()->add('info', "Erreur d'identifiants");
                    return $this->render('QuizIndexBundle:Quiz:connexion.html.twig', ['form' => $form->createView()]);
                }
        }

        return $this->render('QuizIndexBundle:Quiz:connexion.html.twig', ['form' => $form->createView()]);
        */
          // Si le visiteur est déjà identifié, on le redirige vers l'accueil
        /*  if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
          return $this->redirect($this->generateUrl('oc_platform_accueil'));
        }

        $session = $request->getSession();

        // On vérifie s'il y a des erreurs d'une précédente soumission du formulaire
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
          $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
          $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
          $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render('OCUserBundle:Security:login.html.twig', array(
          // Valeur du précédent nom d'utilisateur entré par l'internaute
          'last_username' => $session->get(SecurityContext::LAST_USERNAME),
          'error'         => $error,
        ));*/
    }

    /**
    *  Doc function
    *  @param  object $request regle
    *  @return return
    */
    public function indexAction(Request $request)
    {
        //$ip = $this->request->server->get('REMOTE_ADDR');
        // $ip = $_SERVER['HTTP_CLIENT_IP'];
        // $ip2 = $_SERVER['HTTP_X_FORWARDED_FOR'];
        /* $ip3 = $_SERVER['REMOTE_ADDR'];
        $ip4 = $_SERVER['SERVER_ADDR'];
        $agent = $_SERVER['HTTP_USER_AGENT'];
        var_dump("4".$ip4);
        var_dump($agent); save bdd + cookie?

        //die(var_dump($ip2));
        die(var_dump("3".$ip3));*/
        $repository = $this->getDoctrine()
            ->getRepository('QuizIndexBundle:Category');
        $products = $repository->findAll();
        //die(var_dump($products));
        
        return $this->render('QuizIndexBundle:Quiz:index.html.twig', ['category' => $products]);
    }

    /**
    *  Doc function
    *  @param  object $request regle
    *  @return return
    *  @Security("has_role('ROLE_USER') or has_role('IS_AUTHENTICATED_REMEMBERED')")
    */
    public function addQuizAction(Request $request)
    {

        $repository = $this->getDoctrine()
            ->getRepository('QuizIndexBundle:Category');
        $category = $repository->findAll();
        $tab =[];
        foreach ($category as $key => $value) {
            $tab[$value->getId()] = $value->getName();
        }

        $user = new Quiz();
        //$formBuilder = $this->createFormBuilder($user);
        $formBuilder = $this->get('form.factory')->createBuilder('form', $user);
        $formBuilder
            ->add('question', 'textarea')
            ->add('reponse1', 'text')
            ->add('reponse2', 'text')
            ->add('reponse3', 'text')
            ->add('reponse4', 'text');

        $formBuilder
            ->add(
                'Category', 'choice', array(
                    'choices' => $tab,
                    'required'    => true
                )
            );

        $form = $formBuilder->getForm();
        $form->handleRequest($request);
        //die(var_dump($form));

        if ($form->isValid()) {
            // On l'enregistre notre objet $advert dans la base de données, par exemple
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'question bien enregistrée.');

            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirect($this->generateUrl('index'));
        }

        return $this->render('QuizIndexBundle:Quiz:add.html.twig', ['form' => $form->createView()]);
    }

    /**
    *  Doc function
    *  @param  object $id      regle
    *  @param  object $request regle
    *  @return return
    */
    public function questionAction($id, Request $request)
    {
        $repository = $this->getDoctrine()
            ->getRepository('QuizIndexBundle:Quiz');
        $products = $repository->findBy(
            array('category' => $id)
        );
        $i=0;
        $ques = $products[$i]->getQuestion();
        $rep1 = $products[$i]->getReponse1();
        $rep2 = $products[$i]->getReponse2();
        $rep3 = $products[$i]->getReponse3();
        $rep4 = $products[$i]->getReponse4();
        if (isset($_POST['next'])) {
            $i++;
            $i = $i;
            $ques = $products[$i]->getQuestion();
            $rep1 = $products[$i]->getReponse1();
            $rep2 = $products[$i]->getReponse2();
            $rep3 = $products[$i]->getReponse3();
            $rep4 = $products[$i]->getReponse4();
        }
        $reps = [$rep1, $rep2, $rep3, $rep4];
        $repst = shuffle($reps);
        //die(var_dump($reps));

        $user = new Quiz();
        //$formBuilder = $this->createFormBuilder($user);
        $formBuilder = $this->get('form.factory')->createBuilder('form', $user);
        $formBuilder
            ->add(
                'question', 'choice', array(
                    'choices' => array(
                        $reps[0] => $reps[0],
                        $reps[1] => $reps[1],
                        $reps[2] => $reps[2],
                        $reps[3] => $reps[3]
                    ),
                    'expanded'    => true,
                    'required'    => false
                )
            );

        $form = $formBuilder->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            // On l'enregistre notre objet $advert dans la base de données, par exemple
            //if ($_POST['form[question]'] == $rep1)
            //{
                $request->getSession()->getFlashBag()->add('info', 'Bonne réponse');
                
            //} else {
                //$request->getSession()->getFlashBag()->add('info', 'Mauvaise réponse');
            //}
            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->render('QuizIndexBundle:Quiz:question.html.twig', ['form' => $form->createView(), 'label' => $ques]);
        } else {
            $request->getSession()->getFlashBag()->add('info', 'Mauvaise réponse');
        }

        

        return $this->render('QuizIndexBundle:Quiz:question.html.twig', ['form' => $form->createView(), 'label' => $ques]);
    }

    /**
    *  Doc function
    *  @param  object $request regle
    *  @return return
    */
    public function modifAction(Request $request)
    {
         $user = new User();
        //$formBuilder = $this->createFormBuilder($user);
        $repository = $this->getDoctrine()
            ->getRepository('QuizIndexBundle:User');
        $products = $repository->findBy(
            array('id' => $id)
        );
        $formBuilder = $this->get('form.factory')->createBuilder('form', $user);
        $formBuilder
            ->add('username', 'text')
            ->add('password', 'password')
            ->add('mail', 'email');

        $form = $formBuilder->getForm();
        $form->handleRequest($request);
        //die(var_dump($form));

        if ($form->isValid()) {
            // On l'enregistre notre objet $advert dans la base de données, par exemple
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'modification bien enregistrée.');

            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirect($this->generateUrl('index'));
        }

        return $this->render('QuizIndexBundle:Quiz:addC.html.twig', ['form' => $form->createView()]);
    }

    /**
    *  Doc function
    *  @param  object $request regle
    *  @return return
    */
    public function addCAction(Request $request)
    {
        $user = new Category();
        //$formBuilder = $this->createFormBuilder($user);
        $formBuilder = $this->get('form.factory')->createBuilder('form', $user);
        $formBuilder
            ->add('name', 'text');

        $form = $formBuilder->getForm();
        $form->handleRequest($request);
        //die(var_dump($form));

        if ($form->isValid()) {
            // On l'enregistre notre objet $advert dans la base de données, par exemple
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'category bien enregistrée.');

            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirect($this->generateUrl('index'));
        }

        return $this->render('QuizIndexBundle:Quiz:addC.html.twig', ['form' => $form->createView()]);
    }

    /**
    * @Template("QuizIndexBundle:Quiz:index.html.twig")
    */
    public function blaAction()
    {
        return ['name' => 'blou'];
    }

}

?>