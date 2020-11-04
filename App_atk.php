<!DOCTYPE html>
<html>

    <head>
        <meta charset:"utf-8" />
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        
        <title>DDOS Attacks</title>
    </head>

    <body>

        <nav>
            <a href="index.php">Overview</a>
            <a href="Volume_atk.php">Volume Attack</a>
            <a href="Protocol_atk.php">Protocol Attack</a>
            <a href="App_atk.php"><strong>App Layer Attack</strong></a>
        </nav>
        
        
        <br/><br/>


        <main>
            
            <figure id="corrected">
                <img src="img/App_atk.jpg" alt="Databases on fire" id="resize">
            </figure>
            
            <article>
                <h1>Application Layer Attack</h1>
                <p>A application layer attack is a bit more nuanced then volumetric based or Protocol attacks, but it requires less bandwidth to have the same detrimental affect.</p>
                <p>In an application layer attack a malicious user targets the network servers with numerous requests. </p>
                <p>While the requests seem innocent enough what they are meant to do is force the server to querry its resoucres, such as its databases.</p>
                <p>By doing this it locks up the servers resources making it near impossible for new requests to come through. <a href="https://www.cloudflare.com/learning/ddos/application-layer-ddos-attack/">Source</a></p>
            </article>
        </main>


        <br/><br/>
        
        
        <footer>
           CST336 internet Programming. 2020&copy; Janes <br/>
           <button type="button" onclick="alert('Hello!')">Hello</button>
        </footer>
        
    </body>


</html>