                                <fieldset>
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Titulo: </label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="titulo">
                                            <?php $validador->mostrar_error_titulo(); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Imagen: </label>
                                        <div class="col-md-6">
                                            <input type="file" class="" name="imagen">
                                            <p class="note">
                                                <strong>Nota: </strong>
                                                Para una mejor visualización la imagen tiene que tener:
                                                750 largo y 500 ancho; 
                                            </p>
                                            <?php $validador->mostrar_error_imagen();?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Estado: </label>
                                        <div class="col-md-6">
                                            <select class="form-control" name="estado">
                                                <option>Desactivo</option>
                                                <option>Activo</option>
                                            </select>
                                        </div>
                                        <?php $validador->mostrar_error_estado(); ?>
                                    </div>
                                </fieldset>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="btn btn-primary" type="submit" name="modificar">Modificar</button>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <button class="btn btn-default" type="reset">Cancelar</button>
                                        </div>
                                    </div>
                                </div>