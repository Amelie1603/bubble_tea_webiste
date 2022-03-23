@extends('layouts.default')


@section('content')
  <div class="bodylogin">
    <div class="login-wrapper">
      <h1 class="h1login">login</h1>
      <form id="login" class="login" method="POST">
        @csrf
        <div>
          <label for="mail">e-mail</label>
          <input type="mail" name="mail" id="mail" placeholder="Enter your e-mail" required>
        </div>
        <div>
          <label for="password">password</label>
          <input type="password" name="password" id="password" placeholder="Enter your password" required>
        </div>
        <button class="submit" type="submit">login</button>
      </form>
      <p>
        New Here ?  <form action ="/sign" method="get"><button class="signbutton">Sign up</button></form>
      </p>
    </div>
  </div>
@endsection


