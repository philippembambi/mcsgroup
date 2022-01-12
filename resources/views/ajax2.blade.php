<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;

Route::get('ajaxRequest', [AjaxController::class, 'ajaxRequest']);
Route::post('ajaxRequest', [AjaxController::class, 'ajaxRequestPost'])->name('ajaxRequest.post');
?>

<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Log;

class AjaxController extends Controller
{
    /**
     * Create a new controller instance.
     * @return void
     */

    public function ajaxRequest()

    {

        return view('ajaxRequest');

    }

    /**
     * Create a new controller instance.
     * @return void
     */

    public function ajaxRequestPost(Request $request)
    {
        $input = $request->all();
        Log::info($input);
        return response()->json(['success'=>'Got Simple Ajax Request.']);
    }

}
?>

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<meta name="csrf-token" content="{{ csrf_token() }}" />

</head>

<body>



<div class="container">

    <h1>Laravel 8 Ajax Request example</h1>



    <form >



        <div class="form-group">

            <label>Name:</label>

            <input type="text" name="name" class="form-control" placeholder="Name" required="">

        </div>



        <div class="form-group">

            <label>Password:</label>

            <input type="password" name="password" class="form-control" placeholder="Password" required="">

        </div>



        <div class="form-group">

            <strong>Email:</strong>

            <input type="email" name="email" class="form-control" placeholder="Email" required="">

        </div>



        <div class="form-group">

            <button class="btn btn-success btn-submit">Submit</button>

        </div>



    </form>

</div>



</body>

<script type="text/javascript">



$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$(".btn-submit").click(function(e){
    e.preventDefault();

    var name = $("input[name=name]").val();
    var password = $("input[name=password]").val();
    var email = $("input[name=email]").val();

    $.ajax({
       type:'POST',
       url:"{{ route('ajaxRequest.post') }}",
       data:{name:name, password:password, email:email},
       success:function(data){
          alert(data.success);
       }
    });
});

</script>
