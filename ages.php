<?php
function calculateAge($dateOfBirth) {
    // Create a DateTime object from the date of birth
    $dob = new DateTime($dateOfBirth);
    // Create a DateTime object for the current date
    $today = new DateTime('today');
    
    // Calculate the difference between the current date and the date of birth
    $age = $today->diff($dob);
    
    // Return the age in years
    return $age->y;
}

// Example usage:
$dateOfBirth = '1990-05-15';
echo 'Age: ' . calculateAge($dateOfBirth);
?>

