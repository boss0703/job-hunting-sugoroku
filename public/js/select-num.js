function selectNum(snum) {
    var div = document.getElementById("users_name");
    
    var num = parseInt(snum);
    for(i = 0; i < num; i++) {
        var input = document.createElement('input');
        input.type = 'text';
        input.id = 'username' + (i+1);
        input.placeholder = 'ユーザー' + (i+1);
        div.appendChild(input);
    }
}