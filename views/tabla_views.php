 <!-- Para ver el total y la cantidad de camisetas -->
    <div class="admin bg-blanco">
        <div class="contenedor-admin">
            <h2 class="verde">Panel de Compra</h2>
        </div>
            <div class="contenedor-tabla">
                <table id="tabla">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <?php foreach($data['productos'] as $camisa): ?>
                    <tbody>
                        <tr>
                            <td><?php echo $camisa['nombre']; ?></td>
                            <td>
                                <select name="">
                                    <option selected disabled>Cantidad</option>
                                    <option value="1">1</option> 
                                    <option value="2">2</option>
                                    <option value="3">3</option> 
                                    <option value="4">4</option>  
                                </select>
                            </td>
                            <td><?php echo $camisa['precio'].'$'; ?></td>
                        </tr>
                    </tbody>
                    <?php endforeach; ?>
                </table>
                <div class="botones">
                    <a href="#" class="boton centrar">Vaciar Tabla</a>
                    <h3 class="centrar"><span>Subtotal</span> 100$</h3>
                    <h3><span>Total</span> 110$</h3>
                    <a href="#" class="boton centrar">Pagar Ahora</a>
                </div>
            </div> 
            </div>