$(document).ready(function(){
         
$('#show_more').click(function() {
    var btn_more = $(this);
    var offset = parseInt($(this).attr('offset'));
  
    $.post(
        "ajax.php",
        {
            offset: offset
        },
        onAjaxSuccess
    );

});

function onAjaxSuccess(json)
{
    data = JSON.parse(json);

    $('#show_more').attr('offset', (data['offset']));
    $('#container').append(data['content']);
}
     

    // $.ajax({
    //     url: "../ajax.php", // куда отправляем
    //     type: "post",
    //     dataType: "json", // тип передачи данных
    //     data: { // что отправляем
    //         "count_show":   count_show,
    //         "count_add":    count_add
    //     },
    //     // после получения ответа сервера
    //     success: function(data){
    //         console.log(data);

    //         if (data.result == "success") {
    //             $('#content').append(data.html);
    //             btn_more.val('Show more');
    //             btn_more.attr('count_show', (count_show+3));
    //         } else {
    //             btn_more.val('END LIST');
    //         }
    //     }
    // });        
});     