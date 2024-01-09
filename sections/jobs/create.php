<?php 

include("../../db.php");

if($_POST) {

    // Tomar los datos del metodo POST
    $namejob=(isset($_POST['namejob'])
        ? $_POST["namejob"]
        : "" );
    
    // Preparar la inserción de los datos
    $sentence=$conection->prepare( "INSERT INTO `tbl_jobs` (`id`, `namejob`) 
              VALUES (NULL, :namejob)" ); 
    
    // Asignando los valores que vienen del metodo POST
    $sentence->bindParam(":namejob",$namejob);
    $sentence->execute(); 

    // Redireccionar
    header("Location:index.php");

}

?>

<?php include("../../templates/header.php"); ?>
 
<br>

 <div class="card">
    <div class="card-header">Cargos</div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="namejob" class="form-label">Nombre del Cargo</label>
                <input
                    type="text"
                    class="form-control"
                    name="namejob"
                    id="namejob"
                    placeholder="Ingrese Cargo..."
                />                
            </div>

            <button
                type="submit"
                class="btn btn-success"
            >
                Agregar
            </button>
            <a
                name=""
                id=""
                class="btn btn-primary"
                href="index.php"
                role="button"
                >Cancelar</a
            >
            
        </form>

    </div>
    <div class="card-footer text-muted"></div>
 </div>
 


<?php include("../../templates/footer.php"); ?>