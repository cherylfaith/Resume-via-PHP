<?PHP
    $name = "CHERYL FAITH FALDAS";
    $address = "Piña, Buenavista, Guimaras";
    $zip_code = 5044;
    $contact_no = 9207087340;
    $email = "cherylfaithfaldas1128@gmail.com";
    $DOB = "January 28, 2004";
    $POB = "Piña, Buenavista, Guimaras";
    $sex = "Female";
    $cs = "Single";
    $Citizenship = "Filipino";
    $Religion = "Roman Catholic";
    $tertiary = "Guimaras State University - Mosqueda Campus";
    $course = "Bachelor of Science in Information Technology";
    $secondary = "Buenavista National High School";
    $primary = "Piña Elementary School";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resume via PHP</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <div class="cont">
        <img style="width: 100px;" class="open-modal" id="openModal" src="file.png">
        <p>Resume</p>
    </div>
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-body">
            <span class="close" id="closeModal">&times;</span>
             <div class="container">
                <img class="img" src="pic.jpg" alt="Profile Picture">
                <div class="header">
                    <h2><?PHP echo($name); ?></h2>
                    <p><?PHP echo($address); ?> | <?PHP echo($zip_code); ?></p>
                    <p><?PHP echo($contact_no); ?> | <?PHP echo($email); ?></p>
                </div>
                <br><hr>

                <div class="Personal_Background">
                    <h2>PERSONAL BACKGROUND</h2>
                        <?PHP 
                        echo"Date of Birth: ". $DOB. "<br>";
                        echo"Place of Birth: ". $POB. "<br>";                  
                        // calculate age 
                        $birthYear = 2004;    
                        $birthDate = "01-28"; 
                        $currentYear = date("Y");
                        $currentDate = date("m-d"); 
                        $age = $currentYear - $birthYear; 

                        if ($currentDate < $birthDate) {
                            $age--; 
                        }
                        echo "Age: " . $age . "<br>";
                        echo"Sex: ". $sex. "<br>";
                        echo"Civil Status: ". $cs. "<br>";
                        echo"Citizenship: ". $Citizenship. "<br>";
                        echo"Religion: ". $Religion. "<br>";
                        ?>      
                </div>
                <div class="education">
                    <h2>EDUCATIONAL BACKGROUND</h2>
                    <p style="font-size: 19px ;"><b>Tertiary</b></p>
                    <p><?PHP echo($tertiary); ?> | 2022-2026 | Alaguisoc, Jordan, Guimaras </p>
                    <p style="margin-left: 180px;"> <?PHP echo($course); ?></p>
                    <p style="font-size: 19px ;"><b>Secondary</b></p>
                    <p><?PHP echo($secondary); ?> | 2016-2022 | New Poblacion, Buenavista, Guimaras </p>
                    <p style="font-size: 19px ;"><b>Primary</b></p>
                    <p><?PHP echo($primary); ?> | 2009-2016 | Piña, Buenavista, Guimaras </p>
                </div>
                <div class="Skills">
                    <h2>PERSONAL SKILLS</h2>
                    <ul>
                        <li>Can communicate, analyze and stay organized.</li>
                        <li>Keen attention to detail.</li>
                    </ul>
                </div>
                <hr><br>
            </div>
        </div>
    </div>

    <script>

        const modal = document.getElementById("myModal");
        const open_modal = document.getElementById("openModal");
        const close_modal = document.getElementById("closeModal");

        open_modal.onclick = function() {
            modal.style.display = "block";
        }

        close_modal.onclick = function() {
            modal.style.display = "none";
        }
    </script>

</body>
</html>
