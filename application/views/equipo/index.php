<div class="wrapper style2">
    <div class="container">
        <div class="content" style="border: 1px solid;">
            <table id="equipostable">
                <thead>
                <tr>
                    <th>Posición</th>
                    <th>Equipo</th>
                    <th>JJ</th>
                    <th>JG</th>
                    <th>JP</th>
                    <th>PF</th>
                    <th>PC</th>
                    <th>Dif</th>
                    <th>Puntos</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $contador = 0;
                foreach($datos as $data) {
                    $contador++;
                    echo "<tr>
                        <td>".$contador."</td>
                        <td>".$data['NOMBRE_EQUIPO']."</td>
                        <td>".$data['JUEGO_JUGADO']."</td>
                        <td>".$data['JUEGO_GANADO']."</td>
                        <td>".$data['JUEGO_PERDIDO']."</td>
                        <td>".$data['PNTS_ANOTADOS']."</td>
                        <td>".$data['PNTS_RECIBIDOS']."</td>
                        <td>".$data['DIFERENCIA']."</td>
                        <td>".$data['PUNTOS']."</td>
                    </tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready( function () {
        $('#equipostable').DataTable({
                
            "info": false
        });
    } );
</script>