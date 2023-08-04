<?php
    $con  = new mysqli('localhost','root','','search_ajax') or die('Error');

    $data = "SELECT * FROM search WHERE name LIKE '%".$_POST['name']."%' OR position LIKE '%".$_POST['name']."%' OR gender LIKE '%".$_POST['name']."%' OR age LIKE '%".$_POST['name']."%' OR salary LIKE '%".$_POST['name']."%'";

    $res  = $con->query($data);
    
    if($res->num_rows>0){
        while($row = $res->fetch_assoc()){
            echo '
            
            <tr>
                <td>'.$row['id'].'</td>
                <td>'.$row['name'].'</td>
                <td>'.$row['gender'].'</td>
                <td>'.$row['position'].'</td>
                <td>'.$row['age'].'</td>
                <td>'.$row['salary'].'</td>
            </tr>
            ';
        }
    }
    else {
        echo '<h3 class="text-danger">No data!!!!</h3>';
    }
?>
