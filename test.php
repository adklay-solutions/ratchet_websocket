<script>
    console.log("test initilisation");

    var conn = new WebSocket('ws://localhost:8080');
    conn.onopen = function (e) {
        console.log("Connection established!");
    };

    conn.onerror = function (e) {
        console.log("erreur connexion:", e)
    }

    conn.onmessage = function (e) {
        console.log(e.data);
    };
</script>