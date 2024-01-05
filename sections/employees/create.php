<?php include("../../templates/header.php"); ?>

<br/>
<div class="card">
    <div class="card-header">Datos del Empleado</div>
    <div class="card-body">
    <form action="" method="post" enctype="multipart/form-data">        
        
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input
                type="text"
                class="form-control"
                name="name"
                id="name"
                placeholder="Ingrese Nombre..."
            />
        </div>        

        <div class="mb-3">
            <label for="lastname" class="form-label">Apellido</label>
            <input
                type="text"
                class="form-control"
                name="lastname"
                id="lastname"
                placeholder="Ingrese Apellido..."
            />
        </div>
        
        <div class="mb-3">
            <label for="img" class="form-label">Perfil:</label>
            <input
                type="file"
                class="form-control"
                name="img"
                id="img"
            />
        </div>

        <div class="mb-3">
            <label for="cv" class="form-label">CV(pdf):</label>
            <input
                type="file"
                class="form-control"
                name="cv"
                id="cv"
            />
        </div>

        <div class="mb-3">
            <label for="idjob" class="form-label">Cargo</label>
            <select
                class="form-select form-select-sm"
                name="idjob"
                id="idjob"
            >
                <option selected>Select one</option>
                <option value="">New Delhi</option>
                <option value="">Istanbul</option>
                <option value="">Jakarta</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Fecha de Ingreso:</label>
            <input
                type="date"
                class="form-control"
                name="date"
                id="date"
            />
        </div>
        
        <button
            type="submit"
            class="btn btn-success"
        >
            Agregar Registro
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