<!DOCTYPE html>
<html>

    <head>
        <meta charset:"UTF-8" />
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        
        <title>DDOS Attacks</title>
    </head>

    <body>

        <nav>
            <a href="index.php">Overview</a>
            <a href="Volume_atk.php">Volume Attack</a>
            <a href="Protocol_atk.php"><strong>Protocol Attack</strong></a>
            <a href="App_atk.php">App Layer Attack</a>
        </nav>
        
        
        <br/><br/>


        <main>
            
            <figure>
                <img src="img/Handshake.png" alt="Three-Way Handshake" id="resize">
            </figure>
            
            <article>
                <h1>Protocol Attack</h1>
                <p>A protocl attack focuses on exploiting a networking protocol in order to crash a system. An example of this is a SYN flood. In a SYN flood a malicous user exploits a TCP connections "three-way handshake." </p>
                <p>When a TCP connection is established the first system requests a connection, followed by the recieving system sending a confirmation, which is lastly followed by the initial system sending a confirmation.</p>
                <p>In order to exploit the TCP handshake the malicous user will spam the system with TCP connection requests, then not respond to the confirmation. This essentially leaves the system in limbo waiting for a response.</p>
                <p>Since this is done on such a large scale it will consume all of the systems resources making it impossible for any new connections to be made. <a href="https://www.imperva.com/learn/ddos/syn-flood/">Source</a></p>
            </article>
        </main>


        <br/><br/>
        
        
        <footer>
           CST336 internet Programming. 2020&copy; Janes <br/>
           <button type="button" onclick="alert('Hello!')">Hello</button>
        </footer>

        
    </body>


</html>