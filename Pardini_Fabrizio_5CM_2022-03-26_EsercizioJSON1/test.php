<label for="pet-select">Choose a pet:</label>

<form method="POST">
<select id="pet-select" name="scelta">
    <option value="">--Please choose an option--</option>
    <option value="dog">Dog</option>
    <option value="cat">Cat</option>
    <option value="hamster">Hamster</option>
    <option value="parrot">Parrot</option>
    <option value="spider">Spider</option>
    <option value="goldfish">Goldfish</option>
</select>
<button>
    asd
</button>
</form>

<?php

    echo $_POST["scelta"];



?>