var checkExistedResult =false;
jQuery.validator.addMethod("checkExisted", function(value, element,attr){
    $.ajax({
        url:  attr.requestUrl,
        method: 'post',
        data:{
            id:attr.modelId,
            email: value,
            _token: $('#ajaxToken').val()
        }, 
        dataType: 'JSON',
        beforeSend:function(){
            //code
        },
        success: function(rs){
            checkExistedResult =rs;
        },
        complete:function(){
            //code
        },
        error: function(err,xhr) {
            console.log(err);
        }
    });
    return checkExistedResult;
}, "Email đã tồn tại!");