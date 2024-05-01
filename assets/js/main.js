let dogs_ids = document.querySelectorAll(".dog_id");
console.log(dogs_ids);

let cards = document.querySelectorAll(".card");
console.log(cards);

let buttons = document.querySelectorAll(".delete");
console.log(buttons);

for (let i = 0; i < buttons.length; i++) {
    const button = buttons[i];
    console.log(button);
    button.addEventListener("click", function () {
        //console.log(typeof (button));
        //console.log("indice", i);
        //console.log("bottone", button.id);
        const dog_id = button.id;
        const dogData = { id: dog_id }
        axios.
            post("./delete_dog.php", dogData, { headers: { "Content-Type": "multipart/form-data" } })
            .then(response => {
                console.log(response);
                window.location.reload();
            })
    })
}
