
</body>
</html>
<script>
    function ajax(){
        var xhr = new XMLHttpRequest(),
            method = "GET",
            url = "data.php";
        xhr.open(method, url, true);
        xhr.onreadystatechange = function () {
            if(xhr.readyState === 4 && xhr.status === 200) {
                document.getElementById('chat').innerHTML= xhr.responseText;
            }
        };
        xhr.send();
    }
    setInterval(function(){ajax()},200000);
</script>