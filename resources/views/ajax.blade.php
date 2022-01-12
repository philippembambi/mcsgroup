<?php
Route::get('ajax-request', 'AjaxController@create');
Route::post('ajax-request', 'AjaxController@store');

class AjaxController extends Controller
{
    public function create()
    {

      return view('ajax-request');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        #create or update your data here

        return response()->json(['success'=>'Ajax request submitted successfully']);
    }
}
?>


<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />

<body>
    <div class="container">
        <h1>Laravel Ajax Post Request Example with <a href="https://codingdriver.com/">Coding Driver</a></h1>
          <span class="success" style="color:green; margin-top:10px; margin-bottom: 10px;"></span>
        <form id="ajaxform">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name" required="">
            </div>

            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email" required="">
            </div>

            <div class="form-group">
                <strong>Mobile Number:</strong>
                <input type="text" name="mobile_number" class="form-control" placeholder="Enter Mobile" required="">
            </div>
            <div class="form-group">
                <strong>Message:</strong>
                <input type="text" name="message" class="form-control" placeholder="Enter Your Message" required="">
            </div>
            <div class="form-group">
                <button class="btn btn-success save-data">Save</button>
            </div>
        </form>
    </div>
</body>

<script>

    $(".save-data").click(function(event){
        event.preventDefault();

        let name = $("input[name=name]").val();
        let email = $("input[name=email]").val();
        let mobile_number = $("input[name=mobile_number]").val();
        let message = $("input[name=message]").val();
        let _token   = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
          url: "/ajax-request",
          type:"POST",
          data:{
            name:name,
            email:email,
            mobile_number:mobile_number,
            message:message,
            _token: _token
          },
          success:function(response){
            console.log(response);
            if(response) {
              $('.success').text(response.success);
              $("#ajaxform")[0].reset();
            }
          },
          error: function(error) {
           console.log(error);
          }
         });
    });
  </script>
