<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Text Fields with Time</title>
</head>
<body>

<form id="myForm">
    <label for="textInput1">Enter Text 1:</label><br>
    <input type="text" id="textInput1"><br>

    <label for="timeDisplay1">Time 1:</label><br>
    <input type="text" id="timeDisplay1" disabled><br>

    <label for="textInput2">Enter Text 2:</label><br>
    <input type="text" id="textInput2"><br>

    <label for="timeDisplay2">Time 2:</label><br>
    <input type="text" id="timeDisplay2" disabled><br>

    <button type="submit" id="submitButton">Submit</button>
</form>


<script>
// Function to get current time in HH:MM:SS format
function getCurrentTime() {
    var now = new Date();
    var hours = now.getHours().toString().padStart(2, '0');
    var minutes = now.getMinutes().toString().padStart(2, '0');
    var seconds = now.getSeconds().toString().padStart(2, '0');
    return hours + ':' + minutes + ':' + seconds;
}

// Get the text input and time display elements for Text Field 1
var textInput1 = document.getElementById('textInput1');
var timeDisplay1 = document.getElementById('timeDisplay1');

// Event listener for text input 1
textInput1.addEventListener('input', function() {
    // Update time display 1 with current time
    timeDisplay1.value = getCurrentTime();
});

// Get the text input and time display elements for Text Field 2
var textInput2 = document.getElementById('textInput2');
var timeDisplay2 = document.getElementById('timeDisplay2');

// Event listener for text input 2
textInput2.addEventListener('input', function() {
    // Update time display 2 with current time
    timeDisplay2.value = getCurrentTime();
});

// Event listener for submit button
document.getElementById('submitButton').addEventListener('click', function() {
    // Get entered text values
    var text1 = textInput1.value;
    var text2 = textInput2.value;
    
    // Get entry times
    var time1 = timeDisplay1.value;
    var time2 = timeDisplay2.value;
    
    // Create JSON object with text and time values
    var jsonData = {
        "text1": text1,
        "time1": time1,
        "text2": text2,
        "time2": time2
    };
    // Get CSRF token from meta tag
    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    // Send AJAX request to save data
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/save-data', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken); // Include CSRF token in headers

    xhr.onload = function() {
        if (xhr.status == 200) {
            alert('Data saved successfully');
        } else {
            alert('Error occurred while saving data');
        }
    };
    xhr.send(JSON.stringify(jsonData));
});
</script>

</body>
</html>
