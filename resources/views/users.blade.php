<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo config('app.name') ?></title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Created At</th>

            </tr>

        </thead>    
        <tbody>
            <?php foreach($users as $user) : ?>
            <tr>
                <td><?= $users->id ?> </td>
                <td><?= $users->name ?></td>
                <td><?= $users->email ?></td>
                <td><?= $users->phone ?></td>
                <td><?= $users->created_at ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>

    </table>
</body>
</html>