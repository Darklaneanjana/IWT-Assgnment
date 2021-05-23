<?php
echo "<a href=appdet.php?app=" . $value["AppID"] . "><div class='appbox'>   
                                <img src='images/Apps/1.webp'>
                                <p class='apptitle'><b>" . $value["appName"] ."</b></p>
                                <div class='appdet'>
                                <p style='float: left;'>" . $downrow["downloads"] . "</p>
                                <p style='float: right;'>" . $value["size"] ."MB</p></div>
                            </div></a>";
?>