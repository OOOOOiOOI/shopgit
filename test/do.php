<?php
    $c = mysqli_connect( "localhost", "root", "", "test" );
    mysqli_query( $c, "SET NAMES UTF8" );

    echo "
            <h4>ดึงข้อมูลจาก Database มาแสดงในเว็บ PHP และ MySQL</h4>
            <table width='50%' border='1'>
            <tr>
                <td>ลำดับ</td>
                <td>email</td>
                <td>รหัส</td>
            </tr>
        ";

    $sql = " SELECT * FROM data  ";
    $q = mysqli_query( $c, $sql );
    $no = 1;
    while( $f = mysqli_fetch_assoc( $q ) ) {
        echo "
                <tr>
                    <td>".$no."</td>
                    <td>".$f['username']."</td>
                    <td>".$f['password']."</td>
                </tr>
                ";
        $no++;
    }

    echo "</table>";
    mysqli_close( $c );
?>
