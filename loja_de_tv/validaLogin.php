<?php

    if (isset($_SESSION["Nome"])){
        
        echo $_SESSION["Nome"];
        
    }
    else{
        
        echo "<script>
            alert ('Você não está logado!')
            </script>";
            
        echo "<script>
            location.href = ('index.php')
            </script>";
    }