<?php


if (isset($_POST['zoekopdracht'])){
    echo "De zoekopdracht is: ". $_POST['zoekopdracht'];

};


?>

<html>
    <head>
    </head>
    <body>
    
        <form action='index.php' method='POST'>
            <input type='text' name='zoekopdracht' placeholder='Zoekopdracht' required >
            <input type='submit' name='submit' value='Zoek'>
        </form>
        
<?php
    if (isset($_POST['zoekopdracht'])){
        echo "De zoekopdracht is: ". $_POST['zoekopdracht'];

    };


?>

    </body>
</html>
