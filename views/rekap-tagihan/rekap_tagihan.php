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
        <h1>Rekapitulasi Tagihan</h1>
        <table border="0">
        <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Terbayar</th>
                <th>Sisa Tagihan</th>
                <th>Status</th>
        </tr>
        <?php
        $no = 1;
        foreach($dataProvider->getModels() as $tagihan){ 
        ?>
        <tr>
                <td><?= $no++ ?></td>
                <td><?= $tagihan->nim ?></td>
                <td><?= $tagihan->nim0->name ?></td>
                <td><?= $tagihan->terbayar ?></td>
                <td><?= $tagihan->sisa_tagihan ?></td>
                <td><?= $tagihan->idstatus0->name ?></td>
        </tr>
        <?php
        }
        ?>
        </table>
    </div>   
</body>
</html>