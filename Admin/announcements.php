<html>

<head>
    <title>TorioRx Pharmacy | Announcements</title>
    
    <?php include('includes/main/header.php'); ?> 
    <link rel="stylesheet" href="dist/css/announcement_style.css">
</head>
<?php
session_start();
if ($_SESSION['loggedin']) {
    include "includes/connection/db.php";
} else {
    header("location:registerlogin.php");
}
?>

<body style="font-family: Poppins;">

    <!-- navbar -->
    <?php include('includes/main/navbar.php'); ?>

    <?php
    if (!empty($_GET['id'])) {
        $announcement_id = $_GET['id'];
        $_SESSION['id'] = $announcement_id;
        $sql = "SELECT * FROM announcements Where announcement_id='$announcement_id'";
        $announcement_id = true;
        $query = mysqli_query($link, $sql);
        $count = mysqli_num_rows($query);
        if ($count > 0) {
            while ($row = mysqli_fetch_array($query)) {
                $announcement_details = $row['announcement_details'];
                $announcement_level = $row['announcement_level'];
            }
        } else {
            $announcement_id = false;
        }
    } else {
        $announcement_id = false;
    }
    if ($announcement_id) { ?>
        <div class="container">
            <table class="table">
                <tr>
                    <th><a href="announcements.php" class="return"> <span class="iconify r" data-icon="ion:return-up-back-outline"></span></a> Announcements</th>
                    <th>Type</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <tr>
                    <td><?php print $announcement_details; ?> </td>
                    <?php
                    if ($announcement_level == 1) {
                        print '<td><span class="iconify ac" data-icon="ic:baseline-announcement" style="color:#6fb553"></span>Restock</td>';
                    } else if ($announcement_level == 2) {
                        print '<td><span class="iconify ac" data-icon="ic:baseline-announcement" style="color:#28b6e6"></span>New Stock</td>';
                    } else if ($announcement_level == 3) {
                        print '<td><span class="iconify ac" data-icon="ic:baseline-announcement" style="color:#d70a0a"></span>Urgent</td>';
                    } else if ($announcement_level == 4) {
                        print '<td><span class="iconify ac" data-icon="ic:baseline-announcement"></span>Normal</td>';
                    }
                    ?>
                    <td><a class="edit-modal"><span class="iconify edit" data-icon="akar-icons:edit"></span></a></td>
                    <td><a class="delete-modal"><span class="iconify delete" data-icon="fluent:delete-dismiss-24-regular"></span></a></td>
                </tr>

            </table>

        </div>
        <div class="modal-edit show-modal" id="modal">
            <div class="modal-content-edit">
                <div class="heading-container">
                    <div class="heading">Edit Announcement</div>
                    <span class="close-button"><span class="iconify close-button" data-icon="eva:close-square-outline"></span></span>
                    <div class="line"></div>
                </div>
                <form action="" class="edit-form">
                    <label for="title-label" class="title-label v1">Announcement Details:</label>
                    <input type="text" id="course-title" name="title-label"> 

                    <input type="submit" name="add" class="submit" value="Add Course">
                </form>
            </div>
        </div><!-- END EDIT MODAL -->
    <?php } else { ?>

        <div class="container">
            <table class="table">
                <tr>
                    <th>Announcements</th>
                    <th>Type</th>
                    <th>Modify</th>
                </tr>
                <?php
                $sql = "SELECT * FROM announcements";
                $query = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?php print $row['announcement_details']; ?></td>
                        <?php
                        if ($row['announcement_level'] == 1) {
                            print '<td><span class="iconify ac" data-icon="ic:baseline-announcement" style="color:#6fb553"></span>Restock</td>';
                        } else if ($row['announcement_level']  == 2) {
                            print '<td><span class="iconify ac" data-icon="ic:baseline-announcement" style="color:#28b6e6"></span>New Stock</td>';
                        } else if ($row['announcement_level']  == 3) {
                            print '<td><span class="iconify ac" data-icon="ic:baseline-announcement" style="color:#d70a0a"></span>Urgent</td>';
                        } else if ($row['announcement_level']  == 4) {
                            print '<td><span class="iconify ac" data-icon="ic:baseline-announcement"></span>Normal</td>';
                        }
                        print '<td><a href="announcements.php?id=' . $row['announcement_id'] . '"><span class="iconify edit" data-icon="akar-icons:edit"></span></a></td>';
                        ?>
                    </tr>
            <?php
                }
            } ?>
            </table>
        </div>
        <?php include("../Customer/includes/main/products_search.php"); ?>

        <!-- footer -->
        <?php include('includes/main/footer.php'); ?>
        <script>
            //Add Modal
            const modal = document.querySelector(".modal-edit");
            const trigger = document.querySelector(".edit-modal");
            const closeButton = document.querySelector(".close-button");

            function toggleModal() {
                modal.classList.toggle("show-modal");

            }

            function closeModal() {
                modal.classList.toggle("show-modal");
            }

            trigger.addEventListener("click", toggleModal);
            closeButton.addEventListener("click", closeModal);
        </script>
</body>

</html>