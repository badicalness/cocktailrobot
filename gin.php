<?php include'header.php' ?>
      <script src="https://code.jquery.com/jquery-1.6.2.min.js"></script>
  <script>
  
$(document).ready(function(){

    $("#thover").click(function(){
		$(this).fadeOut();
    $("#tpopup").fadeOut();
	});
  
  
   $("#tclose").click(function(){
		$("#thover").fadeOut();
    $("#tpopup").fadeOut();
	});

    $("#test").click(function(){
        $("#thover")
            .css("visibility", "visible")
            .fadeIn("slow", function(){});
        $("#tpopup")
            .css("visibility", "visible")
            .fadeIn("slow", function(){});
    });

});

</script>
    <!-- page content here -->
<div id="contentWrapper">
    <div id="content" class="clearfix">
    <h1>Gin Cocktails</h1>
        
        <div class="row">     
            <div class="column">
                <article>
                    <h3>
                    <span>
                        <figure id="test">
                            <div id="drink">
                                <div class="popup_box">
								<a class="popup_button" href="#popup9">
                            <img src="images/hudson.jpg" alt="Hudson Cocktail">
                                </a>
                            <h3>Hudson</h3>
                             </div>
                             </div>
                        </figure></span>
                            <!--<div id="tpopup" style="visibility: hidden">-->
                            <!--<a href="google.com" class="lightbox_trigger">-->
                        <div id="popup9" class="popup_overlay">
	                    <div class="popup">
                            <img src="images/hudson.jpg" alt="Hudson Cocktail">
                            
                            <h3>Hudson</h3>
                            <a class="popup_close" href="#">&times;</a>
		                <div class="popup_content">

                            <p>Ingredients:</p>
                        <p></br>1 part peach schnapps
                           </br>1/2 part gin
                        </p>
                                <?php include'button.php' ?>  
                        </div>
                        </div>   
                        </div>   
                    </h3>
                </article>
                <article>
                    <h3>
                    <span>
                        <figure id="test">
                            <div id="drink">
                                <div class="popup_box">
								<a class="popup_button" href="#popup11">
                            <img src="images/south.jpg" alt="South Bank Cocktail">
                                </a>
                            <h3>South Bank</h3>
                             </div>
                             </div>
                        </figure></span>
                            <!--<div id="tpopup" style="visibility: hidden">-->
                            <!--<a href="google.com" class="lightbox_trigger">-->
                        <div id="popup11" class="popup_overlay">
	                    <div class="popup">
                            <img src="images/south.jpg" alt="South Bank Cocktail">
                            
                            <h3>South Bank</h3>
                            <a class="popup_close" href="#">&times;</a>
		                <div class="popup_content">

                            <p>Ingredients:</p>
                        <p></br>1 part white rum
                           </br>1 part gin
                        </p>
                                <?php include'button.php' ?>  
                        </div>
                        </div>   
                        </div>   
                    </h3>
                </article>
            </div> <!--end of column-->
            
            <div class="column">
                <article>
                        <h3>
                        <span>
                            <figure id="test">
                                <div id="drink">
                                    <div class="popup_box">
                                    <a class="popup_button" href="#popup16">
                                <img src="images/ride.jpg" alt="Moustache Ride Cocktail">
                                    </a>
                                <h3>Moustache Ride</h3>
                                </div>
                                </div>
                            </figure></span>
                                <!--<div id="tpopup" style="visibility: hidden">-->
                                <!--<a href="google.com" class="lightbox_trigger">-->
                            <div id="popup16" class="popup_overlay">
                            <div class="popup">
                                <img src="images/ride.jpg" alt="Moustache Ride Cocktail">
                                
                                <h3>Moustache Ride</h3>
                                <a class="popup_close" href="#">&times;</a>
                            <div class="popup_content">

                                <p>Ingredients:</p>        
                            <p></br>1 part gin
                            </br>5 parts cola
                            </p>
                                    <?php include'button.php' ?>  
                            </div>
                            </div>   
                            </div>   
                        </h3>
                    </article>
                </div> <!--end of column-->
            </div> <!--row div-->

















    </div><!-- end content -->
</div> <!--end of contentWrapper-->
  
<?php include'footer.php' ?>