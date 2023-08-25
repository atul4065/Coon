<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coon Reset Password</title>
    <style>

    </style>
</head>
<body>
  <h1>Hello User!</h1><br>
  <p style="marhin-top:5px;">This email is system generated and shared to you on the bassis beacuase you need to reset password.</p><br>
  <p style="margin-top:12px; color:rgb(236, 185, 89);font-size:18px;">Please click on <b style="color:rgb(129, 63, 236);">Reset Password</b> Link...</p><br>
    <div style="text-algn:center; font-style:italic; font-size:18px;color:gray">Coon</div><br>
  <div style="margin-top:15px;">
   <a href="{{ route('coon-admin-reset-view', $token) }}" style="text-decoration:none; width:30px;height:15px;color:rgb(216, 52, 23);">Reset Password</a>
  </div>
<br><br>
  <p style="margin-top:10px;">This password reset link will expire in 60 minutes.</p><br><br><br>
  <p style="margin-top:10px;">
If you're having trouble clicking the "Reset Password" button, copy and paste the URL below into your web browser
<a href="{{ route('coon-admin-reset-view', $token) }}">{{ route('coon-admin-reset-view', $token) }}</a>
</p>

</body>
</html>