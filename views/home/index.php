<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam voluptatem suscipit quia, modi dolorum nulla eius, ullam rerum ducimus porro tempora asperiores ipsa ipsum aperiam a culpa. At, cupiditate earum?</p>

    
    <ul>
        <?php foreach($users as $user): ?>
            <li><?php $user->email ?></li>
        <?php endforeach ?>
    </ul>

</body>
</html>