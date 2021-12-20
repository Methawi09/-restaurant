<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        
    <title>carat land</title>
    <style>
        .font{
            font-family: 'PT Sans', sans-serif;
            font-size: 110%;
        }
    </style>
</head>

<body class="font" >
    <br>
    
    <h4 style="text-align: center;">
        </span>CARAT LAND </h4>
    <br>
    <!--แบฟรอม-->
    <div class="container" style="margin-left: 10%;">
        <form class="row">
            <div class="col-1">
                <input type="hidden" class="form-control" id="Rerow">
            </div>
            <div class="col-3">
                <input type="text" class="form-control" placeholder="Id Food" id="IDFood">
            </div>
            <div class="col-3">
                <input type="text" class="form-control" placeholder="Name Food" id="NameFood">
            </div>
            <div class="col-2">
                <input type="number" class="form-control" placeholder="Price Food" id="PriceFood">
            </div>
            <div class="col-1" >
                <button type="button" class="btn btn-primary " id='btnAdd' style="width: 120%; height: 97%; ">
                    <svg
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg> Add</button>
            </div>
            <div >
                <button type="button" class="btn btn-info" id='btnUp'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                    </svg> Up</button>
            </div>
            <div style="margin-right: 2%;">
                <button type="button" class="btn btn-danger" id='btnClear'>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path
                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                        <path fill-rule="evenodd"
                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                    </svg>Clear</button>
            </div>


        </form>
        <br>
    </div>
    <div class="container">
        <table class="table table-hover" id="TableFood" style="width: 85%; margin-left: 6%;">
            <thead>
                <tr>
                    <th scope="col">ID Food</th>
                    <th scope="col">Name Food</th>
                    <th scope="col">Price Food</th>

                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>

    </div>
</body>
<script>
    $(function () {
        $('#btnAdd').on('click', function () {
            var IDFood, NameFood, PriceFood;
            IDFood = $("#IDFood").val();
            NameFood = $("#NameFood").val();
            PriceFood = $("#PriceFood").val();
            var edit = "<a class='edit' href='JavaScript:void(0);' >Edit</a>";
            var del = "<a class='delete' href='JavaScript:void(0);'>Delete</a>";
            if (IDFood == "" || NameFood == "" || PriceFood == " ") {
                alert("กรุณากรอกข้อมูลให้ครบค่ะ");
            } else {
                var table = "<tr><td>" + IDFood + "</td><td>" + NameFood + "</td><td>" + PriceFood + "</td><td>" + edit + "</td><td>" + del + "</td></tr>";
                $("#TableFood").append(table);
            }
            IDFood = $("#IDFood").val("");
            NameFood = $("#NameFood").val("");
            PriceFood = $("#PriceFood").val("");
            Clear();
        });
        $('#btnUp').on('click', function () {
            var IDFood, NameFood, PriceFood;
            IDFood = $("#IDFood").val();
            NameFood = $("#NameFood").val();
            PriceFood = $("#PriceFood").val();
            $('#TableFood tbody tr').eq($('#Rerow').val()).find('td').eq(0).html(IDFood);
            $('#TableFood tbody tr').eq($('#Rerow').val()).find('td').eq(1).html(NameFood);
            $('#TableFood tbody tr').eq($('#Rerow').val()).find('td').eq(2).html(PriceFood);
            $('#btnAdd').show();
            $('#btnUp').hide();
            Clear();
        });
        $("#TableFood").on("click", ".delete", function (e) {
            if (confirm("ยืนยันที่จะการลบรายการอาหาร")) {
                $(this).closest('tr').remove();
            } else {
                e.preventDefault();
            }
        });
        $('#btnClear').on('click', function () {
            Clear();
        });
        $("#TableFood").on("click", ".edit", function (e) {
            var row = $(this).closest('tr');
            $('#Rerow').val($(row).index());
            var td = $(row).find("td");
            $('#IDFood').val($(td).eq(0).html());
            $('#NameFood').val($(td).eq(1).html());
            $('#PriceFood').val($(td).eq(2).html());
            $('#btnAdd').hide();
            $('#btnUp').show();
        });



    });
    function Clear(){
        $("#IDFood").val("");
        $("#NameFood").val("");
        $("#PriceFood").val("");
        $("#Rerow").val("");
    }

</script>

</html>
