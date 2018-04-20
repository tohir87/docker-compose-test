<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Docker Compose Implementation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <h2>Welcome to Sweden</h2>

    <div class="card" style="width: 18rem;">
      <div class="card-header">
        Browse Our courses
      </div>
      <ul class="list-group list-group-flush">
        <?php $content = file_get_contents('http://course-service');
              $obj = json_decode($content);
              foreach ($obj->courses as $value): ?>
                <li class="list-group-item"><?php echo $value; ?></li>
              <?php endforeach; ?>
      </ul>
    </div>

    </ul>
  </body>
</html>
