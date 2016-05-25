<div class="row expanded cover align-middle" style="min-height:500px;background:#333;" id="contact-form-footer">


<div id="yourCarouselId" class="touchcarousel black-and-white">     
    <ul class="touchcarousel-container">
        <!-- TouchCarousel items, place any HTML content inside them (img tag is inserted as an example) -->
        <li class="touchcarousel-item">
		<img src="http://placehold.it/600x600" width="600" height="600" />
		<h2>hello, this is a title</h2>
	</li>

	<li class="touchcarousel-item">
		<img src="http://placehold.it/600x600" width="600" height="600" />
	</li>
	<li class="touchcarousel-item">
		<img src="http://placehold.it/600x600" width="600" height="600" />
	</li>
	<li class="touchcarousel-item">
		 <img src="http://placehold.it/600x600" width="600" height="600" />
	</li>
	<li class="touchcarousel-item">
		<img src="http://placehold.it/600x600" width="600" height="600" />
	</li>
    </ul>
</div>

<script>
jQuery(function($) {
    $("#yourCarouselId").touchCarousel({

		 itemsPerMove: 2,              // The number of items to move per arrow click.
    
    snapToItems: false,           // Snap to items, based on itemsPerMove.
    pagingNav: false,             // Enable paging nav. Overrides snapToItems.
                                  // Snap to first item of every group, based on itemsPerMove. 
                                  
    pagingNavControls: true,      // Paging controls (bullets).
    
    
    
    autoplay:false,               // Autoplay enabled.
    autoplayDelay:3000,	          // Delay between transitions.
    autoplayStopAtAction:true,    // Stop autoplay forever when user clicks arrow or does any other action.
    
    scrollbar: true,              // Scrollbar enabled.
    scrollbarAutoHide: false,     // Scrollbar autohide.
    scrollbarTheme: "light",       // Scrollbar color. Can be "light" or "dark".	
    
    transitionSpeed: 600,         // Carousel transition speed (next/prev arrows, slideshow).		
    
    directionNav:true,            // Direction (arrow) navigation (true or false).
    directionNavAutoHide:false,   // Direction (arrow) navigation auto hide on hover. 
                                  // On touch devices arrows are always displayed.
    
    loopItems: false,             // Loop items (don't disable arrows on last slide and allow autoplay to loop).
    
    keyboardNav: false,           // Keyboard arrows navigation.
    dragUsingMouse:true,          // Enable drag using mouse.	
    
    
    scrollToLast: false,          // Last item ends at start of carousel wrapper.	
    
    
    itemFallbackWidth: 500,       // Default width of the item in pixels. (used if impossible to get item width).
    
    baseMouseFriction: 0.0012,    // Container friction on desktop (higher friction - slower speed).
    baseTouchFriction: 0.0008,    // Container friction on mobile.
    lockAxis: true,               // Allow dragging only on one direction.
    useWebkit3d: false,           // Enable WebKit 3d transform on desktop devices. 
                                  // (on touch devices this option is turned on).
                                  // Use it if you have only images, 3d transform makes text blurry.
                                           
    
    onAnimStart: null,            // Callback, triggers before deceleration or transition animation.
    onAnimComplete: null,         // Callback, triggers after deceleration or transition animation.
    
    onDragStart:null,             // Callback, triggers on drag start.
    onDragRelease: null           // Callback, triggers on drag complete.


	});
});
</script>


</div>

