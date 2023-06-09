<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prelim Exam - Ivan Gueco</title>

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">
</head>
<body>
    <div class="center">
        <div class="log-form-container">
            <div class="log-form-title">Log Form</div>
            <form id="log_form" action="./assets/php/Insert-action.php" class="log-form-forms" method="post" autocomplete="off">
                <div class="basic-information-section">
                    <div class="basic-info-container">
                        <label for="firstName">First Name:</label>
                        <input type="text" name="first_name" id="firstName">
                        <p class="error invi">* This field is required</p>
                    </div>
                    <div class="basic-info-container">
                        <label for="middleName">Middle Name:</label>
                        <input type="text" name="middle_name" id="middleName">
                    </div>
                    <div class="basic-info-container">
                        <label for="lastName">Last Name:</label>
                        <input type="text" name="last_name" id="lastName">
                        <p class="error invi">* This field is required</p>
                    </div>
                </div>
                <div class="transaction-section">
                    <label for="">Transaction Type: </label>
                    <label for="">In</label>
                    <input type="checkbox" name="enum_trans_type[]" id="inCheckBox" value="In">
                    <label for="">Out</label>
                    <input type="checkbox" name="enum_trans_type[]" id="outCheckBox" value="Out">
                    <p class="checkbox-error invi">* Check one of these boxes</p>
                </div>
                <div class="php-actions">
                    <button>Submit Data</button>
                    <a href="./assets/php/Datalist.php?search_table=">View Data</a>
                </div>
            </form>
        </div>
    </div>
    <script src="./assets/js/index.js"></script>
</body>
</html>