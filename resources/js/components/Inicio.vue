<template>
<div class="content">
    <div class="container-fluid">
        <center>
        <img src="img/logoHealhFeet2.png" alt="AdminLTE Logo" style="width:30%;" class="img-circle elevation-3">
        <p>
            <h1>Bienvenido: {{user.name}}</h1>
        </p>
        </center>

    </div><!-- /.container-fluid -->
</div><!-- /.container-fluid -->
</template>
<script>
    export default {
        mounted() {
           // this.listarPaciente();
        },
        props : ['user']
    }
</script>


