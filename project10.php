<?php
    $datas = [
        ["nis" => 12209087,
        "name" => "Lastriantini",
        "rayon" => "Cicurug",
        "major" => "PPLG",
        ],
        ["nis" => 122090358,
        "name" => "Rainy Nur Baeti",
        "rayon" => "Cicurug",
        "major" => "PPLG",
        ],
        ["nis" => 12209789,
        "name" => "Hana Nadhira",
        "rayon" => "Tajur",
        "major" => "PPLG",
        ],
    ]

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h3>Tabel Biodata</h3>
        <table border="2" cellpading="40">
            <tr>
                <th>Nis</th>
                <th>Name</th>
                <th>Rayon</th>
                <th>Major</th>
            </tr>
        
    <?php foreach($datas as $data){?>
        <tr>
            <td>
                <?php echo $data["nis"]?>
                </td>
            <td>
                <?php echo $data["name"]?>
                </td>
            <td>
                <?php echo $data["rayon"]?>
                </td>
            <td>
                <?php echo $data["major"]?>
                </td>
        </tr>
        <?php } ?>
        </table>
    </body>
    </html>