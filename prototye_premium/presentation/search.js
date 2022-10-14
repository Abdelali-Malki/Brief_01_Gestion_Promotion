let table = document.querySelector("#tbody");

document.getElementById("search").addEventListener("keyup", function(){

    let form = new FormData();
    form.append("search", "POST");
    form.append("nom", search.value);

    fetch("../business/search.php",{
        method: "POST",
        body: form
    }).then((res=>{
        return res.json();
    })).then((data)=>{
        console.log(data)
        table.innerHTML = "";
        for(var i = 0; i < data.length; i++){
            table.innerHTML += `
            <tr>
                <td>${data[i]["nom"]}</td>
                <td>
                <a href='updatepromotion.php?edit_id=${data[i]["id_promotion"]}'>Edit</a>
                <a href='../business/delete.php?delete_id=${data[i]["id_promotion"]}'> Delete</a>
                </td>
            </tr>
            `;
        }
    })
})