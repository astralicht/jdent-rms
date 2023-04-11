<?php   

/**
 * Contains array of routes and function for retrieving routes.
 */
class Routes {

    /**
     * @var array
     * Contains array of filepaths and allowed request methods.
     */
    private static $routes = [
        "403" => ["public/pages/error/403.php", ["GET"]],
        "404" => ["public/pages/error/404.php", ["GET"]],
        "500" => ["public/pages/error/500.php", ["GET"]],
        "" => ["public/pages/home.php", ["GET"]],
        "api" => ["public/pages/api.php", ["GET"]],
        "api/test" => ["php/Controllers/test.php", [
            "GET" => "fetch",
            "PUT" => "update",
        ], "Controllers\Test"],
    ];


    /**
     * Takes in URI and request method, returns either a route or null.
     */
    static function search($URI, $REQUEST_METHOD = "GET") {
        $route = self::searchKey($URI);
        $methodsIndex = 1;

        if ($route === null) return null;

        $methodsRoutes = $route[$methodsIndex];
        
        if (!(in_array($REQUEST_METHOD, $methodsRoutes) == true || in_array($REQUEST_METHOD, array_keys($methodsRoutes)) == true)) return null;

        return $route;
    }


    static function searchKey($URI) {
        $keys = array_keys(self::$routes);
        $route = null;

        foreach ($keys as $key) if (fnmatch($key, $URI)) return $route = self::$routes[$key];

        return $route;
    }

}