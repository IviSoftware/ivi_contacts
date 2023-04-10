let deleteBtn = document.querySelectorAll(".delete");
let deleteButtons = Array.from(deleteBtn);
let rootModal = document.querySelector(".rootModal");
let stateModal = false;

function deleteModal(){
    let container = document.querySelector(".containerModal");
    container.remove();
}

function phpFetch(id){
    fetch(`http://localhost/php_contactos/crud_files/delete.php?id=${id}`)
    .then(resp => resp.json() )
    .then(respJson => {
        if(respJson.result){
            location.reload();
        }else{
            console.log("Hubo un error")
        }
    })
    .catch(err => console.log("error: " + err))
}

function createForm(id){
    let form = document.createElement("div");
    form.id = "confirmDeleteForm";
    form.className = "confirmDeleteForm";

    let h3 = document.createElement("h3");
    h3.className="h3Form";
    let p = document.createElement("p");
    p.className="pForm"
    let button = document.createElement("button");
    button.className="buttonForm";

    p.innerHTML = "¿ Seguro que quieres borrar un contacto ?";

    button.type = "button";
    button.innerHTML= "Si borrar";
    button.name="btnDeleteConfirm";
    button.addEventListener("click",()=>{
        phpFetch(id);
    })

    form.appendChild(h3);
    form.appendChild(p);
    form.appendChild(button);

    return form;
}

function createModal(id){
    let divContainer = document.createElement("div");
    divContainer.className = "containerModal";
    let divModal = document.createElement("div");
    divModal.className = "modal";
    let form = createForm(id);

    rootModal.appendChild(divContainer);
    divContainer.appendChild(divModal);
    divModal.appendChild(form);

    divContainer.addEventListener("click",deleteModal);
}



deleteButtons.forEach((btnDelete)=>{
    btnDelete.addEventListener("click",()=>{
        let id = btnDelete.dataset.idcontact;
        
        stateModal = true;
        if(stateModal){
            createModal(id)
        }
    });
})



