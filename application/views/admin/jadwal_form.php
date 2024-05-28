<table class="table table-reposive">
	<form action="" method="POST">
    <tr>
	<th>Mentor</th>
	<td>
		<select class="form-control" name="nama_jabatan" required="">
            <?php foreach ($nama_jabatan as $row):?>
                <option value="<?=  $row['id_jabatan']?>"><?=  $row['nama_jabatan'] ?></option>
            <?php endforeach;?>              
        </select>
	</td>
    </tr>
    <tr>
        <th>Student</th>
        <td>
            <select class="form-control" name="nama" required="">
                <?php
                foreach ($nama as $row):?>
                    <option value="<?=  $row['id_pegawai']?>"><?=  $row['nama'] ?></option>
                <?php endforeach;?>          
            </select>
        </td>
    </tr>
	<tr><th>Jadwal Bimbingan</th><td><input type="datetime-local" name="jam" class="form-control" value="<?= $jam ?>" required=""></td></tr>
	<tr><th>Bidang Mentor</th><td><input type="text" name="bidang" class="form-control" value="<?= $bidang ?>" required=""></td></tr>

    <tr><td></td><th><input type="submit" name="kirim" value="Submit" class="btn btn-primary"></th></tr>
    </form>	 
	<script>
            document.addEventListener('DOMContentLoaded', function () {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    events: [ ],
                    selectOverlap: function (event) {
                        return event.rendering === 'background';
                    }
                });
    
                calendar.render();
            });
        </script>
</table>
 
 