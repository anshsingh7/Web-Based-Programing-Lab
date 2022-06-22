<!DOCTYPE html>
<html lang="en">

<head>
    <title>Oops Concept</title>
</head>

<body bgcolor="powderblue">
    <?php
    class emp
    {
        public $name, $sal;
        function info($name, $sal)
        {
            $this->name = $name;
            $this->sal = $sal;
            return;
        }
    }
    $emp = new emp();
    $emp->info("Ansh Singh", 30000);
    echo "Employee1: $emp->name <br>";
    echo "Salary: $emp->sal <br><br>";

    $emp->info("Abhishek Singh", 35000);
    echo "Employee2: $emp->name <br>";
    echo "Salary: $emp->sal <br>";
    ?>
</body>

</html>