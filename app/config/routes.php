<?php

    $router = new \Phalcon\Mvc\Router;

        $router->add('/{lg:[a-z]{2}}(/?)',
        array(
            "controller"=>'index',
            'action'=>'index',
            ));

    $router->add('/{lg:[a-z]{2}}/:controller(/?)',
        array(
            "controller"=>2,
            'action'=>'index',
            ));
    $router->add('/{lg:[a-z]{2}}/:controller/:action(/?)',
        array(
            "controller"=>2,
            'action'=>3,
            ));

    $router->add('/{lg:[a-z]{2}}/:controller/:action/:param',
        array(
            "controller"=>2,
            'action'=>3,
            'param'=>4
            ));

    $router->add('/signin',array(
        'controller'    =>  'Session',
        'action'        =>  'signin'
        ));

    /* Routes for Slug */
    $router->add('/school/{slug:[a-z0-9-]+}\/?',array(
        'namespace'     =>  'Learn\Controllers\slug',
        'controller'    =>  'Index',
        'action'        =>  'index'
        ));

    $router->add('/school/{slug:[a-z0-9-]+}/:controller',array(
        'namespace'     =>  'Learn\Controllers\slug',
        'controller'    =>  3,
        'action'        =>  'index'
        ));
    $router->add('/school/{slug:[a-z0-9-]+}/:controller/:action',array(
        'namespace'     =>  'Learn\Controllers\slug',
        'controller'    =>  2,
        'action'        =>  3
        ));
    $router->add('/school/{slug:[a-z0-9-]+}/:controller/:action/:int',array(
        'namespace'     =>  'Learn\Controllers\slug',
        'controller'    =>  2,
        'action'        =>  3,
        'int'         =>  4
        ));
  
    /*Routes for Admin*/

    $router->add('/{lg:[a-z]{2}}/admin(/?)',array(
        'namespace' =>'Learn\Controllers\admin',
        'controller'=>'Index',
        'action'    =>'index'
        ));
    $router->add('/{lg:[a-z]{2}}/admin/:controller/:action(/?)',array(
        'namespace'=>'Learn\Controllers\admin',
        'controller'=>2,
        'action'    =>3
        ));
     $router->add('/{lg:[a-z]{2}}/admin/:controller/:action/:int',array(
        'namespace' =>'Learn\Controllers\admin',
        'controller'=>2,
        'action'    =>3,
        'param'     =>4
        ));
    $router->add('/{lg:[a-z]{2}}/admin/:controller(/?)',array(
        'namespace' =>'Learn\Controllers\admin',
        'controller'=>2,
        'action'    =>'index'
        ));
    /*
     *Default Routes for Channel
    */

    $router->add('/{lg:[a-z]{2}}/channel(/?)',array(
        'namespace' =>'Learn\Controllers\channel',
        'controller'=>'Index',
        'action'    =>'index'
        ));
    $router->add('/{lg:[a-z]{2}}/channel/:controller/:action(/?)',array(
        'namespace' =>'Learn\Controllers\channel',
        'controller'=>2,
        'action'    =>3
        ));
    $router->add('/{lg:[a-z]{2}}/channel/:controller/:action/:int',array(
        'namespace' =>'Learn\Controllers\channel',
        'controller'=>2,
        'action'    =>3,
        'id'     =>4
        ));
    $router->add('/{lg:[a-z]{2}}/channel/:controller(/?)',array(
        'namespace' =>'Learn\Controllers\channel',
        'controller'=>2,
        'action'    =>'index'
        ));
    
    /*
     *Default Routes for Traineer
    */

    $router->add('/{lg:[a-z]{2}}/traineer(/?)',array(
        'namespace' =>'Learn\Controllers\traineer',
        'controller'=>'Index',
        'action'    =>'index'
        ));
     
    $router->add('/{lg:[a-z]{2}}/traineer/:controller/:action',array(
        'namespace' =>'Learn\Controllers\traineer',
        'controller'=>2,
        'action'    =>3
        ));
    $router->add('/{lg:[a-z]{2}}/traineer/:controller/:action/:int',array(
        'namespace' =>'Learn\Controllers\traineer',
        'controller'=>2,
        'action'    =>3,
        'id'     =>4
        ));
    $router->add('/{lg:[a-z]{2}}/traineer/:controller(/?)',array(
        'namespace' =>'Learn\Controllers\traineer',
        'controller'=>2,
        'action'    =>'index'
        ));
     /*
     *Default Routes for Student
    */

    $router->add('/{lg:[a-z]{2}}/student(/?)',array(
        'namespace' =>'Learn\Controllers\student',
        'controller'=>'Index',
        'action'    =>'index'
        ));
    
    $router->add('/{lg:[a-z]{2}}/student/:controller/:action(/?)',array(
        'namespace' =>'Learn\Controllers\student',
        'controller'=>2,
        'action'    =>3
        ));
    $router->add('/{lg:[a-z]{2}}/student/:controller/:action/:int',array(
        'namespace' =>'Learn\Controllers\student',
        'controller'=>2,
        'action'    =>3,
        'id'     =>4
        ));
    $router->add('/{lg:[a-z]{2}}/student/:controller(/?)',array(
        'namespace' =>'Learn\Controllers\student',
        'controller'=>2,
        'action'    =>'index'
        ));
    return $router;
