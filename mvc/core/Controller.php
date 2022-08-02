<?php
    class Controller
    {
        function model($model)
        {
            require_once "./mvc/models/".$model.".php";
            return new $model;
        }
        
        function view($view, $data = [])
        {
            require_once "./mvc/views/".$view.".php";
        }

        function viewAdmin($view, $data = [])
        {
            require_once "./mvc/views/admin/".$view.".php";
        }

        function handleRequest()
        {
            $op = isset($_POST['op']) ? $_POST['op'] : NULL;  

            switch($op)
            {
                case 'reserve':
                    echo "Success";
                    break;

                case NULL:
                    echo "NULL";
                    break;
                default:
            }
        }
    }
?>