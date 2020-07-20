<!DOCTYPE html>
<html>
<head>
    <title>Print Invoice</title>
    <style>
        .page
        {           
            padding:2cm;
        }
        table
        {
            border-spacing:0;
            border-collapse: collapse; 
            width:100%;
        }

        table td, table th
        {
            border: 1px solid #ccc;
        }
		
		table th
        {
            background-color:red;
        }
    </style>
</head>
<body>	
    <div class="page">	
        <h1>Rekap KHS</h1>
        <table border="0">
        <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>IPS</th>
                <th>IPK</th>
                
        </tr>
        <?php
        $no = 1;
        foreach($dataProvider->getModels() as $khs){ 
        ?>
        <tr>
                <td><?= $no++ ?></td>
                <td><?= $khs->nim0->id ?></td>
                <td><?= $khs->nim0->name ?></td>
                <td><?= $no++ ?></td>
                <td><?= $khs->ipk ?></td>
                <td><?= $khs->ips ?></td>
        </tr>
        <?php
        }
        ?>
        </table>
    </div>   
</body>
</html>