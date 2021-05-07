<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/jquery@2.2.4/dist/jquery.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" />
    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">


        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>Autocomplete from database</h4>
                    <hr>

                    <div class="form-group">
                        <label>Product</label>
                        <input id="product_id" name="product_id" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Name</label>
                        <input id="name" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Buy Rate</label>
                        <input id="buy_rate" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Sale Price</label>
                        <input id="sale_price" type="text" class="form-control">
                    </div>

                </div>
            </div>
        </div>

    </div>
    <script>
        // CSRF Token
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
    $(document).ready(function(){

      $( "#name" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url:"{{route('get.data')}}",
            type: 'post',
            dataType: "json",
            data: {
            //    _token: CSRF_TOKEN,
               search: request.term
            },
            success: function( data ) {
                console.log(data);
               response( data );
            }
          });
        },
        select: function (event, ui) {
           // Set selection
           $('#employee_search').val(ui.item.label); // display the selected text
           $('#employeeid').val(ui.item.value); // save selected id to input
           return false;
        }
      });

    });
//         $(function () {
//            $('#product_id').autocomplete({
//                source:function(request,response){

//                    $.getJSON('?term='+request.term,function(data){
//                        console.log(data);
//                         var array = $.map(data,function(row){
//                             return {
//                                 value:row.id,
//                                 label:row.name,
//                                 name:row.name,
//                                 buy_rate:row.buy_rate,
//                                 sale_price:row.sale_price
//                             }
//                         })

//                         response($.ui.autocomplete.filter(array,request.term));
//                    })
//                },
//                minLength:1,
//                delay:500,
//                select:function(event,ui){
//                    $('#name').val(ui.item.name)
//                    $('#buy_rate').val(ui.item.buy_rate)
//                    $('#sale_price').val(ui.item.sale_price)
//                }
//            })
// })
    </script>
</body>

</html>
