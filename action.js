$(function(){
    $("#car_make").change(function(){
        var aid = $("#car_make").val();
        $.ajax({
            url: 'data.php',
            method: 'post',
            data: 'aid=' + aid
        }).done(function(car_models){
            //console.log(car_models);
            car_models = JSON.parse(car_models);
            $('#car_models').empty();
            car_models.forEach(function(car_model){
                $('#car_models').append('<option>' + car_model.name + '</option>')
            })
        })
    })
})