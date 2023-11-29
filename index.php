<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill Calculator</title>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="mt-3 mb-4">Electricity Bill Calculator</h2>
    <form id="electricityForm">
        <div class="form-group">
            <label for="units">Enter the number of units consumed:</label>
            <input type="number" class="form-control" id="units" name="units" required>
        </div>
        <button type="button" class="btn btn-primary" id="calculateBtn">Calculate Bill</button>
    </form>

    <div id="result" class="mt-4"></div>
</div>



<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function () {
        $("#calculateBtn").click(function () {
           
            var units = $("#units").val();
            $.ajax({
                type: "POST",
                url: "calculate_bill.php",
                data: { units: units },
                success: function (response) {
                    $("#result").html(response);
                }
            });
        });
    });
</script>


</body>
</html>
