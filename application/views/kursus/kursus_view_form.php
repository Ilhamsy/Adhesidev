<table class="table table-responsive">
    <form action="" method="POST">
        <tr>
            <th>Nama Kursus</th>
            <td>
                <input type="text" name="nama_kursus" class="form-control" value="<?php echo $nama_kursus; ?>" required>
            </td>
        </tr>
        <tr>
            <th>Kapasitas</th>
            <td>
                <input type="number" name="kapasitas" class="form-control" value="<?php echo $kapasitas; ?>" required>
            </td>
        </tr>
        <tr>
            <th>Waktu</th>
            <td>
                <input type="datetime-local" name="waktu" class="form-control" value="<?php echo $waktu; ?>" required>
            </td>
        </tr>
        <?php
        $url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : '';
        ?>
        <tr>
            <td></td>
            <th>
                <input type="submit" name="kirim" value="Submit" class="btn btn-primary">
                &nbsp;&nbsp;<a href="<?php echo $url ?>" class="btn btn-danger">Batal</a>
            </th>
        </tr>
    </form>
</table>