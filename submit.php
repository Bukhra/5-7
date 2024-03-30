<?php



if ($_POST["password"] == $_POST["confirm-password"]) {
    echo "თქვენ წარმატებით დარეგისტრირდით";
}else {
    echo "“პაროლი და მისი
    კონფირმაცია არასწორია";
}