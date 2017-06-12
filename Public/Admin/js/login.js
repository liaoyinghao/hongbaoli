/**
 * validate
 */
$(function () {
//************************************************************************************登录部分*********

    $('#login').submit(function () {
        var signinuser = $("#signinuser").val();
        var signinpasswd = $("#signinpasswd").val();
        if(signinuser==false || signinpasswd==false){
            alert('信息请填写完整');
            return false;
        }
        $.ajax({
            url:"signin",
            type:"POST",
            data:{
                user:signinuser,
                pass:signinpasswd
            },
            success:function (res) {
                if(res == 5){
                    alert('信息请填写完整');return false;
                }else if(res == 4){
                    alert('账号不存在');return false;
                }else if(res == 3){
                    alert('密码错误');return false;
                }else if(res == 2){
                    alert('登录次数递增错误');return false;
                }else if(res == 1){
                    window.location.href="/index.php/Admin/Index/index.html";
                }else {
                    alert("未知错误");return false;
                }
            }
        })
    })



})
