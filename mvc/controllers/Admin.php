<?php
    class Admin extends Controller
    {
        function HomePage()
        {
            $this->viewAdmin("index", ["page" => "empty"]);
            $khach = $this->model("adminModel");

            if(isset($_POST["empty_btn"]))
            {
                $changeId = $_POST["change-id"];
                $khach->changeTableStatus($changeId, "empty");
                $khach->changeColor();
            }

            if(isset($_POST["booked_btn"]))
            {
                $changeId = $_POST["change-id"];
                $khach->changeTableStatus($changeId, "booked");
                $khach->changeColor();
            }
            
            if(isset($_POST["on_btn"]))
            {
                $changeId = $_POST["change-id"];
                $khach->changeTableStatus($changeId, "on");
                $khach->changeColor();
            }
            
            if(isset($_POST["late_btn"]))
            {
                $changeId = $_POST["change-id"];
                $khach->changeTableStatus($changeId, "late");
                $khach->changeColor();
            }
        }

        function Empty()
        {
            $this->viewAdmin("index", [
                "page" => "empty",
                "info" => $this->model("adminModel")->getReserveInfo()]);
            // $khach = $this->model("adminModel");
            // $khach->changeColorBooked();
        }

        function Book()
        {
            $this->viewAdmin("index", ["page" => "book"]);
        }

        function On()
        {
            $this->viewAdmin("index", ["page" => "on"]);
        }

        function Late()
        {
            $this->viewAdmin("index", ["page" => "late"]);
        }
    }
?>