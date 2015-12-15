$(document).ready(function (){
    $('main article[id^=planet]').hide();//visi article ar id sākumu planet, kuri atrodas iekš main - paslēpti
    $('#pics div').hide();//paslēpj visas bildes (visus div  aside tagā ar id - pics)
    $('main article[id^=planet]:first').show();// first nozīmē, ka funkciju izpildīs pirmajam atrastajam elementam (parādīs attiecīgo tagu)
    $('#pics div:first').show();//parāda pirmo bilde
	$('#planet-menu ul li a').click(function(){ //Click event handler nospiežot uz izvēlnes saites
		var curPlanet = $(this).attr('href'); //mainīgajam curPlanet piešķir attiecīgā elementa ID, kas glabājas saitē
		$('main article[id^=planet]').hide(); //paslēpj visus tagus, kas sākas ar planet tagā main
		$('#pics div').hide();//paslēpj visas bildes
		$(curPlanet).show();	//Parāda article, kura ID glabājas mainīgajā

		var n = curPlanet.indexOf("_");//Atrod, kurā pozīcijā atrodas atdalītājsimbols
		var Pic=curPlanet.substr(n+1);//pievieno curplanet beigas pēc simbola "_", lai iegūtu id bildes div tagam
		var hash ="#";//
		var curPic=hash+Pic;//izveido id, ko padot funkcijai
		//window.alert(curPic); 
		$(curPic).show();//parāda īsto bildi īstajam planētas aprakstam
	});
});