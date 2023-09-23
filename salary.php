<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <table><form action = "salaryback.php" method = "POST">
    <tr>
        <td>
            How Many Year
            </td>
              <td>
                : <input type = "number" name = "year" />
                  </td>
                    </tr>
     <tr>
        <td>
            Basic Salary First Year
            </td>
              <td>
                : <input type = "number" name = "basic" />
                  </td>
                    </tr>
    <tr>
        <td>
            Allowance First Year 
            </td>
              <td>
                : <input type = "number" name = "allowance" />
                  </td>
                    </tr>
    <tr>
        <td>
            Percent Increase Basic Salary Every Year (%)
            </td>
              <td>
                : <input type = "number" name = "insalary" />
                  </td>
                    </tr>
    <tr>
        <td>
            Percent Increase Allowance Every Year (%)
            </td>
              <td>
                : <input type = "number" name = "iallowance" />
                  </td>
                    </tr>
    </table>
    <input type = "submit" value ="calculate"/>
</form>  


</body>
</html>