$(document).ready(function (){
    $('main article[id^=planet]').hide();//visi article ar id sākumu planet, kuri atrodas iekš main - paslēpti
    $('main article[id^=planet]:first').show();// first nozīmē, ka finkciju izpildīs pirmajam atrastajam elementam (parādīs attiecīgo tagu)
	$('#planet-menu ul li a').click(function(){ //Click event handler nospiežot uz izvēlnes saites
		var curPlanet = $(this).attr('href'); //mainīgajam curPlanet piešķir attiecīgā elementa ID, kas glabājas saitē
		$('main article[id^=planet]').hide(); //paslēpj visus tagus, kas sākas ar planet tagā main
		$(curPlanet).show();	//Parāda article, kura ID glabājas mainīgajā
	});
});