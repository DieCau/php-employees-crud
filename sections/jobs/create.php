<?php include("../../templates/header.php"); ?>
 <br>

 <div class="card">
    <div class="card-header">Cargos</div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nameJob" class="form-label">Nombre del Cargo</label>
                <input
                    type="text"
                    class="form-control"
                    name="nameJob"
                    id="nameJob"
                    placeholder="Ingrese Cargo..."
                />
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
                
                
            </div>
            


        </form>

    </div>
    <div class="card-footer text-muted"></div>
 </div>
 


<?php include("../../templates/footer.php"); ?>