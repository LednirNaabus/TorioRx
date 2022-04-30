<div class="announcement-modal" id="modal">
	<div class="announcement-modal-content">
		<div class="announcement-heading-container">
			<div class="announcement-heading">Announcements!</div>
			<span class="announcement-close-button">
				<span class="iconify announcement-close-button" data-icon="eva:close-square-outline">
				</span>
			</span>
			<div class="announcement-line">

			</div>
		</div>
		<div class="announcement-content">
			<table class="announcement-table">
				<?php
				$sql = "SELECT * FROM announcements";
				$query = mysqli_query($link, $sql);
				while ($row = mysqli_fetch_array($query)) { ?>
					<tr>

						<?php
						if ($row['announcement_level'] == 1) {
							print '<td><span class="iconify ac" data-icon="ic:baseline-announcement" style="color:#6fb553"></span></td>';
						} else if ($row['announcement_level']  == 2) {
							print '<td><span class="iconify ac" data-icon="ic:baseline-announcement" style="color:#28b6e6"></span></td>';
						} else if ($row['announcement_level']  == 3) {
							print '<td><span class="iconify ac" data-icon="ic:baseline-announcement" style="color:#d70a0a"></span></td>';
						} else if ($row['announcement_level']  == 4) {
							print '<td><span class="iconify ac" data-icon="ic:baseline-announcement"></span></td>';
						} ?>
						<td><?php print $row['announcement_details']; ?></td>
					</tr>
				<?php } ?>

			</table>
		</div>
	</div>
</div>




<div id="footer">
	<div class="row" style=" width: 100%; padding-left: 100px;">

		<div class="col-md-3" style="margin-top: 4%;">
			<!-- <img class="logo-footer" src="assets/Logo-w.png" width="150" height="60"> -->
			<h1> TorioRx Pharmacy </h1>
		</div>
		<div class="col-md-3" style="margin-top: 4%">
			<a class="footerlinks" href="user-dashboard.php"> Home </a> <br>
			<a class="footerlinks" href="user-about.php"> About Us </a> <br>
			<a class="footerlinks" href="products.php"> Products </a> <br>
			<a class="footerlinks" href="user-contact.php"> Contact Us </a><br>
			<a class="footerlinks" href="registerlogin.php"> Logout </a> <br>

			<hr style="border: 1px solid white; width: 35%">

			<a class="footerlinks" href="#"> Feature 1 </a> <br>
			<a class="footerlinks" href="#"> Feature 2 </a> <br>
			<a class="footerlinks" href="#"> Feature 3 </a> <br>
		</div>
		<div class="col-md-3" style="margin-top: 4%; font-weight: 200;">
			052 P. Burgos St, Brgy. <br>
			Lunsad, Binangonan, <br>
			1940 Rizal <br>
		</div>
		<div class="col-md-3" style="margin-top: 4%; font-weight: 200;">
			Landline: (08)123-456-78 <br>
			Phone No.: 0915 512 5563
			<br>
			<br>
			<br>
			<br>
			<br>
			© TorioRx Pharmacy | Designed by <br> Andes, Ellazar, Santos, Subaan, Torio
		</div>
	</div>
</div>
<script>
	//Announcement Modal
	const modal = document.querySelector(".announcement-modal");
	const trigger = document.querySelector(".announcement");
	const closeButton = document.querySelector(".announcement-close-button");

	function toggleModal() {
		modal.classList.toggle("announcement-show-modal");

	}

	function closeModal() {
		modal.classList.toggle("announcement-show-modal");
	}

	trigger.addEventListener("click", toggleModal);
	closeButton.addEventListener("click", closeModal);
</script>