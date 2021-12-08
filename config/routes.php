<?php
/**
 * Routes configuration.
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * It's loaded within the context of `Application::routes()` method which
 * receives a `RouteBuilder` instance `$routes` as method argument.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return static function (RouteBuilder $routes) {
    /*
     * The default class to use for all routes
     *
     * The following route classes are supplied with CakePHP and are appropriate
     * to set as the default:
     *
     * - Route
     * - InflectedRoute
     * - DashedRoute
     *
     * If no call is made to `Router::defaultRouteClass()`, the class used is
     * `Route` (`Cake\Routing\Route\Route`)
     *
     * Note that `Route` does not do any inflections on URLs which will result in
     * inconsistently cased URLs when used with `:plugin`, `:controller` and
     * `:action` markers.
     */
    $routes->setRouteClass(DashedRoute::class);
    $routes->scope('/casa-musical', function (RouteBuilder $builder) { 
        $builder->connect('/', ['controller' => 'HomeMusic', 'action' => 'index']); 
        $builder->connect('/add/', ['controller' => 'HomeMusic', 'action' => 'add']); 
        $builder->connect('/view/*', ['controller' => 'HomeMusic', 'action' => 'view']); 
        $builder->connect('/edit/*', ['controller' => 'HomeMusic', 'action' => 'edit']); 
        $builder->connect('/delete/*', ['controller' => 'HomeMusic', 'action' => 'delete']); 
    });

    $routes->scope('/albumes', function (RouteBuilder $builder) { 
        $builder->connect('/', ['controller' => 'Album', 'action' => 'index']); 
        $builder->connect('/add/', ['controller' => 'Album', 'action' => 'add']); 
        $builder->connect('/view/*', ['controller' => 'Album', 'action' => 'view']); 
        $builder->connect('/edit/*', ['controller' => 'Album', 'action' => 'edit']); 
        $builder->connect('/delete/*', ['controller' => 'Album', 'action' => 'delete']); 
    });

    $routes->scope('/interpretes', function (RouteBuilder $builder) { 
        $builder->connect('/', ['controller' => 'Singer', 'action' => 'index']); 
        $builder->connect('/add/', ['controller' => 'Singer', 'action' => 'add']); 
        $builder->connect('/view/*', ['controller' => 'Singer', 'action' => 'view']); 
        $builder->connect('/edit/*', ['controller' => 'Singer', 'action' => 'edit']); 
        $builder->connect('/delete/*', ['controller' => 'Singer', 'action' => 'delete']); 
    });

    $routes->scope('/generos_musicales', function (RouteBuilder $builder) { 
        $builder->connect('/', ['controller' => 'Genre', 'action' => 'index']); 
        $builder->connect('/add/', ['controller' => 'Genre', 'action' => 'add']); 
        $builder->connect('/view/*', ['controller' => 'Genre', 'action' => 'view']); 
        $builder->connect('/edit/*', ['controller' => 'Genre', 'action' => 'edit']); 
        $builder->connect('/delete/*', ['controller' => 'Genre', 'action' => 'delete']); 
    });

    $routes->scope('/canciones', function (RouteBuilder $builder) { 
        $builder->connect('/', ['controller' => 'Song', 'action' => 'index']); 
        $builder->connect('/add/', ['controller' => 'Song', 'action' => 'add']); 
        $builder->connect('/view/*', ['controller' => 'Song', 'action' => 'view']); 
        $builder->connect('/edit/*', ['controller' => 'Song', 'action' => 'edit']); 
        $builder->connect('/delete/*', ['controller' => 'Song', 'action' => 'delete']); 
    });

    $routes->scope('/medios', function (RouteBuilder $builder) { 
        $builder->connect('/', ['controller' => 'Media', 'action' => 'index']); 
        $builder->connect('/add/', ['controller' => 'Media', 'action' => 'add']); 
        $builder->connect('/view/*', ['controller' => 'Media', 'action' => 'view']); 
        $builder->connect('/edit/*', ['controller' => 'Media', 'action' => 'edit']); 
        $builder->connect('/delete/*', ['controller' => 'Media', 'action' => 'delete']); 
    });

    $routes->scope('/autores', function (RouteBuilder $builder) { 
        $builder->connect('/', ['controller' => 'Author', 'action' => 'index']); 
        $builder->connect('/add/', ['controller' => 'Author', 'action' => 'add']); 
        $builder->connect('/view/*', ['controller' => 'Author', 'action' => 'view']); 
        $builder->connect('/edit/*', ['controller' => 'Author', 'action' => 'edit']); 
        $builder->connect('/delete/*', ['controller' => 'Author', 'action' => 'delete']); 
    });

    $routes->scope('/', function (RouteBuilder $builder) {
        /*
         * Here, we are connecting '/' (base path) to a controller called 'Pages',
         * its action called 'display', and we pass a param to select the view file
         * to use (in this case, templates/Pages/home.php)...
         */
        $builder->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);

        /*
         * ...and connect the rest of 'Pages' controller's URLs.
         */
        $builder->connect('/pages/*', 'Pages::display');

        /*
         * Connect catchall routes for all controllers.
         *
         * The `fallbacks` method is a shortcut for
         *
         * ```
         * $builder->connect('/:controller', ['action' => 'index']);
         * $builder->connect('/:controller/:action/*', []);
         * ```
         *
         * You can remove these routes once you've connected the
         * routes you want in your application.
         */
        $builder->fallbacks();
    });

    /*
     * If you need a different set of middleware or none at all,
     * open new scope and define routes there.
     *
     * ```
     * $routes->scope('/api', function (RouteBuilder $builder) {
     *     // No $builder->applyMiddleware() here.
     *
     *     // Parse specified extensions from URLs
     *     // $builder->setExtensions(['json', 'xml']);
     *
     *     // Connect API actions here.
     * });
     * ```
     */
};
