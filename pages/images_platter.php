<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bilder + Sprüche</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <h1 align="center">Bilder + Sprüche</h1>
      <h2 align="center">Hochladen</h2>
        <ul class="list-group">
            <li class="list-group-item" align="center">
              <p class="list-text">Bild</p>
              <form>
                <div class="form-group">
                  <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
              </form>
            </li>
            <li class="list-group-item" align="center">
              <p class="list-text">Sprüche</p>
              <input class="form-control form-control-sm" type="text" placeholder="Spruch">
              <a class="btn btn-primary" href="#" role="button">Hinzufügen</a>
            </li>
        </ul>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Datum</th>
              <th scope="col">Benutzername</th>
              <th scope="col">Text</th>
            </tr>
          </thead>
        </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  
  </body>
</html>