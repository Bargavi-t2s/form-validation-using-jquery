
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <title>Hello, world!</title>
      <style>
        .red
        {
          color: #ff0000;
        }
      </style>

   </head>
   <body style="align-content:center;">
    <div class="container" style="align-content: center;">
      <div class="row" style="align-content:center;">
         <div class="col-sm-6" style=" background-color: pink;">
               <div class="jumbotron" >
                     <form method="post" action="test_form.php" id="first_form" style="align-content: center;">
                        <div class="form-group row">
                           <div class="col-sm-1"></div>
                           <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                           <div class="col-sm-4">
                              <input type="text" class="form-control" placeholder="eg: Lydia" name="fname" id="fname">
                           </div><span class="red">*</span>
                           <div class="col-sm-4">
                              <input type="text" class="form-control" placeholder="eg: Martin" name="lname" id="lname">
                           </div> <span class="red">*</span>
                           <div class="col-sm-1"></div>
                        </div>
                        <div class="form-group row">
                           <div class="col-sm-1"></div>
                           <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                           <div class="col-sm-6">
                              <input type="email" class="form-control"  placeholder="example@gmail.com" name="email" id="email">
                           </div> <span class="red">*</span>
                           <div class="col-sm-1"></div>
                        </div>
                        <div class="form-group row">
                           <div class="col-sm-1"></div>
                           <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Age</label>
                           <div class="col-sm-2">
                              <select class="form-control pl-2" id="age" name="age">
                                 <option></option>
                                 <option>19</option>
                                 <option>20</option>
                                 <option>21</option>
                                 <option>22</option>
                                 <option>23</option>
                                 <option>24</option>
                                 <option>25</option>
                                 <option>26</option>
                                 <option>27</option>
                              </select>
                           </div><span class="red">*</span>
                           <div class="col-sm-1" id="space"> </div>
                           <div class="col-sm-1"></div>
                        </div>
                        <div class="form-group row">
                           <div class="col-sm-1"></div>
                           <label class="col-form-label col-sm-2 pt-0">Nationality</label>
                           <div class="col-sm-4">
                              <fieldset>
                                 <div class="form-check">
                                    <input class="form-check-input col-sm-1" type="radio"  name="r"  id="r1" >
                                    <label class="form-check-label pr-4" for="gridRadios1">
                                    Indian
                                    </label>
                                    <input class="form-check-input col-sm-1" type="radio" name="r" id="r1">
                                    <label class="form-check-label" for="gridRadios2">
                                    Other
                                    </label>
                                 </div> <span class="red">*</span>

                           </div>
                           <div class="col-sm-1" id="space1"> </div>
                           <div class="col-sm-1"></div>
                           </fieldset>
                        </div>
                        <div class="form-group row">
                           <div class="col-sm-3"></div>
                           <div class="col-sm-2">
                              <button type="submit" class="btn btn-primary " name="submit" id="submit">Submit</button>
                           </div>
                           <div class="col-sm-1">
                           </div>
                           <div class="col-sm-2">
                             <button type="reset" class="btn btn-primary " id ="reset" name="reset">Cancel</button>
                           </div>
                        </div>
                     </form>
               </div>
         </div>
         <div class="col-sm-6" style="align-content: center;background-color: lightblue;">
               <div class="jumbotron" >
                     <div class="row" style="height: 260px;">
                        <div class="table-responsive-md">
                         <table class="table table-hover">
  <thead>
    <tr>
      <th ><div class="col-sm-3">Name</div></th>
      <th ><div class="col-sm-3">Email</div></th>
      <th ><div class="col-sm-3">Age</div></th>
      <th ><div class="col-sm-3">Nationality</div></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><div class="col-sm-3">Mathew</div></td>
      <td><div class="col-sm-3">j@gmail.com</div></td>
      <td><div class="col-sm-3">12</div></td>
      <td><div class="col-sm-3">other</td>
    </tr>
    <tr>
      <td><div class="col-sm-3">Mathew</div></td>
      <td><div class="col-sm-3">j@gmail.com</div></td>
      <td><div class="col-sm-3">12</div></td>
      <td><div class="col-sm-3">other</td>

    </tr>
    <tr>
      <td><div class="col-sm-3">Mathew</div></td>
      <td><div class="col-sm-3">j@gmail.com</div></td>
      <td><div class="col-sm-3">12</div></td>
      <td><div class="col-sm-3">other</td>
    </tr>
  </tbody>
</table>
                        </div>
                     </div>
               </div>
         </div>
      </div>
    </div>
   </body>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script type="text/javascript">
                $(document).ready(function() {
            $('#fname').keyup(function ()
            {
               var $th = $(this);
    $th.val( $th.val().replace(/[0-9]+$/g, function(str) { alert('You typed " ' + str + ' ".\n\nPlease use only letters.'); return '';  }))});

            $('#lname').keyup(function ()
            {
               var $th = $(this);
    $th.val( $th.val().replace(/[0-9]+$/g, function(str) { alert('You typed " ' + str + ' ".\n\nPlease use only letters.'); return '';  }))});

           $('#first_form').submit(function(e) {
            var eml=/^[w-.+]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/;
             if(($('#fname').val()=='')||($('#lname').val()=='')||($('#email').val()=='')||($('#age').val()=='')||($('#r:checked').val()=='false'))
             {
                alert("All field is required");
                return false;
             }
             else if(!eml.test($('#email')))
             {
              alert("Invalid email address");
             return false;
             }
             else
             {
              return true;
             }
    });
             
         
              $("#reset").click(function(){
                 $("#first_form").trigger("reset");
        
             });
         
         });

      </script>
</html>
