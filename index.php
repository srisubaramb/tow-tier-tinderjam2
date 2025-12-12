<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TinderJam2 - Find Your Perfect Match</title>
	<style>
		body {
			font-family: 'Arial', sans-serif;
			margin: 0;
			padding: 0;
			color: #333;
			line-height: 1.6;
		}

		header {
			background: linear-gradient(135deg, #ff6b6b 0%, #c44569 100%);
			color: white;
			padding: 20px 0;
			text-align: center;
		}

		header h1 {
			margin: 0;
			font-size: 2.5em;
		}

		.hero {
			background: url('https://images.unsplash.com/photo-1519741497674-611481863552?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') no-repeat center center;
			background-size: cover;
			padding: 100px 20px;
			text-align: center;
			color: white;
			position: relative;
		}

		.hero::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background: rgba(0, 0, 0, 0.4);
			z-index: 1;
		}

		.hero h2,
		.hero p {
			position: relative;
			z-index: 2;
		}

		.hero h2 {
			font-size: 3em;
			margin-bottom: 20px;
		}

		.hero p {
			font-size: 1.5em;
			margin-bottom: 40px;
		}

		.features {
			padding: 60px 20px;
			background: linear-gradient(135deg, #fef2f2 0%, #fce4ec 100%);
			text-align: center;
		}

		.features h3 {
			font-size: 2em;
			margin-bottom: 40px;
		}

		.feature-grid {
			display: flex;
			justify-content: space-around;
			flex-wrap: wrap;
			max-width: 1200px;
			margin: 0 auto;
		}

		.feature {
			flex: 1;
			min-width: 250px;
			margin: 20px;
			padding: 20px;
			background: white;
			border-radius: 10px;
			box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
		}

		.feature h4 {
			color: #ff6b6b;
			margin-bottom: 10px;
		}

		.form-section {
			padding: 60px 20px;
			background: linear-gradient(135deg, #ff6b6b 0%, #c44569 100%);
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.container {
			background: white;
			padding: 40px;
			border-radius: 10px;
			box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
			width: 100%;
			max-width: 400px;
		}

		.form-section h2 {
			text-align: center;
			margin-bottom: 30px;
			color: #ff6b6b;
		}

		form {
			display: flex;
			flex-direction: column;
		}

		label {
			margin-bottom: 5px;
			font-weight: bold;
		}

		input,
		select {
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ddd;
			border-radius: 5px;
			font-size: 16px;
		}

		button {
			padding: 12px;
			background: #ff6b6b;
			color: white;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			cursor: pointer;
			transition: background 0.3s;
		}

		button:hover {
			background: #c44569;
		}

		footer {
			background: #c44569;
			color: white;
			text-align: center;
			padding: 20px 0;
		}
	</style>
</head>

<body>
<?php if (isset($_GET["ok"])): ?>
<?php
$messages = [
"🔥 Your soulmate just got notified. They said hi!",
"💘 Cupid is loading… please wait!",
"😂 Your details are stored. We won’t sell them… probably.",
"❤️ Love algorithm activated. Searching for matches...",
"🎯 Match found! Just kidding… still searching!"
];
$msg = $messages[array_rand($messages)];
?>
<div class="success-box"><?php echo htmlspecialchars($msg, ENT_QUOTES, "UTF-8"); ?></div>
<style>
.success-box{
  background:#fff0f4;
  color:#b20b4b;
  padding:16px;
  margin:18px auto;
  border-radius:12px;
  width:75%;
  max-width:820px;
  text-align:center;
  font-weight:700;
  font-size:18px;
  box-shadow:0 10px 30px rgba(0,0,0,0.15);
  opacity:0;
  transform:translateY(-8px);
  animation:tj_fade_in .5s ease forwards;
}
@keyframes tj_fade_in{ to{ opacity:1; transform:translateY(0); } }
</style>
<script>
// auto-hide after 5 seconds with smooth fade-out
setTimeout(function(){
  const b = document.querySelector('.success-box');
  if(!b) return;
  b.style.transition = 'opacity .6s, transform .6s';
  b.style.opacity = '0';
  b.style.transform = 'translateY(-8px)';
  setTimeout(function(){ if(b && b.parentNode) b.parentNode.removeChild(b); }, 650);
}, 5000);
</script>
<?php endif; ?>
<?php if (isset($_GET["ok"])): ?>
<?php 
$messages = [
"🔥 Your soulmate just got notified. They said hi!",
"💘 Cupid is loading… please wait!",
"😂 Your details are stored. We won’t sell them… probably.",
"❤️ Love algorithm activated. Searching for matches...",
"🎯 Match found! Just kidding… still searching!"
];
$msg = $messages[array_rand($messages)];
?>
<div style="background:#ffe4ec;color:#d6006c;padding:15px;margin:20px auto;width:70%;border-radius:10px;font-size:20px;text-align:center;font-weight:bold;box-shadow:0 4px 10px rgba(0,0,0,0.2);">
<?= $msg ?>
</div>
<?php endif; ?>
	<header>
		<h1>TinderJam2</h1>
		<p>Your Journey to Love Starts Here</p>
	</header>

	<section class="hero">
		<h2>Find Your Perfect Partner</h2>
		<p>Join thousands of singles finding meaningful connections every day.</p>
	</section>

	<section class="features">
		<h3>Why Choose TinderJam2?</h3>
		<div class="feature-grid">
			<div class="feature">
				<h4>💡 Smart Matching</h4>
				<p>Our algorithm finds compatible partners based on your preferences and interests.</p>
			</div>
			<div class="feature">
				<h4>🔒 Safe & Secure</h4>
				<p>We prioritize your privacy and safety with advanced security measures.</p>
			</div>
			<div class="feature">
				<h4>❤️ Easy to Use</h4>
				<p>Simple interface designed for everyone to find love effortlessly.</p>
			</div>
		</div>
	</section>

	<section class="form-section">
		<div class="container">
			<h2>Create Your Profile</h2>
			<form id="profileForm" action="submit.php" method="post">
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" required>

				<label for="age">Age:</label>
				<input type="number" id="age" name="age" min="18" max="100" required>

				<label for="loc">Location:</label>
				<input type="text" id="loc" name="loc" required>

				<label for="gender">Gender:</label>
				<select id="gender" name="gender" required>
					<option value="">Select Gender</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
					<option value="other">Other</option>
				</select>

				<button type="submit">Submit</button>
			</form>
		</div>
	</section>

	<footer>
		<p>&copy; 2025 TinderJam2. All rights reserved.</p>
	</footer>

	<script>
		// Form will submit to /submit endpoint when backend is ready
	</script>
</body>

</html>
