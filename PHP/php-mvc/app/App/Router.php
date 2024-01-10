<?php 

namespace Codeir\BelajarPhpMvc;


class Router
{
    private static array $routes = [];

    public static function add(string $method, string $path, string $controller, string $function): void
    {
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function,
        ];
    }

    public static function run(): void
    {
        // buat default path infonya
        $path = "/";

        // cek isset (jika ada path_info)
        if(isset($_SERVER['PATH_INFO'])){
            $path = $_SERVER['PATH_INFO'];
        }

        // ambil data request method nya (get/post/delete etc)
        $method = $_SERVER['REQUEST_METHOD'];

        foreach(self::$routes as $route){
            if($path == $route['path'] && $method == $route['method']){
                echo "Controller : " . $route['controller'] . ', Function : ' . $route['function'];
                return;
            }
        }

        http_response_code(400);
        echo 'CONTROLLER NOT FOUND';
    }
}