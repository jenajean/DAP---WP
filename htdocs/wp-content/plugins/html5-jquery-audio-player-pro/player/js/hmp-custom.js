// JavaScript Document
jQuery(document).ready(function(){
	
	jQuery('.row-actions1').css({'position' : 'absolute', 'margin-top' : '20px','display':'none'});
	jQuery('.myrecords').mouseover(function(){
		var clid =	jQuery(this).attr('id');
		//alert(clid);
		jQuery('#'+clid+' .row-actions1').show();
	});
	
	jQuery('.myrecords').mouseout(function(){
		var clid =	jQuery(this).attr('id');
		jQuery('#'+clid+' .row-actions1').hide();
	});
});