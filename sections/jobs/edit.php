<?php 

include("../../db.php");

if(isset( $_GET['txtID'])) {
    $txtID=(isset( $_GET['txtID'] )) 
        ? $_GET['txtID']
        : "";

    $sentence=$conection->prepare("SELECT * FROM `tbl_jobs` WHERE id=:id");
    $sentence->bindParam(":id",$txtID);
    $sentence->execute(); 
    $register=$sentence->fetch(PDO::FETCH_LAZY);
    $namejob=$register['namejob'];

}


if($_POST) {

    // Recepcion de los datos del metodo POST
    $txtID=(isset( $_POST['txtID'] )) 
        ? $_POST['txtID']
        : "";
        
    $namejob=(isset($_POST['namejob'])
        ? $_POST['namejob']
        : "" );
    
    // Preparar la inserción de los datos
    $sentence=$conection->prepare("UPDATE `tbl_jobs` 
    SET `namejob`=:namejob 
    WHERE id=:id"); 
    
    // Asignando los valores que vienen del metodo POST
    $sentence->bindParam(":namejob",$namejob);
    $sentence->bindParam(":id",$txtID);
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
                <label for="txtID" class="form-label">ID:</label>
                <input
                    type="text"
                    value="<?php echo $txtID;?>"
                    class="form-control"
                    readonly
                    name="txtID"
                    id="txtID"
                    placeholder="ID"
                    />
            </div>
                
            <div class="mb-3">
                <label for="namejob" class="form-label">Nombre del Cargo</label>
                <input
                    type="text"
                    value="<?php echo $namejob;?>"
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
                Actualizar
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