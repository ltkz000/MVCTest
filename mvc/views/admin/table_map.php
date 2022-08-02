<?php
$isOpen = 0;
?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="./mvc/views/style/map.css" />
</head>

<body>
    <div class="set-table" id="myPopup">
        <div class="popup">
            <div class="xline">
                <span class="table-id" id="id"></span>
                <button onclick="closePopup()">-</button>
            </div>
        </div>
    </div>
    <div>
        <div class="grid">
            <div class="row row1">-</div>
            <div class="row row2">
                <div></div>
                <div class="tile" id="101" onclick="popup(101)">101</div>
                <div></div>
                <div class="tile" id="102" onclick="popup(102)">102</div>
                <div></div>
                <div class="tile" id="103" onclick="popup(103)">103</div>
                <div></div>
                <div class="tile" id="104" onclick="popup(104)">104</div>
                <div></div>
            </div>
            <div class="row row3">-</div>
            <div class="row row4">
                <div></div>
                <div class="tile" id="105" onclick="popup(105)">105</div>
                <div></div>
            </div>
            <div class="row row5">-</div>
            <div class="row row6">
                <div></div>
                <div class="tile" id="106" onclick="popup(106)">106</div>
                <div></div>
                <div class="tile" id="107" onclick="popup(107)">107</div>
                <div></div>
                <div class="tile" id="108" onclick="popup(108)">108</div>
                <div></div>
                <div class="tile" id="109" onclick="popup(109)">109</div>
                <div></div>
            </div>
            <div class="row row7">-</div>
            <div class="row row8">
                <div></div>
                <div class="tile" id="110" onclick="popup(110)">110</div>
                <div></div>
                <div class="tile" id="111" onclick="popup(111)">111</div>
                <div></div>
                <div class="tile" id="112" onclick="popup(112)">112</div>
                <div></div>
            </div>
            <div class="row row9">-</div>
            <div class="row row10">
                <div></div>
                <div class="tile" id="201" onclick="popup(201)">201</div>
                <div></div>
                <div class="tile" id="202" onclick="popup(202)">202</div>
                <div></div>
                <div class="tile" id="203" onclick="popup(203)">203</div>
                <div></div>
                <div class="tile" id="204" onclick="popup(204)">204</div>
                <div></div>
                <div class="tile" id="205" onclick="popup(205)">205</div>
                <div></div>
                <div class="tile" id="206" onclick="popup(206)">206</div>
                <div></div>
            </div>
            <div class="row row11">-</div>
            <div class="row row12">
                <div></div>
                <div class="tile" id="207" onclick="popup(207)">207</div>
                <div></div>
                <div class="tile" id="208" onclick="popup(208)">208</div>
                <div></div>
            </div>
            <div class="row row13">-</div>
            <div class="row row14">
                <div></div>
                <div class="tile" id="209" onclick="popup(209)">209</div>
                <div></div>
                <div class="tile" id="210" onclick="popup(210)">210</div>
                <div></div>
                <div class="tile" id="211" onclick="popup(211)">211</div>
                <div></div>
                <div class="tile" id="212" onclick="popup(212)">212</div>
                <div></div>
                <div class="tile" id="213" onclick="popup(213)">213</div>
                <div></div>
            </div>
            <div class="row row15">-</div>
            <div class="row row16">
                <div></div>
                <div class="tile" id="214" onclick="popup(214)">214</div>
                <div></div>
                <div class="tile" id="215" onclick="popup(215)">215</div>
                <div></div>
                <div class="tile" id="216" onclick="popup(216)">216</div>
                <div></div>
                <div class="tile" id="217" onclick="popup(217)">217</div>
                <div></div>
                <div class="tile" id="218" onclick="popup(218)">218</div>
                <div></div>
                <div class="tile" id="219" onclick="popup(219)">219</div>
                <div></div>
            </div>
            <div class="row row17">-</div>
        </div>
        <script type="text/javascript">
            function popup(table_id) {
                <?php
                if ($isOpen == 0) {
                    $isOpen = 1;
                    echo '
                        var popup = document.getElementById("myPopup");
                        popup.style.visibility = "visible";
                        document.getElementById("id").innerHTML = table_id;
                    ';
                }
                ?>
            }

            function closePopup() {
                var popup = document.getElementById("myPopup");
                popup.style.visibility = "hidden";
            }
        </script>
    </div>


</body>