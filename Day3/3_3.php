<html>
    <h1>Form Demo</h1>
    <h3>(using POST Method)</h3>
        <table>
        <form action="3_3_1.php" method ="post">
            <tr>
                <td>Name</td>
                <td><input type="text" name=txt1 required></td>
            </tr>

            <tr>
                <td>Age</td>
                <td><input type="number" name="txt2" min="1" max="50"></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="Email" name="txt3" min="10" max="30"></td>
            </tr>

            <tr>
                <td><input type="Submit"></td>
                <td><input type="Reset"></td>
            </tr>
        </table>
        </form>
</html>
