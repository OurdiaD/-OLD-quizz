<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'inscription' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Quiz\\IndexBundle\\Controller\\QuizController::inscriptionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'autre_page' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Quiz\\IndexBundle\\Controller\\QuizController::viewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/view',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'index2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Quiz\\IndexBundle\\Controller\\QuizController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Quiz\\IndexBundle\\Controller\\QuizController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'question' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Quiz\\IndexBundle\\Controller\\QuizController::questionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/question',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Quiz\\IndexBundle\\Controller\\QuizController::addQuizAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addC' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Quiz\\IndexBundle\\Controller\\QuizController::addCAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addC',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modif' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Quiz\\IndexBundle\\Controller\\QuizController::modifAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/modif',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bla' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Quiz\\IndexBundle\\Controller\\QuizController::blaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bla',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/app/example',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Quiz\\IndexBundle\\Controller\\QuizController::connexionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
