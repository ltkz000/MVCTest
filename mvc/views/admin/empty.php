<div id="process-content">
    <ul>
        <?php
            foreach($data["info"] as $people){
                echo "<li><span>".$people["Name"]."    ".$people["Sdt"]."    ".$people["Time"]."</span>";
                echo "<div><i class='fa fa-check' aria-hidden='true'></i><i class='fa fa-ban' aria-hidden='true'></i></div>";
            }
        ?>
    </ul>
</div>