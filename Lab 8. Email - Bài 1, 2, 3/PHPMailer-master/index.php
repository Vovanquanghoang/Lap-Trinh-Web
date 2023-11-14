<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="margin: 200px;">
    <form action="mail.php" enctype="multipart/form-data" method="POST">
        <table>
            <body>
                <tr>
                    <td><input type="text" class="form-control" name="email" placeholder="Email"></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" name="tieude" placeholder="ten"></td>
                </tr>
                <tr>
                    <td><textarea name="content" id="editor" class="form-control"></textarea></td>
                </tr>
                <tr>
                    <td><input type="file" class="form-control" name="file"></td>
                </tr>
                <tr>
                    <td><button type="submit" class="btn btn-primary">Gửi</button></td>
                </tr>
            </body>
        </table>
    </form>
</body>

</html>