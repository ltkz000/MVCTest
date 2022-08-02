<?php
    class bookATableModel extends DbConnect{
        private $name;
        private $sdt;
        private $email;
        private $guest_number;
        private $noti;

        public function getBookInfo()
        {
            if (!empty($_POST['get-name']) || !empty($_POST['get-phone-number']) || !empty($_POST['get-email']) || 
                !empty($_POST['get-time']) || !empty($_POST['get-number'])) 
            {
                $name = $_POST['get-name'];
                $sdt = $_POST['get-phone-number'];
                $email = $_POST['get-email'];
                $time = $_POST['get-time'];
                $guest_number = $_POST['get-number'];
                $noti = $_POST['get-notification'];

                $qr = "INSERT INTO `bookrequest`
                       (`Name`, `Sdt`, `Email`, `Time`, `NumofSeat`, `Text`, `Status`)
                       VALUES ('".$name."', '".$sdt."', '".$email."', '".$time."' , '".$guest_number."', '".$noti."', '1');";
                $result = mysqli_query($this->conn, $qr);
            }
        }
        
        public function testPopup()
        {
            echo '<script type="text/javascript">
                    window.onload = function () { alert("Welcome"); } </script>'; 

            // echo '<html>
            // <head>
            // <script>
            //     function myFunction() {
            //         var x;
            //         var r = confirm("Press OK or Cancel button");
            //         if (r == true) {
            //          x = "You pressed OK!";
            //      }
            //         else {
            //          x = "You pressed Cancel!";
            //      }
            //      document.getElementById("demo").innerHTML = x;
            // }
            // </script>
            // </head>
            // <body>
            // <button onclick="myFunction()">Click Me</button>
            // <p id="demo"></p>
            // </body>
            // </html>
            // ';
        }

        public function setStatus()
        {
            
        }
    }
?>