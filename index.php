<!DOCTYPE html>
<html>
<head>
    <title>Glumci i saradnici</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="stil.css">
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="DataTables-1.10.4/media/js/jquery.dataTables.min.js"></script>
    <script src="jeditable/jquery.jeditable.js"></script>
    <script src="DataTables-1.10.4/extensions/editable/jquery.dataTables.editable.js"></script>
    <link rel="stylesheet" type="text/css" href="DataTables-1.10.4/media/css/jquery.dataTables.min.css">
    <script>
        $(document).ready(function(){
            var table = $('.tabela2').dataTable({
                "columns": [
                  { "title": "ID" },
                  { "title": "Ime" },
                  { "title": "Prezime" },
                  { "title": "Pozicija" }
                ],
                "ajax": "saradnici.json",
                "language": {
                    "url": "DataTables-1.10.4/i18n/serbian.json"
                }
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
                <br>
                <div id="tabela">
                    <table class="tabela2 display" width="100%">
                        <tbody>
                        </tbody>
                    </table>
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