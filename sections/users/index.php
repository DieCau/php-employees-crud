<?php 
include("../../db.php");


if(isset( $_GET['txtID'])) {
    $txtID=(isset($_GET['txtID'])) 
        ? $_GET['txtID']
        : "";

    $sentence=$conection->prepare("DELETE FROM `tbl_users` WHERE id=:id");
    $sentence->bindParam(":id",$txtID);
    $sentence->execute(); 
    
    header("Location:index.php");
 
}


$sentence = $conection->prepare("SELECT * FROM `tbl_users` ");
$sentence->execute();
$list_tbl_users=$sentence->fetchAll(PDO::FETCH_ASSOC);


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
            >Agregar Usuario</a
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
                        <th scope="col">Usuario</th>
                        <th scope="col">Password</th>
                        <th scope="col">Email</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                <?php foreach ($list_tbl_users as $user) { ?>
                    
                    <tr class="">
                       <td scope="row"><?php echo $user['id']; ?></td>
                       <td><?php echo $user['nameuser']; ?></td>
                       <td>******</td>
                       <td><?php echo $user['email']; ?></td>
                       <td><a
                            class="btn btn-warning"
                            href="edit.php?txtID=<?php echo $user['id']; ?>"
                            role="button"
                            >Editar</a
                           >
                           <a
                            class="btn btn-danger"
                            href="index.php?txtID=<?php echo $user['id']; ?>"
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