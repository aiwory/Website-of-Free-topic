/**
 * Created by Aigars on 13.01.2016.
 */

$(document).ready(function (){
    /**
     location.name - atgriež lapas saiti, sākot ar pēdējo /
     currentpage tiek piešķirts tāds string, kurš ir izgriezts no location.pathname sākot ar elementu, kas ir aiz /
     tālāk li tagam, kura bērns ir zem #pagename li esošs a tags, kurā gabājas href ar saiti, kura sakrīt ar currentpage,
     piešķit klasi active
     */
    var currentpage=location.pathname.substring(location.pathname.lastIndexOf("/") + 1);
    if (currentpage=="") $('#pageMenu li:first').addClass('active');
    //window.alert(currentpage);//stringa testam
    $('#pageMenu li a[href="'+ currentpage +'"]').parents('li').addClass('active');
});
