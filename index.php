<!DOCTYPE>
<html>
<head>
	<title>IS373 Group Project</title>

	<!-- Javscript Assets -->
	<script src="http://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
	<script src="application.js" type="text/javascript"></script>

	<!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/normalize/2.1.0/normalize.css" /> -->
	<!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet"> -->
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<header>
		<nav>
			<ul class="nav clearfix">
				<li><a href="/">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Products</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</nav>
	</header>

	<section class="spotlight">
		<div class="container">
			<hgroup>
				<h1>The Most Important Tool You Will Ever Use, Ever</h1>
				<h5>Cats are now everyday parts of your lives &mdash; use them as your workers</h5>
			</hgroup>
		</div>
	</section>

	<section class="content">
		<div class="container">
			<?php if (isset($_POST['msg'])) : ?>
				<div class="alert"><p>Thank you for your message!</p></div>
			<?php endif; ?>

			<article>
				<h3>The Most Important Article in the World</h3>
				<p>
					<aside>
						<img src="http://placekitten.com/200/300" class="pull-right" />
					</aside>

					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras odio felis, scelerisque vitae vulputate pharetra, sagittis id velit. Vestibulum a dolor facilisis dolor laoreet volutpat et sit amet eros. Cras ut mi sed turpis euismod vehicula non nec sapien. Ut lobortis, magna sit amet tristique ultrices, turpis nunc ultricies massa, ut molestie felis sem id libero. Donec in elit mi, at feugiat lectus. Etiam sodales consequat felis id vulputate. Donec pretium neque a libero porttitor vel scelerisque magna semper. In vel imperdiet risus. Duis venenatis leo a justo ullamcorper molestie semper eros pharetra. Vestibulum eu lorem enim, eu blandit lectus. Maecenas eu aliquam nunc.</p>

<p>Praesent sed justo et mauris lobortis tempor vitae eget quam. Morbi venenatis consectetur faucibus. Morbi porta, lorem ut condimentum blandit, ligula dui rutrum tellus, non pretium tortor purus non metus. Mauris massa augue, consequat ac varius sit amet, consectetur fermentum risus. Aliquam mattis erat quis orci aliquam sed imperdiet felis vestibulum. Proin euismod arcu vel eros ultricies tempus. Curabitur vitae purus augue. Integer adipiscing elementum orci, nec feugiat turpis viverra ac. Suspendisse tincidunt, lacus ac hendrerit suscipit, turpis libero egestas nunc, pharetra pellentesque nibh purus vel enim. Aliquam nec commodo mauris. Duis nec convallis massa. Sed dapibus placerat purus at ultricies. Nam varius purus eu odio consectetur rhoncus at id nulla. Morbi sit amet leo quis felis rhoncus ultrices et et eros. Vivamus ac porta odio. Donec nec nisi leo.</p>

<p>Aenean gravida aliquam dui sit amet fermentum. Quisque eu ipsum ac nulla imperdiet mattis quis vitae odio. Proin consequat imperdiet dui, id aliquam nunc varius id. Quisque ut justo in ipsum tempor mattis et ac nulla. Pellentesque vitae sem turpis, vel placerat urna. Vestibulum ac est odio, auctor ultricies lorem. Proin orci dolor, egestas et ornare ut, tristique quis urna. Suspendisse vitae purus eget turpis blandit vulputate cursus sit amet urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris sit amet turpis eget urna volutpat lobortis id eu mauris. In ornare sapien in enim venenatis rutrum. Phasellus nunc sapien, venenatis ac ullamcorper id, lacinia non ante.</p>

<blockquote><p>"Vivamus rutrum hendrerit mauris, sit amet volutpat mauris faucibus quis."</p></blockquote>
<p> Donec faucibus est arcu, at elementum orci. Morbi blandit vestibulum placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget lacus non neque iaculis tempor non a orci. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur eget dui arcu, et imperdiet nibh.</p>

<!-- Let's Sell -->
<div class="side-by-side">
	<div class="side">

	</div>

	<div class="side">

	</div>
</div>

<p>Praesent ullamcorper tortor sed tellus mattis viverra luctus magna interdum. Morbi non nisl tellus, tincidunt auctor odio. Morbi sit amet justo et odio tincidunt gravida nec ut tellus. Suspendisse id mi et elit hendrerit malesuada. Aenean aliquet ullamcorper mattis. In tincidunt dapibus quam, vitae semper velit placerat ut. Ut nec erat sed quam eleifend placerat sed vitae justo. Suspendisse ligula neque, iaculis vitae lacinia a, vulputate eu est. Praesent tincidunt elementum risus sit amet egestas. Aliquam sapien odio, tincidunt vitae varius sit amet, ullamcorper et diam. Donec eget nibh elementum diam dictum egestas et at libero. Donec ac orci vel massa vehicula aliquam et nec magna. Morbi in nunc a mauris cursus facilisis ut in leo.</p>

<p>Listen to some cats!</p>
<audio controls>
	<source src="http://www.w3schools.com/html/horse.ogg" type="audio/ogg">
	<source src="http://www.w3schools.com/html/horse.mp3" type="audio/mp3">
</audio>

<p>Let's watch a video too:</p>

<video controls>
	<source src="http://video-js.zencoder.com/oceans-clip.mp4" type="video/mp4">
</video>

<p><a href="#" id="play_video">Play Video Using Javascript</a></p>
	

	<p>Set background color using Javascript:</p>
	<input type="text" id="set-color" value="white" />
	<button id="set-color-btn">Set Background Color</button>


	<hr />

	<h3>Leave a Comment!</h3>

	<form method="post">
		<p>
			<label for="name">Your Name</label>
			<input id="name" type="text" required name="name" />
		</p>

		<p>
			<label for="email">Your Email</label>
			<input id="email" type="email" required name="email" />
		</p>

		<p>
			<label for="subject">Subject</label>
			<input id="subject" type="text" required name="subject" />
		</p>

		<p>
			<label for="website">Website</label>
			<input id="website" type="url" pattern="https?://.+" name="website" />
		</p>

		<p>
			<label for="msg">Message</label>
			<textarea required name="msg" id="msg"></textarea>
		</p>

		<button type="submit">Submit</button>
	</form>
			</article>
		</div>
	</div>

	<footer>
		<div class="container">
			<p>&copy; NJIT IS373 Group 5 &mdash; All rights reserved</p>
		</div>
	</footer>
</body>
</html>