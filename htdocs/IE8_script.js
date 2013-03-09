

$(function() {
	var temperPopState = false;

	//hide the extra tabbed content
	hideTabs();

	//function to switch out all hrefs in the specified (string of class/id for nav container) container with "#"
	function sanitizeLinks(container){
	$container = $(container);
			$(container + ' a').each(function(){
				$cur_link = $(this);
				var href = $cur_link.attr('href');
				//console.log("href: " + href);//test code
				$cur_link.attr('rel', href);
				//console.log("rel: " + $cur_link.attr('rel'));//test code
				$cur_link.attr('href', '#');
				//console.log("final href: " + $cur_link.attr('href'));//test code
				$container.addClass("sanitized");
				//console.log("Links are sanitized");//test code	
			});
	}

//VVV----- Code for tabbed content within pages -----VVV

	

	//assign a click-function for the side-navigation
	$("#dynamic-content-wrap").delegate(".side-nav a", "click", function(){
		//console.log("clicked side-nav");//test code
		$(".side-nav a").removeClass("selected");
		$(this).addClass("selected");
		var link = $(this).attr("rel");
		//console.log("side-link "+link);//test code
		swapTabs(link);
		temperPopState = true;
	});
	


	//define function to hide tabs when tabbed content is loaded
	function hideTabs(){
		sanitizeLinks(".side-nav");
		$('.changing-content > div').each(function(){
			$(this).addClass("hiding");
			//console.log($(this).attr("id")+ " has classes " + $(this).attr("class"))//test code
		});
		//console.log("unhidden, unselected tabs are now hidden");//test code
	}
	
	
	
	//define function to swap tab content when side-nav is clicked
	function swapTabs(tabID){
		var $thisTab = $(tabID);
		//console.log("thistab.html:" +$thisTab.html());//test code
		$('.changing-content > div').removeClass("selected");
		$thisTab.addClass("selected");
	}
	
	
	

//^^^----- code for tabbed content within pages -----^^^



    
}); //end $ f(x)

