function mode(){
    $.ajax({
        url:'http://localhost/api',
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
    $('#otvet').html(`Количество пользователей: ${count}`);
}

