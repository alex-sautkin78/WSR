function mode(){
    $.ajax({
        url:'../api',
        method: 'GET',
        success: function (data){
            console.log(data);
            count(data);
        }
    });
};
setInterval(mode, 5000);
function count(data){
    let count = data.data;
    let appl_count = data.appl_count;
    $('#otvet').html(`Количество пользователей: ${count}`);
    $('#appl_count').html(`Количество решенных заявок: ${appl_count}`);
}

