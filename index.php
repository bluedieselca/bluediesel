


<?php
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output
if($_POST) {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.zoho.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'bluedieselemission@gmail.com';                 // SMTP username
	$mail->Password = 'Blue@pass123';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom('bluedieselemission@gmail.com', 'Blue Diesel Contact Form');
	$mail->addAddress('hkharod@gmail.com', 'Joe User');     // Add a recipient
	$mail->addAddress('bluedieselemission@gmail.com'); 
	$mail->addAddress('cbosh20@gmail.com');              // Name is optional
	$mail->addReplyTo($email, $name);
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');

	//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'New Message';
	$mail->Body    = $name. ' said: <br/>'. $message . '<br/>--End of message. Reply to this e-mail to respond or send directly to:'. $email;
	$mail->AltBody = $message;

	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo '<span class="message-sent">Thank You, Your message has been sent.</span>';
	}
}

?>







<!DOCTYPE HTML>



<html>

	<head>

		<title>Blue Diesel Emissions Testing</title>

		<meta charset="utf-8" />

		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->

		<link rel="stylesheet" href="assets/css/main.css" />

		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

	</head>

	<body>



		<!-- Header -->

			<div id="header">

				<span class="logo icon fa-paper-plane-o"></span>

				<h1>BLUE DIESEL</h1>

				<p>Mobile Diesel Emissions Testing</p>

			</div>



		<!-- Main -->

			<div id="main">



				<header class="major container 75%">

					<h2>Emissions Testing Done Right<br>
					We're There When You Need Us.
					</h2>
					<ul>
						<li>Competitive Pricing</li>
						<li>Quick Testing Times</li>
						<li>100% On Call Servicing</li>
						<li>Multi-Vehicle Discounts</li><br/>
						<li><img src="/images/drive-clean.jpeg alt="drive clean"/></li>



					</ul>

					

				</header>



				<div class="box alt container">

					<section class="feature left">

						<a href="#" class="image icon fa-clock-o"><img src="images/pic01.jpg" alt="" /></a>

						<div class="content">

							<h3>24/7 Availability</h3>

							<p>We're mobile and on call 24/7 to easily fit into your busy schedule.</p>

						</div>

					</section>

					<section class="feature right">

						<a href="#" class="image icon fa-truck"><img src="images/pic02.jpg" alt="" /></a>

						<div class="content">

							<h3>Testing For All Diesel Vehicles</h3>

							<p>We're able to test a wide range of diesel vehicles including dump trucks, cube vans, freight trucks, school buses, transit buses, motor homes, pick-up trucks and many more.</p>

						</div>

					</section>

					<section class="feature left">

						<a href="#" class="image icon fa-usd"><img src="images/pic03.jpg" alt="" /></a>

						<div class="content">

							<h3>Best Price Guarantee</h3>

							<p>We promise to provide the best price for your diesel emission test. We've been around for a long time and know that a dollar saved goes a long way.</p>

						</div>

					</section>

				</div>



				<!--

				<div class="box container">

					<header>

						<h2>A lot of generic stuff</h2>

					</header>

					<section>

						<header>

							<h3>Paragraph</h3>

							<p>This is the subtitle for this particular heading</p>

						</header>

						<p>Phasellus nisl nisl, varius id <sup>porttitor sed pellentesque</sup> ac orci. Pellentesque

						habitant <strong>strong</strong> tristique <b>bold</b> et netus <i>italic</i> malesuada <em>emphasized</em> ac turpis egestas. Morbi

						leo suscipit ut. Praesent <sub>id turpis vitae</sub> turpis pretium ultricies. Vestibulum sit

						amet risus elit.</p>

					</section>

					<section>

						<header>

							<h3>Blockquote</h3>

						</header>

						<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget.

						tempus euismod. Vestibulum ante ipsum primis in faucibus.</blockquote>

					</section>

					<section>

						<header>

							<h3>Divider</h3>

						</header>

						<p>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra

						ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel. Praesent nec orci

						facilisis leo magna. Cras sit amet urna eros, id egestas urna. Quisque aliquam

						tempus euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices

						posuere cubilia.</p>

						<hr />

						<p>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra

						ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel. Praesent nec orci

						facilisis leo magna. Cras sit amet urna eros, id egestas urna. Quisque aliquam

						tempus euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices

						posuere cubilia.</p>

					</section>

					<section>

						<header>

							<h3>Unordered List</h3>

						</header>

						<ul class="default">

							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>

							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>

							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>

							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>

						</ul>

					</section>

					<section>

						<header>

							<h3>Ordered List</h3>

						</header>

						<ol class="default">

							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>

							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>

							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>

							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>

						</ol>

					</section>

					<section>

						<header>

							<h3>Table</h3>

						</header>

						<div class="table-wrapper">

							<table class="default">

								<thead>

									<tr>

										<th>ID</th>

										<th>Name</th>

										<th>Description</th>

										<th>Price</th>

									</tr>

								</thead>

								<tbody>

									<tr>

										<td>45815</td>

										<td>Something</td>

										<td>Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</td>

										<td>29.99</td>

									</tr>

									<tr>

										<td>24524</td>

										<td>Nothing</td>

										<td>Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</td>

										<td>19.99</td>

									</tr>

									<tr>

										<td>45815</td>

										<td>Something</td>

										<td>Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</td>

										<td>29.99</td>

									</tr>

									<tr>

										<td>24524</td>

										<td>Nothing</td>

										<td>Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</td>

										<td>19.99</td>

									</tr>

								</tbody>

								<tfoot>

									<tr>

										<td colspan="3"></td>

										<td>100.00</td>

									</tr>

								</tfoot>

							</table>

						</div>

					</section>

					<section>

						<header>

							<h3>Form</h3>

						</header>

						<form method="post" action="#">

							<div class="row">

								<div class="6u 12u(mobilep)">

									<label for="name">Name</label>

									<input class="text" type="text" name="name" id="name" value="" placeholder="John Doe" />

								</div>

								<div class="6u 12u(mobilep)">

									<label for="email">Email</label>

									<input class="text" type="text" name="email" id="email" value="" placeholder="johndoe@domain.tld" />

								</div>

							</div>

							<div class="row">

								<div class="12u">

									<label for="subject">Subject</label>

									<input class="text" type="text" name="subject" id="subject" value="" placeholder="Enter your subject" />

								</div>

							</div>

							<div class="row">

								<div class="12u">

									<label for="subject">Message</label>

									<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>

								</div>

							</div>

							<div class="row">

								<div class="12u">

									<ul class="actions">

										<li><input type="submit" value="Send" /></li>

										<li><input type="reset" value="Reset" class="alt" /></li>

									</ul>

								</div>

							</div>

						</form>

					</section>

				</div>

				-->



				<footer class="major container 75%">

					<h3>Find Your Vehicle's Drive Clean Test and Repair History</h3>


					<ul class="actions">

						<li><a href="http://www.driveclean.ene.gov.on.ca/ONPublicWeb/pages/vir/vehSearch.jsf?LOCALE=en_CA" target="_blank" class="button clean-button">
						<img src="/images/drive-clean.jpeg" alt="drive clean ontario"/>	
						</a>
						</li>

					</ul>

				</footer>



			</div>



		<!-- Footer -->

			<div id="footer">

				<div class="container 75%">



					<header class="major last">

						<h2>Appointments & Quotes</h2>

					</header>



					<p>To book an appointment or get a quote, please send us a message below or</p>
					<p>E-mail: <b>bluedieselemission@gmail.com</b><br/>
					Phone: <b>+1(416)819-5400</b></p>



					<form method="post" action="index.php">

						<div class="row">

							<div class="6u 12u(mobilep)">

								<input type="text" name="name" placeholder="Name" />

							</div>

							<div class="6u 12u(mobilep)">

								<input type="email" name="email" placeholder="Email" />

							</div>

						</div>

						<div class="row">

							<div class="12u">

								<textarea name="message" placeholder="Message" rows="6"></textarea>

							</div>

						</div>

						<div class="row">

							<div class="12u">

								<ul class="actions">

									<li><input type="submit" value="Send Message" /></li>

								</ul>

							</div>

						</div>

					</form>


					<p>We'll respond in under 12 hours from the moment you click send!</p>
					<!--<ul class="icons">

						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>

						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>

						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>

						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>

						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>

					</ul>-->



					<ul class="copyright">

						<li>&copy; Blue Diesel Inc. All rights reserved.</li>

					</ul>



				</div>

			</div>



		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>

			<script src="assets/js/skel.min.js"></script>

			<script src="assets/js/util.js"></script>

			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->

			<script src="assets/js/main.js"></script>



	</body>

</html>