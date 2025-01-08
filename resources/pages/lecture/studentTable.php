

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Nomor registrasi</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Unit</th> <!-- harus dhapus -->
                <th>Venue</th>  <!-- harus dhapus -->
                <th>Kehadiran</th>
                <th>Pengaturan</th>
            </tr>
        </thead>
        <tbody id="studentTableContainer">
            <?php
            if (isset($_POST['courseID']) && isset($_POST['unitID']) && isset($_POST['venueID'])) {

                $courseID = $_POST['courseID'];
                $unitID = $_POST['unitID'];
                $venueID = $_POST['venueID'];

                $sql = "SELECT * FROM tblStudents WHERE courseCode = '$courseID'";
                $result = fetch($sql);

                if ($result) {
                    foreach ($result as $row) {
                        echo "<tr>";
                        $registrationNumber = $row["registrationNumber"];
                        echo "<td>" . $registrationNumber . "</td>";
                        echo "<td>" . $row["firstName"] . $row["lastName"] . "</td>";
                        echo "<td>" . $courseID . "</td>";
                        echo "<td>" . $unitID . "</td>";
                        echo "<td>" . $venueID . "</td>";
                        echo "<td>Absent</td>"; 
                        echo "<td><span><i class='ri-edit-line edit'></i><i class='ri-delete-bin-line delete'></i></span></td>";
                        echo "</tr>";
                    }

                } else {
                    echo "<tr><td colspan='6'>No records found</td></tr>";
                }
            }
            ?>
        </tbody>
    </table>
</div>
