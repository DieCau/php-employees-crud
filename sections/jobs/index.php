<?php 

include("../../db.php");

if(isset( $_GET['txtID'])) {
    $txtID=(isset($_GET['txtID'])) 
        ? $_GET['txtID']
        : "";

    $sentence=$conection->prepare("DELETE FROM `tbl_jobs` WHERE id=:id");
    $sentence->bindParam(":id",$txtID);
    $sentence->execute(); 
    
    header("Location:index.php");
 
}



$sentence = $conection->prepare("SELECT * FROM `tbl_jobs` ");
$sentence->execute();
$list_tbl_jobs=$sentence->fetchAll(PDO::FETCH_ASSOC);


?>

<?php include("../../templates/header.php"); ?>

<br/>

<div class="card">
    <div class="card-header">
        <a
            name=""
            id=""
            class="btn btn-success"
            href="create.php"
            role="button"
            >Agregar Cargo</a
        >
    </div>
    
    <div class="card-body">

        <div
            class="table-responsive-sm"
        >
            <table
                class="table"
            >
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre del Cargo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                <?php foreach ($list_tbl_jobs as $job) { ?>
                    
                    <tr class="">
                        <td scope="row"><?php echo $job['id']; ?></td>
                        <td><?php echo $job['namejob'];  ?></td>
                        <td> <a
                            class="btn btn-warning"
                            href="edit.php?txtID=<?php echo $job['id']; ?>"
                            role="button"
                            >Editar</a
                           >
                           <a
                            class="btn btn-danger"
                            href="index.php?txtID=<?php echo $job['id']; ?>"
                            role="button"
                            >Eliminar</a
                           >
                                                
                        </td>
                    </tr>

                <?php }  ?>
                </tbody>
            </table>
        </div> 

    </div>
</div>





<?php include("../../templates/footer.php"); ?>