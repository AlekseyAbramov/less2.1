<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Телефонная книжка</title>
    </head>
    <body>
        <?php 
            $file = file_get_contents(__DIR__.'/phonebook.json');
            $phonebook = json_decode($file, true);
        ?>
        <table>
            <thead>
                <tr>
                    <td>ФИО</td>
                    <td>Адрес</td>
                    <td>Телефон</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($phonebook as $phone) { ?>
                <tr>
                    <td><?php echo $phone['lastName']." ". $phone['firstName']; ?></td>
                    <td><?php echo $phone['address']; ?></td>
                    <td><?php echo $phone['phoneNumber']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>
