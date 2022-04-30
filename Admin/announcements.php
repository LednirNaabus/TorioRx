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
        <div class="modal-edit" id="modal">
            <div class="modal-content-edit">
                <div class="heading-container">
                    <div class="heading">Edit Announcement</div>
                    <span class="close-button"><span class="iconify close-button" data-icon="eva:close-square-outline"></span></span>
                    <div class="line"></div>
                </div>
                <form action="edit_announcement.php" method="POST" class="edit-form">
                    <label for="title-label" class="title-label edit-title">Announcement Details:</label>
                    <textarea type="text" oninput="auto_grow(this)" id="textarea-edit" name="announcement_details" class="announcement-details"><?php print $announcement_details; ?></textarea>

                    <label for="type" class="type-label edit-title">Choose Type:</label>
                    <select id="type" name="type" class="select-type">

                        <?php
                        if ($announcement_level == 1) {
                            print '
                                <option value="4">Normal</option>
                                <option value="2">New Stock</option>
                                <option value="1" selected>Restock</option>
                                <option value="3">Urgent</option>                            
                            ';
                        } else if ($announcement_level == 2) {
                            print '
                                <option value="4">Normal</option>
                                <option value="2" selected>New Stock</option>
                                <option value="1">Restock</option>
                                <option value="3">Urgent</option>                            
                            ';
                        } else if ($announcement_level == 3) {
                            print '
                                <option value="4">Normal</option>
                                <option value="2">New Stock</option>
                                <option value="1">Restock</option>
                                <option value="3" selected>Urgent</option>                            
                            ';
                        } else if ($announcement_level == 4) {
                            print '
                                <option value="4" selected>Normal</option>
                                <option value="2">New Stock</option>
                                <option value="1">Restock</option>
                                <option value="3">Urgent</option>                            
                            ';
                        }
                        ?>


                    </select>

                    <input type="submit" name="edit" class="submit-edit" value="Save">
                </form>
            </div>
        </div><!-- END EDIT MODAL -->

        <div class="modal-delete" id="modal">
            <div class="modal-content-delete">
                <div class="heading-container">
                    <div class="heading">Delete Announcement</div>
                    <span class="close-button-delete"><span class="iconify close-button-delete" data-icon="eva:close-square-outline"></span></span>
                    <div class="line"></div>
                </div>
                <form action="delete_announcement.php" method="GET" class="edit-form">
                    <label for="title-label" class="title-label-delete">Delete this announcement?</label>
                    <input type="submit" name="delete" class="submit-delete" value="Delete">
                </form>
            </div>
        </div><!-- END DELETE MODAL -->

    <?php } else { ?>

        <div class="container">
            <table class="table">
                <tr>
                    <th>Announcements <span class="add-button-container"> <a class="add-modal"> <span class="iconify iconAdd" data-icon="ant-design:plus-outlined"></span> Add</a> </span></th>
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
            <!-- ADD MODAL -->
            <div class="modal-add" id="modal">
                <div class="modal-content-edit">
                    <div class="heading-container">
                        <div class="heading">Add Announcement</div>
                        <span class="close-button-add"><span class="iconify close-button-add" data-icon="eva:close-square-outline"></span></span>
                        <div class="line"></div>
                    </div>
                    <form action="add_announcement.php" method="POST" class="edit-form">
                        <label for="title-label" class="title-label v1">Announcement Details:</label>
                        <textarea type="text" oninput="auto_grow(this)" id="textarea" name="announcement_details" class="announcement-details"></textarea>

                        <label for="type" class="type-label">Choose Type:</label>
                        <select id="type" name="type" class="select-type">
                            <option value="4" selected>Normal</option>
                            <option value="2">New Stock</option>
                            <option value="1">Restock</option>
                            <option value="3">Urgent</option>
                        </select>

                        <input type="submit" name="add" class="submit" value="Add">
                    </form>
                </div>
            </div><!-- END ADD MODAL -->



            </table>




        </div>
        <?php include("../Customer/includes/main/products_search.php"); ?>

        <!-- footer -->
        <?php include('includes/main/footer.php'); ?>
        <script>
            //Edit Modal 
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





            //Delete Modal
            const modalDelete = document.querySelector(".modal-delete");
            const triggerDelete = document.querySelector(".delete-modal");
            const closeButtonDelete = document.querySelector(".close-button-delete");

            function toggleModalDelete() {
                modalDelete.classList.toggle("show-modal-delete");

            }

            function closeModalDelete() {
                modalDelete.classList.toggle("show-modal-delete");
            }

            triggerDelete.addEventListener("click", toggleModalDelete);
            closeButtonDelete.addEventListener("click", closeModalDelete);



            function auto_grow(element) {
                element.style.height = "5px";
                element.style.height = (element.scrollHeight) + "px";
            }
        </script>
        <script>
            //ADD Modal 
            const modaladd = document.querySelector(".modal-add");
            const triggeradd = document.querySelector(".add-modal");
            const closeButtonadd = document.querySelector(".close-button-add");

            function toggleModaladd() {
                modaladd.classList.toggle("show-modal");

            }

            function closeModaladd() {
                modaladd.classList.toggle("show-modal");
            }

            triggeradd.addEventListener("click", toggleModaladd);
            closeButtonadd.addEventListener("click", closeModaladd);
        </script>
</body>

</html>