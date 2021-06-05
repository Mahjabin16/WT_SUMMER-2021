<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <h1>Registration form</h1>
    <hr>
    <form action="#">
        <table>
            <tr>
                <td>Full name:</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password"></td>
            </tr>
            <tr>
                <td>Comments:</td>
                <td><textarea  cols="30" rows="5"></textarea></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" id="male" name="selection">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="selection">
                    <label for="female">Female</label>
                    <input type="radio" id="Others" name="selection">
                    <label for="Others">Others</label>
                </td>
            </tr>
            <tr>
                <td>Please choose a hobby:</td>
                <td>
                    <input type="checkbox" id="Singing">
                    <label for="Singing">Singing</label>
                    <input type="checkbox" id="Dancing">
                    <label for="Dancing">Dancing</label>
                    <input type="checkbox" id="Reading">
                    <label for="Reading">Reading</label>
                </td>
            </tr>
            <tr>
                <td> <label for="file">Please choose a file</label></td>
               <td><input type="file" id="file"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>