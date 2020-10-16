<h2><br><?= $viewData['uzenet']?><br></h2>
<script>
    function Message(messageString){
        this.messageString = messageString;

        alert(this.messageString);
    }

    let message = new Message('Sikeres kilépés! |Ez egy JS objektumból jött üzenet|');
    message.messageString();
</script>
