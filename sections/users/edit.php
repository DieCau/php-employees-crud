<?php 

include("../../db.php");

if(isset( $_GET['txtID'])) {
    $txtID=(isset( $_GET['txtID'] )) 
        ? $_GET['txtID']
        : "";

    $sentence=$conection->prepare("SELECT * FROM `tbl_users` WHERE id=:id");
    $sentence->bindParam(":id",$txtID);
    $sentence->execute(); 

    $register=$sentence->fetch(PDO::FETCH_LAZY);
    
    $nameuser=$register['nameuser'];
    $password=$register['password'];
    $email=$register['email'];
}

if($_POST) {

    // Tomar los datos del metodo POST
    $txtID=(isset($_POST['txtID'])
        ? $_POST['txtID']
        : "" );
    
    $nameuser=(isset($_POST['nameuser'])
        ? $_POST['nameuser']
        : "" );
        
    $password=(isset($_POST['password'])
        ? $_POST['password']
        : "" );

    $email=(isset($_POST['email'])
        ? $_POST['email']
        : "" );
    
    // Preparar la inserción de los datos
    $sentence=$conection->prepare("UPDATE `tbl_users` SET
    nameuser=:nameuser,
    password=:password,
    email=:email
    WHERE id=:id
    "); 
    
    // Asignando los valores que vienen del metodo POST
    $sentence->bindParam(":nameuser",$nameuser);
    $sentence->bindParam(":password",$password);
    $sentence->bindParam(":email",$email);
    $sentence->bindParam(":id",$txtID);
    $sentence->execute(); 

    // Redireccionar
    header("Location:index.php");
}
    
?>

<?php include("../../templates/header.php"); ?>

<br>

<div class="card">
    <div class="card-header">Usuarios</div>
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
                <label for="nameuser" class="form-label">Usuario</label>
                <input
                    type="text"
                    value="<?php echo $nameuser;?>"
                    class="form-control"
                    name="nameuser"
                    id="nameuser"
                    placeholder="Ingrese Usuario..."
                />                
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input
                    type="password"
                    value="<?php echo $password;?>"
                    class="form-control"
                    name="password"
                    id="password"
                    placeholder="Ingrese Password..."
                />
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input
                    type="email"
                    value="<?php echo $email;?>"
                    class="form-control"
                    name="email"
                    id="email"
                    placeholder="abc@mail.com"
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