$(document).ready(function(){
    $('#submit_button').click(function () {// click events iesniegt pogai
        var toAdd=$('input[id=checkListItem]').val();//piešķirt textbox stringu mainīgajam
        $('#list').prepend('<div class="item jumbotron">' + toAdd + '</div>');//diva ar id liek divus, kuru satur tektu no textbox sākot no augšas
        
    });
    $(document).on('click','.item',function (){//on event - ja tiek veikts click uz taga ar clasi item, tad veic attiecīgo f-ju
        $(this).remove();
        });
});