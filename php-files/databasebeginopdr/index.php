<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        $host = 'mariadb';
        $db_name = 'studentenadmin';
        $db_user = 'root';
        $db_password = 'mysql';
        
        
        $db = new PDO('mysql:host='.$host.';port=3306; dbname='.$db_name, $db_user,$db_password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $select = $db->prepare("SELECT * FROM `student`");
        $select->execute();
        while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
        $db_col = $row['studentennummer'];
        $db_col2 = $row['voornaam'];
        $db_col3 = $row['tussenvoegsel'];
        $db_col4 = $row['achternaam'];
        $db_col5 = $row['klas'];
        $db_col6 = $row['mentor'];
        $db_col7 = $row['geboortedatum'];
        echo "$db_col $db_col2 $db_col3 $db_col4 $db_col5 $db_col6 $db_col7<br>";
}
    ?>
</body>
</html>