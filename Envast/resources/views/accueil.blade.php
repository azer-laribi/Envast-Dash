<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>Envast Dashboard</title>
    <link rel="stylesheet" href="style.css">
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <style media="screen">
   *{
margin: 0;
padding: 0;
box-sizing: border-box;
user-select: none;
}
.bg-img{
background: url('https://www.10wallpaper.com/wallpaper/medium/1711/Office_Desk_Keyboard_Art_Cup_Photo_HD_Wallpaper_medium.jpg');
height: 100vh;
background-size: cover;
background-position: center;
}
.bg-img:after{
position: absolute;
content: '';
top: 0;
left: 0;
height: 100%;
width: 100%;
background: rgba(0,0,0,0.7);
}
.content{
position: absolute;
top: 50%;
left: 50%;
z-index: 999;
text-align: center;
padding: 60px 32px;
width: 370px;
transform: translate(-50%,-50%);
background: rgba(255,255,255,0.04);
box-shadow: -1px 4px 28px 0px rgba(0,0,0,0.75);
}
.content header{
color: white;
font-size: 33px;
font-weight: 600;
margin: 0 0 35px 0;
font-family: 'Montserrat',sans-serif;
}
.field{
position: relative;
height: 45px;
width: 100%;
display: flex;
background: rgba(255,255,255,0.94);
}
.field span{
color: #222;
width: 40px;
line-height: 45px;
}
.field input{
height: 100%;
width: 100%;
background: transparent;
border: none;
outline: none;
color: #222;
font-size: 16px;
font-family: 'Poppins',sans-serif;
}
.space{
margin-top: 16px;
}
.show{
position: absolute;
right: 13px;
font-size: 13px;
font-weight: 700;
color: #222;
display: none;
cursor: pointer;
font-family: 'Montserrat',sans-serif;
}
.form-control:valid ~ .show{
display: block;
}
.pass{
text-align: left;
margin: 10px 0;
}
.pass a{
color: white;
text-decoration: none;
font-family: 'Poppins',sans-serif;
}
.pass:hover a{
text-decoration: underline;
}
#remember{
  color: white;
  text-decoration: none;
  font-family: 'Poppins',sans-serif;
}
.field input[type="submit"]{

background: #3498db;
border: 1px solid #2691d9;
color: white;
font-size: 18px;
letter-spacing: 1px;
font-weight: 600;
cursor: pointer;
font-family: 'Montserrat',sans-serif;
}
.field input[type="submit"]:hover{
background: #2691d9;
}
.login{
color: white;
margin: 20px 0;
font-family: 'Poppins',sans-serif;
}
.links{
display: flex;
cursor: pointer;
color: white;
margin: 0 0 20px 0;
}
.facebook,.instagram{
width: 100%;
height: 45px;
line-height: 45px;
margin-left: 10px;
}
.facebook{
margin-left: 0;
background: #4267B2;
border: 1px solid #3e61a8;
}
.instagram{
background: #E1306C;
border: 1px solid #df2060;
}
.facebook:hover{
background: #3e61a8;
}
.instagram:hover{
background: #df2060;
}
.links i{
font-size: 17px;
}
i span{
margin-left: 8px;
font-weight: 500;
letter-spacing: 1px;
font-size: 16px;
font-family: 'Poppins',sans-serif;
}
.signup{
font-size: 15px;
color: white;
font-family: 'Poppins',sans-serif;
}
.signup a{
color: #3498db;
text-decoration: none;
}
.signup a:hover{
text-decoration: underline;
}

   </style>
  </head>
  <body>
    <div class="bg-img">
      <div class="content">
        <header>ENVAST Dashboard</header>
        <form   method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
          <div class="field form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <span class="fa fa-user"></span>
            <input id="email" type="email"  name="email" value="{{ old('email') }}" required placeholder="Email">
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
<div class="field space form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <span class="fa fa-lock"></span>
            <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <span class="show">SHOW</span>
          </div>
          <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                  <div class="checkbox">
                      <label>
                          <input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                      </label>
                  </div>
              </div>
          </div>
<div class="pass">
            <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Password?</a>
          </div>
<div class="field">
          <input type="submit" value="LOGIN">
          </div>
</form>
<div class="signup">
Don't have account?
          <a href="{{ url('/register') }}">Signup Now</a>
        </div>
</div>
</div>
<script>
      const pass_field = document.querySelector('.form-control');
      const showBtn = document.querySelector('.show');
      showBtn.addEventListener('click', function(){
       if(pass_field.type === "password"){
         pass_field.type = "text";
         showBtn.textContent = "HIDE";
         showBtn.style.color = "#3498db";
       }else{
         pass_field.type = "password";
         showBtn.textContent = "SHOW";
         showBtn.style.color = "#222";
       }
      });
    </script>
  </body>
</html>
