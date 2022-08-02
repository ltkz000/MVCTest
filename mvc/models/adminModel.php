<?php
    class adminModel extends DbConnect{
        public function bookTable()
        {

        }


        public function changeColorEmpty()
        {
            echo '<script type="text/JavaScript"> document.getElementById("101").style.backgroundColor = "darkgrey"; </script>';
        }

        public function changeColorBooked()
        {
            echo '<script type="text/JavaScript"> document.getElementById("101").style.backgroundColor = "saddlebrown"; </script>';
        }

        public function changeColorOnTable()
        {
            echo '<script type="text/JavaScript"> document.getElementById("101").style.backgroundColor = "lime"; </script>';
        }

        public function changeColorLate()
        {
            echo '<script type="text/JavaScript"> document.getElementById("101").style.backgroundColor = "red"; </script>';
        }
    }
?>