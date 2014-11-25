function limpiar(){
    document.form.reset();
    document.form.txtCodigo.focus();
}
function validar (){
    var form = document.form;
    if (form.txtCodigo.value==0){
        alert("ingrese el codigo!!");
        form.txtCodigo.value="";
        form.txtCodigo.focus();
        return false;
    }
    form.submit();
}
function modificar(){
    form.submit();
}
function eliminar(){
    form.submit();
}