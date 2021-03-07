<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<style>
  .container{
    width: 50rem;
  }
  h1{
    text-align: center;
  }
  .btn{
    background:#7a1d8b;
    color: #FFF
  }
</style>

<body>
  <dir class="container" >
    <h1>LOGO</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
      <form id="form-data" method="POST" data-route="{{route('postData')}}">
        @csrf
        <div class="form-group">
          <label for="">Name: </label>
          <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
          <label for="">Mobile: </label>
          <input type="number" class="form-control" name="mobile">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address: </label>
          <input type="email" class="form-control" name="email">
        </div>
        <button type="submit" class="btn form-control" data-toggle="modal" data-target="#exampleModal">Submit</button>
      </form>
    </dir>


{{-- ************************************** --}}

<dir class="container">
  <!-- Button trigger modal -->
  {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button> --}}
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" >
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" id="exampleModalLabel"></h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" >
          <h5>Please select the services that you are intrested in.</h5><br>
          <div class="row">
            <div class="col-sm">
              @foreach ($services as $serv)
              <button type="button" class="btn box-div col-3">{{$serv->serv_name}}</button>
              @endforeach
            </div>
          </div>
          <button type="button" style="margin-top: 10px" class="btn box-div form-control" data-toggle="modal" data-target="#exampleModal2" data-dismiss="modal">Next</button><br>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  </dir>
  
  <!-- Modal2 -->
  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" >
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" id="exampleModalLabel"></h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" >
          <h5>When do you want to make the order.</h5><br>
          <div class="row">
            <div class="col-sm">
              @foreach ($intrest as $int)
              <button type="button" class="btn box-div col-3">{{$int->intrest_name}}</button>
              @endforeach
            </div>
          </div>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


{{-- ************************************** --}}


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="{{asset('js/post.js')}}"></script>

    </body>
    </html>