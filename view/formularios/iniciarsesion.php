            <!-- Button to Open the Modal -->
            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Login</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">

                            <form action="index.php" method="POST">
                                <div class="form-group" >
                                    <label for="email">Usuario:</label>
                                    <input type="text" name="id" class="form-control" id="email" >
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Contraseña:</label>
                                    <input type="password" class="form-control" id="pwd" name="clave" required>
                                </div>
                                <?php
                                    echo $validacion;
                                ?>
                                <button  type="submit" class="btn btn-primary">Ingresar</button>
                            </form>


                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">

                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerar</button>
                        </div>

                    </div>
                </div>
            </div>