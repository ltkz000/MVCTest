<?php
    class Home extends Controller
    {
        public function HomePage()
        {
            $this->view("index", []);
            $khach = $this->model("bookATableModel");
            $khach->getBookInfo();
        }

        // function printInfo()
        // {
        //     $khach = $this->model("bookATableModel");
        //     $khach->testPopup(); 
        // }
    }
?>