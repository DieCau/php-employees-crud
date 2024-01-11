<?php 

include("../../db.php");

if($_POST) {

    // Tomar los datos del metodo POST
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
    $sentence=$conection->prepare("INSERT INTO `tbl_users` (`id`, `nameuser`, `password`, `email`) 
              VALUES (NULL, :nameuser, :password, :email)"); 
    
    // Asignando los valores que vienen del metodo POST
    $sentence->bindParam(":nameuser",$nameuser);
    $sentence->bindParam(":password",$password);
    $sentence->bindParam(":email",$email);
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
                <label for="nameuser" class="form-label">Usuario</label>
                <input
                    type="text"
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