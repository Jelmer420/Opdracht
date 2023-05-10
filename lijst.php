<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Table ding</title>
    </head>
    <body>
        <table id="myTable" class="display table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Postal/Zip</th>
                <th>Email</th>
                <th>Country</th>
            </tr>
            </thead>
            <tbody></tbody>
        </table>

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script>
    $(document).ready(function() {
    $.ajax({
        url: 'get_data.php', 
        dataType: 'json',
        success: function(data) {
            $('#myTable').DataTable({
                data: data,
                columns: [
                    { data: 'id' },
                    { data: 'name' },
                    { data: 'address' },
                    { data: 'postalZip' },
                    { data: 'email' },
                    { data: 'country' }
                ]
            });
        }
    });
});

        </script>
        
    </body>
</html>