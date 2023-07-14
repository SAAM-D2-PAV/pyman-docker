<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class InspectingController extends AbstractController
{
    #[Route('/inspecting', name: 'inspecting')]
    function inspecting() : Response 
    {
        dump('test');


        //$exists = class_exists('App\User');
        $exists = class_exists(\App\User::class);

        $unknownObject = \App\Service\UserFactory::create(5, 'Gary');

        $className = get_class($unknownObject);

        $isUser = $unknownObject instanceof \App\Entity\User;

        $admin = new \App\Entity\Admin(5, 'Gary');

        $parentClass = get_parent_class($admin);

        $isSubclass = is_subclass_of($admin, \App\User::class);

        $classImplements = class_implements($admin);

        $isUserInstance = is_a($admin, \App\AuthenticatedUserInterface::class);

        //dd($isUserInstance);

        $user = new \App\Entity\User(5, 'Gary');

        $classMethods = get_class_methods($user);

        $methodExists = method_exists($user, 'setPassword');

        $isCallable = is_callable([$user, 'setPassword']);

        $props = get_class_vars(\App\Entity\User::class);

        $objectVars = get_object_vars($user);


        $classMethods = get_class_methods(self::class);

        dd($classMethods);

        return new Response('Hello World!');
    }
    
}