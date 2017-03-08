<div class="input-group">
<form method="post" id="submitForm">
Mã tài khoản<input class="form-control" type="text" name="txtmatk" id="txtmatk"/><br />
Username<input class="form-control" type="text" name="txtusername" id="txtusername"/><br />
Pass<input class="form-control" type="password" name="txtpass" id="txtpass" /><br />
<!--Phân Quyền<input type="text" name="txtphanquyen" /><br />-->
Phân Quyền<br/> <select name="txtphanquyen" id="txtphanquyen">
        <option value="1">Admin</option>
        <option value="2">Admin Tổng</option>
    </select><br/><br/>
<input class="btn btn-primary" type="button" value="Thêm Admin" name="btnThemAdmin" id="btnThemAdmin"/>
<p class="has-error help-block" id="showerr"></p>
</form>
</div>
<script>
$('#btnThemAdmin').click(function(){
    //Kiem tra loi
    if (errorCheck().length<1){
        $('#submitForm').submit();
    }
    event.preventDefault()
})
function errorCheck(){
    var err="";

    if ($('#txtmatk').val().length<=0){
        err = err+"Mã tài khoản không được trống <br/>";
    } else if (isNaN($('#txtmatk').val()) || Math.floor($('#txtmatk').val())!=$('#txtmatk').val() || $('#txtmatk').val()<=0)  {
        err = err+"Mã tài khoản phải là một số nguyên lớn hơn 0 <br/>"
    }

    if ($('#txtusername').val().length<=0){
        err = err+"Username không được trống <br/>";
    }

    if ($('#txtpass').val().length<=5){
        err = err+"Pass phải có ít nhất 6 kí tự <br/>";
    }
    $('#showerr').html(err);
}
</script>
