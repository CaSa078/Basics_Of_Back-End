<?php
// Controleer of het formulier is ingediend
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Controleer of alle verplichte velden zijn ingevuld
    $required_fields = array("name", "email", "password", "country", "birthdate");
    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            die("Error: All fields are required");
        }
    }

    // Bereid de data voor op opslag in JSON-indeling
    $data = array(
        "name" => $_POST["name"],
        "email" => $_POST["email"],
        "password" => $_POST["password"],
        "country" => $_POST["country"],
        "driver_license" => isset($_POST["driver_license"]) ? "Yes" : "No",
        "birthdate" => $_POST["birthdate"]
    );

    // Converteer naar JSON-formaat
    $json_data = json_encode($data);

    // Toon JSON-data op het scherm
    echo "<pre>" . $json_data . "</pre>";

    // Schrijf JSON-data naar een lokaal bestand
    file_put_contents("data.json", $json_data);
}
?>
