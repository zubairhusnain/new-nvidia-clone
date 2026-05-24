$(document).ready(function(){

    var locale = $('html').attr('lang');

    var startingprice_4090 = "<div class='startingprice'>"+window.pl.pricelist.startingprice4090[locale]+"</div>"
    var startingprice_4080gb16 = "<div class='startingprice'>"+window.pl.pricelist.startingprice4080gb16[locale]+"</div>"
    var startingprice_4080gb12 = "<div class='startingprice'>"+window.pl.pricelist.startingprice4080gb12[locale]+"</div>"
    var startingprice_4070ti = "<div class='startingprice'>"+window.pl.pricelist.startingprice4070ti[locale]+"</div>"
	var startingprice_4070 = "<div class='startingprice'>"+window.pl.pricelist.startingprice4070[locale]+"</div>"
     var startingprice_4060 = "<div class='startingprice'>"+window.pl.pricelist.startingprice4060[locale]+"</div>"
     var startingprice_4060ti8gb = "<div class='startingprice'>"+window.pl.pricelist.startingprice4060ti8gb[locale]+"</div>"
    var startingprice_4060ti16gb = "<div class='startingprice'>"+window.pl.pricelist.startingprice4060ti16gb[locale]+"</div>"
    
    
    var startingprice4080super = "<div class='startingprice'>"+window.pl.pricelist.startingprice4080super[locale]+"</div>"
    var startingprice4070super = "<div class='startingprice'>"+window.pl.pricelist.startingprice4070super[locale]+"</div>"
    var startingprice4070tisuper = "<div class='startingprice'>"+window.pl.pricelist.startingprice4070tisuper[locale]+"</div>"
    
    
    var priceavailability4080super = "<div class='priceavailability'>"+window.pl.priceavailability.priceavailability4080super[locale]+"</div>"
    var priceavailability4070super = "<div class='priceavailability'>"+window.pl.priceavailability.priceavailability4070super[locale]+"</div>"
    var priceavailability4070tisuper = "<div class='priceavailability'>"+window.pl.priceavailability.priceavailability4070tisuper[locale]+"</div>"
    
    var availability4080super = "<div class='availability'>"+window.pl.availability.availability4080super[locale]+"</div>"
    var availability4070super = "<div class='availability'>"+window.pl.availability.availability4070super[locale]+"</div>"
    var availability4070tisuper = "<div class='availability'>"+window.pl.availability.availability4070tisuper[locale]+"</div>"
	var startingprice5070 = "<div class='startingprice'>"+window.pl.pricelist.startingprice5070[locale]+"</div>"
	var startingprice5060 = "<div class='startingprice'>"+window.pl.pricelist.startingprice5060[locale]+"</div>"
	var priceavailability5060 = "<div class='priceavailability'>"+window.pl.priceavailability.priceavailability5060[locale]+"</div>"
    var priceavailability5070 = "<div class='priceavailability'>"+window.pl.priceavailability.priceavailability5070[locale]+"</div>"
    var availability5060 = "<div class='availability'>"+window.pl.availability.availability5060[locale]+"</div>"
	var availability5070 = "<div class='availability'>"+window.pl.availability.availability5070[locale]+"</div>"

	var startingprice5060ti = "<div class='startingprice'>"+window.pl.pricelist.startingprice5060ti[locale]+"</div>"
	var startingprice5070ti = "<div class='startingprice'>"+window.pl.pricelist.startingprice5070ti[locale]+"</div>"
	var priceavailability5060ti = "<div class='priceavailability'>"+window.pl.priceavailability.priceavailability5060ti[locale]+"</div>"
    var priceavailability5070ti = "<div class='priceavailability'>"+window.pl.priceavailability.priceavailability5070ti[locale]+"</div>"
	var availability5060ti = "<div class='availability'>"+window.pl.availability.availability5060ti[locale]+"</div>"
    var availability5070ti = "<div class='availability'>"+window.pl.availability.availability5070ti[locale]+"</div>"

	
    var startingprice5080 = "<div class='startingprice'>"+window.pl.pricelist.startingprice5080[locale]+"</div>"
	var priceavailability5080 = "<div class='priceavailability'>"+window.pl.priceavailability.priceavailability5080[locale]+"</div>"
    var priceavailability5080 = "<div class='priceavailability'>"+window.pl.priceavailability.priceavailability5080[locale]+"</div>"
    var availability5080 = "<div class='availability'>"+window.pl.availability.availability5080[locale]+"</div>"
	 
	 
	var startingprice5090 = "<div class='startingprice'>"+window.pl.pricelist.startingprice5090[locale]+"</div>"
	var priceavailability5090 = "<div class='priceavailability'>"+window.pl.priceavailability.priceavailability5090[locale]+"</div>"
    var priceavailability5090 = "<div class='priceavailability'>"+window.pl.priceavailability.priceavailability5090[locale]+"</div>"
    var availability5090 = "<div class='availability'>"+window.pl.availability.availability5090[locale]+"</div>"
    
    
    var startingprice5050 = "<div class='startingprice'>"+window.pl.pricelist.startingprice5050[locale]+"</div>"
	var priceavailability5050 = "<div class='priceavailability'>"+window.pl.priceavailability.priceavailability5050[locale]+"</div>"
    var priceavailability5050 = "<div class='priceavailability'>"+window.pl.priceavailability.priceavailability5050[locale]+"</div>"
    var availability5050 = "<div class='availability'>"+window.pl.availability.availability5050[locale]+"</div>"

    $('#rtx-4090-startprice').find('h2.title').html(startingprice_4090);
    $('#rtx-4090-startprice-shop').find('h2.title').html(startingprice_4090);
    $('#rtx-4090-availability-shop').find('div.description').html("<p>"+window.pl.availability.availability4090[locale]+"</p>");
    $('#rtx-4090-availability').find('div.description').html("<p>"+window.pl.availability.availability4090[locale]+"</p>");


    $('#rtx-4080gb16-startprice').find('h2.title').html(startingprice_4080gb16);
    $('#rtx-4080gb16-startprice-shop').find('h2.title').html(startingprice_4080gb16);
    $('#rtx-4080gb16-availability-shop').find('div.description').html("<p>"+window.pl.availability.availability4080gb16[locale]+"</p>");
    $('#rtx-4080gb16-availability').find('div.description').html("<p>"+window.pl.availability.availability4080gb16[locale]+"</p>");

    $('#rtx-4080gb12-startprice').find('h2.title').html(startingprice_4080gb12);
    $('#rtx-4080gb12-startprice-shop').find('h2.title').html(startingprice_4080gb12);
    $('#rtx-4080gb12-availability-shop').find('div.description').html("<p>"+window.pl.availability.availability4080gb12[locale]+"</p>");
    $('#rtx-4080gb12-availability').find('div.description').html("<p>"+window.pl.availability.availability4080gb12[locale]+"</p>");
    
    $('#rtx-4070ti-startprice').find('h2.title').html(startingprice_4070ti);
    $('#rtx-4070ti-startprice-shop').find('h2.title').html(startingprice_4070ti);
    if($('#rtx-4070ti-availability-shop').hasClass('btn-content')){
        $('#rtx-4070ti-availability-shop').find('span.btn-text').html("");
    }
    else{
    $('#rtx-4070ti-availability-shop').find('div.description').html("");
    }
    $('#rtx-4070ti-availability').find('div.description').html("");
	
	$('#rtx-4070-startprice').find('h2.title').html(startingprice_4070);
    $('#rtx-4070-startprice-shop').find('h2.title').html(startingprice_4070);
    
    $('#rtx-4060-startprice').find('h3.title').html(startingprice_4060);
    $('#rtx-4060-startprice-shop').find('h3.title').html(startingprice_4060);
   /* $('#rtx-4060-availability-shop').find('div.description').html("<p>"+window.pl.availability.availability4060shop[locale]+"</p>");*/
    $('#rtx-4060-availability').find('div.description').html("<p>"+window.pl.availability.availability4060[locale]+"</p>");
    
    $('#rtx-4060-availability-shop').find('div.description').html("");
   
    
    
     $('#rtx-4060ti-8gb-startprice').find('h3.title').html(startingprice_4060ti8gb);
    $('#rtx-4060ti-8gb-startprice-shop').find('h3.title').html(startingprice_4060ti8gb);
    $('#rtx-4060ti-8gb-availability-shop').find('div.description').html("<p>"+window.pl.availability.availability4060ti8gbshop[locale]+"</p>");
    $('#rtx-4060ti-8gb-availability').find('div.description').html("<p>"+window.pl.availability.availability4060ti8gb[locale]+"</p>");
    
    
     $('#rtx-4060ti-16gb-startprice').find('h3.title').html(startingprice_4060ti16gb);
    $('#rtx-4060ti-16gb-startprice-shop').find('h3.title').html(startingprice_4060ti16gb);
    $('#rtx-4060ti-16gb-availability-shop').find('div.description').html("<p>"+window.pl.availability.availability4060ti16gbshop[locale]+"</p>");
    $('#rtx-4060ti-16gb-availability').find('div.description').html("<p>"+window.pl.availability.availability4060ti16gb[locale]+"</p>");
    
    
    /*if($('#rtx-4070-availability-shop').hasClass('btn-content')){
        $('#rtx-4070-availability-shop').find('span.btn-text').html("");
    }
    else{
    $('#rtx-4070-availability-shop').find('div.description').html("");
    } 
    $('#rtx-4070-availability').find('div.description').html("<p>"+window.pl.availability.availability4070[locale]+"</p>");
    $('#rtx-4070-availability-shop').find('div.description').html("<p>"+window.pl.availability.availability4070[locale]+"</p>");*/
    
  //40 Series Laptop Availability 
  $('#rtx-40-series-availability-shop-title').find('h2.title').html("<h2 class='h--smaller'>"+window.pl.availability.availability40laptop[locale]+"</h2>");
	$('#rtx-40-series-availability-shop').find('div.description').html("<p>"+window.pl.availability.availability40laptopSub[locale]+"</p>");
    
     $('#rtx-4090-startprice-shop').find('h2.title').html(startingprice_4090);
    $('#rtx-4090-availability-shop').find('div.description').html("<p>"+window.pl.availability.availability4090[locale]+"</p>");
    $('#rtx-4090-availability').find('div.description').html("<p>"+window.pl.availability.availability4090[locale]+"</p>");
    
    
    
    
    $('#rtx-4080-super-starting-price-shop').find('h3.title').html(startingprice4080super);
    $('#rtx-4080-super-startprice').find('h2.title').html(startingprice4080super);
	$('#rtx-4070-super-starting-price-shop').find('h3.title').html(startingprice4070super);
	$('#rtx-4070-super-startprice').find('h2.title').html(startingprice4070super);
    $('#rtx-4070ti-super-starting-price-shop').find('h3.title').html(startingprice4070tisuper);
    
    
    $('#rtx-4080-super-price-availability').find('p').html(priceavailability4080super);
    $('#rtx-4070-super-price-availability').find('p').html(priceavailability4070super);
    $('#rtx-4070ti-super-price-availability').find('p').html(priceavailability4070tisuper);
    
    $('#rtx-4080-super-availability-shop').find('p').html(availability4080super);
    $('#rtx-4070-super-availability-shop').find('p').html(availability4070super);
    $('#rtx-4070ti-super-availability-shop').find('p').html(availability4070tisuper);
	
	
	
	   $('#rtx-5060-startprice').find('h2.title').html(startingprice5060);
	   $('#rtx-5060-availability').find('p').html(availability5060);
	   $('#rtx-5060-price-availability').find('p').html('<b>'+priceavailability5060+ '</b>');
	   $('#rtx-5060-starting-price-shop').find('h2.title').html(startingprice5060);
	   $('#rtx-5060-availability-shop').find('p').html(availability5060);
	   
	   
	   $('#rtx-5060ti-startprice').find('h2.title').html(startingprice5060ti);
	   $('#rtx-5060ti-availability').find('p').html(availability5060ti);
	   $('#rtx-5060ti-price-availability').find('p').html('<b>'+priceavailability5060ti+ '</b>');
	   $('#rtx-5060ti-starting-price-shop').find('h2.title').html(startingprice5060ti);
	   $('#rtx-5060ti-availability-shop').find('p').html(availability5060ti);
	
    
       $('#rtx-5070-startprice').find('h2.title').html(startingprice5070);
	   $('#rtx-5070-availability').find('p').html(availability5070);
	   $('#rtx-5070-price-availability').find('p').html('<b>'+priceavailability5070+ '</b>');
	   $('#rtx-5070-starting-price-shop').find('h2.title').html(startingprice5070);
	   $('#rtx-5070-availability-shop').find('p').html(availability5070);

	
	   $('#rtx-5070ti-startprice').find('h2.title').html(startingprice5070ti);
	   $('#rtx-5070ti-availability').find('p').html(availability5070ti);
	   $('#rtx-5070ti-price-availability').find('p').html('<b>'+priceavailability5070ti+ '</b>');
	   $('#rtx-5070ti-starting-price-shop').find('h2.title').html(startingprice5070ti);
	   $('#rtx-5070ti-availability-shop').find('p').html(availability5070ti);

       
       $('#rtx-5080-startprice').find('h2.title').html(startingprice5080);
	   $('#rtx-5080-availability').find('p').html(availability5080);
	   $('#rtx-5080-price-availability').find('p').html('<b>'+priceavailability5080+ '</b>');
	   $('#rtx-5080-starting-price-shop').find('h2.title').html(startingprice5080);
	   $('#rtx-5080-availability-shop').find('p').html(availability5080);
	   
	   $('#rtx-5090-startprice').find('h2.title').html(startingprice5090);
	   $('#rtx-5090-availability').find('p').html(availability5090);
	   $('#rtx-5090-price-availability').find('p').html('<b>'+priceavailability5090+ '</b>');
	   $('#rtx-5090-starting-price-shop').find('h2.title').html(startingprice5090);
	   $('#rtx-5090-availability-shop').find('p').html(availability5090); 
	   
	   
	   $('#rtx-5050-startprice').find('.title').html(startingprice5050);
	   $('#rtx-5050-availability').find('p').html(availability5050);
	   $('#rtx-5050-price-availability').find('p').html('<b>'+priceavailability5050+ '</b>');
	   $('#rtx-5050-startprice-shop').find('.title').html(startingprice5050);
	   $('#rtx-5050-availability-shop').find('p').html(availability5050); 
   
    
});

