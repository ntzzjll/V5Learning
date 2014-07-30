$(function() {
    $('form').validate({
        username: {
            rule: {
                required: true
            },
            error: {
                required: "用户名不能为空"
            }
        }
    })
})