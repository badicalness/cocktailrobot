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
    <h1>Vodka Cocktails</h1>

                <div class="row">
            <div class="column">
                 <article>
                    <h3>
                    <span>
                        <figure id="test">
                            <div id="drink">
                                <div class="popup_box">
								<a class="popup_button" href="#popup1">
                            <img src="images/gill.jpg" alt="Gilligan Island Cocktail">
                                </a>
                            <h3>Gilligan Island</h3>
                             </div>
                             </div>
                        </figure></span>
                            <!--<div id="tpopup" style="visibility: hidden">-->
                            <!--<a href="google.com" class="lightbox_trigger">-->
                                <div id="popup1" class="popup_overlay">
	                            <div class="popup">
                            <img src="images/gill.jpg" alt="Gilligan Island Cocktail">
                            
                            <h3>Gilligan Island</h3>
                            <a class="popup_close" href="#">&times;</a>
		                    <div class="popup_content">

                        <p>Ingredients:</p>
                        <p></br>1 part Vodka
                           </br>1 part Peach schnapps
                           </br>3 parts Orange juice
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
								<a class="popup_button" href="#popup3">
                            <img src="images/beach.jpg" alt="Sex on the Beach Cocktail">
                                </a>
                            <h3>Sex on the Beach</h3>
                             </div>
                             </div>
                        </figure></span>
                            <!--<div id="tpopup" style="visibility: hidden">-->
                            <!--<a href="google.com" class="lightbox_trigger">-->
                                <div id="popup3" class="popup_overlay">
	                            <div class="popup">
                            <img src="images/beach.jpg" alt="Sex on the Beach Cocktail">
                            
                            <h3>Sex on the Beach</h3>
                            <a class="popup_close" href="#">&times;</a>
		                    <div class="popup_content">

                        <p>Ingredients:</p>
                        <p></br>1 1/2 parts vodka
                           </br>1/2 part peach schnapps
                           </br>2 parts cranberry juice
                           </br>2 parts orange juice
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
								<a class="popup_button" href="#popup4">
                            <img src="images/badhabit.jpg" alt="Bad Habit Cocktail">
                                </a>
                            <h3>Bad Habit</h3>
                             </div>
                             </div>
                        </figure></span>
                            <!--<div id="tpopup" style="visibility: hidden">-->
                            <!--<a href="google.com" class="lightbox_trigger">-->
                                <div id="popup4" class="popup_overlay">
	                            <div class="popup">
                            <img src="images/badhabit.jpg" alt="Bad Habit Cocktail">
                            
                            <h3>Bad Habit</h3>
                            <a class="popup_close" href="#">&times;</a>
		                    <div class="popup_content">

                         <p>Ingredients:</p>
                        <p></br>1/2 part vodka
                           </br>1/2 part peach schnapps
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
								<a class="popup_button" href="#popup5">
                            <img src="images/woo.jpg" alt="Woo Woo Cocktail">
                                </a>
                            <h3>Woo Woo</h3>
                             </div>
                             </div>
                        </figure></span>
                            <!--<div id="tpopup" style="visibility: hidden">-->
                            <!--<a href="google.com" class="lightbox_trigger">-->
                                <div id="popup5" class="popup_overlay">
	                            <div class="popup">
                            <img src="images/woo.jpg" alt="Woo Woo Cocktail">
                            
                            <h3>Woo Woo</h3>
                            <a class="popup_close" href="#">&times;</a>
		                    <div class="popup_content">

                        <p>Ingredients:</p>
                        <p></br>1 part vodka
                           </br>1 part peach schnapps
                           </br>2 parts cranberry juice
                        </p>
                            <?php include'button.php' ?>  
                
                        </div>
                        </div>   
                        </div>   
                    </h3>
                </article>
            </div> <!--end of column-->
        </div> <!--row div-->

        <div class="row">
            <div class="column">
                <article>
                    <h3>
                    <span>
                        <figure id="test">
                            <div id="drink">
                                <div class="popup_box">
								<a class="popup_button" href="#popup6">
                            <img src="images/navel.jpg" alt="Fuzzy Navel Cocktail">
                                </a>
                            <h3>Fuzzy Navel</h3>
                             </div>
                             </div>
                        </figure></span>
                            <!--<div id="tpopup" style="visibility: hidden">-->
                            <!--<a href="google.com" class="lightbox_trigger">-->
                        <div id="popup6" class="popup_overlay">
	                    <div class="popup">
                            <img src="images/navel.jpg" alt="Fuzzy Navel Cocktail">
                            
                            <h3>Fuzzy Navel</h3>
                            <a class="popup_close" href="#">&times;</a>
		                <div class="popup_content">

                            <p>Ingredients:</p>
                            <p></br> ½ part Vodka
                            </br> 1 part Peach Schnapps
                            </br> 3 parts Orange Juice
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
								<a class="popup_button" href="#popup7">
                            <img src="images/peirced.jpg" alt="Fuzzy Peirced Navel Cocktail">
                                </a>
                            <h3>Fuzzy Peirced Navel</h3>
                             </div>
                             </div>
                        </figure></span>
                            <!--<div id="tpopup" style="visibility: hidden">-->
                            <!--<a href="google.com" class="lightbox_trigger">-->
                        <div id="popup7" class="popup_overlay">
	                    <div class="popup">
                            <img src="images/peirced.jpg" alt="Fuzzy Peirced Navel Cocktail">
                            
                            <h3>Fuzzy Peirced Navel</h3>
                            <a class="popup_close" href="#">&times;</a>
		                <div class="popup_content">

                            <p>Ingredients:</p>
                            <p></br>1 part Peach schnapps
                           </br>1 part Vodka
                           </br>1 part Cranberry juice
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
								<a class="popup_button" href="#popup8">
                            <img src="images/sunrise.jpg" alt="Jamacian Sunrise Cocktail">
                                </a>
                            <h3>Jamacian Sunrise</h3>
                             </div>
                             </div>
                        </figure></span>
                            <!--<div id="tpopup" style="visibility: hidden">-->
                            <!--<a href="google.com" class="lightbox_trigger">-->
                        <div id="popup8" class="popup_overlay">
	                    <div class="popup">
                            <img src="images/sunrise.jpg" alt="Jamacian Sunrise Cocktail">
                            
                            <h3>Jamacian Sunrise</h3>
                            <a class="popup_close" href="#">&times;</a>
		                <div class="popup_content">

                            <p>Ingredients:</p>
                        <p></br>2 parts vodka
                           </br>2 parts peach schnapps
                           </br>4 1/2 parts orange juice
                           </br>1 part cranberry juice
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
								<a class="popup_button" href="#popup10">
                            <img src="images/bubble.jpg" alt="Liquid Bubble Gum Cocktail">
                                </a>
                            <h3>Liquid Bubble Gum</h3>
                             </div>
                             </div>
                        </figure></span>
                            <!--<div id="tpopup" style="visibility: hidden">-->
                            <!--<a href="google.com" class="lightbox_trigger">-->
                        <div id="popup10" class="popup_overlay">
	                    <div class="popup">
                            <img src="images/bubble.jpg" alt="Liquid Bubble Gum Cocktail">
                            
                            <h3>Liquid Bubble Gum</h3>
                            <a class="popup_close" href="#">&times;</a>
		                <div class="popup_content">

                            <p>Ingredients:</p>        
                        <p></br>1 part vodka
                           </br>1 part peach schnapps
                           </br>2 parts cola
                        </p>
                                <?php include'button.php' ?>  
                        </div>
                        </div>   
                        </div>   
                    </h3>
                </article>
             </div> <!--end of column-->
        </div> <!--end of row-->

        <div class="row">     
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
                </article>">
                <article>
                    <h3>
                    <span>
                        <figure id="test">
                            <div id="drink">
                                <div class="popup_box">
								<a class="popup_button" href="#popup15">
                            <img src="images/hole.jpg" alt="Hole in One Cocktail">
                                </a>
                            <h3>Hole in One</h3>
                             </div>
                             </div>
                        </figure></span>
                            <!--<div id="tpopup" style="visibility: hidden">-->
                            <!--<a href="google.com" class="lightbox_trigger">-->
                        <div id="popup15" class="popup_overlay">
	                    <div class="popup">
                            <img src="images/hole.jpg" alt="Hole in One Cocktail">
                            
                            <h3>Hole in One</h3>
                            <a class="popup_close" href="#">&times;</a>
		                <div class="popup_content">

                            <p>Ingredients:</p>
                        <p></br>1.5 part vodka
                           </br>3 parts cranberry juice
                           </br>1 part orange juice
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