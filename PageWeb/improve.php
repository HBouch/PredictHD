!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylePred.css"/>
    <title>Improving The Model</title>
</head>
<body>
<div id="blockpage">
    <h1 class="titre"> Improving The Model </h1>
    <nav>
        <p id="selected"><a href="Predict.php"> Prediction </a></p>
        <p><a href="improve.php"> Help Us </a></p>
        <p><a href=""> Admin </a></p>
    </nav>
    <section>
        <form method="post" action="Predict.php" class="input2">
            <span> Gender </span> <br>
            <input type="radio" name="genre" value="1" id="M" checked ?> <label for="M">Man</label>
            <input type="radio" name="genre" value="0" id="F" /> <label for="F">Woman</label><br> <br>

            <span> Age </span><br>
            <input type="number" name="Age" id="Age" required/> <br> <br>

            <span> Education </span><br>
            <input type="number" name="Edu" id="Edu" required/> <br> <br>

            <span> Current smoker? </span><br>
            <input type="radio" name="CurSmo" value="1"  checked ?> <label for="M">Yes</label>
            <input type="radio" name="CurSmo" value="0"  /> <label for="F">No</label><br> <br>

            <span> Number of cigarets per day </span><br>
            <input type="number" name="NumCig" id="NumCig" required/> <br> <br>

            <span> Blood pressure medication? </span><br>
            <input type="radio" name="BPmed" value="1" checked ?> <label for="M">Yes</label>
            <input type="radio" name="BPmed" value="0" /> <label for="F">No</label><br> <br>

            <span> Prevalent Stroke? </span><br>
            <input type="radio" name="PrevStr" value="1" checked ?> <label for="M">Yes</label>
            <input type="radio" name="PrevStr" value="0" /> <label for="F">No</label><br> <br>

            <span> Prevalent Hypertensive? </span><br>
            <input type="radio" name="PrevHyp" value="1" checked ?> <label for="M">Yes</label>
            <input type="radio" name="PrevHyp" value="0" /> <label for="F">No</label><br> <br>

            <span> Diabetes? </span><br>
            <input type="radio" name="Diab" value="1" checked ?> <label for="M">Yes</label>
            <input type="radio" name="Diab" value="0" /> <label for="F">No</label><br> <br>

            <span> Total Cholesterol </span><br>
            <input type="number" name="TotChol" id="TotChol" required/> <br> <br>

            <span> Body Mass Index </span><br>
            <input type="number" name="BMI"  required/> <br> <br>

            <span> Heart Rate </span><br>
            <input type="number" name="heartR"  required/> <br> <br>

            <span> Systholic Blood Pressure </span><br>
            <input type="number" name="SysBP" id="SysBP" required/> <br> <br>

            <span> Glicemia </span><br>
            <input type="number" name="Glic" id="Glic" required/> <br> <br>

            <span> Ten Year CHD? </span><br>
            <input type="radio" name="CHD" value="1" checked ?> <label for="M">Yes</label>
            <input type="radio" name="CHD" value="0" /> <label for="F">No</label><br>

            <input id="env" type="submit" value="Send" />
        </form>
    </section>
    <footer>
        <p> by Hamza Boucherouite & Carl Tali</p>
    </footer>
</div>
</body>
</html>