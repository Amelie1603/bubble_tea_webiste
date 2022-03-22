<html>  
<body>
  <div class="login-wrapper">
    <h1>login</h1>
    <form action="" id="login" class="login" method="POST">
      @csrf
      <div>
        <label for="mail">e-mail</label>
        <input type="mail" name="mail" id="mail" placeholder="Enter your e-mail" required>
      </div>
      <div>
        <label for="password">password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password" required>
      </div>
      <button type="submit">login</button>
    </form>
  </div>
</body>
<style>
body {
  background-color: #f8cece;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}
h1 {
  text-transform: uppercase;
  font-size: 32px;
}
.login-wrapper {
  display: flex;
  flex-direction: column;
  background-color: #fff;
  width: 50%;
  margin: 0 auto;
  align-items: center;
}
.login > div {
  display: flex;
  flex-direction: column;
  gap: 20px;
}
.login label {
  font-size: 24px;
  text-transform: capitalize;
}
.login input {
  border: none;
  border-bottom: 1px solid #acacac;
  font-size: 20px;
  outline: none;
  padding: 10px 0;
}
.login {
  width: 40vw;
  padding: 24px;
  display: flex;
  flex-direction: column;
  gap: 30px;
}
.login button {
  border: 1px solid #00000069;
  cursor: pointer;
  border-radius: 30px;
  padding: 10px 40px;
  font-size: 20px;
  align-self: center;
  transition: 0.2s ease;
  background-color: #ffe4e4;
  outline: none;
}
.login button:hover {
  color: #eb9c9c;
  transition: 0.2s ease;
  background-color: #fff;
}
</style>

</html>