(() => {
let form = document.querySelector('#form'),
    submitBtn = document.querySelector('.submit-btn'),
    formMsg = document.querySelector('.form-msg');

function hideformMsg() {
    formMsg.style.display = 'none';
}

function handleMail(e) {
    e.preventDefault();
    //console.log('!');

    let formdata = new FormData(form),
            maildata = {};

    // parse the form data (it's an iterable, so you have to do it this way)
    // and populate the maildata object with the input values (the formdata entries)
    for (let [key, value] of formdata.entries()) {
        maildata[key] = value;
    }

    //console.log(maildata);
    //console.log(JSON.stringify(maildata));

    let url = './includes/contact/data_contact.php';

    fetch(url, {
            method: 'POST',
            headers: {
                'Accept': 'application/json, text/plain, */*',
                'Content-type': 'application/json'
            },

            body: JSON.stringify(maildata)
        })
    .then(res => res.json())
    .then(data => {
        console.log(data);
        formMsg.firstChild.textContent = data;
        formMsg.style.display = 'flex';
        setTimeout(hideformMsg, 4000);
    })
    .catch(err => console.log(err));
} 

submitBtn.addEventListener('click', handleMail);
})();