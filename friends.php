<?php
include("include./config.php");

$floginid = $_SESSION['floginid1'];
$friendsquery = "SELECT `userName` FROM `login` EXCEPT SELECT  `userName` FROM `login` WHERE id='$floginid' ";
$result = mysqli_query($connection, $friendsquery);
var_dump($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include('include./head.php'); ?>

    <title>friends</title>

</head>
<?php include('include./navbar.php'); ?>


<body>
    <div class="profilecontainer">
        <table class="table table-bordered">
            <thead>
                <th>Profile</th>
                <th></th>

            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td>
                            <div><?php echo $row["userName"]; ?>
                            </div>
                            <div> <?php
                                    $_SESSION['row'] = $row;
                                    $select = $row["userName"];
                                    $listquery = "SELECT `id` FROM `login` WHERE userName ='$select'";
                                    $listqueryimp = mysqli_query($connection, $listquery);
                                    $row = $listqueryimp->fetch_assoc();
                                    $frdprofileid = $row["id"];
                                    // $_SESSION['floginid1'] = $floginid;
                                    ?></div>
                        </td>
                        <td>
                            <form action='friends_profile.php' method='post'>

                                <input type="hidden" name='loginid' value='<?php echo $frdprofileid ?>' />
                                <button class="btn btn-primary" type="submit">View profile</button>
                            </form>

                        </td>
                    </tr>
                <?php } ?>
    </div>

</body>


</html>