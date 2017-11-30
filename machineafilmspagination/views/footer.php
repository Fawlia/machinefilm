</main>	

<footer>
		<div class="container">
			<div class="row">
				<div class="col s12 m12 l12 xl12" id="footer">
					<p>Réalisation : Sandrine - Antoine - Yohann</p>	
				</div>
			</div>
		</div>
</footer>
	<script type="text/javascript" src="views/js/jquery.min.js"></script>
	<script type="text/javascript" src="views/js/materialize.js"></script>
	<script type="text/javascript" src="views/js/script.js"></script>
	<script type="text/javascript">$(".button-collapse").sideNav();</script>
	<script>
		
			window.onscroll = function() {myFunction()};
				
			var navbar = document.getElementById("navigation");
			var sticky = navbar.offsetTop;

			function myFunction() {
				if (window.pageYOffset >= sticky) {
				navbar.classList.add("sticky")}		
			 
				else {
				navbar.classList.remove("sticky");
			}
			} </script>

</body>
</html>