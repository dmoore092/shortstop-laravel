@extends('master')

@section('title', 'Athletic Prospects | Home')

@section('content')

<div id="body-main">
    <div id="content">
        <section>
            <?php
                try{
                    $conn = mysqli_connect('127.0.0.1', 'root', 'y#GbqXtBGcy!z3Cf', 'shortstop');
                    //echo "Connected successfully";
                    $query = "SELECT header, text FROM about_us ORDER BY id DESC LIMIT 1;";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<h2>".nl2br($row['header'])."</h2>";
                        echo "<p>".nl2br($row['text'])."</p>";
                        echo "<hr>";
                    }
                }
                catch(exception $e){
                    //echo "Connection failed: " . $e->getMessage();
                }

            ?>
        </section>

    </div><!-- end of #content -->
    <div id="center-area">
        <a href = "register.php"><img src = "/images/mainbanner.jpg" alt="main banner" /></a>
    </div>



@endsection
