<?php
$conn = mysqli_connect("localhost", "root", "", "dht_db");
$select = mysqli_query($conn, "SELECT * FROM dht_data");

if (mysqli_num_rows($select) > 0) {
    ?>
    <table border="1">
        <tr>
            <th>id</th>
            <th>humidity</th>
            <th>temperature</th>
            <th>timestamp</th>
        </tr>
        <?php
        while ($rows = mysqli_fetch_array($select)) {
            ?>
            <tr>
                <td><?php echo $rows['id']; ?></td>
                <td><?php echo $rows['humidity']; ?></td>
                <td><?php echo $rows['temperature']; ?></td>
                <td><?php echo $rows['timestamp']; ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php
} else {
    echo "No data available in database";
}
?>