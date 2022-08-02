<?php
    class Admin extends Controller
    {
        function HomePage()
        {
            $this->viewAdmin("index");
            $khach = $this->model("adminModel");
            $khach->changeColorLate();
        }

        function Test()
        {
            $this->viewAdmin("index");
            $khach = $this->model("adminModel");
            $khach->changeColorBooked();
        }
    }
?>