<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Fragen selbst erstellen und bearbeiten</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
 
 <style>
   .container{
    padding: 0.5%;
   } 
</style>
</head>
<body>
 
<div class="container">
    <h2 style="margin-top: 12px;" class="alert alert-success">Erstelle eigene Fragen für das Quiz</h2><br>
    <div class="row">
        <div class="col-12">
          <table class="table table-bordered" id="">
           <thead>
              <tr>
                 <th>Id</th>
                <th>Frage-Text</th>
                 <th>Antwort 1</th>
                 <th>Antwort 2</th>
                 <th>Antwort 3</th>
                 <th>Antwort 4</th>
                 <td colspan="2">Action</td>
              </tr>
           </thead>
           <tbody id="users-crud">
              @foreach($users as $u_info)
              <tr id="user_id_{{ $u_info->id }}">
                 <td>{{ $u_info->id  }}</td>
                 <td>{{ $u_info->name }}</td>
                 <td>{{ $u_info->email }}</td>
                 <td><a href="javascript:void(0)" id="show-user" data-id="{{ $u_info->id }}" class="btn btn-info">Show</a></td>
              </tr>
              @endforeach
           </tbody>
          </table>
          {{ $users->links() }}
       </div> 
    </div>
</div>

<div class="modal fade" id="ajax-modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="userShowModal"></h4>
        </div>
        <div class="modal-body">
            <form id="userForm" name="userForm" class="form-horizontal">
               <input type="hidden" name="user_id" id="user_id">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" maxlength="50" required="">
                    </div>
                </div>
 
                <div class="form-group">
                    <label class="col-sm-2 control-label">Antworten</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="answer1" name="answer1" placeholder="Antwort 1" value="" required="">
                    </div>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="answer2" name="answer2" placeholder="Antwort 2" value="" required="">
                </div>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="answer3" name="answer3" placeholder="Antwort 3" value="" required="">
                </div>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="answer4" name="answer4" placeholder="Antwort 4" value="" required="">
            </form>
        </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
 
   /* Anzeigen, wenn ausgewählt*/
    $('body').on('click', '#show-user', function () {
      var user_id = $(this).data('id');
      $.get('ajax-crud/' + user_id +'/edit', function (data) {
         $('#userShowModal').html("User Details");
          $('#ajax-modal').modal('show');
          $('#question_id').val(data.id);
          $('#question_text').val(data.question_text);
          $('#answer1').val(data.answer1);
         $('#answer2').val(data.answer2);
          $('#answer3').val(data.answer3);
          $('#answer4').val(data.answer4);
          $('#correct_answer').val(data.correct_answer);
            
      })
   });
  });  
</script>
 
</body>
</html>