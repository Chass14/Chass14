<!DOCTYPE html>
<html>
<head>
	<title>Student Experience</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Courses</a></li>
				<li><a href="#">Events</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</nav>
	</header>
	<section class="testimonial">
		<h2>What Our Students Say</h2>
		<?php
			// Connect to database
			$conn = mysqli_connect("localhost", "username", "password", "database_name");

			// Query database for testimonials
			$result = mysqli_query($conn, "SELECT * FROM testimonials");

			// Loop through results and display testimonials
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<div class='testimonial-box'>";
				echo "<img src='" . $row['image'] . "' alt='student image'>";
				echo "<p>'" . $row['quote'] . "'</p>";
				echo "<h3>" . $row['name'] . "</h3>";
				echo "<span>" . $row['major'] . " Student</span>";
				echo "</div>";
			}

			// Close database connection
			mysqli_close($conn);
		?>
	</section>
	<section class="newsletter">
		<h2>Subscribe to Our Newsletter</h2>
		<p>Sign up to receive the latest news and updates from Student Experience.</p>
		<form method="post" action="subscribe.php">
			<input type="email" placeholder="Enter your email address" name="email">
			<button type="submit">Subscribe</button>
		</form>
	</section>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
	<title>Student Experience</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Courses</a></li>
				<li><a href="#">Events</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
			<?php
				// Connect to database
				$conn = mysqli_connect("localhost", "username", "password", "database_name");

				// Query database for social links
				$result = mysqli_query($conn, "SELECT * FROM social_links");

				// Loop through results and display social icons
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<a href='" . $row['link'] . "' target='_blank'><i class='fa " . $row['icon'] . "'></i></a>";
				}

				// Close database connection
				mysqli_close($conn);
			?>
		</nav>
	</header>
	<section class="testimonial">
		<h2>What Our Students Say</h2>
		<!-- Testimonial code here -->
	</section>
	<section class="newsletter">
		<h2>Subscribe to Our Newsletter</h2>
		<p>Sign up to receive the latest news and updates from Student Experience.</p>
		<form method="post" action="subscribe.php">
			<input type="email" placeholder="Enter your email address" name="email">
			<button type="submit">Subscribe</button>
		</form>
		<?php
			// Connect to database
			$conn = mysqli_connect("localhost", "username", "password", "database_name");

			// Query database for social links
			$result = mysqli_query($conn, "SELECT * FROM social_links");

			// Loop through results and display social icons
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<a href='" . $row['link'] . "' target='_blank'><i class='fa " . $row['icon'] . "'></i></a>";
			}

			// Close database connection
			mysqli_close($conn);
		?>
	</section>
</body>
</html>



?php
// Connect to the database
$host = "localhost";
$user = "username";
$password = "password";
$database = "database";
$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Update the social links in the database
$facebook_link = mysqli_real_escape_string($conn, $_POST['facebook_link']);
$linkedin_link = mysqli_real_escape_string($conn, $_POST['linkedin_link']);
$instagram_link = mysqli_real_escape_string($conn, $_POST['instagram_link']);
$sql = "UPDATE social_links SET link='$facebook_link' WHERE name='facebook'";
$result = mysqli_query($conn, $sql);
$sql = "UPDATE social_links SET link='$linkedin_link' WHERE name='linkedin'";
$result = mysqli_query($conn, $sql);
$sql = "UPDATE social_links SET link='$instagram_link' WHERE name='instagram'";
$result = mysqli_query($conn, $sql);

// Close the database connection
mysqli_close($conn);
?>














