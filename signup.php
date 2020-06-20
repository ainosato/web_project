<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="process_signup.php" method="post">
        <p><input type="text" name="id" placeholder="id"/></p>
        <p><input type="text" name="password" placeholder="password"/></p>
        <input type="text" name="email1" placeholder="email"/>
        @ <input type="text" name="email2" placeholder="email2"/> <br>
        <p>남자 <input type="radio" name="sex" value="man"></p>
        <p>여자 <input type="radio" name="sex" value="woman"></p>
        <input type="submit" value="제출">
    </form>
  </body>
</html>
