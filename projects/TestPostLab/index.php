<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TEST</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="index.js" type="module"></script>
    <script src="Repo.js" type="module"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    <style>
        body{
            background-color:#292929;
        }
        *{
            color: white;
        }
        button{
            border:none;
            border-radius:3vh;
            color: dodgerblue;
            background-color: #0A0A0A;
        }

    </style>
</head>
<body>
    <div class="container-fluid">

        <div class="d-flex flex-column align-items-center justify-content-center py-5">
            <form>
                <p class="h3">Search by Repo or Owner</p>
                    <input type="text" name="repo" id="repo" placeholder="Repository Name" class="p-2" />
                    <hr>
                    <input type="text" name="owner" id="owner" placeholder="Owner Name" class="p-2"/>
                    <hr>
                    <button type="submit">search</button>
                <p id="test_id"></p>
            </form>
        </div>
    </div>

</body>
<!--                 <input type="text" name="description" id="description"  placeholder="description" class="p-2"/>
                <hr>
                <input type="text" name="licences" id="licences" placeholder="licences" class="p-2"/>
                <hr>
                <input type="text" name="links" id="links" placeholder="links" class="p-2"/>
                <hr>
                <input type="text" name="tags" id="tags" placeholder="tags" class="p-2"/>
                <hr>
                <input type="text" name="contributors" id="contributors" placeholder="contributors" class="p-2"/>
                <hr>
                <input type="text" name="languages" id="languages" placeholder="languages" class="p-2"/> -->
</html>

