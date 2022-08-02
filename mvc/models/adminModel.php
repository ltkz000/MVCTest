<?php
    class adminModel extends DbConnect{
        public function changeColor()
        {
            $qr = "select Status,TableID from tables";
            $result = mysqli_query($this->conn, $qr);

            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    switch($row["Status"]){
                        case 0:
                            echo '<script type="text/JavaScript"> document.getElementById("'.$row["TableID"].'").style.backgroundColor = "darkgrey"; </script>';
                            break;
                        case 1:
                            echo '<script type="text/JavaScript"> document.getElementById("'.$row["TableID"].'").style.backgroundColor = "saddlebrown"; </script>';
                            break;
                        case 2:
                            echo '<script type="text/JavaScript"> document.getElementById("'.$row["TableID"].'").style.backgroundColor = "lime"; </script>';
                            break;
                        case 3:
                            echo '<script type="text/JavaScript"> document.getElementById("'.$row["TableID"].'").style.backgroundColor = "red"; </script>';
                            break;
                    }
                }
            }
        }

        public function changeTableStatus($id, $new_status)
        {
            $new_statuss = -1;

            switch($new_status){
                case "empty":
                    $new_statuss = 0;
                    break;
                case "booked":
                    $new_statuss = 1;
                    break;
                case "on":
                    $new_statuss = 2;
                    break;
                case "late":
                    $new_statuss = 3;
                    break;
            }

            $qr = "update tables set Status=".$new_statuss." where TableID=".$id;
            if (mysqli_query($this->conn, $qr)){
                echo "suc xit";
            }
            else
                echo "nhu cl ". mysqli_error($this->conn);
        }

        public function getReserveInfo()
        {
            $ketqua = [];

            $qr = "select * from bookrequest";
            $result = mysqli_query($this->conn, $qr);

            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    $ketqua[] = $row;
                }
            }

            return $ketqua;
        }
    }
?>