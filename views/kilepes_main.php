<h2><br><?= $viewData['uzenet']?><br></h2>
<script>
    function Message(messageString){
        this.messageString = messageString;

        alert(this.messageString);
    }

    let message = new Message('Sikeres kil�p�s! |Ez egy JS objektumb�l j�tt �zenet|');
    message.messageString();
</script>
