<html>
    <head>
        <h1>Teilautomatisiertes Haushaltsbuch</h1>
    </head>
    <body>
        <?php
            $myPDO = new PDO('mysql:host=localhost;dbname=projektgobitest', 'root', '');
            $result = $myPDO->query("SELECT * FROM transaktionen");
        ?>
        <table>
            <?php
                $rows = $result->fetchAll();
                
                foreach($rows as $row){
                    print_r($row);
                }
            ?>
        </table>
    </body>
</html>

