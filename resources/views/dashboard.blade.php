@extends('layouts.app')
@section('content')
    <div class="container">
      <div class="d-flex bd-highlight mb-3">
        <div class="me-auto p-2 bd-highlight"><h2>Users</div>
        <div class="p-2 bd-highlight">
          <button type="button" class="btn btn-secondary" onclick="showUserCreateBox()">Create</button>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Avatar</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Username</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody id="mytable">
            <tr>
              <th scope="row" colspan="5">Loading...</th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
@endsection
