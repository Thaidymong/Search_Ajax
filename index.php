<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Ajax</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="container mt-5 p-3 bg-info text-center text-white">
        <h1>Search Data From DB Using Ajax</h1>
    </div>
    <div class="container mt-4 mp-4">
        <h3>Search Here</h3>
        <input type="text" class="form-control" id="search">
    </div>
    <div class="container mt-4">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gander</th>
                    <th>Poisition</th>
                    <th>Age</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody id="result">

            </tbody>
        </table>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('#search').keyup(function() {
            $.ajax({
                type: 'POST',
                url: 'search.php',
                data: {
                    name: $('#search').val(),
                },
                success: function(data) {
                    $('#result').html(data);
                }
            })
        })
    })

    // $(document).ready(function(){
    //     $('#search').keyup(function(){
    //         $.ajax({
    //             type: 'POST',
    //             url : 'search.php',
    //             data: {
    //                 name : $('#search').val(),
    //             },
    //             success: function(data){
    //                 $('#result').html(data);
    //             }
    //         })
    //     })
    // })
</script>

</html>