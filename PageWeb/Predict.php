

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylePred.css"/>
    <title>Predicting heart deseases</title>
</head>
<body>
    <div id="blockpage">
        <h1 class="titre"> Heart Deseases Prediction </h1>
        <nav>
            <p id="selected"><a href="Predict.php"> Prediction </a></p>
            <p><a href="improve.php"> Help Us </a></p>
            <p><a href=""> Admin </a></p>
        </nav>
        <section>
            <div class="label">
                <p> Gender </p>
                <p> Age </p>
                <p> Total Cholesterol </p>
                <p> Number of cigarets per day </p>
                <p> Systholic Blood Pressure </p>
                <p> Glicemia </p>
            </div>

            <?php
            $predict = 0;
            $verif = 0;
            if(isset($_POST['genre']))
            $verif = 1;
            ?>
            <form method="post" action="Predict.php" class="input">
                <input id="decal1" type="radio" name="genre" value="1" id="M" <?php if(($verif==1 && $_POST['genre']==1) || $verif == 0) echo 'checked' ?>/> <label for="M">Man</label>
                <input type="radio" name="genre" value="0" id="F" <?php if($verif==1 && $_POST['genre']==0) echo 'checked' ?> /> <label for="F">Woman</label><br>

                <input id="decal2" type="number" name="Age" id="Age" <?php if($verif==1 ) echo 'value='.$_POST['Age'].'' ?> required/> <br/>

                <input id="decal3" type="number" name="TotChol" id="TotChol" <?php if($verif==1 ) echo 'value="'.$_POST['TotChol'].'"' ?> required/> <br/>

                <input id="decal4" type="number" name="NumCig" id="NumCig" <?php if($verif==1 ) echo 'value="'.$_POST['NumCig'].'"' ?> required/> <br/>

                <input id="decal5" type="number" name="SysBP" id="SysBP" <?php if($verif==1 ) echo 'value="'.$_POST['SysBP'].'"' ?> required/> <br/>

                <input id="decal6" type="number" name="Glic" id="Glic" <?php if($verif==1 ) echo 'value="'.$_POST['Glic'].'"' ?> required/> <br/>

                <input id="env" type="submit" value="Predict" />
            </form>
        </section>

        <?php
        if($verif==1)
        {
            $predict = $_POST['genre']+$_POST['Age']+$_POST['TotChol']+$_POST['NumCig']+$_POST['SysBP']+$_POST['Glic'];
            if($predict >= 500)
            {$result="Positive"; $coul="green";}
            else
            {$result="Negative"; $coul="red";}
            echo '<div class="res">
                         <p class="res1"> Result </p>
                         <p class="res2" style="background-color: '.$coul.';"> '.$result.' </p>
                      </div>';
        }
        ?>

        <footer>
            <p> by Hamza Boucherouite & Carl Tali</p>
        </footer>
    </div>
</body>
</html>