function loginUsuario(){
    $.ajax({
        type:"POST",
        data:$('#frmLogin').serialize(),
        url:"procesos/usuarios/login/loginUsuario.php",
        success:function(respuesta){
            respuesta = respuesta.trim();
            if(respuesta == 1){
                window.location.href = "vistas/inicio.php"
            }else{
                Swal.fire(":c", "Error al entrar usuario no valido, favor de registrar o checar su informacion","error");
            }
        }
    });
    return false;
} 