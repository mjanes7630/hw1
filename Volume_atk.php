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
            <a href="Volume_atk.php"><strong>Volume Attack</strong></a>
            <a href="Protocol_atk.php">Protocol Attack</a>
            <a href="App_atk.php">App Layer Attack</a>
        </nav>
        
        
        <br/><br/>


        <main>
            
            <figure>
                <img src="img/Volume.gif" alt="Volume based attack" id="resize">
            </figure>

            <article>
                <h1>Volumetric Based Attack</h1>
                <p>Volumetric based attacks are when a netowrk system recieves an unmanageable amount of requests. The sheer amount of requests pulls the majority of the system's resources to deal with.</p>
                <p>The requests are typically so large that even by pulling all resources it is still unmanageable, which results in the system crashing.</p>
                <p>One of the most well known Volumetic based attacks is called the ping of death. This is caused by a malicous source creating a packet that is larger than is allowed.</p>
                <p>They then send that packet to the network, and upon ariving the network tries to put the packet back together. This then leads to a memory overflow and the system crashing.</p>
                <p>The packet set is a ping packet thousands of times larger than a normal ping. <a href="https://www.ionos.com/digitalguide/server/security/ping-of-death/#:~:text=A%20ping%20of%20death%20is,data%20packet%20to%20the%20target.&text=And%20lastly%2C%20volumetric%20attacks%20inflict,as%20well%20as%20UDP%20floods.">Source</a></p>
            </article>
        </main>


        <br/><br/>
        
        
        <footer>
           CST336 internet Programming. 2020&copy; Janes <br/>
           <button type="button" onclick="alert('Hello!')">Hello</button>
        </footer>

        
    </body>


</html>