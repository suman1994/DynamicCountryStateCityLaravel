$(document).ready(function(){
	$("#country").change(function (){
        var id = $(this).val();
        var url = $(this).data('url');
        if(id) {
            $.ajax({
                url: url+'/'+id,
                type: "GET",
                dataType: "json",
                success:function(data){
                    $('select[name="state"]').empty();
                    $.each(data, function(key, value) {
                        $('select[name="state"]').append('<option value="'+ value['id'] +'">'+ value['name'] +'</option>');
                    });
                }
            });
        }else{
            $('select[name="state"]').empty();
        }
    });

    $("#state").change(function (){
        var id = $(this).val();
        var url = $(this).data('url');
        if(id) {
            $.ajax({
                url: url+'/'+id,
                type: "GET",
                dataType: "json",
                success:function(data){
                    $('select[name="city"]').empty();
                    $.each(data, function(key, value) {
                        $('select[name="city"]').append('<option value="'+ value['id'] +'">'+ value['name'] +'</option>');
                    });
                }
            });
        }else{
            $('select[name="city"]').empty();
        }
    });
});
