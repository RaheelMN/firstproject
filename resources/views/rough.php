
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> 

</head>
<body>
    <table class = "table table-bordered table-striped">
        <thead>
            <tr>
                <th> S.No           </th>
                <th>   Name         </th>
                <th>   Age         </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Raheel</td>
                <td>33</td>
            </tr>
            <tr>
                <td>2</td>
                <td>ikram</td>
                <td>22</td>
            </tr>
        </tbody>


    </table>

</body>
<script>

    
    var vname = 'v raheel';
    let lname = 'l raheel';
    const cname = 'c raheel';
    let output = `<li>${vname}</li>`;
    output += `<li>${lname}</li>`;
    output += `<li>${cname}</li>`;
    document.body.innerHTML+=output;
</script>
<script>


</script>
</html>