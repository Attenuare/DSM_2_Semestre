<?php
    if(isset($_POST['name']) and isset($_POST['cpf']))
    {
        $saving_data = fopen("all_information.txt", "a");
        fwrite($saving_data, "\n" . $_POST['name']);
        fwrite($saving_data, "\n" . $_POST['cpf']);
        fflush($saving_data);
        fclose($saving_data);

        header("location: welcome.php");
        exit;
    }
?>
