<html>
    <body>
        <centre>
            <h2>Excel Try</h2>

            <?php
                require_once "Classes/PHPExcel.php";
                $path = "pubs.xlsx";
                $reader = PHPExcel_IOFactory::createReaderForFile($path);
                $excel_Obj = $excelReader->load($path);

                $worksheet = $excel_Obj->getActiveSheet('0');
                echo $worksheet ->getCell('A1')->getValue();

            ?>
        </centre>
    </body>
</html>