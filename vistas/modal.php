 <?php 
    if( isset($_GET["mensaje"]) ) { ?>
     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog" role="document" >
            <div class="modal-content" style="border-width: 3px; border-color: #113448;;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="width: 80%;">Estimado Usuario:</h5>
                    <img src="../public/imagenes/logoF.png" height="40px" style="float: right; width: 10%;">
                    <button type="button" class="close cerrarModal" data-dismiss="modal" aria-label="Close" style="width: 10%;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><?php echo $_GET["mensaje"]; ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary cerrarModal" data-dismiss="modal">cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <?php }?>



    <!--script para javascript para que carga el modal -->
    <script>
        $(document).ready(function() {
            $("#myModal").modal("show");
        });

	$(".cerrarModal").click(function() {
            $("#myModal").modal('hide')
        });
    </script>
