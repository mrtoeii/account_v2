@extends('layout')

@section('title')
    Accoounting
@endsection

@push('script')
    <script src="{{asset('js/user/account.js')}}"></script>
    <script src="{{asset('datepicker/bootstrap-datepicker.min.js')}}"></script>
    
    {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script> --}}
@endpush

@push('style')
    <link rel="stylesheet" href="{{asset('css/user/account.css')}}">
    <link rel="stylesheet" href="{{asset('datepicker/bootstrap-datepicker3.min.css')}}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" /> --}}
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 header-table">
                บัญชีรายรับรายจ่าย
            </div>
            <div class="col-md-2 div-btn-add-account">
                <button class="btn btn-info btn-add-account" type="button" id="btn-add"> + Add</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 div-table-account">
                <table class="table table-account">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

  <!-- Modal -->
<form method="post" id="form">
    

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="myModal-body">
          ...
        </div>
        <div class="modal-footer">
            <button type="sumbit" class="btn btn-primary" id="btn-action">Save changes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
        </div>
      </div>
    </div>
  </div>
</form>