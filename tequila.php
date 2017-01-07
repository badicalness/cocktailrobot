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
    <h1>Tequila Cocktails</h1>
      

        <div class="row"> 
            <div class="column">
                <article>
                    <h3>
                    <span>
                        <figure id="test">
                            <div id="drink">
                                <div class="popup_box">
								<a class="popup_button" href="#popup13">
                            <img src="images/screwdriver.jpg" alt="Tequila Screwdriver Cocktail">
                                </a>
                            <h3>Tequila Screwdriver</h3>
                             </div>
                             </div>
                        </figure></span>
                            <!--<div id="tpopup" style="visibility: hidden">-->
                            <!--<a href="google.com" class="lightbox_trigger">-->
                        <div id="popup13" class="popup_overlay">
	                    <div class="popup">
                            <img src="images/screwdriver.jpg" alt="Tequila Screwdriver Cocktail">
                            
                            <h3>Tequila Screwdriver</h3>
                            <a class="popup_close" href="#">&times;</a>
		                <div class="popup_content">

                            <p>Ingredients:</p>
                        <p></br>1 part tequila
                           </br>2 parts orange juice 
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
								<a class="popup_button" href="#popup14">
                            <img src="images/tequilaville.jpg" alt="Tequilaville Cocktail">
                                </a>
                            <h3>Tequilaville</h3>
                             </div>
                             </div>
                        </figure></span>
                            <!--<div id="tpopup" style="visibility: hidden">-->
                            <!--<a href="google.com" class="lightbox_trigger">-->
                        <div id="popup14" class="popup_overlay">
	                    <div class="popup">
                            <img src="images/tequilaville.jpg" alt="Tequilaville Cocktail">
                            
                            <h3>Tequilaville</h3>
                            <a class="popup_close" href="#">&times;</a>
		                <div class="popup_content">

                            <p>Ingredients:</p>        
                        <p></br>2 parts tequila
                           </br>2 parts cranberry juice
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
                                        <a class="popup_button" href="#popup12">
                                    <img src="images/rocket.jpg" alt="Rocket Fuel Cocktail">
                                        </a>
                                    <h3>Rocket Fuel</h3>
                                    </div>
                                    </div>
                                </figure></span>
                                    <!--<div id="tpopup" style="visibility: hidden">-->
                                    <!--<a href="google.com" class="lightbox_trigger">-->
                                <div id="popup12" class="popup_overlay">
                                <div class="popup">
                                    <img src="images/rocket.jpg" alt="Rocket Fuel Cocktail">
                                    
                                    <h3>Rocket Fuel</h3>
                                    <a class="popup_close" href="#">&times;</a>
                                <div class="popup_content">

                                    <p>Ingredients:</p>        
                                <p></br>2 parts vodka
                                </br>1 part tequila
                                </br>1 parts white rum
                                </p>
                                        <?php include'button.php' ?>  
                                </div>
                                </div>   
                                </div>   
                            </h3>
                        </article>
                    </div> <!--end of column-->
                </div> <!--end of row-->
















    </div><!-- end content -->
</div> <!--end of contentWrapper-->
  
<?php include'footer.php' ?>