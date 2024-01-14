<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disclaimer</title>

    <style>
        #header {text-align: center; font-family: Arial; border: 2px solid black; margin: auto; background-color: rgb(224, 221, 221);}

        #main {border: 2px solid black; height: 300px; padding: 5px; background-color: rgb(169, 169, 177); overflow: auto;}

        #divbutton {text-align: center;}

        button {background-color: rgb(118, 236, 252); border-radius: 20px; border-width: 1px; padding: 10px; transition: box-shadow 0.15s;}

        button:hover {cursor: pointer; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.20);}

        button:active {background-color: rgb(138, 232, 245);}

        #footer {text-align: center;}
    </style>

</head>
<body>

    <div id="header">
        <header>
            <h1> Readable Disclaimer </h1>
        </header>
    </div>

    <main>
        <div id="main">
            <!-- Disclaimers from https://smallbiztrends.com/2023/07/disclaimer-examples.html?expand_article=1 -->
            <p>
                Readable makes no representation or warranty, express or implied, regarding the accuracy, completeness, reliability, or availability of the content on this site. The use of the information is at the user’s own risk.<br>
                <br>
                This website may contain links to third-party websites or content. These links are provided for convenience only, and Readable does not endorse, warrant, or assume liability for the content or practices of these third-party sites.<br><br>
                Readable may update, modify, or remove any information on this website without prior notice. It is the user’s responsibility to stay informed of any changes.<br><br>
                The content on this website does not constitute financial, legal, medical, or any other professional advice. Users should consult with the relevant professionals for specific advice related to their situation.<br><br>
                This disclaimer shall be governed by and construed in accordance with the laws of the United States of America, and any disputes arising out of or in connection with this disclaimer shall be subject to the exclusive jurisdiction of the courts in the United States of America.
            </p>
        </div>

        <br>

        <div id="divbutton">
            <!-- Will take user to main business site once created -->
            <button> 
                <a href="index.php">Go to  Main Site</a>
            </button>
        </div>
        
        
    </main>
    <br><br><br>
    
    <?php
        include "../footer.php";
    ?>
</body>
</html>