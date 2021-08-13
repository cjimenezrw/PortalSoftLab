<?php
    if (isset($data['datos'])) {
        $result = $data['datos'];
    }
?>
<form class="form-horizontal" id="core-guardar" method="post"  enctype="multipart/form-data">
    <div class="panel panel-bordered panel-success panel-line">
        <div class="panel-heading">
            <h3 class="panel-title">DATOS GENERALES</h3>
        </div>
        <?php if(isset($_GET['p1'])){ ?>
            <div class="alert dark alert-primary alert-dismissible text-left" role="alert">
                <b style="font-size:16px;"><i class="fas fa-info-circle"></i> FOLIO: <?php echo isset($result['iFolioProspecto']) ? $result['iFolioProspecto'] : ''; ?></b>
            </div>
        <?php } ?>
        <div class="panel-body container-fluid">
            <div class="row row-lg">

                <div class="col-md-6 col-lg-6">
                    <div class="form-group margin-bottom-60">
                        <h4 class="example-title"><b><span style="color:red;">* </span>NOMBRE CONTACTO:</b></h4>
                        <input class="form-control" autocomplete="off" id="sNombreContacto" name="sNombreContacto" type="text" placeholder="NOMBRE CONTACTO" 
                        value = "<?php echo isset($result['sNombreContacto']) ? $result['sNombreContacto'] : ''; ?>">
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="form-group margin-bottom-60">
                        <h4 class="example-title"><b>EMPRESA:</b></h4>
                        <input class="form-control" autocomplete="off" id="sEmpresa" name="sEmpresa" type="text" placeholder="EMPRESA" 
                        value = "<?php echo isset($result['sEmpresa']) ? $result['sEmpresa'] : ''; ?>">
                    </div>
                </div>
                
                <div class="col-md-12 col-lg-12 clearfix"></div>

                <div class="col-md-6 col-lg-6">
                    <div class="form-group margin-bottom-60">
                        <h4 class="example-title"><b><span style="color:red;">* </span>CORREO:</b></h4>
                        <input class="form-control" autocomplete="off" id="sCorreo" name="sCorreo" type="text" placeholder="CORREO" 
                        value = "<?php echo isset($result['sCorreo']) ? $result['sCorreo'] : ''; ?>">
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="form-group margin-bottom-60">
                        <h4 class="example-title"><b><span style="color:red;">* </span>TELÉFONO:</b></h4>
                        <input class="form-control" autocomplete="off" id="sTelefono" name="sTelefono" type="text" placeholder="TELÉFONO" 
                        value = "<?php echo isset($result['sTelefono']) ? $result['sTelefono'] : ''; ?>">
                    </div>
                </div>

                <div class="col-md-12 col-lg-12 clearfix"></div>

                <div class="col-md-12 col-lg-12">
                    <div class="form-group margin-bottom-60">
                        <h4 class="example-title"><b>COMENTARIOS:</b></h4>
                        <textarea rows="5" class="form-control" id="sComentarios" name="sComentarios" autocomplete="off"
                        placeholder="COMENTARIOS"><?php echo isset($result['sComentarios']) ? html_entity_decode($result['sComentarios']) : ''; ?></textarea>
                    </div>
                </div>
                

            </div>
        </div>
    </div>
    
</form>

<script src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/js/<?php echo VERSION; ?>/<?php echo $this->sysModule; ?>.js"></script>
<script type="text/javascript">
    core.formValidaciones.fields = <?php echo $this->sysModule; ?>.<?php echo $this->sysFunction; ?>.validaciones;
    $(document).ready(function () {
        $('#core-guardar').formValidation(core.formValidaciones);
    });
</script>

