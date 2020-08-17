<!DOCTYPE html>
<html>
<head>
    <title>Druga sezona</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="stil.css">
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="DataTables-1.10.4/media/js/jquery.dataTables.min.js"></script>
    <script src="jeditable/jquery.jeditable.js"></script>
    <script src="DataTables-1.10.4/extensions/editable/jquery.dataTables.editable.js"></script>
    <link rel="stylesheet" type="text/css" href="DataTables-1.10.4/media/css/jquery.dataTables.min.css">
    <style>
        .row_selected td {
            background-color: #d3d3d3 !important;
        }
    </style>
    <script>
        $(document).ready(function () {
            $(".tabela2").dataTable({
                "language": {
                    "url": "DataTables-1.10.4/i18n/serbian.json"
                }
            }).makeEditable({
                sUpdateURL: "izmeni.php",
                sDeleteURL: "obrisi.php",
                sDeleteHttpMethod: "GET"
            });
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <header>
        <div class="heder">
                <p>RAD SA PODACIMA</p>
            </div>
            <div class="heder">
                <p>TV serija: Gotham</p>
            </div>

        </header>
        <div class="container">
            <div class="left">
                <br>
                <ul>
                <div class="linkovi"><li><a href="epizodePrikazi.php">Sve epizode</a></li></div>
                    <div class="linkovi"> <li><a href="drugaSezona.php">Druga sezona</a></li></div>
                    <div class="linkovi"> <li><a href="index.php">Glumci i saradnici</a></li></div>
                </ul>
            </div>

            <div class="middle">
                <div id="tabela">
                    <?php
                        include "konekcija.php";
                    ?>
                    <table class="tabela2 display" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Naziv epizode</th>
                                <th>Dužina</th>
                                <th>Sezona</th>
                                <th>Tip epizode</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM epizode e JOIN sezona s ON e.sezona = s.idsezona WHERE e.sezona = '2'";
                                if($result = $mysqli->query($sql)) {
                                    while($row = $result->fetch_object()){
                            ?>
                            <tr id="<?php echo $row->idepizode;?>">
                                <td><?php echo $row->idepizode;?></td>
                                <td><?php echo $row->naziv;?></td>
                                <td><?php echo $row->duzina;?></td>
                                <td><?php echo $row->sezona;?></td>
                                <td><?php echo $row->tipepizode;?></td>
                            </tr>
                            <?php
                                    }
                                }
                                $mysqli->close();
                            ?>
                        </tbody>
                    </table>
                    <button id="btnDeleteRow">Obriši</button>
                </div>
            </div>
        </div>

        <footer>
            <hr>
            <b> Dejan Čolić 2020 </b>
        </footer>
    </div>
</body>
</html>
