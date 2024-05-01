

let dogs_ids = document.querySelectorAll(".dog_id");
console.log(dogs_ids);

let cards = document.querySelectorAll(".card");
console.log(cards);

let buttons = document.querySelectorAll(".adopt");
console.log(buttons);

for (let i = 0; i < buttons.length; i++) {
    const button = buttons[i];
    console.log(button);
    button.addEventListener("click", function () {
        //console.log(typeof (button));
        //console.log("indice", i);
        //console.log("bottone", button.id);
        const dog_id = button.id;
        /* const form = new FormData();
        form.append('id', 'dog_id');
        axios.post('./delete_dog.php', form, { headers: { "Content-type": "multipart/form-data" } })
            .then(function (response) {
                console.log(response);
            });
        axios
            .post("./delete_dog.php", { id: dog_id }, { headers: { "Content-type": "application/json" } })
            .then(response => {
                console.log(response);
                console.log(response.data);
            })
            .catch(error => {
                console.log(error);
            }) */
    })
}
