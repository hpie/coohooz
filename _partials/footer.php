  <div id="footer">
    <p class="aligncenter"> Copyright - Coohooz<br />
  </div>
  <script>
	$(function(){
		
		// this will get the full URL at the address bar
		var url = window.location.href; 
			
			// passes on every "a" tag 
			$("#main-menu a").each(function() {
					// checks if its the same on the address bar
				if(url == (this.href)) { 
					//$(this).closest("li").addClass("active");
					$(this).addClass("active");
				}
			});
		});
  </script>