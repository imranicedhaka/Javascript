<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Two Text Fields and a Button</title>
<meta name="csrf-token" content="{{ csrf_token() }}"> <!-- Add this line to include the CSRF token -->
</head>
<body>

<form id="myForm">
  <label for="textfield1">Text Field 1:</label><br>
  <input type="text" id="textfield1" name="textfield1"><br>
  <label for="textfield2">Text Field 2:</label><br>
  <input type="text" id="textfield2" name="textfield2"><br><br>
  <button type="submit">Submit</button>
</form>

<script>
document.getElementById('myForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission
    
    // Get values from text fields
    var text1 = document.getElementById('textfield1').value;
    var text2 = document.getElementById('textfield2').value;
    
    // Create JSON object
    var jsonData = {
        "text1": text1,
        "text2": text2
    };
    
    // Display JSON alert
    var confirmation = confirm(JSON.stringify(jsonData));
    
    // If user clicks "OK", send AJAX request to save data
    if (confirmation) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '/save-data', true);
        xhr.setRequestHeader('Content-Type', 'application/json');
        
        // Include CSRF token in request header
        var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
        
        xhr.onload = function () {
            if (xhr.status == 200) {
                alert('Data saved successfully');
            } else {
                alert('Error occurred while saving data');
            }
        };
        xhr.send(JSON.stringify(jsonData));
    }
});
</script>

</body>
</html>
