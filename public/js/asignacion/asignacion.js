$(document).ready(function(){
    $("#tablaAsignacionesLoad").load("asignacion/tablaAsignacion.php ");
});
function asignarEquipo(){
    $.ajax({
        type:"POST",
        data:$('#frmAsignaEquipo').serialize(),
        url:"../procesos/asignacion/asignar.php",
        success:function(respuesta){
            respuesta = respuesta.trim();
            if(respuesta == 1){
                $("#tablaAsignacionesLoad").load("asignacion/tablaAsignacion.php ");
                $('#frmAsignaEquipo')[0].reset();
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Asignado con exito',
                    showConfirmButton: false,
                    timer: 1500
                })
            }else{
                Swal.fire(":(","Error al agregar "+ respuesta,"error")
            }
        }
    });
    return false;
}
function eliminarAsignacion(idAsignacion){
        Swal.fire({
            title: 'Esta seguro de eliminar?',
            text: "una vez eliminado no podra ser recuperado!!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Eliminalo!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type:"POST",
                    data:"idAsignacion=" + idAsignacion,
                    url:"../procesos/asignacion/eliminarAsignacion.php",
                    success:function(respuesta){
                        if(respuesta == 1){
                            $("#tablaAsignacionesLoad").load("asignacion/tablaAsignacion.php ");
                            Swal.fire(":D","Se elimino con exito ","success")
                            
                        }else{
                            Swal.fire(":(","Error al eliminar "+ respuesta,"error")
                        }
                    }
                });
            }
        })
    
    return false;
}