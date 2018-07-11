<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2>Sistema de Usuário</h2><br/>
      <form method="post" action="{{url('users')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Username">Username:</label>
            <input type="text" class="form-control" name="username">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="password">Password:</label>
              <input type="text" class="form-control" name="password">
            </div>
          </div>

          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <lable>Role</lable>
                <select name="role">
                  <option value="Admin">Admin</option>
                  <option value="User">User</option>  
                </select>
            </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="name">Nome:</label>
              <input type="text" class="form-control" name="name">
            </div>
          </div>

          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <lable>Gênero</lable>
                <select name="gender">
                  <option value="Female">Female</option>
                  <option value="Male">Male</option>  
                </select>
            </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="phone">Telefone:</label>
              <input type="text" class="form-control" name="phone">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <input type="file" name="filename">    
         </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="birthday">Data de Aniversário:</label>
              <input type="text" class="form-control" name="birthday">
            </div>
          </div>

          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email">
            </div>
          </div>

          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="zip_code">CEP:</label>
              <input type="text" class="form-control" name="zip_code">
            </div>
          </div>

          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="city">Cidade:</label>
              <input type="text" class="form-control" name="city">
            </div>
          </div>

          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="state">Estado:</label>
              <input type="text" class="form-control" name="state">
            </div>
          </div>

          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="street">Rua:</label>
              <input type="text" class="form-control" name="street">
            </div>
          </div>

          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="cell_phone">Celular:</label>
              <input type="text" class="form-control" name="cell_phone">
            </div>
          </div>

          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="complement">Complemento:</label>
              <input type="text" class="form-control" name="complement">
            </div>
          </div>

          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="degree_of_education">Grau de Educação:</label>
              <input type="text" class="form-control" name="degree_of_education">
            </div>
          </div>

          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="educational_institution">Instituição Educacional:</label>
              <input type="text" class="form-control" name="educational_institution">
            </div>
          </div>

          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="company">Empresa:</label>
              <input type="text" class="form-control" name="company">
            </div>
          </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
    <script type="text/javascript">  
        $('#datepicker').datepicker({ 
            autoclose: true,   
            format: 'dd-mm-yyyy'  
         });  
    </script>
  </body>
</html>