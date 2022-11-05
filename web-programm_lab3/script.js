let new_line=0;

function newTable(){
    if (document.getElementById('table') !=null){
        alert("Таблица уже существует!");

    } else{
        let tb = document.createElement('table');
        tb.setAttribute('id','table')
        document.getElementById("add").removeAttribute("disabled");
        document.body.append(tb);
        new_line++ ;

        if (new_line==1){
            document.getElementById("delete").removeAttribute("disabled");
            document.getElementById("number").removeAttribute("disabled");
        }

        let insert_row = tb.insertRow();
        insert_row.insertCell().append(new_line);
        insert_row.insertCell().append("Обожаю веб-программирование 👩🏼‍💻");
    }
}

function addLine(){
    new_line++ ;

    if (new_line==1){
        document.getElementById("delete").removeAttribute("disabled");
        document.getElementById("number").removeAttribute("disabled");
    }

    let tb = table.insertRow();
    tb.insertCell().append(new_line);
    tb.insertCell().append("Обожаю веб-программирование 👩🏼‍💻");

    
}
function deleteLine(){
    let table = document.querySelector('table');
    let id_line = document.getElementById('number').value;
    let id_del = 0;

    if (id_line == ""){
        alert("Введите число!");
        return null;
    }

    for (var i = 0; i < table.rows.length; i++){
        let id_tb = document.querySelector('table').rows[i].cells[0].innerHTML;
        id_del++;
        if (id_tb == id_line){
            table.deleteRow(id_del-1);
            id_del = 0;
            return null;
        } 
    }

    alert("Такого номера строки не существует! Попробуйте снова.");
}