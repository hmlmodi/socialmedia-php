
 <?php
                $floginid = $_SESSION['floginid1'];

                $valid = "SELECT `followerId` FROM `follower` WHERE userId='$floginid'";
                $listquery = mysqli_query($connection, $valid);
                //  var_dump($row);

                while ($num = mysqli_fetch_array($listquery, MYSQLI_ASSOC)) {
                    $fol = $num["followerId"];
                    // var_dump($num);
                    $postquery = "SELECT `image`, `imageBio` FROM `post` where userId='$fol'";
                    $result = mysqli_query($connection, $postquery);


                ?>


                    <?php while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td>
                                <img src="images/<?php echo $row['image'] ?>" width="300"><br>

                                Bio:<br>
                                <?php echo $row['imageBio'] ?>
                            </td>
                        </tr>
                <?php

                    }
                } ?>