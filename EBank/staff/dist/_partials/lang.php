<?php
// Define the language options
$languages = array(
    'en' => 'English',
    'fr' => 'Français',
    'es' => 'Español'
);

// Check if a language choice has been submitted
if(isset($_POST['language'])) {
    $language = $_POST['language'];
    // Set the language choice in a session variable
    $_SESSION['language'] = $language;
} else {
    // If no language choice has been submitted, use the default language
    $language = 'en';
}

// Use the session variable to display the website in the user's chosen language
switch($language) {
    case 'fr':
        // Code to display the website in French
        break;
    case 'es':
        // Code to display the website in Spanish
        break;
    default:
        // Code to display the website in English (or any other default language)
        break;
}
?>

<!-- Create the language changer button -->
<form method="post">
    <label for="language">Language:</label>
    <select name="language" id="language" onchange="this.form.submit()">
        <?php foreach($languages as $key => $value): ?>
        <option value="<?php echo $key; ?>"<?php if($language == $key) echo ' selected'; ?>><?php echo $value; ?></option>
        <?php endforeach; ?>
    </select>
</form>