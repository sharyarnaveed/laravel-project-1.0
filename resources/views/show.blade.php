<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confession Detail</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    /* General page setup */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

/* Container to center the content */
.container {
    width: 80%;
    max-width: 900px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

/* Header */
header {
    text-align: center;
    margin-bottom: 30px;
}

h1 {
    font-size: 2.5rem;
    color: #333;
}

/* Confession detail section */
.confession-details {
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #fafafa;
}

.confession-header {
    margin-bottom: 20px;
}

.confession-title {
    font-size: 1.8rem;
    color: #2c3e50;
}

.confession-author {
    font-size: 1rem;
    color: #7f8c8d;
}

/* Confession body */
.confession-body {
    margin-bottom: 20px;
}

.confession-content {
    font-size: 1.2rem;
    line-height: 1.6;
    color: #34495e;
}

/* Confession footer */
.confession-footer {
    text-align: right;
    font-size: 0.9rem;
    color: #95a5a6;
}

.confession-date {
    font-weight: bold;
}

/* Footer */
footer {
    text-align: center;
    margin-top: 40px;
    font-size: 0.9rem;
    color: #95a5a6;
}

footer p {
    margin: 0;
}

</style>
<body>

    <div class="container">
        <header>
            <h1>Confession Details</h1>
        </header>

        <section class="confession-details">
            <div class="confession-header">
                <h2 class="confession-title">{{$confession['thecon']}}</h2>

            </div>

            <div class="confession-body">
                <h3>Confession:</h3>
                <p class="confession-content">
                  {{$confession['confession']}}
                </p>
            </div>

            <div class="confession-footer">
                <p class="confession-date">Submitted on: <strong>{{$confession['created_at']}}</strong></p>
            </div>
        </section>

        <footer>
            <p>&copy; 2024 Confession Portal</p>
        </footer>
    </div>

</body>
</html>
