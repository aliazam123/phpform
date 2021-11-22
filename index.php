<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>FOLLOWERS</title>
</head>
  
<body>
    <h1>To Follow M.S Visveswaraya</h1>
    <form action="insert1.php" method="POST">
        <table>
            <tr>
                <td>Name :</td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Gender :</td>
                <td>
                    Male<input type="radio" name="gender" value="Male" required>
                    Female<input type="radio" name="gender" value="Female" required>
                </td>
            </tr>
            <tr>
                <td>Email :</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Phone No</td>
                <td>
                    <select name="phonecode" required>
                        <option selected hidden value="">Select Code</option>
                        <option value="+91">+91</option>
                        <option value="+1">+1</option>
                        <option value="+977">977</option>
                    </select>
                    <input type="phone" name="phone" required>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
  
</html>