<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Sign up confirmation link</title>
</head>
<body>
  <h1>Thanks for your registration</h1>

  <p>
    Please click on the following activation link：
    <a href="{{ route('confirm_email', $user->activation_token) }}">
      {{ route('confirm_email', $user->activation_token) }}
    </a>
  </p>

  <p>
  If this is not your action, please ignore this email.
  </p>
</body>
</html>
