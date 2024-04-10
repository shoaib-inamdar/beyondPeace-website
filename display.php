<html>
<body>
    <h2>Submitted Values:</h2>
    <?php
        // Retrieve submitted values from POST data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $options = $_POST['options'];

        // Display submitted values
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Number: $number</p>";
        echo "<p>Options: $options</p>";
    ?>

    <button onclick="generateNumber()">Generate ID</button>
    <p id="generated_number"></p>

    <script>
        // Function to generate a random 10-digit number
        function generateNumber() {
            const generatedNumber = Math.floor(1000000000 + Math.random() * 9000000000);
            document.getElementById('generated_number').textContent = 'Generated ID: ' + generatedNumber;
        }
    </script>
</body>
</html>
