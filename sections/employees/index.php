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
            >Agregar Registro</a
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
                        <th scope="col">Nombre</th>
                        <th scope="col">Perfil</th>
                        <th scope="col">CV</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Ingreso</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">Diego</td>
                        <td>imagen.jpg</td>
                        <td>cv.pdf</td>
                        <td>Programador Jr.</td>
                        <td>12/12/2020</td>
                        <td>
                            <a
                                name=""
                                id=""
                                class="btn btn-primary"
                                href="#"
                                role="button"
                                >Carta</a
                            >                            
                            <a
                                name=""
                                id=""
                                class="btn btn-warning"
                                href="#"
                                role="button"
                                >Editar</a
                            >                            
                            <a
                                name=""
                                id=""
                                class="btn btn-danger"
                                href="#"
                                role="button"
                                >Eliminar</a
                            >
                            
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        

    </div>
</div>



<?php include("../../templates/footer.php"); ?>