function dwl() {
    $.ajax({
         type: "POST",
         url: 'listBook.php',
         data:{action:'call_this'},
         success:function(html) {
           alert(html);
         }

    });
}