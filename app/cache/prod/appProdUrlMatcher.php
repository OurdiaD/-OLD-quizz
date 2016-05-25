<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // inscription
        if ($pathinfo === '/inscription') {
            return array (  '_controller' => 'Quiz\\IndexBundle\\Controller\\QuizController::inscriptionAction',  '_route' => 'inscription',);
        }

        // autre_page
        if ($pathinfo === '/view') {
            return array (  '_controller' => 'Quiz\\IndexBundle\\Controller\\QuizController::viewAction',  '_route' => 'autre_page',);
        }

        // index2
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index2');
            }

            return array (  '_controller' => 'Quiz\\IndexBundle\\Controller\\QuizController::indexAction',  '_route' => 'index2',);
        }

        // index
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'Quiz\\IndexBundle\\Controller\\QuizController::indexAction',  '_route' => 'index',);
        }

        // question
        if (0 === strpos($pathinfo, '/question') && preg_match('#^/question/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'question')), array (  '_controller' => 'Quiz\\IndexBundle\\Controller\\QuizController::questionAction',));
        }

        if (0 === strpos($pathinfo, '/add')) {
            // add
            if ($pathinfo === '/add') {
                return array (  '_controller' => 'Quiz\\IndexBundle\\Controller\\QuizController::addQuizAction',  '_route' => 'add',);
            }

            // addC
            if ($pathinfo === '/addC') {
                return array (  '_controller' => 'Quiz\\IndexBundle\\Controller\\QuizController::addCAction',  '_route' => 'addC',);
            }

        }

        // modif
        if ($pathinfo === '/modif') {
            return array (  '_controller' => 'Quiz\\IndexBundle\\Controller\\QuizController::modifAction',  '_route' => 'modif',);
        }

        // bla
        if ($pathinfo === '/bla') {
            return array (  '_controller' => 'Quiz\\IndexBundle\\Controller\\QuizController::blaAction',  '_route' => 'bla',);
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Quiz\\IndexBundle\\Controller\\QuizController::connexionAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
