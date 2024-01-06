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
                    <tr class="">
                        <td scope="row">1</td>
                        <td>Diego</td>
                        <td>******</td>
                        <td>dc@gmail.com</td>
                        <td><input
                            name="btnEdit"
                            id="btnEdit"
                            class="btn btn-warning"
                            type="button"
                            value="Editar"
                            />
                            <input
                                name="btnDelete"
                                id="btnDelete"
                                class="btn btn-danger"
                                type="button"
                                value="Eliminar"
                            />
                            
                        </td>
                    </tr>
                </tbody>
            </table>
        </div> 

    </div>
</div>




<?php include("../../templates/footer.php"); ?>