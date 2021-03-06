$(document).ready(function (){
    $('#del').on('submit', function (e){
        let d = confirm('Вы действительно хотите удалить свою заявку?');
        if (!d){
            e.preventDefault();
        }
    });
})

