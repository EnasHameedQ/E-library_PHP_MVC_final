<?php 
namespace coding\app\system;
class Router{

    public $request;
    public $response;
    protected  static $routes = array(); 
    public function __construct($request)
    {
        $this->request=$request;
        
    }



  

    public static function get($url,$callback){
        self::$routes['GET'][$url]=$callback;



    }
    public static function post($url,$callback){
        self::$routes['POST'][$url]=$callback;


    }
    public function put(){

    }
    public function delete(){

    }

    function resolveRoute()
    {
        $route_parameters = array();
        $route = $this->request->getRoute();
        $method = $this->request->getRequestMethod();

        if (in_array($route, array_keys(self::$routes[$method])))
            return array(self::$routes[$method][$route], $route_parameters);

        foreach (self::$routes[$method] as $key => $value) {

            $paramsCount = preg_match_all('/{(.*?)}/', $key, $params);

            if ($paramsCount > 0) {

                $route_parts = explode('/', $route);
                $route_path = "";
                $values = array();
                for ($i = 0; $i < sizeof($route_parts); $i++) {
                    if ($i < sizeof($route_parts) - $paramsCount) {
                        $route_path .= $route_parts[$i] . "/";
                    } else {
                        $values[] = $route_parts[$i];
                    }
                }

                if ($route_path . implode('/', $params[0]) != $key)
                    continue;


                $route_parameters = array_combine($params[1], $values);

                return array($value, $route_parameters);
            }
        }
    }
    public  function executeRoute(){
     
       
        $route=$this->request->getRoute();
        $method=$this->request->getRequestMethod();
            $callback=self::$routes[$method][$route];

        
        
            if(isset($callback))
            {
                if(is_array($callback))
                {
                    $callback[0]=new $callback[0];
                }

                call_user_func($callback);
            }
            else {
                echo "page not found";
            }



    }

    public function viewWeb($view,$params){

        require_once __DIR__."/../views/pages/$view.php";


    }
    public function viewDashboard($view, $params)
    {

        require_once __DIR__ . "/../views/dashboard/$view.php";
    }
 

}
