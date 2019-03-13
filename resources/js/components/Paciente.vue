<template>    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Pacientes</h2>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- Button trigger modal -->
                            <button type="button" @click="abrirModal('paciente','registrar')" class=" btn btn-sm btn-success">Agregar Paciente</button><br><br>
                            <table id="tablaPacientes" class="table table-bordered table-striped" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr>
                                        <th>Nombre(s)</th>
                                        <th>Apellidos</th>
                                        <th>Correo</th>
                                        <th>Teléfono</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="paciente in arrayPaciente" :key="paciente.id" role="row" class="odd">
                                        <td v-text="paciente.nombre"></td>
                                        <td v-text="paciente.apellidos"></td>
                                        <td v-text="paciente.correo"></td>
                                        <td v-text="paciente.telefono"></td>
                                        <td class="sorting_1"><center>
                                            <button type="button" class="btn btn-primary btn-sm" @click="abrirModal('paciente','actualizar',paciente)">
                                                Editar
                                            </button>
                                            <button type="button" class="btn btn-danger btn-sm" >
                                                Borrar
                                            </button></center>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nombre(s)</th>
                                        <th>Apellidos</th>
                                        <th>Correo</th>
                                        <th>Teléfono</th>
                                        <th>Opciones</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div><!-- /.card-body -->
                    </div><!-- /.card-->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->

        <!-- /.modal Agregar Nuevo Paciente -->
        <div class="modal fade" tabindex="-1" :class="{'mostrar' : modal}" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <form class="needs-validation" novalidate>
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" v-text="tituloModal"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="col-md-5 mb-1">
                                    <label for="validationCustom01">Nombre(s)</label>
                                    <input type="text" class="form-control form-control" id="validationCustom01" placeholder="Ingresa el nombre del paciente" value="" required>
                                </div>
                                <div class="col-md-4 mb-1">
                                    <label for="validationCustom02">Apellidos</label>
                                    <input type="text" class="form-control form-control" id="validationCustom02" placeholder="Ingresa los apellidos del paciente" value="" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-1">
                                    <label for="validationCustomUsername">Correo</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        </div>
                                        <input type="email" class="form-control form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend">
                                        <div class="invalid-feedback">
                                            Formato de correo erroneo.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-3 mb-1">
                                    <label for="validationCustom03">Teléfono</label>
                                    <input type="tel" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Telefono">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Modal Borrar registro de un Paciente -->
        <div class="modal fade" id="borrarPaciente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Borrar Paciente</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ¿Estás seguro de borrar el registro de <label></label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger">Borrar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        data(){
            return{
                nombre : '',
                apellidos : '',
                correo : '',
                telefono : '',
                arrayPaciente : [],
                modal : 0,
                tituloModal : ''
            }
        },
        methods : {
            listarPaciente(){
                let me= this;
                axios.get('/pacientes').then(function(response) {
                    me.arrayPaciente = response.data;
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            registrarPaciente(){

            },
            abrirModal(modelo,accion,data=[]){
                switch(modelo){
                    case "paciente":{
                        switch(accion){
                            case 'registrar':{
                                this.modal = 1;
                                this.tituloModal = 'Registrar Paciente'
                                this.nombre = '';
                                this.apellidos = '';
                                this.correo='';
                                this.telefono='';
                                break;
                            }
                            case 'actualizar':{

                            }
                        }
                    }
                }
            }
        },
        mounted() {
            this.listarPaciente();
        }
    }
</script>