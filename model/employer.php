<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class employe
        {
            private int $id;
            private string $lastName;
            private string $firstName;
            private string $email;
            private date $dtn;
            public function __construct($id,$lastName,$firstName,$email,$dtn)
            {
                $this->id=$id;
                $this->lastName=$lastName;
                $this->firstName=$firstName;
                $this->email=$email;
                $this->dtn=$dtn;

            }
            public function getid()
            {
                return id;
            }
            public function getlastName()
            {
                return lastName;
            }
            public function getfirstName()
            {
                return firstName;
            }
            public function getemail()
            {
                return email;
            }
            public function getdtn()
            {
                return dtn;
            }
        }
        $employe= new employe(12255662,"ayadi","dhia","dhiaayadi25@gmail.com",31/05/2003);
        echo $employe->getid();
        echo $employe->getlastName();
        echo $employe->getfirstName();
        echo $employe->getemail();
        echo $employe->getdtn();
    ?>
</body>
</html>
